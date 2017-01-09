<?php

   var_dump($_POST);

  $con = mysqli_connect('localhost', 'bendomin_osa', 'janusz123') or die("nie mozna polaczyc sie z baza");
  $table_schema = 'bendomin_osa';

  $query_db_data = 'UPDATE '.$table_schema.'.tworca SET nazwa="'.$_POST["nazwa"].'" , typ="'.$_POST["typ"].'" , id_tworca="'.$_POST["id_tworca"].'" , data_tworca="'.$_POST["data_tworca"].'" , historia="'.$_POST["hist_tworcy"].'", dziedzina_dzialalnosci="'.$_POST["zrodla_opisu"].'" WHERE '.$table_schema.'.tworca.id="'.$_POST["id"].'" ';
  $result = mysqli_query($con, $query_db_data) or die(mysqli_error($result). '    |     '.mysqli_error($con));
  mysqli_close($con);

  $host  = $_SERVER['HTTP_HOST'];
  $uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
  $parts = explode('/', $uri);
  $dir1 = '/'.$parts[count($parts) - 5];
  $dir2 = '/'.$parts[count($parts) - 4];
  header("Location: http://$host$dir1$dir2/");
  ?>