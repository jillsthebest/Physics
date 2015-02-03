<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Response
 *
 * @author Jill Russek
 */
class Response {
    public $text;
    public $score;
         
    public function __construct($text,$score ){
        $this->score = $score;
        $this->text = $text;
    }
}

?>
