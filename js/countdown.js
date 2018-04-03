$(document).ready(function() {
	//date - May 24th 5pm

	var gdprDate = new Date('May 24, 2018 17:00:00');

	setInterval(function() {countdown(); }, 1000);

	function countdown() {
		var time = Math.floor((gdprDate - Date.now()) / 1000);
		var days = Math.floor(time / 86400);
		var hours = Math.floor(( time - (days * 86400) ) / 3600);
		var minutes = Math.floor(( time - (days * 86400) - (hours * 3600) )/ 60);
		var seconds =  (time - (days * 86400) - (hours * 3600) - (minutes * 60));

		$('#days').text(days > 10 ? days : "0"+days);
		$('#hours').text(hours > 10 ? hours : "0"+hours);
		$('#minutes').text(minutes > 10 ? minutes : "0"+minutes);
		$('#seconds').text(seconds > 10 ? seconds : "0"+seconds);
		console.log(days + "D:" + hours + "H:" + minutes + "M:" + seconds + "S")
	}
})