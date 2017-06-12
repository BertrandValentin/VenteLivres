
<section>
	<article>
		<label for="all">tout<input type="radio" name="display" id="all"></label>
		<label for="available">disponible<input type="radio" name="display" id="available"></label>
		<label for="rented">en location<input type="radio" name="display" id="rented"></label>
	</article>
</section>

<?php
	echo View::rtv_table($books,"ZONE_RECH_BOOKS","#","../control/books_fic.php");
?>
