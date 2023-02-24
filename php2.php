<h1>EXO PHP 2</h1>

<?php

// exo 1 //

echo "Exo 1 <br>";
echo "<br>";
$text = "Il fait très froid!!";
$text2 = "Il fait très chaud!!";

function convertirMajRed($text)
{
    $maj = mb_strtoupper($text, 'UTF-8');
    $couleur = "<p style = 'color:blue;'>.$maj.</p>";

    return $couleur;
}

function convertirMajRed1($text2)
{
    $maj = mb_strtoupper($text2, 'UTF-8');
    $couleur = "<p style = 'color:red;'>.$maj.</p>";

    return $couleur;
}

echo convertirMajRed($text);
echo convertirMajRed1($text2);
echo "<br>";


// exo 2 //


$capitales = array (
    "France" => "Paris",
    "Allemagne" => "Berlin",
    "Italie" => "Rome",
    "USA" => "Washington"
);

ksort($capitales);

function table($capitales) 
{                              // intégration du nom colonne du tableau
    echo " <table border='2'> 
                    <thead>
                        <tr>
                            <th> Pays (exo 2) </th>
                            <th> Capitale </th>
                        </tr>
                    </thead>
                    <tbody>";
                               //  fin intégration
                        foreach($capitales as $pays => $capital) { //parcours du tableau 
                            echo "<tr>
                                <td>".
                                mb_strtoupper($pays, 'UTF-8'). // valeur de clés
                                "</td>
                                <td>".
                                    $capital. // valeur des indexs
                               "</td>
                            </tr>";
                     } 
                    "</tbody>
                </table>";
}

echo table($capitales);


// exo 3 //

echo "Exo 3 <br>";
echo "<br>";


echo '<a href="https://elan-formation.eu/accueil" target="_blank">Elan Formation</a>';
        // création lien hypertexte dans un nouvel onglet
echo "<br>";
echo "<br>";

// exo 4 //

$capitales = array (
    "France" => "Paris", 
    "Allemagne" => "Berlin", 
    "Italie" => "Rome", 
    "USA" => "Washington DC",
    "Espagne" => "Madrid" 
);

ksort($capitales);

function tableSite($capitales)
{
    echo " <table border='4'>
                    <thead>
                        <tr>
                            <th> Pays (exo 4) </th>
                            <th> Capitale </th>
                            <th> Lien </th>
                        </tr>
                    </thead>
                    <tbody>";
                       
                        foreach($capitales as $pays => $capital) { 
                            echo 
                                "<tr>
                                    <td>".
                                    mb_strtoupper($pays, 'UTF-8'). // écriture des clés en majuscule
                                    "</td>
                                    <td>".
                                    $capital.
                                    "</td>
                                    <td>".
                                    "<a href='https://fr.wikipedia.org/wiki/$capital' target='_blank'>$capital</a>",
                                    "</td>      
                                </tr>";
                     }                     // attribution des différents sites reliés aux indexs du tableau
                    "</tbody>
                </table>";
}

echo tableSite($capitales);
echo "<br>";
echo "<br>";


// exo 5 //


echo "Exo 5 ";
echo "<br>";
echo "<br>";


$nomsInput = array("Matricule", "Codesign", "Lieu de Provenance");


function afficherNoms($nomsInput){
    foreach($nomsInput as $nomInput){
        echo $nomInput,"<br>",'<input type="text" />', "<br>"; //<input type="text" /> = commande de champ de texte 
    } // création d'un champ de texte avec des valeurs définies
}
    
echo afficherNoms($nomsInput);

echo "<br>";
echo "<br>";

// exo 6 //

echo "Exo 6";
echo "<br>";
echo "<br>";


$elements = array("P90","AK47","M4","Sniper","Pompe");

function listeDeroulante($elements){        //création d'un champ déroulant
    echo "<select name='choix'>";
        foreach($elements as $element){
            echo "
            <option value='$element'>$element</option>"; // <option value="choix4">Choix 4</option> = commande liste déroulante
            //afficahge des valeurs du tableau comme valeur de la liste déroulante
        }

    echo "</select>";
} 

echo listeDeroulante($elements);

