<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>

    <?php

    // File koneksi database
    require "koneksi.php";

    // Ambil data dari form register
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Query untuk memasukkan data ke database
    $query_sql = "INSERT INTO tbl_users (username, email,password) 
    VALUES ('$username',  '$email','$password ')";

    // Cek apakah data berhasil dimasukkan
    if (mysqli_query($conn, $query_sql)) {
        // Register berhasil
        // header("Location:index.php");
        echo "<script>
                 Swal.fire({
                title: 'Anda Berhasil registrasi!',
                text: 'Click login di bawah ini untuk melakukan login',
                icon: 'success',
                showCancelButton: false,
                confirmButtonText: 'Login',
                }).then((result) => {
                    if (result.isConfirmed) {
                    window.location.href = 'index.php';
                    }
                });
                </script>";
    } else {
        // Register gagal
        echo "Registrasi gagal. Silakan coba lagi.";
    }
    ?>

</body>

</html>