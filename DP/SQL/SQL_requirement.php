<?php
//This class was generated by PHPDBParser(Java) at 2015/07/22 20:12:55
class requirement
{
	//Mysql connection
	private $db;
	//Execute result
	private $Result;
	//rows number of result
	private $Rows;

	//Database fields
	public $id;
	public $description;

	public function __construct($db)
	{
		$this->db=$db;
	}

	public function Insert($id,$description)
	{
		$sql = 'INSERT INTO `requirement` (`id`,`description`) VALUES (\''.$id.'\',\''.$description.'\');';
		$this->db->query($sql);
	}

	public function Update($id,$description)
	{
		$sql = 'UPDATE `requirement` SET `id`=\''.$id.'\' ,`description`=\''.$description.'\' ;';
		$this->db->query($sql);
	}

	public function Select($req)
	{
		$this->Rows=0;
		$sql="select * from `requirement` where `description` LIKE '%".$req."%'";
		//store return data to $this->Result
		$this->Result=$this->db->query($sql);
		//count the numbers of return data and save to $this->Rows
		$this->Rows=$this->db->num_rows($this->Result);
	}

	public function Delete()
	{
		$sql="your sql command here";
		$this->db->query($sql);
	}

	public function HasNext()
	{
		if($this->Rows>0)
		{
			$temp=$this->db->fetch_array($this->Result);
			$this->id=$temp['id'];
			$this->description=$temp['description'];
			$this->Rows--;
			return true;
		}
		return false;
	}
}
?>