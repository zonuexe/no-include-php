<?php

/** @copyright 2017 tadsan | licensed under WTFPL */

namespace ZonuProject;

require_once __DIR__ . '/../src/bootstrap.php';

$user = new User("重音テト");
?>
<!DOCTYPE html>
<title>自己紹介</title>
<p><?= htmlspecialchars($user->saySelfIntroduce(), ENT_QUOTES) ?></p>
