<div class="centered forgot-form">
	<fieldset>
		<legend><?php echo STR_FORGOT_DATA_LEGEND; ?></legend>
		<?php echo STR_FORGOT_DATA_INFO; ?>
	</fieldset>
	<br />
	<form method="post">
		<fieldset>
			<legend><?php echo STR_FORGOT_LEGEND; ?></legend>
			<table border="0" width="100%">
				<tr>
					<td><label for="email"><?php echo STR_FORGOT_EMAIL; ?></label></td>
					<td><input name="email" id="email" size="30" type="text" value=""></td>
				</tr>
				<tr>
					<td></td>
					<td align="right"><input class="button" value="<?php echo STR_FORGOT_GO_BUTTON; ?>" name="formaction" type="submit"></td>
				</tr>
			</table>
		</fieldset>
	</form>
</div>
