<?php

//  burada da aynı öğrenciler verisine erişmeliyim

include "data.php";

$student = $students[$_GET['i']];
?>

<h1><?= $student['name'] ?> <?= $student['surname'] ?></h1>
<p><?= $student['course'] ?></p>
<p><?= $student['number'] ?></p>