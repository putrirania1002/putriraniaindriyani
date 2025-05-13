<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tabel Perkalian 10x10</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f7fafc;
            color: #2d3748;
            padding: 40px;
        }
        h2 {
            text-align: center;
            color: #013d5a;
            margin-bottom: 30px;
            font-weight: 700;
        }
        table {
            border-collapse: collapse;
            width: 80%;
            margin: 0 auto;
            background-color: white;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            overflow: hidden;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: center;
        }
        th {
            background-color: #013d5a;
            color: white;
            font-weight: 600;
        }
        tr:nth-child(even) td {
            background-color: #edf2f7;
        }
        tr:hover td {
            background-color: #dbeafe;
        }
    </style>
</head>
<body>

    <h2>Tabel Perkalian 10 x 10</h2>

    <table>
        <tr>
            <th>x</th>
            <?php for ($i = 1; $i <= 10; $i++): ?>
                <th><?= $i ?></th>
            <?php endfor; ?>
        </tr>
        <?php for ($i = 1; $i <= 10; $i++): ?>
            <tr>
                <th><?= $i ?></th>
                <?php for ($j = 1; $j <= 10; $j++): ?>
                    <td><?= $i * $j ?></td>
                <?php endfor; ?>
            </tr>
        <?php endfor; ?>
    </table>

</body>
</html>
