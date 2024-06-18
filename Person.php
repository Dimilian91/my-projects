<?php
class Person {

private $name;
private $lastname;
private $age;
private $hp;
private $mother;
private $father;

function __construct($name, $lastname, $age, $mother=null, $father=null) {
  $this->name = $name;
  $this->lastname = $lastname;
  $this->age = $age;
  $this->mother = $mother;
  $this->father = $father;
  $this->hp = 100;
}

function setHp($hp) {
  if ($this->hp + $hp > 100) $this->hp = 100;
  else $this->hp = $this->hp + $hp;
}

function getHp() {
  return $this->hp;
}

function getName() {
  return $this->name;
}

function getMother() {
  return $this->mother;
}

function getFather() {
  return $this->father;
}

function getAge() {
  return $this->age;
}

function getLastname () {
  return $this->lastname;
}

function sayHi($name) {
  return "Hi, $name! I am " . $this->name;
}

function getInfo() {
  return "<h3>О моей семье: </h3><br>" . "Меня зовут " . $this->getName() . "<br> " . 
  "Моя фамилия " . $this->getLastname() . "<br>" . 
  "Мне " . $this->getAge() . "<br> " . 
  "Моего папу зовут " . $this->getFather()->getName() . "<br>" . 
  "Мою маму зовут " . $this->getMother()->getName() . "<br>" . 
  "Мою первую бабушку зовут " . $this->getFather()->getMother()->getName() . "<br>" . 
  "Вторую бабушку зовут " . $this->getMother()->getMother()->getName() . "<br>" . 
  "Первого дедушку зовут " . $this->getFather()->getFather()->getName() . "<br>" . 
  "Второго дедушку зовут " . $this->getMother()->getFather()->getName();
}
}
$igor = new Person("Igor", "Petrov", 60);
$lera = new Person("Lera", "Petrova", 62);

$zina = new Person("Zina", "Ivanova", 68);
$dima = new Person("Dima", "Ivanov", 74);

$alex = new Person("Alex", "Ivanov", 42, $zina, $dima);
$olga = new Person("Olga", "Ivanova", 42, $lera, $igor);
$valera = new Person("Valera", "Ivanov", 12, $olga, $alex);


echo $valera->getInfo();

// echo $alex->getMother()->getFather()->getName();

// $madeKit = 50;
// $alex->setHp(-30);
// echo $alex->getHp() . "<br>";
// $alex->setHp($madeKit);
// echo $alex->getHp();

// $alex->name = "Alex";
// echo $alex->sayHi($igor->name);
