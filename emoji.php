<?php

$emojis = '😀😃😄😁😆😅😂🤣😊😇🙂🙃😉😌😍😘😗😙😚😋😛😝😜🤨🧐🤓😎🤩🥳😏😒😞😔😟😕🙁😣😖😫';
$em_arr = [];
for ($i = 0; $i <= mb_strlen($emojis); $i++) {
  $em_arr[] = mb_substr($emojis,$i,1);
}
var_export($em_arr);
