<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>

</head>
<body>

<div class="modalHeader">
<h2><?=$content['main']['title'];?></h2>
</div>


<!--
<?if(is_object($content['main']['thumbnail'])):?>
 <img id="thumbnail" src="<?=latticeurl::site($content['main']['thumbnail']->original->fullpath);?>" width="<?=$content['main']['thumbnail']->original->width;?>" height="<?=$content['main']['thumbnail']->original->height;?>" alt="<?=$content['main']['thumbnail']->original->filename;?>" />
<?endif;?>
-->

<div class="modalImage">
<?if(is_object($content['main']['fullSize'])):?>
 <img id="fullSize" src="<?=latticeurl::site($content['main']['fullSize']->original->fullpath);?>" width="<?=$content['main']['fullSize']->original->width;?>" height="<?=$content['main']['fullSize']->original->height;?>" alt="<?=$content['main']['fullSize']->original->filename;?>" />
<?endif;?>
</div>


<div class="modalText">
<p class="description"> <?=$content['main']['description'];?></p>
</div>

</body>
</html>
