<?php
    include "myconnection.php";

    $kode = $_GET["id"];
    $query = "DELETE FROM buku WHERE id_buku=$kode";

    if(mysqli_query($connect, $query)){
        header('Location:homeAdmin.php');
    }
    else{
        echo "Data gagal dihapus <br>";
        mysqli_error($connect);
    }
    mysqli_close();
?>