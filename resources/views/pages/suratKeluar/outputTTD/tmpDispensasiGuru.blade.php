<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Surat Dispensasi Guru</title>
    <style>
        * {
            font-family: "Times New Roman", Times, serif;
        }

        html {
            line-height: 1.5;
            /* 1 */
            -webkit-text-size-adjust: 100%;
            /* 2 */
            -moz-tab-size: 4;
            /* 3 */
            tab-size: 4;
            /* 3 */
            font-family: ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
            /* 4 */
            font-feature-settings: normal;
            /* 5 */
            font-variation-settings: normal;
            /* 6 */
        }

        body {
            margin: 0;
            line-height: inherit;
        }

        table {
            text-indent: 0;
            border-color: inherit;
            border-collapse: collapse;
            /* 3 */
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-size: inherit;
            font-weight: inherit;
        }

        img,
        svg,
        video,
        canvas,
        audio,
        iframe,
        embed,
        object {
            display: block;
            /* 1 */
            vertical-align: middle;
            /* 2 */
        }


        img,
        video {
            max-width: 100%;
            height: auto;
        }

        blockquote,
        dl,
        dd,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        hr,
        figure,
        p,
        pre {
            margin: 0;
        }

        .mx-10 {
            margin-left: 2.5rem;
            margin-right: 2.5rem;
        }

        .mb-16 {
            margin-bottom: 4rem;
        }

        .ml-14 {
            margin-left: 3.5rem;
        }

        .mr-20 {
            margin-right: 5rem;
        }

        .mr-8 {
            margin-right: 2rem;
        }

        .mt-12 {
            margin-top: 3rem;
        }

        .mt-2 {
            margin-top: 0.5rem;
        }

        .mt-4 {
            margin-top: 1rem;
        }

        .mt-8 {
            margin-top: 2rem;
        }

        .flex {
            display: flex;
        }

        .h-2 {
            height: 0.5rem;
        }

        .h-28 {
            height: 7rem;
        }

        .w-28 {
            width: 7rem;
        }

        .w-full {
            width: 100%;
        }

        .justify-end {
            justify-content: flex-end;
        }

        .justify-between {
            justify-content: space-between;
        }

        .bg-black {
            --tw-bg-opacity: 1;
            background-color: rgb(0 0 0 / var(--tw-bg-opacity));
        }

        .text-center {
            text-align: center;
        }

        .text-sm {
            font-size: 0.875rem;
            line-height: 1.25rem;
        }

        .font-black {
            font-weight: 900;
        }

        .underline {
            -webkit-text-decoration-line: underline;
            text-decoration-line: underline;
        }
    </style>
</head>

<body class="mx-10 mt-4">
    <table style="width: 100%;">
        <tr>
            <td style="width: 80px;">
                <img src="{{ public_path('assets/img/LogoprovGorontalo.png') }}" alt="Logo Provinsi Gorontalo"
                    class=" mt-2" />
            </td>
            <td style="width: 100%; ">
                <h1 style="font-size: 12px; font-weight: bold;" class="text-center">PEMERINTAH PROVINSI GORONTALO</h1>
                <h1 style="font-weight: bold;" class="text-center">DINAS PENDIDIKAN DAN KEBUDAYAAN</h1>
                <h1 style="font-weight: bold;" class="text-center">SMK NEGERI 1 GORONTALO</h1>
                <p style="font-size: 12px;" class="text-center">
                    Jl. Ternate Telp (0435)822772 Fax : (0435)822772 Kota Gorontalo 96125
                </p>
                <p style="font-size: 12px;" class="text-center">
                    Website: <i style="color: red">smkn1gorontalo.sch.id</i> E-mail :
                    <u style="color: blue">smkn1gtlo@yahoo.co.id</u>
                </p>
            </td>
            <td style="width: 100px;">
                <img src="{{ public_path('assets/img/LogoSmea.png') }}" alt="Logo SMKN 1 GORONTALO" class="mt-2" />
            </td>
        </tr>
    </table>

    <div style="border-width: 1.5px; border-style: solid; border-color: black;" class="w-full mt-1"></div>
    <div style="border-width: 0.5px; border-style: solid; border-color: black; margin-top: 2px" class="w-full"></div>
    <div style="text-align: center; margin-top: 1rem; margin-bottom: 1rem;">
        <h2 style="font-weight: 700; text-decoration: underline; margin:0px">SURAT DISPENSASI</h2>
        <p style="font-size: 0.875rem; line-height: 1.25rem;">Nomor : {{ $nomor_surat }}</p>
    </div>
    <p class="mt-8">
        Kepala SMK Negeri 1 Gorontalo memberikan Dispensasi kepada :
    </p>
    <div class="ml-14" style="margin-top: 1rem; margin-bottom:1rem">
        <p><span style="display: inline-block; width: 130px">Nama </span>: {{ $nama_guru }}</p>
        <p><span style="display: inline-block; width: 130px">NIP </span>: {{ $nip_guru }}</p>
        <p><span style="display: inline-block; width: 130px">Pangkat.Gol </span>: {{ $pangkat_gol }}</p>
        <p><span style="display: inline-block; width: 130px">Jabatan </span>: {{ $jabatan }}</p>
    </div>
    @php
        $teks = preg_replace('/\*(.*?)\*/s', '<strong>$1</strong>', $perihal);
    @endphp
    <p class="mt-2" style="text-align: justify;">
        {!! $teks !!}
    </p>
    <p style="margin-bottom: 4rem;margin-top:1rem;">
        Demikian Dispensisasi ini diberikan kepada yang bersangkutan untuk
        digunakan seperlunya.
    </p>
    <div style="float: right; text-align: left;">
        <div style="width: 15rem; height: 10;">
            @php
                use Illuminate\Support\Facades\DB;
                $convertdate = \Carbon\Carbon::createFromFormat('Y-m-d', $tglSuratKeluar);
                $tglSurat = $convertdate->isoFormat('D MMMM YYYY');
            @endphp
            <p>Gorontalo, {{ $tglSurat }}</p>
            <p>Kepala Sekolah</p>
            <img style="width: 8rem" src="{{ public_path('storage/' . $ttd_kepala) }}" alt="">
            <p>{{ $nama_kepala }}</p>
            <p>NIP : {{ $nip_kepala }}</p>
        </div>
    </div>
</body>

</html>



{{-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PDF Template</title>
</head>

<body>
    <h1>Data Dispensasi</h1>
    <p>Nomor Surat: {{ $nomor_surat }}</p>
    <p>nama_guru: {{ $nama_guru }}</p>
    <p>nip_guru: {{ $nip_guru }}</p>
    <p>pangkat_gol: {{ $pangkat_gol }}</p>
    <p>jabatan: {{ $jabatan }}</p>
    <p>Perihal: {{ $perihal }}</p>

    <p>waktu_dilaksanakan: {{ $waktu_dilaksanakan }}</p>

    <p>tempat_dilaksanakan: {{ $tempat_dilaksanakan }}</p>
    <p>nama_kepala: {{ $nama_kepala }}</p>
    <p>nip_kepala: {{ $nip_kepala }}</p>
</body>

</html> --}}
