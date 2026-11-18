<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Daftar Pelanggan</title>
</head>
<body>

<h3>DAFTAR PELANGGAN</h3>

<table border="1" cellpadding="6" cellspacing="0">
    <thead>
        <tr>
            <th>No.</th>
            <th>KD. PLG</th>
            <th>Nama Pelanggan</th>
            <th>Alamat Pelanggan</th>
            <th>Kota Pelanggan</th>
            <th>Telp. Pelanggan</th>
            <th>Email</th>
        </tr>
    </thead>
    <tbody>
        <?php $i = 1; foreach ($ambilData as $value): ?>
        <tr>
            <td><?= $i++; ?></td>
            <td><?= html_escape($value->kd_pelanggan); ?></td>
            <td><?= html_escape($value->nama_pelanggan); ?></td>
            <td><?= html_escape($value->alamat_pelanggan); ?></td>
            <td><?= html_escape($value->kota_pelanggan); ?></td>
            <td><?= html_escape($value->telp_pelanggan); ?></td>
            <td><?= html_escape($value->email_pelanggan); ?></td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>

</body>
</html>