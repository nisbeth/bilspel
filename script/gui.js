twitterWidget.constructors.gui = function(main) { // gui constructor
	var self = this; // Save reference to this for use in callbacks
	this.main = main; // Save reference to main object

	$(window).bind("twitterWidget.newTweet", function(event, data) { // Start listening on new tweet events and run this callback each time
		self.addTweet(data); // Add a new tweet
	});
};

twitterWidget.constructors.gui.prototype.addTweet = function(tweet) { // Function to render a tweet
	var tweetElement = $.tmpl(twitterWidget.templates.tweet, tweet).prependTo(this.main.element); // Use jQuery templates to render a tweet combining the tweet template and tweet data
	setTimeout(function() {
		tweetElement.removeClass("new");
	}, 5000);
};
