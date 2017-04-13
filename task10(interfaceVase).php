<?php
interface iVase {
  public function changeWeight();
}


class Vase implements iVase {

  public $weight = '200';

  public function changeWeightTofifty() {


  echo $this->weight = '50';
}
}


$vase = new Vase();
echo $vase->changeWeightTofifty();
 ?>
