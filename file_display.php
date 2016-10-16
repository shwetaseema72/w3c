<?php

mysql_connect("localhost","root","");
mysql_select_db("test_image");


    $query = mysql_query("select * from `test_image`");
    $images = array();
while ($row = mysql_fetch_assoc($query)) {
  $images[] = $row['image'];
}
    /* header should be removed
   header("content-type: image/jpeg"); */
foreach ($images as $image) {
  echo '<img src="data:image/jpeg;base64,'. base64_encode($image) .'" />';
}

?>