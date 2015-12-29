$(document).ready(function(){
var birth_date = new Date('Dec, 15, 1992');

var years,months,days, hours, minutes, seconds;
var ageCount = document.getElementById('counter');
setInterval(function(){

var current_date = new Date();
var YearDiff =  (current_date.getYear() - birth_date.getYear());
var monthDiff = (current_date.getMonth() - birth_date.getMonth());
var daysDiff = (current_date.getDate() - birth_date.getDate());
var hoursDiff = (current_date.getHours() - birth_date.getHours());
var minDiff = (current_date.getMinutes() - birth_date.getMinutes());
var secDiff = (current_date.getSeconds() - birth_date.getSeconds());


     ageCount.innerHTML=YearDiff+' Years '+monthDiff+' Months '+daysDiff+' Days '+hoursDiff+
    ' Hours '+minDiff+' Minutes '+secDiff+' Seconds';

},500);

});