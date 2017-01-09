<?php

$cms_tworca_form_menu = '
'.self::$MenuTexts['main_warning_status'].'
<div class="row">
  <div class="table-responsive col-md-offset-1 col-sm-offset-1 col-xs-offset-1 col-md-10 col-sm-10 col-xs-10">
    <table class="table ">
      <thead>
        <tr>
          <th class="cms_tworca_form_menu_select pull-left" id="cms_tworca_form_menu_select_1" onClick="changeCategory(\'1\');">'.self::$MenuTexts['menu_dane_podst'].'<span style="font-size: 0.8em;" class="badge btn-warning"></span><span style="font-size: 1em;" class="badge btn-danger"></span></th>
          <th class="cms_tworca_form_menu_select pull-left" id="cms_tworca_form_menu_select_2" onClick="changeCategory(\'2\');">'.self::$MenuTexts['menu_indeksy'].'<span style="font-size: 1em;" class="badge btn-danger"></span></th>
        </tr>
      </thead>
    </table>
  </div>
</div><br/>
';

?>
