/* TODO 
 * - group rajouter une colonne pour (1, 2, 3, 4)
 * - recuperation de l'id avec un get (le joueur de "l'onglet")
 * - partie rajouter colonne le_tour_du_joueur pour savoir le tour de qui c'est
 */

 // Autant que de joueurs dans le groupe
var nb_joueur = 4;
var joueur1 = 1; // TODO GET id
var compteur_case = 1;
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
	
	// après avoir lancé les dés on recup leur valeurs
	var valeur_de1 = $("#dice1").text();
    var valeur_de2 = $("#dice2").text();

    return (parseInt(valeur_de1) + parseInt(valeur_de2));

}

function deplacer_joueur(nb_cases){

		
	//console.log("DES = ", nb_cases);
	compteur_case = 1;
	var id_refresh_deplacer = setInterval(function(){deplacer(nb_cases)}, 500);

}


function deplacer(nb_cases){
	case_diff = 1;
	id_case_joueur = parseInt($(".joueur_courant").parents('td').attr("id"));
	//console.log("id_case_joueur = ", id_case_joueur);

	nouvelle_case = (id_case_joueur + case_diff)%40;
	//console.log("nouvelle case = ", nouvelle_case);

	$(".joueur_courant").remove();

	selector = "#"+nouvelle_case;
	//console.log("selector = ", selector);
	$(selector).append("<img src='Image/joueur1.png' class='joueur1 absolute joueur_courant' alt='J1' />");
	compteur_case++;
	
	if (compteur_case == nb_cases){
		console.log("coucou");
	}
	
}

function sleep(delay) {
        var start = new Date().getTime();
        while (new Date().getTime() < start + delay);
}