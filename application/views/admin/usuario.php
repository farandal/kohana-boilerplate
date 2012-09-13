<?=$navigationtop?>
<?=$navigationheader?>

<!-- Content wrapper -->
<div class="wrapper">


	<?=$navigation?>


<!-- ************************** CONTENT VIEW *************************** -->

<!-- Content -->
<div class="content">
    	<div class="title"><h5>Listado de Contactos</h5></div>

		<!-- Dynamic table -->
        <div class="table">
        Tipo usuarios: 0 = inactivo, 1= registrado, 2=administrador
            <div class="head">
            <h5 class="iFrames">Usuarios Registrados</h5>
            </div>
            <table cellpadding="0" cellspacing="0" border="0" class="display" id="example">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Email</th>
                        <th>Empresa</th>
                        <th>Tipo</th>
                    </tr>
                </thead>
                <tbody>
                    <? foreach($users as $user){?>
                    <tr class="gradeX">
                        <td><?=$user->name?></td>
                        <td><?=$user->email?></td>
                        <td><?=$user->company?></td>
                        <td class="center"><?=$user->role_id?></td>
                    </tr>
                    <? }?>
                </tbody>
            </table>
        </div>

        
        
        
        
        

</div>

<!-- ****************************************************************** -->







<!-- END -->
    <div class="fix"></div>
</div>
