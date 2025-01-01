<!DOCTYPE html>
<html>

<head>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        table,
        th,
        td {
            border: 1px solid black;
        }

        th,
        td {
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
    <h3>Data Produk</h3>
    <hr>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>ID Produk</th>
                <th>Nama Produk</th>
                <th>Stok</th>
                <th>Harga Jual</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1;
            foreach ($record as $r): ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $r->id_produk; ?></td>
                    <td><?php echo $r->nama_produk; ?></td>
                    <td><?php echo $r->stok; ?></td>
                    <td><?php echo number_format($r->harga_jual, 0, ',', '.'); ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>

</html>