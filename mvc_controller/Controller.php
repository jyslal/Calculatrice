<?php
//==============================================================================================================================
//=                                                                                                                            =
//=                                         Code: Controller.php                                                               =
//=                                           Autor: Jyslal                                                                    =
//=                                                                                                                            =
//==============================================================================================================================
    require "mvc_model/Model.php";
    class Controller{
        //attributs
        private $model;
        //methodes
        public function __construct($model){
            $this->model = $model;
        }
        public function initView($Nombre1, $Nombre2, $Operation){   

            if(isset($Nombre1) && isset($Nombre2) && isset($Operation)){

                $n1 = filter_var($Nombre1, FILTER_VALIDATE_INT);
                $n2 = filter_var($Nombre2, FILTER_VALIDATE_INT);

                if($n1 === false || $n2 === false){
                    header("Location: index.php");
                    exit();
                    return;
            }

            $this->initController($n1, $n2, $Operation);
            $this->makeOperation($n1, $n2, $Operation);
            }
        }

        public function initController($Nombre1,$Nombre2,$Operation){
            
            $this->model->setNombre1($Nombre1);
            $this->model->setNombre2($Nombre2);
            $this->model->setOperation($Operation);

        }
        public function makeOperation($Nombre1, $Nombre2, $Operation){
            $this->Nombre1 = $Nombre1;
            $this->Nombre2 = $Nombre2;
            $this->Operation = $Operation;
            echo $Operation;
            if($Operation == "addition"){
                $result = (int)$Nombre1 + (int)$Nombre2;
                $this->showResult($result);

            }elseif($Operation == "soustraction"){
                $result = (int)$Nombre1 - (int)$Nombre2;
                $this->showResult($result);
                
            }elseif($Operation == "division"){
                $result = (int)$Nombre1 / (int)$Nombre2;
                $this->showResult($result);
                
            }elseif($Operation == "multiplication"){
                $result = (int)$Nombre1 * (int)$Nombre2;
                $this->showResult($result);
                
            }else{
                echo "Opération non valide";

            }

        }
        public function showResult($result){
            ?><meta http-equiv="refresh" content="0;url=result.php?result=<?=$result?>"><?php 
        
        }
    } 



?>