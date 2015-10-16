<?php
class page_base_securisee_famille extends page_base {

	public function __construct($p) {
		parent::__construct($p);
	}
	public function affiche() {
		
		parent::affiche();
		
	}
	public function affiche_menu() {

		parent::affiche_menu();
		?>

			<li><a href="">Gestion des enfants </a>
				<ul>
					<li><a href="">Modifier mot de passe familial</a></li>
					<li><a href="">Modifier mes informations personnelles</a></li>
					<li><a href="">Consulter mes inscriptions</a></li>
					<li><a href="">Inscrire un enfant</a></li>
					<li><a href="">Modifier une inscription enfant </a></li>
					<li><a href="">Supprimer une inscription enfant</a></li>
				</ul>
			</li>
	
		<?php 

	}
}
