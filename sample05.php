<?php
date_default_timezone_set("Asia/Tokyo");
echo "現在は" . date("G時 i分 s秒") . "です";
?>


<?php
$today = new DateTime();
$today -> setTimezone(new DateTimeZone("Asia/Tokyo"));
echo "現在は" . $today -> format("G時 i分 s秒") . "だよ";
?>