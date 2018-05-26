<?php 
namespace controller;

use controller\Database as DB ;

class Category extends DB 
{
	public function getAllCategory()
	{
		$sql = $this->prepare("SELECT * FROM category_blog ORDER BY id DESC ");
		$sql->execute();

		return $sql->fetchAll();
	}

	public function getPostByCategory($id_category)
	{
		$sql = $this->prepare("
			SELECT posts.*, category_blog.category_name
			FROM posts, category_blog WHERE category_blog.id = posts.id_category
			AND posts.id_category = '$id_category'
			");
		$sql->execute();

		return $sql->fetchAll();
	}
}