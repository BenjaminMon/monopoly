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

 $("#passer").on("click", function(){
 	if (joueur_courant == 4){
 		joueur_courant = 1;
 	} else {
    	joueur_courant++;
    }
 });

setInterval(check_joueur_courant, 2000);

function check_joueur_courant(){
	selector = ".joueur" + joueur_courant;
	if (!$(selector).hasClass("joueur_courant")){
		// console.log("if");
		joueur_precedent = joueur_courant - 1,
		selector2 = ".joueur" + joueur_precedent;
		$(selector2).removeClass("joueur_courant");
		$(selector).addClass("joueur_courant");
	}
	console.log(joueur_courant);
}

function changer_joueur_potision(){
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
	// On lance le déplacement
	var id_refresh_deplacer = setInterval(function(){deplacer(nb_cases)}, 500);
	// On le clean un tic après pour être sur qu'on se déplace du bon nombre de case
	// et pas une de moins
	setTimeout(function(){clearInterval(id_refresh_deplacer)}, 500*(nb_cases+1));

}


function deplacer(nb_cases){
	case_diff = 1;

	// On avance case par case autant de fois que les dés l'indique (nb_cases)
	if (compteur_case <= nb_cases){
		id_case_joueur = parseInt($(".joueur_courant").parents('td').attr("id"));
		joueur_num = $(".joueur_courant").attr("id");

		nouvelle_case = (id_case_joueur + case_diff)%40;

		$(".joueur_courant").remove();
		selector = "#"+nouvelle_case;
		$(selector).append("<img src='Image/" + joueur_num + ".png' id='" + joueur_num + "' class='" + joueur_num + " absolute joueur_courant' alt='" + joueur_num + "' />");

		compteur_case++;
		
	} // Sinon rien ne se passe
	
}

function sleep(delay) {
        var start = new Date().getTime();
        while (new Date().getTime() < start + delay);
}


