<?php

if(isset($_POST["id"])){
$table_schema = 'bendomin_osa';
$con = mysqli_connect('localhost', 'bendomin_osa', 'janusz123') or die("nie polaczyles sie z baza");

$query_db_data = 'DELETE FROM '.$table_schema.'.tworca WHERE id = "'.$_POST["id"].'"';
$result = mysqli_query($con, $query_db_data) or die(mysqli_error($result). '    |     '.mysqli_error($con));

mysqli_close($con);
}

?>