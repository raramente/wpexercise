<?php

// define the post_thumbnail_html callback 
function filter_post_thumbnail_html( $html, $post_id, $post_thumbnail_id, $size, $attr ) { 
    $slug = get_field("slug", $post_id);

    if ( !empty( $slug ) ) {
        $content = file_get_contents("https://dog.ceo/api/breed/" . $slug . "/images/random");
        $json_data = json_decode($content, true);
        return '<img src="' . $json_data["message"] . '" />';
    }

    return ""; 
}; 
         
// add the filter 
add_filter( 'post_thumbnail_html', 'filter_post_thumbnail_html', 10, 5 );  

?>