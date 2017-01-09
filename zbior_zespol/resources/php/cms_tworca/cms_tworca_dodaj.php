<?php
$table_schema = 'bendomin_osa';

if(isset($_POST["n_tworcy"])){
$table_schema = 'bendomin_osa';

$data_full = '';

if(isset(($_POST["data_podw"])) && isset(($_POST["data_poje"]))){

    $dataPodwojnaCounter = count($_POST["data_podw"]);
    $i = 0;
    for($i; $dataPodwojnaCounter > $i; $i++){
        $data_full .= ' '.$_POST["data_podw"][$i] .'-'. $_POST["data_podw"][$i+1].',';
        $i++;
    }

    for($i = 0; count($_POST["data_poje"]) > $i; $i++){
    $data_full .= ' '.$_POST["data_poje"][$i].',';
    }
}else{echo 'data 1';}

if(!isset($_POST["data_podw"])){
    for($i = 0; count($_POST["data_poje"]) > $i; $i++){
    $data_full .= ' '.$_POST["data_poje"][$i].',';
    }
}else{echo 'data 2';}

if(!isset($_POST["data_poje"])){
    $dataPodwojnaCounter = count($_POST["data_podw"]);
    $i = 0;
    for($i; $dataPodwojnaCounter > $i; $i++){
        echo $_POST["data_podw"][0]. ' - '.$_POST["data_podw"][1];
        $data_full .= ' '.$_POST["data_podw"][$i] .'-'. $_POST["data_podw"][$i+1].',';
        $i++;
    }
}else{echo 'data 3';}

echo "2    ";
$data_full = rtrim($data_full, ",");

$con = mysqli_connect('localhost', 'bendomin_osa', 'janusz123') or die("nie mozna polaczyc sie z baza");

$query_db_data = 'INSERT INTO '.$table_schema.'.tworca (`id`, `nazwa`, `typ`, `id_tworca`, `data_tworca`, `historia`, `dziedzina_dzialalnosci`) VALUES (NULL,"'.$_POST["n_tworcy"].'","'.$_POST["typ_tworcy"].'","123123123","'.$data_full.'","'.$_POST["hist_tworcy"].'","'.$_POST["zrodla_opisu"].'")';



$result = mysqli_query($con, $query_db_data) or die(mysqli_error($result). '    |     '.mysqli_error($con));

mysqli_close($con);
}

?>