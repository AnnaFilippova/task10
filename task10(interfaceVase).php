<?php
interface iVase {
  public function changeWeight();
}


class Vase implements iVase {

  public $weight = '200';

  public function changeWeight() {


  echo $this->weight = '500';
}
}


$Vase = new Vase();
echo $Vase->changeWeight();
 ?>
