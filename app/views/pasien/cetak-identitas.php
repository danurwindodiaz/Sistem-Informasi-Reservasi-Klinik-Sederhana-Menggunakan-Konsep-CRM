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
        <h2>Biodata Pasien <?= $data['pasien']['nama']; ?></h2>

        <table class="table" align="center">
            <tbody>
                <tr>
                    <th>No. Rekam Medis</th>
                    <th>:</th>
                    <td><?= $data['pasien']['no_rekam_medis']; ?></td>
                </tr>
                <tr>
                    <th>Nama Pasiens</th>
                    <th>:</th>
                    <td><?= $data['pasien']['nama']; ?></td>
                </tr>
                <tr>
                    <th>NIK</th>
                    <th>:</th>
                    <td><?= $data['pasien']['nik']; ?></td>
                </tr>
                <tr>
                    <th>Tanggal Lahir</th>
                    <th>:</th>
                    <td><?= $data['pasien']['tanggal_lahir']; ?></td>
                </tr>
                <tr>
                    <th>Umur</th>
                    <th>:</th>
                    <td><?= $data['pasien']['umur']; ?></td>
                </tr>
                <tr>
                    <th>Jenis Kelamin</th>
                    <th>:</th>
                    <td><?= $data['pasien']['jenis_kelamin']; ?></td>
                </tr>
                <tr>
                    <th>Agama</th>
                    <th>:</th>
                    <td><?= $data['pasien']['agama']; ?></td>
                </tr>
                <tr>
                    <th>Pekerjaan</th>
                    <th>:</th>
                    <td><?= $data['pasien']['pekerjaan']; ?></td>
                </tr>
                <tr>
                    <th>Alamat</th>
                    <th>:</th>
                    <td><?= $data['pasien']['alamat']; ?></td>
                </tr>
                <tr>
                    <th>Riwayat Penyakit</th>
                    <th>:</th>
                    <td><?= $data['pasien']['riwayat_penyakit']; ?></td>
                </tr>
            </tbody>
        </table>
    </section>
        <script>
		window.print();
	</script>
</body>

</html>