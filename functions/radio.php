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
       $parent = 'accordion';//uniqid(ord($this->name));
       //begin group of radio buttons
       echo '<form class="panel-group bg-info" id = "'.$parent.'" >';
       $uniqHit = uniqid("hit");
       echo '<script> var '.$uniqHit.' = false;</script>';
     $count = 0;
      foreach($this->array as $value  => $response){
        $id = uniqid(ord($value));
        //radio button
        echo '<div class="panel panel-default bg-info">';
        echo '<input data-parent="#'.$parent.'"  data-toggle="collapse" data-target="#'.$id.'" type="radio" name="'.$this->name.'" value="'.ord($value).'" >'.ucfirst($value);
         //take care of score
         echo '<script>
             $("[value=\''.ord($value).'\']").click(function(){
                if(!'.$uniqHit.'){
                    '.$uniqHit.' = true;
                    count +='.$response->score.';
                    $("#score").html("<b>" + count + "</b>");
                    $("#Ani'.$id.'").html("<b>\+"+'.$response->score.'+"</b>");
                    $("#Ani'.$id.'").animate({left: \'250px\',},"slow");
                }
             });
             </script>';
         echo '</div>';
         //response element
         if($count == 0){
            echo '<div id="'.$id.'" class="panel-collapse collapse">';
 
         }
         else{
             echo '<div id="'.$id.'" class="panel-collapse collapse">';
         }
         //response div
         echo '<div class="panel-body">'.$response->text;
            //animated score
            echo '<div style="position:absolute" id ="Ani'.$id.'">'; 
            echo '</div>';
         echo '</div>';
         echo '</div>';
         $count ++;
       }
       echo '</form>';
   }
}

?>
