<?php
class Staff_Pub extends Database
{
	public function insert_staff_pub($post,$faculty,$publication)
	{
		$req=$this->getPDO()->prepare("INSERT INTO staff_publication(post,faculty,publication,date) 
																VALUES (?,?,?,NOW())");
		$req->execute(array($post,$faculty,$publication));
		return $req;
		//$req->execute('SELECT FROM users title WHERE id_number ='?'')
		
	}
	
	public function nbre_staff_pub()
	{
		$req=$this->getPDO()->query("SELECT COUNT(id) as nbre_pub FROM staff_publication");
		$res=$req->fetchAll(PDO::FETCH_CLASS);
		$nbre_pub=$res[0]->nbre_pub;
		return $nbre_pub;
	}
	
	public function get_staff_one()
	{
		$req=$this->getPDO()->query("SELECT * FROM staff_publication ORDER BY id DESC");
		$res=$req->fetchAll(PDO::FETCH_OBJ);
		return $res;
		
	}
	
	
	
	public function get_pub_staff($cpage,$perpage)
	{
		$req=$this->getPDO()->query("SELECT * FROM staff_publication ORDER BY id DESC LIMIT ".(($cpage -1)*$perpage).",$perpage");
		$res=$req->fetchAll(PDO::FETCH_OBJ);
		return $res;
		
	}
	
}
	