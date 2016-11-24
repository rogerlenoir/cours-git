<?php
	$title = 'Introduction Git';
	$description = '';
	$categorie = '';
	include('header.php');
?>

<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

<div class = "main-wrapper">
	<?php
		//Un petit breadCrumb ...

		$uri = $_SERVER["REQUEST_URI"];

		if(isset($categorie)&& $categorie !=''  && $uri != 'http://php' )
		{
			$uriCat = 'http://php/'.$categorie.'.php';
			echo '<div class="bread"><a href = "http://php">PHP></a> > <a href="'.$uriCat.'">'.$categorie.'</a> > '.substr($uri, 5, -4).'</div>';
		}elseif($uri != '/' )
		{
			echo '<div class="bread"><a href = "http://php">PHP></a> > '.substr($uri, 1, -4).'</div>';
		}
	?>

	<h1>Introduction Git</h1>

	<h2>
		Un outil de versionning
	</h2>
	<h3>
		Versioning centralisé ou distribué
	</h3>
	<p>
		La solution distribuée présente plusieurs avantages
	</p>
	<ul>
		<li>Moins de risque de perte du code (puisqu'il est répliqué sur tous le spostes de travail</li>
		<li>Pas de nécessité d'une connexion, sinon de temps en temps pour "partager" son code</li>
	</ul>
	<h2>
		Installer GIT
	</h2>
	<p>
		Particularité window : git installe une console pour son fonctionnement "git.bash" est une interface graphique "git.gui"<br>
		<strong>Controle v ne fonctionne pas dans git.bash -> utilisez la touche insert du clavier.</strong>
	</p>
	<p>
		Une fois l'installation finalisée, ouvrez la console et paramétrez le compte général qui vous servira sur github
	</p>
	<p class="console">
		git config --global user.name "votreNom"<br>
		git config --global user.email "mail@laposte.net
	</p>



	<h3>Les commits</h3>
	<p>
		A chaque étape d'un travail on enregistre une version de son code. Un commit est un enregistrement
	</p>


	<footer></footer>
</div>

<?php include("footer.php") ?>