echo "<br>";
echo "<br>";

// exo 7 //

echo "Exo 7";
echo "<br>";
echo "<br>";

echo "Choix des répliques à utilisées pour la partie : <br>";
echo "<br>";

$repliques = array (
                "HK-416" => "",
                "Glock"=>"checked",
                "Ak-47"=>"", 
                "P90"=>"", 
                "Fusil à Pompe"=>"checked"
            );
function generechoix($repliques){

    foreach ($repliques as $choix => $replique){

        if($replique == "checked"){

            echo "<input type='checkbox' name=$choix checked/><label for='case'>$choix</label><br>"; // <input type="checkbox" name="case" checked="checked" /> = commande case coché par défaut
        } 
        else {
            echo "<input type='checkbox' name=$choix/><label for='case'>$choix</label><br>"; // 	<input type="checkbox" name="case" id="case" /> <label for="case">Ma case à cocher</label> = commande case à cocher

        }
    }          

}

echo generechoix($repliques);


echo "<br>";
echo "<br>";


// exo 8 //

echo "Exo 8";
echo "<br>";
echo "<br>";

function nombreimg (){
    
    $img = "https://static.mensup.fr//photos/206083/zoom-motorhell.jpg";


    $imagemax = 5;
    $image = 1;


        while ($image<$imagemax){
            echo "<img src=$img height='200' width='300' />";
        $image++;
        }
}

echo nombreimg ();

echo "<br>";
echo "<br>";

// exo 9 //

echo "Exo 9";
echo "<br>";
echo "<br>";

$noms = array("Monsieur","Madame","Autre","Enfant");

function nomsRadio($noms){        
    
        foreach($noms as $nom){
            echo 
            "<input type='radio' name=$nom/> <label for=$nom>$nom</label><br>"; // <input type="radio" name="frites" value="non" id="non" /> <label for="non">Non</label> = commande bouton radio  
        }
}

echo nomsRadio($noms);

echo "<br>";
echo "<br>";

// exo 10 //

echo "Exo 10";
echo "<br>";
echo "<br>";


//<input type="submit" value="Valider" /> = commande pour bouton de validation de saisie

$infos = array("Nom", "Prénom", "Adresse mail", "Ville", "Sexe");

function champtxt($infos){
    foreach($infos as $info){
        echo $info,"<br>",'<input type="text" />', "<br>"; //<input type="text" /> = commande de champ de texte 
        
    } // création d'un champ de texte avec des valeurs définies
}


$formations = array("Développeur Logiciel", "Designer web", "Intégrateur", "Chef de projet");

function choixform($formations){

    foreach ($formations as $formation){
        echo "<input type='checkbox' name=$$formation /><label for='case'>$formation</label><br>";
    }          

}

echo champtxt($infos), "<br>";
echo choixform($formations), "<br>";
echo "<input type='submit' value='Valider' />"; // commande du bouton de validation 

echo "<br>";
echo "<br>";

// exo 11 //

echo "Exo 11";
echo "<br>";
echo "<br>";


$date = date_create("2018-02-23");

setlocale(LC_TIME, "fr_FR", "French");
echo $date -> format ('l jS \o\f F Y');
    


echo "<br>";
echo "<br>";

exo 12 // 

echo "Exo 12";
echo "<br>";
echo "<br>";


$valeurs = array(true, "texte", 10,25.369, array("valeur1", "valeur2"));

foreach ($valeurs as $valeur){
    echo var_dump($valeur), "<br>";
}

echo "<br>";
echo "<br>";


exo 13 //

echo "Exo 13";
echo "<br>";
echo "<br>";

class Voiture {   // nommage des attributs de la classe 
    private string $marque;
    private string $modele;
    private int $nbPortes;
    private float $vitAc; // vitesse Actuelle
    private bool $estDemarrer;

    public function __construct($marque, $modele, $nbPortes, $vitAc= 0, $estDemarrer=false){ // création des attributs des objets

        $this->marque = $marque;
        $this->modele = $modele;
        $this->nbPortes = $nbPortes; 
        $this->vitAc = $vitAc; 
        $this->estDemarrer = $estDemarrer;  
    }   

