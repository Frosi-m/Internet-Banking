<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style_app.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat+Alternates&display=swap" rel="stylesheet">
</head>
<body>
    <form action="" method="POST" class="bungkus">
        <div class="kepala">ini kepala</div>
        <div class="navigasi">
            <div class="isi_navigasi">
            <h1>admin</h1>
            <ul>
                <li><a href="home.php">home</a></li>
                <li><a href="home.php?link=register">register</a></li>
                <li><a href="home.php?link=daftar_akun">daftar</a></li>
                <li><a href="home.php?link=tambah_data">tambah_data</a></li>
                <li><a href="home.php?link=perbarui_akun">perbarui akun</a></li>
            </ul>

            <h1>customer</h1>
            <ul>
                <li><a href="home.php">home</a></li>
                <li><a href="home.php?link=lihat_transaksi">lihat transaksi</a></li>
                <li><a href="home.php?link=melakukan_transaksi">transaksi</a></li>
                <li><a href="home.php?link=edit_profile">edit profile</a></li>
            </ul>
            </div>
                
        </div>
        <div class="isi">
            ini isi
        <?php
            if (@$_GET[link] == 'register') {
                include 'navigasi/register.php';
            }
            else if(@$_GET[link] == 'daftar_akun'){
                include 'navigasi/daftar_akun.php';
            }
            else if(@$_GET[link] == 'perbarui_akun'){
                include 'navigasi/perbarui_akun.php';
            }
            else if(@$_GET[link] == 'tambah_data'){
                include 'navigasi/tambah_data.php';
            }
            else if(@$_GET[link] == 'lihat_transaksi'){
                include 'navigasi/lihat_transaksi.php';
            }
            else if(@$_GET[link] == 'melakukan_transaksi'){
                include 'navigasi/melakukan_transaksi.php';
            }

            else if(@$_GET[link] == 'edit_profile'){
                include 'navigasi/edit_profile.php';
            }
            ?> 
        </div>
        <div class="kaki">
            Ini kaki
        </div>
    </form>
   
</body>
</html>