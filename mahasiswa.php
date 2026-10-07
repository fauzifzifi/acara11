<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            background-color: #f4f6f9;
        }

        header {
            background-color: #2563eb;
            color: white;
            padding: 25px;
            text-align: center;
        }

        .container {
            width: 80%;
            margin: 30px auto;
        }

        .card {
            background-color: white;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th,
        td {
            padding: 12px;
            border: 1px solid #ddd;
            text-align: left;
        }

        th {
            background-color: #2563eb;
            color: white;
        }

        a {
            display: inline-block;
            margin-top: 20px;
            text-decoration: none;
            background-color: #2563eb;
            color: white;
            padding: 10px 18px;
            border-radius: 6px;
        }
    </style>
</head>

<body>

    <header>
        <h1>Data Mahasiswa</h1>
        <p>Sistem Informasi Akademik</p>
    </header>

    <div class="container">
        <div class="card">
            <h2>Daftar Mahasiswa</h2>

            <table>
                <tr>
                    <th>NIM</th>
                    <th>Nama</th>
                    <th>Program Studi</th>
                </tr>

                <tr>
                    <td>230001</td>
                    <td>Ahmad</td>
                    <td>Teknik Informatika</td>
                </tr>

                <tr>
                    <td>230002</td>
                    <td>Budi</td>
                    <td>Teknik Informatika</td>
                </tr>

                <tr>
                    <td>230003</td>
                    <td>Citra</td>
                    <td>Teknik Informatika</td>
                </tr>
            </table>

            <a href="index.php">Kembali ke Beranda</a>
        </div>
    </div>

</body>

</html>