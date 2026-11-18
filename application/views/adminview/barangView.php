
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/dist/css/adminlte.min.css">
    <title></title>
</head>
<body>

<div class="content-wrapper">
    <div class="card">

        <!--==========================================1==========================================-->

        <div class="card-header">
            <h2 class="card-title"><b>Data Barang</b></h2>
        </div>

        <!-- /.card-header -->

        <div class="card-body">

            <button type="button" class="btn btn-success"
                data-toggle="modal" data-target="#modal-tbarang">
                Tambah Data
            </button>

            <table id="example1" class="table table-bordered table-striped">

                <thead>
                    <tr>
                        <th width="5%">No</th>
                        <th width="7%">Kd Brg</th>
                        <th width="15%">Nama Barang</th>
                        <th width="5%">Stok</th>
                        <th width="13%">Harga</th>
                        <th>Satuan</th>
                        <th>Keterangan</th>
                        <th width="15%">Gambar</th>
                        <th>Aksi</th>
                    </tr>
                </thead>

                <!--==========================================2==========================================-->

                <tbody>
                    <?php
                    $i=1;
                    foreach ($dtbarang as $value){
                    ?>

                    <tr>
                        <td><?php echo $i; ?></td>
                        <td><?php echo $value->kd_barang; ?></td>
                        <td><?php echo $value->nama_barang; ?></td>
                        <td><?php echo $value->stok; ?></td>
                        <td><?php echo 'Rp. '.number_format($value->harga); ?></td>
                        <td><?php echo $value->satuan; ?></td>
                        <td><?php echo $value->keterangan; ?></td>
                        <td><?php echo $value->gambar; ?></td>

                        <td>
                            <div class="btn btn-sm btn-info">
                                <i class="fas fa-pencil-alt"></i>
                                Edit
                            </div>

                            <div class="btn btn-sm btn-danger">
                                <i class="fas fa-trash"></i>
                                Hapus
                            </div>
                        </td>
                    </tr>

                    <?php
                    $i++;
                    }
                    ?>
                </tbody>

            </table>

        </div>

        <!--==========================================3==========================================-->

    </div>
</div>

</body>
</html>
