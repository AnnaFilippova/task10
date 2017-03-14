<?php
interface iSoap {
  public function changeColor();
}


class Soap implements iSoap {

  public $color = 'white';

  public function changeColor() {


  echo $this->color = 'red';
}
}

$Soap = new Soap();
echo $Soap->changeColor();
 ?>
