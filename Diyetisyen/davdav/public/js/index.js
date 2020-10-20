	// INSTAGRAM
	function getPhotos() {
	  var token = "7962110321.1677ed0.db092508614543fa8a124da4ebc9e864",
		/* YOU WILL NEED YOUR INSTAGRAM ACCESS TOKEN HERE. You will need to register and application here first using your account: https://www.instagram.com/developer/.

	Then go here:
	https://api.instagram.com/oauth/authorize/?client_id=[clientID]&redirect_uri=[redirectURI]&response_type=code
	BE SURE TO PASTE IN YOUR clientID - you can find that ID in the instagram developer tools - and your Redirect URI you set up when you created the application.

	 According to instagram docs the token does not expire so you should only need it once
	 */
		num_photos = 12;

	  return $.ajax({
		url:
		  "https://api.instagram.com/v1/users/7962110321/media/recent/?access_token=7962110321.1677ed0.db092508614543" +
		  token,
		dataType: "jsonp",
		type: "GET",
		data: {
		  access_token: token,
		  count: num_photos
		},
		success: function(data) {
		  console.log("getPhotos, here is the data: ", data);
		},
		error: function(data) {
		  console.log("data: ", data);
		}
	  });
	}

	function addImages(data) {
	  console.log("addImages: ", data.data);
	  var array = data.data;
	  if (typeof array !== "undefined") {
		for (var i = 0, len = array.length; i < len; i++) {
		  $(".insta-grid").append(
			'<div class="insta-slide"><img src="' +
			  data.data[i].images.low_resolution.url +  
			   '" style="height:160px; margin-left:20px; border-radius:20px; width:80%; " ></div>'
		  );
		}
	  } else {
		$(".insta-grid").append(
		  '<div class="insta-error"><h1> No Photos Available - Please add your Instagram token </h1></div>'
		);
	  }
	}

	function fireSlick() {
	  console.log("made it to fireSlick");
	  return $(".insta-grid").slick({
		slidesToShow: 3,
		slidesToScroll: 1,
		autoplay: true,
		autoplaySpeed: 750
	  });
	}

	function insta() {
	  getPhotos()
		.then(addImages)
		.then(fireSlick);
	}

	document.getElementById("demo").innerHTML =insta();

