$(function(){

	var leftArrow = $('.left-arrow');
	var rightArrow = $('.right-arrow');
	var slideShow = $('.slide-show');
	var numItems = $('.slide-show-item').length;
	var showItemsNum = 3;
	var slideShowWidth = numItems * 50;
	var duration = 500;
	var autoRun = true;
	var ableToClick = true;
	var autoRunSlide;

	slideShow.css('width', slideShowWidth + "%");
	var fullWidth = $('.slide-show-container')[0].offsetWidth;
	$('.slide-show-item').css('max-width', fullWidth / showItemsNum)

	if (!autoRun) {
		var autoRunSlide = setInterval(function() {
			moveLeft();
		}, 2000)
	}

	leftArrow.on('click', function(e) {
		clearInterval(autoRunSlide);
		moveLeft();
	});

	rightArrow.on('click', function(e) {
		clearInterval(autoRunSlide);
		moveRight();
	});

	function moveRight() {
		if (ableToClick) {
			ableToClick = false;
			var firstImage = $('.slide-show-item')[0];
			var firstImageStyles = getComputedStyle(firstImage);

			var width = parseInt(firstImageStyles.width)
			var marginLeft = parseInt(firstImageStyles.marginLeft)
			var marginRight = parseInt(firstImageStyles.marginRight)
			var widthWithMargin = width + marginLeft + marginRight;

			var currentPosition = parseInt(slideShow.css('left'));
			var nextPosition = currentPosition - widthWithMargin

			var animateProperties = {
				duration: duration,
				complete: function() {
					slideShow.append(firstImage);
					slideShow.css('left', currentPosition);
					ableToClick = true;
				}
			};

			slideShow.animate({
				left: nextPosition + 'px'
			}, animateProperties);
		}
	}

	function moveLeft() {
		if (ableToClick) {
			ableToClick = false;
			var numImages = $('.slide-show-item').length;
			var lastImage = $('.slide-show-item')[numImages - 1];
			var lastImageStyles = getComputedStyle(lastImage);

			var width = parseInt(lastImageStyles.width);
			var marginLeft = parseInt(lastImageStyles.marginLeft);
			var marginRight = parseInt(lastImageStyles.marginRight);
			var widthWithMargin = width + marginLeft + marginRight;

			var currentPosition = parseInt(slideShow.css('left'));
			var tempPosition = currentPosition - widthWithMargin
			var nextPosition = tempPosition + widthWithMargin;
			slideShow.css('left', tempPosition);
			slideShow.prepend(lastImage);


			var animateProperties = {
				duration: duration,
				complete: function() {
					slideShow.css('left', nextPosition);
					ableToClick = true;
				}
			};

			slideShow.animate({
				left: nextPosition + 'px'
			}, animateProperties);
		}
	}
});


function chunkArrayInGroups(arr, size) {
	var returnArr = [];
	var tmpArr = [];
	for(x in arr) {
		var index = parseInt(x)
		tmpArr.push(arr[x]);

		if ((index) % 2) {
			returnArr.push(tmpArr);
			tmpArr = [];
		}

	}
	return returnArr;
}

chunkArrayInGroups(["a", "b", "c", "d", "e"], 2)

//["a", "b"] [ "c", "d"]

