<?php
interface iBook {
  public function Color();
}


class Book implements iBook {

public $color;

  public function Color()  {


  echo $this->color = 'black';
}
}
$Book = new Book();
echo $Book->Color();
 ?>
