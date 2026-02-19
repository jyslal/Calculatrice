<?php
//==============================================================================================================================
//=                                                                                                                            =
//=                                           Code: view.php                                                                   =
//=                                           Autor: Jyslal                                                                    =
//=                                                                                                                            =
//==============================================================================================================================

    class Model{
        //attributs
        private $Nombre1;
        private $Nombre2;
        private $operation;

        //methodes
        //constructeur
        public function __construct($Nombre1, $Nombre2, $operation){
            $this->Nombre1 = $Nombre1;
            $this->Nombre2 = $Nombre2;
            $this->operation = $operation;
        }
        //getters et setters
        public function getNombre1(){
            return $this->Nombre1;
        }
        public function getNombre2(){
            return $this->Nombre2;
        }
        public function getOperation(){
            return $this->operation;
        }
        public function setNombre1($Nombre1){
            $this->Nombre1 = $Nombre1;
        }
        public function setNombre2($Nombre2){
            $this->Nombre2 = $Nombre2;
        }
        public function setOperation($Operation){
            $this->operation = $operation;
        }

        

    }


?>