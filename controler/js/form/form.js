//Głowna funkcja formularza, przy kliknieciu na wysłanie formularza
//Na poczatku każe wyswietlac animacje czekania
//Potem czyści wyglad błędow (zaznaczone na czerwono inputy, czerwone bledy, krzyzyki)
//Na koncu wysyla $.postem do skryptu dane z inputow i czeka na walidacje

function form_send(){
  
  $(".form_error_message_with_tip").collapse("hide");
  $(".form_collapse_class").collapse("hide");


  $(".form-group").removeClass("has-error");
  $(".form_error_sign").removeClass("glyphicon-remove");

  $name = $("#form_input_1").val();
  $city = $("#form_input_2").val();

  $.post("./server/form/form_server.php", {lang:$switch_language, name:$name, city:$city} ,function(data){
    setTimeout(function(){
      if(data[0][0]){form_send_success(data[0][1]);}
      else{form_send_failed(data);}
      $("#form_wait_modal").modal("hide");
    }, 1000);

  }, "json" ).fail(function(status){/* Tutaj mozna cos wstawic w przypadku gdy wykonywanie skryptu sie spierdoli */console.log(status);});
}

//Gdy walidacja przechodzi poprawnie wyswietla napis (badz robi to co powinno przy sukcesie walidacji)
function form_send_success(success_text){  $("#main_container").html(success_text); }

//Gdy walidacja nie przechodzi poprawnie zaznaczane sa na czerwono zle wprowadzone inputy
//Wyswietla informacje o błędach
function form_send_failed(data_failed){

  $("#form_text_main").html('<b style="color:red;">'+ data_failed[0][1] + '</b>');
  $("#form_text_main").collapse("show");
  $("#form_text_main").collapse("show");

  for($i=1;$i<3;$i++){
    if(data_failed[$i][0]){}
    else{
    $("#form_form_"+$i).addClass("has-error");
    $("#form_error_sign_"+$i).addClass("glyphicon-remove");

    $("#form_text_error_"+$i).html('<b style="color:red;">'+ data_failed[$i][1] + '</b>');
    $("#form_text_error_"+$i).collapse("show");
    }
  }

}

//Po kliknieciu w input chowa informacje o błędzie przy tym inpucie w przypadku gdy taki występuje
function form_input_error(id){
  $("#form_text_main").collapse("hide");
  $("#form_text_error_"+id).collapse("hide");

  $("#form_form_"+id).removeClass("has-error");
  $("#form_error_sign_"+id).removeClass("glyphicon-remove");

}

