/* Pierwsza zmienna od tego żeby nie przekroczyć 10 dat, druga od nadawaniu liczby do id */
$cms_tworca_form_data_seria_rows_count = 0;
$cms_tworca_form_data_seria_rows_id = 0;

/* Dodawanie dat do danych podstawowych */
function cms_tworca_form_data_seria_add_to_row($type, $first_ph, $second_ph){
  $data_przed =
      '<div id="cms_tworca_form_data_seria_'+$cms_tworca_form_data_seria_rows_id+'"' +
      'style="margin-top:0.4em;" class="collapse row cms_tworca_form_data_seria_rows cms_tworca_form_data_seria_przed_row">' +
      '<button type="button" onClick="cms_tworca_form_data_seria_remove_row(this);' +
      '$cms_tworca_form_data_seria_rows_count--; setTimeout(function(){ cms_tworca_form_dane_podst_check_empty(); }, 400);"' +
      'class=" col-sm-2 btn btn-danger glyphicon glyphicon glyphicon-minus"/>' +
      '<div class="col-sm-5 data_od"><input name="data_podw[]" type="number" min="0" max="3000" title="'+$first_ph+'" placeholder="'+$first_ph+'" class="form-control"></div>' +
      '<div class="col-sm-5 data_do"><input name="data_podw[]" type="number" min="0" max="3000" title="'+$second_ph+'" placeholder="'+$second_ph+'" class="form-control"></div>' +
      '</div>';

  $data_pojed =
      '<div id="cms_tworca_form_data_seria_'+$cms_tworca_form_data_seria_rows_id+'"' +
      'style="margin-top:0.4em;" class="collapse row cms_tworca_form_data_seria_rows cms_tworca_form_data_seria_przed_row">' +
      '<button type="button" onClick="cms_tworca_form_data_seria_remove_row(this);' +
      '$cms_tworca_form_data_seria_rows_count--; setTimeout(function(){ cms_tworca_form_dane_podst_check_empty(); }, 400);"' +
      'class=" col-sm-2 btn btn-danger glyphicon glyphicon glyphicon-minus"/>' +
      '<div class="col-sm-10 data"><input name="data_poje[]" type="number" min="0" max="3000" title="'+$first_ph+'" placeholder="'+$first_ph+'" class="form-control"></div>' +
      '</div>';

  if($cms_tworca_form_data_seria_rows_count < 10){
    if($type == "przed") $("#cms_tworca_form_data_seria_main_row").append($data_przed);
    else $("#cms_tworca_form_data_seria_main_row").append($data_pojed);
    $('#cms_tworca_form_data_seria_'+$cms_tworca_form_data_seria_rows_id).collapse();
    $cms_tworca_form_data_seria_rows_count++;
    $cms_tworca_form_data_seria_rows_id++;
  }
}

/* Usuwanie wybranej kolumny z danych podstawowych */
function cms_tworca_form_data_seria_remove_row($removed_div){
  $($removed_div).parent().collapse('hide');
  setTimeout(function(){ $($removed_div).parent().remove(); }, 300);
}

/* Testowa funkcja pobierająca daty */
function test_count(){
  $daty = '';
  $('#cms_tworca_form_data_seria_main_row div').each(function(){
    if($(this).hasClass('cms_tworca_form_data_seria_przed_row')){
      $current_id = $(this).attr("id");
      $data_od = $('#' + $current_id + ' .data_od input').val();
      $data_do = $('#' + $current_id + ' .data_do input').val();
      $daty += $data_od + '-' + $data_do + ',';
    }
    else if($(this).hasClass('cms_tworca_form_data_seria_pojed_row')){
      $current_id = $(this).attr("id");
      $data_od = $('#' + $current_id + ' .data input').val();
      $daty += $data_od + ',';
    }
  });
  console.log($daty);
}


/* Sprawdzanie pustych pól w danych podstawowych */
function cms_tworca_form_dane_podst_check_empty(){
  $counter = 0;

  $syg = $("#cms_tworca_form_syg_input").val();
  if($syg == '' || !$syg.trim()) {showEmptyWarning('cms_tworca_form_syg_form'); $counter++;}
  else hideEmptyWarning('cms_tworca_form_syg_form');

  $tytul = $("#cms_tworca_form_tytul_input").val();
  if($tytul == '' || !$tytul.trim()) {showEmptyWarning('cms_tworca_form_tytul_form'); $counter++;}
  else hideEmptyWarning('cms_tworca_form_tytul_form');

  if($('#cms_tworca_form_data_seria_main_row').is(':empty')){
    $("#cms_tworca_form_data_seria_text").addClass('text-warning'); $counter++;
  }else{ $("#cms_tworca_form_data_seria_text").removeClass('text-warning');}

  $roz_jed_arch = $("#cms_tworca_form_roz_jed_arch_input").val();
  $roz_m_bierz = $("#cms_tworca_form_roz_m_bierz_input").val();
  $roz_mb = $("#cms_tworca_form_roz_mb_input").val();
  if(($roz_jed_arch == '' || !$roz_jed_arch.trim()) && ($roz_m_bierz == '' || !$roz_m_bierz.trim()) && ($roz_mb == '' || !$roz_mb.trim())){
    showEmptyWarning('cms_tworca_form_roz_jed_arch_form');
    showEmptyWarning('cms_tworca_form_roz_m_bierz_form');
    showEmptyWarning('cms_tworca_form_roz_mb_form');
    $("#cms_tworca_form_roz_text").addClass('text-warning');
    $counter++;
  }
  else{
    hideEmptyWarning('cms_tworca_form_roz_jed_arch_form');
    hideEmptyWarning('cms_tworca_form_roz_m_bierz_form');
    hideEmptyWarning('cms_tworca_form_roz_mb_form');
    $("#cms_tworca_form_roz_text").removeClass('text-warning');
  }

  if($counter != 0) $("#cms_tworca_form_menu_select_1 .btn-warning").text($counter);
  else $("#cms_tworca_form_menu_select_1 .btn-warning").text('');

  setMainWarningText($counter);

  if($counter != 0) return false;
  return true;

}

var temp = 'q';

function disableTxt(x) {
  var nazwa_klasy_disable = '.disableWiersz'+x;
  var nazwa_klasy_form = '.formWiersz'+x;
  var button_submit = '#sendFormButton';
  var button_zmiany = '#button'+x;

  $(nazwa_klasy_disable).attr("disabled", true);
  $(nazwa_klasy_form).attr("form","");
  $(button_submit).attr("disabled", true);
  $(button_zmiany).attr("onClick", "undisableTxt("+x+")");
}

function undisableTxt(x) {

  if(temp != 'q'){
    var nazwa_klasy_disable2 = '.disableWiersz'+temp;
    var nazwa_klasy_form2 = '.formWiersz'+temp;
    // var button_submit = '#sendFormButton';
    var button_zmiany2 = '#button'+temp;

    $(nazwa_klasy_disable2).attr("disabled", true);
    $(nazwa_klasy_form2).attr("form","");

    // $(button_submit).attr("disabled", true);
    $(button_zmiany2).attr("onClick", "undisableTxt("+temp+")");
  }

  var nazwa_klasy_disable = '.disableWiersz'+x;
  var nazwa_klasy_form = '.formWiersz'+x;
  var button_submit = '#sendFormButton';
  var button_zmiany = '#button'+x;


  $(nazwa_klasy_disable).attr("disabled", false);
  $(nazwa_klasy_form).attr("form","edytujForm");
  $(button_submit).attr("disabled", false);
  $(button_zmiany).attr("onClick", "disableTxt("+x+")");

  temp = x;
}
