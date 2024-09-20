<?php
	class owner{
		public $ownerId , $name , $address;
		public function __construct($ownerId,$name,$address){
			$this->ownerId = $ownerId;
			$this->name = $name;
			$this->address = $address;
		}
		public static function getAll(){
			$ownerList = [];
			require("connection_connect.php");
			$sql = "SELECT * FROM owner";
			$result = $conn->query($sql);

			while ($my_row = $result->fetch_assoc()) {
				$ownerId = $my_row["ownerId"];
				$name = $my_row["name"];
				$address = $my_row["address"];

				$ownerList = new owner($ownerId,$name,$address);
			}
		}

	}
?>