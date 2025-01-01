<!DOCTYPE html>
<html>

<head>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th,
        td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        h3 {
            text-align: center;
        }
    </style>
</head>

<body>
    <h3>Data Transaksi</h3>
    <hr>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>ID Transaksi</th>
                <th>Nama Pelanggan (ID Pesanan)</th>
                <th>Total Harga</th>
                <th>Tanggal Transaksi</th>
                <th>Metode Pembayaran</th>
                <th>Status Transaksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1;
            foreach ($record as $r): ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $r->id_transaksi; ?></td>
                    <td><?php echo $r->nama_pelanggan . " (" . $r->id_pesanan . ")"; ?></td>
                    <td><?php echo number_format($r->total_harga, 0, ',', '.'); ?></td>
                    <td><?php echo $r->tanggal_transaksi; ?></td>
                    <td><?php echo ucfirst($r->metode_pembayaran); ?></td>
                    <td><?php echo ucfirst($r->status_transaksi); ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>

</html>