function changeCategory($cat_id){
  $('.cms_tworca_form_category').css('opacity', '0');
  $('.cms_tworca_form_category').css('display', 'none');
  $('.cms_tworca_form_category').removeClass('animated fadeIn');

  setTimeout(function(){
    $('#cms_tworca_form_category_'+$cat_id).css('display', 'block');
    $('#cms_tworca_form_category_'+$cat_id).addClass('animated fadeIn');
  }, 300);
}

/* Robi obramówkę wokół inputu wraz ze znaczkiem */
function showEmptyWarning($form){
      $("#"+$form).addClass("has-warning ");
      $("#"+$form+" span:first").addClass("glyphicon-warning-sign");
      $("#"+$form+" .collapse .form_warning").html("Proszę wypełnić puste pole");
      $("#"+$form+" .collapse .form_warning").collapse("show");
}

/* Chowa obramówkę wokół inputu wraz ze znaczkiem */
function hideEmptyWarning($form){
      $("#"+$form).removeClass("has-warning ");
      $("#"+$form+" span:first").removeClass("glyphicon-warning-sign");
      $("#"+$form+" .collapse .form_warning").html("");
      $("#"+$form+" .collapse .form_warning").collapse("hide");
}

/* Pokazuje/Chowa główny text ostrzeżenia */
function setMainWarningText($Inputs){
  $("#cms_tworca_form_main_warning_text_b").text($Inputs);
  if(!$("#cms_tworca_form_main_warning_text").hasClass("in") && $Inputs != 0) $("#cms_tworca_form_main_warning_text").collapse("show");
  else if($Inputs == 0) $("#cms_tworca_form_main_warning_text").collapse("hide");
}


/* Pokazywanie/chowanie pól rozmiaru */
function cms_tworca_form_btn_collapse($btn_collapse){

  $collapse_status = 'hide';
  if($('#cms_tworca_form_'+$btn_collapse+'_btn').hasClass('btn-info')){
    $('#cms_tworca_form_'+$btn_collapse+'_btn').removeClass('btn-info');
  }else{
    $('#cms_tworca_form_'+$btn_collapse+'_btn').addClass('btn-info');
    $collapse_status = 'show';
  }

  $('#cms_tworca_form_'+$btn_collapse+'_form').collapse($collapse_status);
}
