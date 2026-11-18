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
        <!-- /.card-header -->

        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th width="5%">No</th> <th width="7%">Kode Pelanggan</th> <th width="15%">Nama Pelanggan</th>
                        <th width="15%">Alamat</th> <th width="13%">Kota Pelanggan</th> <th width="13%">Telp.</th>
                        <th>Email</th>
                    </tr>
                </thead>
                
                <tbody>
    <?php
    $i = 1;
    foreach ($dtpelanggan as $value) {
    ?>
        <tr>
            <td><?php echo $i; ?></td>
            <td><?php echo $value->kode_pelanggan; ?></td>
            <td><?php echo $value->nama_pelanggan; ?></td>
            <td><?php echo $value->alamat_pelanggan; ?></td>
            <td><?php echo $value->kota_pelanggan; ?></td>
            <td><?php echo $value->telp_pelanggan; ?></td>
            <td><?php echo $value->email_pelanggan; ?></td>
        </tr>
    <?php
        $i++;
    }
    ?>
</tbody>

            </table>
        </div>
    </div>
</div>

</body>
</html>