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
            width: 80%;
            margin-top: 15px;
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
        <h2>Regristasi Pasien Klinik Raharjo Medika</h2>

        <table class="table" align="center">
            <tbody>
                <tr>
                    <th colspan="3">
                        <h3>Biodata Pasien</h3>
                    </th>
                </tr>
                <tr>
                    <th>No. Rekam Medis</th>
                    <th>:</th>
                    <td><?= $data['reservasi']['no_rekam_medis']; ?></td>
                </tr>
                <tr>
                    <th>Nama Pasien</th>
                    <th>:</th>
                    <td><?= $data['reservasi']['nama']; ?></td>
                </tr>
                <tr>
                    <th>NIK</th>
                    <th>:</th>
                    <td><?= $data['reservasi']['nik']; ?></td>
                </tr>
                <tr>
                    <th>Tanggal Lahir</th>
                    <th>:</th>
                    <td><?= $data['reservasi']['tanggal_lahir']; ?></td>
                </tr>
                <tr>
                    <th>Umur</th>
                    <th>:</th>
                    <td><?= $data['reservasi']['umur']; ?></td>
                </tr>
                <tr>
                    <th>Jenis Kelamin</th>
                    <th>:</th>
                    <td><?= $data['reservasi']['jenis_kelamin']; ?></td>
                </tr>
                <tr>
                    <th>Agama</th>
                    <th>:</th>
                    <td><?= $data['reservasi']['agama']; ?></td>
                </tr>
                <tr>
                    <th>Pekerjaan</th>
                    <th>:</th>
                    <td><?= $data['reservasi']['pekerjaan']; ?></td>
                </tr>
                <tr>
                    <th>Alamat</th>
                    <th>:</th>
                    <td><?= $data['reservasi']['alamat']; ?></td>
                </tr>
                <tr>
                    <th>Riwayat Penyakit</th>
                    <th>:</th>
                    <td><?= $data['reservasi']['riwayat_penyakit']; ?></td>
                </tr>
            </tbody>
        </table>
        <table class="table" align="center">
            <tbody>
                <tr>
                    <th colspan="3">
                        <h3>Data Resgistrasi</h3>
                    </th>
                </tr>
                <tr>
                    <th>Tanggal Masuk</th>
                    <th>:</th>
                    <td><?= $data['reservasi']['tanggal_masuk']; ?></td>
                </tr>
                <tr>
                    <th>Tanggal Keluar</th>
                    <th>:</th>
                    <td><?= $data['reservasi']['tanggal_keluar']; ?></td>
                </tr>
                <tr>
                    <th>Jenis Perawatan</th>
                    <th>:</th>
                    <td><?= $data['reservasi']['perawatan']; ?></td>
                </tr>
                <tr>
                    <th>Nama Penanggung</th>
                    <th>:</th>
                    <td><?= $data['reservasi']['nama_penanggung']; ?></td>
                </tr>
                <tr>
                    <th>Hubungan</th>
                    <th>:</th>
                    <td><?= $data['reservasi']['hubungan']; ?></td>
                </tr>
                <tr>
                    <th>No, Telepon</th>
                    <th>:</th>
                    <td><?= $data['reservasi']['no_tlp']; ?></td>
                </tr>
                <tr>
                    <th>Status</th>
                    <th>:</th>
                    <td><?= $data['reservasi']['status']; ?></td>
                </tr>
                 <tr>
                    <th>Diagnosis</th>
                    <th>:</th>
                    <td><?= $data['reservasi']['diagnosis']; ?></td>
                </tr>
            </tbody>                
        </table>
    </section>
    <script>
		window.print();
	</script>

</body>

</html>