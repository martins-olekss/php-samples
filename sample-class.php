<?php
//Definē klasi
class MyClass{
    
    //Definē mainīgo
    private $variable;

    //Konstruktora metode:
    //Ja tiek veitods jauna objekta instance, šī metode vienmēr izpildīsies
    public function __construct(){
        
        $this->variable = "Random skaitlis: ".rand(1, 25000);
        
    }

    //Funkcija klasē - 
    //parasti sauc par metodēm
    public function showRand(){
        
        //funkcija atgriež konstruktorā piešķirto vērtību
        return $this->variable;
        
    }

}

//Izveido jaunu MyClass instanci
//un saglabā to $class mainīgajā
$class = new MyClass();

//Ar echo uz ekrāna izvada showRand metodes
//atgriesto vērtību
echo $class->showRand();