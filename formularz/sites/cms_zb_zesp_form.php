<?php

class setUpZbiorZespol{

  public static $conn;
  public static $MenuTexts;


  function __construct(){
    /* Zmienne które będą pobierane z innych klas z OSY -
     tutaj zdefiniowane na twardo i musisz wpisać w db_name nazwę bazy danych gdzie masz tą tablice */
    $language = 'pl';

    /* Pobieranie phpów z mapowanymi tablicami z textem ($language określa język)
          - zrobiłem tylko jedną tablice do menu dlatego reszte zakryłem */
    require 'resources/languages/text/'.$language.'/cms_zb_zesp_form/cms_zb_zesp_form_menu_text.php';


    //Wszystkie wartości tablicy z pliku "cms_zb_zesp_form_menu_text" zapisywane do ogólnej zmiennej $MenuTexts
    self::$MenuTexts = $cms_zb_zesp_form_menu_text;

  }


  public function cms_zb_zesp_form_fill(){
    /* table_id i $user_up to też zmienne z innych funkcji które łączą się z innymi klasami
      więc podobnie jak w kontruktorze na twardo */
    $table_id = 1;
    $user_upr_edycja = true;
    //----------------------------------------------------------------------

    // $disabled jest od tego aby wyłączać możliwość edycji w inputach i textareach
    $diabled = "";
    if(!$user_upr_edycja) $diabled = "disabled";

    $site_cms_zb_zesp_form = '';

    //Pobieranie menu (tutaj pokazane jak teksty działają)
    require "cms_zb_zesp_form_menu.php";
    $site_cms_zb_zesp_form .= $cms_zb_zesp_form_menu;

    //Ponieranie kategorii Danych postawowych
    require "cms_zb_zesp_form_dane_podst.php";
    $site_cms_zb_zesp_form .= $cms_zb_zesp_form_dane_podst;


    //Tutaj masz inicjowanie tinymce - dzięki czemu tinymce w ogóle działa
    $disabled_textarea = (!$user_upr_edycja) ? 1 : 0;
    $tinymce_init= '
    <script>
    tinymce.init({

    selector: \'textarea\',
     menubar: false,
    theme: \'modern\',
    readonly: '.$disabled_textarea.',

    toolbar1: \'insertfile undo redo | styleselect | bullist numlist outdent indent \',

    content_css: [
      \'//fonts.googleapis.com/css?family=Lato:300,300i,400,400i\',
      \'//www.tinymce.com/css/codepen.min.css\'
    ]
      });</script>
    ';

    /* A tutaj inicjowanie bootstrap select - musi być tutaj inaczje nie działa
      Tu masz przykłady https://silviomoreto.github.io/bootstrap-select/examples/ */
    $bootstrap_select = '
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.11.2/css/bootstrap-select.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.11.2/js/bootstrap-select.min.js"></script>
    ';


    $site_cms_zb_zesp_form = $tinymce_init . $bootstrap_select . $site_cms_zb_zesp_form;

    return $site_cms_zb_zesp_form;
  }

}

//Inicjowanie klasy
$setUpZbiorZespol = new setUpZbiorZespol();
echo $setUpZbiorZespol->cms_zb_zesp_form_fill();

?>
