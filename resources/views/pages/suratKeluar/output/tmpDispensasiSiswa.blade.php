<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PDF Template</title>
</head>

<body>
    <h1>Data Dispensasi</h1>
    <p>Nomor Surat: {{ $nomor_surat }}</p>
    <p>Perihal: {{ $perihal }}</p>
    @php
        $convertdate = \Carbon\Carbon::createFromFormat('Y-m-d', $date_perihal);
        $formattedDatetanggal_surat = $convertdate->format('d F Y');
    @endphp
    <p>date_perihal : {{ $formattedDatetanggal_surat }}</p>
    <p>nomor_perihal: {{ $nomor_perihal }}</p>
    <table>
        <thead>
            <tr>
                <th>Nama Siswa</th>
                <th>Kelas Siswa</th>
                <th>Keterangan</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($nama_siswa as $index => $siswa)
                <tr>
                    <td>{{ $siswa }}</td>
                    <td>{{ $kelas_siswa[$index] }}</td>
                    <td>{{ $keterangan[$index] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{-- @foreach ($nama_siswa as $siswa)
        <li>nama_siswa: {{ $siswa }}</li>
    @endforeach
    @foreach ($kelas_siswa as $siswa)
        <li>kelas_siswa: {{ $siswa }}</li>
    @endforeach
    @foreach ($keterangan as $siswa)
        <li>keterangan: {{ $siswa }}</li>
    @endforeach --}}
    <p>kegiatan: {{ $kegiatan }}</p>
    <p>waktu_dilaksanakan: {{ $waktu_dilaksanakan }}</p>
    {{-- @php
        $convertdate = \Carbon\Carbon::createFromFormat('Y-m-d', $tgl_dilaksanakan);
        $formattedDatetanggal_dilaksanakan = $convertdate->format('d F Y');
    @endphp
    <p>tgl_dilaksanakan: {{ $formattedDatetanggal_dilaksanakan }}</p> --}}
    <p>tempat_dilaksanakan: {{ $tempat_dilaksanakan }}</p>
    <p>nama_kepala: {{ $nama_kepala }}</p>
    <p>nip_kepala: {{ $nip_kepala }}</p>
</body>

</html>
