<?php
include('config.php'); // File untuk koneksi ke database
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Enkripsi password

    $query = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";
    if (mysqli_query($conn, $query)) {
        $_SESSION['message'] = "Pendaftaran berhasil, silakan login!";
        header('Location: login.php'); // Redirect ke halaman login
        exit();
    } else {
        $_SESSION['message'] = "Pendaftaran gagal, coba lagi.";
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background: linear-gradient(to right, #62b6cb, #cae9ff);
            margin: 0;
            padding: 0;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .register-container {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            width: 300px;
            text-align: center;
        }

        h2 {
            color: #284B63;
            margin-bottom: 20px;
        }

        label {
            font-size: 14px;
            color: #5fa8d3;
            text-align: left;
            display: block;
            margin-bottom: 5px;
        }

        input {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border-radius: 5px;
            border: 1px solid #ddd;
            box-sizing: border-box;
        }

        input[type="text"], input[type="email"], input[type="password"] {
            background-color: #f9f9f9;
        }

        button {
            width: 100%;
            padding: 10px;
            background-color: #62b6cb;
            border: none;
            border-radius: 5px;
            color: #fff;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #5fa8d3;
        }

        p {
            color: #284B63;
        }

        a {
            color: #284B63;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }

        .message {
            color: red;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <div class="register-container">
        <h2>Daftar Akun Baru</h2>
        <form method="POST">
            <label for="username">Nama Pengguna</label>
            <input type="text" id="username" name="username" required><br>

            <label for="email">Email</label>
            <input type="email" id="email" name="email" required><br>

            <label for="password">Kata Sandi</label>
            <input type="password" id="password" name="password" required><br>

            <button type="submit">Daftar</button>
        </form>

        <p>Sudah punya akun? <a href="login.php">Login di sini</a></p>

        <?php
        if (isset($_SESSION['message'])) {
            echo "<p class='message'>" . $_SESSION['message'] . "</p>";
            unset($_SESSION['message']);
        }
        ?>
    </div>
</body>
</html>
