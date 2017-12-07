/**
 * 
 */
// userId : '2154730724',

$(function() {
	$('#img').printElement();
	var userFeed = new Instafeed({
		get : 'user',
		clientId : '40bf09b53b6b4af89959f23cfa9af6c9',
		accessToken : '2154730724.40bf09b.4758ae7d4dd34a49824cef2f58ae820e',
		tagName : "PHN2018",
		links : true,
		limit : 8,
		sortBy : 'most-recent',
		resolution : 'standard_resolution'
	});
	userFeed.run();
});
/*
 * var userFeed = new Instafeed({ get : 'tagged', target: 'instafeed', userId :
 * '2154730724', clientId : '40bf09b53b6b4af89959f23cfa9af6c9', accessToken :
 * '2154730724.40bf09b.4758ae7d4dd34a49824cef2f58ae820e', tagName : "PHN2018",
 * links : true, limit : 8, sortBy : 'most-recent', resolution :
 * 'standard_resolution', template : '<a href="{{link}}" target="_blank"
 * id="{{id}}"><img src="{{image}}" /><span>{{likes}}{{comments}}</span></a>'
 * }); userFeed.run();
 */