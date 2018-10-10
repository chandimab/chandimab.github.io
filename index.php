<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Chandima B Samarasinghe</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <style>
      body {
        padding-top: 54px;
		background-color:#000000;
      }
      @media (min-width: 992px) {
        body {
          padding-top: 56px;
        }
      }
	  
	  .onepage-section{
		padding-left: 50px;
		padding-right: 50px;
		padding-bottom: 80px;
		padding-top:80px;
		
		
	  }
	  
	  .contactblock{
		padding:5px;
		background:#111111;
		text-align:center;
		margin:5px;
	  }
	  .contactblock:hover{
		padding:5px;
		background:#00aa00;
		text-align:center;
		margin:5px;
	  }
	  
	  .project-block{
		padding:20px;
		background:#000000;
		text-align:center;
		margin:5px;
	  }
	  .project-block:hover{
		padding:20px;
		background:#0000aa;
		text-align:center;
		margin:5px;
	  }
	  
	  .robotblock{
		padding:20px;
		background:#000000;
		text-align:center;
		margin:5px;
	  }
	  .robotblock:hover{
		padding:20px;
		background:#111111;
		text-align:center;
		margin:5px;
	  }
	  
	  
	  
	  #div-home{
		background-color:#000000;
		//height:100vh;
		//background:url("graphics/home-01.jpg");
		-webkit-background-size: cover;
		-moz-background-size: cover;
		-o-background-size: cover;
		background-size: cover;
		
	  }
	  #div-projects{
		background:#111111;
	  }
	  #div-robotics{
		background:#000000;
	  }
	  #div-about{
		background:#111111;
	  }
	  #div-contact{
		background:#000000;
	  }
	  
	  .textcolor-white{
		color: #ECEFF1;
	  }
	  
	  .img-border{
		padding-top=20px;
		padding-bottom=20px;
		
		margin-top=20px;
		
	  }

	  
	  img {
			max-width:100%;
			height:auto;
		}
	  
	  .thumbnail{
	  border:0;
    box-shadow:0;
    border-radius:0;
	}
    </style>

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top navbar-mycolor">
      <div class="container">
        <a class="navbar-brand" href="https://chandimab.github.io">chandimab.github.io</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#div-home">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#div-projects">Projects</a>
            </li>
			<li class="nav-item">
              <a class="nav-link" href="#div-robotics">Robotics</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#div-about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#div-contact">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Content -->
    <!--div class="container-fluid onepage-section" id="div-home">
	 
    </div-->
	<img src="graphics/home-01.jpg" id="div-home"></img>
	
	<div class="container-fluid onepage-section" id="div-projects">
	  <div class="row">
		<div class="col text-center">
			<h3 class="textcolor-white">Projects</h3><br><br>
		</div>
	  </div>
	
      <div class="row">
        <div class="col textcolor-white project-block">
			<h5>Arduino Nano Powered Remote Controlled Flight From Scratch</h5>
			<p class="textcolor-white"><br>Here is a small project i have done in after A/Ls free time, a fully home made remote controlled flight using Styrofoam. Both flight and remote controller was powered by arduino nano, and two nRF24L01+ transceiver modules which manufactures specifies that it could obtain 1km range. Two 3 cell LiPo (Lithium Polymer) batteries were used as power resources. 1000kv brushless motor with 30A esc were used to generate trust for the flight and two micro servos for main wing elevators.</p>
			<p class=""textcolor-white"><a href="https://github.com/chandimab/arduino-remote-controlled-flight">https://github.com/chandimab/arduino-remote-controlled-flight</a></p>
		</div>
		<div class="col textcolor-white project-block">
			<h5>Arduino Nano Powered Remote Controlled BattleBot From Scratch</h5>
			<p class="textcolor-white"><br>Remote controlled battle-bot from scratch. Remote controller and Robot's receiver powered by arduino nanos.</p>
			<p class=""textcolor-white"><a href="https://github.com/chandimab/arduino-remote-controlled-battlebot">https://github.com/chandimab/arduino-remote-controlled-battlebot</a></p>
		</div>
		<div class="col textcolor-white project-block">
			<h5>Tic Tac Toe - Simple Java GUI Game</h5>
			<p class="textcolor-white"><br>Simple Tic Tac Toe Game.</p>
			<p class=""textcolor-white"><a href="https://github.com/chandimab/java-tic-tac-toe">https://github.com/chandimab/java-tic-tac-toe</a></p>
		</div>
      </div>
	  
	  <div class="row">

	
			  
	

 <!-- new projects section -->
