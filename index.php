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
		Git a été conçu par Linus Torvalds le fondateur des systèmes linux. Git est utilisé par les développeurs travaillant sur le coeur de Linux. Ces deux phrases sont en elles-mêmes un gage de pérennité.<br>
	</p>
	<h3>
		Versioning centralisé ou distribué
	</h3>
	<p>
		Git est une solution distribuée, cela présente plusieurs avantages :
	</p>
	<ul>
		<li>Moins de risque de perte du code (puisqu'il est répliqué sur tous les postes de travail</li>
		<li>Pas de nécessité d'une connexion, sinon de temps en temps pour "partager" son code</li>
	</ul>
	<p>
		Git est un outil fonctionnant en ligne de commande plutôt facile a utiliser. Certaines commandes de bases sont à connaître : <br>
	</p>
	<ul>
		<li>Se Déplacer dans la hiérarchie des dossier [cd] (ne pas oublier ../ pour se placer pour sortir du dossier user)</li>
		<li>Créer un dossier [mkdir], créer un fichier[touch]</li>
		<li>lister les fichiers d'un dossier ls</li>
		<li>cat nomFichier.ext ouvre le fichier dans la console</li>
	</ul>
	<p>
		On le voir rien de bien méchant :), on verra les commandes propres à Git dans un instant
	</p>

	<h2>
		Installer GIT
	</h2>
	<p>
		RAS sinon que sous Window :Git installe une console pour son fonctionnement "git.bash" est une interface graphique "git.gui"<br>
		<strong>Controle v ne fonctionne pas dans git.bash -> utilisez la touche insert du clavier.</strong><br>
		Sous mac et Linux le terminal fera l'affaire, d'ailleurs après l'installation de Git tapez dans votre console git, si tout c'est bien passé git répond
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
			Il faut faire un git add fichier.ext avant chaque commit (mais...).
		<li><strong class="brique">git commit :</strong> Indique que l'on souhaite enregistrer le changement ajouté <br>
			-m "permet d'indiquer la nature du changement"</li>
		<li><strong class="brique">git commit -a -m "" :</strong> Demande la prise en compte du comit sur tous les fichiers connus comme modifiés par l'index. Il n'est pas nécessaire de faire un git add fichier.ext</li>
		<li><strong class="brique">git status :</strong> Liste les fichiers et leur statut</li>
		<li><strong class="brique">git log  :</strong> Liste les fichiers et leur statut</li>
		<li><strong class="brique">git remote :</strong>[git remote add origin https://github.com/nameUser/nameRepo]</li>
		<li><strong class="brique">git push :</strong> Envoie les commits sur la version distante</li>
		<li><strong class="brique">git pull :</strong> Récupère la version distante</li>
		<li><strong class="brique">git branch :</strong> Suivi d'un nom, crée une nouvelle branche du projet</li>
		<li><strong class="brique">git checkout :</strong> Permet de se positionner sur un commit donné"</li>
		<li><strong class="brique">git merge :</strong> Fusionne une branche avec master : git merge brancheAFusionner</li>
		<li><strong class="brique">git diff :</strong></li>
	</ul>
	<h3>
		Première utilisation
	</h3>
	<p class="console">
		cd dossier racine (www)
		mkdir repertoireProjet<br>
		cd repertoireProjet<br>
		git init // initialise un projet local<br>
		touch readme.txt // crée un fichier<br>
		git status (indique que le fichier n'est pas ajouté)
		git add readme.text // ou git add .<br>
		git commit -m "ajout d'un nouveau fichier"<br>
		nouvelle modification du fichier<br>
		git add readme.txt
		git commit -m "nouvelle modification sur le fichier"
		ou git commit -am "nouvelle modification sur le fichier"
		git log permet de "voir" les commits
		git checkout SHA permet de revenir sur un commit

	</p>

	<p>
		Lorsque l'on fait des modifications si l'on veut qu'elles soient prises en compte, il faut ajouter le fichier puis faire un commit<br>
		On peut aussi faire directement : git commit -a -m "ma modification".<br>
		Si l'on n'ajoute pas le fichier et que l'on fait un "git status", git affiche : "Changes no staged for commit".
		Lorsque l'on fait un commit log les différents commit sont listés<br>
		La suite alphanumérique  après "commit" est son identifiant on l'apelle le <strong>le SHA</strong> sans t<br>
		On comprend la neccessité de bien rédiger les messages de commit.<br><br>
		Pour quitter le mode log sur max ou linux, il suffit d'appuyer sur la touche [q]<br>
	</p>
	<h3>
		[git checkout SHA]
	</h3>
	<p>
		Il est possible de revenir à une version antérieure d'un fichier.<br>
		On fait un [git log] pour afficher les différents commits. on récupère le SHA correspondant à la modification que l'on souhaite revoir.<br>
		Puis [git checkout SHA] ramène tous les fichiers à la version correspondants à la date du SHA.<br>
		On vérifie son/ou ses fichiers.<br>
		S'il n'y a pas d'erreur on revient sur le dernier commit par un [git checkout master].<br>
		Et on réitère jusqu'à ce que l'on trouve la version bugguée.<br>
	</p>
	<h3>
		Supprimer un commit ?
	</h3>
	<p>
		On ne peut pas vraiment supprimer un commit, on peut juste faire [git revert SHAcommit] qui fait l'inverse du précédent... Pas très pratique.<br>
		reste la commande [git reset hard] mais pour l'instant je ne la maîtrise pas...
	</p>
	<h2>
		Github : le versioning distant
	</h2>
	<h3>
		Le leader mondial du repositery open source
	</h3>
	<p>
		Github est avant toute chose un réseau social pas du tout réservé aux développeurs. Ce peut-être un endroit de partage de code, bien sûr, mais aussi de photos, de maquettes ...<br>
		Lorsque vous créez un compte, Github vous propose un compte illimié ouvert, ou compte privé (7$/mois).
	</p>
	<p>
		Github ne sert donc pas qu'à déposer une copie de vos codes en un endroit sûr. Dans la version gratuite, vos codes sont "open source", ils sont déposés pour être partagés, ce qui signifie aussi que vous pourrez aussi récupérer des morceaux de code sur le compte des autres développeurs.
	</p>
	<p>
		D'autre-part en navigant sur le compte de vos librairies favorites, vous pourrez déposer des issues et espérer trouver réponse.
	</p>
	<p>
		Et vous pourrez proposer des Pull Request pour proposer des solutions à certains problèmes.
	</p>
	<p>
		Sur github, on peut aussi déposer du code dans des [GITS].<br>
		les Gits proposent une manière élégante de partager des fichiers, du code ..., les GITS peuvent être publics ou privé.<br>
		Publics, les GITS sont accessible par un moteur de recherche<br>
		Privés, ils ne sont accessibles qu' à ceux qui connaissent leur URL.<br>
		Les GITS peuvent être clonés, téléchargés, et même incorporés s'ils supportent le javascript.<br>
		Pour utiliser les GITS il suffit d'aller sur l'URL <a href="https://gist.github.com">https://gist.github.com</a>
	</p>
	<h3>
		[git clone]
	</h3>
	<p>
		De nombreuses librairies sont déposées sur github. Une fois sur la page de la librairie que l'on souhaite utiliser, il suffit de chercher le bouton [clone or download] puis de copier l'adresse. De retour dans la console en local, on peut faire [git clone url] puis le transfert se lance. Une fois l'archive chargée elle est automatiquement décompressée puis contrôlée.
	</p>
	<h3>
		[git remote] enregistrer un serveur distant
	</h3>
	<ul>
		<li>Si le dépôt local n'est pas encore cloné sur le dépot distant on peut le connecter au serveur distant. Pour indiquer l'adresse on fait :<br>
			<strong>[git remote add origin https://github.com/nameUser/nameRepo]</strong></li>
		<li>Une fois que la connexion est établie on peut faire <br>
			<strong>[git push -u origin master]</strong></li>
	</ul>
	<p>
		Entrons dans le détail :<br>
		[remote] signifie "copie distante" [add] "ajoute" [origin] le "serveur désigné "origin" qui est par convention le serveur par defaut [url] l'adresse, le plus souvent "https://github.com/nameUser/nameRepo" <br>
		Si on avait un autre serveur on pourrait écrire : [git remote add <strong>serveur-2 https://adresse serveur</strong>]
		Si on été parti d'un projet distant ...
	</p>
	<h3>
		[git push] envoyer les modifications sur github
	</h3>
	<p>
		Après chaque commit, si l'on fait un [git status], git nous avertit que nous n'avons pas envoyé la dernière modification sur le serveur<br>
		<em>Your branch is ahead of 'origin master' by 1 commit</em><br>
		Si l'on veut envoyer son dernier commit on fait un :<br>
		<strong>[git push origin master]</strong> "git pousse sur origin master"<br>
		[git status] donne alors <em>Your branch is up-to-date width origin/master</em>
	</p>
	<h3>[git pull] Récupérer des informations depuis Github</h3>
	<p>
		Deux cas de figure peuvent se présenter. Soit on a modifié un fichier directement sur github, soit un collègue à "pusher" ses propres modifs, quoiqu'il en soit le but est de récupérer ses informations. C'est trés simple, il suffit de faire :<br>
		<strong>[git pull remote master]</strong>
	</p>
	<h2>
		Git  et le travail collaboratif
	</h2>
	<p>
		Avec Git on peut faire des développements parallèles indépendament du développement en cours. Par exemple : développer une fonctionnalité, faire un test. C'est surtout pratique lorsque l'on veut travailler à plusieurs<br>
		Visualisons notre travail sous la forme d'une route, pour l'instant nous travaillons sur la route principale (master). Si nous voulons développer une fonctionnalité indépendamment de master, nous pouvons créer un embrachement. A partir de cet embracnchement nous développerons un code totalement indépendant de la route principale (de master). Lorsque notre fonctionnalité sera terminée,, nous pourrons rejoindre la route principale tout en lui ajoutant notre travail<br>
		Cette façon de fonctionner est surtout intéressante lorsque l'on travaille à plusieurs. Un développeur travaille sur une fonctionnalité à partir du code réalisé en commun mais dans un espace réservé. Lorsqu'il a terminé son travail il propose l'intégration de ce travail au travail commun.
	</p>
	<h3>
		[git branch]
	</h3>
	<p>
		Si l'on fait <strong>[git branch]</strong>la console nos renvoie "master" (pour peu que nous n'ayons pas créé de branches)<br>
		<strong>[git branch maBranche]</strong> crée une branche.<br>
		<strong>[git branch]</strong>renvoie les deux branches avec une astérix devant la branche sur laquelle on travaille.<br>
		<strong>[git checkout maBranche]</strong>déplace l'utilisateur sur la branche maBranche.<br>
		<strong>[git branch]</strong> montre bien que l'on vient de se déplacer sur la nouvelle branche.<br>
		Si l'on fait des modifs dans maBranche celma n'affecte pas le master.<br>
		On peut vérifier cela en faisant des [git log] sur chacune des deux branches (master et maBranche).<br>
		Si l'on souhaite ajouter à master maBranche, il faut se placer dans master :<br>
		<strong>[git checkout master]</strong> puis : <br>
		<strong>[git merge maBranche]</strong><br>
		Bien sûr on peut fusionner master dans maBranche, il suffit de se positionner dans maBranche et ...<br>
	</p>




	<footer></footer>
</div>

<?php include("footer.php") ?>
