<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>TUKANGIN | Solusi Dari Segala Masalah</title>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

</body>
<?php
//file koneksi yang telah kita buat
require 'koneksi.php';

//diambil dari data base kita
$email = $_POST['email'];
$password = $_POST['password'];

$query_sql = "SELECT * FROM tbl_users
            WHERE email= '$email' AND password = '$password'";

$result = mysqli_query($conn, $query_sql);

if (mysqli_num_rows($result) > 0) {
  //jika ada maka akan di redirect ke halaman dashboard
  echo "
  <script>
  Swal.fire({
    title: 'Anda Berhasil Login!',
    text: 'Click login di bawah ini untuk masuk',
    icon: 'success',
    showCancelButton: false,
    confirmButtonText: 'Login',
  }).then((result) => {
    if (result.isConfirmed) {
      window.location.href = 'dasboard/index.php';
    }
  });
  </script>";
  // header("Location:dasboard/index.php");
} else {
  echo "
  <script>
  Swal.fire({
    title: 'gagal login!',
    text: 'username Atau Password anda salah',
    icon: 'error',
    showCancelButton: false,
    confirmButtonText: 'Login',
  }).then((result) => {
    if (result.isConfirmed) {
      window.location.href = 'index.php';
    }
  });
  </script>";
}


?>

<body>

</html>