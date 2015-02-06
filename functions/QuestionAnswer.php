<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
include 'radio.php';
/**
 * Description of arrayStuff
 *
 * @author Jill Russek
 */

          
            
             
            
          
          
         
class QuestionAnswer {
    public static function QA ($question, $answers){
        $id = uniqid("collapse");
        echo '<div class="container-fluid">';
        echo '<div class="panel panel-default">';
        echo '<div class="panel-heading">';
        echo '<h2 class="panel-title">';
        echo '<a data-toggle="collapse" data-parent="#accordion" href="#'.$id.'">'.$question.'</a>';
        echo '</h2>';
        echo '</div>';
        echo '<div id="'.$id.'" class="panel-collapse collapse">';
        echo '<div class="panel-body">';
            $array = array();
            foreach($answers as $key => $value){
             $array[$key] = $value;
            }
            new radio(uniqid("name"), $array);
        echo' </div>
        </div>';   
        echo'</div>';
    }
    
   
}

?>
