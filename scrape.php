
<?php

include('simplehtmldom_1_9_1/simple_html_dom.php');

// Create DOM from URL or file
$html = file_get_html('https://www.gear4music.com/');

// Find all images
foreach($html->find('img') as $element)
       echo $element->src . '<br>';

// Find all links
foreach($html->find('a') as $element)
       echo $element->href . '<br>';

?>