
<section>
	<article>
		<h1>panier</h1>
		<?php
			echo View::rtv_simple_table($basket);
		?>
		<p>total: <?php echo $stats->count; ?> pour <?php echo $stats->total; ?> €</p>
	</article>
</section>
