/*

Tutaj masz serce strony, czyli co się dzieje w przypadku poszczegolnych
przekierowan do podstron. Te wszystie podstrony sa z przekierowaniem po hasztagu
czyli jak np. dodajesz <a href= na podstrone "formularz" to wpisane w href
jest "#/formularz"

*/

//Definiowanie głównego modułu strony - czyli tego ng-app w indexie. Nazwa modułu - przestrzeni którą zagospodarujemy to testApp, serwisy z których skorzystamy to ui.bootstrap oraz ngRoute.
//The ngRoute module provides routing and deeplinking services and directives for angular apps.
//Native AngularJS (Angular) directives for Bootstrap.
var main_app_module = angular.module('testApp', ['ui.bootstrap','ngRoute']);

//Konfigurowanie strony względem przekierowywania i podanych argumentów w linku
//Tutaj sprawdza jakie argumanty/rzeczy wpisane są po hasztagu
//Pierwszy z nich to jezyk (language) a drugi jaka podstrona jest wpisana (site_1)
//Potem przechodzi do controlera (taka jakby funkcja) 'main_app_module'
main_app_module.config(function($routeProvider) {

   $routeProvider
      .when('/:language?/:site_1?', {
      	controller: 'mainCtrl',
    	template: '',
      });
});

//Definiowanie głównego kontrolera strony, odpowiedzialnego za elementy i treści wymaganych podstron/elementów
//Tutaj przekazywane są te słowa kluczowe jezyka jak i podstrony
main_app_module.controller('mainCtrl' , function($scope,  $routeParams){

  //Definiowanie zmiennej języka (w przypadku braku przypisuje się 'pl')
  //Sprawdza jaki jezyk jest wpisane w url przegladarki
  //Jak nie ma to defaultowo jest pl
  $switch_language = (typeof $routeParams.language == 'undefined') ? 'pl' : $routeParams.language;

  //Sprawdza jaka podstrona jest wybrana
  //Jak nie ma to defaultowo jest main czyli ta glowna z przyciskiem jednym
  $switch_site_1 = (typeof $routeParams.site_1 == 'undefined') ? 'index' : $routeParams.site_1;


  //Patrzy co robic w przypadku slow kluczowych podstrona
  //Gdy jest jakas ktorej po prostu nie ma przekierowywuje na 404
  //(nie dalem folderu 404 no ale wiadomo osocho)
  switch ($switch_site_1) {
      case 'index': setUpSite($switch_language,'index'); break;
      case 'archiwizacja': setUpSite($switch_language, 'archiwizacja'); break;
      case 'udostepnianie': setUpSite($switch_language, 'udostepnianie'); break;
      case 'prawadozbioru': setUpSite($switch_language, 'prawadozbioru'); break;
      case 'indeksy': setUpSite($switch_language, 'indeksy'); break;
      case 'danedodatkowe': setUpSite($switch_language, 'danedodatkowe'); break;
     default: window.location.href = "./404/"; break;
   }

});


//Ładowanie poszczegolnych podstron i wkladanie je do głownego diva 'main_container'
//Tak samym jak w tej waitSite jest $.post ktory pobiera konkretny php z danymi
//elementami strony i dodaje je do diva
function setUpSite(lang,site){
  $('#main_container').removeClass('animated fadeInDown');

  $.post("./view/sites/"+site+".html",function(data){
    setTimeout(function(){
      $("#main_container").html(data);
      $('#main_container').addClass('animated fadeInDown');

      setUpLanguage(lang, site);
    }, 1000);
  }); //,'json').fail(function(status){console.log(status);}
}

//Funkcja odpowiedzialna za pobieranie tekstów wybranych elementów w odpowiednim języku
//Tutaj rowniez jest $.post ktory pobiera jezyk dla danej podstrony/elementow
function setUpLanguage(language, site){

  $language_path = "./model/languages/text/" + language + "/" + site + "_text.php";
  $.post($language_path, function(data){ setUpElements(data,site); }, "json");
}

//Funckja odpowiedzialna za wstawianie treści do wybranego elementu w odpowiednim języku
//Tutaj pobiera elementy (czyli id) i wstawia pod wybrane id teksty w wybranym jezyku
//Switch jest po to bo tablica elementow zawiera id i w jakim atrybucie ma byc zamieszczony text
//Bo moze byc i text, albo html albo placeholder/href/value/itp
function setUpElements(text,site){
    $elements_path = "./model/languages/elements/" + site + "_elements.php";
    $.post($elements_path, function(elements){
        for($i=0;$i<Object.keys(elements).length;$i++){
            switch (elements[$i][1]) {
                case 'text': $("#"+elements[$i][0]).text(text[$i]);  break;
                case 'placeholder': case 'href': case 'value': $("#"+elements[$i][0]).attr(elements[$i][1] , text[$i]);  break;
                case 'html': $("#"+elements[$i][0]).html(text[$i]);  break;
            }
        }
    }, "json");

}
