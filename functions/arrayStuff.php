<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of arrayStuff
 *
 * @author Jill Russek
 */
class arrayStuff {
    public static function addGuess($guess, $response, $array){
        $array[$guess] = $response; 
        return $array;
    }
}

?>
