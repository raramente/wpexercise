<?php
/**
 * Title: Dog Breed
 * Slug: twentytwentyfour-child/dog-breed-from-options
 * Categories: text, about, featured
 * Keywords: mission, introduction
 * Viewport width: 1400
 */

$slug = get_field("dog-breed-slug", "option");

 if ( !empty( $slug ) ) {
     $content = file_get_contents("https://dog.ceo/api/breed/" . $slug . "/images/random");
     $json_data = json_decode($content, true);
     echo '<img src="' . $json_data["message"] . '" />';
 }

?>