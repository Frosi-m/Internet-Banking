<?php
function genap($angka,$warna){
    echo "<table style='border:2px solid; align-item:center'>";
    $tot = $angka;
    $y=1;
    $bilgenap=2;
    for ($i=1; $i<=$angka;$i++){
        echo "<tr style='border:2px solid;'>";
        for ($j = 1;$j<=$tot;$j++){
            if ($y==$bilgenap){
            echo "<td style='background-color:$warna;border:2px solid'>$y</td>";
            $y++;
            $bilgenap+=2;
            }
            else{
                echo "<td style='border:2px solid;'>$y</td>";
                $y++;
            }
        }
        echo "</tr>";
    }
    echo "</table>";
}

function komposit($angka,$warna){
    echo "<table style='border:solid;'>";
    $tot = $angka;
    $y=1;
    for ($i=1; $i<=$angka;$i++){
        echo "<tr style='border:2px solid;'>";
        for ($j = 1;$j<=$tot;$j++){
            if ($y ==1 or $y%2==0 or $y%3==0 or $y%5==0 or $y%7==0){
                if( $y!==2 and $y!==3 and $y!==5 and $y!==7){
                    echo "<td >$y</td>";
                    $y++;
            }
                else{
                    echo "<td style='background-color:$warna'>$y</td>";
                    $y++;
                }
            }
            else{
                echo "<td style='background-color:$warna'>$y</td>";
                $y++;
            }
        }
        echo "</tr>";
    }
    echo "</table>";
}

function NIM($angka,$warna){
    echo "<table style='border:solid;'>";
    $tot = $angka;
    $y=1;
    $kelipatan=4;
    for ($i=1; $i<=$angka;$i++){
        echo "<tr style='border:2px solid;'>";
        for ($j = 1;$j<=$tot;$j++){
            if ($y==$kelipatan){
            echo "<td style='background-color:$warna'>$y</td>";
            $y++;
            $kelipatan+=4;
            }
            else{
                echo "<td style='border:2px solid;'>$y</td>";
                $y++;
            }
        }
        echo "</tr>";
    }
    echo "</table>";
}
function all(){
if (isset($_POST['Submit'])){
echo "<h3>Output : </h3>";
$angka=$_POST['angka'];
$jenis=$_POST['jenis'];
$warna=$_POST['warna'];
    if($angka>10 or $angka<=0){
        echo "<h2>Mohon isi dari 1-10</h2>";
    }
    else if($jenis==-1){
        echo "<h2>isi tabel yang akan ditampilkan</h2>";
    }
    else if($warna==-1){
        echo "<h2>isi warna</h2>";
    }
    else{
        if ($jenis=="Genap" and $warna=='Cyan'){
            echo "Tabel untuk angka: " .$angka. "<br>Jenis tabel: ".$jenis ."<br> Warna: ". $warna;
            genap($angka,$warna);
        }
        else if ($jenis=="Genap" and $warna=='Red'){
            echo "Tabel untuk angka: " .$angka. "<br>Jenis tabel: ".$jenis ."<br> Warna: ". $warna;
            genap($angka,$warna);
        }
        else if ($jenis=="Genap" and $warna=='Purple'){
            echo "Tabel untuk angka: " .$angka. "<br>Jenis tabel: ".$jenis ."<br> Warna: ". $warna;
            genap($angka,$warna);
        }
        else if ($jenis=="Komposit" and $warna=='Cyan'){
            echo "Tabel untuk angka: " .$angka. "<br>Jenis tabel: ".$jenis ."<br> Warna: ". $warna;
            komposit($angka,$warna);
        }
        else if ($jenis=="Komposit" and $warna=='Red'){
            echo "Tabel untuk angka: " .$angka. "<br>Jenis tabel: ".$jenis ."<br> Warna: ". $warna;
            komposit($angka,$warna);
        }
        else if ($jenis=="Komposit" and $warna=='Purple'){
            echo "Tabel untuk angka: " .$angka. "<br>Jenis tabel: ".$jenis ."<br> Warna: ". $warna;
            komposit($angka,$warna);
        }
        else if($jenis=="NIM" and $warna=='Cyan'){
            echo "Tabel untuk angka: " .$angka. "<br>Jenis tabel: ".$jenis ."<br> Warna: ". $warna;
            NIM($angka,$warna);
        }
        else if($jenis=="NIM" and $warna=='Red'){
            echo "Tabel untuk angka: " .$angka. "<br>Jenis tabel: ".$jenis ."<br> Warna: ". $warna;
            NIM($angka,$warna);
        }
        else if($jenis=="NIM" and $warna=='Purple'){
            echo "Tabel untuk angka: " .$angka. "<br>Jenis tabel: ".$jenis ."<br> Warna: ". $warna;
            NIM($angka,$warna);
        }
    }
}
else if (isset($_POST['Reset'])){
    $link="html.php";
    header("url=$link");
}
}
all();
?>
