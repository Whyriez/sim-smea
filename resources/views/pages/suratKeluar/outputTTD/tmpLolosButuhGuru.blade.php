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

        .flex {
            display: flex
        }

        .italic {
            font-style: italic
        }

        .underline {
            -webkit-text-decoration-line: underline;
            text-decoration-line: underline
        }

        .text-center {
            text-align: center;
        }
    </style>
</head>

<body>
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

    <div style="border-width: 1.5px; border-style: solid; border-color: black;" class="w-full mt-2"></div>
    <div style="border-width: 0.5px; border-style: solid; border-color: black; margin-top: 2px" class="w-full"></div>
    <div style="text-align: center; margin-top: 1rem; margin-bottom: 1rem;">
        <h2 style="font-weight: 700; text-decoration: underline;">SURAT KETERANGAN LOLOS BUTUH</h2>
        <p style="font-size: 0.875rem; line-height: 1.25rem;">Nomor : {{ $nomor_surat }}</p>
    </div>
    <div>
        <p style="margin-bottom: 0.5rem">Yang bertanda tangan di bawah ini :</p>
        <div style="text-align: justify; margin-left: 3rem;">
            <p><span style="display: inline-block; width: 150px">Nama </span>: {{ $nama_bertanda }}</p>
            <p><span style="display: inline-block; width: 150px">Nip </span>: {{ $nip_bertanda }}</p>
            <p><span style="display: inline-block; width: 150px">Pangkat/Golongan </span>: {{ $pangkat_golongan }}</p>
            <p><span style="display: inline-block; width: 150px">Jabatan </span>: {{ $jabatan_bertanda }}</p>
        </div>
    </div>
    <div style="margin-bottom: 1rem;">
        <p style="margin-bottom: 0.5rem">Menerangkan kepada :</p>
        <div style="text-align: justify; margin-left: 3rem;">
            <p><span style="display: inline-block; width: 150px">Nama </span>: <font
                    style="text-transform: uppercase;font-weight: bold;">{{ $nama_diterangkan }}</font>
            </p>
            <p><span style="display: inline-block; width: 150px">Nip </span>: {{ $nip_diterangkan }}</p>
            <p><span style="display: inline-block; width: 150px">Pendidikan </span>: {{ $pendidikan }}</p>
        </div>
    </div>
    <div style="margin-bottom: 4rem;">
        <p style="text-align: justify; margin-bottom: 0.75rem;">{{ $perihal }}</p>
        <p style="text-align: justify; margin-top: 0.75rem; margin-bottom: 1.25rem;">Demikian lolos butuh ini kami
            terbitkan untuk dipergunakan sebagaimana mestinya.</p>
    </div>
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
    <h1>Data Lolos Butuh Guru</h1>
    <p>Nomor Surat: {{ $nomor_surat }}</p>
    <p>Yang Bertanda tangan dibawah ini : </p>
    <p>Nama : {{ $nama_bertanda }}</p>
    <p>nip_bertanda : {{ $nip_bertanda }}</p>
    <p>pangkat_golongan : {{ $pangkat_golongan }}</p>
    <p>jabatan_bertanda : {{ $jabatan_bertanda }}</p> <br>

    <p>Dengan ini menerangkan : </p>
    <p>Nama : {{ $nama_diterangkan }}</p>
    <p>nip_diterangkan : {{ $nip_diterangkan }}</p>
    <p>pendidikan : {{ $pendidikan }}</p>

    <p>Perihal: {{ $perihal }}</p>

    <p>nama_kepala: {{ $nama_kepala }}</p>
    <p>nip_kepala: {{ $nip_kepala }}</p>
</body>

</html> --}}
