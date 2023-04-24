<?php
require_once dirname(__FILE__).'/../../config.php';

require_once $conf->root_path.'/lib/smarty/libs/Smarty.class.php';
require_once $conf->root_path.'/lib/Messages.class.php';
require_once $conf->root_path.'/app/app_class/CalcForm.class.php';
require_once $conf->root_path.'/app/app_class/CalcResult.class.php';
require_once $conf->root_path.'/app/security/security_class/LoginCtrl.class.php';
include $conf->root_path.'/app/security/check.php';

class CalcCtrl{

	private $msgs;
	private $form;
	private $result;
	public function __construct(){
		$this->msgs = new Messages();
		$this->form = new CalcForm();
		$this->result = new CalcResult();
	}
	public function getParams(){
		$this->form->kwota = isset($_REQUEST['kwota']) ? $_REQUEST['kwota'] : null;
		$this->form->czas = isset($_REQUEST['czas']) ? $_REQUEST['czas'] : null;
		$this->form->procent = isset($_REQUEST['procent']) ? $_REQUEST['procent'] : null;
	}
	public function validate(){
		if ( ! (isset($this->form->kwota) && isset($this->form->czas) && isset($this->form->procent))) {
			return false;
		}
	
		if ( $this->form->kwota == "") {
			$this->msgs->addError('Nie podano kwoty');
		}
	
		if ( $this->form->czas == "") {
			$this->msgs->addError('Nie podano na ile lat');
		}
	
		if ( $this->form->procent == "") {
			$this->msgs->addError('Nie podano oprocentowania');
		}
	
		if (! ($this->msgs->isEmpty())){
			return false;
		} 
			
			if (! is_numeric( $this->form->kwota)) {
				$this->msgs->addError('Kwota nie jest liczbą całkowitą');
			}
			
			if (! is_numeric( $this->form->czas)) {
				$this->msgs->addError('Liczba lat nie jest liczbą całkowitą');
			}
			if (! is_numeric( $this->form->procent)) {
				$this->msgs->addError('Procent nie jest liczbą całkowitą');
			}	
			if (! ($this->msgs->isEmpty())) return false;
			else return true;
	}
	public function process() {
		$this->getParams(); 
		global $role;
		if($this->validate()){

				$this->form->kwota = intval($this->form->kwota);
				$this->form->czas = intval($this->form->czas);
				$this->form->procent = floatval($this->form->procent);
			
				$this->result->month= round((($this->form->kwota/($this->form->czas*12))+($this->form->kwota/($this->form->czas*12))*($this->form->procent/100)),2);
		
				if ($role == 'admin'){
					$this->result->year = $this->result->month*12;
				}else {
					$this->result->year = 'tylko dla admina';
				}
				if ($role == 'admin'){
					$this->result->end = $this->result->month*($this->form->czas*12);
				}else {
					$this->result->end = 'tylko dla admina';
				}
	}

	$this->generateView();
	}
	public function generateView(){
		global $conf, $role;

		$smarty = new Smarty();
		$smarty->assign('conf',$conf);

		$smarty->assign('page_title','Kalkulator kredytowy');
		$smarty->assign('page_description','obiektowość');
		$smarty->assign('page_header','obiektowość');

		$smarty->assign('role',$role);
		$smarty->assign('form',$this->form);
		$smarty->assign('res',$this->result);
		$smarty->assign('msgs',$this->msgs);

		$smarty->display($conf->root_path.'/app/calc.html');
	}
}

