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

		<!--Header picture under header -->
		<div class="header_slika">
			<img src="photos/slika1.jpg" width="960px" height="480px">
		</div>

		<!--Body with selection of destination or boat-type -->
		<div class="main">

			<!-- Destination selection-->	
			<div class="index_jedrilice">
				<div class="slika_index">
					<img src="photos/jedrilica1.jpg" width="300px" height="248px">
				</div>
				<div class="index_odabir">
					<h2>Odaberite destinaciju</h2>

					<!--reservation of destionation button , redirection to selection of destionation for rent -->
					<div class="button">
							<a href="destinacije.php">Odabir destinacije</a>
					</div>
				</div>
			</div>


			<!-- Boat-type selection-->
			<div class="index_jetski">
				<div class="slika_index">
					<img src="photos/jetski1.jpg" width="300px" height="248px">
				</div>
				<div class="index_odabir">
					<h2>Odaberite željeno plovilo</h2>

					<!--reservation of destionation button , redirection to selection of boat for rent -->
					<div class="button">
							<a href="plovila.php">Odabir plovila</a>
					</div>
				</div>
			</div>
		</div>

		<!--Classic footer with credentials -->
		<div class="footer">
			<p>Copyright Mihelčić/Karmazen </p>
		</div>
	</div>
</body>
</html>	