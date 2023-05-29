<?php

namespace app\controllers;

use app\forms\CalcForm;
use app\transfer\CalcResult;
use PDOException;

class CalcCtrl{

	private $form;
	private $result;
	public function __construct(){
		$this->form = new CalcForm();
		$this->result = new CalcResult();
	}
	public function getParams(){
		$this->form->kwota = getFromRequest('kwota');
		$this->form->czas = getFromRequest('czas');
		$this->form->procent = getFromRequest('procent');
		$this->form->nick = getFromRequest('nick');
	}
	public function validate(){
		if ( ! (isset($this->form->kwota) && isset($this->form->czas) && isset($this->form->procent) && isset($this->form->nick))) {
			return false;
		}
	
		if ( $this->form->kwota == "") {
			getMessages()->addError('Nie podano kwoty');
		}
	
		if ( $this->form->czas == "") {
			getMessages()->addError('Nie podano na ile lat');
		}
	
		if ( $this->form->procent == "") {
			getMessages()->addError('Nie podano oprocentowania');
		}
		if ( $this->form->nick == "") {
			getMessages()->addError('Nie podano nazwy');
		}
	
		if (! (getMessages()->isEmpty())){
			return false;
		} 
			
			if (! is_numeric( $this->form->kwota)) {
				getMessages()->addError('Kwota nie jest liczbą całkowitą');
			}
			
			if (! is_numeric( $this->form->czas)) {
				getMessages()->addError('Liczba lat nie jest liczbą całkowitą');
			}
			if (! is_numeric( $this->form->procent)) {
				getMessages()->addError('Procent nie jest liczbą całkowitą');
			}
			if (is_numeric( $this->form->nick)) {
				getMessages()->addError('Nick nie może mieć samych liczb');
			}
	
			if (! (getMessages()->isEmpty())) return false;
			else return true;
	}
	public function action_calcCompute(){
		$this->getParams(); 
		if($this->validate()){

				$this->form->kwota = intval($this->form->kwota);
				$this->form->czas = intval($this->form->czas);
				$this->form->procent = floatval($this->form->procent);
			
				$this->result->month= round((($this->form->kwota/($this->form->czas*12))+($this->form->kwota/($this->form->czas*12))*($this->form->procent/100)),2);
		
				 if (inRole('admin')){
					$this->result->year = $this->result->month*12;
				 }else {
					$this->result->year = 'tylko dla admina';
				 }
				 if (inRole('admin')){
					$this->result->end = $this->result->month*($this->form->czas*12);
				 }else {
					$this->result->end = 'tylko dla admina';
				 }
				 $this->action_resultSave();
	}

	$this->generateView();
	}
	public function action_resultSave(){
			
		if ($this->validate()) {
			try {
				getDB()->insert("results", [
					"nick" => $this->form->nick,
					"resultMonth" => $this->result->month,
					"resultYear" => $this->result->year,
                    "resultEnd" => $this->result->end
				]);
					

			} catch (PDOException $e){
				getMessages()->addError('Wystąpił nieoczekiwany błąd podczas zapisu rekordu');
				if (getConf()->debug) getMessages()->addError($e->getMessage());			
			}
			
			forwardTo('calcShow');

		} else {
			$this->generateView();
		}		
	}
	public function validateEdit() {

		$this->form->id = getFromRequest('id',true,'Błędne wywołanie aplikacji');
		return ! getMessages()->isError();
	}
	public function action_resultDelete(){		
		if ( $this->validateEdit() ){
			
			try{
				getDB()->delete("results", [
					"idresult" => $this->form->id
				]);
				getMessages()->addInfo('Pomyślnie usunięto rekord');
			} catch (PDOException $e){
				getMessages()->addError('Wystąpił błąd podczas usuwania rekordu');
				if (getConf()->debug) getMessages()->addError($e->getMessage());			
			}	
			forwardTo('resultList');
		} else {
			$this->generateView();
		}
				
	}
	public function action_calcShow(){
		getMessages()->addInfo('Witaj w kalkulatorze');
		$this->generateView();
	}
	public function generateView(){

		getSmarty()->assign('user',unserialize($_SESSION['user']));
		getSmarty()->assign('page_title','Kalkulator kredytowy');
		getSmarty()->assign('page_description','obiektowość');
		getSmarty()->assign('page_header','obiektowość');

		getSmarty()->assign('form',$this->form);
		getSmarty()->assign('res',$this->result);

		getSmarty()->display('calc.html');
	}

}

