<h1><?=$content['main']['title'];?></h1>

<div class="popupImge">
<?if(is_object($content['main']['Release Image'])):?>
 <img id="Release Image" src="<?=latticeurl::site($content['main']['Release Image']->original->fullpath);?>" width="<?=$content['main']['Release Image']->original->width;?>" height="<?=$content['main']['Release Image']->original->height;?>" alt="<?=$content['main']['Release Image']->original->filename;?>" />
<?endif;?>
</div>
<!--
<?if(is_object($content['main']['smallReleaseImage'])):?>
 <img id="smallReleaseImage" src="<?=latticeurl::site($content['main']['smallReleaseImage']->original->fullpath);?>" width="<?=$content['main']['smallReleaseImage']->original->width;?>" height="<?=$content['main']['smallReleaseImage']->original->height;?>" alt="<?=$content['main']['smallReleaseImage']->original->filename;?>" />
<?endif;?>
-->

<div class="popupDesc">
<p id="soundPopUp" class="soundcloudEmbed"> <?=$content['main']['soundcloudEmbed'];?></p>
<!--
<p class="catalogNumber"> <?=$content['main']['catalogNumber'];?></p>
-->
<p class="releaseBlurb"> <?=$content['main']['releaseBlurb'];?></p>
</div>
