<?
//This class was generated by PHPDBParser(Java) at 2015/07/22 20:11:47
class relatioship
{
	//Mysql connection
	private $db;
	//Execute result
	private $Result;
	//rows number of result
	private $Rows;

	//Database fields
	public $pat_name;
	public $class1;
	public $class2;
	public $type;
	public $description;

	public function __construct($db)
	{
		$this->db=$db;
	}

	public function Insert($pat_name,$class1,$class2,$type,$description)
	{
		$sql = 'INSERT INTO `relatioship` (`pat_name`,`class1`,`class2`,`type`,`description`) VALUES (\''.$pat_name.'\',\''.$class1.'\',\''.$class2.'\',\''.$type.'\',\''.$description.'\');';
		$this->db->query($sql);
	}

	public function Update($pat_name,$class1,$class2,$type,$description)
	{
		$sql = 'UPDATE `relatioship` SET `pat_name`=\''.$pat_name.'\' ,`class1`=\''.$class1.'\' ,`class2`=\''.$class2.'\' ,`type`=\''.$type.'\' ,`description`=\''.$description.'\' ;';
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
			$this->class1=$temp['class1'];
			$this->class2=$temp['class2'];
			$this->type=$temp['type'];
			$this->description=$temp['description'];
			$this->Rows--;
			return true;
		}
		return false;
	}
}
?>
