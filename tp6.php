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



echo'<br><br><strong> Exercice 3 </strong><br>';

?>



<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" >
</head>
<body>
<form action="tp5.php" method="post">
    Nom :
    <input type='text' name='nom'/><br>
    Prenom :
    <input type='text' name='prenom'/><br>
    Mail :
    <input type='text' name='mail'/><br>
    Age :
    <input type='number' name='age'/><br>
    Monsieur:
    <input type='checkbox' name='genre' value='monsieur'/>
    Madame :
    <input type='checkbox' name='genre' value='madame'/><br>
    <input type='submit' name='Envoi'/><br>
</form>

</body>
</html>

<?php
class Formulaire2
{
    private $nom;
    private $prenom;
    private $age;
    private $genre;

    function __construct(){
        $this->nom = $_POST['nom'];
        $this->prenom = $_POST['prenom'];
        $this->age = $_POST['age'];
        $this->genre = $_POST['genre'];

    }
    function getName(){
        return $this->nom;
    }
    function getPrenom(){
        return $this->prenom;
    }
    function getAge(){
        return $this->age;
    }
    function getGenre(){
        return $this->genre;
    }
}

$f2=new Formulaire2();
//echo $f2->nom;
echo $f2->getName();
echo '<br>';
echo $f2->getPrenom();
echo '<br>';
echo $f2->getAge();
echo '<br>';
echo $f2->getGenre();
echo '<br>';
?>