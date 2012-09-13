<? $assets_dir = url::base(null, true).Kohana::$config->load('local')->get('asset_dir'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title><?php echo Kohana::$config->load('local')->site_name; ?> :: <?php echo $title; ?></title>

<link href="<?=$assets_dir?>admin/css/main.css" rel="stylesheet" type="text/css" />
<link href='http://fonts.googleapis.com/css?family=Cuprum' rel='stylesheet' type='text/css' />

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>

<script type="text/javascript" src="<?=$assets_dir?>admin/js/plugins/spinner/jquery.mousewheel.js"></script>
<script type="text/javascript" src="<?=$assets_dir?>admin/js/plugins/spinner/ui.spinner.js"></script>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script> 

<script type="text/javascript" src="<?=$assets_dir?>admin/js/plugins/wysiwyg/jquery.wysiwyg.js"></script>
<script type="text/javascript" src="<?=$assets_dir?>admin/js/plugins/wysiwyg/wysiwyg.image.js"></script>
<script type="text/javascript" src="<?=$assets_dir?>admin/js/plugins/wysiwyg/wysiwyg.link.js"></script>
<script type="text/javascript" src="<?=$assets_dir?>admin/js/plugins/wysiwyg/wysiwyg.table.js"></script>

<script type="text/javascript" src="<?=$assets_dir?>admin/js/plugins/flot/jquery.flot.js"></script>
<script type="text/javascript" src="<?=$assets_dir?>admin/js/plugins/flot/jquery.flot.orderBars.js"></script>
<script type="text/javascript" src="<?=$assets_dir?>admin/js/plugins/flot/jquery.flot.pie.js"></script>
<script type="text/javascript" src="<?=$assets_dir?>admin/js/plugins/flot/excanvas.min.js"></script>
<script type="text/javascript" src="<?=$assets_dir?>admin/js/plugins/flot/jquery.flot.resize.js"></script>

<script type="text/javascript" src="<?=$assets_dir?>admin/js/plugins/tables/jquery.dataTables.js"></script>
<script type="text/javascript" src="<?=$assets_dir?>admin/js/plugins/tables/colResizable.min.js"></script>

<script type="text/javascript" src="<?=$assets_dir?>admin/js/plugins/forms/forms.js"></script>
<script type="text/javascript" src="<?=$assets_dir?>admin/js/plugins/forms/autogrowtextarea.js"></script>
<script type="text/javascript" src="<?=$assets_dir?>admin/js/plugins/forms/autotab.js"></script>
<script type="text/javascript" src="<?=$assets_dir?>admin/js/plugins/forms/jquery.validationEngine-en.js"></script>
<script type="text/javascript" src="<?=$assets_dir?>admin/js/plugins/forms/jquery.validationEngine.js"></script>
<script type="text/javascript" src="<?=$assets_dir?>admin/js/plugins/forms/jquery.dualListBox.js"></script>
<script type="text/javascript" src="<?=$assets_dir?>admin/js/plugins/forms/chosen.jquery.min.js"></script>
<script type="text/javascript" src="<?=$assets_dir?>admin/js/plugins/forms/jquery.maskedinput.min.js"></script>
<script type="text/javascript" src="<?=$assets_dir?>admin/js/plugins/forms/jquery.inputlimiter.min.js"></script>
<script type="text/javascript" src="<?=$assets_dir?>admin/js/plugins/forms/jquery.tagsinput.min.js"></script>

<script type="text/javascript" src="<?=$assets_dir?>admin/js/plugins/other/calendar.min.js"></script>
<script type="text/javascript" src="<?=$assets_dir?>admin/js/plugins/other/elfinder.min.js"></script>

<script type="text/javascript" src="<?=$assets_dir?>admin/js/plugins/uploader/plupload.js"></script>
<script type="text/javascript" src="<?=$assets_dir?>admin/js/plugins/uploader/plupload.html5.js"></script>
<script type="text/javascript" src="<?=$assets_dir?>admin/js/plugins/uploader/plupload.html4.js"></script>
<script type="text/javascript" src="<?=$assets_dir?>admin/js/plugins/uploader/jquery.plupload.queue.js"></script>

<script type="text/javascript" src="<?=$assets_dir?>admin/js/plugins/ui/jquery.progress.js"></script>
<script type="text/javascript" src="<?=$assets_dir?>admin/js/plugins/ui/jquery.jgrowl.js"></script>
<script type="text/javascript" src="<?=$assets_dir?>admin/js/plugins/ui/jquery.tipsy.js"></script>
<script type="text/javascript" src="<?=$assets_dir?>admin/js/plugins/ui/jquery.alerts.js"></script>
<script type="text/javascript" src="<?=$assets_dir?>admin/js/plugins/ui/jquery.colorpicker.js"></script>

<script type="text/javascript" src="<?=$assets_dir?>admin/js/plugins/wizards/jquery.form.wizard.js"></script>
<script type="text/javascript" src="<?=$assets_dir?>admin/js/plugins/wizards/jquery.validate.js"></script>

<script type="text/javascript" src="<?=$assets_dir?>admin/js/plugins/ui/jquery.breadcrumbs.js"></script>
<script type="text/javascript" src="<?=$assets_dir?>admin/js/plugins/ui/jquery.collapsible.min.js"></script>
<script type="text/javascript" src="<?=$assets_dir?>admin/js/plugins/ui/jquery.ToTop.js"></script>
<script type="text/javascript" src="<?=$assets_dir?>admin/js/plugins/ui/jquery.listnav.js"></script>
<script type="text/javascript" src="<?=$assets_dir?>admin/js/plugins/ui/jquery.sourcerer.js"></script>
<script type="text/javascript" src="<?=$assets_dir?>admin/js/plugins/ui/jquery.timeentry.min.js"></script>
<script type="text/javascript" src="<?=$assets_dir?>admin/js/plugins/ui/jquery.prettyPhoto.js"></script>

<script type="text/javascript" src="<?=$assets_dir?>admin/js/custom.js"></script>

<script type="text/javascript" src="<?=$assets_dir?>admin/js/charts/chart.js"></script>

</head>

<body>



