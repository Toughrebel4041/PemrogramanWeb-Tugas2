<?php

echo strtolower("Hello, world!");
echo "<br>";
echo strtoupper("Hello, world!");
echo "<br>";
echo ucfirst("hello, world");
echo "<br>";
echo ucwords("hello, world");
echo "<br>";
echo strlen("hello, world");
echo "<br>";
$str = "Hello, world!";
echo $str."<br>";
echo trim($str, "o, world!");
echo "<br>";
$str2 = "  Hello, world!";
echo "<br>";
echo ltrim($str2);
echo "<br>";
$strCMP1 = "Ini Compare 1";
$strCMP2 = "Ini Compare 2";
echo ($strCMP1." ");
echo ($strCMP2);
echo "<br>";
echo substr_compare($strCMP1, $strCMP2, 2);
echo "<br>";
echo sprintf ("Saya sedang membandingkan dua string, %s dan ini adalah %s", $strCMP1, $strCMP2);
echo md5($strCMP1);
// strstr and stristr are to find similar word yet stristr doesnt care either it's caps or not
// parse_str("name=Peter&age=43");
// echo $name."<br>";
// echo $age;

echo "<br>";
echo "<br>";
echo "<br>";

echo(rand()."<br>");
echo "<br>";
echo(rand(10,100));
echo "<br>";
echo(pow(2,4)."<br>");
echo "<br>";
echo(round(0.60)."<br>");

echo "<br>";
echo "Today is ".date("Y/m/d")."<br>";
echo "Today is ".date("Y.m.d")."<br>";
echo "Today is ".date("y-M-d")."<br>";
echo "Today is ".date("d F Y")."<br>";
echo "Today is ".date("l")."<br>";
$d=mktime(11, 14, 54, 3, 12, 2020);
echo "Created date is ".date("Y-m-d H:i:s", $d)."<br>";

echo "<br>";
echo "<br>";
echo "<br>";

$awal = date_create('2003-10-08');
$akhir = date_create();
$umur = date_diff($awal, $akhir);

echo 'Umur: ';
echo $umur->y." tahun, ";
echo $umur->m." bulan, ";
echo $umur->d." hari, ";
echo $umur->h." jam, ";
echo $umur->i." menit, ";
echo $umur->s." detik.";
?>
