	var i = 0; // Start point
	var images = [];
	var time = 3000;

	// Image List
	images[0] = 'image/image2.png';
	images[1] = 'image/image2.png';
	images[2] = 'image/image3.png';
	images[3] = 'image/image4.png';

	// Change Image
	function changeImg(){
		document.slide.src = images[i];

		if(i < images.length - 1){
			i++;
		} else {
			i = 0;
		}

		setTimeout("changeImg()", time);
	}

	window.onload = changeImg;