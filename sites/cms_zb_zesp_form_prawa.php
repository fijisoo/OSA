<?php

/* Początek Kategorii 'Prawa do zbioru/zespolu' Formularza Zbiotu/Zespołu */
$cms_zb_zesp_form_prawa = '
<div style="display: none; opacity:0;" class="cms_zb_zesp_form_category" id="cms_zb_zesp_form_category_4">
  <fieldset '.$disabled.'>
      <div class="row">';

//POSIADACZ PRAW
$cms_zb_zesp_form_prawa .= '
    <div class="col-md-6">
        <div class="row form-group">
            <label class="aller_bold col-sm-offset-2 col-form-label col-md-8">'.self::$PrawaTexts['pos_praw']['text'].'</label>
            <span data-toggle="collapse" data-target="#cms_zb_zesp_form_pos_praw" class="nav_menu_modal_tip_sign glyphicon glyphicon-question-sign"></span>
            <div class="col-sm-offset-2 col-md-8">
                <input type="text" id="form_input1" class="form-control">
            </div>
            <div id="cms_zb_zesp_form_pos_praw" class="form_collapse_class collapse aller_light col-md-8 col-md-offset-2">'.self::$PrawaTexts['pos_praw']['desc'].'</div>
        </div>';

//RESTRYKCJE DOTYCZĄCE WYKORZYSTANIA
$cms_zb_zesp_form_prawa .= '
        <div class="row form-group">
            <label class="aller_bold col-sm-offset-2 col-form-label col-md-8">'.self::$PrawaTexts['rest_do_wykorz']['text'].'</label>
            <span data-toggle="collapse" data-target="#cms_zb_zesp_form_rest_do_wykorz" class="nav_menu_modal_tip_sign glyphicon glyphicon-question-sign"></span>
            <div class="col-sm-offset-2 col-md-8">
                <textarea></textarea>
            </div>
            <div id="cms_zb_zesp_form_rest_do_wykorz" class="col-sm-offset-2 form_collapse_class collapse aller_light col-md-8">'.self::$PrawaTexts['rest_do_wykorz']['desc'].'</div>
        </div>';

//MOŻLIWE POLA EKSPLOATACJI
    $cms_zb_zesp_form_prawa .= '
        <div class="row form-group">
            <label class="aller_bold col-sm-offset-2 col-form-label col-md-8">'.self::$PrawaTexts['pol_ekspo']['text'].'</label>
            <span data-toggle="collapse" data-target="#cms_zb_zesp_form_pol_ekspo" class="nav_menu_modal_tip_sign glyphicon glyphicon-question-sign"></span>
            <div class="col-sm-offset-2 col-md-8">
            <textarea></textarea>
            </div>
            <div id="cms_zb_zesp_form_pol_ekspo" class="col-sm-offset-2 form_collapse_class collapse aller_light col-md-8">'.self::$PrawaTexts['pol_ekspo']['desc'].'</div>
        </div>';


/* Koniec lewej kolumny, początek prawej */
$cms_zb_zesp_form_prawa .= '
    </div>
    <div class="col-md-6">';

//LICENCJA
$cms_zb_zesp_form_prawa .= '
        <div class="row form-group">
            <label class="aller_bold col-form-label col-md-8">'.self::$PrawaTexts['id_licencja']['text'].'</label>
            <span data-toggle="collapse" data-target="#cms_zb_zesp_form_id_licencja" class="nav_menu_modal_tip_sign glyphicon glyphicon-question-sign"></span>
            <div class="col-md-8">
                <select class="form-control col-md-10">
                    <option>Domena publiczna</option>
                    <option>Brak informacji o ograniczeniach wynikających z prawa autorskiego</option>
                    <option>Creative Commons Uznanie Autorstwa (CC-BY)</option>
                    <option>Creative Commons Uznanie Autorstwa - Użycie Niekomercyjne (CC-BY-NC)</option>
                    <option>Creative Commons Uznanie Autorstwa - Użycie Niekomercyjne - Na Tych Samych Warunkach(CC-BY-NC-SA)</option>
                    <option>Creative Commons Uznanie Autorstwa - Użycie Niekomercyjne - Bez Utworów Zależnych (CC-BY-NC-ND)</option>
                    <option>Creative Commons Uznanie Autorstwa - Na Tych Samych Warunkach (CC-BY-SA)</option>
                    <option>Creative Commons Uznanie Autorstwa - Bez Utworów Zależnych (CC-BY-ND)</option>
                    <option>Wszelkie Prawa Zastrzeżone</option>
                </select>
            </div>
            <div id="cms_zb_zesp_form_id_licencja" class="form_collapse_class collapse aller_light col-md-8">'.self::$PrawaTexts['id_licencja']['desc'].'</div>
        </div>';

//DOKUMENT POŚWIADCZAJĄCY
$cms_zb_zesp_form_prawa .= '
        <div class="row form-group">
            <label class="aller_bold col-md-8 col-form-label">'.self::$PrawaTexts['dok_posw']['text'].'</label>
            <span data-toggle="collapse" data-target="#cms_zb_zesp_form_dok_posw" class="nav_menu_modal_tip_sign glyphicon glyphicon-question-sign"></span>
            <div class="col-md-8">
                <textarea></textarea>
            </div>
            <div id="cms_zb_zesp_form_dok_posw" class="form_collapse_class collapse aller_light col-md-8">'.self::$PrawaTexts['dok_posw']['desc'].'</div>
        </div>';



//UWAGI
$cms_zb_zesp_form_prawa .= '
        <div class="row form-group">
            <label class="aller_bold col-md-8 col-form-label">'.self::$PrawaTexts['uwagi_pr_do_zb']['text'].'</label>
            <span data-toggle="collapse" data-target="#cms_zb_zesp_form_uwagi_pr_do_zb" class="nav_menu_modal_tip_sign glyphicon glyphicon-question-sign"></span>
            <div class="col-md-8">
                <textarea></textarea>
            </div>
            <div id="cms_zb_zesp_form_uwagi_pr_do_zb" class="form_collapse_class collapse aller_light col-md-8">'.self::$PrawaTexts['uwagi_pr_do_zb']['desc'].'</div>
        </div>';


/* Koniec drugiej kolumny i całej kategorii */
$cms_zb_zesp_form_prawa .= '
        </div>
    </div>
  </fieldset>
</div>';
?>