<?php

class Subjects
{
  public $color = 'green';
  public $weight = 500;
  public $matherial = 'paper';
  public $form = 'rectangle';


  public function Color()  {
    echo 'green';
  }
}

class Book extends Subjects{

}

$Book = new Book();
echo $Book->Color();

class Vase extends Subjects
{
  public $diameter = 200;


  public function Diameter() {
    echo '200';
  }
}

$Vase = new Vase();
echo $Vase->Diameter();

class Ball extends Subjects {

 public function changeForm() {
  echo $this->form = 'circle';
 }

}

$Ball = new Ball();
echo $Ball->changeForm();


Class Soap extends Subjects {

  public function changeMatherial() {
    echo $this->matherial = 'soap';
  }
}

$Soap = new Soap();
echo $Soap->changeMatherial();


Class Cat extends Subjects {

  public function changeWeight() {
   echo $this->weight = '1000';
  }
}

$Cat = new Cat();
echo $Cat->changeWeight();
?>
