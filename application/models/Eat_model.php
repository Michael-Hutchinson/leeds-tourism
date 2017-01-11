<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Eat_model extends CI_Model {
    public function __construct() {
        parent::__construct();
		$this->pdo = $this->load->database('pdo', true);
	}
    
	public function get_left_nav_headings() {
		$query = $this->pdo->query("SELECT * FROM section_category WHERE section_id = (SELECT id FROM section WHERE name = 'Eat')");
		$result = $query->result();

		if($query) return $result;
	  	else return false;
	}

	public function get_left_nav_sub_headings($section_category_id) {
		$stmt = "SELECT * FROM section_sub_category WHERE section_category_id = ?";
	    $query = $this->pdo->query($stmt, $section_category_id);
		
		if($query->num_rows() > 0) return $query->result();
	  	else return false;
	}

	public function get_eat($id) {
		$stmt="SELECT * FROM section_sub_category WHERE id = ? AND section_id = '3'"; 
	    $query = $this->pdo->query($stmt, $id);
		
		if($query->num_rows() == 1) {
   			$row = $query->row(); 
   			return $row;
   		}
   		else return false;
	}

	public function get_all_eat() {
		$query = $this->pdo->query("SELECT * FROM section_sub_category WHERE section_id = (SELECT id FROM section WHERE name = 'Eat')");  
		$result = $query->result();

		if($query) return $result;
	  	else return false;
	}

	public function edit_eat($id, $section_category_id, $name, $title, $body) {
		$stmt = "UPDATE section_sub_category SET section_category_id = ?, name = ?, title = ?, body = ? WHERE id = ?";
		$query = $this->pdo->query($stmt, array($section_category_id, $name, $title, $body, $id));
	    
	    if($query) return true;
        else return false;
	}

	public function delete_eat($id) {
		$stmt = "DELETE FROM section_sub_category WHERE id = ?";
        $query = $this->pdo->query($stmt, $id);  
        
        if($query) return true;
        else return false;	
	}

	public function add_eat($name, $title, $body, $section_category_id) {
		$stmt = "INSERT INTO section_sub_category(name, title, body, section_category_id, section_id) VALUES (?, ?, ?, ?, '3')";
        $query = $this->pdo->query($stmt, array($name, $title, $body, $section_category_id));  
        
        if($query) return true;
        else return false;
	}
}
?>