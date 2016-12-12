<?php
 
class Database
{
	protected $db_name;
	protected $db_user;
	protected $db_pass;
	protected $db_host;
	protected $pdo;


	public function __construct ( $db_name , $db_user = 'root' , $db_pass =  'kondor' , $db_host= 'localhost' )
	
	{
		$this->db_name=$db_name;
		$this->db_user=$db_user;
		$this->db_pass=$db_pass;
		$this->db_host=$db_host;
	}

	//create the PDO statement

	
	public function getPDO()
	{
		$pdo=New PDO("mysql:dbname=db_auca;host=localhost","root","kondor");
		$pdo->setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION);
		$this->pdo=$pdo;
		return $pdo;
		
	}

	//insert Data
	
	public function insert ($F_name,$L_name,$Id_number,$Faculty,$Semester,$Password)
	{
		$req=$this->getPDO()->prepare("INSERT INTO student_info(first_name,last_name,id_number,faculty,semester,password) VALUES(?,?,?,?,?,?)");
		$req->execute(array($F_name,$L_name,$Id_number,$Faculty,$Semester,$Password));
		return $req;
		
	}
	public function insert_avatar($first_name,$last_name,$id_number,$name_avatar)
	{
		$req=$this->getPDO()->prepare("UPDATE student_info SET avatar=? WHERE first_name=? AND last_name=? AND id_number=?");
		$req->execute(array($name_avatar,$first_name,$last_name,$id_number));
		return $req;
	}

	public function assignment_st($teacher,$assignment,$name_document)
	{
		$req=$this->getPDO()->prepare("INSERT INTO assignment_teacher (teacher,assignment,document) VALUES (?,?,?)");
		$req->execute(array($teacher,$assignment,$name_document));
		return $req;
	}


	public function GetDate()
	{
		$da=$this->getPDO()->prepare("SELECT NEXT_DAY ('25-11-2016','FRIDAY') FROM DUAL");
		return $da;
	}
	
	
	
}