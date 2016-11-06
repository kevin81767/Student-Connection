<?php
class Comment extends Database
{
	public function insert_comment($id_publication,$first_name,$last_name,$id_number,$faculty,$comment)
	{
		//insert a comment to a specific post
		$req=$this->getPDO()->prepare("INSERT INTO commentary(id_publication,first_name,last_name,
									id_number,faculty,comment,date)
											VALUES(?,?,?,?,?,?,NOW())");
		$req->execute(array($id_publication,$first_name,$last_name,$id_number,$faculty,$comment));
		return $req;
	}
	
	public function nbre_comment($id_publication)
	{
		$req=$this->getPDO()->prepare("SELECT COUNT(id) as nbre_comment FROM commentary 
										WHERE id_publication =? ");
		$req->execute(array($id_publication));
		$res=$req->fetchAll(PDO::FETCH_CLASS);
		$nbre_comment=$res[0]->nbre_comment;
		return $nbre_comment;
	}
	
	public function get_comment($id)
	{
		$req=$this->getPDO()->prepare("SELECT * FROM commentary WHERE id_publication = ? ORDER by id DESC LIMIT 0, 10");
		$req->execute(array($id));
		$res=$req->fetchAll(PDO::FETCH_OBJ);
		return $res;
		
	}
}