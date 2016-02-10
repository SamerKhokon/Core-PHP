<?php  /************************************************************************
            ************************** Request URL  *****************************
			*************************************************************************/
			
			//http://api.hostip.info/get_html.php?ip=202.51.191.67&position=true
			
			//$str = "123";
			//echo $str[1];
			
			$ip = "http://lankabangla.duinvest.com/portal/DSE/getOrderBookBySymbol.html?w=ACI&sid=0.07765011650943696";
			
			
			//$ip    = "202.51.191.67";//trim($_SERVER["REMOTE_ADDR"]);
			$req_url = $ip;
			//"http://api.hostip.info/get_html.php?ip=".$ip."&position=true";
			
			$REQUEST_URL = $req_url;
			//"http://your_url/";	
	
			/************************************************************************
			*******  Your Parameters/POST with encoded Varriables ********
			*************************************************************************/	
			
			/*
			$fname  = "Khokon";
			$lname  = "Sarker";
			$fields = array(
					"fname"=> urlencode($fname) ,
					"lname"=> urlencode($lname) 
				);	
			*/
			/************************************************************************
			****************   Fields/Parameter Encoding  *********************
			************************************************************************/
			/*
			$field_str = "";
			foreach($fields as $key => $value)
			{
			   $field_str .= $key ."&";
			}
			rtrim($field_str , '&');
			*/
			
			/**************************************************************************
			********************  CURL Request Start here ***********************
			***************************************************************************/
			$ch = curl_init();
			curl_setopt($ch , CURLOPT_URL , $REQUEST_URL );			
			/********************************************************************
			  This for return server response
			********************************************************************/
			curl_setopt($ch , CURLOPT_RETURNTRANSFER , true );
			
			/*
			curl_setopt($ch , CURLOPT , $REQUEST_URL );
			curl_setopt($ch , CUROPT_POST               , count($fields) );
			curl_setopt($ch , CURLOPT_POSTFIELDS , $field_str );
			*/
			/**************************************************************************
			**************************  CURL Execution  ***************************
			***************************************************************************/
			echo $result = curl_exec($ch);
			curl_close($ch);
			
			/**************************************************************************
			**********************  CURL Request End here  *********************
			***************************************************************************/
?>