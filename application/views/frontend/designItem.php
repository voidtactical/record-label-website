<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>


</head>
<body>


<div class="modalHeader">
<p><?=$content['main']['title'];?></p>
</div>

<div class="modalImage">

<?if(is_object($content['main']['designImage'])):?>
 <img id="designImage" src="<?=latticeurl::site($content['main']['designImage']->original->fullpath);?>" width="<?=$content['main']['designImage']->original->width;?>" height="<?=$content['main']['designImage']->original->height;?>" alt="<?=$content['main']['designImage']->original->filename;?>" />
<?endif;?>
</div>


<div class="modalText">
<p class="designDescription"> <?=$content['main']['description'];?></p>
</div>

</body>
</html>

