<?php
//This class was generated by PHPDBParser(Java) at 2015/07/22 20:09:09
class addclass
{
	//Mysql connection
	private $db;
	//Execute result
	private $Result;
	//rows number of result
	private $Rows;

	//Database fields
	public $pat_name;
	public $class_name;
	public $description;

	public function __construct($db)
	{
		$this->db=$db;
	}

	public function Insert($pat_name,$class_name,$description)
	{
		$sql = 'INSERT INTO `class` (`pat_name`,`class_name`,`description`) VALUES (\''.$pat_name.'\',\''.$class_name.'\',\''.$description.'\');';
		$this->db->query($sql);
	}

	public function Update($pat_name,$class_name,$description)
	{
		$sql = 'UPDATE `class` SET `pat_name`=\''.$pat_name.'\' ,`class_name`=\''.$class_name.'\' ,`description`=\''.$description.'\' ;';
		$this->db->query($sql);
	}

	public function Select()
	{
		$this->Rows=0;
		$sql="your sql command here";
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
			$this->pat_name=$temp['pat_name'];
			$this->class_name=$temp['class_name'];
			$this->description=$temp['description'];
			$this->Rows--;
			return true;
		}
		return false;
	}
}
?>