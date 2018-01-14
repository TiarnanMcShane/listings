# listings
Pull a json data feed to display results &amp; saved listings.

This project consists of 4 files. They are as follows;

index.php
data.json - this file contains the listing data in json format that will be called upon within the index file. 
style.css - To style the various elements created to design the layout of the properties.
move.js  - To provide the functionality of saving properties as well as removing these saved properties.

Findings:

The json data from the word document provided was missing it's opening bracket.

When writing the functionality & following the workflow for saving properties, there were a couple of questions that came up.

What happens to the 'saving' functionality once you have saved a listing and it is now showing in the saved properties column? 
For this, I disabled the 'add property' button once it had cloned to the saved column to stop the user from trying to save a property that was already saved.

Should the 4th property (ID 4), that is initally displayed in the saved column, be cloned to the property listings/results column once it has been removed from the saved column? Otherwise, it is lost from all columns once the remove button is clicked, unlike the other 3.
I decided to leave this one as is due to the fact the workflow showed that once it was removed, it did not appear in the results column.  




