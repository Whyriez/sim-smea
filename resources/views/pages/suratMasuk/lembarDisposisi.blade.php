<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
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

        .mx-10 {
            margin-left: 2.5rem;
            margin-right: 2.5rem
        }

        .my-4 {
            margin-top: 1rem;
            margin-bottom: 1rem
        }

        .mr-8 {
            margin-right: 2rem
        }

        .mt-2 {
            margin-top: 0.5rem
        }

        .mt-4 {
            margin-top: 1rem
        }

        .inline-block {
            display: inline-block
        }

        .flex {
            display: flex
        }

        .table {
            display: table
        }

        .h-2 {
            height: 0.5rem
        }

        .h-20 {
            height: 5rem
        }

        .h-28 {
            height: 7rem
        }

        .h-8 {
            height: 2rem
        }

        .w-1\/2 {
            width: 50%
        }

        .w-10 {
            width: 2.5rem
        }

        .w-28 {
            width: 7rem
        }

        .w-full {
            width: 100%
        }

        .border-collapse {
            border-collapse: collapse
        }

        .flex-col {
            flex-direction: column
        }

        .justify-normal {
            justify-content: normal
        }

        .justify-end {
            justify-content: flex-end
        }

        .justify-between {
            justify-content: space-between
        }

        .gap-2 {
            gap: 0.5rem
        }

        .gap-4 {
            gap: 1rem
        }

        .border {
            border-width: 1px
        }

        .border-4 {
            border-width: 4px
        }

        .border-black {
            --tw-border-opacity: 1;
            border-color: rgb(0 0 0 / var(--tw-border-opacity))
        }

        .bg-black {
            --tw-bg-opacity: 1;
            background-color: rgb(0 0 0 / var(--tw-bg-opacity))
        }

        .p-2 {
            padding: 0.5rem
        }

        .pl-2 {
            padding-left: 0.5rem
        }

        .pl-6 {
            padding-left: 1.5rem
        }

        .text-center {
            text-align: center
        }

        .text-right {
            text-align: right
        }

        .align-top {
            vertical-align: top
        }

        .text-sm {
            font-size: 0.875rem;
            line-height: 1.25rem
        }

        .font-black {
            font-weight: 900
        }

        .font-bold {
            font-weight: 700
        }
    </style>
</head>

