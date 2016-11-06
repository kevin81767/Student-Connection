<?php
class Student_Pub extends Database

{
	public function insert_student_pub($F_name,$L_name,$Id_number,$Faculty,$publication)
	{
		$req=$this->getPDO()->prepare("INSERT INTO student_publication 
										(first_name,last_name,id_number,faculty,publication,date)
											VALUES (?,?,?,?,?,NOW())");
		$req->execute(array($F_name,$L_name,$Id_number,$Faculty,$publication));
		return $req;			
	}
	
	public function nbre_pub()
	{
		$req=$this->getPDO()->query("SELECT COUNT(id) as nbre_arts FROM student_publication");
		$res=$req->fetchAll(PDO::FETCH_CLASS);
		$nbre_arts=$res[0]->nbre_arts;
		return $nbre_arts;
	}
	
	public function get_fac_pub($faculty,$cpage,$perpage)
	{
		$req=$this->getPDO()->prepare("SELECT * FROM student_publication 
											WHERE faculty = ? ORDER by id DESC LIMIT ".(($cpage -1)*$perpage).",$perpage");
		$req->execute(array($faculty));
		$res=$req->fetchAll(PDO::FETCH_OBJ);
		return $res;
	}
	
	public function nbre_pub_fac($faculty)
	{
		$req=$this->getPDO()->prepare("SELECT COUNT(id) as nbre_arts FROM student_publication 
															WHERE faculty = ? ");
		$req->execute(array($faculty));
		$res=$req->fetchAll(PDO::FETCH_CLASS);
		$nbre_arts=$res[0]->nbre_arts;
		return $nbre_arts;
	}
	
	public function my_pub($first_name,$last_name,$id_number) //Get only my posts
	{
		$req=$this->getPDO()->prepare("SELECT * FROM student_publication WHERE first_name = ? AND
										last_name = ? AND id_number = ? ORDER BY id DESC");
		$req->execute(array($first_name,$last_name,$id_number));
		$res=$req->fetchAll(PDO::FETCH_OBJ);
		return $res;
	}
	
	public function get_Pub($cpage , $perpage) //
	{
		$req=$this->getPDO()->query("SELECT * FROM student_publication 
															ORDER BY id DESC LIMIT ".(($cpage -1)*$perpage).",$perpage");
		$res=$req->fetchAll(PDO::FETCH_OBJ);
		return $res;
	}
	
	public function get_one_pub($id) //GET THE post WHICH THEY WANT TO COMMENT
	{
		$req=$this->getPDO()->prepare("SELECT * FROM student_publication WHERE id = ? ");
		$req->execute(array($id));
		$res=$req->fetchAll(PDO::FETCH_OBJ);
		return $res;
	}

	/*public function getAllInfo($id)
	{
		$req=$this->getPDO()->prepare("SELECT * FROM studen_publication WHERE ")
	}
	*/
}
	
	
