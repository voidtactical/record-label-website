<script type="text/javascript">

$(document).ready(function() {
    $("ul.pagingBIG").quickPagerBIG();
});

</script>



<div class="backgroundIMG">
<?if(is_object($content['main']['backgroundImage'])):?>
 <img id="backgroundImage" src="<?=latticeurl::site($content['main']['backgroundImage']->original->fullpath);?>" width="<?=$content['main']['backgroundImage']->original->width;?>" height="<?=$content['main']['backgroundImage']->original->height;?>" alt="<?=$content['main']['backgroundImage']->original->filename;?>" />
<?endif;?>

</div>


<div class="feature">

<div class="artist">
<div id="pages" class="imageListBIG">

<ul class="pagingBIG">

<?$index=0;?>

<?foreach($content['designItem'] as $designItemItem):?>

   <?if(is_object($designItemItem['largeDesignThumb'])):?>

<div id="designItemItem<?=$index++;?>"  >
	<li>	<a class="pirobox_gall2" rel="content-850-700" href="nolayout/<?=$designItemItem['slug'];?>.html">	
				 <img id="<?=latticeutil::modulo('artistsList', array('alpha', '', 'omega'));?>" src="<?=latticeurl::site($designItemItem['largeDesignThumb']->original->fullpath);?>" width="<?=$designItemItem['largeDesignThumb']->original->width;?>" height="<?=$designItemItem['largeDesignThumb']->original->height;?>" alt="<?=$designItemItem['largeDesignThumb']->original->filename;?>" />
	</a>
</div>
</li>

					<?endif;?>


<?endforeach;?>
</ul>

</div>
</div>

</div>



<div class="missionStatement">
<p><?=$content['main']['missionStatement'];?>
</p>

</div>


      <script type="text/javascript">
      $(document).ready(function() {
        $().piroBox_ext({
          piro_speed : 900,
            bg_alpha : 0.7,
            piro_scroll : true //pirobox always positioned at the center of the page
				});
      });
      </script>