<body class="font-tmr mx-10">
    <div class="mt-4">
        <div style="float: right">
            <p style="border-color: black; font-size:12px" class="font-bold text-right border-4 p-2 inline-block">
                {{ $form }}
            </p>
        </div>
        <div style="clear: both;"></div>
        <div class="flex justify-between">
            <table style="width: 100%;">
                <tr>
                    <td style="width: 80px;">
                        <img src="{{ public_path('assets/img/LogoprovGorontalo.png') }}" alt="Logo Provinsi Gorontalo"
                            class=" mt-2" />
                    </td>
                    <td style="width: 100%; ">
                        <h1 style="font-size: 12px; font-weight: bold;" class="text-center">PEMERINTAH PROVINSI
                            GORONTALO</h1>
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
                        <img src="{{ public_path('assets/img/LogoSmea.png') }}" alt="Logo SMKN 1 GORONTALO"
                            class="mt-2" />
                    </td>
                </tr>
            </table>
        </div>
        <div style="border-width: 1.5px; border-style: solid; border-color: black;" class="w-full mt-2"></div>
        <div style="border-width: 0.5px; border-style: solid; border-color: black; margin-top: 2px" class="w-full">
        </div>
    </div>
    <h1 class="text-center my-4 font-black">LEMBAR DISPOSISI</h1>
    <table style="border-color: black" class="w-full border borderborder-collapse">
        <tr style="border-color: black">
            <td style="border-color: black" class="align-top pl-2" style="width: 460px">
                <table style="border-color: black">
                    <tr>
                        <td style="width:100px;border-color: black">Surat dari</td>
                        <td style="padding-right:5px">:</td>
                        <td>{{ $surat_dari }}</td>
                    </tr>
                    <br />
                    <tr>
                        <td style="width:100px;border-color: black">Tgl. Surat</td>
                        <td style="padding-right:5px">:</td>
                        @php
                            $convertdate = \Carbon\Carbon::createFromFormat('Y-m-d', $tgl_surat);
                            $formattedDatetanggal_surat = $convertdate->isoFormat('dddd, D MMMM YYYY');
                        @endphp
                        <td>{{ $formattedDatetanggal_surat }}</td>
                    </tr>
                    <tr>
                        <td style="width:100px;border-color: black">Nomor Surat</td>
                        <td style="padding-right:5px">:</td>
                        <td>{{ $nomor_surat }}</td>
                    </tr>
                </table>
            </td>
            <td style="border-color: black" class="border border-black align-top pl-2">
                <table>
                    <tr>
                        <td style="width:100px">Diterima Tgl</td>
                        <td style="padding-right:5px">:</td>
                        @php
                            $convertdate = \Carbon\Carbon::createFromFormat('Y-m-d', $tgl_diterima);
                            $formattedDatediterima = $convertdate->isoFormat('dddd, D MMMM YYYY');
                        @endphp
                        <td>{{ $formattedDatediterima }}</td>
                    </tr>
                    <tr>
                        <td style="width:100px">No. Agenda</td>
                        <td style="padding-right:5px">:</td>
                        <td>{{ $nomor_agenda }}</td>
                    </tr>
                    <tr>
                        <td style="width:100px">Sifat</td>
                        <td style="padding-right:5px">:</td>
                        @php
                            if ($sifat == 0) {
                                $sif = 'Sangat Segera';
                            } elseif ($sifat == 0) {
                                $sif = 'Segera';
                            } else {
                                $sif = 'Rahasia';
                            }
                        @endphp
                        <td>{{ $sif }}</td>
                    </tr>
                </table>
                <table>
                    <tr>
                        <td style="padding-right: 10px;">
                            @if ($sifat == 0)
                                <div style="border: 1px solid black; width: 2.5rem; height: 2rem;">
                                    <img src="{{ public_path('assets/img/checklist.png') }}"
                                        alt="Logo Provinsi Gorontalo" />
                                </div>
                            @else
                                <div style="border-color: black" class="w-10 h-8 border border-black;"></div>
                            @endif
                        </td>
                        <td style="padding-right: 10px;">
                            <div>Sangat Segera</div>
                        </td>
                        <td style="padding-right: 10px;">
                            @if ($sifat == 1)
                                <div style="border: 1px solid black; width: 2.5rem; height: 2rem;">
                                    <img src="{{ public_path('assets/img/checklist.png') }}"
                                        alt="Logo Provinsi Gorontalo" />
                                </div>
                            @else
                                <div style="border-color: black" class="w-10 h-8 border border-black;"></div>
                            @endif
                        </td>
                        <td style="padding-right: 10px;">
                            <div>Segera</div>
                        </td>
                        <td style="padding-right: 10px;">
                            @if ($sifat == 2)
                                <div style="border: 1px solid black; width: 2.5rem; height: 2rem;">
                                    <img src="{{ public_path('assets/img/checklist.png') }}"
                                        alt="Logo Provinsi Gorontalo" />
                                </div>
                            @else
                                <div style="border-color: black" class="w-10 h-8 border border-black;"></div>
                            @endif
                        </td>
                        <td style="padding-right: 10px;">
                            <div>Rahasia</div>
                        </td>
                    </tr>
                </table>

            </td>
        </tr>
        <tr>
            <td style="border-color: black" colspan="2" class="border border-black pl-2">
                <p>Hal :</p>
            </td>
        </tr>
        <tr>
            <td style="border-color: black" class="border border-black pl-2 align-top">
                <p>Diteruskan Kepada Sdr :</p>
                <div class="pl-6">
                    <p>1. Kasubag TU</p>
                    <p>2. Waksek {{ $valwaksek }}</p>
                    <p>3. Ka. Prog. Keahl {{ $valkapordi }}</p>
                    <p>4. Koordinator {{ $valkoordinator }}</p>
                    <p>5. ..........................................</p>
                    <p>6. ..........................................</p>
                    <p>7. ..........................................</p>
                </div>
            </td>
            <td style="border-color: black" class="border border-black pl-2 align-top">
                <p>Dengan hormat harap :</p>
                <table>
                    <tr>
                        <td style="padding-top: 10px;">
                            @if (isset($valtanggapan))
                                <div style="border: 1px solid black; width: 2.5rem; height: 2rem;">
                                    <img src="{{ public_path('assets/img/checklist.png') }}"
                                        alt="Logo Provinsi Gorontalo" />
                                </div>
                            @else
                                <div style="border-color: black" class="w-10 h-8 border border-black;"></div>
                            @endif
                        </td>
                        <td style="padding-top: 10px;padding-left: 10px">
                            <div>Tanggapan dan Saran</div>
                        </td>
                    </tr>
                    <tr>
                        <td style="padding-top: 10px;">
                            @if (isset($valprosesLebih))
                                <div style="border: 1px solid black; width: 2.5rem; height: 2rem;">
                                    <img src="{{ public_path('assets/img/checklist.png') }}"
                                        alt="Logo Provinsi Gorontalo" />
                                </div>
                            @else
                                <div style="border-color: black" class="w-10 h-8 border border-black;"></div>
                            @endif
                        </td>
                        <td style="padding-top: 10px; padding-left: 10px">
                            <div>Proses Lebih lanjut</div>
                        </td>
                    </tr>
                    <tr>
                        <td style="padding-top: 10px;">
                            @if (isset($valkoordinasi))
                                <div style="border: 1px solid black; width: 2.5rem; height: 2rem;">
                                    <img src="{{ public_path('assets/img/checklist.png') }}"
                                        alt="Logo Provinsi Gorontalo" />
                                </div>
                            @else
                                <div style="border-color: black" class="w-10 h-8 border border-black;"></div>
                            @endif
                        </td>
                        <td style="padding-top: 10px;padding-left: 10px">
                            <div>Koordinasi / Konfirmasikan</div>
                        </td>
                    </tr>
                    <tr>
                        <td style="padding-top: 10px;">
                            @if (isset($vallainnya))
                                <div style="border: 1px solid black; width: 2.5rem; height: 2rem;">
                                    <img src="{{ public_path('assets/img/checklist.png') }}"
                                        alt="Logo Provinsi Gorontalo" />
                                </div>
                            @else
                                <div style="border-color: black" class="w-10 h-8 border border-black;"></div>
                            @endif
                        </td>
                        <td style="padding-top: 10px;padding-left: 10px">
                            <div>{{ $vallainnya }}</div>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td style="border-color: black" class="border border-black pl-2 h-20 align-top" colspan="2">
                <p>Catatan : {{ $catatan }}</p>
            </td>
        </tr>
    </table>
    {{-- <table border="1">
        <tr>
            <!-- Column 1 -->
            @php
                $date = \Carbon\Carbon::createFromFormat('Y-m-d', $disposisi->tanggal_surat);
                $formattedDatetanggal_surat = $date->format('d F Y');
            @endphp
            <td colspan="3">Surat Dari : {{ $disposisi->surat_dari }}<br> Tanggal Surat :
                {{ $formattedDatetanggal_surat }} <br> Nomor Surat : {{ $disposisi->nomor_surat }}</td>
            <!-- Column 2 -->
            @php
                $staticDataSifat = $disposisi->sifat;
            @endphp
            @php
                $date = \Carbon\Carbon::createFromFormat('Y-m-d', $disposisi->diterima_tanggal);
                $formattedDatediterima_tanggal = $date->format('d F Y');
            @endphp
            <td colspan="3">Diterima Tanggal : {{ $formattedDatediterima_tanggal }}<br> No Agenda :
                {{ $disposisi->nomor_agenda }}<br> Sifat : <input type="checkbox"
                    @if ($staticDataSifat == 0) checked @endif> Sangat Segera <input type="checkbox"
                    @if ($staticDataSifat == 1) checked @endif> Segera <input type="checkbox"
                    @if ($staticDataSifat == 2) checked @endif> Rahasia </td>
        </tr>
        <tr>
            <td colspan="6"> <!-- Single column for the next row -->
                Hal : {{ $disposisi->hal }}
            </td>
        </tr>
        <tr>
            <!-- Column 1 -->
            <td colspan="3">Diteruskan kepada sdr</td>
            <!-- Column 2 -->
            <td colspan="3">Dengan hormat harap</td>
        </tr>
        <tr>
            <!-- Column 1 -->
            <td colspan="3">
                <!-- List for Diteruskan -->
                <ul>
                    @foreach ($dataTrskn as $item)
                        <li>{{ $item->name_dtrsk }}</li>
                    @endforeach
                </ul>
            </td>
            <!-- Column 2 -->
            <td colspan="3">
                <ul>
                    @php
                        $staticData = $dataDngHormat->pluck('name_hormat')->toArray();
                    @endphp
                    <li><input type="checkbox" @if (in_array('Tanggapan Dan Saran', $staticData)) checked @endif> Tanggapan Dan Saran
                    </li>
                    <li><input type="checkbox" @if (in_array('Proses Lebih Lanjut', $staticData)) checked @endif> Proses Lebih Lanjut
                    </li>
                    <li><input type="checkbox" @if (in_array('Koordinasi/Konfirmasikan', $staticData)) checked @endif>
                        Koordinasi/Konfirmasikan
                    </li>
                    <li><input type="checkbox" @if (in_array('', $staticData)) checked @endif> </li>
                </ul>
            </td>
        </tr>
        <tr>
            <td colspan="6"> <!-- Single column for the next row -->
                Catatan : {{ $disposisi->catatan }}
            </td>
        </tr>
    </table> --}}



</body>

</html>
