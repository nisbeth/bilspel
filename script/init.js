$(document).ready(function() { // Run this callback once the DOM is ready
	var tw = new twitterWidget.constructors.main(); // Create an instance of the twitterWidget

	tw.element.appendTo("#middleleft"); // Append the widget's root DOM element to the body
});
