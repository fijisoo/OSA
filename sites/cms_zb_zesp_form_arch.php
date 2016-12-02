<?php

/* Początek Kategorii 'Archiwizacja' Formularza Zbiotu/Zespołu */
$cms_zb_zesp_form_arch = '
<div style="display: none; opacity:0;" class="cms_zb_zesp_form_category" id="cms_zb_zesp_form_category_2">
  <fieldset '.$disabled.'>
    <div class="row">';

/* Początek lewej strony Kategorii 'Dane podstaowwe' Formularza Zbiotu/Zespołu */

/* Number nabytku */
$cms_zb_zesp_form_arch .= '
        <div class="col-sm-6">
          <div class="row">
            <p class="aller_bold text-left col-sm-offset-2 col-sm-4">'.self::$ArchTexts['id_nabytek']['text'].'</p>
            <span data-toggle="collapse" data-target="#cms_zb_zesp_form_id_nabytek_desc"
              class="nav_menu_modal_tip_sign col-sm-offset-4 glyphicon glyphicon-question-sign"></span>
          </div>
          <div class="row">
            <button class="btn btn-success col-sm-offset-3 col-sm-6 aller_bold">'.self::$ArchTexts['id_nabytek']['btn'].'</button>
          </div>
        <div class="row">
          <p id="cms_zb_zesp_form_id_nabytek_desc" class="aller_light text-left collapse col-sm-offset-2 col-sm-8">
            '.self::$ArchTexts['id_nabytek']['desc'].'
          </p>
        </div><br/>';

/* Sposob opracowania */
$cms_zb_zesp_form_arch .= '
        <p class="aller_bold text-left col-sm-offset-2">'.self::$ArchTexts['sp_opr']['text'].'</p>
          <div class="row">
            <div id="cms_zb_zesp_form_sp_opr_form" class=" col-sm-offset-2 col-sm-8 form-group has-feedback">
              <input type="text" maxlength="32" class="form-control" id="cms_zb_zesp_form_sp_opr_input"
                style="text-align: center;" title="'.self::$ArchTexts['sp_opr']['ph'].'"
                placeholder="'.self::$ArchTexts['sp_opr']['ph'].'">
                <span class="nav_menu_modal_error_sign glyphicon form-control-feedback"></span>
            </div>
          </div>';


/* Bibliografia */
$cms_zb_zesp_form_arch .= '
        <p class="aller_bold text-left col-sm-offset-2">'.self::$ArchTexts['bibliografia']['text'].'</p>
          <div class="row">
            <div id="cms_zb_zesp_form_bibliografia_form" class=" col-sm-offset-2 col-sm-8 form-group has-feedback">
                <textarea></textarea>
            </div>
            <span data-toggle="collapse" data-target="#cms_zb_zesp_form_bibliografia_desc"
              class="nav_menu_modal_tip_sign glyphicon glyphicon-question-sign"></span>
          </div>
        <div class="row">
          <p id="cms_zb_zesp_form_bibliografia_desc" class="aller_light text-left collapse col-sm-offset-2 col-sm-8">
            '.self::$ArchTexts['bibliografia']['desc'].'
          </p>
        </div>';


