<!DOCTYPE HTML>
<html>
    <head>
        <title>PHP MySQL </title>
    </head>
    </body>
        <?php
            include "myconnection.php";
            $id_buku = $_GET["id"];
            $query = "SELECT * FROM buku WHERE id_buku='$id_buku'";
            $result = mysqli_query($connect,$query);
        ?>
        <form action="editProcess.php" method="get">
            <table>
                <?php
                    while($row=mysqli_fetch_array($result)){
                ?>

                <tr>
                    <td> Kode Buku: </td>
                    <td> <input type="text" name="myKode" value="<?php echo $row['id_buku']; ?>" readonly> </td>
                </tr>
                <tr>
                    <td> Judul : </td>
                    <td><input type="text" name="myJudul" value="<?php echo $row['Judul'];?>"> </td>
                </tr>
                <tr>
                    <td>Pengarang : </td>
                    <td>
                        <textarea name="myPengarang" rows="5" cols="20"><?php echo $row ['Pengarang'];?>
                        </textarea>
                    </td>
                </tr>
                <tr>
                    <td> <input type="submit" name="save" value="Simpan"> </td>
                </tr>
                <?php
                    }
                ?>
            </table>
        </form>
    <body>
</html>




                    }