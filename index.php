<?php

require "libraries/libraries.php";
echo '<link rel="stylesheet" type="text/css" href="./view/styles/form/form.css">';
echo '<script src="controler/js/ngRoute/ngRoute.js"></script></head>';

echo '<body ng-app="testApp">';
echo '<div class="row">';
echo '<div class="table-responsive col-md-offset-1 col-sm-offset-1 col-xs-offset-1 col-md-9 col-sm-9 col-xs-9">';
echo '<table class="table ">';
echo '<thead>';
            echo '<tr>';
//            '.self::$ListTexts['cms_inst_form_menu_basic_info'].'
              echo '<th>DANE PODSTAWOWE<span style="font-size: 1em;" class="badge btn-danger"></span></th>';
              echo '<th>ARCHIWIZACJA<span style="font-size: 1em;" class="badge btn-danger"></span></th>';
              echo '<th>UDOSTĘPNIANIE<span style="font-size: 1em;" class="badge btn-danger"></span></th>';
              echo '<th>PRAWA DO ZBIORU/ZESPOŁU<span style="font-size: 1em;" class="badge btn-danger"></span></th>';
              echo '<th>INDEKSY<span style="font-size: 1em;" class="badge btn-danger"></span></th>';
              echo '<th>DANE <span style="font-size: 1em;" class="badge btn-danger"></span></th>';
            echo '</tr>';
           echo '</thead>';
         echo '</table>';
       echo '</div>';
     echo '</div><br/><br/>';
echo '<div id="main_container"></div>';

echo '<div ng-view></div>';
echo '</body>'
//echo '<div id="form_wait_modal" style="top:20%;" class="modal fade" role="dialog"></div>';

?>
