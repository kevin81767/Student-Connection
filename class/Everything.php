<?php

class Everything extends Database
{
	public function every($first_name,$id_number)
	{
		$req=$this->getPDO()->prepare("SELECT * from student_info WHERE first_name=? AND id_number=?");
		$req->execute(array($first_name,$id_number));
		$res=$req->fetchAll(PDO::FETCH_OBJ);
		return $res;

	}

	
}