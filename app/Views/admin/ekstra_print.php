<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Print Data Ekstrakurikuler</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        .text-center {
            text-align: center;
        }
    </style>
</head>
<body>
    <h2 class="text-center">Data Ekstrakurikuler</h2>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Hari</th>
                <th>Type</th>
                <th>Deskripsi</th>
                <th>Quotes</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1; foreach ($ekstra as $row): ?>
            <tr>
                <td><?= $i++; ?></td>
                <td><?= $row['Nama']; ?></td>
                <td><?= $row['Hari']; ?></td>
                <td><?= $row['type']; ?></td>
                <td><?= $row['des']; ?></td>
                <td><?= $row['quotes']; ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <script>
        window.onload = function() {
            window.print();
        };
    </script>
</body>
</html>
