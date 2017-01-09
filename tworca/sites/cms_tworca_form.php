<?php

class setUpTworca{

  public static $conn;
  public static $MenuTexts;
  public static $DanePodstTexts;
  public static $IndeksyTexts;

  function __construct(){
    /* Zmienne które będą pobierane z innych klas z OSY -
     tutaj zdefiniowane na twardo i musisz wpisać w db_name nazwę bazy danych gdzie masz tą tablice */
    $language = 'pl';
    $server   = 'localhost';
    $login    = 'root';
    $passwd   = '';
    $db_name  = 'osa_seria_dom';
    //-----------------------------------------------------------------------------------

    /* Pobieranie phpów z mapowanymi tablicami z textem ($language określa język)
          - zrobiłem tylko jedną tablice do menu dlatego reszte zakryłem */
    require 'resources/languages/text/'.$language.'/cms_tworca_form/cms_tworca_form_menu_text.php';
    require 'resources/languages/text/'.$language.'/cms_tworca_form/cms_tworca_form_dane_podst_text.php';
    require 'resources/languages/text/'.$language.'/cms_tworca_form/cms_tworca_form_indeksy_text.php';

    /*
    self::$conn = mysqli_connect($server, $login, $passwd, $db_name);
    mysqli_query(self::$conn , "SET character_set_results = 'utf8'");
    mysqli_set_charset(self::$conn,"utf8");
    */

    //Wszystkie wartości tablicy z pliku "cms_zb_zesp_form_menu_text" zapisywane do ogólnej zmiennej $MenuTexts
    self::$MenuTexts       = $cms_tworca_form_menu_text;
    self::$DanePodstTexts  = $cms_tworca_form_dane_podst_text;
    self::$IndeksyTexts    = $cms_tworca_form_indeksy_text;

  }

  public function cms_tworca_form_check_data($table_id){

    //Najpierw pobiera nazwy kolumn z tablicy
    $query_columns_info = 'SELECT DISTINCT column_name FROM   information_schema.columns
      WHERE  table_name = "seria"';

    $fields_columns_info = array();
    if($validst_columns_info = mysqli_query(self::$conn , $query_columns_info)){
      while ($data_columns_info = $validst_columns_info->fetch_row()) {$fields_columns_info[] = $data_columns_info;}
    }

    //Później dane od wyznaczonego id
    $query_db_data = 'SELECT * FROM seria WHERE id="'.$table_id.'"';
    $fields_db_data = array();
    if($validst_db_data = mysqli_query(self::$conn , $query_db_data)){
      $fields_db_data = $validst_db_data->fetch_row();
    }

    /*Jeśli jest pusta (znaczy to że id złe albo że formularz używany do wpisywania nowych danych)
      To ta zmienna odpowiada aby wpisywało w tablce puste wartości*/
    $if_db_data_not_null = (sizeof($fields_db_data)) ? true : false;

    $fiels_array = array();
    for($i = 0; $i<sizeof($fields_columns_info); $i++){
      $current_db_data = '';
      if($if_db_data_not_null) $current_db_data = $fields_db_data[$i];

      $fiels_array[$fields_columns_info[$i][0]] = $current_db_data;
    }

    return $fiels_array;
  }

  public function cms_tworca_form_fill(){
    /* table_id i $user_up to też zmienne z innych funkcji które łączą się z innymi klasami
      więc podobnie jak w kontruktorze na twardo */
    $table_id = 1;
    $user_upr_edycja = true;
    //----------------------------------------------------------------------

    // $disabled jest od tego aby wyłączać możliwość edycji w inputach i textareach
    $disabled = "";
    if(!$user_upr_edycja) $diabled = "disabled";

    //Pobieranie zmapowanej tablicy z wartościami z bazy (gdy nie znajduje oddaje tablice z pustymi wartościami)
    //Wytłumaczone masz w "cms_zb_zesp_form_check_data"
    //$cms_zb_zesp_fields = self::cms_zb_zesp_form_check_data($table_id);

    $site_cms_tworca_form = '';

    //Pobieranie menu (tutaj pokazane jak teksty działają)
    require "cms_tworca_form_menu.php";
    $site_cms_tworca_form .=$cms_tworca_form_menu;

    //Ponieranie kategorii Danych postawowych
    require "cms_tworca_form_dane_podst.php";
    $site_cms_tworca_form .=$cms_tworca_form_dane_podst;

    //Ponieranie kategorii Danych postawowych
    require "cms_tworca_form_indeksy.php";
    $site_cms_tworca_form .=$cms_tworca_form_indeksy;


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

   $cms_tworca_form_js = '<script src="./resources/js/cms_tworca/cms_tworca_form_js.js"></script>';
   $cms_tworca_form_dane_podst_js = '<script src="./resources/js/cms_tworca/cms_tworca_form_dane_podst_js.js"></script>';
    /* A tutaj inicjowanie bootstrap select - musi być tutaj inaczje nie działa
      Tu masz przykłady https://silviomoreto.github.io/bootstrap-select/examples/ */
    $bootstrap_select = '
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.11.2/css/bootstrap-select.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.11.2/js/bootstrap-select.min.js"></script>
    ';


    $site_cms_tworca_form .= $tinymce_init . $bootstrap_select .$cms_tworca_form_js .
     $cms_tworca_form_dane_podst_js;

    return $site_cms_tworca_form;
  }

}

//Inicjowanie klasy
$setUpTworca = new setUpTworca();
echo $setUpTworca->cms_tworca_form_fill();

?>
