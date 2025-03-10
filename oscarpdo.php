<?php
require_once("dbvezerlo.php");

class Oscar{
    private $oscars=[];

    public function __construct(){
        $query = "SELECT m_ID, title,m_desc,pic FROM movie";
        $dbvez = new DBController();
        $this->oscars = $dbvez->executeSelectQuery($query);
        $dbvez->closeBD();
    }
    public function getAllOscars(){
        $query = 'SELECT m_ID,title,m_desc,pic FROM movies';
        return $this->db->executeSelectQuery($query);
    }
    public function getOscarsById($OscarId)
    {
        $query = "SELECT m_ID, title,m_desc,pic FROM movie WHERE , m_ID = ? ";
        return $this->db-exeuteSelectQuery($query [$OscarId]);
    }
    public function getOscarsByType($Mt_name){
        $query = "SELECT m_ID,title,m_desc,pic,movie_type.Mt
        FROM movie
        INNER JOIN movie_type on movie_type.Mt_ID = movie.m_type
        WHERE movie_type.Mt_name= ?"
        return $this->db->executeSelectQuery($query [$OscarId]);
    }
}

?>