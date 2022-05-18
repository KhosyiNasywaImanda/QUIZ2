<?php
    include "myconnection.php";

    $id_buku = $_GET["myKode"];
    $Judul = $_GET["myJudul"];
    $Pengarang = $_GET["myPengarang"];

    $query = "UPDATE buku SET Judul = '$Judul' , pengarang='$Pengarang'  WHERE id_buku='$id_buku'";

    if(mysqli_query($connect, $query)){
        header('Location:halamanAdmin.php');
    }else{
        echo "Gagal mengubah data <br>". mysqli_error($connect);
    }

    mysqli_close($connect);
?>