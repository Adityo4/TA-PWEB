<?php
if(isset($_POST["Submit"])){
    $nama;
if(isset($_POST["nama"])){
    $nama=$_POST['nama'];
}
    $nim;
if(isset($_POST["nim"])){
    $nim=$_POST['nim'];
}
$email;
if(isset($_POST["email"])){
    $email=$_POST['email'];
}
$rate;
if(isset($_POST["rate"])){
    $rate=$_POST['rate'];
}
$komentar;
if(isset($_POST["komentar"])){
    $komentar=$_POST['komentar'];
} 
$tanggal = date("Y-m-d");
    $fp = fopen("order.txt","a+");
    echo "<script>
    alert('Komentar Berhasil dikirim')
    </script>";
    fputs($fp,"$tanggal|$nama|$nim|$email|$rate|$komentar|\n");
    fclose($fp);
    }
?>