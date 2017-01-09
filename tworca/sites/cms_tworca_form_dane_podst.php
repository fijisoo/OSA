<?php

/* Początek Kategorii 'Archiwizacja' Formularza Zbiotu/Zespołu */
$cms_tworca_form_dane_podst = '
<div class="cms_tworca_form_category" id="cms_tworca_form_category_1">
  <fieldset '.$disabled.'>
   <form action="./resources/php/cms_tworca/cms_tworca_dodaj.php" method="post">
    <div class="row">';

/* Początek lewej strony Kategorii 'Dane podstaowwe' Formularza Zbiotu/Zespołu */

$cms_tworca_form_dane_podst .= '
<div class="col-sm-6">
        <p class="aller_bold text-left col-sm-offset-2">'.self::$DanePodstTexts['n_tworcy']['text'].'</p>
          <div class="row">
            <div id="cms_tworca_form_n_tworcy" class=" col-sm-offset-2 col-sm-8 form-group has-feedback">
              <input name="n_tworcy" type="text" maxlength="32" class="form-control" id="cms_tworca_form_n_tworcy_input"
                style="text-align: center;" title="'.self::$DanePodstTexts['n_tworcy']['ph'].'"
                placeholder="'.self::$DanePodstTexts['n_tworcy']['ph'].'">
                <span class="nav_menu_modal_error_sign glyphicon form-control-feedback"></span>
            </div>
            <div id="cms_tworca_form_n_tworcy_desc" class="form_collapse_class collapse aller_light col-sm-offset-2 col-md-8">'.self::$DanePodstTexts['n_tworcy']['desc'].'</div>
            <span data-toggle="collapse" data-target="#cms_tworca_form_n_tworcy_desc" class="nav_menu_modal_tip_sign glyphicon glyphicon-question-sign"></span>
          </div>';


/* Inne warianty lub formy nazwy twórcy */
$cms_tworca_form_dane_podst .= '
        <p class="aller_bold text-left col-sm-offset-2">'.self::$DanePodstTexts['inne_warianty']['text'].'</p>
          <div class="row">
            <div id="cms_tworca_form_inne_warianty" class=" col-sm-offset-2 col-sm-8 form-group has-feedback">
              <input name="" type="text" maxlength="32" class="form-control" id="cms_tworca_form_inne_warianty_input"
                style="text-align: center;" title="'.self::$DanePodstTexts['inne_warianty']['ph'].'"
                placeholder="'.self::$DanePodstTexts['inne_warianty']['ph'].'">
                <span class="nav_menu_modal_error_sign glyphicon form-control-feedback"></span>
            </div>
<!--            <div id="cms_tworca_form_inne_warianty_desc" class="form_collapse_class collapse aller_light col-sm-offset-2 col-md-8">'.self::$DanePodstTexts['inne_warianty']['desc'].'</div>
            <span data-toggle="collapse" data-target="#cms_tworca_form_inne_warianty_desc" class="nav_menu_modal_tip_sign glyphicon glyphicon-question-sign"></span> -->
          </div>';

/* Typ twórcy */
$cms_tworca_form_dane_podst .= '
          <p class="aller_bold text-left col-sm-offset-2">'.self::$DanePodstTexts['typ_tworcy']['text'].'</p>
                    <div class="row">
                    <div id="cms_tworca_form_typ_tworcy" class="col-sm-offset-2 col-sm-8 form-group has-feedback">
                          <select name="typ_tworcy" class="form-control col-md-12">
                              <option>Typ twórcy</option>
                              <option>ciało zbiorowe</option>
                              <option>rodzina</option>
                              <option>osoba</option>
                              <option>nieznany</option>
                          </select>
                  </div>
                  <div id="cms_tworca_form_typ_tworcy_desc" class="form_collapse_class collapse aller_light col-sm-offset-2 col-md-8">'.self::$DanePodstTexts['typ_tworcy']['desc'].'</div>
                  <span data-toggle="collapse" data-target="#cms_tworca_form_typ_tworcy_desc" class="nav_menu_modal_tip_sign glyphicon glyphicon-question-sign"></span>
                  </div>';

/* Identyfikator opisu */
$cms_tworca_form_dane_podst .= '
        <p class="aller_bold text-left col-sm-offset-2">'.self::$DanePodstTexts['id_opisu']['text'].'</p>
          <div class="row">
            <div id="cms_tworca_form_id_opisu" class=" col-sm-offset-2 col-sm-8 form-group has-feedback">
              <input disabled type="text" maxlength="32" class="form-control" id="cms_tworca_form_id_opisu_input"
                style="text-align: center;" title="'.self::$DanePodstTexts['id_opisu']['ph'].'"
                placeholder="'.self::$DanePodstTexts['id_opisu']['ph'].'">
                <span class="nav_menu_modal_error_sign glyphicon form-control-feedback"></span>
            </div>
                  <div id="cms_tworca_form_id_opisu_desc" class="form_collapse_class collapse aller_light col-sm-offset-2 col-md-8">'.self::$DanePodstTexts['id_opisu']['desc'].'</div>
                  <span data-toggle="collapse" data-target="#cms_tworca_form_id_opisu_desc" class="nav_menu_modal_tip_sign glyphicon glyphicon-question-sign"></span>
          </div>';

