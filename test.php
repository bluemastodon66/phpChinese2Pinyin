<?php
require_once "lib/big5_pyin.php";
$p = new big5pinyin();
$letters = $p->getPinyin("abc中文字轉拼音001");
echo $letters;

?>