/* TODO 
 * - group rajouter une colonne pour (1, 2, 3, 4)
 * - recuperation de l'id avec un get (le joueur de "l'onglet")
 * - partie rajouter colonne le_tour_du_joueur pour savoir le tour de qui c'est
 */

 // Autant que de joueurs dans le groupe
var nb_joueur = 4;
var joueur1 = 1; // TODO GET id

var joueur_courant = 1; // TODO requête vers la base en setTimeOut pour toujours avec le joueur_courant à jour. 


function changer_joueur_courant(){
	if (joueur_courant != nb_joueur) {
		joueur_courant++;
	} else {
		joueur_courant = 1;
	}

	// Ensuite requête ajax pour mettre à jour dans la base
	$.ajax({
		data : 'joueur_courant=' + joueur_courant,
        url : 'php/partie.php?ope=changer_tour',	// TODO : fichier php
        dataType : 'json'
	});

}

function recuperer_des(){
	
	// après avoir lancé les dés
	var valeur_de1 = $("#dice1").text();
    var valeur_de2 = $("#dice2").text();

    return (parseInt(valeur_de1) + parseInt(valeur_de2));

}

function deplacer_joueur(nb_cases){
	// Besoin des id sur les cases 
	// pour effectuer le deplacement
}

