<?php

    require_once $_SERVER['DOCUMENT_ROOT'] . '/models/BookModel.php';

    class Books {

        private $bookModel;
        
        public function __construct(){
            $this->bookModel = new BookModel();
        }

        public function getList(){
            return $this->bookModel->getList();
            return 'hello';
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

    