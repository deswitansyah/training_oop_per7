<?php 
	namespace controller;

	use controller\Database as DB;
	class User extends DB
	{
		public function login($data)
		{
			$sql = $this->prepare("
				SELECT * FROM users WHERE username = '".$data['username']."' AND password = md5('".$data['password']."')
			");
			$sql->execute();
			if($sql->rowCount() == 1){
				$result = $sql->fetch();
				$_SESSION['username'] = $result['username'];
				$_SESSION['id'] = $result['id'];
				$_SESSION['is_login'] = TRUE;
				header('location:index.php');
			} else {
				header('location:?login&failed');
			}
		}
		public function logout()
		{
			$_SESSION['username'] = NULL;
			$_SESSION['id'] = NULL;
			$_SESSION['is_login'] = NULL;
			header('location:index.php');

		}
	}