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
            echo rand(0, 342);
?>.jpg");
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
            font-family: interstate, Arial, sans-serif;
            font-size: 10em;
            color: aliceblue;
            text-shadow: 2px 2px #000000;
        }
        #theDate {
            font-family: interstate, Arial, sans-serif;
            font-size: 2em;
            color: aliceblue;
            text-shadow: 2px 2px #000000;
        }
    </style>
</head>
<body>
<script>
    $(document).ready(function() {
        var tz_offset = new Date().getTimezoneOffset();
        tz_offset = tz_offset == 0 ? 0 : -tz_offset;
        console.log(tz_offset);

        $.get("get_date_time.php", {offset: tz_offset}, function(data, status) {
            console.log(data);
            $(".time").innerHTML = data;
        })
    })
</script>
<div class="bg">
    <div class="time">
    </div>
</div>
</body>
</html>
