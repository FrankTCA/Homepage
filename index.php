<!DOCTYPE html>
<html>
<head>
    <script src="js/jquery-3.6.1.min.js"></script>
    <link rel="stylesheet" href="https://use.typekit.net/avi3kdp.css">
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
            background-image: url("https://imgdrop.infotoast.org/hiresbg/<?php
            echo rand(0, 159);
?>.jpg");
            background-size: 100% 100%;
            width: 100%;
            height: 100%;

        }
        .time {
            position: absolute;
            bottom: 0;
            right: 0;
        }
        #theTime {
            font-family: interstate, Arial, sans-serif;
            font-size: 10em;
            color: aliceblue;
            text-shadow: 2px 2px #000000;
        }
    </style>
</head>
<body>
<script>
    let currentDate = new Date();
    let time = currentDate.getHours() + ":" + currentDate.getMinutes();
    document.getElementById("theTime").innerText = time;
    setInterval(function() {
        let currentDate = new Date();
        let time = currentDate.getHours() + ":" + currentDate.getMinutes();
        document.getElementById("theTime").innerText = time;
    }, 1000);
</script>
<div class="bg">
    <div class="time">
        <span id="theTime"><?php
            $tz = 'America/New_York';
            $tz_obj = new DateTimeZone($tz);
            $today = new DateTime("now", $tz_obj);
            $today_formatted = $today->format('H:i');
            echo $today_formatted;
        ?></span>
    </div>
</div>
</body>
</html>
