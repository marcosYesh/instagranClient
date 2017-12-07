<style type="text/css">
@media print {
	* {
		visibility: hidden;
	}
	.insta-item-img {
		visibility: visible;
		position: absolute;
		top: 0;
		left: 0;
	}
}
</style>
<?php
// Instagram settings
$i_uid = "2154730724";
$a_token = "2154730724.40bf09b.4758ae7d4dd34a49824cef2f58ae820e";

// Customization
$photo_count = 12;

// JSON Deserialization
$json_link = "https://api.instagram.com/v1/users/{$i_uid}/media/recent/?";
$json_link .= "access_token={$a_token}&count={$photo_count}";

$json = file_get_contents ( $json_link );
$obj = json_decode ( $json, true, 512, JSON_BIGINT_AS_STRING );

// Setting the posts
echo "data<br>";
var_dump($obj);
echo "<br>";
echo "<br>";
foreach ( $obj ['data'] as $post ) {
	$capiton = $post ['caption'];
	$comment = $post ['caption'];
	$text = $post ['caption'] ['text']; // Gets Texts
	$link = $post ['link']; // Gets the link
	$likes = $post ['likes'] ['count']; // Like Count
	$comments = $post ['comments'] ['count']; // Gets the comments count
	$image = str_replace ( "http://", "https://", $post ['images'] ['low_resolution'] ['url'] ); // Gets the image link (Can replace low_resolution for standard_resolution or thumbnail)
	$pic_created_time = date ( "F j, Y", $post ['caption'] ['created_time'] ); // Gets the date
	$pic_created_time = date ( "F j, Y", strtotime ( $pic_created_time . " +1 days" ) ); // Format the date
	                                                                                     
	// Printing the posts
	$encotrado = strstr ( $text, 'pricesinha' );
	$teste = ($encotrado != "");
	// echo "<br>".strstr($text, 'pricesinha', true)."<br>";
	
	
	if ($teste) {
		echo "<div class='insta-item'>"; // Container DIV
		echo "<a href='{$link}' target='_blank'>"; // Link to Instagram photo
		echo "<img class='insta-item-img' src='{$image}' alt='{$text}'>"; // Image
		echo "</a>";
		echo "</div>";
	}
}
echo "<button type=\"button\" name=\"cmdImprimir\" id=\"cmdImprimir\"  onclick=\"window.print()\" >Salvar</button>"?>