<!-- jquery -->
                  <style type="text/css">
                    .hoverProject {}
                    .hoverProject:hover {background: white;}
                    .projectcontainer{padding: 30px;}
                  </style>

                  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
                  <script>
                        $(document).ready(function() {
                          //alert("ready");
                          $(".projectcontainer").hide();
                          //$(".projectcontainer").delay(200).show(500);//show all
                          
                          updateContainer5($("button[tag='All'")); //show all
                          $("button[tag='All'").addClass("active") //select tag=all button

                          $(".tags").click(function() { //listen to tags click
                            //log($(this).text()); //getting the text relevent to the clicked tag
                            $(".tags").removeClass("active");

                            $(this).addClass("active"); //adds the class at the right button
                            defaultTagNames();
                            updateContainer5(this);
                          });

                        });

                        //hover effect
                        $(".hoverProject").hover(function(){
                            $(this).css("background", "#f5f5f5");
                        }, function(){
                            $(this).css("background", "#fff");
                        });

                        function visitPage(url){
                            window.location=url;
                        }

                        function log(msg){
                          $("#msg").text(msg);
                        }

                        function defaultTagNames(){
                          $("button[tag]").each(
                              //iterate through each
                              function(index){
                                    var tag=$(this).attr("tag");
                                    $(this).html(tag);
                              }
                          );
                        }

                        function updateContainer4(button_){
                          var count=0;
                          var tag=$(button_).attr("tag");

                          if(tag=='All'){
                            //$(".projectcontainer").delay(200).show(500);//show all
                            $(".projectcontainer").each(
                              //iterate through each
                              function(index){
                                    count=count+1;
                                    $(this).delay(400).show(500); //show
                                    $(button_).html(tag+" ("+count+")");
                              }
                            );

                          }else{
                            $(".projectcontainer").each(
                              //iterate through each
                              function(index){
                                var attr_text=$(this).attr("tag");
                                
                                if(attr_text.indexOf(tag) != -1){
                                    count=count+1;
                                    $(this).delay(400).show(500);
                                    $(button_).html(tag+"("+count+")");
                                }else{
                                  $(this).hide(400);

                                }
                              }

                            );

                          }
                        }

                        function updateContainer5(button_){
                            //visitPage('https://sausecode.com/cv/#projects');
                            
                          var count=0;
                          var tag=$(button_).attr("tag");

                          if(tag=='All'){
                            //$(".projectcontainer").delay(200).show(500);//show all
                            $(".projectcontainer").each(
                              //iterate through each
                              function(index){
                                    count=count+1;
                                    $(this).delay(400).show(500); //show
                                    $(button_).html(tag+" ("+count+")");
                              }
                            );

                          }else{
                            $(".projectcontainer").each(
                              //iterate through each
                              function(index){
                                var attr_text=$(this).attr("tag");
                                
                                if(attr_text.indexOf(tag) != -1){
                                    count=count+1;
                                    $(this).delay(400).show(500);
                                    $(button_).html(tag+"("+count+")");
                                }else{
                                    $(this).hide(400);
                                    //$(button_).html(tag);
                                }
                              }

                            );

                          }
                        }

                  </script>
                  
<div class="py-5 d-flex align-items-center bg-light" id="projects" style="min-height:100% !important;">

    <div class="container">
      <div class="row text-center">
        <div class="col-md-12">
          <h1 class="mb-4 text-dark">Projects</h1>
          <p class="lead"></p>

                <!-- project tags -->
                <div class="col-md-12 text-center">
                  Tags : 
                  <button id="alltagbutton" type="button" class="btn btn-outline-dark btn-sm tags" tag="All">All</button>
                  <button type="button" class="btn btn-outline-dark btn-sm tags" tag="Android Apps">Android Apps</button>
                  <button type="button" class="btn btn-outline-dark btn-sm tags" tag="Web Development">Web Development</button>
                  <button type="button" class="btn btn-outline-dark btn-sm tags" tag="ChatBot">ChatBot</button>
                  <button type="button" class="btn btn-outline-dark btn-sm tags" tag="Desktop Apps">Desktop Apps</button>
                  <button type="button" class="btn btn-outline-dark btn-sm tags" tag="Robotics">Robotics</button>
                  <button type="button" class="btn btn-outline-dark btn-sm tags" tag="Embedded">Embedded</button>
                  <button type="button" class="btn btn-outline-dark btn-sm tags" tag="Scripting">Scripting</button>
                  <button type="button" class="btn btn-outline-dark btn-sm tags" tag="Game Development">Game Development</button>  
                  
                </div>

                <br>

              <!-- projects container -->
              <div class="row">

