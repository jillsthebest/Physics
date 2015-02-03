<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>   
    </head>
    <body>
      
        <div id="scoreContainer" style="font-size: xx-large">
            <strong>Score:</strong> 
            <strong id ="score"></strong>
            
        </div>
        
          <script >
            
           
              var count = 0;
             $("#score").html(count);
            
        </script>
        <div class="container-fluid">
            <h2>What's the most logical way to handle figuring out the electric field of a uniformly charged thin rod?</h2>
        <?php
           
            include 'functions/arrayStuff.php';
            include 'functions/QuestionAnswer.php';
            include 'functions/Response.php';
            
            $array = array();
            $array["Slice up that fucker."]= new Response("Watch your mouth. But yeah, Cut up the rod into pieces, each having charge deltaQ.", 2);
            $array["What are you really asking?"] = new Response( "Well, just for your bank account number is all.", 1);
            $array["Only Snoop knows."] = new Response("Snoop is dead.", 0);
            new radio("test", $array);
            
        ?>
            </div>
        <div class="container-fluid">
            <h2>What good is deltaQ?</h2>
            <?php
            $array = array();
             $array["It lets you ask questions on the airplane."] = new Response( "Thanks for sharing.", 0);
            $array["If I knew, I would not be here."] = new Response("detaQ is the small charge you got from dividing up the rod. Each bit of deltaQ contributes to the net electric field.", 2);
           
            $array["Hey man, no one really cares."] = new Response("No kidding.", 1);
            new radio("deltaQ", $array);
            ?>
        </div>
        <?php
        $question = "So, how about that deltaE? What's that about?";
        $answers = array("It's the electric field from a slice of the rod"=> new Response(" I believe you ",2) ,
                         "That means you found a piece of a plastic easter egg." => new Response("I'm an atheist. I don't believe in your nonsense either. ", 1),
                          "You know what, I got problems bigger than this." => new Response("I.. I don't know what to say.", 0));
        QuestionAnswer::QA($question, $answers);
        
        
         ?>
    </body>
</html>
