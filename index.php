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
		Introduction
	</h3>
	<p>
		Git a été concç par Linus Torvalds le fondateur des systèmes linux. Git est utilisé par les développeurs travaillant sur le coeur de LInux. Ces deux phrases sont en elles mêmes un gage de pérennité.<br>
	</p>
	<h3>
		Versioning centralisé ou distribué
	</h3>
	<p>
		Git est une solution distribuée, cela présente plusieurs avantages :
	</p>
	<ul>
		<li>Moins de risque de perte du code (puisqu'il est répliqué sur tous le spostes de travail</li>
		<li>Pas de nécessité d'une connexion, sinon de temps en temps pour "partager" son code</li>
	</ul>
	<p>
		Git est un outil en ligne de commande plutôt facile a utiliser, cependant certaines commandes de bases sont à connaître : <br>
	</p>
	<ul>
		<li>Se Déplacer dans la hiérarchie des dossir [cd] (ne pas oublier ../ pour se placer à la racine du mac)</li>
		<li>Créer un dossier [mkdir], créer un fichier[touch]</li>
	</ul>
	<p>
		On le voir rien de bien méchant :), on verra les commandes propre à Git dans un instant
	</p>

	<h2>
		Installer GIT
	</h2>
	<p>
		RAS sinon que sous window :Git installe une console pour son fonctionnement "git.bash" est une interface graphique "git.gui"<br>
		<strong>Controle v ne fonctionne pas dans git.bash -> utilisez la touche insert du clavier.</strong><br>
		Sous mac et linux le terminal fera l'affaire, d'ailleurs après l'installation de Git tapez dans votre console git et ...
	</p>
	<p>
		Une fois l'installation finalisée, ouvrez la console et paramétrez le compte général qui vous servira sur github
	</p>
	<p class="console">
		git config --global user.name "votreNom"<br>
		git config --global user.email "mail@laposte.net
	</p>
	<h3>
		GitHub
	</h3>
	<p>
		Github est avant toute chose un réseau siocial pas du tout réservé aux développeur. Ce peut-être un endroit de partage de code, bien sûr, mais aussi de photos, de maquettes ...<br>
		Comme tous les réseaux sociaux, on peut "suivre" d'autres utilisateurs.<br>
		Il faut savoir que GitHub est réseau social qui vous protège et ne charche pas à vous spolier droits d'auteur comme le font certains ...<br>
		Lorsque vous créez un compte, Github vous propose un compte illimié ouvert, ou compte privé (7$/mois).
	</p>
	<h3>
		Les principales commandes git
	</h3>
	<ul>
		<li><strong class="brique">git init</strong>Initialise un projet. Ouvrir la console dans le répertoire puis faire git init crée un dossier .git</li>
		<li><strong class="brique">git config</strong>permet de modifier le nom de l'utilisateur et l'adresse mail associée</li>
		<li><strong class="brique">git help</strong></li>
		<li><strong class="brique">git status</strong>liste les fichiers et leur statut</li>
		<li><strong class="brique">git log</strong>liste les fichiers et leur statut</li>
		<li><strong class="brique">git add</strong>ajoute un fichier dans l'index de suivi de git, avec un . à la place du nom ajoute tous les fichiers</li>
		<li><strong class="brique">git commit</strong>indique que l'on vient de faire un changement que l'on souhaite enregistrer -m "permet d'indiquer la nature du changement"</li>
		<li><strong class="brique">git branch</strong>suivi d'un nom, crée une nouvelle branche du projet</li>
		<li><strong class="brique">git checkout</strong>permet de se déplacer d'une branche à l'autre "git checkout autreBranche"</li>
		<li><strong class="brique">git merge</strong>fusionne une branche avec master : git merge brancheAFusionner</li>
		<li><strong class="brique">git push</strong>Envoie les commits sur la version distante</li>
		<li><strong class="brique">git pull</strong>Récupère la version distante</li>
	</ul>
	<h3>
		Première utilisation
	</h3>
	<p class="console">
		cd repertoire<br>
		mkdir repertoireProjet<br>
		git init // initialise un projet local<br>
		touch readme.txt<br>
		git add readme.text // ou git add .<br>
		git commit -m "ajout d'un nouveau fichier"<br>
	</p>






	<footer></footer>
</div>

<?php include("footer.php") ?>


