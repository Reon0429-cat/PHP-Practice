<?php
date_default_timezone_set("Asia/Tokyo");
$time = date("G");
?>
<?php if ($time < 9) : ?>
  <p>営業時間外</p>
<?php else : ?>
  <p>ようこそ</p>
<?php endif; ?>


<?php

$string = "";
if ($string !== ""):
  echo "文字が入っています。";
else:
  echo "文字が入っていせん";
endif;

?>