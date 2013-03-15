<div class="mainContent">

<div class="backgroundIMG">

<?if(is_object($content['main']['backgroundHome'])):?>
 <img :qid="backgroundHome" src="<?=latticeurl::site($content['main']['backgroundHome']->original->fullpath);?>" width="<?=$content['main']['backgroundHome']->original->width;?>" height="<?=$content['main']['backgroundHome']->original->height;?>" alt="<?=$content['main']['backgroundHome']->original->filename;?>" />
<?endif;?>

</div>


<div id="TourBios" >
<?foreach($content['TourBios'] as $TourBiosItem):?>
<?switch($TourBiosItem['objectTypeName']){
case 'basicPage':?>
	
		<?  break;?>
	<? case 'featuredRelease':?>
		

<div class="feature">	
	
		<?if(is_object($TourBiosItem['featureThumbnail'])):?>
		<img id="featureThumbnail" src="<?=latticeurl::site($TourBiosItem['featureThumbnail']->original->fullpath);?>" width="<?=$TourBiosItem['featureThumbnail']->original->
		width;?>" height="<?=$TourBiosItem['featureThumbnail']->original->height;?>" alt="<?=$TourBiosItem['featureThumbnail']->original->filename;?>" />
		<?endif;?>

		<div class="rightSideText">
		<h2 class="featuredRelease"> <?=$TourBiosItem['featuredRelease'];?></h2>

<!--
		<p class="soundcloudEmbed"> <?=$TourBiosItem['soundcloudEmbed'];?></p>
-->

		<p class="releaseDescription"> <?=$TourBiosItem['releaseDescription'];?></p>
</div>
	
</div>
</div>

		<?  break;?>


	<? case 'tourBios':?>
		<div class="tourBios">

<h2 id="title">ARTIST BIOS</h2>

<div id="artistBios" >
<?foreach($TourBiosItem['artistBios'] as $artistBiosItem):?>
  <div class="singleBio">
   <h2><?=$artistBiosItem['title'];?></h2> 

	 <p class="bioText"> <?=$artistBiosItem['bioText'];?></p>

	 <p id="bioCloud" class="soundcloudEmbed"> <?=$artistBiosItem['soundcloudEmbed'];?></p>


	</div>
<?endforeach;?>
</div>

  </div>
 <?  break;?>
 <? case 'bio':?>

 <?  break;?>
<? }?>
<?endforeach;?>
</div>




</div>
