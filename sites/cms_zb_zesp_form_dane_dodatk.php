<?php

/* Początek Kategorii 'Prawa do zbioru/zespolu' Formularza Zbiotu/Zespołu */
$cms_zb_zesp_form_dane_dodatk = '
<div style="display: none; opacity:0;" class="cms_zb_zesp_form_category" id="cms_zb_zesp_form_category_6">
  <fieldset '.$disabled.'>
      <div class="row">';

//POWIĄZANIA
$cms_zb_zesp_form_dane_dodatk .= '
    <div class="col-md-6 col-md-offset-3">
        <div class="row form-group">
            <label class="aller_bold col-form-label col-md-10">'.self::$DaneDodatkTexts['dane_dod_pow']['text'].'</label>
            <span data-toggle="collapse" data-target="#cms_zb_zesp_form_dane_dod_pow" class="nav_menu_modal_tip_sign glyphicon glyphicon-question-sign form_tip_sign"></span>
            <div class="col-md-10">
                <textarea on></textarea>
            </div>
            <div id="cms_zb_zesp_form_dane_dod_pow" class="form_collapse_class collapse aller_light col-md-10">'.self::$DaneDodatkTexts['dane_dod_pow']['desc'].'</div>
        </div>';

//UBYTKI I PRZESUNIĘCIA
$cms_zb_zesp_form_dane_dodatk .= '
        <div class="row form-group">
            <label class="aller_bold col-form-label col-md-10">'.self::$DaneDodatkTexts['dane_dod_ubyt_przes']['text'].'</label>
            <span data-toggle="collapse" data-target="#cms_zb_zesp_form_dane_dod_ubyt_przes" class="nav_menu_modal_tip_sign glyphicon glyphicon-question-sign form_tip_sign"></span>
            <div class="col-md-10">
                <textarea></textarea>
            </div>
            <div id="cms_zb_zesp_form_dane_dod_ubyt_przes" class="form_collapse_class collapse aller_light col-md-10">'.self::$DaneDodatkTexts['dane_dod_ubyt_przes']['desc'].'</div>
        </div>';

//INNE
$cms_zb_zesp_form_dane_dodatk .= '
        <div class="row form-group">
            <label class="aller_bold col-form-label col-md-10">'.self::$DaneDodatkTexts['dane_dod_inne']['text'].'</label>
            <span data-toggle="collapse" data-target="#cms_zb_zesp_form_dane_dod_inne" class="nav_menu_modal_tip_sign glyphicon glyphicon-question-sign form_tip_sign"></span>
            <div class="col-md-10">
                <textarea></textarea>
            </div>
            <div id="cms_zb_zesp_form_dane_dod_inne" class="form_collapse_class collapse aller_light col-md-10">'.self::$DaneDodatkTexts['dane_dod_inne']['desc'].'</div>
        </div>
    </div>';

/* Koniec drugiej kolumny i całej kategorii */
$cms_zb_zesp_form_dane_dodatk .= '
    </div>
  </fieldset>
</div>';
?>