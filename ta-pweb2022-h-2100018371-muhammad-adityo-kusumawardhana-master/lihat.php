<html>
<head>
	<title>Laundry</title>
<link rel="stylesheet" href="TugasAkhir.css">
</head>
<body>
	<div id="content">
		<div id="header"></div>
		<div id="menu">
        <ul>
				<li> <a href="home.php"> Home</a></li>
				<li> <a href="#">About</a></li>
                <li> <a href="#">Contact</a></li>
				<li> <a href="komentar.php">Komentar</a></li>
			</ul>
		</div>
		<div id="main-content">
			<div id="news">
				<?php
    echo"<head><title>Order</title></head>";
    $fp=fopen("order.txt","r");
    echo "<table border=0>";

    while($isi=fgets($fp,80)){
        $pisah=explode("|",$isi);
        echo"<table width=50% border=1 cellspacing=0 cellpading=0> <tr align=centre><td>$pisah[0]</td><td>$pisah[1]</td><td>$pisah[2]</td><td>$pisah[3]</td><td>$pisah[4]</td><td>$pisah[5]</td></tr></table>";
    }
    ?>
			</div>
		</div>
		<div id="side-menu">
			<ul>
            <li><a href="profil.php">Isi data diri</a></li>
			<li><a href="#" onclick="document.getElementById('me').style.display='block'" >About author</a>
                <p id="me" style="display:none"> <img src="me.png" alt="" height="100px" width="100px"> <br> Nama Saya Muhammad Adityo Kusumawardhana dari kelas H Dengan NIM 2100018371. </p></li>
			<li><a href="#" onclick="document.getElementById('sm').style.display='block'" >My social media</a>
                <p id="sm" style="display:none"> <a href="#"> <img src="insta.webp" alt="" height="50px" width="50px"></a><a href="#"> <img src="fb.png" alt="" height="50px" width="50px"></a></p></li>
			<li><?php include 'counter.php';  ?></li>
		</ul></div>
		<div id="footer">Copyright <a href="#">Adityo</a>, All right reserved</div>
	<div>
</body>
</html>
