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
            border-collapse: collapse;
            width: 100%;
            margin-top: 5px;
        }

        .table th {
            padding: 8px 8px;
            border: 1px solid #000000;
            text-align: center;
        }

        .table td {
            padding: 3px 3px;
            border: 1px solid #000000;
        }

        .text-center {
            text-align: center;
        }
    </style>
</head>

<body>

    <section class="sheet padding-10mm align-center">
        <h1>KLINIK RAHARJO MEDIKA</h1>
        <h2>Laporan Data Pasien</h2>
        <p>Total : <b><?= count($data['pegawai']); ?></b></p>
        <table class="table">
            <thead>
                <tr>
                    <th>N0.</th>
                    <th>Id Pegawai</th>
                    <th>Nama Pegawai</th>
                    <th>NIK</th>
                    <th>Jabatan</th>
                    <th>Jenis Kelamin</th>
                    <th>No. Telepon</th>
                </tr>
            </thead>
            <tbody>
            <?php
                                    $no = 1; 
                                    foreach ( $data['pegawai'] as $pgw) : ?>
                                        <tr>
                                            <td><?= $no++; ?></td>
                                            <td><?= $pgw['id_pegawai']; ?></td>
                                            <td><?= $pgw['nama']; ?></td>
                                            <td><?= $pgw['nik']; ?></td>
                                            <td><?= $pgw['jabatan']; ?></td>
                                            <td><?= $pgw['jenis_kelamin']; ?></td>
                                            <td><?= $pgw['no_tlp']; ?></td>
                                        </tr>
                                    <?php endforeach; ?>                    
            </tbody>
        </table>
    </section>
    <script>
		window.print();
	</script>
</body>

</html>