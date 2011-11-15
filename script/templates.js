// The templates for the application

twitterWidget.templates.tweet =
	"<article class='tweet new'>" +
		"<figure>" +
			"<a href='https://twitter.com/${from_user}' title='View ${from_user} on Twitter'> <img src='${profile_image_url}' alt='${from_user}'/></a>" +
			"<figcaption><a href='https://twitter.com/${from_user}' title='View ${from_user} on Twitter'>${from_user}</a></figcaption>" +
		"</figure>" +
		"<p class='text'>${text}</p>" + "<p class='date'>${created_at}</p>" +
	"</article>";

twitterWidget.templates.wrapper = "<section class='twitter-widget'></section>";
