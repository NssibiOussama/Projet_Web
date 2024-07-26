<!DOCTYPE html>
<html>

<head>
	<title>Bienvenue au seminaires du club</title>
	<link rel="shortcut icon" href="product/header_logo.png">
	<link rel="stylesheet" type="text/css" href="css/styles.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="css/w3.css">
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</head>

<body style="overflow-x: hidden;">
	<style type="text/css">
		#logo {
			height: 45px;
			width: 120px;
			left: 7px;
			top: 3px;
			position: absolute;
		}
	</style>
	<nav class=" navbar-default navbar-inverse navbar-fixed-top" style="background-color: black;">
		<img src="product/header_logo.png" id="logo">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-target="#mainNavbar" data-toggle="collapse">
					<span class=icon-bar></span>
					<span class=icon-bar></span>
					<span class=icon-bar></span>
				</button>
			</div>
			<div class="navbar-collapse collapse" id="mainNavbar">
				<ul class="nav navbar-nav navbar-right">
					<li><a href="../projet_fin/index1.php" class="nav-text"></span> ACCEUIL</li></a>
					<li><a href="#about.us" class="nav-text"></span> SERVICES</li></a>
					<li><a href="#contact.us" class="nav-text"></span> CONTACT</li></a>

					<li class="dropdown">
						<a class="dropdown-toggle" data-toggle="dropdown" href="#">
							<font face="century gothic" class="nav-text"></span> EVENEMENTS&nbsp;&nbsp;</font>
							<span class="caret "></span>
						</a>
						<ul class="dropdown-menu">
							<li><a href="#seminaire" class="nav-text"></span> Séminaires</a></li>
							<li><a href="#lancement" class="nav-text"></span> Lancement de produit</a></li>
							<li><a href="#fete" class="nav-text"></span> Fête de fin d’année</a></li>
							<li><a href="#Soiree" class="nav-text"></span>Soirée de gala</a></li>
							<li><a href="#anniversaire" class="nav-text"></span> Anniversaire d'entreprise</a></li>



						</ul>

					<li class="dropdown">
						<a class="dropdown-toggle" data-toggle="dropdown" href="#">
							<font face="century gothic" class="nav-text"></span> COMPTE&nbsp;&nbsp;</font>
							<span class="caret "></span>
						</a>
						<ul class="dropdown-menu">
							<li><a href="auth/signin_signup.php" class="nav-text" style="color"><span
										class="fa fa-sign-in">
										<font face="century gothic">&nbsp;&nbsp;&nbsp;Se connecter</font></a></li>
							<li><a href="auth/signin_signup.php" class="nav-text"><span class="fa fa-user-plus">
										<font face="century gothic">&nbsp;&nbsp;&nbsp;S'inscrire</font></a></li>

						</ul>

						</font>
			</div>
		</div>
	</nav>
	<div class="container" style="margin-top : -400px ;">
		<div class="row">
			<img src="images/bannerflat.jpg" id="bann" style="position: absolute;">
		</div>
	</div>
	<div id="myCarousel" class="carousel slide" data-ride="carousel">
		<ol class="carousel-indicators">
			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			<li data-target="#myCarousel" data-slide-to="1"></li>
			<li data-target="#myCarousel" data-slide-to="2"></li>
		</ol>
		<div class="carousel-inner" role="listbox">
			<div class="item active">
				<img src="/Projet_fin/product/sale_2.jpg" id="caro">
			</div>
			<div class="item">
				<img src="/Projet_fin/product/legende1.png" id="caro">
			</div>
			<div class="item">
				<img src="/Projet_fin/product/salon.jpg" id="caro">
			</div>
		</div>
		<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>


	<section id="product" style="margin-top:50px;">
		<div class="container mypadding">
			<div class="row">
				<div class="col-md-6 mycol col-sm-12">
					<img src="product/sale_2.jpg" class="image1">
				</div>
				<div class="col-md-6 col-sm-12">
					<h2>L'ATELIER DU CLUB</h2>
					<p>500 Personnes </p>
					<ul class="mylist">
						<li>
							L’Atelier, ce sont 600 m² d’espace disponible, à agencer selon vos envies et besoins. Buffet
							debout, repas à table, cocktail, présentation avec micro et vidéoprojecteur ? Tout est
							possible dans cette salle haut de gamme, prisée par de nombreuses entreprises pour leurs
							événements.
						</li>

						<br>
						<li>
							<a href="#" class="btn btn-dark btn-lg active" role="button" aria-pressed="true">plus de
								détails</a>
						</li>
					</ul>

				</div>
			</div>

			<hr>

			<div class="row">
				<div class="col-md-6 mycol col-sm-12">
					<img src="product/caree1.JPG" width="95%">
				</div>
				<div class="col-md-6 col-sm-12">
					<h2>LE CARRE VIP</h2>
					<p>550 Personnes</p>
					<ul class="mylist">
						<li>
							La plus grande de nos salles de réception : 750 m² pouvant accueillir jusqu’à 550 convives !
							Autant dire que les possibilités sont innombrables pour vos soirées d’entreprise. L’espace
							est équipé d’un bar, de tables et chaises, de manges-debout et de tout l’équipement...
						</li>

						<br>
						<li>
							<a href="#" class="btn btn-dark btn-lg active" role="button" aria-pressed="true">plus de
								détails</a>
						</li>
					</ul>

				</div>
			</div>

			<hr>




			<div class="row">
				<div class="col-md-6 mycol col-sm-12">
					<img src="product/amphi1.JPG" width="95%" class="image1">
				</div>
				<div class="col-md-6 col-sm-12">
					<h2>L'AMPHI</h2>
					<p>CENTRE DEL'ARMORICAINE</p>
					<ul class="mylist">
						<li>
							Faites découvrirr à vos clients, collaborateurs ou partenaires cet espace d’exception, situé
							au sein du centre de formation du Stade Brestois 29. Après votre présentation sur la grande
							scène de 32 m² avec écran géant, vous profiterez de sa salle de restaurant et son espace...
						</li>

						<br>
						<li>
							<a href="#" class="btn btn-dark btn-lg active" role="button" aria-pressed="true">plus de
								détails</a>
						</li>
					</ul>

				</div>
			</div>
			<hr>

			<div class="row">
				<div class="col-md-6 mycol col-sm-12">
					<img src="product/legende1.png" width="95%" class="image1">
				</div>
				<div class="col-md-6 col-sm-12">
					<h2>LE CLUB DES LÉGENDES</h2>
					<p>80 Personnes </p>
					<ul class="mylist">
						<li>
							Cette salle dédiée aux exploits sportifs de Brest est idéale pour créer des réceptions
							originales et donner à votre l’entreprise l’impulsion dont elle a besoin. L’espace modulable
							vous permet d’animer vos réunions et présentations, mais également d’organiser...
						</li>

						<br>
						<li>
							<a href="#" class="btn btn-dark btn-lg active" role="button" aria-pressed="true">plus de
								détails</a>
						</li>
					</ul>

				</div>
			</div>






		</div>

	</section>



	<div class="bg-1 jumbotron" style="margin-top:50px;">
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center">
					<font face="lato">
						<h2 class="header1"><b>Bienvenue au seminaires du club</b></h2><br>
						<p class="subheader2">Nous sommes là pour réussir votre événement</p>
					</font>
				</div>




				<div class="container jumbotron">
					<div class="row">
						<div class="col-md-3 col-sm-6 col-xs-6">
							<div class="thumbnail text-center " id="thumbnail1">
								<img src="product/sale_1.jpg" class="img-responsive margin ">
								<a href="auth/signin_signup.php">
									<font face="lato"><button class="btn"">Reserved Now!</button> </font></a>
				<p></p>
				<div id=" bedroom_info">
											<font face="lato">
												<p>L'ATELIER DU CLUB</p>
												<p>PRIX DE SALLE:2 399.00</p>
												<p>Une capacité de 80 à 500 personnes</p>
											</font>
							</div>
						</div>
					</div>


					<div class="col-md-3 col-sm-6 col-xs-6">
						<div class="thumbnail text-center " id="thumbnail1">
							<img src="product/amphi1.JPG" class="img-responsive margin ">
							<a href="auth/signin_signup.php">
								<font face="lato"><button class="btn"">Reserved Now!</button> </font></a>
				<p></p>
				<div id=" bedroom_info">
										<font face="lato">
											<p>L’Amphithéâtre</p>
											<p>PRIX DE SALLE:2 399.00</p>
											<p>Une capacité de 80 à 500 personnes</p>
										</font>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-6">
					<div class="thumbnail text-center " id="thumbnail1">
						<img src="product/caree1.JPG" class="img-responsive margin ">
						<a href="auth/signin_signup.php">
							<font face="lato"><button class="btn"">Reserved Now!</button> </font></a>
				<p></p>
				<div id=" bedroom_info">
									<font face="lato">
										<p>Le Carré VIP </p>
										<p>PRIX DE SALLE:2 399.00</p>
										<p>Une capacité de 80 à 500 personnes</p>
									</font>
					</div>
				</div>
			</div>
			<div class="col-md-3 col-sm-6 col-xs-6">
				<div class="thumbnail text-center " id="thumbnail1">
					<img src="product/legende1.png" class="img-responsive margin ">
					<a href="auth/signin_signup.php">
						<font face="lato"><button class="btn"">Reserved Now!</button> </font></a>
				<p></p>
				<div id=" bedroom_info">
								<font face="lato">
									<p>Le Club des Légendes </p>
									<p>Prix de salle: 1,199.00</p>
									<p>Capacité de 10 à 80 personnes</p>
								</font>
				</div>
			</div>
		</div>




	</div>
	</div>
	<div class="jumbotron">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h2 class="text-center header22"><b>What did they just said?</b></h2>
					<hr><br>
					<div class="col-md-6 col-sm-6 col-xs-6">
						<img src="images/user.png" class="img-circle img-responsive center-block quote1">
						<font face="lato"><br>
							<p class="text-center quote">"This is so cheap but when i experience it's different!. Truly
								Recommended!"<i><br><br><span class="fa fa-star "></span><span
										class="fa fa-star"></span><span class="fa fa-star"></span><span
										class="fa fa-star"></span><span class="fa fa-star-o"></span><br><br><b>-Coco
										Martin</b></i></p>
						</font>
					</div>
					<div class="col-md-6 col-sm-6 col-xs-6">
						<img src="images/user.png" class="img-circle img-responsive center-block quote1">
						<font face="lato"><br>
							<p class="text-center quote">"Well, it's nice in here and the foods are awesome great
								service. Love it!" <i><br><br><span class="fa fa-star "></span><span
										class="fa fa-star"></span><span class="fa fa-star"></span><span
										class="fa fa-star-o"></span><span class="fa fa-star-o"></span><br><br><b>-Juan
										Dela Cruz</i></b></p>
						</font>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="jumbotron">
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center"><br><br><br>
					<a name="seminaire"></a><span
						class="glyphicon glyphicon-sunglasses center-block text-center"></span>
					<font face="lato">
						<h2 class="header23"><b><br>VOS ÉVÈNEMENTS</b></h2>
						<hr>
						<h2 class="header31"><br>SEMINAIRE</h2>
						<p class="information">Votre entreprise a besoin d’organiser un séminaire, une conférence, une
							convention, une réunion d’affaires ? Vous recherchez une salle de réception à Brest pour
							votre assemblée générale ?</p>
				</div>
				<div class="col-md-3 col-sm-3 col-xs-6">
					<img src="product/caree2.jpg" class="img-responsive margin thumbnail">
				</div>
				<div class="col-md-3 col-sm-3 col-xs-6">
					<img src="product/animation3.jpg" class="img-responsive margin thumbnail">
				</div>
				<div class="col-md-3 col-sm-3 col-xs-6">
					<img src="product/caree3.jpg" class="img-responsive margin thumbnail">
				</div>
				<div class="col-md-3 col-sm-3 col-xs-6">
					<img src="product/seminaire4.jpg" class="img-responsive margin thumbnail">
				</div>
				<div class="col-md-12 text-center"><a name="lancement"></a>
					<hr>
					<h2 class="header31"><br> Lancement de produit</h2>
					<p class="information">Organisation de votre lancement de produit <br></p>
				</div>
				<div class="col-md-3 col-sm-3 col-xs-6">
					<img src="product/lancement11.jpg" class="img-responsive margin thumbnail">
				</div>
				<div class="col-md-3 col-sm-3 col-xs-6">
					<img src="product/legende2.jpg" class="img-responsive margin thumbnail">
				</div>
				<div class="col-md-3 col-sm-3 col-xs-6">
					<img src="product/legende3.jpeg" class="img-responsive margin thumbnail">
				</div>
				<div class="col-md-3 col-sm-3 col-xs-6">
					<img src="product/lancement_4.jpg" class="img-responsive margin thumbnail">
				</div>
				<div class="col-md-12 text-center"><a name="fete"></a>
					<hr>

					<h2 class="header31"><br> Fête de fin d’année</h2>
					<p class="information">Grâce à l'équipe événementielle des Séminaires du Club, faites de votre arbre
						de Noël ou fête de fin d’année à Brest un moment unique dans un espace polyvalent. <br></p>
				</div>
				<div class="col-md-3 col-sm-3 col-xs-6">
					<img src="product/fete4.jpg" class="img-responsive margin thumbnail">
				</div>
				<div class="col-md-3 col-sm-3 col-xs-6">
					<img src="product/fete1.jpg" class="img-responsive margin thumbnail">
				</div>
				<div class="col-md-3 col-sm-3 col-xs-6">
					<img src="product/fete2.jpg" class="img-responsive margin thumbnail">
				</div>
				<div class="col-md-3 col-sm-3 col-xs-6">
					<img src="product/fete3.jpg" class="img-responsive margin thumbnail">
				</div>
				<div class="col-md-12 text-center"><a name="Soiree"></a>
					<hr>
					<h2 class="header31"><br>Soirée de gala </h2>
					<p class="information">Organisation de votre soirée de gala <br></p>
				</div>
				<div class="col-md-3 col-sm-3 col-xs-6">
					<img src="product/decoration.jpg" class="img-responsive margin thumbnail">
				</div>
				<div class="col-md-3 col-sm-3 col-xs-6">
					<img src="product/gala2.jpg" class="img-responsive margin thumbnail">
				</div>
				<div class="col-md-3 col-sm-3 col-xs-6">
					<img src="product/gala3.jpg" class="img-responsive margin thumbnail">
				</div>
				<div class="col-md-3 col-sm-3 col-xs-6">
					<img src="product/caree3.jpg" class="img-responsive margin thumbnail">
				</div>

				<div class="col-md-12 text-center"><a name="anniversaire"></a>
					<hr><br>
					<h2 class="header31">Evénement d’entreprise</h2>
					<p class="information">Organisation de votre événement d’entreprise<br></p>
					</font>
				</div>
				<div class="col-md-3 col-sm-3 col-xs-6">
					<img src="product/traiteur.jpg" class="img-responsive margin thumbnail">
				</div>
				<div class="col-md-3 col-sm-3 col-xs-6">
					<img src="product/anni2.jpg" class="img-responsive margin thumbnail">
				</div>
				<div class="col-md-3 col-sm-3 col-xs-6">
					<img src="product/animation1.jpg" class="img-responsive margin thumbnail">
				</div>
				<div class="col-md-3 col-sm-3 col-xs-6">
					<img src="product/anniv.jpg" class="img-responsive margin thumbnail">

				</div>
				<br><br><br><br>
			</div>
		</div>
	</div><a name="about.us"></a>
	</div><br><br><br>

	<div class="bg-1 jumbotron" style="margin-top:50px;">
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center">
					<font face="lato">
						<h2 class="header1"><b>NOS SERVICES</b></h2><br>
						<p class="subheader2">Pour assurer le succès de vos soirées, nous mettons à votre disposition un
							réseau de partenaires reconnus pour leur qualité</p>
					</font>
				</div>




				<div class="container jumbotron">
					<div class="row">
						<div class="col-md-3 col-sm-6 col-xs-6">
							<div class="thumbnail text-center " id="thumbnail1">
								<img src="product/securite.jpg" class="img-responsive margin ">
								<a href="auth/signin_signup.php">
									<font face="lato"><button class="btn"">Reserved Now!</button> </font></a>
				<p></p>
				<div id=" bedroom_info">
											<font face="lato">
												<p>SECURITE </p>
												<p>PRIX : 500 $ </p>


							</div>
						</div>
					</div>
					<div class="col-md-3 col-sm-6 col-xs-6">
						<div class="thumbnail text-center " id="thumbnail1">
							<img src="product/hotesse3.jpg" class="img-responsive margin ">
							<a href="auth/signin_signup.php">
								<font face="lato"><button class="btn"">Reserved Now!</button> </font></a>
				<p></p>
				<div id=" bedroom_info">
										<font face="lato">
											<p>HOTESSES </p>
											<p>PRIX : 500 $ </p>


						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-6">
					<div class="thumbnail text-center " id="thumbnail1">
						<img src="product/animation1.jpg" class="img-responsive margin ">
						<a href="auth/signin_signup.php">
							<font face="lato"><button class="btn"">Reserved Now!</button> </font></a>
				<p></p>
				<div id=" bedroom_info">
									<font face="lato">
										<p>DECORATION </p>
										<p>PRIX : 500 $ </p>


					</div>
				</div>
			</div>
			<div class="col-md-3 col-sm-6 col-xs-6">
				<div class="thumbnail text-center " id="thumbnail1">
					<img src="product/traiteur.jpg" class="img-responsive margin ">
					<a href="auth/signin_signup.php">
						<font face="lato"><button class="btn"">Reserved Now!</button> </font></a>
				<p></p>
				<div id=" bedroom_info">
								<font face="lato">
									<p>TRAITEUR </p>
									<p>PRIX : 500 $ </p>


				</div>
			</div>
		</div>




	</div>
	</div>


	<div class="jumbotron">
		<div class="container">
			<div class="col-md-12 col-sm-12"><br>
				<span class="glyphicon glyphicon-user center-block text-center" id="user"></span>
				<h2 class="section text-center main"><b><br> A propos </b></h2>
				<a href="home1.php"><br><img src="images/user.png"
						class="img-circle img-responsive center-block  myicon"></a>
				<br>
				<font face="lato" color="black">
					<p class="text-center myinfo">Les seminaires du club est u projet d'organisation d'événements en
						Tunisie contient les salles et les services dont votre événement a besoin</p>
				</font><br><br><br>
			</div>
		</div>
		<br><br><br><a name="contact.us"></a><span class="glyphicon glyphicon-phone center-block text-center"></span>
		<h2 class="section text-center main"><b><br>CONTACT </b></h2><br>
		<div class="container">
			<div class="row">
				<font face="century gothic">
					<h3 class="text-center">Message us now!</h3>
				</font>
				<div class="col-md-6">

					<form class="form-horizontal" action="client/client_message_db.php" method="post"><br><br>
						<div class="form-group input-group">
							<span class="input-group-addon">
								<span class="glyphicon glyphicon-user"></span>
							</span>
							<input type="email" class="form-control" name="email" placeholder="Email Address"
								required="">
						</div>
						<div class="form-group input-group">
							<span class="input-group-addon">
								<span class="glyphicon glyphicon-comment"></span>
							</span>
							<input type="textbox" class="form-control" name="mess" placeholder="Message" required="">

						</div>
						<div class="form-group">
							<button class="btn btn-success" id="create">Send Now</button>
						</div>

				</div>





				<div class="col-md-6 contact_info center-block"><br><br>
					<font face="century gothic">
						<font face="century gothic" color="#ff6f00">
							<p>Phone:
						</font> +216 21231808 <br>
						<font face="century gothic" color="#ff6f00">Email:</font> Seminaire_Club@gmail.com</p>
					</font>
					<a href="#" title="Facebook"><span class="fa fa-facebook fa-2x icons "></span></a>
					<a href="#" title="Instagram"><span class="fa fa-instagram fa-2x icons"></span></a>
					<a href="#" title="Google+"><span class="fa fa-google-plus fa-2x icons"></span></a>
				</div>
			</div>
			</form>

		</div>
	</div>
	</div>
	</div>

	</div>

	<footer class="container-fluid text-center">
		<div class="col-md-12">
			<font face="century gothic" size="2">
				<p><br>© Tous droits réservés 2024</a></p>
			</font>

			<div class="social">

			</div>
		</div>
	</footer>
</body>

</html>