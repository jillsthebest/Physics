
<!DOCTYPE html>
<html>
    <head>
        <?php include "Parts/HeadScripts.php"; include "Parts/Title.php";
            new Title("Electric Potential");
        ?> 
    </head>
    <body>
        <?php
         include "Parts/Navigation.php";
         include "functions/score.php";
         include "functions/questionincludes.php";
         #Questions
         $question = "<strong>Potential energy</strong> should be associated with the interaction of what?";
         $answers = array("a pair of particles" => new Response("Okay. You've read this chapter.", 2)
             , "a pair of people who don't know each other" => new Response("haha", 1)
             , "a pair of springs" => new Response("This page is called electric potential. Not physics 1.", 0)  
         );
         QuestionAnswer::QA($question, $answers);
         $question2 = "<strong>Electric potential</strong> is potential electric energy per ___?";
         $answers2 = array("per gigawatt"=>new Response("What does that even mean?", 0)
             , "per hertzcycle" => new Response("No. Hurts dounut.", -1)
             , "per unit charge" => new Response("Good guess.", 2));
         QuestionAnswer::QA($question2, $answers2);
         
         $question3 = "What is <strong>particle energy</strong> composed of?";
         $answers3 = array(
             "Gas"=>new Response("haha. Sometimes.", 1),
             "Rest energy and potential energy" => new Response("yep", 2),
             "the weak force" => new Response("Don't really know what that is.", 0)
         );
         QuestionAnswer::QA($question3, $answers3);
         
         $question4 = "What's the <strong>particle energy</strong> equation?";
         $answers4 = array("What goes up = What comes down" =>new Response("eh", -1),
             "particle energy = rest energy + kinetic energy" =>new Response("Yes sir.", 2),
             "particle energy = strong force - potential energy" => new Response("You just wanted to see what I'd say.", 1));
         QuestionAnswer::QA($question4, $answers4);
         
         $question5 = "What's the lazy equation for <strong>kinetic energy?</strong>";
         $answers5 = array("mc^2" => new Response("no", 0),
                     "(1/2)*m*v^2" => new Response("yes", 2),
                     "1/2*mc^2" => new Response("no",-1)
             );
             QuestionAnswer::QA($question5, $answers5);
             
             $question6 = "Why doesn't a single particle have <strong>potential energy</strong>?";
             $answers6 = array("because I told it not to"=>new Response("Your god is offended", -1),
                 "It does, what are you talking about" =>new Response("You're wrong", 0),
                 "Because potential energy is about stuff interacting, particularly, particles." => new Response("kk", 2));
             QuestionAnswer::QA($question6, $answers6);
             
             $q = 'What is the question, if the answer is,"when positive or negative <strong>work</strong> is done on the particle by its surroundings"?';
             $a = array("When can a particle change in kinetic energy?"=>new Response("Yes", 2),
                        "When can a single particle have potential energy?" => new Response("Nope.", 0),
                        "When can a wood chuck gives up his wood for good" => new Response("They should all do that",1)
                 );
             QuestionAnswer::QA($q, $a);
             
             $q1 = 'What is the equation for <strong>work</strong> in relation to particles?';
             $a1 = array("w = Force*displacement = (force.x*displacement.x + force.y*displacement.y + force.z*displacement.z"=>new Response("Yes",2)
                 , "I'm bored."=>new Response("It happens.",1)
                 , "w = Force*mass" => new Response("No, but that sounds familiar.", 0)
                 );
                 QuestionAnswer::QA($q1, $a1);
                 
              $q2 = "What is the change in <strong>potential energy</strong> of a system?";
              $a2 = array("-W<sub>int</sub>"=>new Response("Yes, it is the negative of the work done by internal forces", 2),
                            "E*deltaX" => new Response("No",0)
                  ,         "I'm tired."=> new Response("Me too.", 1));
              QuestionAnswer::QA($q2, $a2);
              
              $q3 = "When deltaV is negative, the direction of Path is the _____ as/of Direction of Electric Field?";
              $a3 = array("Opposite" => new Response("nope", 0), "Same"=> new Response("yep", 2), "Perpendicular" => new Response("Nope", -1));
              QuestionAnswer::QA($q3, $a3);
              
              $q5 = "When deltaV is positive, the direction of Path is the _____ as/of Direction of Electric Field?";
              $a5 = array("Opposite" => new Response("Yep", 2), "Same"=> new Response("Nope", 0), "Perpendicular" => new Response("Nope", -1));
              QuestionAnswer::QA($q5, $a5);
              
              $q4 = "When deltaV is 0, the direction of Path is the _____ as/of Direction of Electric Field?";
              $a4 = array("Opposite" => new Response("nope", 0), "Same"=> new Response("nope", 2), "Perpendicular" => new Response("yep", -1));
              QuestionAnswer::QA($q4, $a4);
              

             ?>
           
        
    </body>
</html>
