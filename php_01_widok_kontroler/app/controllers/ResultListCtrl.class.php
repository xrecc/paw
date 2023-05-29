<?php

namespace app\controllers;

use PDOException;

class ResultListCtrl {

	private $records; 

	public function action_resultList(){
		
		try{
			$this->records = getDB()->select("results", [
					"idresult",
					"nick",
					"resultMonth",
                    "resultYear",
                    "resultEnd",
				]);
		} catch (PDOException $e){
			getMessages()->addError('Wystąpił błąd podczas pobierania rekordów');
			if (getConf()->debug) getMessages()->addError($e->getMessage());			
		}	
		 
		getSmarty()->assign('results',$this->records);  
		getSmarty()->display('ResultList.html');
	}
	
}