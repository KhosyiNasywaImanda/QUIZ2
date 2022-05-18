<!DOCTYPE html>
<html>

    <head>
            <title>PUSTAKA 2000</title>
            <link rel="stylesheet" type="text/css" href="style.css">
            
            
    </head>
    <body>

        <!-- bagian header -->
       <div class="header">
        <table width="100%" height="100%">
            <tr>
                <td><div class="judul">Toko buku PUSTAKA 2000 </div></td>

                <td><div class="tautan">
                    <h2>
                    <a href=HOME.php>Home</a>
                    <a href=HalamanLogin.php>Login</a>
                    </div></td>
            </tr>
        </table>
        </div>


        <!-- bagian isi -->
        <table>
        <div class="paragraf">
        <h1>SELAMAT DATANG DI TOKO "PUSTAKA 2000"</h1>
        <form action="cari.php" method="get" align = "right">
            Cari judul buku :
            <input type="text" name="cariJudul">
            <input type="submit" value="Cari">
        </form>
    
        <table>
        <div class="paragraf">
            <br>
            <tr>
                <th> Kode Buku </th>
                <th> Judul </th>
                <th> Pengarang </th>
                <th> Aksi </th>
            </tr>
            <?php
                include "myconnection.php";

                $query = "SELECT * FROM buku";
                $result = mysqli_query($connect , $query);
                
                if(mysqli_num_rows($result) > 0){
                    while($row = mysqli_fetch_array($result)){
            ?>
            <tr>
            
                <td> <?php echo $row["id_buku"]; ?> </td>
                <td> <?php echo $row["Judul"]; ?> </td>
                <td> <?php echo $row["Pengarang"]; ?> </td>
                <td>

                    <a href="detailForm.php?id=<?php echo $row["id_buku"]; ?>">
                    <button> Detail </button> </a>
                    
                </td>
            </tr>
            <?php
                    }
                }
                else{
                    echo "";
                }
            ?>

        </div>
        </table>

        
        <!-- bagian footer -->
        <div class="footer" align="center"> Copyright &copy;  PUSTAKA 2000
        <br>
        </div>


    </body>

</html>