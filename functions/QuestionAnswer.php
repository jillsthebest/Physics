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
        echo '<div class="container-fluid">';
        echo '<h2>'.$question.'</h2>';
          
            $array = array();
            foreach($answers as $key => $value){
             $array[$key] = $value;
            }
            new radio(uniqid("name"), $array);
            
        echo'</div>';
    }
}

?>
