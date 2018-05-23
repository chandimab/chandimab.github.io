<?php
	//getting params
	$var_bot_id=$_GET['bot_id']; //change this param names
	$var_bot_secure_key=$_GET['bot_secure_key']; //change this param names
	
	//clean them to prevent sql injection attacks
	
	//client ip,port
	$var_bot_node_ip=$_SERVER['REMOTE_ADDR'];
	$var_bot_node_port=$_SERVER['REMOTE_PORT'];
	echo "<b>request ip: </b>".$var_bot_node_ip." ";
	echo "<b>request port: </b>".$var_bot_node_port."<br>";

?>

<?php require_once('php-handlers/db-connection-open.php'); ?>

<h3>server-0:request</h3>
<?php
	//functions
	

	
	
?>

<?php
	//database manipulation
	//verifing secure_key
	$query="select * from ".DB_TBL_ROBOT." where bot_id=\"".$var_bot_id."\"";
	$response=@mysqli_query($dbc,$query);
	
	$var_res_bot_id=null;
	$var_res_bot_ip=null;
	$var_res_bot_port=null;
	$var_res_bot_secure_key=null;
	
	if($response){
		while($row=mysqli_fetch_array($response)){
          $var_res_bot_id=$row['bot_id'];
          $var_res_bot_ip=$row['bot_ip'];
          $var_res_bot_port=$row['bot_port_server0'];
          $var_res_bot_secure_key=$row['bot_secure_key'];
        }
        
        //validate
        if($var_bot_secure_key==$var_res_bot_secure_key){
			echo $var_bot_id. " <b>key matched</b><br>";
			//update entry
			echo "display ip,port0...<br>";
			echo "ip: ".$var_res_bot_ip." port: ".$var_res_bot_port."<br>";
		}
    }else{
    	echo "no response from db";
    }

?>

<?php require_once('php-handlers/db-connection-close.php'); ?>
