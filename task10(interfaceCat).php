<?php
interface iCat {
  public function makeSound();
}


class Cat implements iCat {

  public $sound = 'Мяу';

  public function makeSound() {

echo 'Кошка говорит ' . $this->sound;

}
}

$Cat = new Cat();
echo $Cat->makeSound();
 ?>
