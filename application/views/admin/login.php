<!-- Login form area -->
<div class="loginWrapper">
	<div class="loginLogo"><img src="<?php echo url::base(null, true); echo Kohana::$config->load('local')->get('asset_dir'); ?>images/loginLogo.png" alt="" /></div>
    <div class="loginPanel">
        <div class="head"><h5 class="iUser">Acceso Restringido</h5></div>
        <form id="valid" class="mainForm" method="post">
            <fieldset>
                <div class="loginRow noborder">
                    <label for="req1">Username:</label>
                    <div class="loginInput"><input type="text" name="user" class="validate[required]" id="req1" /></div>
                    <div class="fix"></div>
                </div>
                
                <div class="loginRow">
                    <label for="req2">Password:</label>
                    <div class="loginInput"><input type="password" name="password" class="validate[required]" id="req2" /></div>
                    <div class="fix"></div>
                </div>
                
                <div class="loginRow">
                    <!--<div class="rememberMe"><input type="checkbox" id="check2" name="remember" value="1" /><label for="check2">Recordar</label></div>-->
                    <input type="submit" value="Log me in" class="greyishBtn submitForm" />
                    <div class="fix"></div>
                </div>
            </fieldset>
            <ul>
  					<li><a href="admin/main/sendpass">¿Olvido su contraseña?</a></li>
			</ul>
        </form>
    </div>
</div>


