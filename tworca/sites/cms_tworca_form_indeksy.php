<?php

/* Początek Kategorii 'Prawa do zbioru/zespolu' Formularza Zbiotu/Zespołu */
$cms_tworca_form_indeksy = '
<div style="display: none; opacity:0;" class="cms_tworca_form_category" id="cms_tworca_form_category_2">
  <fieldset '.$disabled.'>
      <div class="row">';

//Tabela
$cms_tworca_form_indeksy .= '

                <div class="row" >
                    <div class="col-sm-10 col-sm-offset-1">
                     <table id="tablica_rezerwacji" class="table table-bordered table-hover table-condensed">
                      <thead>
                        <tr>
                          <th>#</th>';


                            $table_schema = 'bendomin_osa';
                                    $table_id = 1;

                                    $query_columns_info = 'SELECT DISTINCT column_name FROM information_schema.columns WHERE table_schema = "'.$table_schema.'" AND table_name = "tworca"';
                                    $con = mysqli_connect('localhost', 'bendomin_osa', 'janusz123');
                                    if($result = mysqli_query($con, $query_columns_info)){
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            //drukujemy nazwy kolumn
                                            $cms_tworca_form_indeksy .= '<th>'.$row['column_name'].'</th>';
                                            $fields_columns_info[] = $row;
                                        }
                                         $cms_tworca_form_indeksy .='<th>Edytuj</th>';
                                         $cms_tworca_form_indeksy .='<th>Usuń</th>';
                                    }

$cms_tworca_form_indeksy .= '</tr>
                      </thead>
                      <tbody>';



/* wiersze */
$table_schema = 'bendomin_osa';
        $table_id = 1;
        $counter = 0;
        $query_db_data = 'SELECT * FROM '.$table_schema.'.tworca';
        $con = mysqli_connect('localhost', 'bendomin_osa', 'janusz123');
        if($result = mysqli_query($con, $query_db_data)){
            while ($row = mysqli_fetch_assoc($result)) {
                //drukujemy nazwy kolumn
                $cms_tworca_form_indeksy .= '<tr id="wiersz'.$counter.'">';
                $cms_tworca_form_indeksy .= '<td><p disabled style="width:100%" type="text"><b>'.$counter.'</b></p></td>';
                $cms_tworca_form_indeksy .= '<td><input readonly class="formWiersz'.$counter.'" name="id" style="width:25px" type="text" value="'.$row['id'].'"></td>';
                $cms_tworca_form_indeksy .= '<td><input disabled class="disableWiersz'.$counter.' formWiersz'.$counter.'" name="nazwa" style="width:100%" type="text" value="'.$row['nazwa'].'"></td>';
                $cms_tworca_form_indeksy .= '<td><input disabled class="disableWiersz'.$counter.' formWiersz'.$counter.'" name="typ" style="width:100%" type="text" value="'.$row['typ'].'"></td>';
                $cms_tworca_form_indeksy .= '<td><input disabled class="disableWiersz'.$counter.' formWiersz'.$counter.'" name="id_tworca" style="width:100%" type="text" value="'.$row['id_tworca'].'"></td>';
                $cms_tworca_form_indeksy .= '<td><input disabled class="disableWiersz'.$counter.' formWiersz'.$counter.'" name="data_tworca" style="width:100%" type="text" value="'.$row['data_tworca'].'"></td>';
                $cms_tworca_form_indeksy .= '<td><input disabled class="disableWiersz'.$counter.' formWiersz'.$counter.'" name="hist_tworcy" style="width:100%" type="text" value="'.$row['historia'].'"></td>';
                $cms_tworca_form_indeksy .= '<td><input disabled class="disableWiersz'.$counter.' formWiersz'.$counter.'" name="zrodla_opisu" style="width:100%" type="text" value="'.$row['dziedzina_dzialalnosci'].'"></td>';

                $cms_tworca_form_indeksy .= '<td>
                    <input type="hidden" name="id" value="'.$row['id'].'">
                    <button type="button" id="button'.$counter.'" onClick="undisableTxt('.$counter.')" class="glyphicon glyphicon-pencil"></span>
                </td>';

                $cms_tworca_form_indeksy .= '<td>
                    <form action="./resources/php/cms_tworca/cms_tworca_usun.php" method="post">
                        <input type="hidden" name="id" value="'.$row['id'].'">
                        <button type="submit" class="glyphicon glyphicon-remove"></span>
                    </form>
                </td>';

                $cms_tworca_form_indeksy .= '</tr>';

            $counter++;

            }
}


$cms_tworca_form_indeksy .= '
</tbody>
</table>
<form id="edytujForm" action="./resources/php/cms_tworca/cms_tworca_edytuj.php" method="post">
            <div class="pull-right">
                <button disabled id="sendFormButton" type="submit" class="btn btn-default"><span class="glyphicon glyphicon-ok"></span> Zapisz</button>
            </div>
</form>
</div>
</div>';

/* Koniec drugiej kolumny i całej kategorii */
$cms_tworca_form_indeksy .= '
    </div>
  </fieldset>
</div>';
?>