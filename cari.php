<!DOCTYPE HTML>
<html>
    <head>
        <title>Home</title>
        <link rel="stylesheet" type="text/css" href="style.css"/>
    </head>
    <body>
        <h1>Hasil pencarian JUDUL BUKU</h1>
        <table>
            <tr>
                <th> Kode Buku </th>
                <th> Judul </th>
                <th> Pengarang </th>
                <th> Aksi </th>
            </tr>
            <?php
                $nama = $_GET["cariJudul"];
                include "myconnection.php";

                $query = "SELECT * FROM buku WHERE judul LIKE '%$nama%'";
                $result = mysqli_query($connect , $query);
                
                if(mysqli_num_rows($result) > 0){
                    while($row = mysqli_fetch_array($result)){
            ?>
            <tr>            
                <td> <?php echo $row["id_buku"]; ?> </td>
                <td> <?php echo $row["Judul"]; ?> </td>
                <td> <?php echo $row["Pengarang"]; ?> </td>
                <td>
                    <a href="editForm.php?id=<?php echo $row["id_buku"]; ?>">
                    <button> Detail </button> </a>
                    
                </td>
            </tr>
            <?php
                    }
                }
                else{
                    echo "0 results";
                }
            ?>
        </table>
    </body>
</html>



