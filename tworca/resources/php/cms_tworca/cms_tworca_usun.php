<?php

if(isset($_POST["id"])){
$table_schema = 'bendomin_osa';
$con = mysqli_connect('localhost', 'bendomin_osa', 'janusz123') or die("nie polaczyles sie z baza");

$query_db_data = 'DELETE FROM '.$table_schema.'.tworca WHERE id = "'.$_POST["id"].'"';
$result = mysqli_query($con, $query_db_data) or die(mysqli_error($result). '    |     '.mysqli_error($con));

mysqli_close($con);
}


  $host  = $_SERVER['HTTP_HOST'];
  $uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
  $parts = explode('/', $uri);
  $dir1 = '/'.$parts[count($parts) - 5];
  $dir2 = '/'.$parts[count($parts) - 4];
  header("Location: http://$host$dir1$dir2/");
?>