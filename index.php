<!DOCTYPE html>
<html>
    <head>
      <?php include "Parts/HeadScripts.php"?> 
 
  <title>Electric field of a uniformly charged thin rod</title>
    </head>
    <body>
        
        <?php include "Parts/Navigation.php"; 
              include "functions/score.php";
        ?>
    
        
       
        
        
        <div class="container-fluid">       
        <?php
         include "functions/questionincludes.php"
        ?>
          
        <!-- Questions -->
        <?php
      
        $question = "What is the first step in getting the electric field of a uniformly thin rod?";
        $answers = array("Figure out how to make your friend do your physics homework."=> new Response("Sounds good to me", 1)
                    , "figure out the relative vector r from the slice to the observation location"=> new Response("Yep", 2)
                    
                    , "figure out the relative vector r from the observation location to the source charge"=>new Response("Reverse that.", 0)
            );
            QuestionAnswer::QA($question, $answers);
            
          $question2 = "After you figure out what you were supposed to in step one (above), what should you calculate next?";
          $answers2 = array("Try to figure out the unit vector of r (rhat)"=> new Response("close, but No.", 0)
                            ,"Try to figure out how to start a profitable criminal organization so you don't have to graduate from college and get a job." => new Response("Let me know how that works out for you.", 1)
                            , "Try to calculate the magnitude of r"=> new Response("You're smarter than me.", 2)
                            , "Hey man, I came here to learn, not to answer questions I don't know" => new Response("Okay. Fine. Calculate the magnitude of r (r = observationLocation - sliceLocation).", 2)
              
          );
          QuestionAnswer::QA($question2, $answers2);
         ?>
        <!-- Recap -->
        <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#recap">
            Show Recap
        </button>
        <br/>
        
        <div id="recap" class="collapse out">
            <ol>
                <li>
                     Calculate the vector r. r = observationLocation - sliceLocation
                </li>
                <li>
                     Calculate the magnitude of r. For example, if r = (x,y), then |r| = sqrt(x^2 + y^2).
                </li>
            </ol>
        </div>
        <br/>
        <?php
        $question3 = "What to do after step 2 above?";
        $answers3 = array(
            "Figure out the direction of the electric field, r-hat"=>new Response("Yep.", 2)
            ,"Figure out the magnitude of r" => new Response("You were supposed to do that in step 2 above.",0)
            , " Tell grandma she got ran over by a reigndeer." => new Response("Yes. Someone should let her know", 1)
            );
            QuestionAnswer::QA($question3, $answers3);
            
         $question4 = "What's next?";
         $answers4 = array(
                     "determine the expression for the charge of a slice in terms of the known variables"=> new Response("You remembered!", 2)
                     , "I don't know."=>new Response("How are you supposed to learn if you don't know anything?", 1)
                     , "Jamie down the street, I saw her last week. She got new braids." => new Response("Yeah. Saw it on facebook.", 0)
                     , "determine the expression for the electric field of a slice in terms of the known variables " => new Response("Not 'till later funky pants ", 0)
             );
             QuestionAnswer::QA($question4, $answers4);
             new TextArea("Jot down everything you know so far.");
        ?>
       
        <br/>
        <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#recap2">
            Show Recap
        </button>
        <br/>

        <div id="recap2" class="collapse out">
            <ol>
                <li>
                     Calculate the vector r. r = observationLocation - sliceLocation
                </li>
                <li>
                     Calculate the magnitude of r. For example, if r = (x,y), then |r| = sqrt(x^2 + y^2).
                </li>
                <li>Calculate r-hat (r/|r|)</li>
                <li>Write an expression for the charge of a slice (dQ)</li>
            </ol>
        </div>
        
        <?php
        $question5 = "Next step?";
        $answers5 = array(
                    "write the expression for the contribution of this slice to the net electric field" => new Response("yes",2)
                    , "write the expression for the net electric field" => new Response("no, you want to integrate over one slice to get the net electric field.", 0)
                    , "let's see if I can get a point for this" => new Response("yes, you can", 1)
        );
        ?>
      </div>
    </body>
</html>
