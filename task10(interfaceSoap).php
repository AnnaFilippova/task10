<?php
interface iSoap {
  public function changeColor();
}


class Soap implements iSoap {

  public $color = 'white';

  public function changeColorToRed() {


  echo $this->color = 'red';
}
}

$soap = new Soap();
echo $soap->changeColorToRed();
 ?>
