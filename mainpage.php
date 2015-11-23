<?php   

session_start(); 


include("connection.php");

	$query = "SELECT * FROM users  WHERE id='".$_SESSION['id']."' LIMIT 1";

	$result = mysqli_query($link, $query);

	$row  = mysqli_fetch_array($result);

	$diary = $row['diary'];
	$Q1 = $row['Q1'];
	$Q2 = $row['Q2'];
	$Q3 = $row['Q3'];
	$Q4 = $row['Q4'];

?>


<!DOCTYPE html>
<html lang="en">
 <head>
 <meta charset="utf-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <title>Time Matrix</title>
 <!-- Bootstrap -->
 <link href="css/bootstrap.min.css" rel="stylesheet">
 <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media
queries -->
 <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
 <!--[if lt IE 9]>
 <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></
script>
 <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/
respond.min.js"></script>
 <![endif]-->

 <style>

 .navbar{
  height: 30px;
 }
 .navbar-brand {
 	 	 font-size:1.8em;
 }
 	.navbar-header ul li{
    padding-top: 20px;
  }

 #topContainer {
 	 	 background-image:url("img/unsplash.jpg");
 	 	 height:100%;
 	 	 width:100%;
 	 	 background-size:cover;
 	 	 }
 
 .modal-body img{
  height: 550px;
 }
 #topRow {
 	 	 margin-top:80px;
 	 	 float: left;
 }

 #topContainer textarea{
  border: solid black 2px;
 }

 .bigbox{
  height:100%;
  padding-top:55px;
 }

   .box {
  height: 50%;
  width: 50%;
  position: relative;
  float: left;

   }
 .tag{
        position: absolute;
        right: 20px;
        top: 10px;
        padding:7px;
        border: solid grey 2px;
        border-radius: 5px;
    }

    .tagbottom{
       float: right;
        right: 20px;
        top: 100px;
        padding:7px;
        border: solid grey 2px;
        border-radius: 5px;
    }
 	 	
 #topRow h1 {
 	 	 font-size:300%;
     padding: 0px;
 }
 	 	
 #emailSignup {
 	 	 margin-top:50px;
 }
 	 	
 .bold {
 	 	 font-weight:bold;
 }
 	 	
 .marginTop {
 	 	 margin-top:30px;
 }
 	 	
 .center {
 	 	 text-align:center;
 }
 	 	
 .title {
 	 	 margin-top:100px;
 	 	 font-size:300%;
 }
 	 	
 #footer {
 	 	 background-color:#B0D1FB;
 	 	 padding-top:70px;
 	 	 width:100%;
 }
 	 	
 .marginBottom {
 	 	 margin-bottom:30px;
 }
 .appstoreImage {
 	 	 width:250px;
 }
 </style>
 </head>
 <body>
 
 <div class="navbar navbar-default navbar-fixed-top">
 <div class="container">
 	 	 <div class="navbar-header pull-left">
 	 	 	 
 	 	 	 <a class="navbar-brand">My Time Matrix</a>
 	 	 </div>
 	 	 	
 	 	 <div class=" pull-right">

 	 	 	<ul class="navbar nav">

 	 	 		<li> <a class="btn btn-default" href="index.php?logout=1">Log Out</a> </li>

 	 	 	</ul>
 	 	 	 

 	 	 	 	
 	 	 </div>
			 </div>
			 </div>






 <div class="container contentContainer" id="topContainer">

 <div class="row bigbox col-md-6 col-md-offset-3">
 	 	
 	 	 <div class="box">

 
 	 	 	<textarea id="Q1" class="form-control" placeholder="Important and Urgent (Necessity)"><?php echo $Q1;?></textarea>

 	 	 	<div class="tag btn btn-info btn-lg" data-toggle="modal" data-target="#myModalQ1">Q1</div>
 	 	 	
 	 	 </div>


 	 	 <div class="box" >

 
 	 	 	<textarea id="Q2" class="form-control" placeholder="Important but Not Urgent (Productivity)"><?php echo $Q2;?></textarea>
 	 	 	<div class="tag btn btn-info btn-lg" data-toggle="modal" data-target="#myModalQ2">Q2</div>
 	 	 	
 	 	 </div>



		<div class="box" >

 
 	 	 	<textarea id="Q3" class="form-control" placeholder="Not Important but Urgent (Distraction)"><?php echo $Q3;?></textarea>
 	 	 	<div class="tag btn btn-info btn-lg" data-toggle="modal" data-target="#myModalQ3">Q3</div>
 	 	 	
 	 	 </div>


 	 	 <div class="box" >

 
 	 	 	<textarea id="Q4"  class="form-control" placeholder="Not Important and Not Urgent (Waste)"><?php echo $Q4;?></textarea>
 	 	 	<div class="tag btn btn-info btn-lg" data-toggle="modal" data-target="#myModalQ4">Q4</div>
      <div class="tagbottom btn btn-success btn-lg" data-toggle="modal" data-target="#myModalHow">How it Works</div>
 	 	 	
 	 	 </div>


 	 	
 	 	
 </div>



 <!-- Modal -->
<div id="myModalQ1" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h2 class="modal-title">Q1: The Quadrant of Necessity.</h2>
      </div>
      <div class="modal-body">
        <p>These are things that need to be done now and, if not done, could have serious consequences. </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>





<div id="myModalQ2" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h2 class="modal-title">Q2: The Quadrant of Extraordinary Productivity</h2>
      </div>
      <div class="modal-body">
        <p>These are that activities that will make a real difference in terms of accomplishment and results like proactive work, achieving high-impact goals, creative thinking, planning, prevention, relationship building, learning, and renewal. But you have to make a conscious choice to operate in this quadrant.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>






<div id="myModalQ3" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h2 class="modal-title">Q3: The Quadrant of Distraction</h2>
      </div>
      <div class="modal-body">
        <p>These are activities marked as urgent that feel like they need to be done now, but there are no serious consequences if you don’t do them. “Many people spend a lot of time in Q3 thinking they’re in Q1. However, they’re just reacting to everything coming their way. They are confusing motion with progress, action with accomplishment.” </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>





<div id="myModalQ4" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h2 class="modal-title">Q4: The Quadrant of Waste</h2>
      </div>
      <div class="modal-body">
        <p>These are activities that are neither urgent nor important. When we get burned out we often go here for escape. “When we spend a lot of time in Q4, we feel lethargic and aimless. If we stay too long, we can experience depression and even despair.”
</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>



<div id="myModalHow" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h2 class="modal-title">How to use the Time Matrix</h2>
      </div>
      <div class="modal-body">
        <img src="img/matrix.gif">
        
      </div>
      <div class="modal-footer"> 
        <a href="http://gwclei.com/5-choices-extraordinary-productivity/" target="_blank"> <button type="button" class="btn btn-success" >More Info</button> </a>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        
      </div>
    </div>

  </div>
</div>

 </div>


<!-- -*************************************************-->







 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
 <!-- Include all compiled plugins (below), or include individual files as
needed -->
 <script src="js/bootstrap.min.js"></script>

 <script>

 $(".contentContainer").css("min-height",$(window).height());

  $("textarea").css("height",($(window).height()-100)/2);



  $("textarea").keyup(function() {
  		$.post("updatematrix.php", {Q1:$("#Q1").val(), Q2:$("#Q2").val(), Q3:$("#Q3").val() , Q4:$("#Q4").val()} );
  });

 
 </script>

</body>
</html>


