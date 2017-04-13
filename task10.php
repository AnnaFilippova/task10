<?php

class Subjects
{
  public $color = 'green';
  public $weight = 500;
  public $matherial = 'paper';
  public $form = 'rectangle';


  public function printColor()  {
    echo $this->color;
  }
}

class Book extends Subjects{

}

$book = new Book();
echo $book->printColor();

class Vase extends Subjects
{
  public $diameter = 200;


  public function printDiameter() {
    echo $this->diameter;
  }
}

$vase = new Vase();
echo $vase->printDiameter();

class Ball extends Subjects {

 public function changeForm() {
  echo $this->form = 'circle';
 }

}

$ball = new Ball();
echo $ball->changeForm();


Class Soap extends Subjects {

  public function changeMatherial() {
    echo $this->matherial = 'soap';
  }
}

$soap = new Soap();
echo $soap->changeMatherial();


Class Cat extends Subjects {

  public function changeWeight() {
   echo $this->weight = '1000';
  }
}

$cat = new Cat();
echo $cat->changeWeight();
?>
