<!DOCTYPE html>
<html lang="jp">
<head>
  <meta charset="UTF-8">
  <title>PHP基礎編</title>
</head>
<body>

  <?php
  function sort_2way($array, $order){

    if ($order == true){
       sort($array);
       echo '昇順にソートします<br>';
        foreach ($array as $array) {
            echo "{$array}<br>";
        }
     }else{
       rsort($array);
       echo '降順にソートします<br>';
        foreach ($array as $array) {
            echo "{$array}<br>";
        }
     }
  };

$array = [15,4,18,23,10];
sort_2way($array, true);
sort_2way($array, false);

  ?>

</body>
</html>