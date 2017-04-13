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

$cat = new Cat();
echo $cat->makeSound();
 ?>
