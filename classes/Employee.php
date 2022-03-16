<?php

require_once __DIR__ . '/User.php';

class Employee extends User{
    protected $livello;

    public function __construct($name,$email,$livello){
        //codice richiamato dalla classe padre
        parent::__construct($name,$email);
        
        //codice nuovo 
        $this->livello = $livello;
    }
    
    public function setLivello($livello){
        if(is_numeric($livello)&& $livello >= 0 && $livello <= 5){
            $this->livello = $livello;
        } 
    }

    public function setDiscount(){
        $this->discount = $this->livello * 5;
    }

    public function getDiscount(){
       $valore = parent::getDiscount();
       return $valore . 'prova';
    }

    //con private mi da un errore se volessi accedere alla classe email 
    public function getImpiegatoEmail(){
        echo $this->email;
    }
}