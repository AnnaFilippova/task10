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

$ball = new Ball();
echo $ball->changeForm();
 ?>
