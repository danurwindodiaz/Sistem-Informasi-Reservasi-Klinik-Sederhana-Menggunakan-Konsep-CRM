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

        <?php if (isset($data['reservasi'])) {
            echo "<span>Total : <b>". count($data['reservasi']) . "</b></span>";
        }if (isset($data['dirawat'])) {
            echo "<span>Total : <b>". count($data['dirawat']) . "</b></span>";
        }if (isset($data['tdirawat'])) {
            echo "<span>Total : <b>". count($data['tdirawat']) . "</b></span>";
        }if (isset($data['tanggal'])) {
            echo "<span>Total : <b>". count($data['tanggal']) . "</b></span>";
        }if (isset($data['bulan'])) {
            echo "<span>Total : <b>". count($data['bulan']) . "</b></span>";
        }if (isset($data['tahun'])) {
            echo "<span>Total : <b>". count($data['tahun']) . "</b></span>";
        }
         ?>
        <table class="table">
            <thead>                               
                <tr>
                    <th>No. Rekam Medis</th>
                    <th>Nama Pasien</th>
                    <th>Tanggal Masuk</th>
                    <th>Tanggal Keluar</th>
                    <th>Jenis Perawatan</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>            
            <?php                          
            $no = 1;
            if (isset($data['reservasi'])) {
            foreach ( $data['reservasi'] as $rsv) : ?>            
            <tr>                                    
                <td><?= $rsv['no_rekam_medis']; ?></td>
                <td><?= $rsv['nama']; ?></td>
                <td><?= date("d/m/y", strtotime($rsv['tanggal_masuk'])); ?></td>
                <td><?= date("d/m/y", strtotime($rsv['tanggal_keluar'])); ?></td>
                <td><?= $rsv['perawatan']; ?></td>
                <td><?= $rsv['status']; ?></td>
            </tr>
            <?php endforeach;} 
            if (isset($data['dirawat'])) {
            foreach ( $data['dirawat'] as $rsv) : ?>
            <tr>                                    
                <td><?= $rsv['no_rekam_medis']; ?></td>
                <td><?= $rsv['nama']; ?></td>
                <td><?= date("d/m/y", strtotime($rsv['tanggal_masuk'])); ?></td>
                <td><?= date("d/m/y", strtotime($rsv['tanggal_keluar'])); ?></td>
                <td><?= $rsv['perawatan']; ?></td>
                <td><?= $rsv['status']; ?></td>
            </tr>
            <?php endforeach;} 
            if (isset($data['tdirawat'])) {
            foreach ( $data['tdirawat'] as $rsv) : ?>
            <tr>                                    
                <td><?= $rsv['no_rekam_medis']; ?></td>
                <td><?= $rsv['nama']; ?></td>
                <td><?= date("d/m/y", strtotime($rsv['tanggal_masuk'])); ?></td>
                <td><?= date("d/m/y", strtotime($rsv['tanggal_keluar'])); ?></td>
                <td><?= $rsv['perawatan']; ?></td>
                <td><?= $rsv['status']; ?></td>
            </tr>
            <?php endforeach;}
            if (isset($data['tanggal'])) {
            foreach ( $data['tanggal'] as $rsv) : ?>
            <tr>                                    
                <td><?= $rsv['no_rekam_medis']; ?></td>
                <td><?= $rsv['nama']; ?></td>
                <td><?= date("d/m/y", strtotime($rsv['tanggal_masuk'])); ?></td>
                <td><?= date("d/m/y", strtotime($rsv['tanggal_keluar'])); ?></td>
                <td><?= $rsv['perawatan']; ?></td>
                <td><?= $rsv['status']; ?></td>
            </tr>
            <?php endforeach;}
            if (isset($data['bulan'])) {
            foreach ( $data['bulan'] as $rsv) : ?>
            <tr>                                    
                <td><?= $rsv['no_rekam_medis']; ?></td>
                <td><?= $rsv['nama']; ?></td>
                <td><?= date("d/m/y", strtotime($rsv['tanggal_masuk'])); ?></td>
                <td><?= date("d/m/y", strtotime($rsv['tanggal_keluar'])); ?></td>
                <td><?= $rsv['perawatan']; ?></td>
                <td><?= $rsv['status']; ?></td>
            </tr>
            <?php endforeach;}
            if (isset($data['tahun'])) {
            foreach ( $data['tahun'] as $rsv) : ?>
            <tr>                                    
                <td><?= $rsv['no_rekam_medis']; ?></td>
                <td><?= $rsv['nama']; ?></td>
                <td><?= date("d/m/y", strtotime($rsv['tanggal_masuk'])); ?></td>
                <td><?= date("d/m/y", strtotime($rsv['tanggal_keluar'])); ?></td>
                <td><?= $rsv['perawatan']; ?></td>
                <td><?= $rsv['status']; ?></td>
            </tr>
            <?php endforeach;} ?>
            </tbody>
        </table>
    </section>
    <script>
		window.print();
	</script>
</body>

</html>