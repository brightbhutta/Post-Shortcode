<?php
function get_posts_func(){

	$args=array(
	    //'name'           => $the_slug,
	    'post_type'      => 'post',
	    'post_status'    => 'publish',
	    'posts_per_page' => 1
	);

	$posts = get_post($args);

	foreach ($posts as $pos) {
		
		echo "<h2>" .$pos->post_title. "</h2>";
		echo "<p>"  .$pos->post_date.  "</p>";
	}

}
add_shortcode('posts', 'get_posts_func');


?>