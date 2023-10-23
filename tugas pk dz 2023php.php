<?php

$nama = "Nafa Armelya Nur Ashsyifa XI RPL 1";
echo "$nama <br>";

echo "<br>";

echo "Bilangan ganjil dari 5 sampai 100:<br>";
for ($i = 5; $i <= 100; $i += 2) {
    echo $i . " ";
}
echo "<br>";

echo "<br>";

echo "Bilangan kelipatan 8 dari 0 sampai 100:<br>";
for ($i = 0; $i <= 100; $i += 8) {
    echo $i . " ";
}
echo "<br>";
echo "<br>";


echo "LOOPING SATU<br>";
for ($i = 2; $i <= 20; $i += 2) {
    echo $i . " - aku jago koding<br>";
}
echo "<br>";
echo "LOOPING DUA<br>";
for ($i = 19; $i >= 1; $i -= 2) {
    echo $i. "- aku seorang web developer<br>";
}



echo "<br>";
echo "<br>";
for ($i = 1; $i <= 100; $i++) {
    if ($i % 2 != 0) {
        echo "Hobby aku adalah koding<br>";
    } else {
        echo "aku sangat senang koding<br>";
    }
}
 
echo "<br>";
echo "<br>";

for ($i = 1; $i <=100; $i++) {
    if ($i % 3 == 0 && $i % 2 != 0) {
        echo $i . " - i love coding<br>";
    }
}
?>


