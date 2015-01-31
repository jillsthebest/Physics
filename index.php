<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="container-fluid">
            <h2>What's the most logical way to handle figuring out the electric field of a uniformly charged thin rod?</h2>
        <?php
            include 'functions/radio.php';
            include 'functions/arrayStuff.php';
            
            $array = array();
            $array["slice up that fucker."]= "Watch your mouth. But yeah, Cut up the rod into pieces, each having charge deltaQ.";
            $array["What are you really asking?"] = "Well, just for your bank account number is all.";
            $array["Only Snoop knows."] = "Snoop is dead.";
            new radio("test", $array);
            
        ?>
            <h2></h2>
        </div>
    </body>
</html>
