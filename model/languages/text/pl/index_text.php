<?php

$counter = 0;

$text[$counter][0] = 'SYGNATURA DAWNA';


echo json_encode($text);

?>


sygnatura : Archiwum ustala własny numeryczny system sygnatur, będący odbiciem struktury zasobu (podział na zbiory/zespoły, jednostki archiwalne itp.). Każdy zbiór/zespół powinien posiadać odrębną sygnaturę np. 083 – sygnatura dla zespołu „Ochotnicza Straż Pożarna w Byczynie”, 072 – sygnatura dla zespołu „Spuścizna Jana Kowalskiego”.
            Sygnatura zbioru/zespołu w przypadku numerów od 1 do 99 powinna być dwucyfrowa i poprzedzona zerem (01, 02..., 99), zaś w przypadku numerów od 1 do 999 - trzycyfrowa i również poprzedzona zerem (001, 002..., 999).
            Program automatycznie doda na początku sygnatury kod archiwum np. PL_1002_083 (przykładowa pełna sygnatura zbioru/zespołu).

sygnatura_dawna : Wprowadzić, jeśli wcześniej zbiór/zespół funkcjonował pod inną sygnaturą.

tytuł : Nazwa zespołu np. „Ochotnicza Straż Pożarna w Byczynie”, „Spuścizna Jana Kowalskiego” (w nazwie zespołu powinno się znaleźć określenie twórcy) lub zbioru np. „Wspomnienia nadesłane na konkurs «Losy polskie w XX wieku»”, „Pocztówki dotyczące Byczyny”.

data : Określenie dat najwcześniejszego i najpóźniejszego dokumentu w zespole/zbiorze. Na poziomie zbioru/zespołu należy wprowadzać jedynie datę roczną lub zakres dat rocznych (od–do). Należy dążyć do jak najdokładniejszego wskazania datacji rocznej materiałów wchodzących do zbioru/zespołu. Przykładowy zapis daty to 1918–1939, 1945, 1948–1956. W przypadku, gdy nie znamy daty wytworzenia dokumentów w zbiorze/zespole, wybieramy „Nieznana”.
       Data jest wybierana z listy lub ręcznie (poprzez wprowadzenie liczb w okienka).

nazwa_twórcy : By powiązać opis archiwalny z Twórcą opisywanego zbioru/zespołu, należy kolejno: Kliknąć przycisk „Przeglądaj” i wyszukać Twórcę w okienku, które się otworzy, w dwojaki sposób: po jego nazwie lub po numerze identyfikatora twórcy. Po wyszukaniu, z listy „Twórców”, która się wyświetli w okienku po prawej stronie, należy wybrać i zapisać powiązanego Twórcę. Można wybrać kilku Twórców. Jeśli Twórca jest nieznany, należy zaznaczyć tę opcję w okienku wybierania Twórcy na poziomie zbioru/zespołu.
               Jeśli na liście „Twórców” nie ma naszego Twórcy, można go dodać za pomocą przycisku „Dodaj twórcę”. Wówczas otworzy się okienko „Dodawanie twórcy”, w którym należy wypełnić dane podstawowe Twórcy i je zapisać. Dodać Twórcę można również przed rozpoczęciem opisywania zbioru/zespołu. W tym celu należy uzupełnić dane podstawowe Twórcy w osobnej zakładce „Twórca”, która znajduje się w pasku Menu Głównego pomiędzy zakładkami „Zasób” i „Indeksy”.
               Szczegółowe wyjaśnienia odnośnie pojęcia Twórcy na wszystkich poziomach opisu, znajdują się w podpowiedziach w zakładce „Twórca”.

rozmiar : Można wypełnić wszystkie pola lub tylko jedno (w zależności od stosowanych jednostek miary). Metr bieżący to jednostka miary określająca liniową długość półek. W przypadku dokumentów elektronicznych ("born digital" - pierwotnie cyfrowych) lub tych, co do których nie mamy oryginałów (przechowujemy jedynie formę cyfrową, a np. u osoby prywatnej znajduje się oryginał), można wskazać rozmiar w megabajtach. Parametr "megabajty" nie odnosi się do kopii, która powstała po zdigitalizowaniu oryginału, który przechowujemy w archiwum.

rozmiar_fizyczny : Podajemy wielkość miejsca, jakie zbiór/zespół zajmuje w magazynie, liczbę opakowań do przechowywania archiwaliów, np. liczbę szuflad, pudełek.

zawartość : Opis tematyki zbioru lub zespołu, określony w sposób szczegółowy lub ogólny. Pole nieobligatoryjne, ale wymagane przy tworzeniu inwentarza.

język : Pole nieobligatoryjne, ale wymagane przy tworzeniu inwentarza.

obszar_historyczny : Wprowadzić historyczne nazwy kraju lub krajów (po przecinku), których dotyczą materiały archiwalne w zbiorze lub zespole. Podawać nazwy nieskrócone, w oficjalnym brzmieniu, np. Polska Rzeczpospolita Ludowa, Niemiecka Republika Demokratyczna, Związek Socjalistycznych Republik Radzieckich. Pole nieobligatoryjne, ale wymagane przy tworzeniu inwentarza.

obszar_współczesny : Wprowadzić współczesne nazwy kraju lub krajów (po przecinku), których dotyczą materiały archiwalne w zbiorze lub zespole. Podawać nazwy skrócone, obiegowe np. Polska (nie: Rzeczpospolita Polska), Niemcy, Rosja. Pole nieobligatoryjne, ale wymagane przy tworzeniu inwentarza.

dzieje_zbioru : Należy opisać, kiedy i w jaki sposób pozyskano materiały archiwalne, czy posiadały jakiś środek ewidencyjny, czy były w jakimś stopniu uporządkowane, czy zbiór lub zespół zmieniał właścicieli. Opisać historię porządkowania oraz działania, które wpłynęły na strukturę zbioru lub zespołu wraz z ich datacją. W przypadku braku informacji, wpisać „brak danych”. Zaznaczyć także czy jest to zbiór czy zespół (patrz podpowiedź przy polu Poziom opisu: „Zbiór/Zespół”). Zaznaczyć ewentualne przesunięcia międzyzespołowe.

pochodzenie_zbioru : O ile informacje te są jawne, spisać pochodzenie zbioru lub zespołu: nazwiska ofiarodawców, daty przekazania itp.
                     Jeśli opisujemy zbiór/zespół, który jest kopią (np. posiadamy w archiwum skany spuścizny, udostępnionej nam przez osobę prywatną, która oryginały przechowuje u siebie), należy podać tę informację, np. Oryginały znajdują się u właściciela zbioru/zespołu.
                     W przypadku braku danych o pochodzeniu materiałów, podać tę informację.

