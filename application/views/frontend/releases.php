<div class="backgroundIMG">
<?if(is_object($content['main']['backgroundImage'])):?>
 <img id="backgroundImage" src="<?=latticeurl::site($content['main']['backgroundImage']->original->fullpath);?>" width="<?=$content['main']['backgroundImage']->original->width;?>" height="<?=$content['main']['backgroundImage']->original->height;?>" alt="<?=$content['main']['backgroundImage']->original->filename;?>" />
<?endif;?>
</div>


<div class="printFeatureLong">


<?foreach($content['release'] as $releaseItem):?>
  <div class="printItem">
 
   <?if(is_object($releaseItem['Release Image'])):?>	 
		<img id="releaseImage" src="<?=latticeurl::site($releaseItem['Release Image']->original->fullpath);?>" width="<?=$releaseItem['Release Image']->original->width;?>" height="<?=$releaseItem['Release Image']->original->height;?>" alt="<?=$releaseItem['Release Image']->original->filename;?>" />
			    <?endif;?>
		

<div class="releaseDescription">


	 <h2><?=$releaseItem['releaseName'];?></h2>
   <p class="catalogNumber"> <?=$releaseItem['catalogNumber'];?></p>

	<div class="soundcloud">
	<p> <?=$releaseItem['soundcloudEmbed'];?></p>
	</div>



	 <div class="releaseBlurb"> 
		<p><?=$releaseItem['releaseBlurb'];?></p>
	

	<div class="contributingArtists">
			<?foreach($releaseItem['releaseArtist'] as $releaseArtistItem):?>
					<a href="<?=$releaseArtistItem['slug'];?>"><?=$releaseArtistItem['title'];?></a>
	
<br>

			<?endforeach;?>

</div>

</div>

</div>



</div>
<?endforeach;?>


</div>
