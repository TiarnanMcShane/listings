jQuery(document).ready(function() { 
	jQuery('.adding').click(function(){ // once the element with a class name of 'adding' is clicked
		// work the way up the dom to find the closest element with a class name of 'listing' and add a new class 'result-cloned'
		jQuery(this).closest('.listing').addClass('result-cloned');
		
		// now hide the 'adding' button so it won't be continually added to the saved properties section.
		jQuery(this).closest('.result-cloned').find('.adding').hide();
		
		// now clone the property listing, add a class called 'cloned' and then append it to the end of the 'saved' column.
		jQuery(this).closest('.listing').clone(true).addClass('cloned').appendTo('.saved');
		
		// For the cloned element, we now want to show the removing button so it can easily be removed from the saved property list in the future.
		jQuery(this).closest('.cloned').find('.removing').show();
		console.log('added');
	});
	
});

jQuery('.removing').click(function(){ // once the element with a class name of 'adding' is clicked
		// remove the listing from the saved properites list.
	// create a variable and store the ID of the clicked property in it.
	removed_id = jQuery(this).closest('.listing').attr('id');

	// if a saved property is to be removed from the saved column, re-enable it's relative 'adding' button again so it can be added to the saved list again in the future if necessary.
	jQuery('.results #' + removed_id).find('.adding').show();

	// And finally remove this listing from the saved column.
	jQuery(this).closest('.listing').remove();
	console.log(removed_id);
});