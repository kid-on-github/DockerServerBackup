<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags must come first -->
  <link rel="icon" href="../favicon.ico">
  <title>HackISU</title>
  <link href="../bootstrap.css" rel="stylesheet">
  <link href="../ie10-viewport-bug-workaround.css" rel="stylesheet">
  <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
  <link href="styles.css" rel="stylesheet">
  <script src="../js/ie-emulation-modes-warning.js"></script>
  <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	<script src="../js/brand.js"></script>
</head>
<body class="vertical-center">
	
	<nav class="navbar navbar-inverse navbar-fixed-top bg-lamp">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" id="brand" onclick="brandlamp()">Hyper-Lamp</a>
			</div>
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					<li><a href="../index.html">Home</a></li>
					<li><a href="../games/index.html">Games</a></li>
					<li class="active"><a href="../projects.html">Projects<span class="sr-only">(current)</span></a></li>
					<li><a href="../about.html">About Me</a></li>
				</ul>
			</div>
		</div>
	</nav>
	
  <div class="container">
    <div>
      <h1>The Little Hacker That Could</h1>
    </div>
    <div class="main col-xs-12 col-sm-10 col-lg-8 col-lg-offset-2">

      <?php
        function validate($data) {
          $data = trim($data);
          $data = stripslashes($data);
          $data = htmlspecialchars($data);
          return $data;
        }
        function display($answer) {
          $name = validate($_POST["studentname"]);
          $clr = validate($_POST["faveColor"]);
          $but1 = "";
          $but2 = "";
          $but3 = "";
          $a = "Carpool";
            $a1 = "Sit down and cry";
              $a1a = "Hop in";
              $a1b = "Tell them to get lost";
                $a1b1 = "Cut through a forest as a shortcut";
            $a2 = "Walk all the way there";
              $a2a = "See if any teams want an extra member";
              $a2b = "Attend a tech-talk for project inspiration";
                $a2b1 = "Simulating real life with VR";
                $a2b2 = "A PHP choose your own adventure game";
                $a2b3 = "An API based online accounting application";
            $a3 = "Give up";
          $b = "Take a bus";
            $b1 = "Talk to companies just to gather swag";
              $b1a = "Graciously accept";
                $b1a1 = "Research Squarespace further";
                $b1a2 = "Think of a project related to Square Space";
                  $b1a2a = "Build your own template for websites";
                  $b1a2b = "Build a customer service managment client";
              $b1b = "Politely Decline";
                $b1b1 = "Join their team";
                $b1b2 = "Look for a different team";
                  $b1b2a = "Join the team";
                  $b1b2b = "Take charge of his team with your own idea";
                  $b1b2c = "Work alone";
                    $b1b2c1 = "OpenCV image recognition on kinect";
                    $b1b2c2 = "A web-based email spoofer";
                    $b1b2c3 = "A PHP choose your own adventure";
                $b1b3 = "Ask if you can work hardware for their team";
              $b1c = "Grab a t-shirt and book it";
            $b2 = "Mingle and try to find a team";
              $b2a = "Arduino rover";
              $b2b = "Online acounting team";
              $b2c = "Airplane team";
            $b3 = "Go straight for the food";
          $c = "Get an uber";
            $c1 = "Chat with the driver about the music";
            $c2 = "Stick in some earbuds and take a quick nap";
          $fail = "Restart";
        
          if ($answer == $a) {
            echo "You ask around but no one wants to carpool with you, every carpool headed in that direction is conveniently 'full' or unresponsive. What do you do?";
            $but1 = $a1;
            $but2 = $a2;
            $but3 = $a3;
          }
          elseif ($answer == $a1) {
            echo "Some frat boys in a truck see you crying and offer you a ride. What do you do?";
            $but1 = $a1a;
            $but2 = $a1b;
            $but3 = 1;
          }
          elseif ($answer == $a1a) {
            echo "They swerve all over the roads, and you aren't completely convinced that the driver isn't drunk, but you manage to arrive safely and on time.";
            $but1 = $b1;
            $but2 = $b2;
            $but3 = $b3;
          }
          elseif ($answer == $a1b) {
            echo "They make rude gestures in your general direction and speed away. Would you like to . . .";
            $but1 = $a2;
            $but2 = $a1b1;
            $but3 = $a3;
          }
          elseif ($answer == $a1b1) {
            echo "The sky becomes overcast and blocks the small amount of light that was coming through the trees. In your blindness you trip on a brange and break your arm. Immediately you call 911 and rescue quickly carries you away to the E.R. You did not make it to the hackathon.";
            $but1 = $fail;
            $but2 = 1;
            $but3 = 1;
          }
          elseif ($answer == $a2) {
            echo "You set off towards the hackathon. Midway through your walk it starts raining. You arrive at the hackathon soaked, tired, and a few hours late. What do you do?";
            $but1 = $a2a;
            $but2 = $a2b;
            $but3 = 1;
          }
          elseif ($answer == $a2b) { // tech talks for inspiration
            echo "You attend tech talks on VR, PHP, and basic use of API's. You decide to work on a project based on . . .";
            $but1 = $a2b1;
            $but2 = $a2b2;
            $but3 = $a2b3;
          }
          elseif ($answer == $a2b1) { // virtual reality
            echo "You do such a good job of programming a simulated world mirroring the real one that you can no longer tell whether or not you are in VR and spend the rest of your life with your slightly pixilated children and your slightly pixilated spouse in a trailer park in the Chicago subburbs.";
            $but1 = $fail;
            $but2 = 1;
            $but3 = 1;
          }
          elseif ($answer == $a3) {
            echo "You cut your losses and plan on trying again next year.";
            $but1 = $fail;
            $but2 = 1;
            $but3 = 1;
          }
          elseif ($answer == $b) {
            echo "Despite the loud, rambunctious people sitting in front of you on the bus, you arrive on time and unscathed. What's your next move?";
            $but1 = $b1;
            $but2 = $b2;
            $but3 = $b3;
          }
          elseif ($answer == $b1) {
            echo "You load up on $clr coffee mugs and company logo stickers. One of the reps from Squarespace offers you an unpaid summer internship. What do you do?";
            $but1 = $b1a;
            $but2 = $b1b;
            $but3 = $b1c;
          }
          elseif ($answer == $b1a) {
            echo "They say that they can't wait to see you next summer and send you on your way. Do you . . .";
            $but1 = $b1a1;
            $but2 = $b1a2;
            $but3 = $b2;
          }
          elseif ($answer == $b1a1) { // research squarespace
            echo "You find out that Squarespace is the number one platform for both experience coders and newbies to create powerfull websites designed specifically for your needs. You already know how to code websites, in fact you coded this one, but you can't argue with the fact that \"Squarespace powers millions of websites across hundreds of industries for people just like you.\" After checking out a few of their templates you realise how simple it is for even the most inexperienced coders to create their own websites with ease. You realise that this could be the internship of a lifetime, however, you spent almost the entirety of the hackathon playing around on squarespace and don't have enought time to create a hack worth demoing. So ends your hackathon experience.";
            $but1 = $fail;
            $but2 = 1;
            $but3 = 1;
          }
          elseif ($answer == $b1a2) { // squarespace project
            echo "Since Squarespace is a website design company, the projects you come up with are:";
            $but1 = $b1a2a;
            $but2 = $b1a2b;
            $but3 = 1;
          }
          elseif ($answer == $b1a2a) { // template
            echo "You build an empty page that is easily customizable, but it's nothing in comparison to the massive online library of templates available to the clients of Squarespace. You don't win any prizes after demoing and Squarespace is slightly less interested in you afterwards.";
            $but1 = $fail;
            $but2 = 1;
            $but3 = 1;
          }
          elseif ($answer == $b1a2b) { // customer service
            echo "You design software that sorts customers on hold with customer service based on urgency, issue difficulty, and representative availability. After the demos you win the grand prize of a wireless headset, two laptops, and a backpack to carry it all in. Squarespace is so impressed that they upgrade your unpaid internship to a fulltime job with 401k and benefits. Your mom is incredibly proud of you.";
            $but1 = $fail;
            $but2 = 1;
            $but3 = 1;
          }
          elseif ($answer == $b1b OR $answer == $b1c) {
            echo "A team see's your $clr Squarespace swag and offers you a position on their team as a web developer.";
            $but1 = $b1b1;
            $but2 = $b1b2;
            $but3 = $b1b3;
          }
          elseif ($answer == $b1b1 OR $answer == $b2b OR $answer == $a2b3) { // join team
            echo "Your team works very hard on an online accounting application. When the names of the demo prize winners are called the very last name was $name! You run up and grab the laptop that you won and saunter off stage feelinig accomplished.";
            $but1 = $fail;
            $but2 = 1;
            $but3 = 1;
          }
          elseif ($answer == $b1b2) { // find other team
            echo "From accross the convention floor you hear a voice yell $name!. You turn around to see your old friend Ricky run up and give you the highest five of your life. He asks you to join his robotic wheelchair team.";
            $but1 = $b1b2a;
            $but2 = $b1b2b;
            $but3 = $b1b2c;
          }
          elseif ($answer == $b1b2a OR $answer == $b1b2b) { // join rickey
            echo "You and Ricky (also some kid named chad) spend half your time working on the project and the other half playing Leauge. After demoing, your team doesn't win any prizes but you all learned alot and had a great time.";
            $but1 = $fail;
            $but2 = 1;
            $but3 = 1;
          }
          elseif ($answer == $b1b2c) { // work alone
            echo "You find an empty spot at a table, sit down, and think about what hack to work on. Do you work on . . .";
            $but1 = $b1b2c1;
            $but2 = $b1b2c2;
            $but3 = $b1b2c3;
          }
          elseif ($answer == $b1b2c1) { // work on opencv
            echo "You manage to make a kinect recognize simple objects like fire extinguishers, traffic cones, and circular $clr blobs. You demo your project hoping to win some kind of prize, but sadly your efforts are unappreciated. You don't win any prizes.";
            $but1 = $fail;
            $but2 = 1;
            $but3 = 1;
          }
          elseif ($answer == $b1b2c2) { // work on spoofer
            echo "You build a fully functioning user friendly email spoofer and show it off to all your friends, but your friend Sam uses it to send fake school emails to some girls he wants to hit on which are reported to the police. Both you and Sam are suspended from your school, however you did win a raspberry pi 3 after deoming. You go home both happy and sad (as well as mad at Sam).";
            $but1 = $fail;
            $but2 = 1;
            $but3 = 1;
          }
          elseif ($answer == $b1b2c3 OR $answer == $a2b2) { // work this game
            echo "You spend half of the hackathon learning PHP and coding a web based choose your own adventure game about hackathons. The other half of your time is spent debugging a google apache server to host it on. In the end you decide that the project (while being a learning experience) isn't worth demoing and decide to instead just add it to the lsit of projects you've created.";
            $but1 = $fail;
            $but2 = 1;
            $but3 = 1;
          }
          elseif ($answer == $b1b3) { // work hardware
            echo "They seem dissapointed but will take all the help they can get. They are working on fitness trackers that display their information on a website. In the end you wire a gyroscope and a gps to a pedometer that fits on your wrist and transmits its data to a web server in real time. Not only does your team win your own smart watches, but you are all offered jobs with Fitbit.";
            $but1 = $fail;
            $but2 = 1;
            $but3 = 1;
          }
          elseif ($answer == $b2 OR $answer == $a2a) { // mingle and find team
            echo "You find a team working on an arduino controlled rover, one working on programming an online accounting application, and a team making a program that tracks paper airplane flight. Which team would you like to join?";
            $but1 = $b2a;
            $but2 = $b2b;
            $but3 = $b2c;
          }
          elseif ($answer == $b2a) { // rover team
            echo "Despite the entire team putting in all of their maximum effort, the rover won't move due to one misplaced semicolon that was never found. Your team is applauded for their ambition but no prizes are won.";
            $but1 = $fail;
            $but2 = 1;
            $but3 = 1;
          }
          elseif ($answer == $b2c) { // airplane tracking team
            echo "You wire up a high pixel count webcam to your laptop, but as soon as it's plugged in you hear a popping sound and the screen goes black. Your laptop's battery is fried which prevents you from getting any work done for the rest of the hackathon. You spend all your time in teck talks and playing Smash on some guy's $clr Gamecube.";
            $but1 = $fail;
            $but2 = 1;
            $but3 = 1;
          }
          elseif ($answer == $b3) { // go for food
            echo "There was a long line and by the time you get there there was only one granola bar and a juice box. What's your next move?";
            $but1 = $a2a;
            $but2 = $a2b;
            $but3 = $b1b2c;
          }
          elseif ($answer == $c) {
            echo "Your driver picks you up and speeds towards the hackathon. Light jazz music starts playing over the radio.";
            $but1 = $c1;
            $but2 = $c2;
            $but3 = 1;
          }
          elseif ($answer == $c1) {
            echo "You and the uber driver get into a heated debate about what is the best music genre. The driver is so invested in proving you wrong that he misses your turn and drives all the way to Story City. You arrive late to the hackathon.";
            $but1 = $a2a;
            $but2 = $a2b;
            $but3 = 1;
          }
          elseif ($answer == $c2) {
            echo "Your uber driver wakes you up as you pull into the hackathon parking lot. You leave him a nice tip and head inside.";
            $but1 = $b1;
            $but2 = $b2;
            $but3 = $b3;
          }
        
          else {
            echo "Hello $name, You're well on your way to your very first hackathon. You are all signed up and ready to start hacking, but you need to get there first. Do you want to...";
            $but1 = $a;
            $but2 = $b;
            $but3 = $c;
          }
          
          if ($but3 == 1) {
            if ($but2 == 1) {
              echo '<form method="post" align="center" action"">
                      <input type="submit" class="btn btn-default" name="null" value="'.$but1.'">
                    </form>';
            }
            else {
              echo '<form method="post" align="center" action"">
                    <input type="submit" class="btn btn-default" name="button" value="'.$but1.'">
                    <input type="submit" class="btn btn-default" name="button" value="'.$but2.'">
                    <input type="hidden" name="studentname" value='.$name.'>
                    <input type="hidden" name="faveColor" value='.$clr.'>
                </form>';
            }
          }
          else {
            echo '<form method="post" align="center" action"">
                    <input type="submit" class="btn btn-default" name="button" value="'.$but1.'">
                    <input type="submit" class="btn btn-default" name="button" value="'.$but2.'">
                    <input type="submit" class="btn btn-default" name="button" value="'.$but3.'">
                    <input type="hidden" name="studentname" value='.$name.'>
                    <input type="hidden" name="faveColor" value='.$clr.'>
                  </form>';
          }
        }
        
        if(isset($_POST['submit'])) {
          display();
        } 
        elseif (isset($_POST['button'])) {
          display($_POST['button']);
        }
        else {
          echo '<form method="post" action="">
                  <div class="form-group">
                    <label>What\'s your name?</label>
                     <input type="text" class="form-control" name="studentname">
                  </div>
                  <div class="form-group">
                    <label>What\'s your favorite color?</label>
                    <input type="text" class="form-control" name="faveColor">
                  </div>
                  <div class="form-group"> 
                     <button type="submit" class="btn btn-default start" name="submit">Click to Continue</button>
                  </div>
                </form>';
        }
		  ?>
    </div>
  </div>
  <!-- Bootstrap JS -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script>
    window.jQuery || document.write('<script src="../js/jquery.min.js"><\/script>')
  </script>
  <script src="../js/bootstrap.js"></script>
  <script src="../js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>