<?=$navigationtop?>
<?=$navigationheader?>

<!-- Content wrapper -->
<div class="wrapper">


	<?=$navigation?>


<!-- ************************** CONTENT VIEW *************************** -->

<!-- Content -->
<div class="content">
    	<div class="title"><h5>Listado de Contactos</h5></div>

		<div class="widget first">
            <div class="head"><h5 class="iUsers">Contacts list</h5></div>
            <div id="myList-nav"></div>
            <ul id="myList">
					<? foreach($contactos as $contact){?>
                    <li><a href="#"><?=$contact->name?></a>
                        
                        <ul class="listData">
                            <li><a href="mailto:<?=$contact->email?>" title=""><?=$contact->email?></a></li>
                            <li><span class="red"><?=$contact->fecha?></span></li>
                            <li><span class="cNote"><?=$contact->company?></span></li>
                            <li onclick="$.jGrowl('<?=$contact->msn?>');"><span class="blueNum">Mensaje</span></li>
                            
                        </ul><? //$contact->msn?>
					</li>
					<? }?>

            </ul>
        </div>

</div>

<!-- ****************************************************************** -->







<!-- END -->
    <div class="fix"></div>
</div>
