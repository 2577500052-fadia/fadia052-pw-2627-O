<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Daftar Pelanggan</title>
</head>
<body>

    <h2>Form Pelanggan</h2>

    <form method="post" action="<?php echo site_url('LatihanController3/SimpanDataPlg'); ?>">
    <table>
        <tr>
            <td>Kode Pelanggan</td>
            <td><input type="text" name="kd_pelanggan" required></td>
        </tr>
        <tr>
            <td>Nama Pelanggan</td>
            <td><input type="text" name="nama_pelanggan" required></td>
        </tr>
        <tr>
            <td>Alamat Pelanggan</td>
            <td><input type="text" name="alamat_pelanggan" required></td>
        </tr>
        <tr>
            <td>Kota Pelanggan</td>
            <td><input type="text" name="kota_pelanggan" required></td>
        </tr>
        <tr>
            <td>Telp Pelanggan</td>
            <td><input type="text" name="telp_pelanggan" required></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><input type="email" name="email" required></td>
        </tr>
        <tr>
            <td></td>
            <td><button type="submit">Simpan</button></td>
        </tr>
    </table>
</form>

    <br>

</body>
</html>