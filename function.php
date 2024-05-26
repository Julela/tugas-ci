<?php
$connect = mysqli_connect("localhost","root","","db_perpus"); 




// koneksi ke database
// $sambung = mysqli_connect("localhost","root","","learnphp");  







// FUNCTION QUERY / MENGAMBIL DATA DARI DATABASE
function query($query){
    // ambil data dari database (query)
    global $connect;
    $kueri = mysqli_query($connect, $query);
    $kotak = [];

    while ($row = mysqli_fetch_assoc($kueri)){
    $kotak[]= $row;}

    return $kotak;
}





// FUNCTION CREATE
function create($tambah){
    global $connect;

    $nama =htmlspecialchars($tambah["nama"]);
    $telp =htmlspecialchars($tambah["telp"]);
    $alamat =htmlspecialchars($tambah["alamat"]);
    $email =htmlspecialchars($tambah["email"]);
    $username =htmlspecialchars($tambah["username"]);
 
    // $query = "INSERT INTO user VALUES 
    // ('', '$nama', '$telp', '$alamat','$email', '$username')";


    $query = "INSERT INTO user (nama, telp, alamat, email, username) 
//   VALUES ('$nama', '$telp', '$alamat', '$email', '$username')";

    
    mysqli_query($connect, $query );
    return mysqli_affected_rows($connect);

}






// FUNCTION DELETE
function delete($id){
    global $connect;
    mysqli_query($connect, "DELETE FROM user WHERE id = $id");
    return mysqli_affected_rows($connect);
}





// FUNCTION UPDATE
function update($tambah){
    global $connect;
    $id = ($tambah["id"]);
    $nama =htmlspecialchars($tambah["nama"]);
    $telp =htmlspecialchars($tambah["telp"]);
    $alamat =htmlspecialchars($tambah["alamat"]);
    $email =htmlspecialchars($tambah["email"]);
    $username =htmlspecialchars($tambah["username"]);
   
    $query = "UPDATE user SET 
    nama='$nama', telp='$telp', alamat='$alamat', email='$email',  username='$username'
    WHERE id = $id";

    mysqli_query($connect, $query);
    return mysqli_affected_rows($connect);

}







// FUNCTION SEARCH
function search($search){
    $kueri = "SELECT * FROM students WHERE 
    nama LIKE '%$search%' 
    OR
    telepon LIKE '%$search%'
    OR
    kelas LIKE '%$search%'
    OR
    jurusan LIKE '%$search%'   
    OR
    sekolah LIKE '%$search%' 
    ";
    
    return query($kueri);
}
?>

?>