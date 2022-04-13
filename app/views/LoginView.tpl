{extends file="main.tpl"}

{block name=content}


<section id="footer">
	<div class="inner">
		<a id="form"><h2 class="major">Logowanie do systemu</h2></a>
			<form action="{$conf->action_url}login" method="post"  class="pure-form pure-form-aligned bottom-margin">
				<div class="fields">
					<fieldset>
						<div class="pure-control-group">
							<label for="id_login">login: </label>
							<input id="id_login" type="text" name="login"/>
						</div>
						<div class="pure-control-group">
							<label for="id_pass">pass: </label>
							<input id="id_pass" type="password" name="pass" /><br />
						</div>
						<div class="pure-controls">
							<input type="submit" value="zaloguj" class="pure-button pure-button-primary"/>
						</div>
					</fieldset>
				</div>
			</form>
	</div>
</section>

{include file='messages.tpl'}

{/block}
