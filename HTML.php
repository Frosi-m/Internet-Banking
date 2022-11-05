<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form method="post" action="<?php echo ($_SERVER['PHP_SELF']); ?>">
    <div class="tengah">
        <h2 >Bilangan</h2>
    </div>
        <table>
            <tr>
                <td> <label for="angka">Angka:</label></td>
                <td> <input type="text" id="angka" name="angka" value=""></td>
            </tr>
            <tr> 
                <td> <label for="jenis">Tabel:</label></td>
                <td><select name="jenis" id="jenis">
                <option value="-1">~Pilihan Tabel~</option>
                <option value="Genap">Genap</option>
                <option value="Komposit" >Komposit</option>
                <option value="NIM">Kelipatan 4</option></select></td>
            </tr>
            <tr> 
                <td><label for="warna">Warna:</label></td>
                <td><select name="warna" id="warna">
                <option value="-1">~Pilihan Warna~</option>
                <option value="Cyan">Cyan</option>
                <option value="Red" >Red</option>
                <option value="Purple">Purple</option></select></td>
            </tr>
         </table>
         <br><input type="submit" value="Submit" name="Submit">
         <input type="submit" value="Reset Jawaban" >
         <?php require 'file.php'?>
</form>
</body>
</html>

