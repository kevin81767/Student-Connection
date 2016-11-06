<?php

class Login extends Database
{
	 
	protected $rep;
	protected $first_name;
	protected $last_name;
	protected $faculty;
	
	
	
	public function check_login($Id_number,$Password)
	{
		
		$req=("SELECT first_name,last_name,id_number,faculty,avatar
					FROM  student_info 
					WHERE id_number= :id_number AND password= :password");
		$stmt=$this->getPDO()->prepare($req);
		$stmt->bindParam('id_number',$Id_number);
		$stmt->bindParam('password',$Password);		
		$stmt->execute();
		$rep=$stmt->fetchAll(PDO::FETCH_OBJ);
		return $rep;

	}
	
	
}