/* Stopień opracowania */
$cms_zb_zesp_form_arch .= '
          <div class="row">
            <p id="cms_zb_zesp_form_roz_text" class="aller_bold text-left col-sm-offset-2 col-sm-4">'.self::$ArchTexts['st_opr']['text']['main'].'</p>
            <span data-toggle="collapse" data-target="#cms_zb_zesp_form_st_opr_desc"
              class="nav_menu_modal_tip_sign col-sm-offset-4 glyphicon glyphicon-question-sign"></span>
          </div>
          <div style="margin-top:0.8em;" class="row">
            <button id="cms_zb_zesp_form_st_opr_jed_arch_btn" onClick="cms_zb_zesp_form_btn_collapse(\'st_opr_jed_arch\');"
              style="margin-right:0.2em;" class="btn col-sm-offset-2 col-sm-3 aller_bold">
              '.self::$ArchTexts['st_opr']['btn']['st_opr_jed_arch'].'
            </button>
            <button id="cms_zb_zesp_form_st_opr_m_bierz_btn" onClick="cms_zb_zesp_form_btn_collapse(\'st_opr_m_bierz\');"
              style="margin-right:0.2em;" class="btn col-sm-3 aller_bold">
              '.self::$ArchTexts['st_opr']['btn']['st_opr_m_bierz'].'
            </button>
            <button id="cms_zb_zesp_form_st_opr_mb_btn" onClick="cms_zb_zesp_form_btn_collapse(\'st_opr_mb\');"
                class="btn col-sm-3 aller_bold">
              '.self::$ArchTexts['st_opr']['btn']['st_opr_mb'].'
            </button>
          </div><br/>
          <div id="cms_zb_zesp_form_st_opr_jed_arch_form" class="row collapse form-group">
            <div class="col-sm-offset-2 col-sm-6">
              <input type="number" maxlength="16" class="form-control" id="cms_zb_zesp_form_st_opr_jed_arch_input"
              style="text-align: center;" title="'.self::$ArchTexts['st_opr']['ph']['st_opr_jed_arch'].'"
              placeholder="'.self::$ArchTexts['st_opr']['ph']['st_opr_jed_arch'].'"
              onkeypress="cms_zb_zesp_form_roz_procent(\'st_opr\',\'jed_arch\');" onkeydown="cms_zb_zesp_form_roz_procent(\'st_opr\',\'jed_arch\');" onkeyup="cms_zb_zesp_form_roz_procent(\'st_opr\',\'jed_arch\');">
              <span class="nav_menu_modal_error_sign glyphicon form-control-feedback"></span>
            </div>
            <div style="margin-top: 0.5em;" class="col-sm-3 aller_bold">
              '.self::$ArchTexts['st_opr']['text']['st_opr_jed_arch'].'
              <strong id="cms_zb_zesp_form_st_opr_jed_arch_proc"></strong>
            </div>
          </div>

          <div id="cms_zb_zesp_form_st_opr_m_bierz_form" class="row collapse form-group">
            <div class="col-sm-offset-2 col-sm-6 ">
              <input type="number" maxlength="16" step="0.01" class="form-control" id="cms_zb_zesp_form_st_opr_m_bierz_input"
              style="text-align: center;" title="'.self::$ArchTexts['st_opr']['ph']['st_opr_m_bierz'].'"
              placeholder="'.self::$ArchTexts['st_opr']['ph']['st_opr_m_bierz'].'"
              onkeypress="cms_zb_zesp_form_roz_procent(\'st_opr\',\'m_bierz\');" onkeydown="cms_zb_zesp_form_roz_procent(\'st_opr\',\'m_bierz\');" onkeyup="cms_zb_zesp_form_roz_procent(\'st_opr\',\'m_bierz\');">
              <span class="nav_menu_modal_error_sign glyphicon form-control-feedback"></span>
            </div>
            <div style="margin-top: 0.5em;" class="col-sm-3 aller_bold">
              '.self::$ArchTexts['st_opr']['text']['st_opr_m_bierz'].'
              <strong id="cms_zb_zesp_form_st_opr_m_bierz_proc"></strong>
            </div>
          </div>

          <div id="cms_zb_zesp_form_st_opr_mb_form" class="row collapse form-group">
            <div class="col-sm-offset-2 col-sm-6">
              <input type="number" maxlength="16" class="form-control" id="cms_zb_zesp_form_st_opr_mb_input"
              style="text-align: center;" title="'.self::$ArchTexts['st_opr']['ph']['st_opr_mb'].'"
              placeholder="'.self::$ArchTexts['st_opr']['ph']['st_opr_mb'].'"
              onkeypress="cms_zb_zesp_form_roz_procent(\'st_opr\',\'mb\');" onkeydown="cms_zb_zesp_form_roz_procent(\'st_opr\',\'mb\');" onkeyup="cms_zb_zesp_form_roz_procent(\'st_opr\',\'mb\');">
              <span class="nav_menu_modal_error_sign glyphicon form-control-feedback"></span>
            </div>
            <div style="margin-top: 0.5em;" class="col-sm-4 aller_bold">
              '.self::$ArchTexts['st_opr']['text']['st_opr_mb'].'
              <strong id="cms_zb_zesp_form_st_opr_mb_proc"></strong>
            </div>
          </div>
        <div class="row">
          <p id="cms_zb_zesp_form_st_opr_desc" class="aller_light text-left collapse col-sm-offset-2 col-sm-8">
            '.self::$ArchTexts['st_opr']['desc'].'
          </p>
        </div><br/>';


/* Uwagi dotyczące opracowania */
$cms_zb_zesp_form_arch .= '
        <p class="aller_bold text-left col-sm-offset-2">'.self::$ArchTexts['uwagi_opr']['text'].'</p>
          <div class="row">
            <div id="cms_zb_zesp_form_uwagi_opr_form" class=" col-sm-offset-2 col-sm-8 form-group has-feedback">
                <input type="text" maxlength="600" class="form-control" id="cms_zb_zesp_form_uwagi_opr_input"
                style="text-align: center;" title="'.self::$ArchTexts['uwagi_opr']['ph'].'"
                placeholder="'.self::$ArchTexts['uwagi_opr']['ph'].'">
                <span class="nav_menu_modal_error_sign glyphicon form-control-feedback"></span>
            </div>
            <span data-toggle="collapse" data-target="#cms_zb_zesp_form_uwagi_opr_desc"
              class="nav_menu_modal_tip_sign glyphicon glyphicon-question-sign"></span>
          </div>
        <div class="row">
          <p id="cms_zb_zesp_form_uwagi_opr_desc" class="text-left collapse col-sm-8 col-sm-offset-2 aller_light">
            '.self::$ArchTexts['uwagi_opr']['desc'].'
          </p>
        </div>';

