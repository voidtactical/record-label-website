<?

function tumblrGetLastPost(){

  //check cache
 // $filetime = filetime('application/cache/tumblog.cache');

  //TODO: load from cache, with resonable paramters

  $request_url = 'http://voidtactical.tumblr.com/api/read?num=1';
  $rss = new DOMDocument();
  $rss->load($request_url);

  $nodes=$rss->getElementsByTagName('post');
  $node = $nodes->item(0);
  $post = array();
  $post['date'] = $node->getAttribute('date');
  $post['title'] = $node->getElementsByTagName('regular-title')->item(0)->nodeValue;
  $post['body'] = $node->getElementsByTagName('regular-body')->item(0)->nodeValue;


  $json = json_encode($post);
  file_put_contents('application/cache/tumblog.cache', $json);

  return $post;

}
