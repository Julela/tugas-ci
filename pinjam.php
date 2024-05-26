<?php
// CONNECT KE DATABSE
$connect = mysqli_connect("localhost","root","","db_perpus"); 


$result = mysqli_query($connect, "SELECT * FROM peminjaman");
?>
 



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Data Peminjaman</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
  </head>
  <body>
    <br />
    <h1 style="margin-left: 50px">Data Peminjaman</h1>
    <br />

    <table class="table" style="margin-left: 50px; width: 90%">
      <thead class="table-dark">
        <tr>
          <th scope="col">ID</th>
          <th scope="col">ID Pengguna</th>
          <th scope="col">Jumlah</th>
          <th scope="col">Tanggal Pinjam</th>
          <th scope="col">Tanggal Kembali</th>
          <th scope="col">Batas Waktu</th>
          <th scope="col">Status</th>
          <th scope="col">Denda</th>
          <!-- <th scope="col">Delete</th> -->
        </tr>
      </thead>
      <tbody>
        <?php $i= 1; ?>
        <?php while($row = mysqli_fetch_assoc($result)) : ?>
        <tr>
          <th scope="row"><?= $i; ?></th>
          <td><?= $row["user_id"];?></td>
          <td><?= $row["jumlah_buku"];?></td>
          <td><?= $row["tgl_pinjam"];?></td>
          <td><?= $row["tgl_kembali"];?></td>
          <td><?= $row["batas_waktu"];?></td>
          <td><?= $row["status"];?></td>
          <td><?= $row["denda"];?></td>
          <!-- <td>Update</td>
          <td>Delete</td> -->
        </tr>
        <?php $i++; ?>
        <?php endwhile; ?>


        <!-- <tr>
          <th scope="row">2</th>
          <td>Jacob</td>
          <td>Thornton</td>
          <td>@fat</td>
          <td>Mark</td>
          <td>Otto</td>
          <td>@mdo</td>
          <td>Update</td>
          <td>Delete</td>
        </tr>
        <tr>
          <th scope="row">3</th>
          <td>Jacob</td>
          <td>Thornton</td>
          <td>@fat</td>
          <td>Mark</td>
          <td>Otto</td>
          <td>@mdo</td>
          <td>Update</td>
          <td>Delete</td>
        </tr> -->
      </tbody>
    </table>

    <!-- 


    <table class="table">
      <thead>
      
      </thead>
      <tbody>
        
      </tbody>
    </table> -->
  </body>
</html>