/* Koniec lewej kolumny, początek prawej */
$cms_zb_zesp_form_arch .= '
      </div>
      <div class="col-sm-6">';

/* Stopień digitalizacji */
$cms_zb_zesp_form_arch .= '
          <div class="row">
            <p id="cms_zb_zesp_form_roz_text" class="text-left col-sm-4 aller_bold">'.self::$ArchTexts['st_dig']['text']['main'].'</p>
            <span data-toggle="collapse" data-target="#cms_zb_zesp_form_st_opr_desc"
              class="nav_menu_modal_tip_sign col-sm-offset-4 glyphicon glyphicon-question-sign"></span>
          </div>
          <div style="margin-top:0.8em;" class="row">
            <button id="cms_zb_zesp_form_st_dig_jed_arch_btn" onClick="cms_zb_zesp_form_btn_collapse(\'st_dig_jed_arch\');"
              style="margin-right:0.2em;" class="btn col-sm-4 aller_bold">
              '.self::$ArchTexts['st_dig']['btn']['st_opr_jed_arch'].'
            </button>
            <button id="cms_zb_zesp_form_st_dig_m_bierz_btn" onClick="cms_zb_zesp_form_btn_collapse(\'st_dig_m_bierz\');"
              style="margin-right:0.2em;" class="btn col-sm-4 aller_bold">
              '.self::$ArchTexts['st_dig']['btn']['st_opr_m_bierz'].'
            </button>
          </div><br/>
          <div id="cms_zb_zesp_form_st_dig_jed_arch_form" class="row collapse form-group">
            <div class="col-sm-6">
              <input type="number" maxlength="16" class="form-control" id="cms_zb_zesp_form_st_dig_jed_arch_input"
              style="text-align: center;" title="'.self::$ArchTexts['st_dig']['ph']['st_opr_jed_arch'].'"
              placeholder="'.self::$ArchTexts['st_dig']['ph']['st_opr_jed_arch'].'"
              onkeypress="cms_zb_zesp_form_roz_procent(\'st_dig\',\'jed_arch\');" onkeydown="cms_zb_zesp_form_roz_procent(\'st_dig\',\'jed_arch\');" onkeyup="cms_zb_zesp_form_roz_procent(\'st_dig\',\'jed_arch\');">
              <span class="nav_menu_modal_error_sign glyphicon form-control-feedback"></span>
            </div>
            <div style="margin-top: 0.5em;" class="col-sm-3 aller_bold">
              '.self::$ArchTexts['st_opr']['text']['st_opr_jed_arch'].'
              <strong id="cms_zb_zesp_form_st_dig_jed_arch_proc"></strong>
            </div>
          </div>

          <div id="cms_zb_zesp_form_st_dig_m_bierz_form" class="row collapse form-group">
            <div class="col-sm-6 ">
              <input type="number" maxlength="16" step="0.01" class="form-control" id="cms_zb_zesp_form_st_dig_m_bierz_input"
              style="text-align: center;" title="'.self::$ArchTexts['st_dig']['ph']['st_opr_m_bierz'].'"
              placeholder="'.self::$ArchTexts['st_dig']['ph']['st_opr_m_bierz'].'"
              onkeypress="cms_zb_zesp_form_roz_procent(\'st_dig\',\'m_bierz\');" onkeydown="cms_zb_zesp_form_roz_procent(\'st_dig\',\'m_bierz\');" onkeyup="cms_zb_zesp_form_roz_procent(\'st_dig\',\'m_bierz\');">
              <span class="nav_menu_modal_error_sign glyphicon form-control-feedback"></span>
            </div>
            <div style="margin-top: 0.5em;" class="col-sm-3 aller_bold">
              '.self::$ArchTexts['st_dig']['text']['st_opr_m_bierz'].'
              <strong id="cms_zb_zesp_form_st_dig_m_bierz_proc"></strong>
            </div>
          </div>
        <div class="row">
          <p id="cms_zb_zesp_form_st_dig_desc" class="text-left collapse col-sm-offset-2 col-sm-8 aller_light">
            '.self::$ArchTexts['st_dig']['desc'].'
          </p>
        </div><br/>';


