twitterWidget.constructors.data = function() { // data constructor
	this.interval = 3000; // Set the interval of which to update the feed
	this.query = "nhl"; // Set the query with which to search twitter with
	this.lastId = 0; // Store the last id

	this.getFeed(); // Fetch the feed for the first time
};

twitterWidget.constructors.data.prototype.getFeed = function() {
	var	self = this; // Save reference to this for use in callbacks
		url = "http://search.twitter.com/search.json?callback=?&q=ettjavlabilspel&&since_id=" + self.lastId; // Generate the URL to fetch from

	$.getJSON(url, function(data) { // Fetch the tweets
		if( // Simple check if there was any tweets never than the ones we have fetched earlier
			data.max_id &&
			self.lastId < data.max_id
		) {
			if(data.results && data.results.length > 0) { // Check that we got some tweets
				for(var i = data.results.length - 1; i >= 0; i--) { // Loop through the tweets backwards
					if(self.lastId < data.results[i].id) { // If tweet is newer than the ones fetched the last time
						$(window).trigger("twitterWidget.newTweet", data.results[i]); // Send out an event, mediating that a new tweet was found
					}
				}
			}

			self.lastId = data.max_id; // Store the highest id of this fetch
		}

		setTimeout(function() { // Set a timeout to run this function again after the interval delay
			self.getFeed(self);
		}, self.interval);
	});

     //  console.log("hej");
};
