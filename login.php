<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Sistem Informasi Akademik</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f6f9;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
        }

        .login-box {
            background: white;
            padding: 30px;
            width: 320px;
            border-radius: 10px;
            box-shadow: 0 2px 10px #ccc;
        }

        h2 {
            text-align: center;
            color: #2563eb;
        }

        input,
        button {
            box-sizing: border-box;
            width: 100%;
            padding: 12px;
            margin-top: 12px;
            border-radius: 5px;
        }

        input {
            border: 1px solid #ccc;
        }

        button {
            border: none;
            background: #2563eb;
            color: white;
            cursor: pointer;
        }

        .back {
            display: block;
            margin-top: 15px;
            text-align: center;
            text-decoration: none;
            color: #2563eb;
        }
    </style>
</head>

<body>
    <div class="login-box">
        <h2>Login Akademik</h2>

        <form onsubmit="event.preventDefault(); alert('Contoh tampilan login berhasil diuji.');">
            <input type="text" placeholder="Username" required>
            <input type="password" placeholder="Password" required>
            <button type="submit">Login</button>
        </form>

        <a class="back" href="index.php">Kembali ke Beranda</a>
    </div>
</body>

</html>