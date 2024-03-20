<!-- exemple de traitement du formulaire -->
<!doctype html>
<!-- Utilités de la définition de la langue :
     - pour les moteurs de recherches afin qu'ils fournissent des résultats plus adaptés
     - pour simplifier l'accessibilité (handicapés, ...). Les synthétiseurs vocaux peuvent par exemple prendre le bon accent -->
<html lang="fr-FR">
	<head>
		<title>Formulaire exemple</title>  <!-- pour le titre de l'onglet dans le navigateur, titre du favori, moteurs de recherche -->
		<meta charset=utf-8" />  <!-- jeu de caractères qui permet de donner directement les cacactères accentués, dans éditeur encodage aussi en UTF-8 -->
		<meta name="author" content="SIO1 Schuman" />
		<meta name="description" content="Les contrôles graphiques d'un formulaire" />
		<link rel="stylesheet" href="styles.css" />
	</head>
	<body>
		<!--  traitement du formulaire  -->
		<?php
		if (isset($_POST["cmdValider"])) {		// on vérifie qu'on rentre dans le script après envoi du formulaire
		?>
			<h3>Résultat du  print_r($_POST);</h3>
			<pre>
				<?php print_r($_POST); ?>
			</pre>
			 		
			<!-- on affiche les valeurs saisies pour la liste déroulante	-->	
			<p><strong>Liste déroulante à choix unique $_POST["lstProfession"] :  </strong>
            <?php 
            echo $_POST["lstProfession"] .'</p>';
 			
            // case à cocher
			if (empty($_POST["chkCase"])) {
				$coche = 'non';
			} else {
				$coche = 'oui';
			}
            
            // date
			$date = DateTime::createFromFormat('Y-m-d', $_POST["txtDate"]);
            echo '<p><strong>Date format jj/mm/ssaa : ' . $date->format('d/m/Y') . '</p></strong>';			

 
            // radio bouton
			if ($_POST["optChoixUnique"] == 1) {
				$titre = 'Madame';
			} else {
				$titre = 'Monsieur';
			}

		}
			?>
	</body>
</html>