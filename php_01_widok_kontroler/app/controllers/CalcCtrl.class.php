<?php

namespace app\controllers;

use app\forms\CalcForm;
use app\transfer\CalcResult;

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
	}
	public function validate(){
		if ( ! (isset($this->form->kwota) && isset($this->form->czas) && isset($this->form->procent))) {
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
	}

	$this->generateView();
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

