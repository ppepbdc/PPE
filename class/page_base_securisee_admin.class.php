<?php
class page_base_securisee_admin extends page_base_securisee_famille {

	public function __construct($p) {
		parent::__construct($p);
	}
	public function affiche() {
		
		parent::affiche();
		
	}
	public function affiche_menu() {

		parent::affiche_menu();
		?>

			
					<li><a href="">Gestion des Familles </a>
						<ul>
							<li><a href="">Liste de toutes les familles inscrites</a></li>
							<li><a href="ajout_famille.php">Inscrire une famille</a></li>
							<li><a href="modif_famille.php">Modifier une famille</a></li>
							<li><a href="">Supprimer une famille</a></li>
							<li><a href="">Réinitialiser mot de passe </a></li>
						</ul>
					</li>
					
	
		<?php 

	}
}
