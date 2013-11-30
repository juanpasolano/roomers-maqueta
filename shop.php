
<?php $m = 'shop'?>
<?php include("header.php") ?>

	<div class="content clearfix">

	<div class="separatorDecor"></div>

		<?php include("shopNav.php") ?>

		<div class="rightContent">
			<h1>Featured products</h1>
			<div class="itemsContainer clearfix">
				<?php for ($i=0; $i < 6 ; $i++) {  ?>
				<div class="productItemCard">
					<img src="http://lorempixel.com/300/30<?=$i ?>/food" alt="">
					<div class="infoBox">
						<h3>Lipsum deras cuanti double lines</h3>
						<div class="number"><strong>€850</strong> Each piece</div>
						<a href="#" class="basicButton">Add one</a>
						<a href="productDetails.php" class="basicButton">Details</a>
					</div>
				</div>
				<?php } ?>
				<?php for ($i=0; $i < 6 ; $i++) {  ?>
				<div class="productItemCard">
					<img src="http://lorempixel.com/300/30<?=$i ?>" alt="">
					<div class="infoBox">
						<h3>Lipsum deras</h3>
							<div class="number"><strong>€850</strong> Each piece</div>
							<a href="#" class="basicButton">Add one</a>
							<a href="productDetails.php" class="basicButton">Details</a>
					</div>
				</div>
				<?php } ?>
			</div>
		</div>
	</div><!-- end of content -->

	<?php include("footer.php") ?>