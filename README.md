# Turning Chinese Characters to letters based on pinyin.

<pre>
<code>
require_once "lib/big5_pyin.php";
$p = new big5pinyin();
$letters = $p->getPyinyin("abc中文字轉拼音001");
echo $letters;
</code>
<pre>

## Result
<pre>
abc-zhong-wen-zi-zhuan-pin-yin-001
<pre>

