<html>
<head>
<title>MY PORTFOLIO</title>
                  
   <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="icon" href="image/pic1.jpg">
<?php
include "dbcon.php";
?>
</head>
<body>
       <header>
       	   <div class="container">
       	   	   <div class="row no-gutters">

       	   	   	    <div class="col-lg-4 col-md-4">
       	   	   	    	<img src="image/pic1.jpg">
       	   	   	    </div>

       	   	   	    <div class="col-lg-8 col-md-8">
       	   	   	    	<div class="d-flex flex-column">
       	   	   	    		<div class="p-5 bg-dark text-white">
       	   	   	    			<div class="d-flex flex-row justify-content-between align-items-center">
       	   	   	    				<h1 class="display-4">Ajit Kumar</h1>
       	   	   	    				<div><a href="https://www.facebook.com/"><i class="fa fa-facebook-square"></i></a> </div>
       	   	   	    				<div>	<a href="https://www.gmail.com/"><i class="fa fa-google-plus-official"></i></a></div>
       	   	   	    				<div><i class="fa fa-linkedin-square"></i></div>
       	   	   	    				<div>	<i class="fa fa-youtube"></i></div>
       	   	   	    			
       	   	   	    		    </div>
       	   	   	    			
       	   	   	    		</div>
       	   	   	    		   <div class="p-3 text-white bg-black">
       	   	   	    		   	Web Developer and Android Developer
       	   	   	    		   	
       	   	   	    		   </div>

       	   	   	    		   <div class="d-flex flex-row text-center text-white align-items-start">
       	   	   	    		   	   <div class="p-4 bg-success font-div" data-toggle="collapse" data-target="#home">
       	   	   	    		   	   	<i class="fa fa-home fa-2x d-block"></i>Home
       	   	   	    		   	   	
       	   	   	    		   	   </div>
       	   	   	    		   	    <div class="p-4 bg-danger font-div" data-toggle="collapse" data-target="#resume">
       	   	   	    		   	   	<i class="fa fa-graduation-cap fa-2x d-block"></i>Resume
       	   	   	    		   	   	
       	   	   	    		   	   </div>
       	   	   	    		   	    <div class="p-4 bg-primary font-div" data-toggle="collapse" data-target="#work">
       	   	   	    		   	   	<i class="fa fa-folder fa-2x d-block"></i>Work
       	   	   	    		   	   	
       	   	   	    		   	   </div>
       	   	   	    		   	    <div class="p-4 bg-warning font-div" data-toggle="collapse" data-target="#contact">
       	   	   	    		   	   	<i class="fa fa-envelope fa-2x d-block"></i>Contact
       	   	   	    		   	   	
       	   	   	    		   	   </div>
       	   	   	    		   	
       	   	   	    		   </div>
       	   	   	    		
       	   	   	    	</div>
       	   	   	    	
       	   	   	    </div>
       	   	   	
       	   	   </div>
       	   	
       	   </div>

       </header>  

       <div class="container">

       	<div class="collapse" id="home">
       		<div class="p-5 text-white bg-success">
       			<h1>Home</h1>
       			<p>This is home page.</p>
       			
       		</div>

       		<div class="card card-body">
       			<h2>My Skills</h2>
       			<p>My skills is....</p>

       			<h4>HTML</h4>
       			<div class="progress mb-5">
       				<div class="progress-bar progress-bar-striped progress-bar-animated" style="width: 100%"></div>
       			</div>
       			<h4>CSS</h4>
       			<div class="progress mb-5">
       				<div class="progress-bar progress-bar-striped progress-bar-animated" style="width: 60%"></div>
       			</div>
       			<h4>Bootstrap</h4>
       			<div class="progress mb-5">
       				<div class="progress-bar progress-bar-striped progress-bar-animated" style="width: 70%"></div>
       			</div>
       			<h4>PHP</h4>
       			<div class="progress mb-5">
       				<div class="progress-bar progress-bar-striped progress-bar-animated" style="width: 70%"></div>
       			</div>
       			<h4>Javascript</h4>
       			<div class="progress mb-5">
       				<div class="progress-bar progress-bar-striped progress-bar-animated" style="width: 70%"></div>
       			</div>
       			
       			<h4>JAVA</h4>
       			<div class="progress mb-5">
       				<div class="progress-bar progress-bar-striped progress-bar-animated" style="width: 90%"></div>
       			</div>


       		</div>
       		
       	</div>

       	<div class="collapse" id="resume">
       		<div class="p-5 text-white bg-danger">
       			<h1>My Resume</h1>
       			<p>This is my resume.</p>
           		</div>


           		<div class="card card-body">
           			<h2>My Resume is here please download it and read it.</h2>
                <a href="MyResume.docx" download="Ajit's Resume"><button class="btn btn-primary">Download</button></a>
           			
           			

           			
           			
           			
           		</div>
       		
       	</div>

       	<div class="collapse" id="work">
       		<div class="p-5 text-white bg-primary">
       			<h1>My Work</h1>
       			<p>This is my work.</p>
           		</div>

           		<div class="card card-body">
           			<h2>What have I built?</h2>
           			<p>I have built many projects for our college.</p>

           			<div class="row no-gutters">
           				<div class="col-lg-4 col-md-4"><a href="https://github.com/aktuts-352/attendancemanagementsystem"<button><img src="image/pic3.jpg"></button></a></div>
           				<div class="col-lg-4 col-md-4"><img src="image/pic4.jpg"></div>
           				<div class="col-lg-4 col-md-4"><img src="image/pic5.jpg"></div>
           				

           			</div>
           			<div class="row no-gutters">
           				<div class="col-lg-4 col-md-4"><img src="image/pic6.jpg"></div>
           				<div class="col-lg-4 col-md-4"><img src="image/pic7.jpg"></div>
           				<div class="col-lg-4 col-md-4"><a href="https://github.com/aktuts-352/chatroom"<button><img src="image/pic8.jpg"></button></a></div>
           				

           			</div>
           			
           		</div>
       		

       	</div>

       	<div class="collapse" id="contact">
       		<div class="p-5 text-white bg-warning">
       			<h1>Contact Me</h1>
       			<p>Please contact me if you have any work related with my resume.</p>
           		</div>

           		<div class="card card-body">
           			<div class="row justify-content-center">
           			<div class="col-lg-8 col-md-8 col-12">

           				<form action="contact.php" method="post">
           					
           					<div class="form-group">
           						<div class="input-group input-group-lg">
           							<span class="input-group-addon bg-warning text-white p-3">
           									<i class="fa fa-user"></i>
           							</span>
           							<input type="text" name="name" class="form-control bg-dark text-white" placeholder="Name">
           							
           						</div>
           					</div>

           					<div class="form-group">
           						<div class="input-group input-group-lg">
           							<span class="input-group-addon bg-warning text-white p-3">
           									<i class="fa fa-envelope"></i>
           							</span>
           							<input type="text" name="email" class="form-control bg-dark text-white" placeholder="E-mail">
           							
           						</div>
           					</div>

           					<div class="form-group">
           						<div class="input-group input-group-lg">
           							<span class="input-group-addon bg-warning text-white p-3">
           									<i class="fa fa-user"></i>
           							</span>
           							<input type="text" name="msg" class="form-control bg-dark text-white" placeholder="Message">
           							
           						</div>
           					</div>
           					<input type="submit" name="send" class="btn-danger" value="Send">

           				</form>
           				
           			</div>

           		</div>
           			
           		</div>
       		
       	</div>
       	
       </div>

       <div class="container">
       <footer class="p-5 bg-dark text-center text-white">
       <p class="">It is developed by <a href="#"><h5> <strong>#Ajit kumar</strong></h5></a></p>
       	  
       	
       </footer>  
       </div>    

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>


  <script type="text/javascript">
  	$('.font-div').click(function(){
         $('.collapse').collapse('hide');
  		
  	});
  </script>

</body>

</html>