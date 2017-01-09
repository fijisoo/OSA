<?php


/*
<style>
.modal-backdrop {
    opacity: 1;
  background-color: #FFFFFF;
}
</style>
*/
/* tworzymy modal */
$cms_tworca_indexx .= '
<div id="myModal" class="modal fade" role="dialog">
  <div style="width: 80%; background:white" class="modal-dialog modal-lg">';


/* modal kontent + header */
$cms_tworca_indexx .= '
    <div class="modal-content">

          <div class="modal-header">
            <div class="form-group">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <div class="col-md-2"><h4><span class="glyphicon glyphicon-user"></span> '.self::$TworcaModalTexts['dodaj_tworce']['text'].'</h4></div>
                  <div class="col-md-9"><span style="font-size: 1.6em;" data-toggle="collapse" data-target="#cms_tworca_form_dodaj_tworce_desc" class="nav_menu_modal_tip_sign glyphicon glyphicon-question-sign pull-left"></span></div>
              </div>
              <div class="row">
                  <div id="cms_tworca_form_dodaj_tworce_desc" class="form_collapse_class collapse aller_light col-sm-offset-1 col-md-10">'.self::$TworcaModalTexts['dodaj_tworce']['desc'].'</div>
              </div>
              <div class="col-md-1 pull-right"></div>
          </div>
          ';

/* modal tabsy + otwieramy kontent tabsów*/
$cms_tworca_indexx .= '
          <ul class="nav nav-tabs" id="tabContent">
                  <li class="active"><a href="#podstawowe" data-toggle="tab">Dane podstawowe</a></li>
                  <li><a href="#indeksy" data-toggle="tab">Indeksy</a></li>
          </ul>
          <div class="tab-content">
';

/* dodajemy pierwszą zakładkę - podstawową */
$cms_tworca_indexx .= '
          <div class="tab-pane active" id="podstawowe">
          <form action="./resources/php/cms_tworca/cms_tworca_dodaj.php" method="post">
          <div class="modal-body">
';

/* body zakładki podstawowe - część widoczna */

/* Nazwa twórcy */
$cms_tworca_indexx .= '
<div class="col-sm-6" style="margin-top:15px">
        <p class="aller_bold text-left col-sm-offset-2">'.self::$TworcaModalTexts['n_tworcy']['text'].'</p>
          <div class="row">
            <div id="cms_tworca_form_n_tworcy" class=" col-sm-offset-2 col-sm-8 form-group has-feedback">
              <input require name="n_tworcy" type="text" maxlength="32" class="form-control" id="cms_tworca_form_n_tworcy_input"
                style="text-align: center;" title="'.self::$TworcaModalTexts['n_tworcy']['ph'].'"
                placeholder="'.self::$TworcaModalTexts['n_tworcy']['ph'].'">
                <span class="nav_menu_modal_error_sign glyphicon form-control-feedback"></span>
            </div>
            <div id="cms_tworca_form_n_tworcy_desc" class="form_collapse_class collapse aller_light col-sm-offset-2 col-md-8">'.self::$TworcaModalTexts['n_tworcy']['desc'].'</div>
            <span data-toggle="collapse" data-target="#cms_tworca_form_n_tworcy_desc" class="nav_menu_modal_tip_sign glyphicon glyphicon-question-sign"></span>
          </div>';


/* Inne warianty lub formy nazwy twórcy */
$cms_tworca_indexx .= '
        <p class="aller_bold text-left col-sm-offset-2">'.self::$TworcaModalTexts['inne_warianty']['text'].'</p>
          <div class="row">
            <div id="cms_tworca_form_inne_warianty" class=" col-sm-offset-2 col-sm-8 form-group has-feedback">
              <input name="inne_warianty" type="text" maxlength="32" class="form-control" id="cms_tworca_form_inne_warianty_input"
                style="text-align: center;" title="'.self::$TworcaModalTexts['inne_warianty']['ph'].'"
                placeholder="'.self::$TworcaModalTexts['inne_warianty']['ph'].'">
                <span class="nav_menu_modal_error_sign glyphicon form-control-feedback"></span>
            </div>
<!--            <div id="cms_tworca_form_inne_warianty_desc" class="form_collapse_class collapse aller_light col-sm-offset-2 col-md-8">'.self::$TworcaModalTexts['inne_warianty']['desc'].'</div>
            <span data-toggle="collapse" data-target="#cms_tworca_form_inne_warianty_desc" class="nav_menu_modal_tip_sign glyphicon glyphicon-question-sign"></span> -->
          </div>';

/* Typ twórcy */
$cms_tworca_indexx .= '
          <p class="aller_bold text-left col-sm-offset-2">'.self::$TworcaModalTexts['typ_tworcy']['text'].'</p>
                    <div class="row">
                    <div id="cms_tworca_form_typ_tworcy" class="col-sm-offset-2 col-sm-8 form-group has-feedback">
                          <select require name="typ_tworcy" class="form-control col-md-12">
                              <option>Typ twórcy</option>
                              <option>ciało zbiorowe</option>
                              <option>rodzina</option>
                              <option>osoba</option>
                              <option>nieznany</option>
                          </select>
                  </div>
                  <div id="cms_tworca_form_typ_tworcy_desc" class="form_collapse_class collapse aller_light col-sm-offset-2 col-md-8">'.self::$TworcaModalTexts['typ_tworcy']['desc'].'</div>
                  <span data-toggle="collapse" data-target="#cms_tworca_form_typ_tworcy_desc" class="nav_menu_modal_tip_sign glyphicon glyphicon-question-sign"></span>
                  </div>';

