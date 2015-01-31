<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of options
 *
 * @author Jill Russek
 */
class options {
    private $name;
    private $array;
     public function __construct($name, $array ){
         $this->name = $name;
         $this->array = $array;
         $this->buildOption();
     }
     
    public function buildOption(){
        echo '<select name="'.$this->name.'">';
        foreach($this->array as $value){
            echo '<option value="'.$value.'">'.$value.'</option>';
        }
        echo '</select>';
    }
    
}

?>
