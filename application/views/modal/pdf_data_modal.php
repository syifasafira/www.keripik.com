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
    <h3>Data Modal</h3>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Id Modal</th>
                <th>Tanggal</th>
                <th>Jumlah Modal</th>
                <th>Keterangan</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            foreach ($record->result() as $r) {
                echo "<tr>
                    <td>$no</td>
                    <td>$r->id_modal</td>
                    <td>$r->tanggal</td>
                    <td>$r->jumlah_modal</td>
                    <td>$r->keterangan</td>
                </tr>";
                $no++;
            }
            ?>
        </tbody>
    </table>
</body>

</html>