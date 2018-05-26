<?php 

namespace controller;

use PDO;

class Database extends PDO
{
	private $host = 'localhost';
	private $dbName = 'blog_db';
	private $username = 'root';
	private $password = '';

	function __construct()
	{
		parent::__construct('mysql:host='.$this->host.';dbname='.$this->dbName,
			$this->username,
			$this->password
		);
	}
}