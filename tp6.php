<?php
echo'<br><br><strong> Exercice 1 </strong><br>';
 class equipe {
     //Attributs
     private $name ="Choupisson";
     private $nbTitres=100;
     const MESSAGE = "Nombre équipe : "; // ne pas mettre $ car c'est une constante
     static $nbEquipe=0;

    //Methodes

     function getName(){
         return $this->name;
     }
     function getNbTitres(){
         return $this->nbTitres;
     }
    /* function display(){
         echo "L'équipe ".$this->name." a remporté ".$this->nbTitres." titres";
     }*/

     function display(){
         echo "L'équipe ".$this->getName()." a remporté ".$this->getNbTitres()." titres";
     }
     function __construct($name,$nbTitres,$nbEquipe){
         $this->name=$name;
         $this->nbTitres=$nbTitres;
         self::$nbEquipe++; //Obligé de mettre self:: car on est en static
     }
     function __destructor(){
         echo "Destructor";
     }
      static function displayNbEquipe(){
        return self::$nbEquipe; //Obligé de mettre self:: car on est en static
     }
 }
 //$e = new equipe();
$e = new equipe("Pikachu",77);
$e1 = new equipe("Hawaii",21);
$e1 = new equipe("Banane",42);
$e1 = new equipe("Poire",99);
// $e ->name = "Minimoys";
// $e ->nbTitres = 69;
//$e -> getName();
//$e -> getNbTitres();

echo equipe::MESSAGE;
echo equipe:: displayNbEquipe(); //Obligé de mettre :: car on est en static


/* $e -> display();
 echo '<br>';
 $e->__destructor();*/

echo'<br><br><strong> Exercice 2 </strong><br>';

class Formulaire {
    function __construct(){
       echo '<form action="tp6.php" method="post">';
    }
    function ajouterzonetexte(){
        echo'<input type="text"/>';
    }
    function ajouterbouton(){
        echo'<input type="submit" value="Envoi"/>';
    }
    function getform(){
       echo'</form>';
    }

}
$f=new Formulaire();
$f->__construct();
echo 'Votre nom :';
$f->ajouterzonetexte();
echo'<br>';
echo 'Votre code :';
$f->ajouterzonetexte();
echo'<br>';
$f->ajouterbouton();
$f->getform();
?>