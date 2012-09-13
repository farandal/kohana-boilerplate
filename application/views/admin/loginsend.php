<!-- Login form area -->
<div class="loginWrapper">
	<div class="loginLogo"><img src="<?php echo url::base(null, true); echo Kohana::$config->load('local')->get('asset_dir'); ?>images/loginLogo.png" alt="" /></div>
    <div class="loginPanel">
        <div class="head"><h5 class="iUser">Recuperar contraseña</h5></div>
        <form id="valid" class="mainForm" method="post">
            <fieldset>
                <div class="loginRow noborder">
                    <label for="req1">Email:</label>
                    <div class="loginInput"><input type="text" name="user" class="validate[required]" id="req1" /></div>
                    <div class="fix"></div>
                </div>
                
                <div class="loginRow">
                   
                    <input type="submit" value="Log me in" class="greyishBtn submitForm" />
                    <div class="fix"></div>
                </div>
            </fieldset>
        </form>
    </div>
</div>