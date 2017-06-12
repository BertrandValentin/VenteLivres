<script src="https://code.jquery.com/jquery-3.1.1.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script>
var maFonction = function(event){
	var elem=$( this );
	elem.wrap('<i></i>');
};

var maFonctionH2 = function(event){
	var elem=$( this );
	$('aside').append(elem.text()+'<br>'+elem.attr('class'));

};

var maFonctionImage = function(event){
	var elem=$( this );
	var monHTML="\
				<div id=\"popup1\" class=\"overlay\"> \
					<div class=\"popup\"> \
						<h2>Description</h2> \
						<a class=\"close\" href=\"#\">&times;</a> \
						<div class=\"content\"> \
							<img src=\""+elem.attr('src')+"\"> \
						</div> \
					</div>\
				</div>";
	$('body'	).append(monHTML);
	$('.close'	).on('click',function(event) {
		$('#popup1').remove();
	});
};


$(function(){
	$('H2').on('click', maFonctionH2);
	/* appel sur une balise dont l'id de la class est cover */
	$('.cover').wrap("<div class=\"box\"><a class=\"button\" href=\"#popup1\"></a></div>");
	$('.cover').on('click', maFonctionImage);
	$('.cover').on('click', maFonctionImage);

	$('input[name="FormModeAjax"]').attr("value" ,"1");
	<?php require_once('../VIEW/js/search.js')?>
	<?php require_once('../VIEW/js/form_rech_ajax.js')?>
});
</script>