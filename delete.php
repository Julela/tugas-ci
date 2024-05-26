<?php 

require 'function.php';

$id = $_GET["id"];

if( delete($id) > 0){
    echo"
    <script>
    alert('Berhasil Dihapus!');
    document.location.href = 'cruds.php';
    </script>
    ";
}else{
    echo"
    <script>
    alert('Gagal Dihapus!');
    document.location.href = 'cruds.php';
    </script>
    ";
}

?>