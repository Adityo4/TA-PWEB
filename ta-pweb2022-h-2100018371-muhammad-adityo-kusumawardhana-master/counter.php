<html>
    <head>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <?php
$filecounter="counter.txt";
$counter=file($filecounter);
$pengunjung = $counter[0];
$pengunjung++;
$file=fopen($filecounter,"w");
fwrite($file, $pengunjung);
fclose($file);
?>
<center><div id="modifikasi">
    <table><center> Pengunjung <br> <img src="orang2.png" alt="" width="30px" height="30px"> <?php echo $pengunjung ?></center>
</div></center></table>
    </body>
</html>