/* Uwagi dotyczące digitalizacji */
$cms_zb_zesp_form_arch .= '
        <p class=" aller_bold text-left">'.self::$ArchTexts['uwagi_dig']['text'].'</p>
          <div class="row">
            <div id="cms_zb_zesp_form_uwagi_dig_form" class=" col-sm-8 form-group has-feedback">
                <input type="text" maxlength="600" class="form-control" id="cms_zb_zesp_form_uwagi_dig_input"
                style="text-align: center;" title="'.self::$ArchTexts['uwagi_opr']['ph'].'"
                placeholder="'.self::$ArchTexts['uwagi_dig']['ph'].'">
                <span class="nav_menu_modal_error_sign glyphicon form-control-feedback"></span>
            </div>
            <span data-toggle="collapse" data-target="#cms_zb_zesp_form_uwagi_dig_desc"
              class="nav_menu_modal_tip_sign glyphicon glyphicon-question-sign"></span>
          </div>
        <div class="row">
          <p id="cms_zb_zesp_form_uwagi_dig_desc" class="text-left collapse col-sm-8 aller_light">
            '.self::$ArchTexts['uwagi_dig']['desc'].'
          </p>
        </div>';

/* Rozmiar po zdigitalizowaniu */
$cms_zb_zesp_form_arch .= '
          <div class="row">
            <p id="cms_zb_zesp_form_roz_po_zdig_text" class="text-left col-sm-4 aller_bold">'.self::$ArchTexts['roz_po_zdig']['text']['main'].'</p>
            <span data-toggle="collapse" data-target="#cms_zb_zesp_form_st_opr_desc"
              class="nav_menu_modal_tip_sign col-sm-offset-4 glyphicon glyphicon-question-sign"></span>
          </div>
          <div style="margin-top:0.8em;" class="row">
            <button id="cms_zb_zesp_form_roz_po_zdig_pliki_btn" onClick="cms_zb_zesp_form_btn_collapse(\'roz_po_zdig_pliki\');"
              style="margin-right:0.2em;" class="btn col-sm-4 aller_bold">
              '.self::$ArchTexts['st_dig']['btn']['st_opr_jed_arch'].'
            </button>
            <button id="cms_zb_zesp_form_roz_po_zdig_mb_btn" onClick="cms_zb_zesp_form_btn_collapse(\'roz_po_zdig_mb\');"
              style="margin-right:0.2em;" class="btn col-sm-4 aller_bold">
              '.self::$ArchTexts['st_dig']['btn']['st_opr_m_bierz'].'
            </button>
          </div><br/>
          <div id="cms_zb_zesp_form_roz_po_zdig_pliki_form" class="row collapse form-group">
            <div class="col-sm-6">
              <input type="number" maxlength="16" class="form-control" id="cms_zb_zesp_form_roz_po_zdig_pliki_input"
              style="text-align: center;" title="'.self::$ArchTexts['roz_po_zdig']['ph']['roz_po_zdig_pliki'].'"
              placeholder="'.self::$ArchTexts['roz_po_zdig']['ph']['roz_po_zdig_pliki'].'">
              <span class="nav_menu_modal_error_sign glyphicon form-control-feedback"></span>
            </div>
            <div style="margin-top: 0.5em;" class="col-sm-3 aller_bold">
              '.self::$ArchTexts['st_opr']['text']['st_opr_jed_arch'].'
              <strong id="cms_zb_zesp_form_st_dig_jed_arch_proc"></strong>
            </div>
          </div>

          <div id="cms_zb_zesp_form_st_dig_m_bierz_form" class="row collapse form-group">
            <div class="col-sm-6 ">
              <input type="number" maxlength="16" step="0.01" class="form-control" id="cms_zb_zesp_form_st_dig_m_bierz_input"
              style="text-align: center;" title="'.self::$ArchTexts['st_dig']['ph']['st_opr_m_bierz'].'"
              placeholder="'.self::$ArchTexts['st_dig']['ph']['st_opr_m_bierz'].'">
              <span class="nav_menu_modal_error_sign glyphicon form-control-feedback"></span>
            </div>
            <div style="margin-top: 0.5em;" class="col-sm-3 aller_bold">
              '.self::$ArchTexts['st_dig']['text']['st_opr_m_bierz'].'
              <strong id="cms_zb_zesp_form_st_dig_m_bierz_proc"></strong>
            </div>
          </div>
        <div class="row">
          <p id="cms_zb_zesp_form_st_dig_desc" class="text-left collapse col-sm-offset-2 col-sm-8 aller_light">
            '.self::$ArchTexts['st_dig']['desc'].'
          </p>
        </div><br/>';



/* Koniec drugiej kolumny i całej kategorii */
$cms_zb_zesp_form_arch .= '
      </div>
    </div>
  </fieldset>
</div>';
?>
