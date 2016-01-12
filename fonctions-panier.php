<?php 
	
	// création d'un panier
	function createPanier(){
		if (!isset($_SESSION['panier'])) {
			$_SESSION['panier'] = array();
			$_SESSION['panier']['titreJeu'] = array();
			$_SESSION['panier']['qteJeu'] = array();
			$_SESSION['panier']['prixJeu'] = array();
			$_SESSION['panier']['verrou'] = true;
		}
		return true; // on retourne true pour des raisons pratiques lors des test 'if' 
	}

	// la fonction isVerouille
	function isVerouille(){
		if (isset($_SESSION['panier']) && $_SESSION['panier']['verrou']) {
			return true;
		} else {
			return false;
		}
	}

	// ajout d'un jeu au panier
	function ajouterJeu($titreJeu,$qteJeu,$prixJeu){
		
		// si le panier existe
		if (createPanier() && !isVerouille()) {
			
			// si le Jeu exsite déjà, on incrémente seulement la quantité
			$positionJeu = array_search($titreJeu, $_SESSION['panier']['titreJeu']);

			if ($positionJeu !== false) {
				$_SESSION['panier']['qteJeu'] += $qteJeu;	
			}
			else {

				// sinon on ajoute le jeu au panier
				array_push($_SESSION['panier']['titreJeu'],$titreJeu);
				array_push($_SESSION['panier']['qteJeu'],$qteJeu);
				array_push($_SESSION['panier']['prixJeu'],$prixJeu);
			}
		} 
		else {
			echo "Une erreur inconnue est survenue, veuillez conatacter l'administrateur";
		}
	}

	// suppression d'un article
	function supprimerJeu($titreJeu){
		// si le panier existe
		if (isset($_SESSION['panier']) && !isVerouille()) {
			
			// on va créer un panier temporaire pour purger le panier dedans 
			$tmpPanier = array();
			$tmpPanier['titreJeu'] = array();
			$tmpPanier['qteJeu'] = array();
			$tmpPanier['prixJeu'] = array();
			$tmpPanier['verrou'] = $_SESSION['panier']['verrou'];

			// on boucle et one purge
			for ($i=0; $i < count($_SESSION['panier']['titreJeu']); $i++) { 
				
				if ($_SESSION['panier']['titreJeu'][$i] !== $titreJeu) {
					
					//on remplit le tableau temporaire
					array_push($tmpPanier['titreJeu'], $_SESSION['panier']['titreJeu'][$i];
					array_push($tmpPanier['qteJeu'], $_SESSION['panier']['qteJeu'][$i];
					array_push($tmpPanier['prixJeu'], $_SESSION['panier']['prixJeu'][$i];
				}
			}
			//on remplace le panier en session par notre panier temporaire
			$_SESSION['panier'] = $tmpPanier;

			//on efface le panier temporaire
			unset($tmpPanier);
		}
		echo "Une erreur inconnue est survenue, veuillez conatacter l'administrateur";

	}
















































 ?>