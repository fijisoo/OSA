<?php

//Definiowanie linków URL do Bibliotek jquery,angulara i bootstrapa, boostrapa select oraz (angular) ui boostrap tpls

$jquery_js = "https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js";

$angularjs_min_js = "https://ajax.googleapis.com/ajax/libs/angularjs/1.5.7/angular.min.js";
$angularjs_route_js = "https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.5.7/angular-route.js";

$bootstrap_min_css = "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css";
$bootstrap_theme_min_css = "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css";
$bootstrap_min_js = "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js";

$bootstrap_select_css = "https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.10.0/css/bootstrap-select.min.css";
$bootstrap_select_js = "https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.10.0/js/bootstrap-select.min.js";

$ui_bootstrap_tpls = "https://cdnjs.cloudflare.com/ajax/libs/angular-ui-bootstrap/2.0.0/ui-bootstrap-tpls.min.js";


//Definiowanie linków lokalnych do Bibliotek jquery,angulara i bootstrapa, boostrapa select oraz (angular) ui boostrap tpls

$jquery_js_local = "./libraries/jquery/1.12.4/jquery.min.js";

$angularjs_min_js_local = "./libraries/angularjs/1.5.7/angular.min.js";
$angularjs_route_js_local = "./libraries/angularjs/1.5.7/angular-route.js";

$bootstrap_min_css_local = "./libraries/bootstrap/3.3.6/css/bootstrap.min.css";
$bootstrap_theme_min_css_local = "./libraries/bootstrap/3.3.6/css/bootstrap-theme.min.css";
$bootstrap_min_js_local = "./libraries/bootstrap/3.3.6/js/bootstrap.min.js";

$bootstrap_select_css_local = "./libraries/bootstrap/bootstrap_select/1.10.0/bootstrap-select.min.css";
$bootstrap_select_js_local = "./libraries/bootstrap/bootstrap_select/1.10.0/bootstrap-select.min.js";

$ui_bootstrap_tpls_local = "./libraries/bootstrap/ui_bootstrap_tpls/2.0.0/ui-bootstrap-tpls-2.0.0.min.js";



//Sprawdzanie czy pliki bibliotek znajdują się w folderach lokalnie, jeśli tak ścieżki są zmieniane na lokalne

if(file_exists($jquery_js_local)){ $jquery_js = $jquery_js_local; }

if(file_exists($angularjs_min_js_local)){ $angularjs_min_js = $angularjs_min_js_local; }
if(file_exists($angularjs_route_js_local)){ $angularjs_route_js = $angularjs_route_js_local; }

if(file_exists($bootstrap_min_css_local)){ $bootstrap_min_css = $bootstrap_min_css_local; }
if(file_exists($bootstrap_theme_min_css_local)){ $bootstrap_theme_min_css = $bootstrap_theme_min_css_local; }
if(file_exists($bootstrap_min_js_local)){ $bootstrap_min_js = $bootstrap_min_js_local; }

if(file_exists($bootstrap_select_css_local)){ $bootstrap_select_css = $bootstrap_select_css_local; }
if(file_exists($bootstrap_select_js_local)){ $bootstrap_select_js = $bootstrap_select_js_local; }

if(file_exists($ui_bootstrap_tpls_local)){ $ui_bootstrap_tpls = $ui_bootstrap_tpls_local; }


//Inicjowanie bibliotek względem ścieżek sprawdzonych wyżej

echo '<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="Shortcut icon" href="./img/icon/favicon.ico" />

<script src="'.$jquery_js.'"></script>

<script src="'.$angularjs_min_js.'"></script>
<script src="'.$angularjs_route_js.'"></script>

<link rel="stylesheet" type="text/css" href="'.$bootstrap_min_css.'">
<link rel="stylesheet" type="text/css" href="'.$bootstrap_theme_min_css.'">
<script src="'.$bootstrap_min_js.'"></script>


<link rel="stylesheet" type="text/css" href="'.$bootstrap_select_css.'">
<script src="'.$bootstrap_select_js.'"></script>

<script src="'.$ui_bootstrap_tpls.'"></script>

<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
</head>';

?>
