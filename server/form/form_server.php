<?php

//Skrypt walidacji danych wprowadzonych w inpucie
//Na poczatku sprawdza czy te zmienne przesłane w ogole istnieja, aby nie było zadnych spieprzen pozniej

if(isset($_POST['lang']) && isset($_POST['name']) && isset($_POST['city'])){

  $form_answer = array();

//Pobiera teksty walidacyjne w wybranym jezyku
  include '../../languages/text/' .$_POST['lang']. '/form_server.php';

  $form_answer[0][0] = true;

  if($_POST['name'] != '' && $_POST['name'] == "Dominik"){ $form_answer[1][0] = true; }
  else{$form_answer[1][0] = false; $form_answer[1][1] = $text['name_error'];}

  if($_POST['city'] != '' && $_POST['city'] == "Lublin"){ $form_answer[2][0] = true; }
  else{$form_answer[2][0] = false; $form_answer[2][1] = $text['city_error'];}

//Tutaj sprawdza czy wszystkie inputy sa ok
//Zmienna $form_answer zawiera info o tym czy poszczegolny input jest ok
//Gdy jest zerowa kolumna danego rzedu (tyle rzedow ile danych werjsciowych do walidacji) jest na true
//Gdy nie jest false do kolumny 1 przypisywany jest tekst o zjebanej wersjciowej

//W pętli patrzy czy w pierwszej kolumnie znajduje sie false
//Jesli tak to zerowa kolumna zerowego rzedu (ktora odpowiada glownemu statusowi) jest na false
//Jesli ok to pozostaje true
  for($i=1;$i<3;$i++){
    if($form_answer[$i][0]){}
    else{$form_answer[0][0] = false;}
  }

//Gdy zerowa kolumna zerowego rzedu jest true zwraca tekst z sukcesem (i np. dane przypisywane sa do bazy danych, fajerwerki, prostytutki)
//Gdy na false zwracan teksty w błędami
  if($form_answer[0][0]){
    $form_answer[0][1] = $text['main_success'];
    echo json_encode($form_answer);
  }else{
    $form_answer[0][1] = $text['main_error'];
    echo json_encode($form_answer);
  }

}

?>
