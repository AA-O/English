<?php
ini_set("user_agent","Mozilla/4.0 (compatible; MSIE 5.00; Windows 98)");
$result = file_get_contents("http://www.youdao.com/w/eng/asean/#keyfrom=dict2.index.suggest");
echo $result;

?>
