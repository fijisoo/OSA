<?php

$cms_zb_zesp_form_dane_podst = '

<div class="container">
<fieldset '.$diabled.'>

<div class="container">
    <div class="form-group row" style="position: relative">
            <div class="col-form-label col-md-2 col-sm-3 col-xs-6">
                <!--<label style="padding-left: 0px;" class="col-md-12 col-form-label">POZIOM OPISU</label><br/>-->
                <label style="padding-left: 0px; padding-top:5px;" class="col-md-12 col-form-label"><h3>ZBIÓR/ZESPÓł</h3></label>
            </div>
            <span style="font-size: 25px; position: absolute; margin-top: 23px;" data-toggle="collapse" data-target="#form_text_1_description" class="form_tip_sign glyphicon glyphicon-question-sign"></span>
            <div id="form_text_1_description" class="form_collapse_class collapse aller_light col-md-12">dawdawdawdawdawdawdawd_DESCRIPTOR1</div>
    </div>

    <div style="padding-left: 0px;" class="col-md-6">
        <div class="form-group row">
            <label for="form_input_2" class="col-md-3 col-form-label" style="margin-top: 7px">SYGNATURA*</label>
            <label for="form_input_2" id="PL_1001" class="col-md-9 col-form-label" style="margin-top: 7px">PL_1001_</label>
            <div class="col-md-10">
                <input type="text" maxlength="320" placeholder="wprowadz numer zbioru" onfocus="form_input_error(2)" class="form-control col-md-8" id="form_input_2">
            </div>
            <span style="font-size: 25px;" data-toggle="collapse" data-target="#form_text_2_description" class="form_tip_sign glyphicon glyphicon-question-sign"></span>
            <div id="form_text_2_description" class="form_collapse_class collapse aller_light col-md-12">dawdawdawdawdawdawdawd_DESCRIPTOR2</div>
        </div>
        <div class="form-group row">
            <label for="form_input_3" class="col-md-12 col-form-label">SYGNATURA DAWNA</label><br/>
            <div class="col-md-10">
                <input type="text" maxlength="320" onfocus="form_input_error(2)" class="form-control col-md-8" id="form_input_3">
            </div>
                <span style="font-size: 25px;" data-toggle="collapse" data-target="#form_text_3_description" class="form_tip_sign glyphicon glyphicon-question-sign"></span>
                <div id="form_text_3_description" class="form_collapse_class collapse aller_light col-md-12">dawdawdawdawdawdawdawd_DESCRIPTOR3</div>
        </div>
        <div class="form-group row">
            <label for="form_input_4" class="col-md-12 col-form-label">TYTUŁ *</label><br/>
            <div class="col-md-10">
                <input type="text" maxlength="320" placeholder="TYTUŁ *" onfocus="form_input_error(2)" class="form-control col-md-8" id="form_input_4">
            </div>
                <span style="font-size: 25px;" data-toggle="collapse" data-target="#form_text_4_description" class="form_tip_sign glyphicon glyphicon-question-sign"></span>
                <div id="form_text_4_description" class="form_collapse_class collapse aller_light col-md-12">dawdawdawdawdawdawdawd_DESCRIPTOR4</div>
        </div>
        <div class="form-group row">
            <label for="form_input_4" class="col-md-12 col-form-label">TYTUŁ DAWNY</label><br/>
            <div class="col-md-10">
                <input type="text" maxlength="320" placeholder="TYTUŁ" onfocus="form_input_error(2)" class="form-control col-md-8" id="form_input_41">
            </div>
                <span style="font-size: 25px;" data-toggle="collapse" data-target="#form_text_41_description" class="form_tip_sign glyphicon glyphicon-question-sign"></span>
                <div id="form_text_41_description" class="form_collapse_class collapse aller_light col-md-12">dawdawdawdawdawdawdawd_DESCRIPTOR41</div>
        </div>
        <div class="form-group row">

            <div id="dodaj_input" class="col-md-10 form-inline">
                <label for="dodaj_input" style="padding-left: 0;" class="col-md-10 col-form-label">DATA *</label><br/>
                <div class="col-md-10 row form-group">
                <button id="dodaj_przedzial" class="col-md-5 btn btn-primary" onclick="przedzial()">Dodaj przedział</button>
                <button id="dodaj_przedzial2" class="col-md-5 btn btn-primary" onclick="pojedyncza()">Dodaj pojedynczą</button>
                </div>
            </div>
            <span style="font-size: 25px;" data-toggle="collapse" data-target="#form_text_5_description" class="form_tip_sign glyphicon glyphicon-question-sign"></span>

            <script>
                    function wstaw_element(parentId, elementTag, elementId, elementName, elementValue, elementType, contentHTML){
                        if (!(this instanceof wstaw_element)) return new wstaw_element((parentId, elementTag, elementId, elementName, elementValue, elementType, contentHTML));
                        if (parentId) this.parentId = parentId;
                        if (elementTag) this.elementTag = elementTag;
                        if (elementValue) this.elementValue = elementValue;
                        if (elementId) this.elementId = elementId;
                        if (elementName) this.elementName = elementName;
                        if (contentHTML) this.contentHTML = contentHTML;
                        if (contentHTML) this.contentHTML = contentHTML;
                        if (contentHTML) this.elementType = elementType;


                        this.dodaj_span = function(){
                            var p = document.getElementById(this.parentId);
                            var newElement = document.createElement(this.elementTag);
                            newElement.setAttribute(\'class\', \'input-group-addon\');
                            newElement.innerHTML = this.contentHTML;
                            return p.appendChild(newElement);

                        }
                        this.dodaj_pojedynczy_input = function(){
                            var p = document.getElementById(this.parentId);
                            var newElement = document.createElement(this.elementTag);
                            newElement.setAttribute(\'name\', this.elementName);
                            newElement.setAttribute (\'type\', this.elementType);
                            newElement.setAttribute(\'id\', this.elementId);
                            newElement.setAttribute(\'placeholder\', \'wprowadź rok\');
                            newElement.setAttribute(\'class\', \'form-control\');
                            return p.appendChild(newElement);
                        }
                        this.dodaj_podwojny_input = function(){
                            var p = document.getElementById(this.parentId);
                            var newElement = document.createElement(this.elementTag);
                            newElement.setAttribute(\'name\', this.elementName);
                            newElement.setAttribute (\'type\', this.elementType);
                            newElement.setAttribute(\'id\', this.elementId);
                            newElement.setAttribute(\'placeholder\', \'wprowadź rok\');
                            newElement.setAttribute(\'class\', \'form-control\');
                            return p.appendChild(newElement);
                        }
                            this.dodaj_div = function(_class, _classId){
                                var p = document.getElementById(this.parentId);
                                var newElement = document.createElement(this.elementTag);
                                newElement.setAttribute(\'id\', this.elementId);
                                newElement.setAttribute(\'class\',\'classId_\'+_classId +\' \'+ _class+\' input-group\');
                                return p.appendChild(newElement);
                            }
                            this.dodaj_div_dla_pojedynczego = function(_classId){
                                var p = document.getElementById(this.parentId);
                                var newElement = document.createElement(this.elementTag);
                                newElement.setAttribute(\'id\', this.elementId);
                                newElement.setAttribute(\'class\',\'classId_\'+ _classId + \' col-md-11 input-group\');
                                return p.appendChild(newElement);
                            }
                            this.button = function(_function){
                                var p = document.getElementById(this.parentId);
                                var newElement = document.createElement(this.elementTag);
                                newElement.setAttribute(\'id\', this.elementId);
                                newElement.setAttribute(\'class\', \'classId_\'+ _function +\' col-md-1 btn btn-danger glyphicon glyphicon glyphicon-minus\');
                                newElement.setAttribute(\'onclick\', \'usun(\'+ _function +\')\');
                                return p.appendChild(newElement);
                            }

                    }
//                                  parentId, elementTag, elementId, elementName, elementValue, elementType, contentHTML
                    var counter_input = 0;
                    var counter_div = 0;

                    function pojedyncza(){
                        counter_input++;
                        counter_div++;
                        new wstaw_element(\'dodaj_input\', \'div\', \'form_input_7\'+counter_input,\'\',\'\',\'\', \'\').dodaj_div_dla_pojedynczego(counter_div);
                        new wstaw_element(\'form_input_7\'+counter_input, \'span\', \'\',\'\',\'\',\'\', \'data roczna:\').dodaj_span();
                        new wstaw_element(\'form_input_7\'+counter_input, \'input\', counter_input,\'rok_input\', \'\',\'number\', \'\').dodaj_pojedynczy_input();
                        new wstaw_element(\'dodaj_input\', \'button\', \'button\'+counter_div,\'\',\'\',\'\',\'\').button(counter_div);
                    }
                    function przedzial(){
                        counter_input++;
                        counter_div++;
                        new wstaw_element(\'dodaj_input\', \'div\', \'form_input_7\'+counter_input,\'\',\'\',\'\', \'\').dodaj_div(\'col-md-5\', counter_div);
                        new wstaw_element(\'form_input_7\'+counter_input, \'span\', \'\',\'\',\'\',\'\', \'zakres od:\').dodaj_span();
                        new wstaw_element(\'form_input_7\'+counter_input, \'input\', counter_input,\'rok_input\', \'-\',\'number\', \'\').dodaj_podwojny_input();
                        counter_input++;
//                        counter_div++;
                        new wstaw_element(\'dodaj_input\', \'div\', \'form_input_7\'+counter_input,\'\',\'\',\'\', \'\').dodaj_div(\'col-md-6\', counter_div);
                        new wstaw_element(\'form_input_7\'+counter_input, \'span\', \'\',\'\',\'\',\'\', \'do:\').dodaj_span();
                        new wstaw_element(\'form_input_7\'+counter_input, \'input\', counter_input,\'rok_input\', \'\',\'number\', \'\').dodaj_podwojny_input();
                        new wstaw_element(\'dodaj_input\', \'button\', \'button\'+counter_div,\'\',\'\',\'\',\'\').button(counter_div);
                    }

                    function usun(id){
                        var p = document.getElementsByClassName(\'classId_\'+id);
                        while (p.length > 0) {
                            p[0].remove();
                        }
                    }

                </script>
        </div>

            <div id="form_text_5_description" class="form_collapse_class collapse aller_light col-md-12">
                dawdawdawdawdawdawdawd_DESCRIPTOR5
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
            <span style="font-size: 25px;" data-toggle="collapse" data-target="#form_text_6_description"
                  class="form_tip_sign glyphicon glyphicon-question-sign"></span>
            <div id="form_text_6_description" class="form_collapse_class collapse aller_light col-md-12">
                dawdawdawdawdawdawdawd_DESCRIPTOR6
            </div>
        </div>
        <div class="form-group row">
            <label for="form_input_7" class="col-md-12 col-form-label">ROZMIAR *</label><br/>
                <div class="col-md-10">
                    <input type="number" maxlength="320" placeholder="ROZMIAR *" onfocus="form_input_error(2)" class="form-control col-md-8" id="form_input_7">
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
        <label for="form_input_8" class="col-md-12 col-form-label">Rozmiar fizyczny</label><br/>
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
      </fieldset>
</div>
//</body>

';

echo json_encode($text);

?>