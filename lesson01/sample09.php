<?php

date_default_timezone_set("Asia/Tokyo");

for ($i=0; $i<366; $i++) {
  // https://www.php.net/manual/ja/function.strtotime.php
  $time = strtotime("+$i day");
  $day = date("n/j(D)", $time);
  echo $day . "<br>";
}


?>