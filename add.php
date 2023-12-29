<?php
 
 include "./php_files/config.php";

 if(isset($_POST['add']))
{
	$db = new Database();
     
    $data = [
	$name = $db->escapeString($_POST['nam']),
	$username = $db->escapeString($_POST['username']),
	$mobile = $db->escapeString($_POST['mobile']),
	$address = $db->escapeString($_POST['address']),
	$city = $db->escapeString($_POST['city']) ];

	 $db ->select('user','f_name',null,"f_name = '{$name}'",null,null);
	 $result = $db->getResult();
	 if(!empty($result)){
		echo "Name Alredy Exist";
	 }else{
	 $db ->insert('user',$data);
	 $res = $db->getResult();
	 if($res){
		echo "hello" ." ".$name;
	 }else{
		echo "record not inserted";
	 }
	
	//header("location: {$path_name}");
	//exit();
   }
}else{
	echo "value not set";
}



?>