<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User_model extends CI_Model {
    public function __construct() {
        parent::__construct(); // Call the Model constructor
        $this->pdo = $this->load->database('pdo', true);
    }

    public function login($username, $password) {
        $stmt = "SELECT * FROM user WHERE username = ? AND password = ? LIMIT 1";
        $query = $this->pdo->query($stmt, array($username, md5($password)));  
        
        if($query->num_rows() == 1) {
            $row = $query->row(); 
            return $row;
        }
        else return false;
    }

    public function get_user_role($id) {
        $stmt = "SELECT * FROM user_role WHERE id = ?";
        $query = $this->pdo->query($stmt, $id);  
        
        if($query->num_rows() == 1) {
            $row = $query->row(); 
            return $row->name;
        }
        else return false;
    }
    public function register($first_name, $surname, $email, $username, $password) {
        $stmt = "INSERT INTO user(first_name, surname, email, username, password) VALUES(?, ?, ?, ?, ?)";
        $query = $this->pdo->query($stmt, array($first_name, $surname, $email, $username, $password));  
        
        if($query) return true;
        else return false;
    }
}
?>