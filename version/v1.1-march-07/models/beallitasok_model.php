<?php

class Beallitasok_Model
{
    public function getChecked()
    {
        //Az eredmeny visszajelzeshez
		$retData['eredmeny']= "";
		try {
			$connection = Database::getConnection();
			$sql = "SELECT *
			FROM kapcsolatbeallit";
			$stmt = $connection->query($sql);
			$beallitasok = $stmt->fetchAll(PDO::FETCH_ASSOC);
			$retData['beallitasok'] = $beallitasok;
			$retData['eredmeny'] = "OK";
		} catch (PDOException $e) {
			$retData['eredmeny'] = "ERROR";
			$retData['uzenet'] = "Adatbázis hiba: " . $e->getMessage() . "!";
            echo "Valami gond tortent!";
		}
		//Teszteléshez
		//var_dump($retData);
		return $retData;
    }
}