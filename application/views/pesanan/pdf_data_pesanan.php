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
    <h3>Data Pesanan</h3>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Id Pesanan</th>
                <th>Nama Pelanggan</th>
                <th>Nama Produk</th>
                <th>Jumlah</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            foreach ($record->result() as $r) {
                echo "<tr>
                    <td>$no</td>
                    <td>$r->id_pesanan</td>
                    <td>$r->nama_pelanggan</td>
                    <td>$r->nama_produk</td>
                    <td>$r->jumlah</td>
                </tr>";
                $no++;
            }
            ?>
        </tbody>
    </table>
</body>

</html>