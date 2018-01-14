<?php
/**
 * The template for displaying a list of properties from a json feed.
 */
?>
<head>
	<link rel="stylesheet" type="text/css" href="style.css"> <!-- include our stylesheet -->
</head>
<body>
	<?php 
	$json_data = file_get_contents('data.json', true); // read the contents of the json file to a string.

	$listings = json_decode($json_data, true); // decodes the string into a PHP variable, with 'true' being set to convert the object into an array.
	$results = $listings['results']; // new variable to store 'results' data part of the feed.
	$saved = $listings['saved']; // new variable to store 'saved' data part of the feed.

	echo '<div class="results">';
	echo '<h2>Results</h2>';
	// tap into the $results array to start listing each result separately
	foreach($results as $key=>$value){
	    print_r($value); 
	    echo '<br><br>';
	}
	echo '</div>';

	?>
</body>