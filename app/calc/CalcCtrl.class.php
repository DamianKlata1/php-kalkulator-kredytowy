<?php
require_once $conf->root_path . '/libs/smarty/Smarty.class.php';
require_once $conf->root_path . '/libs/Messages.class.php';
require_once $conf->root_path . '/app/calc/CalcForm.class.php';
require_once $conf->root_path . '/app/calc/CalcResult.class.php';

class CalcCtrl
{

    private $msgs;   //wiadomości dla widoku
    private $form;   //dane formularza (do obliczeń i dla widoku)
    private $result; //inne dane dla widoku

    /**
     * Konstruktor - inicjalizacja właściwości
     */
    public function __construct()
    {
        //stworzenie potrzebnych obiektów
        $this->msgs = new Messages();
        $this->form = new CalcForm();
        $this->result = new CalcResult();
    }

    public function getParameters()
    {
        $this->form->amount = isset($_REQUEST ['amount']) ? $_REQUEST ['amount'] : null;
        $this->form->years = isset($_REQUEST ['years']) ? $_REQUEST ['years'] : null;
        $this->form->interest = isset($_REQUEST ['interest']) ? $_REQUEST ['interest'] : null;
    }

    public function validate()
    {
        if (!(isset($this->form->amount) && isset($this->form->years) && isset($this->form->interest))) {
            return false;
        }

        $this->msgs->addInfo(' Przekazano parametry ');
        if ($this->form->amount == "") {
            $this->msgs->addError('Nie podano kwoty');
        }
        if ($this->form->years == "") {
            $this->msgs->addError('Nie podano liczby lat');
        }
        if ($this->form->interest == "") {
            $this->msgs->addError('Nie podano oprocentowania');
        }
        if (!$this->msgs->isError()) {

            if (!is_numeric($this->form->amount)) {
                $this->msgs->addError('Kwota nie jest liczbą całkowitą');
            }
            if (!is_numeric($this->form->years)) {
                $this->msgs->addError('Czas kredytu nie jest liczbą całkowitą');
            }
            if (!is_numeric($this->form->interest)) {
                $this->msgs->addError('Oprocentowanie nie jest liczbą całkowitą');
            }
        }
        return !$this->msgs->isError();
    }

    function process()
    {
        $this->getParameters();
        if ($this->validate()) {

            //konwersja parametrów na int
            $this->form->amount = intval($this->form->amount);
            $this->form->years = intval($this->form->years);
            $this->form->interest = intval($this->form->interest);
            $this->msgs->addInfo('Parametry poprawne.');

            //wykonanie operacji
            $amountOfMonths = $this->form->years * 12;

            $unroundedresult = ($this->form->amount + $this->form->amount * ($this->form->interest / 100)) / $amountOfMonths;
            $this->result->result = round($unroundedresult, 2);

            $this->msgs->addInfo('Wykonano obliczenia.');
        }
        $this->generateView();
    }

    public function generateView()
    {
        global $conf;

        $smarty = new Smarty();
        $smarty->assign('conf',$conf);

        $smarty->assign('page_title','Przykład 06');
        $smarty->assign('page_description','Aplikacja z jednym "punktem wejścia". Model MVC, w którym jeden główny kontroler używa różnych obiektów kontrolerów w zależności od wybranej akcji - przekazanej parametrem.');
        $smarty->assign('page_header','Kontroler główny');

        $smarty->assign('msgs',$this->msgs);
        $smarty->assign('form',$this->form);
        $smarty->assign('res',$this->result);

        $smarty->display($conf->root_path.'/app/calc/CalcView.html');
    }
}


