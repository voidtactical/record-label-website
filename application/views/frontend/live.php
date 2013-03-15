<script type="text/javascript" src="application/views/js/jquery.jcarousel.big.js"></script>

<div class="backgroundIMG">

<?if(is_object($content['main']['backgroundImage'])):?>
 <img id="backgroundImage" src="<?=latticeurl::site($content['main']['backgroundImage']->original->fullpath);?>" width="<?=$content['main']['backgroundImage']->original->width;?>" height="<?=$content['main']['backgroundImage']->original->height;?>" alt="<?=$content['main']['backgroundImage']->original->filename;?>" />
<?endif;?>
</div>

<div class="feature" id="live">

<ul id="mybigcarousel" class="big-jcarousel-skin-tango" >
<?foreach($content['events'] as $eventsItem):?>
 <?switch($eventsItem['objectTypeName']){
    case 'homePage':?>
 
 <?  break;?>
 <? case 'event':?>


 
	 <?if(is_object($eventsItem['flier'])):?>   <li> 
<img src="<?=latticeurl::site($eventsItem['flier']->original->fullpath);?>" width="400px" height="570px" alt="<?=$eventsItem['flier']->original->filename;?>" />

</li>

	<li class="eventName"> 
		<p><?=$eventsItem['eventName'];?></p> 
		<p><?=$eventsItem['eventDate'];?></p>
		<p id="desc"><?=$eventsItem['eventDesc'];?></p>
	</li>

	 <?endif;?>

  <?  break;?>
<? }?>
<?endforeach;?>


</ul>

</div>

  <script type="text/javascript">
jQuery(document).ready(function() {
	    jQuery('#mybigcarousel').jcarousel({
				        // Configuration goes here
			              });
			                                         });
				       </script>
				
