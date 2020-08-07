<?php
header ('Content-type:image/gif');
include('GIFEncoder.class.php');
$text = "Hello World";

// Open the first source image and add the text.
$image = imagecreatefrompng('image/bed.png');
$text_color = imagecolorallocate($image, 200, 200, 200);
imagestring($image, 5, 5, 5,  $text, $text_color);

// Generate GIF from the $image
// We want to put the binary GIF data into an array to be used later,
//  so we use the output buffer.
ob_start();
imagegif($image);
$frames[]=ob_get_contents();
$framed[]=40;

// Delay in the animation.
ob_end_clean();

// And again..
// Open the first source image and add the text.
$image = imagecreatefrompng('image/bed2.png');
$text_color = imagecolorallocate($image, 200, 200, 200);
imagestring($image, 5, 20, 20,  $text, $text_color);

// Generate GIF from the $image
// We want to put the binary GIF data into an array to be used later,
//  so we use the output buffer.
ob_start();
imagegif($image);
$frames[]=ob_get_contents();
$framed[]=40;

// Delay in the animation.
ob_end_clean();

// Generate the animated gif and output to screen.
$gif = new GIFEncoder($frames,$framed,0,2,0,0,0,'bin');
echo $gif->GetAnimation();


?>