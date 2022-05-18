<?php
    include "myconnection.php";

    $kode = $_GET["tbhKode"];
    $judul = $_GET["tbhJudul"];
    $pengarang = $_GET["tbhPengarang"];
    $penerbit = $_GET["tbhPenerbit"];
    $deskripsi = $_GET["tbhDeskripsi"];

    $query = "INSERT INTO buku(id_buku, Judul, Pengarang, Penerbit, Deskripsi)
        VALUE('$kode','$judul','$pengarang','$penerbit','$deskripsi')";
    
    if(mysqli_query($connect, $query)){
        header('Location:homeAdmin.php');
    }
    else{
        echo "Data baru gagal ditambahkan <br>" . mysqli_error($connect);
    }

    mysqli_close($connect);
?>