<!DOCTYPE HTML>
<html>
    <head>
        <title>Toko Buku Rasyid</title>
        <link rel="stylesheet" href="style.css" type="text/css">
    </head>
    <body>
        <div class="header">
            <table>
                <tr>
                    <td><h1>Toko Buku Rasyid</h1></td>
                    <td><a href="home.php"><h3>Home</h3></a></td>
                    <td><a href="login.php"><h3>Login</h3></a></td>
                </tr>
            </table>
        </div>
        <div class="body">
            <br>
            <h2>Selamat Datang di Toko Buku Rasyid</h2>
            <br>
            <form action="search.php" method="get">
                Cari Judul Buku : 
                <input type="text" name="carinama">&nbsp;
                <input type="submit" value="Cari">
            </form>
            <br>
            <table>
                <tr>
                    <th>Kode Buku</th>
                    <th>Judul</th>
                    <th>Pengarang</th>
                    <th>Keterangan</th>
                </tr>
                <?php
                    include "myconnection.php";

                    $query = "SELECT * FROM buku";
                    $result = mysqli_query($connect, $query);

                    if(mysqli_num_rows($result)>0){
                        while($row = mysqli_fetch_array($result)){
                ?>
                <tr>
                    <td><?php echo $row["id_buku"];?></td>
                    <td><?php echo $row["Judul"];?></td>
                    <td><?php echo $row["Pengarang"];?></td>
                    <td>
                        <a href="detail.php?id=<?php echo $row["id_buku"];?>">
                        <button>Detail</button></a>
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
        </div>
        <div class="footer">
            <center>
                <br><br><br><br>
                <h3>Copyright &copy; Kuis 2 Rasyid Razeka MI1E</h3>
            </center>
        </div>
    </body>
</html>