    public function getMarque(){
        return $this->marque;
    }    
    
    public function getModele (){
        return $this->modele;
    }

    public function getNbPortes (){
        return $this->nbPortes;
    }

    public function getVitAc(){
        return $this->vitAc;
    }

    public function setMarque($marque){ // fonction servant à modifier la marque
        $this->marque = $marque;
    }

    public function setModele($modele){ // fonction servant à modifier le modèle
        $this->modele = $modele;
    }

    public function setNbPortes($nbPortes){ // fonction servant à modifier le nb de Portes
        $this->nbPortes = $nbPortes;
    }

    public function setVitAc($vitAc){ // fonction servant à modifier la vitesse de la voiture
        $this->vitAc = $vitAc;
    }
    
    public function estDemarrer(){ // fonction servant à savoir si le véhicule est démarré 
        if ($this->estDemarrer == true){ // si oui le véhicule est démarré
            echo "Le véhicule ". $this->getMarque(). " ". $this->getModele(). " est démarré <br>"; 
        } else { // sinon il est à l'arrêt
            echo "Le véhicule ".$this->getMarque(). " ". $this->getModele(). " est à l'arrêt <br>"; 
        }
    }

    public function demarrer(){ // fonction servant à savoir si le véhicule est déjà démarrer ou non
        if($this->estDemarrer){ // si la voiture est bien démarré alors 
            echo "Le véhicule ". $this->getMarque(). " ". $this->getModele(). " est démarré.<br>"; 
        } else { 
            $this->estDemarrer = true; // sinon on dit de démarrer le véhicule
            echo "Le véhicule ". $this->getMarque(). " ". $this->getModele(). " démarre. <br>";
        }
    }
        //!$this->estDemarrer = différent de $this->estDemarrer
    public function stopper(){
        if (!$this->estDemarrer){ // si le véhicule est à l'arrêt 
            echo "Le véhicule ". $this->getMarque(). " ". $this->getModele(). " est déjà arreté. <br>";
        } else {
            $this->estDemarrer = false; // sinon on arréte le véhicule
            $this->vitAc = 0;
            echo "Le véhicule ". $this->getMarque(). " ". $this->getModele(). " est stoppé. <br>";
        }
    }

    public function accelerer($vitesse){ // 
        if(!$this->estDemarrer){ // pour pouvoir accélerer il faut que la voiture soit démarrer
            echo "Le véhicule " .$this->getMarque(). " ". $this->getModele(). " veut accélérer de ". $vitesse. "km/h <br>";
            echo " Le véhicule doit d'abord démarrer. <br>";
        } else {
            $this->vitAc += $vitesse; // alors la voiture pourra acceleré 
            echo "Le véhicule " .$this->getMarque(). " ". $this->getModele(). " accélère de ". $vitesse. "km/h <br>"; 
        }
    }

    public function ralentir($vitesse){
        if(!$this->estDemarrer){ // pour pouvoir ralentir on doit vérifier que le véhicule est démarré 
            echo "Le véhicule " .$this->getMarque(). " ". $this->getModele(). " veut ralentir de ". $vitesse. "km/h <br>";
            echo " Le véhicule doit d'abord démarrer. <br>";
        } else {
            $this->vitAc -= $vitesse; // le véhicule peut ralentir  
            echo "Le véhicule " .$this->getMarque(). " ". $this->getModele(). " ralenti de ". $vitesse. "km/h <br>"; 
        }
    }

    public function __toString(){
        return $this->marque;
        return $this->modele;
    }

}

$v1 = new Voiture("Peugeot", "407", 5);
$v2 = new Voiture("Citroën", "C4", 3);



echo $v1->demarrer(), "<br>";
echo $v1->accelerer(50), "<br>";
echo $v2->demarrer(), "<br>";
echo $v2->stopper(), "<br>";
$v2->accelerer(20);
echo "La vitesse actuelle du véhicule " .$v1->getMarque(). " est de ". $v1->getVitAc(). " km/h <br>";
echo "La vitesse actuelle du véhicule " .$v2->getMarque(). " est de ". $v2->getVitAc(). " km/h <br>";
echo "<br>";

$v1->stopper(). "<br>";
echo "<br>";

