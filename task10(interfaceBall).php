<?php
interface iBall {
  public function changeForm();
}


class Ball implements iBall {

public $form = 'circle';

  public function changeForm() {


  echo $this->form = 'oval';
}
}

$Ball = new Ball();
echo $Ball->changeForm();
 ?>
