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

	echo '<div class="container">';
		echo '<div class="results">';
			echo '<h2>Results</h2>';
			// tap into the $results array to start listing each result separately
			foreach($results as $key=>$value){
			    $id = $value['id']; // store the ID of the listing into a variable to be used later.
			    echo '<div id="listing-'.$id.'" class="listing">'; 
			    // Use the ID variable to create a unique ID for each listing we are going to display.
			    // Tap into the results array to populate the rest of the variables we are going to need.
			        $price = $value['price'];
			        $mainImage = $value['mainImage'];
			        $logo = $value['agency']['logo'];
			        $colour = $value['agency']['brandingColors']['primary'];

			        // Below we will start using our populated variables to start mapping out how we want to display the data.
			        echo '<div class="listing-header" style="background-color:'.$colour.'">';
			        	echo '<div class="logo"><img src="'.$logo.'"/></div>';
			        echo '</div>';
			        echo '<div class="image"><img src="'.$mainImage.'"/></div>';
			        echo '<div class="price">'.$price.'</div>';
			    echo '</div>';
			}
		echo '</div>';

		echo '<div class="saved">';
			echo '<h2>Saved Properties</h2>';
			// Tap into our $saved array we created earlier. And follow the same structure as done with the results data.
			foreach($saved as $key=>$value){
			    $id = $value['id'];
			    echo '<div id="listing-'.$id.'" class="listing">';
			        $price = $value['price'];
			        $mainImage = $value['mainImage'];
			        $logo = $value['agency']['logo'];
			        $colour = $value['agency']['brandingColors']['primary'];
			        echo '<div class="listing-header" style="background-color:'.$colour.'">';
			        	echo '<div class="logo"><img src="'.$logo.'"/></div>';
			        echo '</div>';
			        echo '<div class="image"><img src="'.$mainImage.'"/></div>';
			        echo '<div class="price">'.$price.'</div>';
			    echo '</div>';
			}
		echo '</div>';
	echo '</div>';
	?>
</body>