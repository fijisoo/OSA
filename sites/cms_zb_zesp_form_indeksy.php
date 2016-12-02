<?php

/* Początek Kategorii 'Indeksy' Formularza Zbiotu/Zespołu */
$cms_zb_zesp_form_indeksy = '
<div style="display: none; opacity:0;" class="cms_zb_zesp_form_category" id="cms_zb_zesp_form_category_5">
  <fieldset '.$disabled.'>
      <div class="row">';

//INDEKS GEOGRAFICZNY
$cms_zb_zesp_form_indeksy .= '
<div class="row">
    <div class="col-md-6 col-md-offset-3">
        <div class="row form-group">
            <label class="aller_bold col-form-label col-sm-offset-3 col-sm-6">'.self::$IndeksyTexts['id_indeksy_geo']['text'].'</label>
            <span data-toggle="collapse" data-target="#cms_zb_zesp_form_id_indeksy_geo" class="nav_menu_modal_tip_sign glyphicon glyphicon-question-sign"></span>

            <div class="col-md-12 text-center">
                                            <button id="cms_zb_zesp_form_roz_m_bierz_btn" onClick="cms_zb_zesp_form_btn_collapse(\'xxxxx\');"
                                                          style="margin-right:0.2em; margin-top:0.2em" class="btn col-sm-offset-3 col-sm-6 aller_bold">
                                                          '.self::$IndeksyTexts['id_indeksy_geo']['bttn'].'
                                                        </button>
            </div>
            <div id="cms_zb_zesp_form_id_indeksy_geo" class="form_collapse_class collapse aller_light col-md-12">'.self::$IndeksyTexts['id_indeksy_geo']['desc'].'</div>
        </div>
        </div>
    </div>';

//INDEKS RZECZOWY
$cms_zb_zesp_form_indeksy .= '
<div class="row">
    <div class="col-md-6 col-md-offset-3">
        <div class="row form-group">
            <label class="aller_bold col-form-label col-sm-offset-3 col-sm-6">'.self::$IndeksyTexts['id_indeksy_rzecz']['text'].'</label>
            <span data-toggle="collapse" data-target="#cms_zb_zesp_form_id_indeksy_rzecz" class="nav_menu_modal_tip_sign glyphicon glyphicon-question-sign"></span>

                        <div class="col-md-12 text-center">
                                                        <button id="cms_zb_zesp_form_roz_m_bierz_btn" onClick="cms_zb_zesp_form_btn_collapse(\'xxxxx\');"
                                                                      style="margin-right:0.2em; margin-top:0.2em" class="btn col-sm-offset-3 col-sm-6 aller_bold">
                                                                      '.self::$IndeksyTexts['id_indeksy_rzecz']['bttn'].'
                                                                    </button>
                        </div>
            <div id="cms_zb_zesp_form_id_indeksy_rzecz" class="form_collapse_class collapse aller_light col-md-12">'.self::$IndeksyTexts['id_indeksy_rzecz']['desc'].'</div>
        </div>
        </div>
    </div>';

//INDEKS OSOBOWY
$cms_zb_zesp_form_indeksy .= '
<div class="row">
    <div class="col-md-6 col-md-offset-3">
        <div class="row form-group">
            <label class="aller_bold col-form-label col-sm-offset-3 col-sm-6">'.self::$IndeksyTexts['id_indeksy_osob']['text'].'</label>
            <span data-toggle="collapse" data-target="#cms_zb_zesp_form_id_indeksy_osob" class="nav_menu_modal_tip_sign glyphicon glyphicon-question-sign"></span>

                                    <div class="col-md-12 text-center">
                                                                    <button id="cms_zb_zesp_form_roz_m_bierz_btn" onClick="cms_zb_zesp_form_btn_collapse(\'xxxxx\');"
                                                                                  style="margin-right:0.2em; margin-top:0.2em" class="btn col-sm-offset-3 col-sm-6 aller_bold">
                                                                                  '.self::$IndeksyTexts['id_indeksy_osob']['bttn'].'
                                                                                </button>
                                    </div>
            <div id="cms_zb_zesp_form_id_indeksy_osob" class="form_collapse_class collapse aller_light col-md-12">'.self::$IndeksyTexts['id_indeksy_osob']['desc'].'</div>
        </div>
        </div>
    </div>';


/* Koniec drugiej kolumny i całej kategorii */
$cms_zb_zesp_form_indeksy .= '
    </div>
  </fieldset>
</div>';
?>