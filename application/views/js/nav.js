$(document).ready(function() {
		artists=$(".artist");

		$.each(artists,function(index, artist) {

		$('#'+artist.id+'Button').click( function() {
			$('div.artist').hide();
			$('#'+artist.id).show();
				});
			});
		});
