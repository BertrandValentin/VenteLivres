/*todo: ecrire une seule fct qui recupere le input sans faire reference $(this)*/
var AjaxRech = function() 
{
	$input=$(this);
	$form=$input.parent("form");
	$formAction = $form.attr("action");
	$formValeur = $input.val();
	$zoneResult = '#RESULT_'+$input.attr("name").replace("BUTTONS", "ZONE");
	$formAction = $formAction.replace(".php", "_ajax.php");

	var value = $("input:checked").val();

	$.post( $formAction, { RECH_AJAX : $formValeur, 'RADIO': value })
  		.done(function( data ) {$($zoneResult).replaceWith(data);});
};

$("body").delegate( ".RECH", "keyup", AjaxRech);

var AjaxRadio = function() {
	$input=$(this);
	$form=$input.parents("form");
	$formAction = $form.attr("action");
	$formValeur = $input.val();
	$zoneResult = '#RESULT_'+$input.attr("name").replace("BUTTONS", "ZONE");
	$formAction = $formAction.replace(".php", "_ajax.php");

	var value = $("input:text").val();

	console.log($zoneResult);
	console.log($($zoneResult));

	$.post( $formAction, { RECH_AJAX : value, 'RADIO': $formValeur })
  		.done(function( data ) {$($zoneResult).replaceWith(data);});
}

$('input:radio').each(function() { $(this).click(AjaxRadio); });