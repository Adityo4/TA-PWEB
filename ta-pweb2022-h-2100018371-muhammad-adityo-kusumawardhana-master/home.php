<html>
<head>
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
				<li> <a href="komentar.php">Komentar</li>
			</ul>
		</div>
		<div id="main-content">
			<div id="news">
			<p>&nbsp Selamat datang di web TUGAS AKHIR PEMROGRAMAN WEB saya</p>
			<p>&nbsp Tujuang dibuatnya web ini adalah untuk memenuhi penugasan TUGAS AKHIR PEMROGRAMAN WEB</p>
            <p>&nbsp  </p>
            <p>&nbsp </p>
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
