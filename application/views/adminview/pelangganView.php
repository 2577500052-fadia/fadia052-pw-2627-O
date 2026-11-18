<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?php echo base_url();?>/assets/css/adminlte.min.css">
    <title></title>
</head>
<body>

<div class="content-wrapper">
    <div class="card">
        <div class="card-header">
            <h2 class="card-title">Data Pelanggan</h2>
        </div>

        <div class="card-body">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Kd Pelanggan</th>
                        <th>Nama Pelanggan</th>
                        <th>Alamat Pelanggan</th>
                        <th>Kota Pelanggan</th>
                        <th>Telp. Plg</th>
                        <th>Email Plg</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($dtpelanggan as $value) : ?>
                        <tr>
                            <td><?= $i++; ?></td>
                            <td><?= $value->kd_pelanggan; ?></td>
                            <td><?= $value->nama_pelanggan; ?></td>
                            <td><?= $value->alamat_pelanggan; ?></td>
                            <td><?= $value->kota_pelanggan; ?></td>
                            <td><?= $value->telp_pelanggan; ?></td>
                            <td><?= $value->email_pelanggan; ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

</body>
</html>