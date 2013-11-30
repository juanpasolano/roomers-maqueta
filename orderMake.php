<?php include("header.php"); ?>

<div class="content clearfix">

	<div class="separatorDecor"></div>

	<?php include("shopNav.php") ?>

	<div class="rightContent">
		<form action="orderConfirm.php" class="form makeOrderForm">
			<h1>Configure your order</h1>
			<div class="separator"></div>


			<h2 class="colorMagenta">Delivery Address</h2>
			<h4>Please select your preferred shipping address for your order.</h4>

			<div class="accountItem clearfix">
				<p class="left">
					Mr Juan Testing<br>
					Gastfeldstrasse 121<br>
					Bremen,09876<br>
					Baden-Württemberg, Deutschland<br></p>
					<p class="right">
						<a href="#editProfileModal"  class="btn btn-fucsia" role="button" data-toggle="modal">Select other</a>
					</p>
				</div>

				<h2 class="colorMagenta">Shipping Options</h2>
				<h4>Please choose the desired shipping method for your order. </h4>

				<div class="accountItem clearfix">
					<div class="control-group">
						<label class="radio ">
							<input type="radio" id="" value="option1" name="shipping"> Flat rate shipping costs (8 EUR)
						</label>
						<label class="radio ">
							<input type="radio" id="" value="option2" name="shipping"> Shipping outside German (19 EUR)
						</label>
					</div>
				</div>

				<hr class="bs-docs-separator">


				<h2 class="colorMagenta">Payment options</h2>
				<h4>Please select the preferred payment method for your order.</h4>

				<div class="accountItem clearfix">
					<div class="control-group">
						<label class="radio ">
							<input type="radio" id="" value="option1" name="payment"> Cash on delivery
						</label>
						<label class="radio ">
							<input type="radio" id="" value="option2" name="payment"> Prepayment
						</label>
						<label class="radio ">
							<input type="radio" id="" value="option2" name="payment"> Paypal
						</label>
						<p class="text-error">Be aware: If you choose paypal the shipping address would be the one you choose on paypal</p>
					</div>
				</div>

				<hr class="bs-docs-separator">


				<h2 class="colorMagenta">Terms and Conditions</h2>
				<h4>Please read and accept our policy to continue.</h4>

				<div class="accountItem clearfix">
					<div class="control-group">
						<label class="checkbox ">
							<input type="checkbox" id="" value="option1" name="payment"> I accept the <a href="">Terms and Conditions</a>
						</label>
						<label class="checkbox ">
							<input type="checkbox" id="" value="option2" name="payment">  I accept the <a href=""> Cancellation Policy</a>
						</label>
					</div>
				</div>

				<hr class="bs-docs-separator">

				<h2 class="colorMagenta">Sumary</h2>
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
				<input type="submit" value="CONTINUE" class="btn btn-large btn-fucsia">
			</form>
		</div>

	</div><!-- end of content -->

	<?php include("footer.php"); ?>
