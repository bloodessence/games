<?php

error_reporting(E_ERROR | E_PARSE);

if($_POST["submit"]) {
    
    $result='<div class="alert alert-success">Form submitted</div>';
    
    $error="";
    
    if(!$_POST["name"]) {
        $error="<br />Please enter your name!";
    }
    
    if(!$_POST["email"]) {
        $error=$error."<br />Please enter your email address!";
    }
    
    if(!$_POST["comment"]) {
        $error.="<br />Please enter a comment!";
    }
    
    if($_POST['email']!="" AND !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
     
        $error.="<br />Please enter a valid email address!";
    }
    
    if($error) {
        $result='<div class="alert alert-danger"><strong>There were error(s) in your form:<br />'.$error.'</strong></div>';
        
    } else {
        
       if(mail("rusu.ovidiu09@yahoo.com", "Comment from website!", "Name: ".$_POST['name']."
        
        Email: ".$_POST['email']."
        
        Comment: ".$_POST['comment'])) {
           
           $result='<div class="alert alert-success"><strong>Your email has been sent</strong></div';
       } else {
           
           $result='<div class="alert alert-danger"><strong>Sorry, there was a problem in sending your message. Please try again</strong></div>';
           
       }
        
    }
    
}


?>




<!doctype html>
<html>
    
    <head>
        <title>PC Games For All</title>
        <meta charset="utf-8" />
        <meta http-equiv="Content type" content="width=type/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
    
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    
    </head>
    
    <link rel="stylesheet" href="styles.css">
    
    <body data-spy="scroll" data-target=".navbar-collapse">
        
        
        <div class="navbar navbar-inverse navbar-fixed-top">
        <div class="container"><div class="navbar-header">
            
            <a href="" class="navbar-brand" id="brand">Gamer's Paradise</a>
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                  
                  <span class="sr-only">Toggle navigation</span>
                  
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                      
                  </button>
            
            </div>
            
            <div class="collpase navbar-collapse">
                  
                  <ul class="nav navbar-nav">
                      
                      <li class="bold"><a href="#page1">Page 1 - Welcome</a></li>
                      
                      <li class="bold"><a href="#page2">Page 2 - What PC do you use?</a></li>
                      
                      <li class="bold"><a href="#page3">Page 3 - Some games for you</a></li>
                      
                  </ul>
                  
              </div>
            
            </div></div>
        
        
        
        <div class="container" class="blank">
            
            <div id="page1" class="theSameHeight">
                
                <center>
                <h1 style="padding-top:100px;">Hello :)</h2>
                <p class="lead">Welcome to my site</p>
                    
                    <p id="prolog">
                        <span class="bold">The best PC games you can play today.</span> <br />Once a year, the entire PC Gamer team gathers together to vote on the games i recommend above all others. The <span class="bold">‘today’</span> part is crucial: these are games from across the history of PC gaming that i believe are still the most fun to play right now. <br /><br />It's a list of old favourites and new ones, games you know well and games you've likely never played. Hopefully you’ll discover some new favourites among them—and get the itch to go back to some you already love.<br />

                        For a celebration of those vital historical games that pushed PC gaming forward, read our list of the 50 most important PC games of all time.<br />
                        <br />
                        <span class="bold">The Top 100 selection process is democratic and subjective.</span> Each writer simply nominates their personal top 15 games, and we combine the resulting choices to produce a longlist. Two writers, one each from our US and UK teams, then get together on a sweaty and prolonged Skype call to decide on a final list that we’re proud of. That’s what you have here, along with personal picks from the team highlighting games they love that didn’t make the final cut. <span class="bold">Enjoy.</span>
                        
                    </p>
                    
                    </center>
                
                </div>
            
            <div id="page2" class="theSameHeight">
                
                Bla Bla Bla ...
                
                </div>
            
            <div id="page3" class="thirdHeight emailForm">
                
                <h1>My email form</h1>
                
                <p class="lead">Please get in touch - I'll get back to you as soon as I can</p>
                
                <?php echo $result; ?>
                
                
                <form method="post">
                    
                    <div class="form-group">
                        
                        <label for="name">Your name:</label>
                        
                        <input type="text" name="name" class="form-control" placeholder="Enter your name" />
                        
                    </div>
                    
                    <div class="form-group">
                        
                        <label for="email">Your email:</label>
                        
                        <input type="email" name="email" class="form-control" placeholder="Enter your email" />
                        
                    </div>
                    
                    <div class="form-group">
                        
                        <label for="comment">Your comment:</label>
                        
                        <textarea class="form-control" name="comment"></textarea>
                        
                    </div>
                    
                    <input name="submit" type="submit" class="btn btn-success btn-lg" value="Submit" />
                    
                </form>
                
                </div>
            
        </div>
        
        
        
        <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        
        <script src="scripts.js"></script>
        
    </body>
    
</html>