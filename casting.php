<?php
$x = 5;
$name = "php learning";
$x_float = (float)$x;
$name_float = (float)$name;
$x_bool = (bool)$x;
$name_bool = (bool)$name;
$x_array = (array)$x;
$name_array = (array)$name;
echo "Float:";
var_dump($x_float);
var_dump($name_float);
echo "<br>Boolean:";
var_dump($x_bool);
var_dump($name_bool);
echo "<br>Array:";
var_dump($x_array);
var_dump($name_array);

?>