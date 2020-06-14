<?php 
	class Pelanggan {
		// deklasrasi objek/variabel
		private $mysqli;

		// fungsi yang diload pertama kali oleh kelas
		function __construct($conn) {
			$this->mysqli = $conn;
		}

		public function tampil($id = null) {
			$db = $this->mysqli->conn;
			$sql = "SELECT * FROM tb_pelanggan";
			if($id != null) {
				$sql .= " WHERE id_pelanggan = $id";
			}
			$query = $db->query($sql) or die ($db->error);
			return $query;
		}
	}
?>