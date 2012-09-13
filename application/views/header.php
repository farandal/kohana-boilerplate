<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>
        <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
        <title><?php echo $title; ?></title>
        <meta name="keywords" content="<?php echo Kohana::$config->load('local')->get("site_name"); ?>" />
        <meta name="description" content="<?php echo Kohana::$config->load('local')->get("site_name"); ?> website" />
        <base href="https://<?php echo Kohana::$config->load('local')->get("primary_domain"); ?>/" />

    <!-- BEGIN: basic page needs -->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <!-- END: basic page needs -->
    
    <!-- BEGIN: css -->
    <link href="<?=$assets?>css/style.css" rel="stylesheet" type="text/css" />
    <!-- END: css -->

    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>
    <script type="text/javascript" src="<?=$assets?>/js/jquery.easing.1.3.js"></script>
    <script type="text/javascript" src="<?=$assets?>/js/jquery.flexslider.js"></script>  
    <script type="text/javascript" src="<?=$assets?>/js/jquery.prettyPhoto.js"></script> 
    <script type="text/javascript" src="<?=$assets?>/js/jquery.form.js"></script> 
    <script type="text/javascript" src="<?=$assets?>/js/jquery.validate.min.js"></script> 
    <script type="text/javascript" src="<?=$assets?>/js/jquery.smooth-scroll.min.js"></script> 
    <script type="text/javascript" src="<?=$assets?>/vendor/jquerytools/js/jquery.tools.min.js"></script>   
    <script type="text/javascript" src="<?php echo $assets.'js/jCarousel/jquery.jcarousel.js'; ?>"></script>
    <link rel="stylesheet" media="screen" href="<?php echo $assets; ?>js/jCarousel/tango/skin.css" type="text/css" />
  
    <script>
      window["WIDGETKIT_URL"] = "<?=$assets?>/vendor/widgetkit/js/";
    </script>
  
    <link rel="stylesheet" media="screen" href="<?php echo $assets.'vendor/widgetkit/css/widgetkit.css'; ?>" type="text/css" />
    <script type="text/javascript" src="<?php echo $assets.'vendor/widgetkit/js/widgetkit.js'; ?>"></script>
   
    <script type="text/javascript" src="<?=$assets?>js/main.js"></script>     
    <? if($mobile) { ?>
      	<script type="text/javascript" src="<?=$assets?>js/mobile.js"></script> 
    <? } else { ?>
   	<script type="text/javascript" src="<?=$assets?>js/desktop.js"></script>
    <? } ?>
     
    <? if($mobile) { ?>
    	<link href="<?=$assets?>/css/mobile.css" rel="stylesheet" type="text/css" />
    <? } else { ?>
        <link href="<?=$assets?>/css/desktop.css" rel="stylesheet" type="text/css" />
    <? } ?>

    
    <? if(isset($extra_js)) { foreach($extra_js as $js) { ?>
    	<script type="text/javascript" src="<?=$js?>"></script> 
    <? } } ?>
    
    <? if(isset($extra_css)) { foreach($extra_css as $css) {  ?>
    		<link href="<?=$css?>" rel="stylesheet" type="text/css" />
    <? } }?>
    

    <? if(isset($extra_code)) { ?>
    	  <?=$extra_code?>
    <? } ?>

</head>

<body>



    
