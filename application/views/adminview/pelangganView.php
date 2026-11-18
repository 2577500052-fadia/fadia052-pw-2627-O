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

    <!-- Content Header -->
    <section class="content-header">
        <div class="container-fluid">
            <h1>Data Pelanggan</h1>
        </div>
    </section>

    <!-- Main Content -->
    <section class="content">
        <div class="container-fluid">

            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Data Pelanggan</h3>
                </div>

                <div class="card-body">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Kd Pelanggan</th>
                                <th>Nama Pelanggan</th>
                                <th>Alamat Pelanggan</th>
                                <th>Kota Plg</th>
                                <th>Telp. Plg</th>
                                <th>Email Plg</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php $no = 1; ?>
                            <?php foreach ($dtpelanggan as $p) { ?>
                                <tr>
                                    <td><?php echo $no++; ?></td>
                                    <td><?php echo $p->kd_pelanggan; ?></td>
                                    <td><?php echo $p->nama_pelanggan; ?></td>
                                    <td><?php echo $p->alamat_pelanggan; ?></td>
                                    <td><?php echo $p->kota_pelanggan; ?></td>
                                    <td><?php echo $p->telp_pelanggan; ?></td>
                                    <td><?php echo $p->email; ?></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>

            </div>

        </div>
    </section>

</div>

</body>
</html>