/* Koniec lewej kolumny, początek prawej */
$cms_tworca_form_dane_podst .= '
      </div>
      <div class="col-sm-6">';

/* Daty istnienia */
$cms_tworca_form_dane_podst .= '
          <div class="row">
            <p id="cms_tworca_form_data_seria_text" class="text-left col-sm-4 aller_bold">'
              .self::$DanePodstTexts['daty_istnienia']['text'].'
            </p>
            <span data-toggle="collapse" data-target="#cms_tworca_form_tworca_desc"
              class="nav_menu_modal_tip_sign col-sm-offset-4 glyphicon glyphicon-question-sign"></span>
          </div>
          <div class="row" style="margin-left:0em;">
            <button type="button" class="btn btn-primary col-sm-3 aller_bold"
              onClick="cms_tworca_form_data_seria_add_to_row(\'przed\', \''.self::$DanePodstTexts['daty_istnienia']['title_ph']['przed_od'].'\', \''.self::$DanePodstTexts['daty_istnienia']['title_ph']['przed_do'].'\');
              cms_tworca_form_dane_podst_check_empty();">'
              .self::$DanePodstTexts['daty_istnienia']['btn']['przed'].'
            </button>
            <button type="button" style="margin-left:1em;" class="btn btn-primary col-sm-3 aller_bold"
              onClick="cms_tworca_form_data_seria_add_to_row(\'pojed\', \''.self::$DanePodstTexts['daty_istnienia']['title_ph']['pojed'].'\', \'\');
              cms_tworca_form_dane_podst_check_empty();">'
              .self::$DanePodstTexts['daty_istnienia']['btn']['pojed'].'
            </button>
          </div>
          <div class="col-sm-8" style="margin-left:1em;">
          <div class="row" id="cms_tworca_form_data_seria_main_row"></div>
          </div>
        <div class="row">
          <p id="cms_tworca_form_tworca_desc" class="text-left collapse col-sm-8 aller_light">
            '.self::$DanePodstTexts['daty_istnienia']['desc'].'
          </p>
        </div><br/>';

/* Historia twórcy */
$cms_tworca_form_dane_podst .= '
        <p class="aller_bold text-left">'.self::$DanePodstTexts['hist_tworcy']['text'].'</p>
          <div class="row">
            <div id="cms_tworca_form_hist_tworcy" class="col-sm-8 form-group has-feedback">
                <textarea name="hist_tworcy"></textarea>
            </div>
            <span data-toggle="collapse" data-target="#cms_tworca_form_hist_tworcy_desc"
              class="nav_menu_modal_tip_sign glyphicon glyphicon-question-sign"></span>
          </div>
        <div class="row">
          <p id="cms_tworca_form_hist_tworcy_desc" class="aller_light text-left collapse col-sm-8">
            '.self::$DanePodstTexts['hist_tworcy']['desc'].'
          </p>
        </div>';

/* Źródła do opisu twórcy */
$cms_tworca_form_dane_podst .= '
        <p class="aller_bold text-left">'.self::$DanePodstTexts['zrodla_opisu']['text'].'</p>
          <div class="row">
            <div id="cms_tworca_form_zrodla_opisu" class="col-sm-8 form-group has-feedback">
              <input name="zrodla_opisu" type="text" maxlength="32" class="form-control" id="cms_tworca_form_zrodla_opisu_input"
                style="text-align: center;" title="'.self::$DanePodstTexts['zrodla_opisu']['ph'].'">
                <span class="nav_menu_modal_error_sign glyphicon form-control-feedback"></span>
            </div>
            <!--<div id="cms_tworca_form_zrodla_opisu_desc" class="form_collapse_class collapse aller_light col-md-8">'.self::$DanePodstTexts['zrodla_opisu']['desc'].'</div>
            <span data-toggle="collapse" data-target="#cms_tworca_form_zrodla_opisu_desc" class="nav_menu_modal_tip_sign glyphicon glyphicon-question-sign"></span>-->
          </div>
                          <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-ok"></span> Dodaj</button>
          ';

/* Koniec drugiej kolumny i całej kategorii */
$cms_tworca_form_dane_podst .= '
      </div>

      </form>
    </div>
  </fieldset>
</div>';
?>
