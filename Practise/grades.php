<?php
$ans1 = $_POST['qAns1'];
$ans2 = $_POST['qAns2'];
$ans3 = $_POST['qAns3'];

$totalCorrect = 0;

if ($ans1 == "B"){
    $totalCorrect++;
}
if ($ans2 == "A"){
    $totalCorrect++;
}
if ($ans3 == "B"){
    $totalCorrect++;
}

echo "<div>$totalCorrect / 3 Correct</div>"

?>