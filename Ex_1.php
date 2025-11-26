<table border="1" cellpadding="10">
<tr>

<!-- =========================== -->
<!-- คอลัมน์ที่ 1 : Loop FOR -->
<!-- =========================== -->
<td>
<b>Loop FOR</b><br><br>

<?php
// 1) *
$star = 4;
for ($i = 1; $i <= $star; $i++) {
    for ($j = 1; $j <= $i; $j++) echo "*";
    echo "<br>";
}
echo "<br>";

// 2) 1 1 1 1 ...
for ($i = 1; $i <= 3; $i++) {
    for ($j = 1; $j <= 4; $j++) echo $i . " ";
    echo "<br>";
}
echo "<br>";

// 3) 1 / 2 2 / 3 3 3
for ($i = 1; $i <= 3; $i++) {
    for ($j = 1; $j <= $i; $j++) echo $i . " ";
    echo "<br>";
}
echo "<br>";

// 4) กรอบ *
$rows = 3;
$cols = 4;
for ($i = 1; $i <= $cols + 2; $i++) echo "* ";
echo "<br>";

for ($i = 1; $i <= $rows; $i++) {
    echo "* ";
    for ($j = 1; $j <= $cols; $j++) echo $i . " ";
    echo "*<br>";
}

for ($i = 1; $i <= $cols + 2; $i++) echo "* ";
echo "<br><br>";

// 5) 3 3 3 / 2 2 / 1
for ($i = 3; $i >= 1; $i--) {
    for ($j = 1; $j <= $i; $j++) echo $i . " ";
    echo "<br>";
}
?>
</td>


<!-- =========================== -->
<!-- คอลัมน์ที่ 2 : Loop WHILE -->
<!-- =========================== -->
<td>
<b>Loop WHILE</b><br><br>

<?php
// 1) *
$star = 4;
$i = 1;
while ($i <= $star) {
    $j = 1;
    while ($j <= $i) { echo "*"; $j++; }
    echo "<br>";
    $i++;
}
echo "<br>";

// 2) 1111 / 2222 / 3333
$i = 1;
while ($i <= 3) {
    $j = 1;
    while ($j <= 4) { echo $i . " "; $j++; }
    echo "<br>";
    $i++;
}
echo "<br>";

// 3) 1 / 2 2 / 3 3 3
$i = 1;
while ($i <= 3) {
    $j = 1;
    while ($j <= $i) { echo $i . " "; $j++; }
    echo "<br>";
    $i++;
}
echo "<br>";

// 4) กรอบ *
$rows = 3; $cols = 4;

$i = 1;
while ($i <= $cols + 2) { echo "* "; $i++; }
echo "<br>";

$i = 1;
while ($i <= $rows) {
    echo "* ";
    $j = 1;
    while ($j <= $cols) { echo $i . " "; $j++; }
    echo "*<br>";
    $i++;
}

$i = 1;
while ($i <= $cols + 2) { echo "* "; $i++; }
echo "<br><br>";

// 5) 3 3 3 / 2 2 / 1
$i = 3;
while ($i >= 1) {
    $j = 1;
    while ($j <= $i) { echo $i . " "; $j++; }
    echo "<br>";
    $i--;
}
?>
</td>


<!-- =========================== -->
<!-- คอลัมน์ที่ 3 : Loop DO WHILE -->
<!-- =========================== -->
<td>
<b>Loop DO WHILE</b><br><br>

<?php
// 1) *
$star = 4;
$i = 1;
do {
    $j = 1;
    do { echo "*"; $j++; } while ($j <= $i);
    echo "<br>";
    $i++;
} while ($i <= $star);
echo "<br>";

// 2) 1111 / 2222 / 3333
$i = 1;
do {
    $j = 1;
    do { echo $i . " "; $j++; } while ($j <= 4);
    echo "<br>";
    $i++;
} while ($i <= 3);
echo "<br>";

// 3) 1 / 2 2 / 3 3 3
$i = 1;
do {
    $j = 1;
    do { echo $i . " "; $j++; } while ($j <= $i);
    echo "<br>";
    $i++;
} while ($i <= 3);
echo "<br>";

// 4) กรอบ *
$rows = 3;
$cols = 4;

$i = 1;
do { echo "* "; $i++; } while ($i <= $cols + 2);
echo "<br>";

$i = 1;
do {
    echo "* ";
    $j = 1;
    do { echo $i . " "; $j++; } while ($j <= $cols);
    echo "*<br>";
    $i++;
} while ($i <= $rows);

$i = 1;
do { echo "* "; $i++; } while ($i <= $cols + 2);
echo "<br><br>";

// 5) 3 3 3 / 2 2 / 1
$i = 3;
do {
    $j = 1;
    do { echo $i . " "; $j++; } while ($j <= $i);
    echo "<br>";
    $i--;
} while ($i >= 1);
?>
</td>

</tr>
</table>
