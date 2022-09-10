<!DOCTYPE html>
<html>
<head>
    <script src="js/jquery-3.6.1.min.js"></script>
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
            background-image: url("https://imgdrop.infotoast.org/crimages/<?php
            echo rand(0, 606);
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
            font-family: Arial, sans-serif;
            font-size: xxx-large;
        }
    </style>
</head>
<body>
<script>
    $(document).ready(function() {
        setInterval(function() {
            let currentDate = new Date();
            let time = currentDate.getHours() + ":" + currentDate.getMinutes();
            $('#theTime').innerText = time;
        }, 1000);
    })
</script>
<div class="bg">
    <div class="time">
        <span id="theTime"></span>
    </div>
</div>
</body>
</html>
