<div class="menu">

<a href="home" class="<?echo latticeview::within_subtree('home')?'active':'';?>">HOME</a><br/>
<!-- <a href="european-tour" class="<?echo latticeview::within_subtree('european-tour')?'active':'';?>">EUROPEAN TOUR</a></br>-->
<a href="http://voidtacticalmedia.bandcamp.com/music" target="blank">STORE</a><br/>
<a href="releases" class="<?echo latticeview::within_subtree('releases')?'active':'';?>">RELEASES</a><br/>
<a href="artists" class="<?echo latticeview::within_subtree('artists')?'active':'';?>">ARTISTS</a><br/>
<a href="design" class="<?echo latticeview::within_subtree('design')?'active':'';?>">DESIGN</a><br/>
<a href="print" class="<?echo latticeview::within_subtree('print')?'active':'';?>">PRINT</a><br/>
<a href="live" class="<?echo latticeview::within_subtree('live')?'active':'';?>">LIVE</a><br/>

<script type="text/javascript" charset="utf-8" src="application/views/js/widget.js"></script>
<script type="text/javascript">
//$(document).ready(function() {
new TWTR.Widget({
	version: 2,
		type: 'profile',
		rpp: 3,
		interval: 30000,
		width: 150,
		height: 335,
		theme: {
			shell: {
				background: '#000000',
					color: '#ffffff'
			},
			tweets: {
				background: '#000000',
					color: '#ffffff',
					links: '#e5e113',
				
			}
		},
			features: {
				scrollbar: false,
					loop: false,
					live: false,
					behavior: 'all'
			}
}).render().setUser('voidTactical').start();
//});
</script>

<div class="logo">
<img src="application/views/images/VTM.png"/ alt="">
</div>

</div>

