<!DOCTYPE html>
<html lang="jp">
<head>
  <meta charset="UTF-8">
  <title>PHP_KADAI_011</title>
</head>
<body>

<?php

$data = ['名前' => '玉ねぎ', '値段' => 200, '産地' => '北海道'];

        foreach ($data as $key => $value) {
            echo "{$key}：{$value}<br>";
        }

?>

</body>
</html>

