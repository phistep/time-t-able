<div class="centered login-form">
	<form method="post">
	  <fieldset>
		<legend><?php echo STR_LOGIN_LEGEND; ?></legend>
		<table border="0">
			<tr>
				<td><label for="username"><?php echo STR_LOGIN_USERNAME; ?></label></td>
				<td><input name="username" id="username" size="24" type="text" value=""></td>
			</tr>
			<tr>
				<td><label for="password"><?php echo STR_LOGIN_PASSWORD; ?></label></td>
				<td><input name="password" id="password" size="24" type="password" value=""></td>
			</tr>
			<tr>
				<td></td>
				<td align="right"><input class="button" value="<?php echo STR_LOGIN_GO_BUTTON; ?>" name="formaction" type="submit"></td>
			</tr>
		</table>
	  </fieldset>
	</form>
</div>
