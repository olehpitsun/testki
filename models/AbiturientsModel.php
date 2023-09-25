<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/libraries/Database.php';

class AbiturientsModel {

    private $db;

    private $rowCount;

    public function __construct(){
        $this->db = new Database;
    }

    public function getList(){

        if (!isset ($_GET['page']) ) {
            $page = 1;
        } else {
            $page = $_GET['page'];
        }

        $results_per_page = 10;
        $page_first_result = ($page-1) * $results_per_page;


        $this->db->query('SELECT * FROM abiturients');

        $result = $this->db->resultSet();

        $number_of_result = $this->db->rowCount();



        $number_of_page = ceil ($number_of_result / $results_per_page);

        $this->rowCount = $number_of_page;

        $this->db->query('SELECT * FROM abiturients LIMIT ' . $page_first_result . ',' . $results_per_page);


        $row = $this->db->resultSet() ;

        //Check row
        if($this->db->rowCount() > 0){
            return $row;
        }else{
            return false;
        }
    }

    public function getRowCount(){
        return $this->rowCount;
    }



}