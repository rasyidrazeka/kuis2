<?php
    include "myconnection.php";

    $kode = $_GET["edtKode"];
    $judul = $_GET["edtJudul"];
    $pengarang = $_GET["edtPengarang"];
    $penerbit = $_GET["edtPenerbit"];
    $deskripsi = $_GET["edtDeskripsi"];

    $query = "UPDATE buku SET id_buku='$kode', Judul='$judul', Pengarang='$pengarang', Penerbit='$penerbit', Deskripsi='$deskripsi' WHERE id_buku=$kode";

    if(mysqli_query($connect, $query)){
        header('Location:homeAdmin.php');
    }
    else{
        echo "Gagal mengubah data <br>" . mysqli_error($connect);
    }
    mysqli_close($connect);
?>