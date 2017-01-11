<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Blog_Post_model extends CI_Model {
    public function __construct() {
        parent::__construct();
		$this->pdo = $this->load->database('pdo', true);
	}
    
	public function get_all_posts() {
		$query = $this->pdo->query("SELECT * FROM post");  
		$result = $query->result();

		if($query) return $result;
	  	else return false;
	}

	public function get_post($id) {
		$stmt="SELECT * FROM post WHERE id = ?"; 
	    $query = $this->pdo->query($stmt, $id);   
		
		if($query->num_rows() == 1) {
   			$row = $query->row(); 
   			return $row;
   		}
   		else return false;
	}
	public function add_post($title, $author, $image, $body) {
		$stmt = "INSERT INTO post(title, author, image, body) VALUES(?, ?, ?, ?)";
        $query = $this->pdo->query($stmt, array($title, $author, $image, $body));  
        
        if($query) return true;
        else return false;
	}

	public function edit_post($id, $title, $author, $image, $body) {
		$stmt = "UPDATE post SET title = ?, author = ?, image = ?, body = ? WHERE id = ?";
		$query = $this->pdo->query($stmt, array($title, $author, $image, $body, $id));
	    
	    if($query) return true;
        else return false;
	}

	public function delete_post($id) {
		$stmt = "DELETE FROM post WHERE id = ?";
        $query = $this->pdo->query($stmt, $id);  
        
        if($query) return true;
        else return false;	
	}
}
?>