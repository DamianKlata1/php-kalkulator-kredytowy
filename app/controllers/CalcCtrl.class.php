<?php

// W skrypcie definicji kontrolera nie trzeba dołączać już niczego.
// Kontroler wskazuje tylko za pomocą 'use' te klasy z których jawnie korzysta
// (gdy korzysta niejawnie to nie musi - np używa obiektu zwracanego przez funkcję)

// Zarejestrowany autoloader klas załaduje odpowiedni plik automatycznie w momencie, gdy skrypt będzie go chciał użyć.
// Jeśli nie wskaże się klasy za pomocą 'use', to PHP będzie zakładać, iż klasa znajduje się w bieżącej
// przestrzeni nazw - tutaj jest to przestrzeń 'app\controllers'.

// Przypominam, że tu również są dostępne globalne funkcje pomocnicze - o to nam właściwie chodziło

namespace app\controllers;

//zamieniamy zatem 'require' na 'use' wskazując jedynie przestrzeń nazw, w której znajduje się klasa
use app\forms\CalcForm;
use app\transfer\CalcResult;

class CalcCtrl
{

    private $form;   //dane formularza (do obliczeń i dla widoku)
    private $result; //inne dane dla widoku

    /**
     * Konstruktor - inicjalizacja właściwości
     */
    public function __construct()
    {
        //stworzenie potrzebnych obiektów
        $this->form = new CalcForm();
        $this->result = new CalcResult();
    }

    public function getParameters()
    {
        $this->form->amount = getFromRequest('amount');
        $this->form->years = getFromRequest('years');
        $this->form->interest = getFromRequest('interest');
    }

    public function validate()
    {
        if (!(isset($this->form->amount) && isset($this->form->years) && isset($this->form->interest))) {
            return false;
        }

        getMessages()->addInfo(' Przekazano parametry ');
        if ($this->form->amount == "") {
            getMessages()->addError('Nie podano kwoty');
        }
        if ($this->form->years == "") {
            getMessages()->addError('Nie podano liczby lat');
        }
        if ($this->form->interest == "") {
            getMessages()->addError('Nie podano oprocentowania');
        }
        if (!getMessages()->isError()) {

            if (!is_numeric($this->form->amount)) {
                getMessages()->addError('Kwota nie jest liczbą całkowitą');
            }
            if (!is_numeric($this->form->years)) {
                getMessages()->addError('Czas kredytu nie jest liczbą całkowitą');
            }
            if (!is_numeric($this->form->interest)) {
                getMessages()->addError('Oprocentowanie nie jest liczbą całkowitą');
            }
        }
        return !getMessages()->isError();
    }

    public function action_calcCompute()
    {
        $this->getParameters();
        if ($this->validate()) {

            //konwersja parametrów na int
            $this->form->amount = intval($this->form->amount);
            $this->form->years = intval($this->form->years);
            $this->form->interest = intval($this->form->interest);
            getMessages()->addInfo('Parametry poprawne.');

            //wykonanie operacji
            $amountOfMonths = $this->form->years * 12;

            $unroundedresult = ($this->form->amount + $this->form->amount * ($this->form->interest / 100)) / $amountOfMonths;
            $this->result->result = round($unroundedresult, 2);

            getMessages()->addInfo('Wykonano obliczenia.');
        }
        $this->generateView();
    }
    public function action_calcShow(){
        $this->generateView();
    }

    public function generateView()
    {
        //nie trzeba już tworzyć Smarty i przekazywać mu konfiguracji i messages
        // - wszystko załatwia funkcja getSmarty()

        getSmarty()->assign('user',unserialize($_SESSION['user']));

        getSmarty()->assign('page_title','Kalkulator kredytowy');
        getSmarty()->assign('page_header',' ');
        getSmarty()->assign('page_description',' ');

        getSmarty()->assign('form',$this->form);
        getSmarty()->assign('res',$this->result);

        getSmarty()->display('CalcView.tpl'); // już nie podajemy pełnej ścieżki - foldery widoków są zdefiniowane przy ładowaniu Smarty
    }
}


