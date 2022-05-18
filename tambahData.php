<!DOCTYPE HTML>
<html>
    <head>
        <title>Tambah Data</title>
        <link rel="stylesheet" href="styleTambah.css">
    </head>
    <body>
        <div class="header">
            <table>
                <tr>
                    <td><h1>Toko Buku Rasyid</h1></td>
                    <td><a href="homeAdmin.php"><h3>CRUD</h3></a></td>
                    <td><a href="logout.php"><h3>Logout</h3></a></td>
                </tr>
            </table>
        </div>
        <div class="body">
            <form action="tambahProses.php" method="get">
                <table>
                    <tr>
                        <td>Kode Buku : </td>
                        <td><input type="text" name="tbhKode"></td>
                    </tr>
                    <tr>
                        <td>Judul : </td>
                        <td><input type="text" name="tbhJudul"></td>
                    </tr>
                    <tr>
                        <td>Pengarang : </td>
                        <td><input type="text" name="tbhPengarang"></td>
                    </tr>
                    <tr>
                        <td>Penerbit : </td>
                        <td><input type="text" name="tbhPenerbit"></td>
                    </tr>
                    <tr>
                        <td>Deskripsi : </td>
                        <td><textarea name="tbhDeskripsi" cols="25" rows="10"></textarea></td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td><input type="submit" name="send" value="Tambah"></td>
                    </tr>
                </table>
            </form>
        </div>
    </body>
</html>