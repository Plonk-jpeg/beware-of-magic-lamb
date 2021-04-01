<?php
include "htmlspecialchars.php";
include '/3WA/BOTML/vue-php-Botml/header.inc.php';
?>

<link rel="stylesheet" href="../css-botml/stylesheet-botml.css">

<table class="basket">
	<thead>

		<tr class="basket-row">
			<th>Article</th>
			<th>Quantité</th>
			<th>Prix unit.</th>
		</tr>

	</thead>
	<tbody>
		
		<!-- foreach -->
		
		<tr>
			<td>
				<div class="basket-product">
					<div class="basket-product-img">
						<img src="../ressources-Botml/image/beers/bottle-spin2-1024.gif" alt="bottle" style="width:50px;">
					</div>

					<div class="basket-product-name">
						<p>La magouille olligarchique</p>
						<p>Contenant 25cl</p>
						<button>Supprimer</button>
					</div>
				</div>
			</td>


			<td>
				<form class="value">
					<div class="value-button" id="decrease">-</div>

					<input type="number" id="number" value="0" />

					<div class="value-button" id="increase">+</div>
				</form>
			</td>

			<td>
				<div class="basket-price">
					<p>5.20 euros</p>
				</div>
			</td>

		</tr>
		
		<!-- endforeach -->
		
	</tbody>
	<tfoot>
		<tr class="basket-row">
			<td></td>
			<td></td>
			<td>
				<p>Prix total: 0 euros</p>
				<button>Paiement</button>
			</td>
		</tr>
	</tfoot>
</table>

<script src="/3WA/BOTML/JS-BOTML/bieres-focus-value.js"></script>

<?php include '/3WA/BOTML/vue-php-Botml/footer.inc.php' ; ?>