<?php
  function printProject($title, $image, $description, $url, $tag){
    echo '<div class="projectcontainer hoverProject col-md-4" tag="'.$tag.'"';

    //if url is not empty
    if($url!=''){
      echo ' onclick="visitPage(\''.$url.'\');">';
    }else{
      echo '">';
    }

    echo '<img class="d-block mx-auto rounded img-fluid" src="'.$image.'" width="200">';
    echo '<h3 class="mb-1 mt-1 text-dark"><b>'.$title.'</b></h3>';
    echo '<p class="text-muted">'.$description.'</p></div>';
  }

  //read json
  $str = file_get_contents('https://sausecode.com/cv/assets/projects.json');

  //decode
  $json = json_decode($str, true); // decode the JSON into an associative array

  foreach ($json['projects'] as $field => $value) {
    $title=$value['title']; $image=$value['image']; $description=$value['description'];
    $url=$value['url']; $tag=$value['tag'];

    printProject($title, $image, $description, $url, $tag);
  }
?>

                
                
              </div>

        </div>
      </div>
    </div>
</div>

			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
       
	
	<div class="container-fluid onepage-section" id="div-robotics">
	 <div class="row">
		<div class="col text-center">
			<h3 class="textcolor-white">Robotics</h3><br><br>
		</div>
	  </div>
	  
      <div class="row">
        <div class="col text-center robotblock">
		  <h5 class="textcolor-white">Remote Controlled Battle-bot for UWU Robot Battle 2016</h5>
		  <p class="textcolor-white">Remote controlled battle-bot from scratch.<br>Remote controller and Robot's receiver powered by arduino nanos.<br></p>
		  <h4 class="textcolor-white">DustyAlpha<br></h4>
		  <br><img src="https://i.stack.imgur.com/4lkWu.jpg" class="img-thumbnail"><br>
		  <p class="textcolor-white"><br>Source Code : <a href="https://github.com/chandimab/arduino-remote-controlled-battlebot">https://github.com/chandimab/arduino-remote-controlled-battlebot</a></p>
        </div>
		
      </div>
    </div>
	
	
	<div class="container-fluid onepage-section" id="div-about">
		
		<div class="row">
			<div class="col text-center">
				<h3 class="textcolor-white">About Me!</h3><br><br>
			</div>
		  </div>
		
		<div class="row">
			<div class="col text-center">
				<img src="https://avatars1.githubusercontent.com/u/10095321?s=460&v=4" class="img-responsive"></img><br><br>
				<h4 class="textcolor-white">Chandima B Samarasinghe<br></h4>	
				<p class="textcolor-white"><a href="http://www.ce.pdn.ac.lk">Computer Science and Engineering</a><br>Undergraduate of <a href="http://eng.pdn.ac.lk">Faculty of Engineering, University of Peradeniya</a><br>
				<br>I love developing <a href="https://play.google.com/store/apps/dev?id=8421546149101270799">android apps</a>,<br>solving algorithmic problems in <a href="https://www.hackerrank.com/chandima_b">hackerrank</a> and learning latest technologies.<br>
				</p>
			</div>
		</div>
    </div>
	
	<div class="container-fluid onepage-section" id="div-contact">
		<div class="row">
			<div class="col text-center">
				<h3 class="textcolor-white">Contact</h3><br><br>
			</div>
		  </div>
		
      <div class="row">
	    
			<a href="http://sausecode.com" class="btn contactblock text-center col textcolor-white">web<br>http://sausecode.com</a>
			<a href="mailto:dev.chandima@gmail.com" class="btn contactblock text-center col textcolor-white">email<br>dev.chandima@gmail.com</a>
			<a href="https://www.facebook.com/chandima.b.samarasinghe" class="btn contactblock text-center col textcolor-white">facebook<br>https://www.facebook.com/chandima.b.samarasinghe</a>
			<a href="https://github.com/chandimab" class="btn contactblock text-center col textcolor-white">github<br>https://github.com/chandimab</a>
			<a href="https://www.linkedin.com/in/chandimab" class="btn contactblock text-center col textcolor-white">linkedin<br>https://www.linkedin.com/in/chandimab</a>
					
		<!--div class="col text-center contactblock">
          <p class="textcolor-white">email<br>dev.chandima@gmail.com</p>  
        </div>
		<div class="col text-center contactblock">
          <p class="textcolor-white">facebook<br>https://www.facebook.com/chandima.b.samarasinghe</p>
        </div>
		<div class="col text-center contactblock">
          <p class="textcolor-white">github<br>https://github.com/chandimab</p>  
        </div>
		<div class="col text-center contactblock">
          <p class="textcolor-white">linkedin<br>https://www.linkedin.com/in/chandimab</p>
        </div-->
      </div>
    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
