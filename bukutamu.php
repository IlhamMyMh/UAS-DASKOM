<!DOCTYPE html>
<html>
	<head>
        <title>Buku Tamu</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- untuk menyesuaikan tampilan terhadap layar pengguna -->
    <head>
        <style>
            * {
	            padding:0;
	            margin:0;
	            font-family: 'Quicksand', sans-serif;
            }
            .header{
                background-color: #f1f1f1;
                padding: 20px;
                text-align: center;
            }
            header h1 {
                color: blue;
            }
            .topnav {
                overflow: hidden;
                background-color: #333;
            }
            .topnav a {
                float: right;
                display: block;
                color: #f2f2f2;
                text-align: center;
                padding: 14px 16px;
                text-decoration: none;
            }
            .container{
                text-align: center;
                margin-bottom: 8px
            }
            .topnav a:hover {
                background-color: rgb(0, 37, 250);
                color: yellow;
            }
            h1 {
                color: blue;
            }
            p{
                font-size: 20px;
            }
            h2{
                font-size: 34px;
                letter-spacing: 0.1em;
                margin-top: 0px;
                margin-bottom: 8px;
            }
            h4{
                font-size: 18px; 
                margin-top: 0px;
                margin-bottom: 40px; 
                text-transform: uppercase;
            }
            #frame{
                width: 300px; margin: 0px auto;
                text-align: left;
                box-sizing: border-box;
            }
            .form-group{ 
                position: relative; 
                margin-bottom: 15px;
            }
            .form-group input{
                width: 100%;
                font-size: 1em;
                color: grey;
                padding: 10px 10px;
                border: 1px solid gray;
                z-index: 9;
                box-sizing: border-box;
                display: block;
            }
            .animasi{
                transition: all 0.1s; 
                -webkit-transition: all 0.1s;
            } 
            .tombol-aktif{
                padding: 8px 20px;
                border-radius: 10px;
                font-size: 14px;
                color: #f9f9f9;
                text-decoration: none;
            }
            .warna{
                background-color: #3498db;
                text-shadow: 0px -2px #298089;
            }
            .jam-digital {
                overflow: hidden;
                width: 150px;
                margin: 20px auto;
                border: 3px solid yellow;
            }
            .kotak {
                float: left;
                width: 50px;
                height: 30px;
                background-color: rgb(0, 0, 0);
            }
            .jam-digital p {
                color: rgb(255, 255, 255);
                font-size: 20px;
                text-align: center;
                margin-top: 3px;
            }
            footer {
                background-color: #333;
                padding:50px;
                text-align: center;
                }
            html {
                scroll-behavior: smooth;
            }

            @media (max-width: 768px){
                .mobile-menu {
                    display: block;
                }
                header ul {
                    display: none;
                }
            }
        </style>
    <body>
        <!-- bagian header -->
		<header>
            <div class="header">
            <center><h1>Buku Tamu</h1><br>
            <center><p>Terimakasih telah mengunjungi blog ini</p>
            </div>
            <div class="topnav">
                <a href="#bukutamu.php">buku tamu</a>
			    <a href="blog.html">Blog</a>
			    <a href="about.html">About</a>
			    <a href="index.html">Home</a>
            </div>
        </header><br><br>
       <form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
       <div class="conaine">
       <center><h2>Form Buku Tamu</h2>
       <h4>isi form ini dengan cara klik tabel yang telah disediakan</h4></center>
       <div id="frame">
        <div class="form-group">
            <label for="name">Nama anda :</label>
            <input type="text" name="name" required/>
        </div>
        <div class="form-group">
            <label for="email">Email :</label>
            <input type="text" name="email" required />
        </div>
        <div class="form-group">
            <label for="name">Alamat :</label>
            <input type="text" name="alamat" required />
        </div>
        <div class="form-group">
            <label for="name">Prodi Kuliah :</label>
            <input type="text" name="prodikuliah" required />
        </div>
        <div class="form-group">
            <label for="name">Pesan :</label>
            <input type="text" name="pesan" required />
        </div>
        </div>
        <center><button class="tombol-aktif animasi warna" type="submit" value="Submit" name="submit">submit</button></center><br>
        </form>
        <div class="container">
        <?php
            if(isset($_POST['submit'])){
                $name = $_POST['name'];
                $email = $_POST['email'];
                $alamat = $_POST['alamat'];
                $prodikuliah = $_POST['prodikuliah'];
                $pesan = $_POST['pesan'];

                echo"
                Nama : $name <br>
                Email : $email <br>
                Alamat : $alamat <br>
                Prodi Kuliah : $prodikuliah <br>
                Pesan : $pesan <br>
                ";
            }
        ?>
        </div>
     <!-- START JAVASCRIPT JAM DIGITAL -->
     <h2 align="center">==== Diakses Pada Jam ====</h2>
		<script>
			window.setTimeout("waktu()", 1000);
			 
			function waktu() {
				var waktu = new Date();
				setTimeout("waktu()", 1000);
				document.getElementById("jam").innerHTML = waktu.getHours();
				document.getElementById("menit").innerHTML = waktu.getMinutes();
				document.getElementById("detik").innerHTML = waktu.getSeconds();
			}
		</script>
		<!-- END JAVASCRIPT JAM DIGITAL -->

		  <!-- START OUTPUT JAM DIGITAL -->
		  <div class="jam-digital">
			<div class="kotak">
				<p id="jam"></p>
			</div>
			<div class="kotak">
				<p id="menit"></p>
			</div>
			<div class="kotak">
				<p id="detik"></p>
			</div>
		<!-- END OUTPUT JAM DIGITAL -->
        </div>

        <!-- bagian footer -->
        <footer>
			<p width="100%" style="color: rgb(247, 211, 10)">Copyright © 2022 Ilham Maryan Mahantara.</p>
		</footer>
        <!-- end -->

    </body>
</html>