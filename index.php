<?php

/* Une classe, c'est un modèle de données
qui définit une structure commune à tous les objets
créés à partir de celle-ci.
C'est un peu l'équivalent d'une déclaration de fonction
sauf qu'on n'exécute pas une classe,
on crée un objet qui est une instance de classe. */

// une classe:
class Hello
{
    // code de la classe
}

/* Pour créer une classe, on utilise le mot-clé class.
Ce n'est pas nécessaire mais il est conseillé d'utiliser une majuscule pour nommer une classe. */

/* Un objet (une instance) est une représentation d'une classe.
On peut faire l'analogie suivante:
Avec un moule (une classe)
on peut créer autant de gâteaux (objets) que l'on veut. */

// un objet:
$objet = new Hello();
// la variable $objet est un objet, instance de la classe Hello


// autre objet:
$autreObjet = new Hello();

/* Un objet est une variable.
Pour créer un objet (une instance de classe)
il faut utiliser le mot-clé new.
Il ne faut pas oublier les parenthèses
quand on instancie un objet
même si aucun paramètre n'est défini. */

/* PHP éxécute toujours un seul fichier,
dans notre cas ce sera index.php.
include permet d'ajouter du code à notre fichier principal:
avec include 'nom_du_fichier.php'; */

/* Il y a aussi l'instruction include_once
utilisée lorsque le fichier va être inclus ou évalué plusieurs fois dans un script. */

include 'MyClass.php';

/* Une méthode n'est rien d'autre qu'une fonction.
Sa seule particularité, c'est d'être déclarée à l'intérieur d'une classe. */

// La seule différence entre l'appel d'une propriété et d'une méthode, c'est les parenthèses ():

class Hellow
{
    public $bonjour = 'Salut';

    function bonjour()
    {
        // affiche un message
    }
}

$bjr = new Hellow();

// Appel de la propriété $bonjour
$bjr->bonjour; 
// Appel de la méthode bonjour()
$bjr->bonjour(); 

// La variable spéciale $this permet d'interagir entre les propriétés et les méthodes d'une classe:
class User
{
    public $myName = 'Mon nom';

    function username($name)
    {
        $this->myName = $name;
    }

    $this->username('Antonio');
}
// $this (en anglais dans le contexte: cet, celui-ci) représente l'objet dans lequel la class a été instancier.
// $this permet aussi d'interagir avec des méthodes