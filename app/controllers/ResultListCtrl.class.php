<?php
namespace app\controllers;

class ResultListCtrl{

    private $records;

    public function action_resultList(){
        try{
            $this->records = getDB()->select("results", [
                "idresult",
                "amount",
                "years",
                "interest",
                "result",
                "dateofsave"
            ]);
        } catch (PDOException $e){
            getMessages()->addError('Wystąpił błąd podczas pobierania rekordów');
            if (getConf()->debug) getMessages()->addError($e->getMessage());
        }
        getSmarty()->assign('results',$this->records);  // lista rekordów z bazy danych
        getSmarty()->assign('page_title','Historia obliczeń');
        getSmarty()->assign('page_header',' ');
        getSmarty()->assign('page_description',' ');
        getSmarty()->display('ResultList.tpl');
    }
    public function action_resultListClear(){
        try{
            // 2. usunięcie rekordu
            getDB()->delete("results",[]);
            getMessages()->addInfo('Pomyślnie usunięto rekord');
        } catch (PDOException $e){
            getMessages()->addError('Wystąpił błąd podczas usuwania rekordu');
            if (getConf()->debug) getMessages()->addError($e->getMessage());
        }
        forwardTo('resultList');
    }
}

