<?php

$week_name = ["日", "月", "火", "水", "木", "金", "土"];
date_default_timezone_set("Asia/Tokyo");
$week = date("w"); // 日曜日: 0 〜 土曜日: 6
echo "今日は$week_name[$week]曜日です";

?>