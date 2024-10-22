<?php
class Items{   
    
    private $itemsTable = "weather_data";      
    public $id;
    public $date;
    public $temperature;
    public $tmin;
    public $tmax;   
    public $precipitation; 
	public $snow; 
    public $wdir;
	public $wspeed;
	public $pressure; 
    
	
    public function __construct($db){
        $this->conn = $db;
    }	
	
	//function to load all weather data
	function read(){	
		$stmt = $this->conn->prepare("SELECT * FROM ".$this->itemsTable);		
		$stmt->execute();			
		$result = $stmt->get_result();		
		return $result;	
	}

	//function to search weather with date
	function filter($date){	
	
		$stmt = $this->conn->prepare("SELECT * FROM ".$this->itemsTable." WHERE date = '$date'");
		$stmt->execute();		
		$result = $stmt->get_result();		
		return $result;	
	}
	

	//function to create weather data in specific date
	function create(){
		
		//prepare sql statement
		$stmt = $this->conn->prepare("
			INSERT INTO ".$this->itemsTable."(`date`, `tavg`, `tmin`, `tmax`, `prcp`, `snow`,`wdir`,`wdspd`,`pres`)
			VALUES(?,?,?,?,?,?,?,?,?)");

		//sanitize data
		$this->date = htmlspecialchars(strip_tags($this->date));
		$this->temperature = htmlspecialchars(strip_tags($this->temperature));
		$this->tmin = htmlspecialchars(strip_tags($this->tmin));
		$this->tmax = htmlspecialchars(strip_tags($this->tmax));
		$this->precipitation = htmlspecialchars(strip_tags($this->precipitation));
		$this->snow = htmlspecialchars(strip_tags($this->snow));

		$this->wdir = htmlspecialchars(strip_tags($this->wdir));
		$this->wspeed = htmlspecialchars(strip_tags($this->wspeed));
		$this->pressure = htmlspecialchars(strip_tags($this->pressure));
		
		//bind parameters to query
		$stmt->bind_param("ssiisiiid", $this->date, $this->temperature, $this->tmin, $this->tmax, $this->precipitation,$this->snow, $this->wdir,$this->wspeed,$this->pressure);
		
		if($stmt->execute()){
			return true;
		}
	 
		return false;		 
	}
		

}
?>