/* Identyfikator opisu */
$cms_tworca_indexx .= '
        <p class="aller_bold text-left col-sm-offset-2">'.self::$TworcaModalTexts['id_opisu']['text'].'</p>
          <div class="row">
            <div id="cms_tworca_form_id_opisu" class=" col-sm-offset-2 col-sm-8 form-group has-feedback">
              <input disabled type="text" maxlength="32" class="form-control" id="cms_tworca_form_id_opisu_input"
                style="text-align: center;" title="'.self::$TworcaModalTexts['id_opisu']['ph'].'"
                placeholder="'.self::$TworcaModalTexts['id_opisu']['ph'].'">
                <span class="nav_menu_modal_error_sign glyphicon form-control-feedback"></span>
            </div>
                  <div id="cms_tworca_form_id_opisu_desc" class="form_collapse_class collapse aller_light col-sm-offset-2 col-md-8">'.self::$TworcaModalTexts['id_opisu']['desc'].'</div>
                  <span data-toggle="collapse" data-target="#cms_tworca_form_id_opisu_desc" class="nav_menu_modal_tip_sign glyphicon glyphicon-question-sign"></span>
          </div>';

/* Koniec lewej kolumny, początek prawej */
$cms_tworca_indexx .= '
      </div>
      <div class="col-sm-6" style="margin-top:15px">';

/* Daty istnienia */
$cms_tworca_indexx .= '
          <div class="row">
            <p id="cms_tworca_form_data_seria_text2" class="text-left col-sm-4 aller_bold">'
              .self::$TworcaModalTexts['daty_istnienia']['text'].'
            </p>
            <span data-toggle="collapse" data-target="#cms_tworca_form_tworca_desc"
              class="nav_menu_modal_tip_sign col-sm-offset-4 glyphicon glyphicon-question-sign"></span>
          </div>
          <div class="row" style="margin-left:0em;">
            <button type="button" class="btn btn-primary col-sm-3 aller_bold"
              onClick="cms_tworca_form_data_seria_add_to_row(\'przed\', \''.self::$TworcaModalTexts['daty_istnienia']['title_ph']['przed_od'].'\', \''.self::$TworcaModalTexts['daty_istnienia']['title_ph']['przed_do'].'\');
              cms_tworca_form_dane_podst_check_empty();">'
              .self::$TworcaModalTexts['daty_istnienia']['btn']['przed'].'
            </button>
            <button type="button" style="margin-left:1em;" class="btn btn-primary col-sm-3 aller_bold"
              onClick="cms_tworca_form_data_seria_add_to_row(\'pojed\', \''.self::$TworcaModalTexts['daty_istnienia']['title_ph']['pojed'].'\', \'\');
              cms_tworca_form_dane_podst_check_empty();">'
              .self::$TworcaModalTexts['daty_istnienia']['btn']['pojed'].'
            </button>
          </div>
          <div class="col-sm-8" style="margin-left:1em;">
          <div class="row" id="cms_tworca_form_data_seria_main_row"></div>
          </div>
        <div class="row">
          <p id="cms_tworca_form_tworca_desc" class="text-left collapse col-sm-8 aller_light">
            '.self::$TworcaModalTexts['daty_istnienia']['desc'].'
          </p>
        </div><br/>';

/* Historia twórcy */
$cms_tworca_indexx .= '
        <p class="aller_bold text-left">'.self::$TworcaModalTexts['hist_tworcy']['text'].'</p>
          <div class="row">
            <div id="cms_tworca_form_hist_tworcy" class="col-sm-8 form-group has-feedback">
                <textarea require name="hist_tworcy"></textarea>
            </div>
            <span data-toggle="collapse" data-target="#cms_tworca_form_hist_tworcy_desc"
              class="nav_menu_modal_tip_sign glyphicon glyphicon-question-sign"></span>
          </div>
        <div class="row">
          <p id="cms_tworca_form_hist_tworcy_desc" class="aller_light text-left collapse col-sm-8">
            '.self::$TworcaModalTexts['hist_tworcy']['desc'].'
          </p>
        </div>';

/* Źródła do opisu twórcy */
$cms_tworca_indexx .= '
        <p class="aller_bold text-left">'.self::$TworcaModalTexts['zrodla_opisu']['text'].'</p>
          <div class="row">
            <div id="cms_tworca_form_zrodla_opisu" class="col-sm-8 form-group has-feedback">
              <input require name="zrodla_opisu" type="text" maxlength="32" class="form-control" id="cms_tworca_form_zrodla_opisu_input"
                style="text-align: center;" title="'.self::$TworcaModalTexts['zrodla_opisu']['ph'].'">
                <span class="nav_menu_modal_error_sign glyphicon form-control-feedback"></span>
            </div>
            <!--<div id="cms_tworca_form_zrodla_opisu_desc" class="form_collapse_class collapse aller_light col-md-8">'.self::$TworcaModalTexts['zrodla_opisu']['desc'].'</div>
            <span data-toggle="collapse" data-target="#cms_tworca_form_zrodla_opisu_desc" class="nav_menu_modal_tip_sign glyphicon glyphicon-question-sign"></span>-->
          </div>';

