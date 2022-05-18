<!DOCTYPE html>
<html>

    <head>
            <title>Welcome to McDonald's</title>
            <link rel="stylesheet" type="text/css" href="style.css">
            
            
    </head>
    <body>

        
       <div class="header">
        <table width="100%" height="100%">
            <tr>
                <td><div class="judul">Toko buku PUSTAKA 2000 </div></td>

                <td><div class="tautan">
                    <h2>
                    <a href=HOME.php>Home</a>
                    <a href=HalamanLogout.php>Logout</a>
                    </div></td>
            </tr>
        </table>
        </div>

        <h1>SELAMAT DATANG DI TOKO "PUSTAKA 2000"</h1>
    
       <form align = "right" method="post" action="insertForm.html">
           <button type="submit">Tambah Data Buku</button>
        </form>
        <table>
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
                    <button> detail </button> </a>
                    <a href="editForm.php?id=<?php echo $row["id_buku"]; ?>">
                    <button> Edit </button> </a>
                    <a href="hapus.php?id_buku=<?php echo $row["id_buku"]; ?>">
                    <button> Hapus </button> </a>
                </td>
            </tr>
            <?php
                    }
                }
                else{
                    echo "";
                }
            ?>
        </table>

       
        <div class="footer" align="center"> Copyright &copy;  PUSTAKA 2000
        <br>
        </div>


    </body>

</html>