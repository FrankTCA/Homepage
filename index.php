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
        .center {
            position: absolute;
            margin: auto;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            width: 100px;
            height: 100px;
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
    </style>
    <link rel="stylesheet" media="handheld, all" href="//duckduckgo.com/h2085.css" type="text/css" />
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
    <div class="center">
        <div class="header-wrap--home"></div>
        <div id="content_wrapper_homepage" class="content-wrap--home">
            <div id="content_homepage" class="content--home">
                <div class="logo-wrap--home">
                    <a title="About DuckDuckGo" class="logo_homepage" href="//duckduckgo.com/about.html">About DuckDuckGo</a>
                </div>
                <div class="search-wrap--home">
                    <form name="x" id="search_form_homepage" class="search" action="https://html.duckduckgo.com/html/" method="post">

                        <input name="q" autocomplete="off" id="search_form_input_homepage" class="search__input" type="text" autofocus />

                        <input name="b" id="search_button_homepage" class="search__button search__button--html" value="" title="Search" alt="Search" type="submit" />






                    </form>
                </div>

                <!--[if IE 6]>
                <p class="text-center">This browser is not supported. Please visit <a href="/lite">/lite</a>.</p>
                <![endif]-->

                <div id="html-only-notice">
                    <!--          This is the HTML version. Get the JS version <a href="https://duckduckgo.com/">here</a>. //-->
                </div>

            </div> <!-- id="content_homepage" -->
        </div> <!-- id="content_wrapper_homepage" -->
    </div>
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
