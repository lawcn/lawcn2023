<?php 



    

    $con = mysqli_connect("localhost", "yedco746_lawcn", "L@cn2019", "yedco746_lawcn");
	if (!$con) {
		echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
	}
	mysqli_query($con,"SET NAMES 'utf8'");
	mysqli_query($con,'SET character_set_connection=utf8');
	mysqli_query($con,'SET character_set_client=utf8');
    mysqli_query($con,'SET character_set_results=utf8');

    
    $query = mysqli_query($con,"select * from presentation");
   
    $res=mysqli_fetch_object($query);
    echo $res->apresentacao;
    
    ?>