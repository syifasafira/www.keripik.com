<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pelanggan</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
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
    </style>
</head>

<body>
    <h3>Data Pelanggan</h3>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>ID Pelanggan</th>
                <th>Nama</th>
                <th>No Telepon</th>
                <th>Alamat</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            foreach ($pelanggan as $p) {
                echo "<tr>
                <td>{$no}</td>
                <td>{$p['id_pelanggan']}</td>
                <td>{$p['nama_pelanggan']}</td>
                <td>{$p['no_telepon']}</td>
                <td>{$p['alamat']}</td>
                </tr>";
                $no++;
            }
            ?>
        </tbody>
    </table>
</body>

</html>