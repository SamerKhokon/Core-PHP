<?php  /**************************************************************************************************
			***************************************************************************************************
				Basic CURL Example
			***************************************************************************************************/
			
			   $ch = curl_init("http://www.yahoo.com");
			   $fp = fopen($_SERVER['DOCUMENT_ROOT']."/test.txt" , "w");			   
			   
			   curl_setopt($ch , CURLOPT_FILE			, $fp);
			   curl_setopt($ch , CURLOPT_HEADER	, 0);			   
			   
			   curl_exec($ch);
			   curl_close($ch);
			   fclose($fp);
		    
		   
			/******************************************************************************************************
				CURL request data post with url
			*******************************************************************************************************/		   
			/*
			function post_curl_url_with_data( $url  ,  $data ) 
			{
					$fields = "";
					foreach( $data as $key => $value )
					{
						 $fields .= $key."=".$value."&";
					}
					rtrim($fields , "&");
				  
					$post = curl_init();				  
					curl_setopt($post , CURLOPT_URL , $url);
					curl_setopt($post , CURLOPT_POST , count($data));
					curl_setopt($post , CURLOPT_POSTFIELDS , $fields);
					curl_setopt($post , CURLOPT_RETURNTRANSFER ,  true);
					  
					$result = curl_exec($post);
					print_r($result);
					
					if( $result	== "OK" )
						echo "Executed";
					else
						echo "Error";
					
					curl_close($post);
			}
		   
			$data = array( "name" => "khokon" , "mobile" => "01719347580" , "language" => "PHP" );   		   
			post_curl_url_with_data("http://localhost/test.php" , $data );		
*/			
?>