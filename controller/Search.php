<?php 
namespace controller;

use controller\Database as DB ;

class Search extends DB 
{
	public function getSearch()
	{
		$key = $_POST['search'];
		$sql = $this->prepare("SELECT * FROM posts WHERE title LIKE '%$key%'");
		$sql->execute();

		return $sql->fetchAll();
	}
}