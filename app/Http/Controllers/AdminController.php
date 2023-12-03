<?php

namespace App\Http\Controllers;

use App\Models\DetailDisposisiDengHormat;
use App\Models\DetailDisposisiDtrs;
use App\Models\LembarDisposisi;
use App\Models\SuratKeluar;
use App\Models\SuratMasuk;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        return view('pages.index')->with(['user' => $user]);
    }
    public function suratMasuk()
    {
        $dataSurat = SuratMasuk::all();
        return view('pages.suratMasuk')->with(['suratMasuk' => $dataSurat]);
    }

    public function storeSuratMasuk(Request $request)
    {
        // $request->validate(
        //     [
        //         'gambar' => 'required|mimes:jpeg,png,jpg|max:5000',
        //     ],
        //     [
        //         'gambar.required' => 'File Tidak Boleh Kosong',
        //         'gambar.max' => 'File Tidak Boleh Lebih Dari 2MB',
        //         'gambar.mimes' => 'Format File Harus JPG,PNG',
        //     ]
        // );
        if ($request->hasFile('berkas')) {
            $path = $request->file('berkas')->store('uploads/suratMasuk');
        } else {
            $path = 'berkas kosong';
        }
        // dd($path);
        $suratMasuk = new SuratMasuk;
        $suratMasuk->nomor_berkas = $request->nomor_berkas;
        $suratMasuk->alamat_pengirim = $request->alamat;
        $suratMasuk->tanggal = $request->tglSuratMasuk;
        $suratMasuk->nomor = $request->nomorSuratMasuk;
        $suratMasuk->perihal = $request->perihal;
        $suratMasuk->nomor_petunjuk = $request->nomor_petunjuk;
        $suratMasuk->nomor_paket = $request->nomor_paket;
        $suratMasuk->berkas = $path;
        $suratMasuk->save();

        $idSurat = $suratMasuk->id;
        // SuratMasuk::create([
        //     'nomor_berkas' => $request->nomor_berkas,
        //     'alamat_pengirim' => $request->alamat,
        //     'tanggal' => $request->tglSuratMasuk,
        //     'nomor' => $request->nomorSuratMasuk,
        //     'perihal' => $request->perihal,
        //     'nomor_petunjuk' => $request->nomor_petunjuk,
        //     'nomor_paket' => $request->nomor_paket,
        //     'berkas' => $path,
        // ]);

        $suratDetail = new LembarDisposisi;
        $suratDetail->id_surat_masuk = $idSurat;
        $suratDetail->surat_dari = $request->surat_dari;
        $suratDetail->tanggal_surat = $request->tgl_surat;
        $suratDetail->nomor_surat = $request->nomor_surat;
        $suratDetail->diterima_tanggal = $request->tgl_diterima;
        $suratDetail->nomor_agenda = $request->nomor_agenda;
        $suratDetail->sifat = $request->sifat;
        $suratDetail->hal = $request->hal;
        $suratDetail->catatan = $request->catatan;
        $suratDetail->save();

        $idsuratDetail = $suratDetail->id;

        // LembarDisposisi::create([
        //     'id_surat_masuk' => $suratMasuk->id,
        //     'surat_dari' => $request->surat_dari,
        //     'tanggal_surat' => $request->tgl_surat,
        //     'nomor_surat' => $request->nomor_surat,
        //     'diterima_tanggal' => $request->tgl_diterima,
        //     'nomor_agenda' => $request->nomor_agenda,
        //     'sifat' => $request->sifat,
        //     'hal' => $request->hal,
        //     'catatan' => $request->catatan,
        // ]);

        $checkboxValues = $request->input('dtrskepada', []);
        $checkboxValuesHormat = $request->input('dng_hormat', []);


        $textInputValues = $request->input('dtrskepada_values', []);
        $textInputValuesHormat = $request->input('dng_lainnya', []);
        $combinedValues = [];
        $combinedValuesHormat = [];
        foreach ($checkboxValues as $checkboxValue) {
            $combinedValues[] = [
                'checkbox' => $checkboxValue,
                'text_input' => $textInputValues[$checkboxValue] ?? null,
            ];
        }
        foreach ($checkboxValuesHormat as $checkboxValueHormat) {
            $combinedValuesHormat[] = [
                'checkboxHormat' => $checkboxValueHormat,
                'text_inputHormat' => $textInputValuesHormat[$checkboxValueHormat] ?? null,
            ];
        }

        foreach ($combinedValues as $combinedValue) {
            $checkboxValue = $combinedValue['checkbox'];
            $textInputValue = $combinedValue['text_input'];
            DetailDisposisiDtrs::create([
                'id_lembards' => $idsuratDetail,
                'idtrsk_ke' => $checkboxValue,
                'name_dtrsk' => $textInputValue,
            ]);
        }

        foreach ($combinedValuesHormat as $combinedValueHormat) {
            $checkboxValueHormat = $combinedValueHormat['checkboxHormat'];
            $textInputValueHormat = $combinedValueHormat['text_inputHormat'];

            DetailDisposisiDengHormat::create([
                'id_lembards' => $idsuratDetail,
                'idng_hormat' => $checkboxValueHormat,
                'name_hormat' => $textInputValueHormat,
            ]);
        }
    }

    public function lembarDisposisi($idLembar)
    {
        $dataDisposisiPertama = LembarDisposisi::where('id', $idLembar)->first();
        $dataTrskn = DetailDisposisiDtrs::where('id_lembards', $idLembar)->get();
        $dataDngHormat = DetailDisposisiDengHormat::where('id_lembards', $idLembar)->get();
        return view('pages.suratMasuk.lembarDisposisi')->with([
            'disposisi' => $dataDisposisiPertama,
            'dataTrskn' => $dataTrskn,
            'dataDngHormat' => $dataDngHormat
        ]);
    }

    public function undangan()
    {
        $data = SuratKeluar::where('tipe_surat', 'Undangan')->get();
        return view('pages.suratKeluar.undangan')->with(['suratKeluar' => $data]);
    }
    public function storeSuratkeluarUndangan(Request $request)
    {
        // $request->validate(
        //     [
        //         'gambar' => 'required|mimes:jpeg,png,jpg|max:5000',
        //     ],
        //     [
        //         'gambar.required' => 'File Tidak Boleh Kosong',
        //         'gambar.max' => 'File Tidak Boleh Lebih Dari 2MB',
        //         'gambar.mimes' => 'Format File Harus JPG,PNG',
        //     ]
        // );

        $data = [
            'nomor_surat' => $request->nomor_surat,
            'date' => $request->tglSuratKeluar,
            'lampiran' => $request->lampiran,
            'hal' => $request->hal,
            'nama_siswa' => $request->nama_siswa,
            'tgl_dilaksanakan' => $request->tgl_dilaksanakan,
            'waktu_dilaksanakan' => $request->waktu_dilaksanakan,
            'tempat_dilaksanakan' => $request->tempat_dilaksanakan,
            'nama_wali' => $request->nama_wali,
            'nip_wali' => $request->nip_wali,
        ];

        $pdf = Pdf::loadView('pages.suratKeluar.output.tmpUndangan', $data);
        $pdf->setPaper('a4');

        $filename = 'pdf_' . time() . 'Undangan.pdf';
        $directoryPath = 'uploads/suratKeluar/';
        if (!Storage::exists($directoryPath)) {
            Storage::makeDirectory($directoryPath, 0775, true, true);
        }
        $path = $directoryPath . $filename;
        Storage::put($path, $pdf->output());

        // return $pdf->download('output.pdf');

        $suratKeluar = new SuratKeluar;
        $suratKeluar->nomor_berkas = $request->nomor_berkas;
        $suratKeluar->alamat_penerima = $request->alamatPenerima;
        $suratKeluar->tanggal = $request->tglSuratKeluar;
        $suratKeluar->tipe_surat = $request->tipeSurat;
        $suratKeluar->perihal = $request->perihal;
        $suratKeluar->nomor_petunjuk = $request->nomor_petunjuk;
        $suratKeluar->nomor_paket = $request->nomor_paket;
        $suratKeluar->berkas = $path;
        $suratKeluar->save();

        return redirect('surat-keluar-undangan');
    }

    public function dispensasiSiswa()
    {
        $data = SuratKeluar::where('tipe_surat', 'Dispensasi Siswa')->get();
        return view('pages.suratKeluar.dispensasi_siswa')->with(['suratKeluar' => $data]);
    }

    public function storeSuratkeluarDispensasiSiswa(Request $request)
    {
        // $request->validate(
        //     [
        //         'gambar' => 'required|mimes:jpeg,png,jpg|max:5000',
        //     ],
        //     [
        //         'gambar.required' => 'File Tidak Boleh Kosong',
        //         'gambar.max' => 'File Tidak Boleh Lebih Dari 2MB',
        //         'gambar.mimes' => 'Format File Harus JPG,PNG',
        //     ]
        // );

        $data = [
            'nomor_surat' => $request->nomor_surat,
            'perihal' => $request->perihal,
            'date_perihal' => $request->date_perihal,
            'nomor_perihal' => $request->nomor_perihal,
            'nama_siswa' => $request->nama_siswa,
            'kelas_siswa' => $request->kelas_siswa,
            'keterangan' => $request->keterangan,
            'kegiatan' => $request->kegiatan,
            'waktu_dilaksanakan' => $request->waktu_dilaksanakan,
            'tgl_dilaksanakan' => $request->tgl_dilaksanakan,
            'tempat_dilaksanakan' => $request->tempat_dilaksanakan,
            'nama_kepala' => $request->nama_kepala,
            'nip_kepala' => $request->nip_kepala,
        ];

        $pdf = Pdf::loadView('pages.suratKeluar.output.tmpDispensasiSiswa', $data);
        // $filename = 'pdf_' . time() . '.pdf';
        // $directoryPath = 'public/uploads/suratKeluar/';
        // if (!Storage::exists($directoryPath)) {
        //     Storage::makeDirectory($directoryPath, 0775, true, true);
        // }
        // $path = $directoryPath . $filename;
        // Storage::put($path, $pdf->output());
        return $pdf->download('output.pdf');

        // if ($request->hasFile('berkas')) {
        //     $path = $request->file('berkas')->store('uploads/suratMasuk');
        // } else {
        //     $path = 'berkas kosong';
        // }
        // dd($path);
        // $suratKeluar = new SuratKeluar;
        // $suratKeluar->nomor_berkas = $request->nomor_berkas;
        // $suratKeluar->alamat_penerima = $request->alamatPenerima;
        // $suratKeluar->tanggal = $request->tglSuratKeluar;
        // $suratKeluar->tipe_surat = $request->tipeSurat;
        // $suratKeluar->perihal = $request->perihal;
        // $suratKeluar->nomor_petunjuk = $request->nomor_petunjuk;
        // $suratKeluar->nomor_paket = $request->nomor_paket;
        // $suratKeluar->berkas = $path;
        // $suratKeluar->save();

        // return redirect('surat-keluar-dispensasi');
    }

    public function dispensasiGuru()
    {
        $data = SuratKeluar::where('tipe_surat', 'Dispensasi Guru')->get();
        return view('pages.suratKeluar.dispensasi_guru')->with(['suratKeluar' => $data]);
    }

    public function storeSuratkeluarDispensasiGuru(Request $request)
    {
        // $request->validate(
        //     [
        //         'gambar' => 'required|mimes:jpeg,png,jpg|max:5000',
        //     ],
        //     [
        //         'gambar.required' => 'File Tidak Boleh Kosong',
        //         'gambar.max' => 'File Tidak Boleh Lebih Dari 2MB',
        //         'gambar.mimes' => 'Format File Harus JPG,PNG',
        //     ]
        // );

        $data = [
            'nomor_surat' => $request->nomor_surat,
            'nama_guru' => $request->nama_guru,
            'nip_guru' => $request->nip_guru,
            'pangkat_gol' => $request->pangkat_gol,
            'jabatan' => $request->jabatan,
            'perihal' => $request->perihalSurat,
            'nama_kepala' => $request->nama_kepala,
            'nip_kepala' => $request->nip_kepala,
            'tglSuratKeluar' => $request->tglSuratKeluar,
        ];

        $pdf = Pdf::loadView('pages.suratKeluar.output.tmpDispensasiGuru', $data);
        $filename = 'pdf_' . time() . '.pdf';
        $directoryPath = 'public/uploads/suratKeluar/';
        if (!Storage::exists($directoryPath)) {
            Storage::makeDirectory($directoryPath, 0775, true, true);
        }
        $path = $directoryPath . $filename;
        Storage::put($path, $pdf->output());
        // return $pdf->download('output.pdf');

        $suratKeluar = new SuratKeluar;
        $suratKeluar->nomor_berkas = $request->nomor_berkas;
        $suratKeluar->alamat_penerima = $request->alamatPenerima;
        $suratKeluar->tanggal = $request->tglSuratKeluar;
        $suratKeluar->tipe_surat = $request->tipeSurat;
        $suratKeluar->perihal = $request->perihal;
        $suratKeluar->nomor_petunjuk = $request->nomor_petunjuk;
        $suratKeluar->nomor_paket = $request->nomor_paket;
        $suratKeluar->berkas = $path;
        $suratKeluar->save();

        return redirect('surat-keluar-dispensasi-guru');
    }

    public function suratKeterangan()
    {
        $data = SuratKeluar::where('tipe_surat', 'Surat Keterangan')->get();
        return view('pages.suratKeluar.keterangan')->with(['suratKeluar' => $data]);
    }

    public function storeSuratkeluarKeterangan(Request $request)
    {
        // $request->validate(
        //     [
        //         'gambar' => 'required|mimes:jpeg,png,jpg|max:5000',
        //     ],
        //     [
        //         'gambar.required' => 'File Tidak Boleh Kosong',
        //         'gambar.max' => 'File Tidak Boleh Lebih Dari 2MB',
        //         'gambar.mimes' => 'Format File Harus JPG,PNG',
        //     ]
        // );

        $data = [
            'nomor_surat' => $request->nomor_surat,
            'nama_guru' => $request->nama_guru,
            'nip_guru' => $request->nip_guru,
            'pangkat_gol' => $request->pangkat_gol,
            'jabatan' => $request->jabatan,
            'perihal' => $request->perihalSurat,
            'nama_kepala' => $request->nama_kepala,
            'nip_kepala' => $request->nip_kepala,
            'tglSuratKeluar' => $request->tglSuratKeluar,
        ];

        $filename = 'pdf_' . time() . 'Undangan.pdf';
        $pdf = Pdf::loadView('pages.suratKeluar.output.tmpKeterangan', $data);
        $directoryPath = 'uploads/suratKeluar/';
        if (!Storage::exists($directoryPath)) {
            Storage::makeDirectory($directoryPath, 0775, true, true);
        }
        $path = $directoryPath . $filename;
        Storage::put($path, $pdf->output());
        // return $pdf->download('output.pdf');

        // if ($request->hasFile('berkas')) {
        //     $path = $request->file('berkas')->store('uploads/suratMasuk');
        // } else {
        //     $path = 'berkas kosong';
        // }
        // dd($path);
        $suratKeluar = new SuratKeluar;
        $suratKeluar->nomor_berkas = $request->nomor_berkas;
        $suratKeluar->alamat_penerima = $request->alamatPenerima;
        $suratKeluar->tanggal = $request->tglSuratKeluar;
        $suratKeluar->tipe_surat = $request->tipeSurat;
        $suratKeluar->perihal = $request->perihal;
        $suratKeluar->nomor_petunjuk = $request->nomor_petunjuk;
        $suratKeluar->nomor_paket = $request->nomor_paket;
        $suratKeluar->berkas = $path;
        $suratKeluar->save();

        return redirect('surat-keluar-keterangan');
    }

    public function suratKeteranganPendampingan()
    {
        $data = SuratKeluar::where('tipe_surat', 'Pendampingan')->get();
        return view('pages.suratKeluar.ktrPendampingan')->with(['suratKeluar' => $data]);
    }

    public function storeSuratkeluarKeteranganPendampingan(Request $request)
    {
        // $request->validate(
        //     [
        //         'gambar' => 'required|mimes:jpeg,png,jpg|max:5000',
        //     ],
        //     [
        //         'gambar.required' => 'File Tidak Boleh Kosong',
        //         'gambar.max' => 'File Tidak Boleh Lebih Dari 2MB',
        //         'gambar.mimes' => 'Format File Harus JPG,PNG',
        //     ]
        // );

        $data = [
            'nomor_surat' => $request->nomor_surat,
            'nama_bertanda' => $request->nama_bertanda,
            'nip_bertanda' => $request->nip_bertanda,
            'jabatan_bertanda' => $request->jabatan_bertanda,
            'nama_diterangkan' => $request->nama_diterangkan,
            'nip_diterangkan' => $request->nip_diterangkan,
            'jabatan_diterangkan' => $request->jabatan_diterangkan,
            'perihal' => $request->perihal,
            'list_perihal' => $request->list_perihal,
            'nama_kepala' => $request->nama_kepala,
            'nip_kepala' => $request->nip_kepala,
            'tglSuratKeluar' => $request->tglSuratKeluar,
        ];

        $pdf = Pdf::loadView('pages.suratKeluar.output.tmpKtrPendampingan', $data);
        $filename = 'pdf_' . time() . 'Pendampingan.pdf';
        $directoryPath = 'public/uploads/suratKeluar/';
        if (!Storage::exists($directoryPath)) {
            Storage::makeDirectory($directoryPath, 0775, true, true);
        }
        $path = $directoryPath . $filename;
        Storage::put($path, $pdf->output());
        // return $pdf->download('output.pdf');

        $suratKeluar = new SuratKeluar;
        $suratKeluar->nomor_berkas = $request->nomor_berkas;
        $suratKeluar->alamat_penerima = $request->alamatPenerima;
        $suratKeluar->tanggal = $request->tglSuratKeluar;
        $suratKeluar->tipe_surat = $request->tipeSurat;
        $suratKeluar->perihal = $request->perihal;
        $suratKeluar->nomor_petunjuk = $request->nomor_petunjuk;
        $suratKeluar->nomor_paket = $request->nomor_paket;
        $suratKeluar->berkas = $path;
        $suratKeluar->save();

        return redirect('surat-keluar-keterangan-pendampingan');
    }

    public function suratKeteranganPindah()
    {
        $data = SuratKeluar::where('tipe_surat', 'Pindah Sekolah')->get();
        return view('pages.suratKeluar.ktrSuratPindahSekolah')->with(['suratKeluar' => $data]);
    }

    public function storeSuratkeluarKeteranganPindah(Request $request)
    {
        // $request->validate(
        //     [
        //         'gambar' => 'required|mimes:jpeg,png,jpg|max:5000',
        //     ],
        //     [
        //         'gambar.required' => 'File Tidak Boleh Kosong',
        //         'gambar.max' => 'File Tidak Boleh Lebih Dari 2MB',
        //         'gambar.mimes' => 'Format File Harus JPG,PNG',
        //     ]
        // );

        $data = [
            'nomor_surat' => $request->nomor_surat,
            'nama_bertanda' => $request->nama_bertanda,
            'tmp_tgl_bertanda' => $request->tmp_tgl_bertanda,
            'jns_klm_bertanda' => $request->jns_klm_bertanda,
            'kelas_bertanda' => $request->kelas_bertanda,
            'jrs_bertanda' => $request->jrs_bertanda,
            'nama_diterangkan' => $request->nama_diterangkan,
            'pkj_diterangkan' => $request->pkj_diterangkan,
            'alamat' => $request->alamat,
            'perihal' => $request->perihalSurat,
            'catatan' => $request->catatan,
            'nama_kepala' => $request->nama_kepala,
            'nip_kepala' => $request->nip_kepala,
            'tglSuratKeluar' => $request->tglSuratKeluar,
        ];

        $pdf = Pdf::loadView('pages.suratKeluar.output.tmpSuratPindahSekolah', $data);
        $filename = 'pdf_' . time() . 'PindahSekolah.pdf';
        $directoryPath = 'public/uploads/suratKeluar/';
        if (!Storage::exists($directoryPath)) {
            Storage::makeDirectory($directoryPath, 0775, true, true);
        }
        $path = $directoryPath . $filename;
        Storage::put($path, $pdf->output());
        // return $pdf->download('output.pdf');

        $suratKeluar = new SuratKeluar;
        $suratKeluar->nomor_berkas = $request->nomor_berkas;
        $suratKeluar->alamat_penerima = $request->alamatPenerima;
        $suratKeluar->tanggal = $request->tglSuratKeluar;
        $suratKeluar->tipe_surat = $request->tipeSurat;
        $suratKeluar->perihal = $request->perihal;
        $suratKeluar->nomor_petunjuk = $request->nomor_petunjuk;
        $suratKeluar->nomor_paket = $request->nomor_paket;
        $suratKeluar->berkas = $path;
        $suratKeluar->save();

        return redirect('surat-keluar-keterangan-pindah');
    }

    public function suratKeteranganLBTHSiswa()
    {
        $data = SuratKeluar::where('tipe_surat', 'Lolos Butuh Siswa')->get();
        return view('pages.suratKeluar.ktrLolosButuhSiswa')->with(['suratKeluar' => $data]);
    }

    public function storeSuratkeluarKeteranganLBTHSiswa(Request $request)
    {
        // $request->validate(
        //     [
        //         'gambar' => 'required|mimes:jpeg,png,jpg|max:5000',
        //     ],
        //     [
        //         'gambar.required' => 'File Tidak Boleh Kosong',
        //         'gambar.max' => 'File Tidak Boleh Lebih Dari 2MB',
        //         'gambar.mimes' => 'Format File Harus JPG,PNG',
        //     ]
        // );

        $data = [
            'nomor_surat' => $request->nomor_surat,
            'nama_bertanda' => $request->nama_bertanda,
            'tmp_tgl_bertanda' => $request->tmp_tgl_bertanda,
            'asal_sekolah' => $request->asal_sekolah,
            'alamat' => $request->alamat,
            'perihal' => $request->perihalSurat,
            'melapor' => $request->melapor,
            'tgl_melapor' => $request->tgl_melapor,
            'ket_melapor' => $request->ket_melapor,
            'pmsk_srt_pindah' => $request->pmsk_srt_pindah,
            'tgl_pmsk' => $request->tgl_pmsk,
            'ket_pmsk' => $request->ket_pmsk,
            'pengshan' => $request->pengshan,
            'tgl_pengshan' => $request->tgl_pengshan,
            'ket_pengshan' => $request->ket_pengshan,
            'sah_diterima' => $request->sah_diterima,
            'tgl_sahDiterima' => $request->tgl_sahDiterima,
            'ket_sahDiterima' => $request->ket_sahDiterima,
            'nama_kepala' => $request->nama_kepala,
            'nip_kepala' => $request->nip_kepala,
            'tglSuratKeluar' => $request->tglSuratKeluar,
        ];

        $pdf = Pdf::loadView('pages.suratKeluar.output.tmpLolosButuhSiswa', $data);
        $filename = 'pdf_' . time() . 'LolosButuhSiswa.pdf';
        $directoryPath = 'public/uploads/suratKeluar/';
        if (!Storage::exists($directoryPath)) {
            Storage::makeDirectory($directoryPath, 0775, true, true);
        }
        $path = $directoryPath . $filename;
        Storage::put($path, $pdf->output());
        // return $pdf->download('output.pdf');

        $suratKeluar = new SuratKeluar;
        $suratKeluar->nomor_berkas = $request->nomor_berkas;
        $suratKeluar->alamat_penerima = $request->alamatPenerima;
        $suratKeluar->tanggal = $request->tglSuratKeluar;
        $suratKeluar->tipe_surat = $request->tipeSurat;
        $suratKeluar->perihal = $request->perihal;
        $suratKeluar->nomor_petunjuk = $request->nomor_petunjuk;
        $suratKeluar->nomor_paket = $request->nomor_paket;
        $suratKeluar->berkas = $path;
        $suratKeluar->save();

        return redirect('surat-keluar-keterangan-lolos-butuh-siswa');
    }

    public function suratKeteranganLBTHGuru()
    {
        $data = SuratKeluar::where('tipe_surat', 'Lolos Butuh Guru')->get();
        return view('pages.suratKeluar.ktrLolosButuhGuru')->with(['suratKeluar' => $data]);
    }

    public function storeSuratkeluarKeteranganLBTHGuru(Request $request)
    {
        // $request->validate(
        //     [
        //         'gambar' => 'required|mimes:jpeg,png,jpg|max:5000',
        //     ],
        //     [
        //         'gambar.required' => 'File Tidak Boleh Kosong',
        //         'gambar.max' => 'File Tidak Boleh Lebih Dari 2MB',
        //         'gambar.mimes' => 'Format File Harus JPG,PNG',
        //     ]
        // );

        $data = [
            'nomor_surat' => $request->nomor_surat,
            'nama_bertanda' => $request->nama_bertanda,
            'nip_bertanda' => $request->nip_bertanda,
            'pangkat_golongan' => $request->pangkat_golongan,
            'jabatan_bertanda' => $request->jabatan_bertanda,
            'nama_diterangkan' => $request->nama_diterangkan,
            'nip_diterangkan' => $request->nip_diterangkan,
            'pendidikan' => $request->pendidikan,
            'perihal' => $request->perihalSurat,
            'nama_kepala' => $request->nama_kepala,
            'nip_kepala' => $request->nip_kepala,
            'nip_kepala' => $request->nip_kepala,
            'tglSuratKeluar' => $request->tglSuratKeluar,
        ];

        $pdf = Pdf::loadView('pages.suratKeluar.output.tmpLolosButuhGuru', $data);
        $filename = 'pdf_' . time() . '.pdf';
        $directoryPath = 'public/uploads/suratKeluar/';
        if (!Storage::exists($directoryPath)) {
            Storage::makeDirectory($directoryPath, 0775, true, true);
        }
        $path = $directoryPath . $filename;
        Storage::put($path, $pdf->output());
        // return $pdf->download('output.pdf');

        $suratKeluar = new SuratKeluar;
        $suratKeluar->nomor_berkas = $request->nomor_berkas;
        $suratKeluar->alamat_penerima = $request->alamatPenerima;
        $suratKeluar->tanggal = $request->tglSuratKeluar;
        $suratKeluar->tipe_surat = $request->tipeSurat;
        $suratKeluar->perihal = $request->perihal;
        $suratKeluar->nomor_petunjuk = $request->nomor_petunjuk;
        $suratKeluar->nomor_paket = $request->nomor_paket;
        $suratKeluar->berkas = $path;
        $suratKeluar->save();

        return redirect('surat-keluar-keterangan-lolos-butuh-guru');
    }

    public function suratPertanggungJawabanGuru()
    {
        $data = SuratKeluar::where('tipe_surat', 'Pertanggung Jawaban Mutlak Guru')->get();
        return view('pages.suratKeluar.prtnggung_jawab_guru')->with(['suratKeluar' => $data]);
    }

    public function storeSuratkeluarPertanggungJawabanGuru(Request $request)
    {
        // $request->validate(
        //     [
        //         'gambar' => 'required|mimes:jpeg,png,jpg|max:5000',
        //     ],
        //     [
        //         'gambar.required' => 'File Tidak Boleh Kosong',
        //         'gambar.max' => 'File Tidak Boleh Lebih Dari 2MB',
        //         'gambar.mimes' => 'Format File Harus JPG,PNG',
        //     ]
        // );

        $data = [
            'nomor_surat' => $request->nomor_surat,
            'nama_bertanda' => $request->nama_bertanda,
            'tmp_tgl_lahir_bertanda' => $request->tmp_tgl_lahir_bertanda,
            'pekerjaan' => $request->pekerjaan,
            'nip_bertanda' => $request->nip_bertanda,
            'pangkat_golongan' => $request->pangkat_golongan,
            'jabatan_bertanda' => $request->jabatan_bertanda,
            'unit_kerja' => $request->unit_kerja,
            'nama_diterangkan' => $request->nama_diterangkan,
            'tmp_tgl_lahir_diterangkan' => $request->tmp_tgl_lahir_diterangkan,
            'alamat_diterangkan' => $request->alamat_diterangkan,
            'perihal' => $request->perihalSurat,
            'tglSuratKeluar' => $request->tglSuratKeluar,
        ];

        $pdf = Pdf::loadView('pages.suratKeluar.output.tmpPrtnggungJawabGuru', $data);
        $filename = 'pdf_' . time() . 'Pertanggung Jawaban Guru Mutlak.pdf';
        $directoryPath = 'public/uploads/suratKeluar/';
        if (!Storage::exists($directoryPath)) {
            Storage::makeDirectory($directoryPath, 0775, true, true);
        }
        $path = $directoryPath . $filename;
        Storage::put($path, $pdf->output());
        // return $pdf->download('output.pdf');

        $suratKeluar = new SuratKeluar;
        $suratKeluar->nomor_berkas = $request->nomor_berkas;
        $suratKeluar->alamat_penerima = $request->alamatPenerima;
        $suratKeluar->tanggal = $request->tglSuratKeluar;
        $suratKeluar->tipe_surat = $request->tipeSurat;
        $suratKeluar->perihal = $request->perihal;
        $suratKeluar->nomor_petunjuk = $request->nomor_petunjuk;
        $suratKeluar->nomor_paket = $request->nomor_paket;
        $suratKeluar->berkas = $path;
        $suratKeluar->save();

        return redirect('surat-keluar-pertanggung-jawaban-guru');
    }

    public function suratRekomendasiSiswa()
    {
        $data = SuratKeluar::where('tipe_surat', 'Dispensasi')->get();
        return view('pages.suratKeluar.pengantar')->with(['suratKeluar' => $data]);
    }

    public function storeSuratkeluarRekomendasiSiswa(Request $request)
    {
        // $request->validate(
        //     [
        //         'gambar' => 'required|mimes:jpeg,png,jpg|max:5000',
        //     ],
        //     [
        //         'gambar.required' => 'File Tidak Boleh Kosong',
        //         'gambar.max' => 'File Tidak Boleh Lebih Dari 2MB',
        //         'gambar.mimes' => 'Format File Harus JPG,PNG',
        //     ]
        // );

        $data = [
            'nomor_surat' => $request->nomor_surat,
            'kepada_yth' => $request->kepada_yth,
            'lokasi' => $request->lokasi,
            'uraian' => $request->uraian,
            'banyaknya' => $request->banyaknya,
            'keterangan' => $request->keterangan,
            'nama_kepala' => $request->nama_kepala,
            'nip_kepala' => $request->nip_kepala,
        ];

        $pdf = Pdf::loadView('pages.suratKeluar.output.tmpPengantar', $data);
        // $filename = 'pdf_' . time() . '.pdf';
        // $directoryPath = 'public/uploads/suratKeluar/';
        // if (!Storage::exists($directoryPath)) {
        //     Storage::makeDirectory($directoryPath, 0775, true, true);
        // }
        // $path = $directoryPath . $filename;
        // Storage::put($path, $pdf->output());
        return $pdf->download('output.pdf');

        // if ($request->hasFile('berkas')) {
        //     $path = $request->file('berkas')->store('uploads/suratMasuk');
        // } else {
        //     $path = 'berkas kosong';
        // }
        // dd($path);
        // $suratKeluar = new SuratKeluar;
        // $suratKeluar->nomor_berkas = $request->nomor_berkas;
        // $suratKeluar->alamat_penerima = $request->alamatPenerima;
        // $suratKeluar->tanggal = $request->tglSuratKeluar;
        // $suratKeluar->tipe_surat = $request->tipeSurat;
        // $suratKeluar->perihal = $request->perihal;
        // $suratKeluar->nomor_petunjuk = $request->nomor_petunjuk;
        // $suratKeluar->nomor_paket = $request->nomor_paket;
        // $suratKeluar->berkas = $path;
        // $suratKeluar->save();

        // return redirect('surat-keluar-dispensasi');
    }

    public function suratRekomendasiGuru()
    {
        $data = SuratKeluar::where('tipe_surat', 'Surat Rekomendasi Guru')->get();
        return view('pages.suratKeluar.ktrRekomendasiGuru')->with(['suratKeluar' => $data]);
    }

    public function storeSuratkeluarRekomendasiGuru(Request $request)
    {
        // $request->validate(
        //     [
        //         'gambar' => 'required|mimes:jpeg,png,jpg|max:5000',
        //     ],
        //     [
        //         'gambar.required' => 'File Tidak Boleh Kosong',
        //         'gambar.max' => 'File Tidak Boleh Lebih Dari 2MB',
        //         'gambar.mimes' => 'Format File Harus JPG,PNG',
        //     ]
        // );

        $data = [
            'nomor_surat' => $request->nomor_surat,
            'nama_bertanda' => $request->nama_bertanda,
            'nip_bertanda' => $request->nip_bertanda,
            'pangkat_golongan' => $request->pangkat_golongan,
            'jabatan_bertanda' => $request->jabatan_bertanda,
            'unitKerja_bertanda' => $request->unitKerja_bertanda,
            'nama_diterangkan' => $request->nama_diterangkan,
            'nip_diterangkan' => $request->nip_diterangkan,
            'pangkat_diterangkan' => $request->pangkat_diterangkan,
            'jabatan_diterangkan' => $request->jabatan_diterangkan,
            'unitKerja_diterangkan' => $request->unitKerja_diterangkan,
            'perihal' => $request->perihalSurat,
            'nama_kepala' => $request->nama_kepala,
            'nip_kepala' => $request->nip_kepala,
            'tglSuratKeluar' => $request->tglSuratKeluar,
        ];

        $pdf = Pdf::loadView('pages.suratKeluar.output.tmpRekomendasiGuru', $data);
        $filename = 'pdf_' . time() . 'Rekomendasi Guru.pdf';
        $directoryPath = 'public/uploads/suratKeluar/';
        if (!Storage::exists($directoryPath)) {
            Storage::makeDirectory($directoryPath, 0775, true, true);
        }
        $path = $directoryPath . $filename;
        Storage::put($path, $pdf->output());
        // return $pdf->download('output.pdf');

        $suratKeluar = new SuratKeluar;
        $suratKeluar->nomor_berkas = $request->nomor_berkas;
        $suratKeluar->alamat_penerima = $request->alamatPenerima;
        $suratKeluar->tanggal = $request->tglSuratKeluar;
        $suratKeluar->tipe_surat = $request->tipeSurat;
        $suratKeluar->perihal = $request->perihal;
        $suratKeluar->nomor_petunjuk = $request->nomor_petunjuk;
        $suratKeluar->nomor_paket = $request->nomor_paket;
        $suratKeluar->berkas = $path;
        $suratKeluar->save();

        return redirect('surat-keluar-rekomendasi-guru');
    }



    public function suratPengantar()
    {
        $data = SuratKeluar::where('tipe_surat', 'Pengantar')->get();
        return view('pages.suratKeluar.pengantar')->with(['suratKeluar' => $data]);
    }

    public function storeSuratkeluarPengantar(Request $request)
    {
        // $request->validate(
        //     [
        //         'gambar' => 'required|mimes:jpeg,png,jpg|max:5000',
        //     ],
        //     [
        //         'gambar.required' => 'File Tidak Boleh Kosong',
        //         'gambar.max' => 'File Tidak Boleh Lebih Dari 2MB',
        //         'gambar.mimes' => 'Format File Harus JPG,PNG',
        //     ]
        // );

        $data = [
            'nomor_surat' => $request->nomor_surat,
            'kepada_yth' => $request->kepada_yth,
            'lokasi' => $request->lokasi,
            'uraian' => $request->uraian,
            'banyaknya' => $request->banyaknya,
            'keterangan' => $request->keterangan,
            'nama_kepala' => $request->nama_kepala,
            'nip_kepala' => $request->nip_kepala,
            'tglSuratKeluar' => $request->tglSuratKeluar,
        ];

        $pdf = Pdf::loadView('pages.suratKeluar.output.tmpPengantar', $data);
        $filename = 'pdf_' . time() . '.pdf';
        $directoryPath = 'public/uploads/suratKeluar/';
        if (!Storage::exists($directoryPath)) {
            Storage::makeDirectory($directoryPath, 0775, true, true);
        }
        $path = $directoryPath . $filename;
        Storage::put($path, $pdf->output());
        // return $pdf->download('output.pdf');

        $suratKeluar = new SuratKeluar;
        $suratKeluar->nomor_berkas = $request->nomor_berkas;
        $suratKeluar->alamat_penerima = $request->alamatPenerima;
        $suratKeluar->tanggal = $request->tglSuratKeluar;
        $suratKeluar->tipe_surat = $request->tipeSurat;
        $suratKeluar->perihal = $request->perihal;
        $suratKeluar->nomor_petunjuk = $request->nomor_petunjuk;
        $suratKeluar->nomor_paket = $request->nomor_paket;
        $suratKeluar->berkas = $path;
        $suratKeluar->save();

        return redirect('surat-keluar-pengantar');
    }

    public function suratTugasSiswa()
    {
        $data = SuratKeluar::where('tipe_surat', 'Tugas Siswa')->get();
        return view('pages.suratKeluar.suratTugasSiswa')->with(['suratKeluar' => $data]);
    }

    public function storeSuratkeluarTugasSiswa(Request $request)
    {
        // $request->validate(
        //     [
        //         'gambar' => 'required|mimes:jpeg,png,jpg|max:5000',
        //     ],
        //     [
        //         'gambar.required' => 'File Tidak Boleh Kosong',
        //         'gambar.max' => 'File Tidak Boleh Lebih Dari 2MB',
        //         'gambar.mimes' => 'Format File Harus JPG,PNG',
        //     ]
        // );

        $data = [
            'nomor_surat' => $request->nomor_surat,
            'nama_siswa' => $request->nama_siswa,
            'kelas_siswa' => $request->kelas_siswa,
            'keterangan' => $request->keterangan,
            'kegiatan' => $request->kegiatan,
            'nama_kepala' => $request->nama_kepala,
            'nip_kepala' => $request->nip_kepala,
            'tglSuratKeluar' => $request->tglSuratKeluar,
        ];

        $pdf = Pdf::loadView('pages.suratKeluar.output.tmpTugasSiswa', $data);
        $filename = 'pdf_' . time() . 'Tugas Siswa.pdf';
        $directoryPath = 'public/uploads/suratKeluar/';
        if (!Storage::exists($directoryPath)) {
            Storage::makeDirectory($directoryPath, 0775, true, true);
        }
        $path = $directoryPath . $filename;
        Storage::put($path, $pdf->output());
        // return $pdf->download('output.pdf');

        $suratKeluar = new SuratKeluar;
        $suratKeluar->nomor_berkas = $request->nomor_berkas;
        $suratKeluar->alamat_penerima = $request->alamatPenerima;
        $suratKeluar->tanggal = $request->tglSuratKeluar;
        $suratKeluar->tipe_surat = $request->tipeSurat;
        $suratKeluar->perihal = $request->perihal;
        $suratKeluar->nomor_petunjuk = $request->nomor_petunjuk;
        $suratKeluar->nomor_paket = $request->nomor_paket;
        $suratKeluar->berkas = $path;
        $suratKeluar->save();

        return redirect('surat-keluar-tugas-siswa');
    }

    public function suratTugasGuru()
    {
        $data = SuratKeluar::where('tipe_surat', 'Tugas Guru')->get();
        return view('pages.suratKeluar.suratTugasGuru')->with(['suratKeluar' => $data]);
    }

    public function storeSuratkeluarTugasGuru(Request $request)
    {
        // $request->validate(
        //     [
        //         'gambar' => 'required|mimes:jpeg,png,jpg|max:5000',
        //     ],
        //     [
        //         'gambar.required' => 'File Tidak Boleh Kosong',
        //         'gambar.max' => 'File Tidak Boleh Lebih Dari 2MB',
        //         'gambar.mimes' => 'Format File Harus JPG,PNG',
        //     ]
        // );

        $data = [
            'nomor_surat' => $request->nomor_surat,
            'perihal_awal' => $request->perihal_awal,
            'nama_diterangkan' => $request->nama_diterangkan,
            'nip_diterangkan' => $request->nip_diterangkan,
            'pangkat_gol' => $request->pangkat_gol,
            'jabatan_diterangkan' => $request->jabatan_diterangkan,
            'kegiatan' => $request->kegiatan,
            'nama_kepala' => $request->nama_kepala,
            'nip_kepala' => $request->nip_kepala,
            'tglSuratKeluar' => $request->tglSuratKeluar,
        ];

        $pdf = Pdf::loadView('pages.suratKeluar.output.tmpTugasGuru', $data);
        $filename = 'pdf_' . time() . '.pdf';
        $directoryPath = 'public/uploads/suratKeluar/';
        if (!Storage::exists($directoryPath)) {
            Storage::makeDirectory($directoryPath, 0775, true, true);
        }
        $path = $directoryPath . $filename;
        Storage::put($path, $pdf->output());
        // return $pdf->download('output.pdf');


        $suratKeluar = new SuratKeluar;
        $suratKeluar->nomor_berkas = $request->nomor_berkas;
        $suratKeluar->alamat_penerima = $request->alamatPenerima;
        $suratKeluar->tanggal = $request->tglSuratKeluar;
        $suratKeluar->tipe_surat = $request->tipeSurat;
        $suratKeluar->perihal = $request->perihal;
        $suratKeluar->nomor_petunjuk = $request->nomor_petunjuk;
        $suratKeluar->nomor_paket = $request->nomor_paket;
        $suratKeluar->berkas = $path;
        $suratKeluar->save();

        return redirect('surat-keluar-tugas-guru');
    }



    public function ajukanTTD($id)
    {
        $data = SuratKeluar::find($id);

        $data->status_persetujuan = 'diajukan';
        $data->save();

        return redirect()->back();
    }

    public function deleteSurat($id)
    {
        $data = SuratKeluar::find($id);

        $pathFile = $data->berkas;
        if ($pathFile != null || $pathFile != '') {
            Storage::delete($pathFile);
        }

        $data->delete();

        return redirect()->back();
    }
}
