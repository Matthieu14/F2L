<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd class = "liste"">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" type="image/x-icon" href="icon.ico"/>
    <link href="Styles/styles.css" rel="stylesheet" type="text/css" />
	<script type="text/javascript" src="Scripts/scripts.js"></script>
    <title>Free to learn</title>
</head>

<body>
	<?php include("entete.html") ?>
	<form action="recherche.php" class = "liste" method="post">
		<!-- Ici va s'afficher le terme saisie dans le champ recherche
				si il n'est pas nul -->
		<?php if($_POST['recherche'] != ''): ?>
			<input type="text" name="recherche" value="<?php echo $_POST['recherche'] ; ?>">
		<?php else: ?>
			<input type="text" name="recherche" >
		<?php endif; ?>

		<input type="submit" value="Submit">

	</form>



<?php if(strtolower($_POST['recherche']) == 'html'): ?>
<!-- Ici va s'afficher la liste des resultats pour le mot cle "html"
	A adapter selon vos propres affichage de resultats -->

<!--  tableau de reponse � mettre en forme 	-->

<!-- titre				th class = "liste"eme	duree	format	type acc�s 	lien	-->
<!--
	initiation			html	2h	en ligne	free		lien1
	formation de base	html	2j	sur site	pro			lien2
	formation avanc�e	html	2j	sur site	pro			lien3
	formation expert	html	3j	sur site	premium		lien4
-->
<div class = "article tableau">
	<table>
		<tr class="coucou">
			<th class = "liste">Titre</th>
			<th class = "liste">Theme</th>
			<th class = "liste">Dur&eacute;e</th>
			<th class = "liste">Format</th>
			<th class = "liste">Abonnement</th>
			<th class = "liste">Lien</th>
		</tr>
		<tr class="coucou">
			<td class = "liste">Initiation</td>
			<td class = "liste">Html</td>
			<td class = "liste">2h</td>
			<td class = "liste">En ligne</td>
			<td class = "liste">Free</td>
			<td class = "liste"><a href = "Formations/html.shtml#initiation">D&eacute;tails ></a></td>
		</tr>
		<tr class="coucou">
			<td class = "liste">Formation de base</td>
			<td class = "liste">Html</td>
			<td class = "liste">5h</td>
			<td class = "liste">En ligne</td>
			<td class = "liste">Pro et prenium</td>
			<td class = "liste"> <a href = "Formations/html.shtml#base">D&eacute;tails ></a> </td>
		</tr>
		<tr class="coucou">
			<td class = "liste">Formation avanc&eacute;e</td>
			<td class = "liste">Html</td>
			<td class = "liste">20h</td>
			<td class = "liste">Sur site</td>
			<td class = "liste">Pro et prenium</td>
			<td class = "liste"><a href = "Formations/html.shtml#avance">D&eacute;tails ></a></td>
		</tr>
		<tr class="coucou">
			<td class = "liste">Formation expert</td>
			<td class = "liste">Html</td>
			<td class = "liste">30h</td>
			<td class = "liste">Sur site</td>
			<td class = "liste">Premium</td>
			<td class = "liste"><a href = "Formations/html.shtml#expert">D&eacute;tails ></a></td>
		</tr>
	</table>
</div>

<?php else: ?>
<!-- Ici va s'afficher la liste des resultats pour les autres recherche
	=> il faut adapter le message pour pas de r�sultats  -->

pas de r&eacute;sultats :/

<?php endif;
	include("pieddepage.html");
?>
