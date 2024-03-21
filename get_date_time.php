<?php
if (!isset($_GET['offset'])) {
    die("Not enough information provided.");
}

$offset = $_GET['offset'];

$timezone_name = timezone_name_from_abbr("", $offset*60, 1);

$tz_obj = new DateTimeZone($timezone_name);

$today = new DateTime("now", $tz_obj);

?>
<span id="theDate">
    <?php
    $today_formatted = $today->format('l, F j');
    echo $today_formatted;
    ?>
</span>
<br>
<span id="theTime">
    <?php
    $today_formatted = $today->format('H:i');
    echo $today_formatted;
    ?>
</span>
