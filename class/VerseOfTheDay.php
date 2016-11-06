<?php

class VerseOfTheDay extends Database
{
	public function insertVerse ($verset)
	{
		$req=$this->getPDO()->prepare("INSERT INTO verse_of_the_day(verse,date) VALUES(?,NOW())");
		$req->execute(array($verset));
		echo"<p class='text-success'>Verse send</p>";
	}
	
	public function getVerse()
	{
		$req=$this->getPDO()->query("SELECT * FROM verse_of_the_day ORDER BY id DESC");
		$res=$req->fetchAll(PDO::FETCH_OBJ);
		return $res;
		
	}
	
}

