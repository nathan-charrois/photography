<?php
// Nathan Charrois
// Generate JSON image list from directory.

// Create array.
$image_list = array();

// Open /imgs/photos directory.
if ($handle = opendir('../imgs/photos')){
	
	// Push each item to image list array.
	while(false !== ($entry = readdir($handle))){
		// Strip result for opening the director and reading list.
		if($entry != "." && $entry != ".."){
			array_push($image_list, $entry);
			
		}
	}
}

closedir($handle);

// Echo array to json.
echo json_encode($image_list);

