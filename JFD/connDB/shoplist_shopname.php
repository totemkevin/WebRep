<?php
//This class was generated by PHPDBParser(Java) at 2015/06/02 22:25:30
class shoplist_shopname
{
	//Mysql connection
	private $db;
	//Execute result
	private $Result;
	//rows number of result
	private $Rows;

	//Database fields
	public $id;
	public $shopname;
	public $account;
	
	public function __construct($db)
	{
		$this->db=$db;
	}

	public function Insert($id,$shopname)
	{
		$sql = 'INSERT INTO `shoplist_shopname` (`shopname`) VALUES (\''.$shopname.'\');';
		$this->db->query($sql);
	}

	public function Update($id,$shopname)
	{
		$sql = 'UPDATE `shoplist_shopname` SET `shopname`=\''.$shopname.'\' ;';
		$this->db->query($sql);
	}

	public function Select()
	{
		$this->Rows=0;
		$sql="SELECT * FROM `shoplist_shopname`";
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
			$this->shopname=$temp['shopname'];
			$this->account=$temp['account'];
			$this->Rows--;
			return true;
		}
		return false;
	}
	public function SelectByClassName($className)
	{
		$this->Rows=0;
		$sql = "select * from `shoplist_shopname` where `className` ='".$className."'";
		$this->Result=$this->db->query($sql);
		$this->Rows=$this->db->num_rows($this->Result);	
	}
}
?>