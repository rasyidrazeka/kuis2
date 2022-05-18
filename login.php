<!DOCTYPE HTML>
<html>
    <head>
        <title>Halaman Login</title>
        <link rel="stylesheet" href="styleLogin.css">
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
            <?php
                if(isset($_GET["error"])){
                    $error = $_GET["error"];
                }
                else{
                    $error = "";
                }

                $message = "";
                if($error=="gagal"){
                    $message = "Username atau Password salah";
                }
            ?>
            <br><br><br><br><br><br><br>
            <center>  
                <form action="loginProses.php" method="post">
                    <table>
                        <tr>
                            <td>&nbsp;</td>
                            <td><p style="color:red"><?php echo $message;?></p></td>
                        </tr>
                        <tr>
                            <td>Username : </td>
                            <td><input type="text" name="username" size="20"></td>
                        </tr>
                        <tr>
                            <td>Password : </td>
                            <td><input type="password" name="password" size="20"></td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td><input type="submit" name="login" value="Login"></td>
                        </tr>
                    </table>
                </form>
            </center>
        </div>
        <div class="footer">
            <center>
                <br><br><br><br><br><br><br>
                <h3>Copyright &copy; Kuis 2 Rasyid Razeka MI1E</h3>
            </center>
        </div>
    </body>
</html>