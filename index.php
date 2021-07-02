<?php
session_start();
error_reporting(0);
include('includes/config.php');
if($_SESSION['alogin']!=''){
$_SESSION['alogin']='';
}
if(isset($_POST['login']))
{
$uname=$_POST['username'];
$password=md5($_POST['password']);
$sql ="SELECT UserName,Password FROM admin WHERE UserName=:uname and Password=:password";
$query= $dbh -> prepare($sql);
$query-> bindParam(':uname', $uname, PDO::PARAM_STR);
$query-> bindParam(':password', $password, PDO::PARAM_STR);
$query-> execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
if($query->rowCount() > 0)
{
$_SESSION['alogin']=$_POST['username'];
echo "<script type='text/javascript'> document.location = 'dashboard.php'; </script>";
} else{

    echo "<script>alert('Invalid Details');</script>";

}

}

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Student Result Management System</title>
        <link rel="stylesheet" href="css/bootstrap.min.css" media="screen" >
        <link rel="stylesheet" href="css/font-awesome.min.css" media="screen" >
        <link rel="stylesheet" href="css/animate-css/animate.min.css" media="screen" >
        <link rel="stylesheet" href="css/prism/prism.css" media="screen" > <!-- USED FOR DEMO HELP - YOU CAN REMOVE IT -->
        <link rel="stylesheet" href="css/main.css" media="screen" >
        <script src="js/modernizr/modernizr.min.js"></script>
		<style>
	

body{
	 background-image:url("bg1.jpg");
	 
	 background-size:30% ;
}
	.main-wrapper{
		width:300px;
height:440px;
  position: absolute;
  top: 55%;
  left: 48%;
  margin: -184px 0px 0px -155px;
  background-image: linear-gradient(to top, red,blue,green,indigo,red,yellow,violet);
 
  padding: 15px 25px;
  border-radius: 5px;
  
  font-family:fontawesome;
	}
	.form-group input{
  border: none;
  background:transparent;
  color: #fff;
  margin-top:11px;
  font-family: 'Open Sans', sans-serif;
  font-size: 1.2em;
  height: 49px;
  padding: 0 16px;
  width: 100%;
  padding-left: 55px;
   font-family:fontawesome;
 

}

input[type='password']{
	background: transparent url("img/pass.jpg") no-repeat;
	background-position: 10px 50%;
}
input[type='text']{
	background: transparent url("img/user.jpg") no-repeat;
	background-position: 10px 50%;

}

.form-group input:focus {
  outline: none;
  border:1.4px solid #cfecf0;
}

.button-panel {
  margin-bottom: 20px;
  padding-top: 10px;
  width: 100%;
}

.button-panel .button {
  background: rgb(26, 140, 255);
  border: none;
  color: #fff;
  cursor: pointer;
  height: 50px;
  font-family: 'helvetica','Open Sans', sans-serif;
  font-size: 1.2em;
  text-align: center;
  text-transform: uppercase;
  transition: background 0.6s linear;
  width: 100%;
  margin-top:5px;
}

.button:hover {
  background: #6eb7cb;
}
.form-item input, .button-panel .button {
  border-radius: 2px
}

.reminder {
  text-align: center;
}

.reminder a {
  color: #fff;
  text-decoration: none;
  transition: color 0.3s;
}

.reminder a:hover {
  color: #cab6bf;
}


	</style>
    </head>
    <body class="p1">
	


	
        

          
                   
                                                     <div class="main-wrapper" >
													 
													 <h1>Admin LOGIN</h1>
                                                    <form class="form-horizontal" method="post">
                                                    	<div class="form-group">
                                                    		<label for="inputEmail3" ></label>
                                                    		
                                                    			<input type="text" name="username" class="form-control" id="inputEmail3" placeholder="UserName">
                                                    		
                                                    	</div>
                                                    	<div class="form-group">
                                                    		<label for="inputPassword3" ></label>
                                                    		
                                                    			<input type="password" name="password" class="form-control" id="inputPassword3" placeholder="Password">
                                                    		
                                                    	</div>

                                                        <div class="button-panel" style="background: rgb(26, 140, 255) ">
                                                    		
		                                          <input type="submit" class="button "   title="Log In" name="login" value="Login" ></input>

                                                    		</div>	
                                                    	</div>
														
                                                    </form>




                                                </div>
                                            </div>
                                            <!-- /.panel -->
                                            
                                        </div>
                                        <!-- /.col-md-11 -->
                                    </div>
                                    <!-- /.row -->
                                </div>
                                <!-- /.col-md-12 -->
                            </div>
                            <!-- /.row -->
                        </section>

                    </div>
                    <!-- /.col-md-6 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /. -->

        </div>
        <!-- /.main-wrapper -->

        <!-- ========== COMMON JS FILES ========== -->
        <script src="js/jquery/jquery-2.2.4.min.js"></script>
        <script src="js/jquery-ui/jquery-ui.min.js"></script>
        <script src="js/bootstrap/bootstrap.min.js"></script>
        <script src="js/pace/pace.min.js"></script>
        <script src="js/lobipanel/lobipanel.min.js"></script>
        <script src="js/iscroll/iscroll.js"></script>

        <!-- ========== PAGE JS FILES ========== -->

        <!-- ========== THEME JS ========== -->
        <script src="js/main.js"></script>
        <script>
            $(function(){

            });
        </script>

        <!-- ========== ADD custom.js FILE BELOW WITH YOUR CHANGES ========== -->
    </body>
</html>
