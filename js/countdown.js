 
var target_date = new Date("Jan 12, 2021 10:00:00").getTime();
var days, hours, minutes, seconds; // variables for time units

var dayTag = document.getElementById('days');
var hourTag = document.getElementById('hours');
var minuteTag = document.getElementById('minutes');
var secondTag = document.getElementById('seconds');


 getCountdown();

 setInterval(function () { getCountdown(); }, 1000);

 function getCountdown(){

 	// find the amount of "seconds" between now and target
 	var current_date = new Date().getTime();
 	var seconds_left = (target_date - current_date) / 1000;

 	days = pad( parseInt(seconds_left / 86400) );
 	seconds_left = seconds_left % 86400;
		 
 	hours = pad( parseInt(seconds_left / 3600) );
 	seconds_left = seconds_left % 3600;
		  
 	minutes = pad( parseInt(seconds_left / 60) );
 	seconds = pad( parseInt( seconds_left % 60 ) );

 	// format countdown string + set tag value
 	dayTag.innerHTML = days;
 	hourTag.innerHTML =  hours;
 	minuteTag.innerHTML = minutes;
 	secondTag.innerHTML = seconds;
 }

 function pad(n) {
 	return (n < 10 ? '0' : '') + n;
 }
