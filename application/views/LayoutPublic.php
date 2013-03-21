<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<meta http-equiv="content-script-type" content="text/javascript"/>
	<title>VOID TACTICAL MEDIA	</title>
	<?=$stylesheet;?>
	<?=$javascript;?>

	<link type="text/css" href="application/views/style.css" rel="stylesheet"/>
 <link type="text/css"  href="application/views/style_2/style.css" rel="stylesheet"/>
	<link type="text/css" href="application/views/caroStyle.css" rel="stylesheet"/>
	<link type="text/css" href="application/views/tango/skin.css" rel="stylesheet"/>
	<link type="text/css" href="application/views/tango/bigSkin.css" rel="stylesheet"/>


<script type="text/javascript" src="application/views/js/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="application/views/js/jquery.jcarousel.js"></script>
<script type="text/javascript" src="application/views/js/pirobox_extended.js"></script>
<script type="text/javascript" src="application/views/js/jquery-ui-1.8.2.custom.min.js"></script>
<script type="text/javascript" src="application/views/js/quickpager.jquery.js"></script>
<script type="text/javascript" src="application/views/js/quickpagerBIG.jquery.js"></script>


<!-- <script type="text/javascript" src="application/views/js/jquery.jcarousel.big.js"></script> -->

<script type="text/javascript">
jQuery(document).ready(function() {
  jQuery('#mycarousel').jcarousel({
    // Configuration goes here
  });
});
</script>


</head>
<body class="">
	<div id="container" class="container_12">
<?=Request::Factory('header/public')->execute()->body();?>
<?=Request::Factory('publicmenu')->execute()->body();?>
<?=$body;?>
<?=Request::Factory('footer/public')->execute()->body();?>
	</div>
</body>
</html>
