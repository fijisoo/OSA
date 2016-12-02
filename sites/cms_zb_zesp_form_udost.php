<?php

/* Początek Kategorii 'Archiwizacja' Formularza Zbiotu/Zespołu */
$cms_zb_zesp_form_udost = '
<div style="display: none; opacity:0;" class="cms_zb_zesp_form_category" id="cms_zb_zesp_form_category_3">
  <fieldset '.$disabled.'>
    <div class="row">';

/* Początek lewej strony Kategorii 'Dane podstaowwe' Formularza Zbiotu/Zespołu */
/* DOSTĘPNOŚĆ */
$cms_zb_zesp_form_udost .= '
            <div class="col-md-6">
            <div class="row form-group">
            <label class="aller_bold col-sm-offset-2 col-form-label col-md-8">'.self::$UdostTexts['id_dost']['text'].'</label>
            <span data-toggle="collapse" data-target="#cms_zb_zesp_form_dost_desc"
                          class="nav_menu_modal_tip_sign glyphicon glyphicon-question-sign"></span>
            <div class="col-sm-offset-2 col-md-10" style="padding-left: 0px">
                  <select class="aller_light col-sm-offset-2 col-sm-10 selectpicker" title="Wybierz dostępność" data-size="8" multiple data-live-search="false">
                    <option data-tokens="nie niedostepne" value="nie">Niedostępne</option>
                    <option data-tokens="oryg oryginalydostepnenamiejscu" value="oryg">Oryginały dostępne na miejscu</option>
                    <option data-tokens="nm wersjacyfrowanamiejscu" value="nm">Wersja cyfrowa dostepna na miejscu</option>
                    <option data-tokens="net wersjacyfrowawinternecie" value="net">Wersja cyfrowa dostępna w Internecie</option>
                    <option data-tokens="cz czesczbioru" value="cz">Część zbioru/zespołu zastrzeżona</option>
                    <option data-tokens="udost udostepnione" value="udost">Udostępnianie wyłącznie pomocy archiwalnej do zbioru/zespołu np. inwentarz</option>
                 </select>
            </div>
            <div id="cms_zb_zesp_form_dost_desc" class="col-sm-offset-2 collapse col-md-8"><p class="aller_light"><i>'.self::$UdostTexts['id_dost']['desc'].'</i></p></div>
            </div>';

/* MIEJSCE DOSTĘPU W INTERNECIE [ŹRÓDŁO] */
$cms_zb_zesp_form_udost .= '
    <div class="row form-group">
        <label class="aller_bold col-sm-offset-2 col-form-label col-md-8">'.self::$UdostTexts['miej_dost_www']['text'].'</label>
        <span data-toggle="collapse" data-target="#cms_zb_zesp_form_miej_dost_www"
                                  class="nav_menu_modal_tip_sign glyphicon glyphicon-question-sign"></span>
        <div class="col-sm-offset-2 col-md-8">
            <textarea></textarea>
        </div>
        <div id="cms_zb_zesp_form_miej_dost_www" class="col-sm-offset-2 form_collapse_class collapse col-md-8"><p class="aller_light"><i>'.self::$UdostTexts['miej_dost_www']['desc'].'</i></p></div>
    </div>';

//POMOCE ARCHIWALNE
    $cms_zb_zesp_form_udost .= '
        <div class="row form-group">
            <label class="aller_bold col-sm-offset-2 col-form-label col-md-8">'.self::$UdostTexts['pom_arch']['text'].'</label>
            <span data-toggle="collapse" data-target="#cms_zb_zesp_form_pom_arch"
                                      class="nav_menu_modal_tip_sign glyphicon glyphicon-question-sign"></span>
            <div class="col-sm-offset-2 col-md-8">
                <label style="margin-bottom: 0.2em" class="aller_bold btn btn-default btn-file">
                    '.self::$UdostTexts['pom_arch']['bttn'].'<input type="file" style="display: none;" multiple>
                </label>
                <textarea></textarea>
            </div>
            <div id="cms_zb_zesp_form_pom_arch" class="col-sm-offset-2 form_collapse_class collapse col-md-8"><p class="aller_light"><i>'.self::$UdostTexts['pom_arch']['desc'].'</i></p></div>
        </div>';

/* Koniec lewej kolumny, początek prawej */
$cms_zb_zesp_form_udost .= '
    </div>
    <div class="col-md-6">';

/* WARUNKI REPRODUKOWANIA */
$cms_zb_zesp_form_udost .= '
        <div class="row form-group">
            <label class="aller_bold col-md-8 col-form-label">'.self::$UdostTexts['war_reprod']['text'].'</label>
            <span data-toggle="collapse" data-target="#cms_zb_zesp_form_war_reprod"
                                      class="nav_menu_modal_tip_sign glyphicon glyphicon-question-sign"></span>
            <div class="col-md-8">
                <textarea></textarea>
            </div>
            <div id="cms_zb_zesp_form_war_reprod" class="form_collapse_class collapse col-md-8"><p class="aller_light"><i>'.self::$UdostTexts['war_reprod']['desc'].'</i></p></div>
        </div>';

/* UWAGI */
$cms_zb_zesp_form_udost .= '
        <div class="row form-group">
            <label class="aller_bold col-form-label col-md-8">'.self::$UdostTexts['uwagi_udost']['text'].'</label>
            <div class="col-md-8">
                <textarea></textarea>
            </div>
        </div>';


/* Koniec drugiej kolumny i całej kategorii */
$cms_zb_zesp_form_udost .= '
      </div>
    </div>
  </fieldset>
</div>';
?>