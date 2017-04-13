<?php
interface iBook {
  public function echoColor();
}


class Book implements iBook {

public $color;

  public function echoColor()  {


  echo $this->color = 'black';
}
}
$book = new Book();
echo $book->echoColor();
 ?>
