<!DOCTYPE html>
<html>
	<head>
 		<meta charset="UTF-8" />
 		 <!--[if lt IE 9]>
  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->

		<link href="bootstrap/css/bootstrap.css" rel="stylesheet">
		<link href="bootstrap/css/tuto.css" rel="stylesheet">
 		<link href="Yumenews.css" type="text/css" rel="stylesheet"/>
	</head>
	<body>
		<div class="container-fluid">
			<header>
				<div class="row">
					<div class="col-sm-12">

							<div ><img src="eyes.jpg" alt="yeux de hiboux" id="eyes"><div id="pagename">YumeNews</div><a href=""><sup id="sign">H</sup></a></div>

					</div>
				</div>
			</header>

			<div class="row">
				<nav class="col-sm-12" class="yumemenu">
					<h3>
					<div class="row">

						<a class="col-sm-2" href="index.php">Acceuil</a>
						<a class="col-sm-2" href="Journal.php">Journal</a>
						<a class="col-sm-offset-8 col-sm-2"  href="inscription.php" id="inscrire">S'inscrire</a>

					</div>
					</h3>
				</nav>
			</div>

			<div class="row">
				<section>
				<aside class="col-sm-12"><h2 class="yumecontenu"> Journal YumeNews</h2>
				</aside>
				<div class="row">
					<section class="col-sm-10">
						<article class="col-sm-9 col-sm-push-2 col-sm-pull-2">
							<p class="yumeindexarticle">

							</p>
						</article>
						<aside class="col-sm-3" id="historique"><p>Historique des évènements</p>

						</aside>
						</div>
					</section>

			<aside class="col-sm-2 col-sm-pull-10" id="yumesearch">
				</br>
					<form method="post" action="">
						<p class="recherche">
						<label for="recherche"></label>Retrouver un évènement passé :<br/>
						<input type="search" name="recherche" id="recherche" placeholder="Ex: création de YumeNews"/>
						</p>
					</form>
			</aside>
		</section>
	</div>
			<footer class="row">
						<div class="col-sm-4">

							<form method="post" action="">
								<p>
								<label for="commentaire">Pour nous laisser un commentaire ou une impression :</label><br/>
								<textarea name="commentaire" id="commentaire"></textarea>
								<input type="submit" value="Envoyer"/>
								</p>
							</form>
						</div>
						<div class="col-sm-4">
							<p>Pour suivre YumeNews :</p>
							<p>Wattpad</p>
							<p>Facebook</p>
							<p>Discord</p>
						</div>
						<div class="col-sm-4">
							<p>Contacter un admin de YumeNews :</p>
							<p>@kawouete</p>
							<p>@As_Dyv</p>
							<p>@Mmac33</p>
						</div>
					</div>
				</footer>
		</div>
	</body>
