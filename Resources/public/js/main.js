//jQuery time
var current_fs, next_fs, previous_fs; //variables de pages

$( document ).ready(function() {
	/**
	 * Fonction page suivante
	 */
	$(".next").click(function(){
		
		current_fs = $(this).parent();
		next_fs = $(this).parent().next();
		
		//activer la prochaine étape actuelle sur la barre de progression
		$("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");
		
		//afficher le champ suivant
		next_fs.show(); 
		//cacher le champ actuel
		current_fs.hide();

		//scroll vers le haut
		window.scrollTo(0, 0);
	});

	/**
	 * Fonction page précédente
	 */
	$(".previous").click(function(){
		current_fs = $(this).parent();
		previous_fs = $(this).parent().prev();
		
		//désactiver l'étape actuelle sur la barre de progression
		$("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");
		
		//afficher le champ précédent
		previous_fs.show(); 
		//cacher le champ actuel
		current_fs.hide();

		//scroll vers le haut
		window.scrollTo(0, 0);
	});
});