/* Koniec drugiej kolumny */
$cms_tworca_indexx .= '
<div class="row">
<div class="pull-right">
          <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-ok"></span> Dodaj</button>
          <button class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Anuluj</button>
</div>
</div>
</div>';


/* stopka */
$cms_tworca_indexx .= '
</form>
<div class="modal-footer">
<div class="row">
</div>
</div>';


/* koniec body-podstawowe i całego panelu - podstawowe */
$cms_tworca_indexx .= '
</div>
</div>';


/* dodajemy drugą zakładkę - indeksy */
$cms_tworca_indexx .= '
<div class="tab-pane" id="indeksy">
<div class="modal-body">';

/* body zakładki indeksy - część widoczna*/

/* nazwy kolumn */
$cms_tworca_indexx .= '

                <div class="row" >
                    <div class="col-lg-12 ">
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
                                            $cms_tworca_indexx .= '<th>'.$row['column_name'].'</th>';
                                            $fields_columns_info[] = $row;
                                        }
                                         $cms_tworca_indexx .='<th>Edytuj</th>';
                                         $cms_tworca_indexx .='<th>Usuń</th>';
                                    }

$cms_tworca_indexx .= '</tr>
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
                $cms_tworca_indexx .= '<tr id="wiersz'.$counter.'">';
                $cms_tworca_indexx .= '<td><p disabled style="width:100%" type="text"><b>'.$counter.'</b></p></td>';
                $cms_tworca_indexx .= '<td><input readonly class="formWiersz'.$counter.'" name="id" style="width:25px" type="text" value="'.$row['id'].'"></td>';
                $cms_tworca_indexx .= '<td><input disabled class="disableWiersz'.$counter.' formWiersz'.$counter.'" name="nazwa" style="width:100%" type="text" value="'.$row['nazwa'].'"></td>';
                $cms_tworca_indexx .= '<td><input disabled class="disableWiersz'.$counter.' formWiersz'.$counter.'" name="typ" style="width:100%" type="text" value="'.$row['typ'].'"></td>';
                $cms_tworca_indexx .= '<td><input disabled class="disableWiersz'.$counter.' formWiersz'.$counter.'" name="id_tworca" style="width:100%" type="text" value="'.$row['id_tworca'].'"></td>';
                $cms_tworca_indexx .= '<td><input disabled class="disableWiersz'.$counter.' formWiersz'.$counter.'" name="data_tworca" style="width:100%" type="text" value="'.$row['data_tworca'].'"></td>';
                $cms_tworca_indexx .= '<td><input disabled class="disableWiersz'.$counter.' formWiersz'.$counter.'" name="hist_tworcy" style="width:100%" type="text" value="'.$row['historia'].'"></td>';
                $cms_tworca_indexx .= '<td><input disabled class="disableWiersz'.$counter.' formWiersz'.$counter.'" name="zrodla_opisu" style="width:100%" type="text" value="'.$row['dziedzina_dzialalnosci'].'"></td>';

                $cms_tworca_indexx .= '<td>
                    <input type="hidden" name="id" value="'.$row['id'].'">
                    <button id="button'.$counter.'" onClick="undisableTxt('.$counter.')" class="glyphicon glyphicon-pencil"></span>
                </td>';

                $cms_tworca_indexx .= '<td>
                    <form action="./resources/php/cms_tworca/cms_tworca_usun.php" method="post">
                        <input type="hidden" name="id" value="'.$row['id'].'">
                        <button type="submit" class="glyphicon glyphicon-remove"></span>
                    </form>
                </td>';

                $cms_tworca_indexx .= '</tr>';

            $counter++;

            }
}


$cms_tworca_indexx .= '
</tbody>
</table>
</div>
</div>';

/* stopka */
$cms_tworca_indexx .= '
<div class="modal-footer">
    <div class="row">
        <form id="edytujForm" action="./resources/php/cms_tworca/cms_tworca_edytuj.php" method="post">
            <div class="pull-right">
                <button disabled id="sendFormButton" type="submit" class="btn btn-default"><span class="glyphicon glyphicon-ok"></span> Zapisz</button>
                <button class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Anuluj</button>
            </div>
        </form>
    </div>
</div>';


/* koniec body-podstawowe i całego panelu - podstawowe */
$cms_tworca_indexx .= '
</div>
</div>';

/* zamykamy kontent tabsów */
$cms_tworca_indexx .= '
</div>';

/* zamykamy modal kontent */
$cms_tworca_indexx .= '
</div>';

/* zamykamy modal */
$cms_tworca_indexx .= '
</div>
</div>';

?>
