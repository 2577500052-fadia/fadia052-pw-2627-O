<!DOCTYPE html>
<html>
<head>
    <title>Daftar Mahasiswa Baru</title>
</head>
<body>
    <h1>Daftar Mahasiswa Baru</h1>

    <?php
    $no = 1;
    foreach ($mahasiswa as $item):
    ?>
        <?php echo $no . '. '; ?>
        <?php echo $item['nim'] . ' - '; ?>
        <?php echo $item['nama'] . ' - '; ?>
        <?php echo $item['jenis_kelamin'] . ' - '; ?>
        <?php echo $item['alamat']; ?>
        <br>
    <?php
        $no++;
    endforeach;
    ?>
</body>
</html>