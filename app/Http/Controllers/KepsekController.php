<?php

namespace App\Http\Controllers;

use App\Models\SuratKeluar;
use App\Models\User;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\View;
use setasign\Fpdi\Tcpdf\Fpdi;
use Smalot\PdfParser\Parser;
use TCPDF;
use thiagoalessio\TesseractOCR\TesseractOCR;

class KepsekController extends Controller
{
    public function index(Request $request)
    {
        $keyword = $request->input('search');
        $count = SuratKeluar::where('status_persetujuan', 'diajukan')->count();
        $countSudah = SuratKeluar::where('status_persetujuan', 'diterima')->count();
        $dataDiajukan = SuratKeluar::where('status_persetujuan', 'diajukan')
            ->when($keyword, function ($query) use ($keyword) {
                $query->where(function ($query) use ($keyword) {
                    $query->where('nomor_berkas', 'like', "%$keyword%")
                        ->orWhere('alamat_penerima', 'like', "%$keyword%")
                        ->orWhere('nomor_petunjuk', 'like', "%$keyword%")
                        ->orWhere('nomor_paket', 'like', "%$keyword%")
                        ->orWhere('perihal', 'like', "%$keyword%");
                });
            })->orderBy('tanggal', 'desc')->paginate(10);
        return view('pages.kepsek.index')->with(['dataAjuan' => $dataDiajukan, 'count' => $count, 'countSudah' => $countSudah]);
    }

    public function suratSudah(Request $request)
    {
        $keyword = $request->input('search');
        $count = SuratKeluar::where('status_persetujuan', 'diajukan')->count();
        $countSudah = SuratKeluar::where('status_persetujuan', 'diterima')->count();
        $dataSudah = SuratKeluar::where('status_persetujuan', 'diterima')
            ->when($keyword, function ($query) use ($keyword) {
                $query->where(function ($query) use ($keyword) {
                    $query->where('nomor_berkas', 'like', "%$keyword%")
                        ->orWhere('alamat_penerima', 'like', "%$keyword%")
                        ->orWhere('nomor_petunjuk', 'like', "%$keyword%")
                        ->orWhere('nomor_paket', 'like', "%$keyword%")
                        ->orWhere('perihal', 'like', "%$keyword%");
                });
            })->orderBy('tanggal', 'desc')->paginate(10);
        return view('pages.kepsek.suratSudah')->with(['dataSudah' => $dataSudah, 'count' => $count, 'countSudah' => $countSudah]);
    }

    public function viewTTD()
    {
        $count = SuratKeluar::where('status_persetujuan', 'diajukan')->count();
        $countSudah = SuratKeluar::where('status_persetujuan', 'diterima')->count();
        return view('pages.kepsek.ttd')->with(['count' => $count, 'countSudah' => $countSudah]);
    }

    public function storeTTD(Request $request)
    {
        $logged = Auth::user()->id;
        $user = User::find($logged);

        $nama = $request->nama;
        $nip = $request->nip;


        if ($request->hasFile('file_ttd')) {
            $path = $request->file('file_ttd')->store('uploads/ttd', 'public');

            $pathFile = $user->ttd;
            if ($pathFile != null || $pathFile != '') {
                Storage::delete($pathFile);
            }
        } else {
            $path = $user->ttd;
        }

        $user->name = $nama;
        $user->nip = $nip;
        $user->ttd = $path;
        $user->save();

        return redirect()->back();
    }

    public function addTTD($id)
    {
        $data = SuratKeluar::find($id);

        // $storagePath = $data->berkas;
        // $pathTTD = Storage::path(Auth::user()->ttd);
        // $existingPDFPath = Storage::path($storagePath);

        // $pdf = new Fpdi();
        // $pdf->SetMargins(0, 0, 0);
        // $pdf->setPrintHeader(false);
        // $pdf->setPrintFooter(false);
        // $pdf->AddPage();

        // $parser = new Parser();
        // $pdfParser = $parser->parseFile($existingPDFPath);
        // // Ambil halaman pertama (indeks dimulai dari 1)
        // $page = $pdfParser->getPages()[0];
        // // Ambil teks dari halaman
        // $text = $page->getText();
        // // $text = 'kepala';

        // $searchText = 'Kepala Sekolah';

        // if (($pos = strpos($text, $searchText)) !== false) {
        //     $startOffset = $pos;
        //     $length = strlen($searchText);
        //     $endOffset = $startOffset + $length;

        //     dd("Koordinat: Awal=$startOffset, Akhir=$endOffset");
        // } else {
        //     // Jika teks tidak ditemukan
        //     dd("Teks tidak ditemukan");
        // }
        // dd($text);

        // $x = 120; //hori
        // $y = 183; //verti
        // $w = 40; // lebar gambar
        // $h = 0;   // tinggi gambar otomatis disesuaikan agar aspek rasio tetap

        // $pdf->Image($pathTTD, $x, $y, $w, $h);

        // // Impor halaman dari PDF yang sudah ada
        // $pdf->setSourceFile($existingPDFPath);
        // $templateId = $pdf->importPage(1);
        // $pdf->useTemplate($templateId, 0, 0);

        // $outputPath = public_path('path/to/output.pdf');
        // $pdf->Output('asas.pdf', 'D');

        // // Force download file
        // return response()->download($outputPath);


        // Simpan atau kirim PDF sebagai respons
        // $filename = 'pdf_' . time() . ' ' . $data->tipe_surat  .  '.pdf';
        // $directoryPath = 'uploads/suratKeluar/';
        // if (!Storage::exists($directoryPath)) {
        //     Storage::makeDirectory($directoryPath, 0775, true, true);
        // }
        // $path = $directoryPath . $filename;

        // Storage::put($path, $pdf->Output('', 'S'));
        // Storage::delete($storagePath);
        // $pdf->Output('asas.pdf', 'D');

        // $response = Response::make($pdf->Output('asas.pdf', 'S'));
        // $response->header('Content-Type', 'application/pdf');
        // $response->header('Content-Disposition', 'inline; filename=asas.pdf');

        // return $response;

        $data->status_persetujuan = 'diterima';
        // $data->berkas =  $path;
        $data->save();

        return redirect()->back();
    }
}
