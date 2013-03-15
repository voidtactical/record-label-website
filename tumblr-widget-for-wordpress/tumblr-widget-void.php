<?php
error_reporting(E_ALL);


echo "\nsending";
$request_url = 'http://voidtactical.tumblr.com/api/read?num=1';
$rss = new DOMDocument();
$rss->load($request_url);
print_r($rss);


$r = new HttpRequest($request_url, HttpRequest::METH_GET);
echo 'hh';
#$r->setOptions(array('lastmodified' => filemtime('local.rss')));
try {
echo 'hh';
  $r->send();
  if ($r->getResponseCode() == 200) {
    #file_put_contents('local.rss', $r->getResponseBody());
    $result = $r->getResponseBody();
  }
} catch (HttpException $ex) {
  echo $ex;
  return;
}
echo $result;
echo 'hh';





function widget( $args, $instance ) {
  echo 'running this';

	if (!function_exists('simplexml_load_string')) {
		if (!$hide_errors) {
			echo "SimpleXML is not enabled on this website. Tumblr Widget requires SimpleXML to function.";
			exit;
		}	
	}

	function link_to_tumblr($post_url, $time) {
		echo '<p><a href="'.$post_url.'" class="tumblr_link">'.date('m/d/y', intval($time)).'</a></p>';
	}


	/* Set up variables and arguments */	
	extract( $args );
	$tumblr = 'voidtactical.tumblr.com';
	$tumblr = rtrim($tumblr, "/ \t\n\r");
	$photo_size = $instance['photo_size'];
	$show_regular = $instance['show_regular'];
	$show_photo = $instance['show_photo'];
	$show_quote = $instance['show_quote'];
	$show_link = $instance['show_link'];
	$show_conversation = $instance['show_conversation'];
	$show_audio = $instance['show_audio'];
	$show_video = $instance['show_video'];
	$inline_styles = $instance['inline_styles'];
	$show_time = $instance['show_time'];
	$number = $instance['number'];
	$video_width = $instance['video_width'];
	$link_title = $instance['link_title'];
	$hide_errors = $instance['hide_errors'];

	$types = array (
		"regular" => $show_regular,
		"photo" => $show_photo,
		"quote" => $show_quote,
		"link" => $show_link,
		"conversation" => $show_conversation,
		"audio" => $show_audio,
		"video" => $show_video,
		);


  echo "\nsending";
  $r = new HttpRequest($request_url, HttpRequest::METH_GET);
  $r->setOptions(array('lastmodified' => filemtime('local.rss')));
  try {
    $r->send();
    if ($r->getResponseCode() == 200) {
      file_put_contents('local.rss', $r->getResponseBody());
      $result = $r->getResponseBody();
    }
  } catch (HttpException $ex) {
    echo $ex;
    return;
  }


  $r->addQueryData(array('category' => 3));
  /* Using the cached version, whether or not it was just updated. */
  $xml_string = trim($result); // We trim because Tumblr's API sometimes puts some extra whitespace at the front, stupidly.
	try {	
		$xml = simplexml_load_string($xml_string);
	} catch (Exception $e) {
		//Ignore the error and insure $xml is null
		$xml == null;	
	}
  echo 'xml'.$xml;
	
	if ( !empty($xml) ) {
		/* Preliminary HTML */
		echo $before_widget;
		if ( $title ) {
			echo $before_title;
			if ( $link_title ) {
				echo "<a href='http://" . $tumblr . "'>" . $title . "</a>";
			} else {
				echo $title;
			}
			echo $after_title;
		}
		echo '<ul>';
		$post_count = 0;

		/* Starting to loop through the posts */
		foreach ( $xml->posts->post as $post ) {

			if ( $post_count < $number ) {
				/* Get post type and other info from XML attributes and store in variables */
				foreach ($post->attributes() as $key => $value) {
					if ( $key == "type" )
						$type = $value;
					if ( $key == "unix-timestamp" )
						$time = $value;
					if ( $key == "url" )
						$post_url = $value;
				}

/* Now we set up methods for displaying each type of post ... */

// REGULAR POSTS
					if ( $type == "regular" && $show_regular ) {
						echo '<li class="tumblr_post '.$type.'" ';
						if ( $inline_styles ) {
							echo 'style="padding:8px 0"';
						}
						echo '>';
						$post_title = $post->{'regular-title'};
						$body = $post->{'regular-body'};
						echo '<h3>'.$post_title.'</h3><p>'.$body.'</p>';
						if ($show_time) {
							link_to_tumblr($post_url, $time);
						}
						echo '</li>';
						$post_count++;
					}

// PHOTO POSTS
					if ( $type == "photo" && $show_photo ) {
						echo '<li class="tumblr_post '.$type.'" ';
						if ($inline_styles) {
							echo 'style="padding:8px 0"';
						}
						echo '>';
						$caption = $post->{'photo-caption'};
						foreach ($post->{'photo-url'} as $this_url) {
							foreach ($this_url->attributes() as $key => $value) {
								if ($value == $photo_size) {
									$url = $this_url;
									}
								if ($value == 500) {
									$link_url = $this_url;
									}
								}
							}
						echo '<a href="'.$link_url.'"><img src="'.$url.'" alt="photo from Tumblr" /></a><br />'.$caption.'<br />';
						if ($show_time) {
							link_to_tumblr($post_url, $time);
						}
						echo '</li>';
						$post_count++;
					}

// QUOTE POSTS
					if ($type == "quote" && $show_quote) {
						echo '<li class="tumblr_post '.$type.'" ';
						if ($inline_styles) {
							echo 'style="padding:8px 0"';
						}
						echo '>';
						$text = $post->{'quote-text'};
						$source = $post->{'quote-source'};
						echo '<p><blockquote>'.$text.'</blockquote>'.$source.'</p>';
						if ($show_time) {
							link_to_tumblr($post_url, $time);
						}
						echo '</li>';
						$post_count++;
					}

// LINK POSTS
					if ($type == "link" && $show_link) {
						echo '<li class="tumblr_post '.$type.'" ';
						if ($inline_styles) {
							echo 'style="padding:8px 0"';
						}
						echo '>';
						$text = $post->{'link-text'};
						$url = $post->{'link-url'};
						$description = $post->{'link-description'};
						echo '<p><a href="'.$url.'">'.$text.'</a> '.$description.'</p>';
						if ($show_time) {
							link_to_tumblr($post_url, $time);
						}
						echo '</li>';
						$post_count++;
					}

// CONVERSATION POSTS
					if ($type == "conversation" && $show_conversation) {
						echo '<li class="tumblr_post '.$type.'" ';
						if ($inline_styles) {
							echo 'style="padding:8px 0"';
						}
						echo '>';
						$title = $post->{'conversation-title'};
						if ($title) {
							echo '<h3>'.$title.'</h3>';
							}
						foreach ($post->conversation->line as $line) {
							foreach ($line->attributes() as $key => $value) {
								if ($key == "label") {
									$name = $value;
									}
								}
								echo '<strong>'.$name.'</strong> '.$line.'<br />';
							}
						if ($show_time) {
							link_to_tumblr($post_url, $time);
						}
						echo '</li>';
						$post_count++;
					}

// VIDEO POSTS
					if ($type == "video" && $show_video) {
					
						echo '<li class="tumblr_post '.$type.'" ';
						if ($inline_styles) {
							echo 'style="padding:8px 0"';
						}
						echo '>';
						$caption = $post->{'video-caption'};
						$player = $post->{'video-player'};
						
						if ($video_width) {
							if ( $video_width < 50 ) $video_width = 50;
							$pattern = '/width="(\d+)" height="(\d+)"/';						
							preg_match($pattern, $player, $matches);
							if ($matches) {
								$old_width = $matches[1];
								$old_height = $matches[2];
							} else {
							$pattern = '/height="(\d+)" width="(\d+)"/';						
								preg_match($pattern, $player, $matches);
								$old_height = $matches[1];
								$old_width = $matches[2];
							}
							
							$new_height = $old_height * ($video_width / $old_width );						
							$replacement = 'width="' . $video_width . '" height="' . $new_height . '"';
							$player = preg_replace($pattern, $replacement, $player);
						}
						$source = $post->{'video-source'};
						echo $player."<br />".$caption."<br />";
						if ($show_time) {
							link_to_tumblr($post_url, $time);
						}
						echo '</li>';
						$post_count++;
					}

// AUDIO POSTS
					if ($type == "audio" && $show_video) {
						echo '<li class="tumblr_post '.$type.'" ';
						if ($inline_styles) {
							echo 'style="padding:8px 0"';
						}
						echo '>';
						$caption = $post->{'audio-caption'};
						$player = $post->{'audio-player'};
						echo $player."<br />".$caption."<br />";
						if ($show_time) {
							link_to_tumblr($post_url, $time);
						}
						echo '</li>';
						$post_count++;
					}
				} // end of loop
			} // $post_count == number;
		// end of widget
		echo '</ul>'.$after_widget;
		} else {
			if (!$hide_errors) {
				echo '<span class="error">Sorry, we\'re having trouble loading this Tumblr.</span>';
			}
		}
}

widget(array(), array());
?>
