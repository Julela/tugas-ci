<?php 

require 'function.php';


$result = mysqli_query($connect, "SELECT * FROM user");

$id = $_GET["id"];

$user = query("SELECT * FROM user WHERE id = $id")[0];
// var_dump($user);

if(isset($_POST["submit"])){


    if(update($_POST) > 0){
        echo"
        <script>
        alert('Berhasil diupdate');
        document.location.href = 'cruds.php';
        </script>
        ";
      } else{
        // echo "Gagal!";
        echo"
        <script>
        alert('Gagal diupdate');
        document.location.href = 'update.php';
        </script>
        ";
      }


//   $nama = $_POST["nama"];
//   $telp = $_POST["telp"];
//   $alamat= $_POST["alamat"];
//   $email = $_POST["email"];
//   $username = $_POST["username"];

  
//   $query = "INSERT INTO user (nama, telp, alamat, email, username) 
//   VALUES ('$nama', '$telp', '$alamat', '$email', '$username')";


//   mysqli_query($connect, $query);
//   var_dump(mysqli_affected_rows($connect));


}








?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Update</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"/>


  </head>
  <body>
    <br />
    <h1 style="margin-left: 50px">Update Data</h1>
    <br />
    <br>


<form action="" method="post">
    <input type="hidden" name="id" value="<?= $user["id"]; ?>">

<div class="row g-3 align-items-center" style="margin-left: 50px;">
  <div class="col-2">
    <label for="nama" class="col-form-label">Nama :</label>
  </div>
  <div class="col-auto">
    <input type="text" id="nama" name="nama" class="form-control" required value="<?= $user["nama"]; ?>">
  </div>
</div><br>

<div class="row g-3 align-items-center" style="margin-left: 50px;">
  <div class="col-2">
    <label for="telepon" class="col-form-label">Nomor Telepon :</label>
  </div>
  <div class="col-auto">
    <input type="text" id="telepon" name="telp" class="form-control" required value="<?= $user["telp"]; ?>">
  </div>
</div><br>

<div class="row g-3 align-items-center" style="margin-left: 50px;">
  <div class="col-2">
    <label for="alamat" class="col-form-label">Alamat :</label>
  </div>
  <div class="col-auto">
    <input type="text" id="alamat" name="alamat" class="form-control" required value="<?= $user["alamat"]; ?>">
  </div>
</div><br>

<div class="row g-3 align-items-center" style="margin-left: 50px;">
  <div class="col-2">
    <label for="email" class="col-form-label">Email :</label>
  </div>
  <div class="col-auto">
    <input type="text" id="email" name="email" class="form-control"required value="<?= $user["email"]; ?>" >
  </div>
</div>
<br>

<div class="row g-3 align-items-center" style="margin-left: 50px;">
  <div class="col-2">
    <label for="username" class="col-form-label">Username :</label>
  </div>
  <div class="col-auto">
    <input type="text" id="username" name="username" class="form-control"required value="<?= $user["username"]; ?>" >
  </div>
</div>
<br>
<button type="submit" class="btn btn-primary" style="margin-left: 310px;" name="submit">Submit</button><br><br><br>

</form>









    <table class="table" style="margin-left: 50px; width: 90%">
      <thead class="table-dark">
        <tr>
          <th scope="col">No.</th>
          <th scope="col">Nama</th>
          <th scope="col">No. Telepon</th>
          <th scope="col">Alamat</th>
          <th scope="col">Email</th>
          <th scope="col">Username</th>
          <th scope="col">Aksi</th>
        </tr>
      </thead>
      <tbody>
        <?php $i = 1; ?>
        <?php foreach( $result as $row) : ?>
        <tr>
          <th scope="row"><?= $i; ?></th>
          <td><?= $row["nama"]; ?></td>
          <td><?= $row["telp"]; ?></td>
          <td><?= $row["alamat"]; ?></td>
          <td><?= $row["email"]; ?></td>
          <td><?= $row["username"]; ?></td>
          <!-- <td>@mdo</td> -->
          <td>
            <a href="update.php?id=<?= $row["id"]; ?>">Update</a> |
            <a href="delete.php?id=<?= $row["id"]; ?>">Delete</a>
          </td>
        </tr>
        <?php $i++; ?>
        <?php endforeach; ?>
    
      </tbody>
    </table>


  </body>
</html>
