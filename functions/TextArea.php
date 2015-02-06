<?php


/**
 * TextArea for Bootstrap
 *
 * @author Jill Russek
 */
class TextArea {
    private $labelText;
    public function __construct($labelText) {
        $this->labelText = $labelText;
        $this->buildTextArea();
}

private function buildTextArea(){
    $id = uniqid("textArea");
    echo '<form role="form">';
    echo '<div class="form-group">';
      echo '<label for="'.$id.'">'.$this->labelText.'</label>';
      echo '<textarea class="form-control" rows="5" id="'.$id.'"></textarea>';
    echo'</div>';
  echo'</form>';
}
}

?>
