<?php 

$connect = mysqli_connect("localhost","root","","db_perpus"); 


$result = mysqli_query($connect, "SELECT * FROM user");

?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>CRUDS</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
  </head>
  <body>
    <br />
    <h1 style="margin-left: 50px">Halaman Admin</h1>
    <br />



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




    <div class="d-grid gap-2 col-6 mx-auto" style="width: 25%">
      <!-- <button class="btn btn-primary btn-lg" type="button">
        +Tambahkan Data
      </button> -->
      <button class="btn btn-primary" type="button" href="create.php"> +Tambahkan Data</button>
    </div>

    <!-- 


    <table class="table">
      <thead>
      
      </thead>
      <tbody>
        
      </tbody>
    </table> -->
  </body>
</html>
