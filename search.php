<!DOCTYPE HTML>
<html>
    <head>
        <title>Pencarian Buku</title>
        <link rel="stylesheet" href="styleSearch.css" type="text/css">
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
            <h2>Pencarian Buku</h2>
            <br>
            <table>
                <?php
                    $nama = $_GET["carinama"];
                    include "myconnection.php";
                
                    $query = "SELECT * FROM buku WHERE Judul LIKE '%$nama%'";
                    $result = mysqli_query($connect, $query);

                    if(mysqli_num_rows($result)>0){
                        while($row = mysqli_fetch_array($result)){
                ?>
                <tr>
                    <td>Kode Buku&nbsp;&nbsp;&nbsp;</td>
                    <td><?php echo $row["id_buku"];?></td>
                </tr>
                <tr>
                    <td>Judul</td>
                    <td><?php echo $row["Judul"];?></td>
                </tr>
                <tr>
                    <td>Pengarang</td>
                    <td><?php echo $row["Pengarang"];?></td>
                </tr>
                <tr>
                    <td>Penerbit</td>
                    <td><?php echo $row["Penerbit"];?></td>
                </tr>
                <tr>
                    <td>Deskripsi</td>
                    <td><?php echo $row["Deskripsi"];?></td>
                </tr>
                <?php
                        }
                    }
                    else{
                        echo "0 results";
                    }
                ?>
            </table>
            <form action="home.php" method="post">
                <button>Kembali ke Home</button>
            </form>
        </div>
        <div class="footer">
            <center>
                <br><br><br><br><br><br>
                <h3>Copyright &copy; Kuis 2 Rasyid Razeka MI1E</h3>
            </center>
        </div>
    </body>
</html>