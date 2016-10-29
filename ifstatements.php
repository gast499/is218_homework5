<html>
<head>
<title>If Statements</title>
</head>
<body>
<?php
$var1 = 5;
$var2 = '';
$var3 = NULL;
$var4 = 0;

//using var1
echo '<b>Var1:</b><br>The value of var1 is 5<br>';
if (isset($var1)){
  echo 'var1 is set<br>';
}
if (empty($var1)){
  echo 'var1 is empty<br>';
}
if (is_null($var1)){
  echo 'var1 is null<br>';
}

//using var2
echo '<br><b>Var2:</b><br>The value of var2 is an empty string<br>';
if (isset($var2)){
  echo 'var2 is set<br>';
}
if (empty($var2)){
  echo 'var2 is empty<br>';
}
if (is_null($var2)){
  echo 'var2 is null<br>';
}

//using var3
echo '<br><b>Var3:</b><br>The value of var3 is NULL<br>';
if (isset($var3)){
  echo 'var3 is set<br>';
}
if (empty($var3)){
  echo 'var3 is empty<br>';
}
if (is_null($var3)){
  echo 'var3 is null<br>';
}

//using var4
echo '<br><b>Var4:</b><br>The value of var4 is 0<br>';
if (isset($var4)){
  echo 'var4 is set<br>';
}
if (empty($var4)){
  echo 'var4 is empty<br>';
}
if (is_null($var4)){
  echo 'var4 is null<br>';
}
?>
</body>
</html>