<pre>
<?php
  $result = array("math" => 90, "english" => 80);
  $friends = array(
    "Haruki" => $result,
  );
  var_dump($friends);

  $friends["Kaoru"] = array("math" => 95, "english" => 85);
  var_dump($friends);
?>
</pre>