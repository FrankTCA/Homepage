<!DOCTYPE html>
<html>
<head>
    <!-- We no longer need jQuery -->
    <!-- <script src="js/jquery-3.6.1.min.js"></script> -->
    <link type="text/css" rel="stylesheet" href="/global-resources/mallory.css">
    <style>
        * {
            margin: 0;
        }
        html, body {
            height: 100%;
            width: 100%;
            overflow: hidden;
        }
        .bg {
            background-image: url("https://infotoast.org/images/<?php
            echo rand(0, 308);
?>.webp");
            background-size: 100% 100%;
            width: 100%;
            height: 100%;

        }
        .center {
            position: absolute;
            margin: auto;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            width: 500px;
            height: 500px;
            background-color: #ccc;
            border-radius: 3px;
        }
        .time {
            position: absolute;
            bottom: 0;
            right: 0;
        }
        #theTime {
            font-family: Mallory-Medium, Arial, sans-serif;
            font-size: 10em;
            color: aliceblue;
            text-shadow: 2px 2px #000000;
        }
        #theDate {
            font-family: Mallory-Medium, Arial, sans-serif;
            font-size: 2em;
            color: aliceblue;
            text-shadow: 2px 2px #000000;
        }
    </style>
</head>
<body>
<script>
    const months = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
    const days = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];

    const d = new Date();
    let month = months[d.getMonth()];
    let day = days[d.getDay()];
    let date = d.getDate();

    let hours = d.getHours();
    let minutes = d.getMinutes();

    document.getElementById("theDate").innerHTML = day + ", " + month + " " + date;
    document.getElementById("theTime").innerHTML = hours + ":" + minutes;

    // Legacy code for when server would provide the time
    /*var tz_offset = new Date().getTimezoneOffset();
    tz_offset = tz_offset == 0 ? 0 : -tz_offset;
    console.log(tz_offset);

    $.get("get_date_time.php", {offset: tz_offset}, function(data, status) {
        console.log(data);
        $(".time").html(data);
    })*/
</script>
<div class="bg">
    <div class="time">
        <span id="theDate"></span>
        <br>
        <span id="theTime"></span>
    </div>
</div>
</body>
</html>
