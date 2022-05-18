<?php
    include "myconnection.php";

    $kodeBuku = $_POST["kodeBuku"];
    $judul = $_POST["judul"];
    $pengarang = $_POST["pengarang"];

    $query = "INSERT INTO buku(id_buku,Judul,Pengarang)
            VALUE('$kodeBuku','$judul','$pengarang')";

    if(mysqli_query($connect, $query)){
        echo "Data baru berhasil ditambahkan";
    }else{
        echo "Data baru gagal ditambahkan <br>". mysqli_error($connect);
    }

    mysqli_close($connect);
?>