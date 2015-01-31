<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of radio
 *
 * @author Jill Russek
 */
class radio {
   
   private $name;
   private $array;
   public function __construct($name, $array ){
       
        $this->name = $name;
        $this->array = $array;
        
        $this->buildRadio();
       
   }
   public function buildRadio(){
       
       echo '<form class="jumbotron">';
      foreach($this->array as $value  => $response){
         echo '<input data-toggle="collapse" data-target="#'.ord($value).'" type="radio" name="'.$this->name.'" value="'.ord($value).'" >'.ucfirst($value);
         echo '<br>';
         echo '<div id="'.ord($value).'" class="collapse out">';
        echo '<p>'.$response.'</p>';
        echo '</div>';
       }
       //echo '</form>';
   }
}

?>
