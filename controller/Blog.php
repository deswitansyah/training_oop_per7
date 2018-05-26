<?php 
namespace controller;

use controller\Database as DB ;

class Blog extends DB 
{
	public function numRows()
	{
		$sql = $this->prepare('SELECT COUNT(*) FROM posts');
		$sql->execute();
		return $sql->fetchColumn();
	}
	public function getAll()
	{
		  $per_page = 4;
		  $cur_page = 1;
		  if(isset($_GET['page'])) {
		    $cur_page = $_GET["page"];
		    $cur_page = ($cur_page > 1) ? $cur_page : 1;
		  }
		  $total_data = $this->numRows();
		  $total_page = ceil($total_data/$per_page);
		  $offet = ($cur_page - 1) * $per_page;

		$sql = $this->prepare("SELECT * FROM posts LIMIT $per_page OFFSET $offet");
		$sql->execute();

		return $sql->fetchAll();
	}
	
}