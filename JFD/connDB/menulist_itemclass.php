<?php
//This class was generated by PHPDBParser(Java) at 2015/05/30 22:47:38
class menulist_itemclass
{
	//Mysql connection
	private $db;
	//Execute result
	private $Result;
	//rows number of result
	private $Rows;

	//Database fields
	public $id;
	public $className;

	public function __construct($db)
	{
		$this->db=$db;
	}

	public function Insert($id,$className)
	{
		$sql = 'INSERT INTO `menulist_itemclass` (`id`,`className`) VALUES (\''.$id.'\',\''.$className.'\');';
		$this->db->query($sql);
	}

	public function Update($id,$className)
	{
		$sql = 'UPDATE `menulist_itemclass` SET `id`=\''.$id.'\' ,`className`=\''.$className.'\' ;';
		$this->db->query($sql);
	}

	public function Select()
	{
		$this->Rows=0;
		$sql="select * from `menulist_itemclass`";
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
			$this->className=$temp['className'];
			$this->Rows--;
			return true;
		}
		return false;
	}
}
?>