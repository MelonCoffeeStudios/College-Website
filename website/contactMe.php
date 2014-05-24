<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<link rel="icon" href="favicon.ico" type="image/x-icon">
        <title>Aaron Griffin</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="css/normalize.min.css">
        <link rel="stylesheet" href="css/main.css">
		<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
		<link href='http://fonts.googleapis.com/css?family=Ubuntu:400,700,300' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" type="text/css" href="css/view.css" media="all">		
		<script src="http://code.jquery.com/color/jquery.color.plus-names-2.1.0.min.js"></script>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
		<script src="js/jquery.fittext.js"></script>
		<script src="js/jquery.lettering.js"></script>
		<script src="http://yandex.st/highlightjs/7.3/highlight.min.js"></script>
		<script src="js/jquery.textillate.js"></script>
        <script type="text/javascript" src="js/main.js"></script>
		

    </head>
    <body>

	<!--<div id="topDiv">
				<img id="topHalf" src="img/topHalf.png">
				<img id="bottomHalf" src="img/bottomHalf.png">
		</div>-->
	<div id="copyCont">
		<div id="copyrightInfo"></div>
		<div id="copyrightContent">
				<span class="margin2">Helllo :)</span>
		</div>	
	</div>
	
		<div id="behindDiv">
			<div id="menu" class="menu">
				<ul>
					<li onclick="window.location.assign('index.html');">Home</li>
				</ul>
			</div>
			
			<div id="menuButton">
					<img src="img/menu.png" style="margin-left:45%">
			</div>
				
			<div id="title" class="title">
			<h1 class="tlt">Welcome to my website :) </h1>
			</div>
			
			<div id="container">	
				<div id="content">
					<div id="contentMargin" class="margined">
						<div style="text-align:center;">
						<form style="z-index:-100;" class="appnitro"  method="post" action="">
							<div class="form_description">
								<h2>Feedback form :) </h2>
								<p>Enter your name and message below.</p>
							</div>						
							<ul >	
								<li id="li_1" >
									<label class="description" for="element_1">Name </label>
									<div>
										<input id="element_1" name="element_1" class="element text medium" type="text" maxlength="255" value=""/> 
									</div> 
								</li>		
								<li id="li_2" >
									<label class="description" for="element_2">Message </label>
									<div>
										<textarea id="element_2" name="element_2" class="element textarea medium"></textarea> 
								</li>
									<li class="buttons">
									<div id="submit" onclick="submit();">Submit</button>
								</li>
							</ul>
						</form>	
						</div>
						<?php
						
						date_default_timezone_set('Europe/London');

						$date = date('H:i:s');

						$data = file_get_contents("log.txt");

						$message = $_GET['message'];
						
						$message = stripcslashes($message);

						$name = $_GET['name'];
						
						if(!$name == ""){
							if(!$message == ""){
								$newData = $data . "\n" . $date . ": " . $name . " - " . $message . "                   <br>";
								file_put_contents("log.txt", $newData);
							}
						}
								
						?>
						<div style="border-top:1px solid;"><br>
							<div id="messages">
								<?php
								echo file_get_contents("log.txt");
								?>
							</div>
							<hr><br>
						</div>
						
						
					</div>
					
				</div>
				<div id="footer"></br>
					Website designed by Aaron Griffin | <a href="mailto:aaronjgriffin96@gmail.com">aaronjgriffin96@gmail.com</a>
					<br><div onclick="openCopyInfo();" id="copyClick" style="cursor:pointer;">Copyright Info</div>
				</div>
				
			</div>
		</div>
		
		
		<script>		
				function submit(){
					var name = $("#element_1").val();
					var message = $("#element_2").val();
					window.location.assign("contactMe.php?name="+name+"&message="+message);
					}

		</script>
		

		
		
		
		
    </body>
</html>
