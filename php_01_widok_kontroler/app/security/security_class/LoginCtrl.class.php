<?php
require_once $conf->root_path.'/lib/smarty/libs/Smarty.class.php';
require_once $conf->root_path.'/lib/Messages.class.php';
require_once $conf->root_path.'/app/security/security_class/LoginForm.class.php';

class LoginCtrl{
    private $msgs;
    private $form; 
    
    public function __construct(){
        $this->msgs = new Messages();
        $this->form = new LoginForm();
    }
    public function getParamsLogin(){
        $this->form->login = isset ($_REQUEST ['login']) ? $_REQUEST ['login'] : null;
        $this->form->pass = isset ($_REQUEST ['pass']) ? $_REQUEST ['pass'] : null;
    }
    public function validateLogin(){
        if ( ! (isset($this->form->login) && isset($this->form->pass))) {
            return false;
        }
    
        if ( $this->form->login == "") {
            $this->msgs->addError('Nie podano loginu');
        }
        if ( $this->form->pass == "") {
            $this->msgs->addError('Nie podano hasła');
        }
    
        if ($this->msgs->isError()) return false;
    
        if ($this->form->login == "admin" && $this->form->pass == "admin") {
            session_start();
            $_SESSION['role'] = 'admin';
            return true;
        }
        if ($this->form->login == "user" && $this->form->pass == "user") {
            session_start();
            $_SESSION['role'] = 'user';
            return true;
        }
        
        $this->msgs->addError('Niepoprawny login lub hasło');
        return false; 
    }
    public function processLogin(){
        global $conf;
        $this->getParamsLogin();
        if (! ($this->validateLogin())) {
            header ($conf->root_path.'/app/security/login.html');
        } else { 	
            header("Location: ".$conf->app_url);
        }
        $this->generateViewLogin();
    }
        
    public function generateViewLogin(){
        global $conf, $role;
        $smarty = new Smarty();
        $smarty->assign('conf',$conf);

        $smarty->assign('page_title','Kalkulator kredytowy');
        $smarty->assign('page_description','obiektowość');
        $smarty->assign('page_header','obiektowość');

        $smarty->assign('form',$this->form);
        $smarty->assign('role',$role);
        $smarty->assign('msgs',$this->msgs);

        $smarty->display($conf->root_path.'/app/security/login.html');
    }

}


