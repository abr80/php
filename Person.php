<?php
class Person {
    private $name;
    private $lastname;
    private $age;
    private $hp;
    private $mother;
    private $father;

    function __construct($name, $lastname, $age, $mother=null, $father=null)
    {
        $this->name = $name;
        $this->lastname = $lastname;
        $this->age = $age;
        $this->mother = $mother;
        $this->father = $father;
        $this->hp = 100;
    }
    function sayHi($name)
    {
    return "Hi $name, I`m " . $this->name;
    }
    function setHp($hp)
    {
        if ($this->hp + $hp >= 100) $this->hp = 100;
        else $this->hp = $this->hp + $hp;
    }
    function getHp()
    {
        return $this->hp;
    }
    function getName()
    {
        return $this->name;
    }
    function getLastname()
    {
        return $this->lastname;
    }
    function getAge()
    {
        return $this->age;
    }
    function getMother()
    {
        return $this->mother;
    }
    function getFather()
    {
        return $this->father;
    }
    function getInfo(){
        return "
        <h3>A few words about myself:</h3><br>"."My name is: ".$this->getName()."<br> My lastname is: ".$this->getLastname().
        "<br> I am: ".$this->getAge().
        "<br> My father is: ".$this->getFather()->getName()."<br> My mother is: ". $this->getMother()->getName() . 
        "<br> My grandfathers are: ".$this->getMother()->getFather()->getName(). ",".$this->getFather()->getFather()->getName(). 
        "<br> My grandmothers are:" .$this->getMother()->getMother()->getName(). ",".$this->getFather()->getMother()->getName();
    }
}

$irina = new Person("Irina", "Petrova", 75);
$igor = new Person("Igor", "Petrov", 68);

$elena = new Person("Elena", "Ivanova", 68);
$ivan = new Person("Ivan", "Ivanov", 65);

$alex = new Person("Alex", "Ivanov", 42, $elena, $ivan);
$olga = new Person("Olga", "Ivanov", 35, $irina, $igor);
$valera = new Person("Valera", "Ivanov", 15, $olga, $alex);


echo $valera->getName() . "<br>";
echo $valera->getMother()->getName() . "<br>";
echo $valera->getFather()->getMother()->getName();

echo $valera->getInfo() . "<br>";


// $medKit = 50;
// // echo $alex->hp . "<br>";
// $alex->hp = $alex->hp(-30);
// echo $alex->getHp() . "<br>";
// $alex->setHp($medKit);
// echo $alex->getHp();

// echo $alex->sayHi($igor->name);

?>
