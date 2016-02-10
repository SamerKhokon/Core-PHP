<?php 

		$db = new PDO('mysql:host=localhost;dbname=db_iportal;charset=utf8', 'root', '');

		$sql ="select code,name from company";
		$stm= $db->prepare($sql);
		$stm->execute();
		$r = $stm->fetchAll(PDO::FETCH_ASSOC);

		//echo count($r);

		$data = array();
		foreach($r as $v) {
		   $data[] = array($v['code'], $v['name']);		   
		}

		print json_encode($data);
?>