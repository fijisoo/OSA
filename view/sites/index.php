<?php

$text = '

<div class="container">

    <div class="form-group row" style="position: relative">
            <div class="col-form-label col-md-2 col-sm-3 col-xs-6">
                <!--<label style="padding-left: 0px;" class="col-md-12 col-form-label">POZIOM OPISU</label><br/>-->
                <label style="padding-left: 0px; padding-top:5px;" class="col-md-12 col-form-label"><h3>ZBIÓR/ZESPÓł</h3></label>
            </div>
            <span style="font-size: 25px; position: absolute; margin-top: 23px;" data-toggle="collapse" data-target="#form_text_1_description" class="form_tip_sign glyphicon glyphicon-question-sign"></span>
            <div id="form_text_1_description" class="form_collapse_class collapse aller_light col-md-12">dawdawdawdawdawdawdawd_DESCRIPTOR1</div>
    </div>
    <div class="form-group row form-group-sm">
        <label class="col-md-2 col-form-label" style="margin-top: 7px">SYGNATURA*</label>
        <label id="PL_1001" class="col-md-1 col-form-label" style="margin-top: 7px">PL_1001_</label>
        <div class="col-md-8">
            <input type="text" maxlength="320" class="form-control col-md-8" id="form_input_id2">
        </div>
        <span style="font-size: 25px;" data-toggle="collapse" data-target="#form_text_2_description" class="form_tip_sign glyphicon glyphicon-question-sign"></span>
        <div id="form_text_2_description" class="form_collapse_class collapse aller_light col-md-12">dawdawdawdawdawdawdawd_DESCRIPTOR2</div>
    </div>
    <div style="padding-left: 0px;" class="col-md-6">
        <div class="form-group row">
            <label class="col-md-12 col-form-label">SYGNATURA DAWNA</label><br/>

            <div class="col-md-10">
                <input type="text" maxlength="320" onfocus="form_input_error(2)" class="form-control col-md-8" id="form_input_3">
            </div>
                <span style="font-size: 25px;" data-toggle="collapse" data-target="#form_text_3_description" class="form_tip_sign glyphicon glyphicon-question-sign"></span>
                <div id="form_text_3_description" class="form_collapse_class collapse aller_light col-md-12">dawdawdawdawdawdawdawd_DESCRIPTOR3</div>
        </div>
        <div class="form-group row">
            <label class="col-md-12 col-form-label">TYTUŁ *</label><br/>
            <div class="col-md-10">
                <input type="text" maxlength="320" onfocus="form_input_error(2)" class="form-control col-md-8" id="form_input_4">
            </div>
                <span style="font-size: 25px;" data-toggle="collapse" data-target="#form_text_4_description" class="form_tip_sign glyphicon glyphicon-question-sign"></span>
                <div id="form_text_4_description" class="form_collapse_class collapse aller_light col-md-12">dawdawdawdawdawdawdawd_DESCRIPTOR4</div>
        </div>
        <div class="form-group row">
            <label class="col-md-12 col-form-label">DATA *</label><br/>
            <div class="col-md-10">
                <input type="month" maxlength="320" onfocus="form_input_error(2)" class="form-control col-md-8" id="form_input_5">
            </div>
            <span style="font-size: 25px;" data-toggle="collapse" data-target="#form_text_5_description" class="form_tip_sign glyphicon glyphicon-question-sign"></span>
            <div id="form_text_5_description" class="form_collapse_class collapse aller_light col-md-12">dawdawdawdawdawdawdawd_DESCRIPTOR5</div>
        </div>
        <div class="form-group row">
            <label class="col-md-12 col-form-label">NAZWA TWÓRCY *</label><br/>
            <div class="col-md-10">
                <!--DOCELOWO ACCEPT INNA WARTOSC. NAZWA TEZ INNA-->
                <!--<label class="custom-file">-->
                    <!--<input type="file" id="file" class="custom-file-input">-->
                    <!--<span class="custom-file-control"></span>-->
                <!--</label>-->
                <button class="btn-success">TUTAJ BUTTON K?</button>
            </div>
            <span style="font-size: 25px;" data-toggle="collapse" data-target="#form_text_6_description" class="form_tip_sign glyphicon glyphicon-question-sign"></span>
            <div id="form_text_6_description" class="form_collapse_class collapse aller_light col-md-12">dawdawdawdawdawdawdawd_DESCRIPTOR6</div>
        </div>
        <div class="form-group row">
            <label class="col-md-12 col-form-label">ROZMIAR *</label><br/>
                <div class="col-md-10">
                    <input type="number" maxlength="320" onfocus="form_input_error(2)" class="form-control col-md-8" id="form_input_6">
                </div>
                <!--INPUT RANGE-->
                <!--<input type="range" id="rangeInput"-->
                       <!--name="rangeInput" min="0" max="1024" value="0"-->
                       <!--oninput="amount.value=rangeInput.value">-->
                <!--<output name="amount" id="amount" for="rangeInput">0</output>-->
            <span style="font-size: 25px;" data-toggle="collapse" data-target="#form_text_7_description" class="form_tip_sign glyphicon glyphicon-question-sign"></span>
            <div class="col-md-12">
            <input type="radio" name="weight" value="ja">Jednosta archiwalna</input>
            <input type="radio" name="weight" value="mb">Metry bierzące</input>
            <input type="radio" name="weight" value="m">Megabajty</input>
            </div>
            <div id="form_text_7_description" class="form_collapse_class collapse aller_light col-md-12">dawdawdawdawdawdawdawd_DESCRIPTOR7</div>
        </div>
        <div class="form-group row">
        <label class="col-md-12 col-form-label">Rozmiar fizyczny</label><br/>

        <div class="col-md-10">
            <input type="text" maxlength="320" placeholder="Rozmiar fizyczny" onfocus="form_input_error(2)" class="form-control col-md-8" id="form_input_8">
        </div>
        <span style="font-size: 25px;" data-toggle="collapse" data-target="#form_text_8_description" class="form_tip_sign glyphicon glyphicon-question-sign"></span>
        <div id="form_text_8_description" class="form_collapse_class collapse aller_light col-md-12">dawdawdawdawdawdawdawd_DESCRIPTOR8</div>
        </div>
        <div class="form-group row">
            <label class="col-md-12 col-form-label">ZAWARTOŚĆ</label><br/>

            <div class="col-md-10">
                <!--<input type="textarea" maxlength="320" placeholder="wprowadz numer zbioru" onfocus="form_input_error(2)" class="form-control col-md-8" id="form_input_9">-->
                <textarea></textarea>
            </div>
            <span style="font-size: 25px;" data-toggle="collapse" data-target="#form_text_9_description" class="form_tip_sign glyphicon glyphicon-question-sign"></span>
            <div id="form_text_9_description" class="form_collapse_class collapse aller_light col-md-12">dawdawdawdawdawdawdawd_DESCRIPTOR9</div>
        </div>

    </div>

    <div class="col-md-6" style="padding-right: 0px;">

        <div class="form-group row">
            <label class="col-md-12 col-form-label">TYTUŁ *</label><br/>
            <div class="col-md-10">
                <select multiple class="form-control">
                    <option>Polska</option>
                    <option>Czajna</option>
                    <option>USA</option>
                    <option>JAPAN</option>
                    <option>Islandia</option>
                </select>
            </div>
            <span style="font-size: 25px;" data-toggle="collapse" data-target="#form_text_10_description" class="form_tip_sign glyphicon glyphicon-question-sign"></span>
            <div id="form_text_10_description" class="form_collapse_class collapse aller_light col-md-12">dawdawdawdawdawdawdawd_DESCRIPTOR10</div>
        </div>

        <div class="form-group row">
            <label class="col-md-12 col-form-label">OBSZAR HISTORYCZNY</label><br/>
            <div class="col-md-10">
                <textarea type="text" maxlength="320" placeholder="OBSZAR HISTORYCZNY" onfocus="form_input_error(2)" class="form-control col-md-8" id="form_input_11"></textarea>
            </div>
            <span style="font-size: 25px;" data-toggle="collapse" data-target="#form_text_11_description" class="form_tip_sign glyphicon glyphicon-question-sign"></span>
            <div id="form_text_11_description" class="form_collapse_class collapse aller_light col-md-12">dawdawdawdawdawdawdawd_DESCRIPTOR11</div>
        </div>

        <div class="form-group row">
            <label class="col-md-12 col-form-label">OBSZAR WSPÓŁCZESNY</label><br/>
            <div class="col-md-10">
                <textarea type="text" maxlength="320" placeholder="OBSZAR HISTORYCZNY" onfocus="form_input_error(2)" class="form-control col-md-8" id="form_input_12"></textarea>
            </div>
            <span style="font-size: 25px;" data-toggle="collapse" data-target="#form_text_12_description" class="form_tip_sign glyphicon glyphicon-question-sign"></span>
            <div id="form_text_12_description" class="form_collapse_class collapse aller_light col-md-12">dawdawdawdawdawdawdawd_DESCRIPTOR12</div>
        </div>

        <div class="form-group row">
            <label class="col-md-12 col-form-label">DZIEJE ZBIORU/ZESPOŁU</label><br/>
            <div class="col-md-10">
                <textarea type="text" maxlength="320" placeholder="OBSZAR HISTORYCZNY" onfocus="form_input_error(2)" class="form-control col-md-8" id="form_input_13"></textarea>
            </div>
            <span style="font-size: 25px;" data-toggle="collapse" data-target="#form_text_13_description" class="form_tip_sign glyphicon glyphicon-question-sign"></span>
            <div id="form_text_13_description" class="form_collapse_class collapse aller_light col-md-12">dawdawdawdawdawdawdawd_DESCRIPTOR13</div>
        </div>

        <div class="form-group row">
            <label class="col-md-12 col-form-label">POCHODZENIE ZBIORU/ZESPOŁU</label><br/>
            <div class="col-md-10">
                <textarea type="text" maxlength="320" placeholder="OBSZAR HISTORYCZNY" onfocus="form_input_error(2)" class="form-control col-md-8" id="form_input_14"></textarea>
            </div>
            <span style="font-size: 25px;" data-toggle="collapse" data-target="#form_text_14_description" class="form_tip_sign glyphicon glyphicon-question-sign"></span>
            <div id="form_text_14_description" class="form_collapse_class collapse aller_light col-md-12">dawdawdawdawdawdawdawd_DESCRIPTOR14</div>
        </div>

    </div>
</div>
</body>

';

echo json_encode($text);

?>