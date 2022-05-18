<!DOCTYPE html>
<html>

    <head>
            <title>Pustaka 2000</title>
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
                    <a href=HalamanLogin.php>Login</a>
                    </div></td>
            </tr>
        </table>
        </div>


        <h1>Detail Buku</h1>
        <table>
            <?php 
                include "myconnection.php";
                $id_buku = $_GET['id'];
        
                $query = "SELECT * FROM buku WHERE id_buku = '$id_buku'";
                $result = mysqli_query($connect,$query);

                // if(mysqli_num_rows($result) > 0) {
                    while($row = mysqli_fetch_array($result)){
            ?>
                <tr>
                    <td>Kode Buku</td>
                    <td><?php echo $row["id_buku"]; ?></td>
                </tr>
                <tr>
                    <td>Judul </td>
                    <td><?php echo $row["Judul"]; ?></td>
                </tr>
                <tr>
                    <td>Pengarang </td>
                    <td><?php echo $row["Pengarang"]; ?></td>
                </tr>
                <tr>
                    <td>Penerbit </td>
                    <td><?php echo $row["Penerbit"]; ?></td>
                </tr>
                <tr>
                    <td>Deskripsi </td>
                    <td><?php echo $row["Deskripsi"]; ?></td>
                </tr>
            <?php
                     }
                
            ?>
        </table>

        <form method="post" action="HOME.php">
            <button type="submit">Kembali ke Home</button>
        </form>

       <br><br>
       <br><br>
        <div class="footer" align="center"> Copyright &copy;  PUSTAKA 2000
        <br>
        </div>


    </body>

</html>