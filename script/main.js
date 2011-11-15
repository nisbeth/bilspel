var twitterWidget = { // Create the global twitterWidget object where the rest of the application will be stored
	constructors: {}, // Create a property to hold all constructors for the widget
	templates: {} // Create a property to hold all templates for the widget
};

twitterWidget.constructors.main = function() { // main constructor
	this.gui = new twitterWidget.constructors.gui(this); // Create an instance of the gui constructor
	this.data = new twitterWidget.constructors.data(); // Create an instance of the data constructor

	this.element = $(twitterWidget.templates.wrapper); // Create the root DOM element for the widget
};
