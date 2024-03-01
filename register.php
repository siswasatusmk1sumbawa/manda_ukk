<?php
    include "koneksi.php";

     if (isset($_POST['register'])) {
      $username=$_POST['username'];
      $password=$_POST['password'];
      $email=$_POST['email'];
      $namalengkap=$_POST['namalengkap'];
      $alamat=$_POST['alamat'];
  
      $sql=mysqli_query($conn,"insert into user values('','$username','$password','$email','$namalengkap','$alamat')");
      echo "<script>
      alert('akun anda berhasil terdaftar');
      location.href='login.php';
    </script> "; 

    }
    
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web galeri foto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
  </head>


<body>
    <?php 
    include "layout/header.html";
     ?>

   <main>   
   
    <div class="container row">
        <div class="row justify-content-center">
        <div class="col-sm-4 mt-4">
        <h1>Register</h1>
        <form action="register.php" method="POST">
  <div class="mb-3 mt-3">
    <label for="Username" class="form-label">Username:</label>
    <input type="text" class="form-control" id="Username" placeholder="Masukan Username" name="username">
  </div>
  <div class="mb-3">
    <label for="Password" class="form-label">Password:</label>
    <input type="password" class="form-control" id="Password" placeholder="Masukan Password" name="password">
  </div>
  <div class="mb-3 mt-3">
    <label for="email" class="form-label">Email:</label>
    <input type="email" class="form-control" id="Email" placeholder="Masukan Email">
  </div>
  <div class="mb-3">
    <label for="Nama Lengkap" class="form-label">Nama Lengkap:</label>
    <input type="text" class="form-control" id="Nama Lengkap" placeholder="Masukan Nama Lengkap" name="namalengkap">
  </div>
  <div class="mb-3 mt-3">
    <label for="Alamat" class="form-label">Alamat:</label>
    <input type="text" class="form-control" id="Alamat" placeholder="Masukan Alamat" name="alamat">
  </div>
  <div class="form-check mb-3">
    <label class="form-check-label">
      <input class="form-check-input" type="checkbox" name="remember"> Remember me
    </label>
  </div>
  <button type="submit" class="btn btn-primary" name="register">Register</button>
</form>

</main>
   <?php 
    include "layout/footer.html";
     ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>