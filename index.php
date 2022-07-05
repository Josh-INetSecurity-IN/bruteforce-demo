<?php
   include("connection.php");
 ?>
<?php 

?> 
<!DOCTYPE html>

<head>
<!--added for modal-->   
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>
<!-- End angular modal-->

  <style>footer {
    position: fixed;
    height: 100px;
    bottom: 0;
    width: 100%;
}</style><style>

        	body {
  background-image: url("bg.jpg");
    background-repeat: no-repeat;
  background-attachment: fixed;
			background-size: cover;}
			.box2 {
    background-color: rgba(0,0,0,.5);
    color: #fff;
}
</style>
  <style>
div.click-to-top span {
  display: none;
  position: bottom;
  bottom: 0;
  left: 10;
  right: 0;
  background: #333;
  color: #fff;
}

div.click-to-top:hover span {
  display: block;
}
</style>
<style>.tooltip-class {
    left: 10px;
    top: 10px;
}</style>
<script>$("#sideModalTLInfo").on('shown.bs.modal', function(){
   alert("Hello World!");
});</script>
<style>
.alert {
  padding: 20px;
  background-color: green;
  color: white;
}
.alertdan {
  padding: 20px;
  background-color: red;
  color: white;
}
.closebtn {
  margin-left: 15px;
  color: white;
  font-weight: bold;
  float: right;
  font-size: 22px;
  line-height: 20px;
  cursor: pointer;
  transition: 0.3s;
}

.closebtn:hover {
  color: black;
}
</style>
<style>.box2 {
    background-color: rgba(0,0,0,.5);
    color: #fff;
}

</style>
</head>
<body oncontextmenu="return false;"> 
 
<div class="container">
  	 <div class="wrapper">
	   <div class="row">
		            <div class="col-lg-12" align="center">
					<br><br><br><br><br><br>
		            	
			
		                
		            </div>
		        </div>
	    <div class="box box2">
	        <div class="container">
	    	  
	                 <div class="row">
	        	   <div class="col-md-12" align="center">
	        	  	<h2>BRUTE FORCE </h2>



<div class="vulnerable_code_area" align="center">

	</hr>
	
		<h3>Login</h3>
		<br />

		

		<form action="#" method="GET">
			Username:<br />
			<input type="text" name="username"><br />
			Password:<br />
			<input type="password" AUTOCOMPLETE="off" name="password"><br />
			<br />
			<input type="submit" value="Login" name="Login">

		</form>

<a href="jerome.html">Download Password list</a>
			
	<br />
</fieldset>
<?php

if( isset( $_GET[ 'Login' ] ) ) {
	
    // Get username
    $user = $_GET[ 'username' ];

    // Get password
    $pass = $_GET[ 'password' ];
    //$pass = md5( $pass );

    // Check the database
   // $user_id_1=$userid.'_1';
    
    $querya  = "SELECT * FROM `customers` WHERE username = '$user' AND password = '$pass'";
  $resulta = mysqli_query($connection,$querya);
    if( $resulta && mysqli_num_rows( $resulta ) == 1 ) {
         $row    = mysqli_fetch_assoc( $resulta );
		 
				//echo '<pre><br><br><font color="green">Welcome Admin!!</font></pre>';
				$resp= "  You've Completed the task ";	
					$string = 'Congrats!! '.$resp;
			echo "<div class='alert'>".$string."</div>";
			}
    
    else {
       
       $string = 'Unauthorized Entry!!';
	echo "<div class='alertdan'>".$string."</div>";
    }
}


?> </div>
				
			    </div>
				</div>
                        <!-- /.inner -->
                    </div>
				
			    </div>
				<div class="row">
		            <div class="col-lg-12" align="center">
					<br><br>
		            	  <div class="box box2">
						 
						  </div>
			
		                
		            </div>
		        </div>
				</div>
				
			</div>
			</div>

			
			
		

		
	   
	
	
		
<!-- Footer -->

  <!-- Footer Elements -->

</body>


</html>
