<?php

namespace App\Http\Controllers;

use App\Models\SuratKeluar;
use App\Models\User;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use setasign\Fpdi\Tcpdf\Fpdi;
use TCPDF;

class KepsekController extends Controller
{
    public function index()
    {
        $dataDiajukan = SuratKeluar::where('status_persetujuan', 'diajukan')->get();
        return view('pages.kepsek.index')->with(['dataAjuan' => $dataDiajukan]);
    }
    public function viewTTD()
    {
        return view('pages.kepsek.ttd');
    }

    public function storeTTD(Request $request)
    {
        $logged = Auth::user()->id;
        $user = User::find($logged);


        if ($request->hasFile('file_ttd')) {
            $path = $request->file('file_ttd')->store('uploads/ttd', 'public');

            $pathFile = $user->ttd;
            if ($pathFile != null || $pathFile != '') {
                Storage::delete($pathFile);
            }
        } else {
            $path = $user->ttd;
        }

        $user->ttd = $path;
        $user->save();

        return redirect()->back();
    }

    public function addTTD($id)
    {
        $data = SuratKeluar::find($id);

        $storagePath = $data->berkas;
        $pathTTD = Storage::path(Auth::user()->ttd);
        $existingPDFPath = Storage::path($storagePath);

        $pdf = new Fpdi();
        $pdf->SetMargins(0, 0, 0);
        $pdf->setPrintHeader(false);
        $pdf->setPrintFooter(false);
        $pdf->AddPage();


        $x = 120; //hori
        $y = 183; //verti
        $w = 40; // lebar gambar
        $h = 0;   // tinggi gambar otomatis disesuaikan agar aspek rasio tetap

        $pdf->Image($pathTTD, $x, $y, $w, $h);

        // Impor halaman dari PDF yang sudah ada
        $pdf->setSourceFile($existingPDFPath);
        $templateId = $pdf->importPage(1);
        $pdf->useTemplate($templateId, 0, 0);

        // Simpan atau kirim PDF sebagai respons
        $filename = 'pdf_' . time() . ' ' . $data->tipe_surat  .  '.pdf';
        $directoryPath = 'uploads/suratKeluar/';
        if (!Storage::exists($directoryPath)) {
            Storage::makeDirectory($directoryPath, 0775, true, true);
        }
        $path = $directoryPath . $filename;

        Storage::put($path, $pdf->Output('', 'S'));
        Storage::delete($storagePath);
        // $pdf->Output('asas.pdf', 'D');

        // return response()->download($outputPath);

        $data->status_persetujuan = 'diterima';
        $data->berkas =  $path;
        $data->save();

        return redirect()->back();
    }
}
