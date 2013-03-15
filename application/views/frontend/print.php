<div class="backgroundIMG">
<?if(is_object($content['main']['backgroundImage'])):?>
 <img id="backgroundImage" src="<?=latticeurl::site($content['main']['backgroundImage']->original->fullpath);?>" width="<?=$content['main']['backgroundImage']->original->width;?>" height="<?=$content['main']['backgroundImage']->original->height;?>" alt="<?=$content['main']['backgroundImage']->original->filename;?>" />
<?endif;?>
</div>


<div class="printMission">
	<p> <?=$content['main']['missionStatement'];?></p>
</div>



<div class="printFeatureLong">

<?foreach($content['printItem'] as $printItemItem):?>

<div class="printItem">

   <?if(is_object($printItemItem['printThumb'])):?>
    <img id="printThumb" src="<?=latticeurl::site($printItemItem['printThumb']->original->fullpath);?>" width="<?=$printItemItem['printThumb']->original->width;?>" height="<?=$printItemItem['printThumb']->original->height;?>" alt="<?=$printItemItem['printThumb']->original->filename;?>" />
   <?endif;?>

 <div class="description">

	   <h2><?=$printItemItem['title'];?></h2>
	
   <p="printDescription"> <?=$printItemItem['printDescription'];?></p>

		   <?if(is_object($printItemItem['pdfDownload'])):?>
		   <a href="<?=$printItemItem['pdfDownload']->fullpath;?>">read or download the article</a>

   <?endif;?>


</div>

</div>
  
<?endforeach;?>

</div>
