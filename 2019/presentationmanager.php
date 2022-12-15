<?php 
$continuar=true;

if(!isset($_COOKIE["lawcn"])){
    if(isset($_POST["login"]) && isset($_POST["pwd"])){

           if( strcmp( $_POST["login"],"adminlawcn")==0 && strcmp($_POST["pwd"],"L@wcn22019")==0){
               $continuar=true;
               setcookie("lawcn", "1", time()+32400);
           }else{
            $continuar=false;
            echo "<script>window.location.replace('https://lawcn.com.br/adminpresentations.php')</script>";
           }
    }else{
        $continuar=false;
        echo "<script>window.location.replace('https://lawcn.com.br/adminpresentations.php')</script>";
    }
}


if($continuar==true){
?>
<html lang="en-us">
	<head>
		<title>II LAWCN</title>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		    <META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<meta property="og:title" content="II LAWCN" />
			<meta property="og:type" content="website">
			<meta property="og:url" content="https://www.lawcn.com.br/" />
			<meta property="og:image" content="https://www.lawcn.com.br/img/logo_og.png" />
			<meta property="og:image:type" content="image/png">
			<meta property="og:description" content="The second edition of LAWCN will be held in the three centennial colonial city of São João del-Rei, with its historic buildings and churches, beautiful mountains and cold waterfalls, and exquisite culinary." />
			<meta property="og:locale" content="en" />
			<meta property="og:site_name" content="II LAWCN" />
			<meta name="twitter:card" content="summary" />
			<meta name="twitter:title" content="II LAWCN" />
			<meta name="twitter:type" content="website">
			<meta name="twitter:url" content="https://www.lawcn.com.br/" />
			<meta name="twitter:image" content="https://www.lawcn.com.br/img/logo_og.png" />
			<meta name="twitter:image:type" content="image/png">
			<meta name="twitter:description" content="The second edition of LAWCN will be held in the three centennial colonial city of São João del-Rei, with its historic buildings and churches, beautiful mountains and cold waterfalls, and exquisite culinary." />
			<meta name="twitter:locale" content="en" />
			<meta name="twitter:site_name" content="II LAWCN" />
			
			<META NAME="title" CONTENT="II LAWCN ">
			<meta http-equiv="X-UA-Compatible" content="IE=edge">
			<meta name="resource-type" content="document">
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<META NAME="url" CONTENT="https://www.lawcn.com.br">
			<META NAME="description" CONTENT="NThe second edition of LAWCN will be held in the three centennial colonial city of São João del-Rei, with its historic buildings and churches, beautiful mountains and cold waterfalls, and exquisite culinary.!">
			<META NAME="language" CONTENT="English">
			<META NAME="keywords" CONTENT="II LAWCN, Latin American Workshop on Computational Neuroscience, Workshop, Artificial Intelligence, Neuroscience, Neuroengineering , Sensory processing, Network dynamics,Reinforcement learning, Motivation and decision making, Statistical approaches in neuroscience, Systems Neuroscience,Learning and memory, Attention and arousal, Sensory-motor integration, Learning in networks, Educational Issues,Large-scale recordings, Neural signal processing, Neuromodulation, Neuroprosthetics, Robotics, Humanoid robots, Robots in Health, Robots for Elderly People, Sensoring in Robotics, Fusion of Sensors, Hardware implementations in Neuroscience, Software implementations in Neuroscience,  Brain Computer Interfaces: design and applications,	 Educational Issues, Artificial Intelligence, Techniques in Neuroscience, Bioinformatics, Clustering and Applications, Computer Vision, Cognitive and Humanoid Vision, Databases, Data Mining, Intelligent Data Analysis, Knowledge-based Systems and Linguistic Tools, Data Visualization and Applications, Deep Learning, Statistical Pattern Recognition/Document Processing and Recognition, Fuzzy and Hybrid Techniques, Geometric Algebra Application in Perception Action, High Performance Computing for Pattern Recognition, Image Coding, Processing and Analysis, Kernel Machines, Mathematical Theory of Computational Neuroscience,Natural Language Processing and Recognition, Neural Networks, Parallel and Distributed Applications for Computational Neuroscience, Robotics and Humanoids Shape and Texture Analysis, Signal Processing and Analysis, Spatio-Temporal Analysis ">
			<META NAME="author" CONTENT="Yed - wwww.yed.com.br">
			<META NAME="copyright" CONTENT="II LAWCN">
			<meta name="revisit-after" content="">
			<meta name="robots" content="ALL">
			<meta name="distribution" content="Global">
			<meta name="rating" content="General">
			<meta http-equiv="Content-Language" content="en">
			<meta http-equiv="pragma" content="no-cache">



		<link rel="shortcut icon" href="img/favicon.ico" />
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
		<!-- Icon library-->
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
		<!-- CSS Files -->	
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/realtimeadm.css">
        <script src="js/navbar.js" type="text/javascript"></script>
        <script src="js/update.js" type="text/javascript"></script>
	</head>
	
	
	
	
	<body>
	<!-- header-------------------------------------------------------------------------------------------------------------- -->
		<div id="fullpage" name="fullpage">
			<!-- header------------------------------------------------------------------------------------------------------ -->
			<div id="headerbackground" name="headerbackground">
			
			</div>
			
            <div id='presentations'>
                <h1 id='st'>Start</h1>
                <br>
				<h1 id='pr'>Previous</h1>
				<div class="barra"></div>
                <div id='previous'>
					
				</div>
                <div id='now'>
					
				</div>
                <div id='next'>
					
				</div>
				<div class="barra"></div>
				<h1 id='ne'>Next</h1>
                <br>
                <br>
                <h1 id='fi'>Finish</h1>
               
            </div>
	<!-- content----------------------------------------------------------------------------------------------------- -->
		<div style="width:100%;" id="footer" name="footer">
			
			
		</div>
	</body>
</html>
<?php 
}
?>