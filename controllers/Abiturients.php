<?php

    require_once $_SERVER['DOCUMENT_ROOT'] . '/models/AbiturientsModel.php';

    class Abiturients {

        private $abiturientsModel;


        public function __construct(){
            $this->abiturientsModel = new AbiturientsModel();
        }

        public function getList(){
            return $this->abiturientsModel->getList();
        }

        public function getRowCount(){
            return $this->abiturientsModel->getRowCount();
        }


}

    //$init = new Books();

    if(! $_SERVER['REQUEST_METHOD']){
        //return $init->getList();
    }


    //Ensure that user is sending a post request
//    if($_SERVER['REQUEST_METHOD'] == 'POST'){
//
//
//    }else{
//        switch($_GET['q']){
//            case 'logout':
//                $init->logout();
//                break;
//            default:
//            redirect("../index.php");
//        }
//    }

    