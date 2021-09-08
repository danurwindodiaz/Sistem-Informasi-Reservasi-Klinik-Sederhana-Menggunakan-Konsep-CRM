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
        <h2>Laporan Data Inventaris</h2>

        <?php if (isset($data['inventaris'])) {
            echo "<span>Total : <b>". count($data['inventaris']) . "</b></span>";
        }if (isset($data['rusak'])) {
            echo "<span>Total : <b>". count($data['rusak']) . "</b></span>";
        }if (isset($data['baik'])) {
            echo "<span>Total : <b>". count($data['baik']) . "</b></span>";
        } ?>

        <table class="table">
            <thead>
                <tr>
                    <th>N0.</th>
                    <th>Kode Barang</th>
                    <th>Nama Barang</th>
                    <th>Kondisi</th>
                    <th>Catatan</th>
                </tr>
            </thead>
            <tbody>
                <?php

                $no = 1; 
                if (isset($data['inventaris'])) {                
                foreach ( $data['inventaris'] as $inv) : ?>
                <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $inv['kd_barang']; ?></td>
                    <td><?= $inv['nama']; ?></td>
                    <td><?= $inv['kondisi']; ?></td>
                    <td><?= $inv['catatan']; ?></td>
                </tr>
                <?php endforeach; }
                if (isset($data['rusak'])) {
                foreach ( $data['rusak'] as $inv) : ?>
                <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $inv['kd_barang']; ?></td>
                    <td><?= $inv['nama']; ?></td>
                    <td><?= $inv['kondisi']; ?></td>
                    <td><?= $inv['catatan']; ?></td>
                </tr>
                <?php endforeach; }
                if (isset($data['baik'])) {
                foreach ( $data['baik'] as $inv) : ?>
                <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $inv['kd_barang']; ?></td>
                    <td><?= $inv['nama']; ?></td>
                    <td><?= $inv['kondisi']; ?></td>
                    <td><?= $inv['catatan']; ?></td>
                </tr>
                <?php endforeach; }?>                
            </tbody>
        </table>
    </section>
    <script>
		window.print();
	</script>
</body>

</html>