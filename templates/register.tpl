<div class="centered register-form">
	<form method="post">
		<fieldset>
		<legend><?php echo STR_REGISTER_LEGEND; ?></legend>
		<table border="0">
			<tr>
				<td>
					<label for="username"><?php echo STR_REGISTER_USERNAME; ?></label><br />
					<input name="username" id="username" size="24" type="text" value="">
				</td>
				<td>
					<label for="password"><?php echo STR_REGISTER_PASSWORD; ?></label><br />
					<input name="password" id="password" size="24" type="password" value="">
				</td>
			</tr>
			<tr>
				<td>
					<label for="email"><?php echo STR_REGISTER_EMAIL; ?></label><br />
					<input name="email" id="email" size="24" type="text" value="">
				</td>
				<td>
					<label for="rep-password"><?php echo STR_REGISTER_REP_PASSWORD; ?></label><br />
					<input name="rep-password" id="rep-password" size="24" type="password" value="">
				</td>
			</tr>
			<tr>
				<td>
					<label for="captcha"><?php echo STR_REGISTER_CAPTCHA; ?></label><br />
					<img src="http://blog.psoke.de/general/captcha.php">
						<?php /* has to be replaced by real captcha image*/ ?>
				</td>
				<td>
					<br />
					
					<input name="captcha" id="captcha" size="24" type="text" value="">
				</td>
			</tr>
			<tr>
			</tr>
			<tr>
				<td></td>
				<td align="right"><input class="button" value="<?php echo STR_REGISTER_GO_BUTTON; ?>" name="formaction" type="submit"></td>
			</tr>
		</table>
	  </fieldset>
	<br />
	<fieldset>
		<legend><?php echo STR_REGISTER_DATA_LEGEND; ?></legend>
		<?php echo STR_REGISTER_DATA_INFO; ?>
	</fieldset>
	</form>
</div>
