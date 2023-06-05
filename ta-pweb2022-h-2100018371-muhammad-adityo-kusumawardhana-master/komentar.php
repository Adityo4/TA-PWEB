<?php include("proses.php");?>
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
				<li> <a href="komentar.php">Komentar</a></li>
			</ul>
		</div>
		<div id="main-content">
			<div id="news">
      <div align="center"><strong>Komentar</strong></div>
        <form name="form1" method="post">
        <table width="50%" border="0" align="center">
        <tr>
        <td>Nama : </td>
        <td><input name="nama" type="text" id="nama" required></td>
        </tr>
        <tr>
        <td>NIM : </td>
        <td><input name="nim" type="text" id="nim" required></td>
        </tr>
        <tr>
        <td>Email : </td>
        <td><input name="email" type="text" id="email" required></td>
        </tr>
        <tr>
        <td>Rate : </td>
        <td><select name="rate" id="rate" required>
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        <option>5</option>
        </select></td>
        </tr>
        <tr>
        <td>Komentar</td>
        <td><textarea name="komentar" id="komentar" require></textarea></td> </textarea>
        </tr>

        <td>&nbsp;</td>
        <td><input type="submit" name="Submit" value="Kirim"><input type="reset" name="Submit2" value="Batal"> </td> 
        </tr>
        </table>
        </form>
        <center> <p><a href="lihat.php"> Lihat Komentar </a></p> </center>
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