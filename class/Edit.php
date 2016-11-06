<?php

class Edit extends Database
{
	
	public function update_first_name($first_name)  //UPDATE THE FIRST NAME OF A USER
	{
		$req=$this->getPDO()->prepare("UPDATE student_info SET first_name = $first_name");
		$res=$req->fetchAll(PDO::FETCH_OBJ);
		return $res;
	}

	/*FUNCTION TO UPDATE THE POST*/

	public function update_post($id,$thepost)
	{
		$req=$this->getPDO()->prepare("UPDATE student_publication SET publication = ?
										WHERE id= ? ");
		$req->execute(array($thepost,$id));
		return $req;
	}
	
	public function update_last_name($last_name)
	{
		$req=$this->getPDO()->prepare("UPDATE student_info SET last_name = $last_name");
		$req=$res->fetchAll(PDO::FETCH_OBJ);
		return $res;
	}
	
	public function update_id_number($id_number)
	{
		
	}
	
	public function update_faculty($faculty)
	{
		
	}
	
	public function update_semester($semester)
	{
		
	}
	
	
}
?>