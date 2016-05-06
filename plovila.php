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

		<!--Body with boats and reservation form -->
		<div class="main_plovila">

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


			<!--Body with boats options -->
			<div class="plovila_ponuda">

				<!--One whole offer of a boat, should display sql data -->
				<div class="ponuda">

					<!--image of a boat-->
					<div class="img_plovila">
						<img src="photos/jetski1.jpg" width="310px" height="230px">
					</div>

					<div class="text_plovila">
						<p>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque venenatis venenatis lobortis. Mauris at egestas turpis. Praesent pharetra dolor et mauris ullamcorper condimentum. Donec in purus id odio condimentum faucibus. Sed porta maximus magna, a pretium augue sodales et.
						</p>

						<!--reservation of a boat button , redirection to selection of a destination for rent with selected boat-->
						<div class="button">
							<a href="destinacije.php">Odabir destinacije</a>
						</div>
					</div>
				</div>

				
				<!--One whole offer of a boat, should display sql data -->
				<div class="ponuda">

					<!--image of a boat-->
					<div class="img_plovila">
						<img src="photos/jetski2.jpg" width="310px" height="230px">
					</div>
					<div class="text_plovila">
						<p>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque venenatis venenatis lobortis. Mauris at egestas turpis. Praesent pharetra dolor et mauris ullamcorper condimentum. Donec in purus id odio condimentum faucibus. Sed porta maximus magna, a pretium augue sodales et.
						</p>

						<!--reservation of a boat button , redirection to selection of a destination for rent with selected boat-->
						<div class="button">
							<a href="destinacije.php">Odabir destinacije</a>
						</div>
					</div>
				</div>

				<!--One whole offer of a boat, should display sql data -->
				<div class="ponuda">

					<!--image of a boat-->
					<div class="img_plovila">
						<img src="photos/jedrilica2.jpg" width="310px" height="230px">
					</div>
					<div class="text_plovila">
						<p>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque venenatis venenatis lobortis. Mauris at egestas turpis. Praesent pharetra dolor et mauris ullamcorper condimentum. Donec in purus id odio condimentum faucibus. Sed porta maximus magna, a pretium augue sodales et.
						</p>

						<!--reservation of a boat button , redirection to selection of a destination for rent with selected boat-->
						<div class="button">
							<a href="destinacije.php">Odabir destinacije</a>
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