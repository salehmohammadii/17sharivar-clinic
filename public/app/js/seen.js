$(document).ready(function () {    var a = new Date();    var days = new Array(7);    days[0] = "Sunday";    days[1] = "Monday";    days[2] = "Tuesday";    days[3] = "Wednesday";    days[4] = "Thursday";    days[5] = "Friday";    days[6] = "Saturday";    var day = days[a.getDay()];   $.ajax({    type: "POST",    url: "php/seen.php",    data: {seen:day},   });});