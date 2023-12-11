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

        $data->status_persetujuan = 'diterima';
        $data->save();

        return redirect()->back();
    }
}
