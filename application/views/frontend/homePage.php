<div class="backgroundIMG">

<?if(is_object($content['main']['backgroundHome'])):?>
 <img id="backgroundHome" src="<?=latticeurl::site($content['main']['backgroundHome']->original->fullpath);?>" width="<?=$content['main']['backgroundHome']->original->width;?>" height="<?=$content['main']['backgroundHome']->original->height;?>" alt="<?=$content['main']['backgroundHome']->original->filename;?>" />
<?endif;?>
</div>


<div class="social">
<a href="https://twitter.com/voidtactical"><img src="application/views/images/voidTbirdSmall.png"></img></a>
<a href="http://www.facebook.com/pages/Void-Tactical-Media/166927783171?ref=ts&fref=ts"><img src="application/views/images/voidFsmall.png"></img></a>
</div>


<div class="homeFeature">

<div class="box_rotate">
<h2>FEATURED RELEASE</h2>
</div>

<?foreach($content['homeFeature'] as $homeFeatureItem):?>
 <?switch($homeFeatureItem['object_type_name']){
    case 'homePage':?>

 <?  break;?>
 <? case 'featuredRelease':?>
 


<div class="homeCloud">
   <p> <?=$homeFeatureItem['soundcloudEmbed'];?></p>
</div>

<div class="homeLinks">
   <p> <?=$homeFeatureItem['releaseDescription'];?></p>
</div>
</div>  
 <?  break;?>
<? }?>
<?endforeach;?>




<div class="homeFeatureLeft">

<div class="box_rotate_left">
<h2>NEWS</h2>
</div>

<?
      $post = array('title'=>'', 'body'=>'');
      require('modules/tumblana/tumblana.php');
      $post = tumblrGetLastPost();

?>
<div class="newsHeader">
<h3><?=$post['title'];?></h3>
</div>

<div class="news">
<?=$post['body'];?>
</div>

<div class="keepReading">
<a href="http://voidtactical.tumblr.com/">keep reading...</a>
</div>

</div>


<div class="box_rotate_caro">
<p>RECENT MEDIA</p>
</div>

<ul id="mycarousel" class="jcarousel-skin-tango">

<?$index=0;?>

<?foreach($content['recentMedia'] as $recentMediaItem):?>


   <?if(is_object($recentMediaItem['thumbnail'])):?>
	<li>

<!-- set the folowing onMouseover to bring all others to the front -->

<div id="recentMediaItem<?=$index;?>" class="media" onMouseover="this.style.zIndex='0';">
	<img id="thumbnail" src="<?=latticeurl::site($recentMediaItem['thumbnail']->original->fullpath);?>" width="124" height="124" alt="<?=$recentMediaItem['thumbnail']->original->filename;?>" />	
</div>

	 <!-- hidden div with transparent background -->
	<div id="gallery" class="hoverText" onMouseout="  $('#recentMediaItem<?=$index;?>').css('z-index', '2');" >
	 <a class="pirobox_gall1" rel="content-680-650" href="nolayout/<?=$recentMediaItem['slug'];?>.html" > <p><?=$recentMediaItem['title'];?></p> <span></span> </a>

</div>


</li>


	 <?endif;?>


<?$index++;?>
<?endforeach;?>
</ul>


			<script type="text/javascript">
			$(document).ready(function() {
				$().piroBox_ext({
					piro_speed : 900,
						bg_alpha : 0.7,
						piro_scroll : true //pirobox always positioned at the center of the page
				});
			});
			</script>
