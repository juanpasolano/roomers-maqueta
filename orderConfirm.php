<?php include("header.php"); ?>

<div class="content clearfix">

	<div class="separatorDecor"></div>

	<?php include("shopNav.php") ?>

	<div class="rightContent">
		<h1>Confirm your order</h1>
		<div class="separator"></div>
		<table width="100%" class="table table-noborder">
			<tbody>

				<tr>
					<th width="17%" height="83" valign="top">Delivery Address</th>
					<td width="83%">Herr Juan Testing<br>
						Gastfeldstrasse 121<br>
						Bremen, 09876 <br>
						Baden-Württemberg, Deutschland<br>
					</td>
				</tr>
				<tr>
					<th width="17%" height="30"> Payment type</th>
					<td width="83%">Cash on delivery</td>
				</tr>
				<tr>
					<th width="17%" height="30"> Delivery type</th>
					<td width="83%">8 € <em>(
						Flat rate shipping costs)</em></td>
					</tr>
					<tr>
						<th width="17%" height="30">Subtotal</th>
						<td width="83%"><strong>111.28</strong></td>
					</tr>
					<tr>
						<th width="17%" height="30">Total</th>
						<td width="83%"><h4 class="colorMagenta">119.28</h4></td>
					</tr>
				</tbody>
			</table>


			<h2 class="colorMagenta">Articles</h2>

			<table width="100%" border="0" cellspacing="0" cellpadding="0" class="table">
				<thead>
					<tr>
						<th width="28%">Article</th>
						<th width="8%">Tax</th>
						<th width="12%">Amount</th>
						<th width="24%">Price</th>
						<th width="16%">Net</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td height="31">Alaska Salmon Eggs</td>
						<td>7%</td>
						<td>3</td>
						<td>47.50 €</td>
						<td>142.5 €</td>
					</tr>
					<tr>
						<td height="31">Block of Goose Foie Gras with Truffles</td>
						<td>7%</td>
						<td>2</td>
						<td>70.99 €</td>
						<td>141.98 €</td>
					</tr>
					<tr>
						<td height="31">Alaska Salmon Eggs</td>
						<td>7%</td>
						<td>1</td>
						<td>19.00 €</td>
						<td>19 €</td>
					</tr>
					<tr>
						<td height="31">Alaska Salmon Eggs</td>
						<td>7%</td>
						<td>1</td>
						<td>9.50 €</td>
						<td>9.5 €</td>
					</tr>
					<tr>
						<td height="31">Chin. Asetra Imperial Baeri Caviar</td>
						<td>19%</td>
						<td>1</td>
						<td>469.50 €</td>
						<td>469.5 €</td>
					</tr>


					<tr>
						<td colspan="4" style="text-align:right">Net total</td>
						<td>782.48 €</td>
					</tr>
					<tr>
						<td colspan="4" style="text-align:right"><strong>VAT: 7% </strong> <em>(312.98 €)</em></td>
						<td> 21.91 €</td>
					</tr>

					<tr>
						<td colspan="4" style="text-align:right"><strong>VAT: 19% </strong> <em>(469.4 €)</em></td>
						<td> 89.21 €</td>
					</tr>

					<tr>
						<td colspan="4" style="text-align:right"><strong>Gross total</strong></td>
						<td>893.6 €</td>
					</tr>

					<tr>
						<td colspan="4" style="text-align:right"><strong>Shipping</strong></td>
						<td><span id="shipping">8</span> €</td>
					</tr>

					<tr>
						<td colspan="4" style="text-align:right"><strong>Gross total + shipping</strong></td>
						<td><span id="brutoMasShip">901.6</span> €</td>
					</tr>
				</tbody>
			</table>
		</div>

	</div><!-- end of content -->

	<?php include("footer.php"); ?>