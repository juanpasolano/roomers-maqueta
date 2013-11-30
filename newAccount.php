<?php include("header.php"); ?>

	<div class="content clearfix">

	<div class="separatorDecor"></div>

		<?php include("shopNav.php") ?>

		<div class="rightContent">
			<h1>Create new account</h1>
			<div class="separator"></div>
			<form class="form-horizontal">
				<fieldset>
					<div class="control-group">
						<label class="control-label" for="name">* Full name</label>
						<div class="controls">
							<input type="text" class="input-xlarge" id="name" name="name">
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="phone">Email address</label>
						<div class="controls">
							<input type="text" class="input-xlarge" id="phone" name="phone">
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="phone">Phone number</label>
						<div class="controls">
							<input type="text" class="input-xlarge" id="phone" name="phone">
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="fax">Fax number</label>
						<div class="controls">
							<input type="text" class="input-xlarge" id="fax" name="fax">
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="password">* Password</label>
						<div class="controls">
							<input type="text" class="input-xlarge" id="password" name="password">
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="password2">* Confirm Password</label>
						<div class="controls">
							<input type="text" class="input-xlarge" id="password2" name="password2">
						</div>
					</div>
					<div class="control-group">
						<div class="controls">
						<button type="submit" class="btn btn-fucsia">Create account</button>
						</div>
					</div>
				</fieldset>
			</form>
		</div>





	</div><!-- end of content -->

	<?php include("footer.php"); ?>