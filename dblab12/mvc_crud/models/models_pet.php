<?php
	class pet{
		public $petId , $petname , $medicalHistory , $ownerId;
		
		public function __construct($petId, $petname, $medicalHistory, $ownerId){
			$this->petId = $petId;
			$this->petname = $petname;
			$this->medicalHistory = $medicalHistory; 
			$this->ownerId = $ownerId;
		}
		public static function getAll(){
			$petList = [];
			require("connection_connect.php");
			$sql = "SELECT * FROM pet";
			$result = $conn->query($sql);
			while($my_row = $result->fetch_assoc()){
				$petId = $my_row["petId"];
				$petname = $my_row["petname"];
				$medicalHistory = $my_row["medicalHistory"];
				$ownerId = $my_row["ownerId"];
				$petList = new pet($petId , $petname , $medicalHistory , $ownerId);
			}
			require("connection_close.php");
			return $petList;
		}
	}
?>