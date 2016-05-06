<!DOCTYPE html>
<html>
<head>
	<title>Index</title>
	<link rel="stylesheet" href="css/style.css" />
</head>
<body class="body">
	<div class="wrapper">
		<div class="header">

			<!-- Logo -->
			<div class="logo">
				<a href="index.php"><img src="photos/logo.png" width="150px" height="100px"></a>
			</div>

			<!-- Navigation with inline setting-->
			<div class="nav">
				<ul>
					<li><a href="index.php">Početna</a></li>
					<li><a href="destinacije.php">Destinacije</a></li>
					<li><a href="plovila.php">Plovila</a></li>
					<li><a href="kontakt.php">Kontakt</a></li>
				</ul>
			</div>
		</div>


		<!--Body with destinations and reservation form -->
		<div class="main_destinacije">

			<!--Reservation form , should be fixed-->
			<div class="fixed_rezervacija">
						<form action="">
						  First name:<br>
						  <input type="text" name="firstname" value="">
						  <br><br>
						  Last name:<br>
						  <input type="text" name="lastname" value="">
						  <br><br>
						  Email:<br>
						  <input type="email" name="email" value="email">
						  <br><br>
						  Contact number:<br>
						  <input type="text" name="mobitel" value="Broj mobitela">
						  <br><br>
						  Contact number:<br>
						  <input type="datetime-local" name="vrijeme" value="Odaberite datum">
						  <br><br>

						  <input type="submit" value="Submit">
						</form>
				</div>

			<!--Destionation options-->
			<div class="destinacije_ponuda">

				<!--One whole offer of destionation , should display sql data -->
				<div class="ponuda">

					<!--images of destination-->
					<div class="img_destinacije">
						<img src="photos/trogir.jpg" width="310px" height="230px">
					</div>
					<div class="text_destinacije">
						<h3>Trogir</h3>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque venenatis venenatis lobortis. Mauris at egestas turpis. Praesent pharetra dolor et mauris ullamcorper condimentum. Donec in purus id odio condimentum faucibus.
						</p>

						<!--reservation of destionation button , redirection to selection of boat for rent from selected destination-->
						<div class="button">
							<a href="plovila.php">Odabir plovila</a>
						</div>
					</div>
				</div>

				<!--One whole offer of destionation , should display sql data -->
				<div class="ponuda">
					<!--images of destination-->
					<div class="img_destinacije">
						<img src="photos/split.jpg" width="310px" height="230px">
					</div>
					<div class="text_destinacije">
						<h3>Split</h3>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque venenatis venenatis lobortis. Mauris at egestas turpis. Praesent pharetra dolor et mauris ullamcorper condimentum. Donec in purus id odio condimentum faucibus. 
						</p>

						<!--reservation of destionation button , redirection to selection of boat for rent from selected destination-->
						<div class="button">
							<a href="plovila.php">Odabir plovila</a>
						</div>
					</div>
				</div>

				<!--One whole offer of destionation , should display sql data -->
				<div class="ponuda">

					<!--images of destination-->
					<div class="img_destinacije">
						<img src="photos/dubrovnik.jpg" width="310px" height="230px">
					</div>
					<div class="text_destinacije">
						<h3>Dubrovnik</h3>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque venenatis venenatis lobortis. Mauris at egestas turpis. Praesent pharetra dolor et mauris ullamcorper condimentum. Donec in purus id odio condimentum faucibus.
						</p>

						<!--reservation of destionation button , redirection to selection of boat for rent from selected destination-->
						<div class="button">
							<a href="plovila.php">Odabir plovila</a>
						</div>
					</div>
				</div>
			</div>
			
		</div>
		<div class="footer">
			<p>Copyright Mihelčić/Karmazen </p>
		</div>
	</div>
</body>
</html>	