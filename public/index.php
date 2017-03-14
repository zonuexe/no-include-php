<?php

/** @copyright 2017 tadsan | licensed under WTFPL */

namespace ZonuProject;

require_once __DIR__ . '/../src/bootstrap.php';

$teto = new User("重音テト");

$negi = new Item("ネギ");
$miku = new User("初音ミク");
$miku->setItem($negi);

?>
<!DOCTYPE html>
<title>自己紹介</title>
<p><?= htmlspecialchars($teto->saySelfIntroduce(), ENT_QUOTES) ?></p>
<p><?= htmlspecialchars($miku->saySelfIntroduce(), ENT_QUOTES) ?></p>
