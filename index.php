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
		<li>lister les fichier d'un dossier ls</li>
		<li>cat nomFichier.ext ouvre le fichier dans la console</li>
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
		Les principales commandes git
	</h3>
	<ul>
		<li><strong class="brique">git init :</strong> Initialise un projet. Ouvrir la console dans le répertoire puis faire git init crée un dossier .git</li>
		<li><strong class="brique">git config :</strong> Permet de modifier le nom de l'utilisateur et l'adresse mail associée</li>
		<li><strong class="brique">git help :</strong></li>
		<li><strong class="brique">git ls-files :</strong> Liste les fichiers inscrits dans l'index</li>
		<li><strong class="brique">git add :</strong> Ajoute un fichier dans l'index de suivi de git, avec un . à la place du nom ajoute tous les fichiers<br>
			A priori, il faut faire un git add fichier.ext avant chaque commit (mais...).
		<li><strong class="brique">git commit :</strong> Indique que l'on souhaite enregistrer le changement ajouté -m "permet d'indiquer la nature du changement"</li>
		<li><strong class="brique">git commit -a -m "" :</strong> Demande la prise en compte du comit sur tous les fichiers connus comme modifiés par l'index. Dans ce cas là il n'est pas nécessaire de faire un git add fichier.ext</li>
		<li><strong class="brique">git status :</strong> Liste les fichiers et leur statut</li>
		<li><strong class="brique">git log  :</strong> Liste les fichiers et leur statut</li>
		<li><strong class="brique">git branch :</strong> Suivi d'un nom, crée une nouvelle branche du projet</li>
		<li><strong class="brique">git checkout :</strong> Permet de se positionner sur un commit donné"</li>
		<li><strong class="brique">git merge :</strong> Fusionne une branche avec master : git merge brancheAFusionner</li>
		<li><strong class="brique">git push :</strong> Envoie les commits sur la version distante</li>
		<li><strong class="brique">git pull :</strong> Récupère la version distante</li>
	</ul>
	<h3>
		Première utilisation
	</h3>
	<p class="console">
		mkdir repertoireProjet<br>
		cd repertoireProjet<br>
		git init // initialise un projet local<br>
		touch readme.txt // crée un fichier<br>
		git add readme.text // ou git add .<br>
		git commit -m "ajout d'un nouveau fichier"<br>
		nouvelle modification du fchier<br>
		git add readme.txt
		git commit -m "nouvelle modification sur le fichier"
	</p>

	<p>
		Lorsque l'on fait des modifications si l'on veut qu'elles soient prises en compte, il faut ajouter le fichier puis faire un commit<br>
		On peut aussi faire directement : git commit -a -m "ma modification".<br>
		Si l'on ajoute pas le fichier et que l'on fait un "git status", git affiche : "Changes no staged for commit".
		Lorsque l'on fait un commit log les différents commit sont listés<br>
		La suite alphanumérique  après "commit" est son tidentifiant on l'apelle le <strong>le SHA</strong> sans t<br>
		On comprend la neccessité de bien rédiger les messages de commit.<br><br>
		Pour quitter le mode log sur max ou linux, il suffit d'appuyer sur la touche [q]<br>
	</p>
	<h3>
		[git checkout]
	</h3>
	<p>
		Il est possible de revenir à une version antérieure d'un fichier.<br>
		On fait un [git log] pour afficher les différents commits. on récupère le SHA correspondant à la modification que l'on souhaite revoir.<br>
		Puis [git checkout SHA] ramène tous les fichiers à la version correspondant à la date du SHA.<br>
		On vérifie son/ou ses fichiers.<br>
		S'il n'y a pas d'erreur on revient sur le dernier commit par un [git checkout master].<br>
		Et on réitère jusqu'à ce que l'on trouve la version bugguée.<br>
	</p>
	<h3>
		Supprimer un commit ?
	</h3>
	<p>
		On ne peut pas vraiment supprimer un commit, on peut juste fiare [git revert SHAcommit] qui fait l'inverse du précédent... Pas très pratique.<br>
		reste la commande [git reset hard] mais pou rl'instant je ne la maaitrise pas...
	</p>
	<h2>
		Github le versionning distant
	</h2>

	<h2>
		Github
	</h2>
	<h3>
		Le leader mondial du repositery open source
	</h3>
	<p>
		Github est avant toute chose un réseau siocial pas du tout réservé aux développeur. Ce peut-être un endroit de partage de code, bien sûr, mais aussi de photos, de maquettes ...<br>
		Comme tous les réseaux sociaux, on peut "suivre" d'autres utilisateurs.<br>
		Il faut savoir que GitHub est réseau social qui vous protège et ne charche pas à vous spolier droits d'auteur comme le font certains ...<br>
		Lorsque vous créez un compte, Github vous propose un compte illimié ouvert, ou compte privé (7$/mois).
	</p>
	<p>
		Github ne sert donc pas qu'à déposer une copie des vos codes en un endroit sûr. Dans la version gratuite, vos codes sont "open source", ils sont déposés pour être partagés, ce qui signifie aussi que vous pourrez aussi récupérer des morceaux de code.
	</p>
	<p>
		D'autre part en navigant sur le compte de vos librairies vavorites, vous pourrez déposer des issues et espérer trouver réponse.
	</p>
	<p>
		Et vos pourrez proposer des Pull Request pour proposer des solutions à certains problèmes.
	</p>
	<p>
		Sur github, on peut aussi déposer du code dans des [GITS].<br>
		les Gits proposent une manière élégante de partager des fichiers, du code ..., les GITS peuvent être publics ou privé.<br>
		Publics les GITS sont accessible par un moteur de recherche<br>
		Privés, ils ne son taccessibles qu' à ceux qui connaissent leur URL.<br>
		Les GITS peuvent être clonés, téléchargés, et même incorporés s'ils supportent le javascript.<br>
		Pour utiliser les GITS il suffit d'aller sur l'URL <a href="https://gist.github.com">https://gist.github.com</a>
	</p>
	<h3>
		[git clone]
	</h3>
	<p>
		De nombreuses librairies son tdéposées sur github, une fois sur la page de la librairie que l'on souhaite utiliser dans son projet, il suffit de chercher le bouton [clone or download] puis de copier l'adresse. De retour dans la console on peut faire [git clone url] puis le transfert se lance. Une fois l'archive chargée elle est automatiquement décompressée puis contrôlée.
	</p>
	<h3>
		[git remote]
	</h3>
	<p>Faire un remote c'est</p>
	<ul>
		<li>Ecrire son code en local</li>
		<li>Faire les commits et les vérifications</li>
		<li>Ensuite sauvegarder et éventuellement partager son code sur GitHub ou BitBucklet ou même sur un serveur dédié</li>
	</ul>
	<p>
		Envoyer un dossier local sur Github se fait en trois temps :
	</p>
	<ul>
		<li>[git remote add origin https://github.com/nameUser/nameRepo]</li>
		<li>[git push -u origine master]</li>
		<li>Entrer son login et son mot de passe.</li>
	</ul>


	<footer></footer>
</div>

<?php include("footer.php") ?>
