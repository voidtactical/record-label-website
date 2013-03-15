<script type="text/javascript">

$(document).ready(function() {
		$("ul.paging").quickPager();
});
</script>

<script type="text/javascript">
$(document).ready(function() {
	artists=$(".artist");

	$.each(artists,function(index, artist) {

		$('#'+artist.id+'Button').click( function() {
			$('div.artist').hide();
			$('div.artistPhotoList').hide();
			$('#'+artist.id).show();
		});
	});
});
</script>

<script type="text/javascript">
$(document).ready(function() {
	artists=$(".artist");

	$.each(artists,function(index, artist) {

		$('#'+artist.id+'PhotoButton').click( function() {
			$('div.artist').hide();      
			$('div.artistPhotoList').hide();      
			$('#'+artist.id).show();
		});
	});
});
</script>



      <script type="text/javascript">
      $(document).ready(function() {
        $().piroBox_ext({
          piro_speed : 900,
            bg_alpha : 0.7,
            piro_scroll : true //pirobox always positioned at the center of the page
        });
      });
      </script>


<div class="backgroundIMG">
<?if(is_object($content['main']['backgroundImage'])):?>
 <img id="backgroundImage" src="<?=latticeurl::site($content['main']['backgroundImage']->original->fullpath);?>" width="<?=$content['main']['backgroundImage']->original->width;?>" height="<?=$content['main']['backgroundImage']->original->height;?>" alt="<?=$content['main']['backgroundImage']->original->filename;?>" />
<?endif;?>
</div>


<div class="feature">

<div class="artistPhotoList">
<?foreach($content['artist'] as $artistItem):?>

<div id="<?=latticeutil::modulo('artistsList3', array('one', 'two', 'three', 'four', 'five',));?>">
	<div class="photoItem" id="<?=$artistItem['slug'];?>PhotoButton"><a href="#"> 
	<img id="artistPhoto" src="<?=latticeurl::site($artistItem['artistPhoto']->original->fullpath);?>" width="<?=$artistItem['artistPhoto']->original->width;?>" height="<?=$artistItem['artistPhoto']->original->height;?>" alt="<?=$artistItem['artistPhoto']->original->filename;?>" />
	 </a>
  </div>


</div>

<?endforeach;?>

</div>









<?foreach($content['artist'] as $artistItem):?>


<div id="<?=$artistItem['slug'];?>" class="artist" style="display:none;">
<div class="imageList pages">

  <ul  class="paging">

<?$index=0;?>
	<?foreach($artistItem['releasesForArtist'] as $releasesForArtistItem):?>

			<?if(is_object($releasesForArtistItem['Release Image'])):?>

			<div id="releasesForArtistItem<?=$index;?>">
				<a class="pirobox_gall<?=$releasesForArtistItem['slug'];?>" rel="content-680-650" href="nolayout/<?=$releasesForArtistItem['slug'];?>.html">
					<li><img id="<?=latticeutil::modulo('artistsList', array('alpha', '', 'omega'));?>" src="<?=latticeurl::site($releasesForArtistItem['smallReleaseImage']->original->fullpath);?>" width="<?=$releasesForArtistItem['smallReleaseImage']->original->width;?>" height="<?=$releasesForArtistItem['smallReleaseImage']->original->height;?>" alt="<?=$releasesForArtistItem['smallReleaseImage']->original->filename;?>" /></li>
			<?endif;?>
				</a>
			</div>

	<?endforeach;?>





<?$index=0;?>
	<?foreach($artistItem['designsForArtist'] as $designsForArtistItem):?>

					<?if(is_object($designsForArtistItem['smallDesignThumb'])):?>

								<div id="designsForArtistItem<?=$index++;?>">
											<a class="pirobox_gall<?=$designsForArtistItem['slug'];?>" rel="content-680-650" href="nolayout<?=$designsForArtistItem['slug'];?>.html">
																<li><img id="<?=latticeutil::modulo('artistsList', array('alpha', '', 'omega'));?>" src="<?=latticeurl::site($designsForArtistItem['smallDesignThumb']->original->fullpath);?>" width="<?=$designsForArtistItem['smallDesignThumb']->original->width;?>" height="<?=$designsForArtistItem['smallDesignThumb']->original->height;?>" alt="<?=$designsForArtistItem['smallDesignThumb']->original->filename;?>" /></li>
																			<?endif;?>
			</a>
</div>

<?endforeach;?>


		</ul>		
</div>




<div class="artistDetailText">
<h2> <?=$artistItem['title'];?> </h2>
	<p> <?=$artistItem['artistDescription'];?> </p>
</div>

</div>

<?endforeach;?>

</div> <!--end of the feature div -->






<div class="artistHeader">
<h2>Artists</h2>
</div>

<div class="artistNamesList">
<?foreach($content['artist'] as $artistItem):?>

<div id="<?=latticeutil::modulo('artistsList2', array('first', 'second', 'third', 'fourth', '',));?>">	
	<div class="navItem" id="<?=$artistItem['slug'];?>Button"><a href="#"> <?=$artistItem['title'];?> </a>
	</div>


</div>

<?endforeach;?>

</div>



