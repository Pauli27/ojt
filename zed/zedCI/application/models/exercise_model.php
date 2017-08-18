<?php 
class crud_model extends CI_Model
{
function insert_into_db()
{
$fn = $_POST['firstname'];
$ln = $_POST['lastname'];
$un = $_POST['username'];
$pw = $_POST['password'];
$this->db->query("INSERT INTO mvc3 VALUES('$fn','$ln','$un','$pw')");
}
}
?>