<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/paper-css/0.4.1/paper.css">
    <style>
        @page {
            size: A4
        }

        h1 {
            font-weight: bold;
            font-size: 20pt;
            text-align: center;
        }

        h2 {
            font-weight: bold;
            font-size: 18pt;
            text-align: center;
        }

        table {
            align-items: center;
            width: 95%;
            margin-top: 75px;
        }

        .table th {
            padding: 8px 8px;
            text-align: left;
        }

        .table td {
            padding: 3px 3px;
        }

        .text-center {
            text-align: center;
        }
    </style>
</head>

<body>

    <section class="sheet padding-10mm align-center">
        <h1>KLINIK RAHARJO MEDIKA</h1>
        <h2>Biodata Pegawai <?= $data['pegawai']['nama']; ?></h2>

        <table class="table" align="center">
            <tbody>
                <tr>
                    <th>No. Rekam Medis</th>
                    <th>:</th>
                    <td><?= $data['pegawai']['id_pegawai']; ?></td>
                </tr>
                <tr>
                    <th>Nama Pegawais</th>
                    <th>:</th>
                    <td><?= $data['pegawai']['nama']; ?></td>
                </tr>
                <tr>
                    <th>NIK</th>
                    <th>:</th>
                    <td><?= $data['pegawai']['nik']; ?></td>
                </tr>
                <tr>
                    <th>Tanggal Lahir</th>
                    <th>:</th>
                    <td><?= $data['pegawai']['tanggal_lahir']; ?></td>
                </tr>            
                <tr>
                    <th>Jenis Kelamin</th>
                    <th>:</th>
                    <td><?= $data['pegawai']['jenis_kelamin']; ?></td>
                </tr>
                <tr>
                    <th>Agama</th>
                    <th>:</th>
                    <td><?= $data['pegawai']['agama']; ?></td>
                </tr>
                <tr>
                    <th>Pendidikan Terakhir</th>
                    <th>:</th>
                    <td><?= $data['pegawai']['pendidikan_terakhir']; ?></td>
                </tr>
                <tr>
                    <th>Jabatan</th>
                    <th>:</th>
                    <td><?= $data['pegawai']['jabatan']; ?></td>
                </tr>
                <tr>
                    <th>No. Telepon</th>
                    <th>:</th>
                    <td><?= $data['pegawai']['no_tlp']; ?></td>
                </tr>
                <tr>
                    <th>Status</th>
                    <th>:</th>
                    <td><?= $data['pegawai']['sts']; ?></td>
                </tr>
                <tr>
                    <th>Alamat</th>
                    <th>:</th>
                    <td><?= $data['pegawai']['alamat']; ?></td>
                </tr>
            </tbody>
        </table>
    </section>
        <script>
		window.print();
	</script>
</body>

</html>