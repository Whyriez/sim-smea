<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *,
        ::before,
        ::after {
            box-sizing: border-box;
            /* 1 */
            border-width: 0;
            /* 2 */
            border-style: solid;
            /* 2 */
            border-color: #e5e7eb;
            /* 2 */
        }

        ::before,
        ::after {
            --tw-content: '';
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
            /* 1 */
            line-height: inherit;
            /* 2 */
        }

        hr {
            height: 0;
            /* 1 */
            color: inherit;
            /* 2 */
            border-top-width: 1px;
            /* 3 */
        }

        abbr:where([title]) {
            -webkit-text-decoration: underline dotted;
            text-decoration: underline dotted;
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

        a {
            color: inherit;
            text-decoration: inherit;
        }

        b,
        strong {
            font-weight: bolder;
        }

        code,
        kbd,
        samp,
        pre {
            font-family: ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
            /* 1 */
            font-size: 1em;
            /* 2 */
        }

        small {
            font-size: 80%;
        }

        sub,
        sup {
            font-size: 75%;
            line-height: 0;
            position: relative;
            vertical-align: baseline;
        }

        sub {
            bottom: -0.25em;
        }

        sup {
            top: -0.5em;
        }

        table {
            text-indent: 0;
            /* 1 */
            border-color: inherit;
            /* 2 */
            border-collapse: collapse;
            /* 3 */
        }

        button,
        input,
        optgroup,
        select,
        textarea {
            font-family: inherit;
            /* 1 */
            font-feature-settings: inherit;
            /* 1 */
            font-variation-settings: inherit;
            /* 1 */
            font-size: 100%;
            /* 1 */
            font-weight: inherit;
            /* 1 */
            line-height: inherit;
            /* 1 */
            color: inherit;
            /* 1 */
            margin: 0;
            /* 2 */
            padding: 0;
            /* 3 */
        }

        button,
        select {
            text-transform: none;
        }

        button,
        [type='button'],
        [type='reset'],
        [type='submit'] {
            -webkit-appearance: button;
            /* 1 */
            background-color: transparent;
            /* 2 */
            background-image: none;
            /* 2 */
        }

        :-moz-focusring {
            outline: auto;
        }

        :-moz-ui-invalid {
            box-shadow: none;
        }

        progress {
            vertical-align: baseline;
        }

        ::-webkit-inner-spin-button,
        ::-webkit-outer-spin-button {
            height: auto;
        }

        [type='search'] {
            -webkit-appearance: textfield;
            /* 1 */
            outline-offset: -2px;
            /* 2 */
        }

        ::-webkit-search-decoration {
            -webkit-appearance: none;
        }

        ::-webkit-file-upload-button {
            -webkit-appearance: button;
            /* 1 */
            font: inherit;
            /* 2 */
        }

        summary {
            display: list-item;
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

        fieldset {
            margin: 0;
            padding: 0;
        }

        legend {
            padding: 0;
        }

        ol,
        ul,
        menu {
            list-style: none;
            margin: 0;
            padding: 0;
        }


        dialog {
            padding: 0;
        }

        textarea {
            resize: vertical;
        }


        input::placeholder,
        textarea::placeholder {
            opacity: 1;
            /* 1 */
            color: #9ca3af;
            /* 2 */
        }


        button,
        [role="button"] {
            cursor: pointer;
        }

        :disabled {
            cursor: default;
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

        [hidden] {
            display: none;
        }

        *,
        ::before,
        ::after {
            --tw-border-spacing-x: 0;
            --tw-border-spacing-y: 0;
            --tw-translate-x: 0;
            --tw-translate-y: 0;
            --tw-rotate: 0;
            --tw-skew-x: 0;
            --tw-skew-y: 0;
            --tw-scale-x: 1;
            --tw-scale-y: 1;
            --tw-pan-x: ;
            --tw-pan-y: ;
            --tw-pinch-zoom: ;
            --tw-scroll-snap-strictness: proximity;
            --tw-gradient-from-position: ;
            --tw-gradient-via-position: ;
            --tw-gradient-to-position: ;
            --tw-ordinal: ;
            --tw-slashed-zero: ;
            --tw-numeric-figure: ;
            --tw-numeric-spacing: ;
            --tw-numeric-fraction: ;
            --tw-ring-inset: ;
            --tw-ring-offset-width: 0px;
            --tw-ring-offset-color: #fff;
            --tw-ring-color: rgb(59 130 246 / 0.5);
            --tw-ring-offset-shadow: 0 0 #0000;
            --tw-ring-shadow: 0 0 #0000;
            --tw-shadow: 0 0 #0000;
            --tw-shadow-colored: 0 0 #0000;
            --tw-blur: ;
            --tw-brightness: ;
            --tw-contrast: ;
            --tw-grayscale: ;
            --tw-hue-rotate: ;
            --tw-invert: ;
            --tw-saturate: ;
            --tw-sepia: ;
            --tw-drop-shadow: ;
            --tw-backdrop-blur: ;
            --tw-backdrop-brightness: ;
            --tw-backdrop-contrast: ;
            --tw-backdrop-grayscale: ;
            --tw-backdrop-hue-rotate: ;
            --tw-backdrop-invert: ;
            --tw-backdrop-opacity: ;
            --tw-backdrop-saturate: ;
            --tw-backdrop-sepia:
        }

        ::backdrop {
            --tw-border-spacing-x: 0;
            --tw-border-spacing-y: 0;
            --tw-translate-x: 0;
            --tw-translate-y: 0;
            --tw-rotate: 0;
            --tw-skew-x: 0;
            --tw-skew-y: 0;
            --tw-scale-x: 1;
            --tw-scale-y: 1;
            --tw-pan-x: ;
            --tw-pan-y: ;
            --tw-pinch-zoom: ;
            --tw-scroll-snap-strictness: proximity;
            --tw-gradient-from-position: ;
            --tw-gradient-via-position: ;
            --tw-gradient-to-position: ;
            --tw-ordinal: ;
            --tw-slashed-zero: ;
            --tw-numeric-figure: ;
            --tw-numeric-spacing: ;
            --tw-numeric-fraction: ;
            --tw-ring-inset: ;
            --tw-ring-offset-width: 0px;
            --tw-ring-offset-color: #fff;
            --tw-ring-color: rgb(59 130 246 / 0.5);
            --tw-ring-offset-shadow: 0 0 #0000;
            --tw-ring-shadow: 0 0 #0000;
            --tw-shadow: 0 0 #0000;
            --tw-shadow-colored: 0 0 #0000;
            --tw-blur: ;
            --tw-brightness: ;
            --tw-contrast: ;
            --tw-grayscale: ;
            --tw-hue-rotate: ;
            --tw-invert: ;
            --tw-saturate: ;
            --tw-sepia: ;
            --tw-drop-shadow: ;
            --tw-backdrop-blur: ;
            --tw-backdrop-brightness: ;
            --tw-backdrop-contrast: ;
            --tw-backdrop-grayscale: ;
            --tw-backdrop-hue-rotate: ;
            --tw-backdrop-invert: ;
            --tw-backdrop-opacity: ;
            --tw-backdrop-saturate: ;
            --tw-backdrop-sepia:
        }

        .mx-16 {
            margin-left: 4rem;
            margin-right: 4rem
        }

        .mx-auto {
            margin-left: auto;
            margin-right: auto
        }

        .mb-10 {
            margin-bottom: 2.5rem
        }

        .mb-16 {
            margin-bottom: 4rem
        }

        .mb-20 {
            margin-bottom: 5rem
        }

        .mb-5 {
            margin-bottom: 1.25rem
        }

        .ml-12 {
            margin-left: 3rem
        }

        .ml-16 {
            margin-left: 4rem
        }

        .ml-36 {
            margin-left: 9rem
        }

        .ml-8 {
            margin-left: 2rem
        }

        .mr-16 {
            margin-right: 4rem
        }

        .mr-8 {
            margin-right: 2rem
        }

        .mt-0 {
            margin-top: 0px
        }

        .mt-0\.5 {
            margin-top: 0.125rem
        }

        .mt-2 {
            margin-top: 0.5rem
        }

        .mt-4 {
            margin-top: 1rem
        }

        .flex {
            display: flex
        }

        .table {
            display: table
        }

        .h-0 {
            height: 0px
        }

        .h-0\.5 {
            height: 0.125rem
        }

        .h-1 {
            height: 0.25rem
        }

        .h-28 {
            height: 7rem
        }

        .h-40 {
            height: 10rem
        }

        .w-10 {
            width: 2.5rem
        }

        .w-11\/12 {
            width: 91.666667%
        }

        .w-28 {
            width: 7rem
        }

        .w-44 {
            width: 11rem
        }

        .w-48 {
            width: 12rem
        }

        .w-56 {
            width: 14rem
        }

        .w-60 {
            width: 15rem
        }

        .justify-center {
            justify-content: center
        }

        .justify-between {
            justify-content: space-between
        }

        .border {
            border-width: 1px
        }

        .border-slate-600 {
            --tw-border-opacity: 1;
            border-color: rgb(71 85 105 / var(--tw-border-opacity))
        }

        .bg-black {
            --tw-bg-opacity: 1;
            background-color: rgb(0 0 0 / var(--tw-bg-opacity))
        }

        .bg-blue-500 {
            --tw-bg-opacity: 1;
            background-color: rgb(59 130 246 / var(--tw-bg-opacity))
        }

        .p-2 {
            padding: 0.5rem
        }

        .text-center {
            text-align: center
        }

        .text-justify {
            text-align: justify
        }

        .text-sm {
            font-size: 0.875rem;
            line-height: 1.25rem
        }

        .text-xl {
            font-size: 1.25rem;
            line-height: 1.75rem
        }

        .text-xs {
            font-size: 0.75rem;
            line-height: 1rem
        }

        .font-bold {
            font-weight: 700
        }

        .italic {
            font-style: italic
        }

        .tracking-wide {
            letter-spacing: 0.025em
        }

        .text-blue-400 {
            --tw-text-opacity: 1;
            color: rgb(96 165 250 / var(--tw-text-opacity))
        }

        .text-red-400 {
            --tw-text-opacity: 1;
            color: rgb(248 113 113 / var(--tw-text-opacity))
        }

        .underline {
            -webkit-text-decoration-line: underline;
            text-decoration-line: underline
        }

        .hover\:text-blue-600:hover {
            --tw-text-opacity: 1;
            color: rgb(37 99 235 / var(--tw-text-opacity))
        }

        .hover\:text-red-600:hover {
            --tw-text-opacity: 1;
            color: rgb(220 38 38 / var(--tw-text-opacity))
        }

        .active\:text-blue-800:active {
            --tw-text-opacity: 1;
            color: rgb(30 64 175 / var(--tw-text-opacity))
        }

        .active\:text-red-800:active {
            --tw-text-opacity: 1;
            color: rgb(153 27 27 / var(--tw-text-opacity))
        }
    </style>
</head>

<body class="mx-10">
    <table style="width: 100%;">
        <tr>
            <td style="width: 80px;">
                <img src="{{ public_path('assets/img/LogoprovGorontalo.png') }}" alt="Logo Provinsi Gorontalo"
                    class="mt-2" />
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

    <div style="border-width: 1.5px; border-style: solid; border-color: black;" class="w-full mt-2"></div>
    <div style="border-width: 0.5px; border-style: solid; border-color: black; margin-top: 2px" class="w-full"></div>
    <div class="mt-4 mb-10 text-center">
        <h2 style="font-weight: 700; text-decoration: underline;">SURAT PENGANTAR</h2>
        <p class="text-sm">Nomor : {{ $nomor_surat }}</p>
    </div>
    <div class="mb-5">
        <p>Kepada Yth.</p>
        <div class="text-justify" style="margin-left: 3rem">
            <p>{{ $kepada_yth }}</p>
            <p>{{ $lokasi }}</p>
            <p>Di</p>
            <p class="ml-12">Gorontalo</p>
        </div>
    </div>

    <div class="mb-16">
        <table class="w-full">
            <thead>
                <tr>
                    <th style="border-color: black" class="p-2 border">NO</th>
                    <th style="width: 18rem;border-color: black" class="border">URAIAN</th>
                    <th style="border-color: black" class="border">BANYAKNYA</th>
                    <th style="width: 14rem;border-color: black" class="border">KETERANGAN</th>
                </tr>
            </thead>
            <tbody style="border-left: 1px solid #000;border-bottom: 1px solid #000;">
                @foreach ($uraian as $index => $ur)
                    <tr>
                        <td style="border-right: 1px solid #000; text-align: center;">{{ $index + 1 . '.' }}</td>
                        <td style="border-right: 1px solid #000; text-align: left; padding-left:5px;">
                            {{ $ur }}</td>
                        <td style="border-right: 1px solid #000; text-align: center;">
                            {{ $banyaknya[$index] }}</td>
                        <td style="border-right: 1px solid #000; text-align: left; padding-left:5px;">
                            {{ $keterangan[$index] }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div style="float: right; text-align: left;">
        <div style="width: 15rem; height: 10;">
            @php
                use Illuminate\Support\Facades\DB;
                $convertdate = \Carbon\Carbon::createFromFormat('Y-m-d', $tglSuratKeluar);
                $tglSurat = $convertdate->isoFormat('D MMMM YYYY');
            @endphp
            <p>Gorontalo, {{ $tglSurat }}</p>
            <p style="margin-bottom: 4rem">Kepala Sekolah</p>
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
    <h1>Data Surat Pengantar</h1>
    <p>Nomor Surat: {{ $nomor_surat }}</p>
    <p>kepada_yth: {{ $kepada_yth }}</p>
    <p>lokasi: {{ $lokasi }}</p>
    <table>
        <thead>
            <tr>
                <th>Uraian</th>
                <th>Banyaknya Data</th>
                <th>Keterangan</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($uraian as $index => $ur)
                <tr>
                    <td>{{ $ur }}</td>
                    <td>{{ $banyaknya[$index] }}</td>
                    <td>{{ $keterangan[$index] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <p>nama_kepala: {{ $nama_kepala }}</p>
    <p>nip_kepala: {{ $nip_kepala }}</p>
</body>

</html> --}}
