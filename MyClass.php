<?php

// Deuxième script php

// La classe Foo() avec 2 propriétés:
class Foo
{
    public $maVar;
    public $autreVar = 42;
};
/* public ou private :
public veut dire que il est possible d'accéder à cette variable en dehors de l'objet.
private veut dire qu'il n'est pas possible d'accéder à cette variable en dehors l'objet. */

$obj = new Foo();
echo $obj->autreVar; // affiche 42

/* Nous avons déclaré l'objet $obj, instance de la classe Foo(),
puis nous affichons la valeur de la propriété $autreVar. */

/* La syntaxe est $objet->propriété,
A noter qu'on écrit bien $obj->autreVar et non pas $obj->$autreVar
(pas de $ pour désigner la propriété depuis un objet). */

// Exemple :

// 2 objets, instance de la classe Foo():
$obj1 = new Foo();
$obj2 = new Foo();

// Dans notre classe Foo(), aucune valeur n'a été affécté à la propriété $maVar
echo $obj1->maVar; // PHP Notice:  Undefined property: Foo::$mavariable | maVAr = null

// On modifie les propriétés de nos deux objets:
$obj1->maVar = 12;
echo $obj1->maVar; // 12
$obj2->maVar = 33;
echo $obj2->maVar; // 33
echo $obj1->maVar; // 12 (ça n'a pas changé)

/* Il faut bien comprendre que nos actions sur un objet ne concernent que cet objet et pas un autre.
En aucun cas la modification de la valeur de obj1->maVar aura d'incidence sur obj2->maVar. */

class Personne
{
    public $nom;
    public $age;

    function __construct($nom, $age)
    {
        $this->nom = $nom;
        $this->age = $age;
    }
}

// Il est possible de créer un objet avec des valeurs d'initialisation grâce à la méthode dite magique __construct()
$usr = new Personne('John', 33);
echo $usr->nom // affiche 'John'
echo $usr->age // affiche 33

/* La particularité de la méthode __construct
est qu'elle est utilisée automatiquement quand on initialise un objet.
Les paramètres de la méthode __construct doivent être renseignés
dans la classe pendant l'initialisation.
Ce qu'ils appellent initialisation : $usr = new Personne('John', 33); */

/*
public: les propriétés ou méthodes peuvent être utilisées par n'importe quelle partie du programme.
private: l'accès aux propriétés et méthodes est limité à la classe elle-même.
protected: l'accès aux propriétés et méthodes est limité à la classe elle-même ainsi qu'aux classes qui en héritent.
*/

/*
Un setter est une methode qui porte le nom de la propriété, préfixé du mot set.
Il permet d'assigner une valeur à une propriété.
Un getter est et préfixé du mot get.
Il permet de récupérer la valeur d'une propriété.
*/

// Exemple :
class Personne
{
    protected $age;
    protected $nom;
    protected $prenom;
    
    public function setAge($age)
    {
    	$this->age = $age;
    }
    
    public function getAge()
    {
    	return $this->age;
    }
    
    public function setNom($nom)
    {
    	$this->nom = $nom;
    }
    
    public function getNom()
    {
    	return $this->nom;
    }
    
    public function setPrenom($prenom)
    {
    	$this->prenom = $prenom;
    }
    
    public function getPrenom()
    {
    	return $this->prenom;
    }
}