echo "Infos véhicule 1 <br>";
echo "******************<br>";
echo "Nom et modèle du véhicule : ". $v1->getMarque(). " " .$v1->getModele(). "<br>";
echo "Nombre de portes : " .$v1->getNbPortes(). "<br>";
echo $v1->demarrer(). "<br>";
$v1->accelerer(50);
echo "Sa vitesse actuelle est de ". $v1->getVitAc(). " km/h <br>";
echo "<br>";

echo "Infos véhicule 2 <br>";
echo "******************<br>";
echo "Nom et modèle du véhicule : " .$v2->getMarque(). " " .$v2->getModele(). "<br>";
echo "Nombre de portes : " .$v2->getNbPortes(). "<br>";
echo $v2->estDemarrer(). "<br>";
echo "Sa vitesse actuelle est de ". $v2->getVitAc(). " km/h <br>";
echo "<br>";



// exo 14 /

echo "Exo 14";
echo "<br>";
echo "<br>";


class Voiture{ // classe mère 
    private $marque;
    private $modele;

    public function __construct($marque, $modele){
        $this->marque = $marque;
        $this->modele = $modele;
    }

    public function getMarque(){
        return $this->marque;
    }

    public function getModele(){
        return $this->modele;
    }

    public function setMarque(){
        return $this->marque;
    }

    public function setModele(){
        return $this->modele;
    }

    public function getInfos(){ // fonction affichant les infos de la classe mère
        echo "La marque du véhicule est : ". $this->getMarque(). "<br>";
        echo "Le modèle du véhicule est : ". $this->getModele(). "<br>";
    }
}

class VoitureElec extends Voiture{ // classe enfant
        private $autonomie;
        
        public function __construct($marque, $modele, $autonomie){
            parent::__construct($marque, $modele); // on lui donne les attributs de la classe mère
            $this->autonomie = $autonomie; // attribut spécifique à l'enfant
        }

    public function getAutonomie(){
        return $this->autonomie;
    }

    public function setAutonomie(){
        return $this->autonomie;
    }

    public function getInfos(){ // fonction affichant les infos de la classe mère + enfant
        echo "La marque du véhicule est : ". $this->getMarque(). "<br>";
        echo "Le modèle du véhicule est : ". $this->getModele(). "<br>";
        if($this->getAutonomie() == true){ // condition pour déclaré l'autonomie instancié
            echo "L'autonomie du véhicule électrique est de : ". $this->getAutonomie(). "km. <br>"; // si l'autonomie est déclaré alors
        } else {
            echo "Le véhicule n'est pas électrique <br>"; // dans le cas contraire alors rien ne sera déclaré
        }
        
    }

}

$v1 = new Voiture ("Ford", "Mustang");
$ve1 = new VoitureElec ("BMW", "I3", 450);

echo $v1->getInfos(). "<br>";
echo $ve1->getInfos()."<br>";

echo "<br>";
echo "<br>";


// exo 15 //

echo "Exo 15";
echo "<br>";
echo "<br>";

$email_a = 'elan@elan-formation.fr';
$email_b = 'contact@elan';
$url_a = 'https://www.php.net/';


if (filter_var($email_a, FILTER_VALIDATE_EMAIL)){
    echo "L'adresse email '$email_a' est considérée comme valide.<br>";
} else {
    echo "L'adresse email '$email_a' est considérée comme invalide.<br>";
}

if (filter_var($email_b, FILTER_VALIDATE_EMAIL)){
    echo "L'adresse email '$email_b' est considérée comme valide.<br>";
} else {
    echo "L'adresse email '$email_b' est considérée comme invalide.<br>";
}

echo "<br>";

if (filter_var($url_a, FILTER_VALIDATE_URL)){
    echo "L'adresse URL '$url_a' est considérée comme valide.<br>";
} else {
    echo "L'adresse URL '$url_a' est considérée comme invalide.<br>";
}

if (filter_var($email_a, FILTER_VALIDATE_URL)){
    echo "L'adresse URL '$email_a' est considérée comme valide.<br>";
} else {
    echo "L'adresse URL '$email_a' est considérée comme invalide.<br>";
}


?>
