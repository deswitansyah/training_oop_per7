<?php 
namespace controller;

use controller\Database as DB ;

class Detail extends DB 
{
	public function getDetail($id)
	{
		$sql = $this->prepare("SELECT * FROM posts WHERE id = $id");
		$sql->execute();

		return $sql->fetch();
	}

	public function getAllComment()
	{
		$sql = $this->prepare("SELECT * FROM users");
		$sql->execute();

		return $sql->fetchAll();
	}

	public function saveComment($data)
	{
		$sql = $this->prepare(
			"INSERT comments(post_id, username, reply)
			VALUES('".$data['post_id']."','".$data['username']."','".$data['reply']."')"
		); 
		$sql->execute();

		echo '<script>window.location.href="index.php?detail='.$data['post_id'].'&success"</script>';
	}
	public function getById($posts_id)
	{
		$sql = $this->prepare(
			"SELECT comments.*, users.username, users.photo
			 FROM comments 
             JOIN posts ON comments.post_id = posts.id
			 JOIN users ON comments.username = users.username
			 WHERE comments.post_id = $posts_id 
			 ORDER BY id DESC "
		);
		$sql->execute();
		return $sql->fetchAll();
	}
}