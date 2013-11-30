<?php $m = 'home'?>
<?php include("header.php") ?>

	<div class="slider">
		<div class="item active">
			<img src="assets/img/slider/1.jpg" height="335" width="1000" alt="name of slider">
			<div class="infoBox">
				<span class="text">New collection has arrived</span>
				<a href="" class="link">See the details</a>
			</div>
		</div>
		<div class="item">
			<img src="http://lorempixel.com/1000/335/abstract" height="335" width="1000" alt="name of slider">
			<div class="infoBox">
				<span class="text">Lorem ipsum dolor sit amet</span>
				<a href="" class="link">See the details</a>
			</div>
		</div>
		<div class="item">
			<img src="http://lorempixel.com/1000/336/abstract" height="335" width="1000" alt="name of slider">
			<div class="infoBox">
				<span class="text">Lorem ipsum dolor sit amet</span>
				<a href="" class="link">See the details</a>
			</div>
		</div>
		<a href="#" class="next">Next</a>
		<a href="#" class="prev">Prev</a>
	</div>


	<div class="content">

		<div class="separatorDecor"></div>


		<div class="homeCollections clearfix">
			<h1>Latest Collections</h1>
			<a href="#" class="item itemLeft">
				<img src="assets/img/collections/1.jpg" height="400" width="490" alt="name of collection">
				<div class="info">
					<h2>Zaphire Collection</h2>
					<p>Competently re-engineer integrated platforms through magnetic core competencies. Compellingly communicate tactical expertise before professional expertise. Progressively </p>
				</div>
			</a>
			<a href="#" class="item">
				<img src="assets/img/collections/2.jpg" height="400" width="490" alt="name of collection">
				<div class="info">
					<h2>Zeus Pleasures Collection</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo architecto sequi officiis nisi laboriosam voluptate numquam animi repellendus laborum modi.	 </p>
				</div>
			</a>
		</div>

		<div class="separatorDecor"></div>

		<div class="premuim clearfix">
			<h1>Featured Products</h1>

			<?php for ($i=0; $i <4 ; $i++) {?>
				<div class="item">
					<h2>Zeus’ throne at Olympia</h2>
					<div class="imgFrame"><img src="assets/img/products/1a.jpg" height="250" width="440" alt="productName"></div>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti velit enim quisquam perferendis fugit numquam est dolores labore hic consequatur.</p>
					<div class="priceBox">
						<span class="number">€850</span>
						<span class="txt">Each piece</span>
					</div>
					<div class="btnsBox">
						<a href="#" class="basicButton fr">More info</a>
						<a href="#" class="basicButton fr">Add to cart</a>
					</div>
				</div>
			<?php } ?>
		</div>
	</div><!-- end of content -->

	<?php include("footer.php") ?>