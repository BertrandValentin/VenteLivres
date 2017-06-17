
<?php $stats = Control::get_basket_stats(); ?>
	<aside class="right">
	<?php if(Control::user_connected()) { ?>
		<h3>Panier</h3>
		<table>
			<tr>
				<td>Contenu: </td>
				<td><?php echo $stats->count ?></td>
			</tr>
			<tr>
				<td>Prix Total: </td>
				<td><?php echo $stats->total ?></td>
			</tr>
		</table>
		<?php } ?>
	</aside>
