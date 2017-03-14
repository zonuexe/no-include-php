<?php

/**
 * 各ファイルから共通で読み込まれる初期化ファイルだよ
 *
 * @copyright 2017 tadsan
 * @license   WTFPL
 */

namespace ZonuProject;

spl_autoload_register(function ($class_name) {
    // 名前空間の先頭が一致しなければこのプロジェクトのクラスではない
    if (strpos($class_name, 'ZonuProject\\') !== 0) {
        return false;
    }

    // 名前空間の \ をディレクトリの / に変換する
    $class_file = strtr(ltrim($class_name, 'ZonuProject\\'), ['\\' => '/']);
    $path = __DIR__ . "/{$class_file}.php";

    if (file_exists($path)) {
        require_once $path;
    }
});
