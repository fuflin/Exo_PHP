<h1>Exo PHP</h1>
<?php

// exo 1 //  // utilisé une fonction pour compté le nombre de caractère d'une phrase

echo "I). Exo 1";
echo "<br>";
echo "<br>";

$txt1 = "Notre formation DL commence aujourd'hui";

echo 'compter le nombre de caractères dans la phrase';
echo'<br>';
echo "<br>";

echo strlen($txt1);
echo "<br>";
echo "<br>";


// exo 2 //  // utlilisé une fonction pour compté le nombre de mot dans une chaine de caractère

echo "II). Exo 2";
echo"<br>";
echo "<br>";

echo'compter le nombre de mots dans la phrase';
echo'<br>';
echo "<br>";

echo str_word_count($txt1);
echo "<br>";
echo "<br>";


// exo 3 //  // remplacer un mot dans une chaine de caractère

echo "III). Exo 3";
echo"<br>";
echo "<br>";

echo "remplacer aujourd'hui par demain dans la phrase";
echo "<br>";
echo "<br>";

echo $txt1;
echo "<br>";

echo str_replace("aujourd'hui", "demain", $txt1);
echo "<br>";
echo "<br>";


// exo 4 //  // utilisé des fonctions permettant de dire que la phrase suivante est un palindrome

echo "IV). Exo 4";
echo"<br>";
echo "<br>";

$txt2 = "Engage le jeu que je le gagne";

$new_txt2 = strtolower(str_replace(' ', '', $txt2)); // toutes les lettres en min et suppr des espaces

$txt3 = strrev("$new_txt2"); // resultat en inversion

if($new_txt2 === $txt3) {
    echo $txt2. " est un palindrome";}
    else {
        echo $txt2. " n'est pas un palindrome";
    }    
    
echo "<br>";
echo "<br>";


// exo 5 //  // créer un convertisseur de monnaie

echo "V). Exo 5";
echo"<br>";
echo "<br>";

echo "créer un convertisseur";
echo "<br>";
echo "<br>";

$montant = 100;
$euro = 6.55978;
$total = $montant/$euro;

$final = number_format((float)$total, 2, ',', '');// résultat calcul et limite à 2 chiffres après la virgule

echo "Montant en francs = 100";
echo "<br>";
echo $montant.' Frs', ' = ', $final.' €';
echo "<br>";
echo "<br>";


// exo 6 //  // calculer certaines valeurs

echo "VI). Exo 6";
echo"<br>";
echo "<br>";

$prix = 9.99;
$quantite = 5;
$tva = 0.2;

$prixht = $prix * $quantite;// prix de la quantité HT
$valeurtva = $prixht * $tva;//prix de la tva
$prixtotal = $prixht + $valeurtva;//prix TTC

echo"prix du produit = ", $prix." €";
echo"<br>";
echo"quantité d'article = ", $quantite;
echo"<br>";
echo"taux de la TVA = ", $tva*100 ." %";
echo"<br>";
echo"Montant de la facture = ", $prixtotal." €";
echo"<br>";
echo"<br>";


// exo 7 //  // classé jeune dans une catégorie

echo "VII). Exo 7";
echo"<br>";
echo "<br>";

// poussin entre 6 et 7 ans
// pupille entre 8 et 9 ans
// minime entre 10 et 11 ans
// cadet à partir de 12ans

$age = 10.00;//valeur de l'âge
$result = "";//résultat en mémoire

  if ($age > 12){
    $result = "cadet";
  }elseif ($age > 10){
    $result = "minime";
  }elseif($age > 8){
    $result = "pupille";
  }elseif($age > 6){
    $result = "poussin";
  }else{
    $result = "pas de catégories";
  }

echo "l'enfant est agé de ".$age." ans.";
echo "<br>";
echo "L'enfant qui a ".$age." ans appartient à la catégorie ".$result." .";
echo "<br>";
echo "<br>";


// exo 8 //  // faire une table de multiplication

echo "VIII). Exo 8";
echo "<br>";
echo "<br>";

$x = 7;
$y = 7;
$z = 1;

echo "Table de ", $y;
echo "<br>";
echo "<br>";

while($x <= 10*$y) {//valeur pour mettre fin à la boucle
  echo "$y x $z = $x <br>";
  $x+=$y; $z++;//incrémentation de la valeur de la table; + 1 pour le nombre à multiplier
}
// première variante

echo "<br>";
echo "<br>";

$d = 8;
$e = 8;
$f = 1;

echo "Table de ", $e;
echo "<br>";
echo "<br>";


do {
  echo "$e x $f = $d <br>";
  $d+=$e; $f++;
} while ($d <= 10*$e);
// Deuxième variante

echo "<br>";
echo "<br>";

$a = 9;
$b = 9;
$c = 1;

echo "Table de ", $b;
echo "<br>";
echo "<br>";


for ($a = $b; $a <= 10*$b; $c++, $a+=$b) {
  echo "$c x $b = $a <br>";
}
//troisème variante

echo "<br>";
echo "<br>";


// exo 9 //

echo "IX). Exo 9";
echo "<br>";
echo "<br>";


$age = 32;
$sexe = "F";
$condition1 = ($sexe == "F" && ($age >= 18 && $age <= 35) );
$condition2 = ($sexe == "H" && $age > 20);

echo "Âge : ", $age;
echo "<br>";
echo "Sexe : ", $sexe;
echo "<br>";
echo "<br>";

if($condition1 || $condition2){
  echo "La personne est imposable";
}else{
  echo "La personne est non imposable";
}

echo "<br>";
echo "<br>";


// Exo 10 //

echo "X). Exo 10";
echo "<br>";
echo "<br>";

$montantP = 152; // montant à payer
$montantV = 200; // monatant versé 
$monnaie = $montantV - $montantP; // monnaie

echo "Montant versé : ", $montantV." €";
echo "<br>";

echo "Montant à payer : ", $montantP." €";
echo "<br>";

echo "Monnaie : ", $monnaie." €";
echo "<br>";

$nbBillet10 = 0; //
$nbBillet5 = 0;
$nbpiece2 = 0;
$nbpiece1 = 0;

while ($monnaie >= 10){//soustration des billets de 10
  $nbBillet10 +=1;
  $monnaie = $monnaie-10;
}

while($monnaie >= 5){//soustraction des billets de 5
  $nbBillet5 = $nbBillet5 +1;
  $monnaie = $monnaie -5;
}

while($monnaie >=2){//soustration des pièces de 2
  $nbpiece2 = $nbpiece2 +1;
  $monnaie = $monnaie -2;
}

while($monnaie >=1){//soustraction des pièces de 1
  $nbpiece1 = $nbpiece1 +1;
  $monnaie = $monnaie -1;
}


echo "********************";
echo "<br>";
echo "Reste à payer : <br>";
echo $nbBillet10, " billets de 10 € <br>";
echo $nbBillet5, " billets de 5 € <br>";
echo $nbpiece2, " pièces de 2 € <br>";
echo $nbpiece1, " pièces de 1 €<br>";
echo "<br>";
echo "<br>";


// exo 11 //  // création talbeau marque

echo "XI). Exo 11";
echo "<br>";
echo "<br>";

$voitures = array ("Peugeot", "Renault", "BMW", "Mercedes");

echo "Il y a ", count($voitures), " marques de voitures : <br>";
echo "<br>";

foreach ($voitures as $voiture) {
  echo "$voiture <br>";}
  echo "<br>";
  echo "<br>";


// exo 12 //  // classé les salutations par personnes et langue

echo "XII). Exo 12";
echo "<br>";
echo "<br>";

$salutation = array ("Français" => "Salut ", "English" => "Hello ", "Espagnol" => "Hola ");

$personnes = array ("Mickaël" => "Français", "Marie-Claire" => "English", "Virgile" => "Espagnol");

foreach($personnes as $prenom => $langue) {
  echo $salutation[$langue]." ".$prenom."<br>";
}
echo "<br>";
echo "<br>";

ksort($personnes); // Variante Ordre Alphabétique

foreach($personnes as $prenom => $langue) {
  echo $salutation[$langue]." ".$prenom."<br>";
}


echo "<br>";
echo "<br>";


$dateNaissance = "15-06-1995";
  $aujourdhui = date("Y-m-d");
  $diff = date_diff(date_create($dateNaissance), date_create($aujourdhui));
  echo 'Votre age est '.$diff->format('%y'), "<br>";

  echo "<br>";
  echo "<br>";

  
// exo 15 //  // création classe personne

echo "Exo 15";
echo "<br>";
echo "<br>";


class Personne{
    private string $_nom;
    private string $_prenom;
    private DateTime $_date; // date de naissance
    
    public function __construct(string $nom, string $prenom, string $date){
        $this->_nom = $nom;
        $this->_prenom = $prenom; 
        $this->_date = new DateTime($date) ; 
    }

    public function getNom(){
      return $this->_nom;
    }

    public function getPrenom(){
      return $this->_prenom;
    }

    public function getDate(){
      return $this->_date;
    }


    public function setNom($nom){
      $this->_nom = $nom;
    }

    public function setPrenom($prenom){
      $this->_prenom = $prenom;
    }

    public function setDate($date){
      $this->_date = $date;
    }

    public function calculAge(){
      $dateNaissance = $this->getDate();
      $dateNow = new DateTime ("now");
      $diff = $dateNaissance->diff($dateNow);
      $age = $diff->format("%y"); 
      return $age;
    }
}


$p1 = new Personne("DUPONT", "Michel", "1980-02-19") ;
$p2 = new Personne("DUCHEMIN", "Alice", "1985-01-17") ;

// var_dump($p1);

echo $p1->getPrenom()," ". $p1->getNom()," a ".  $p1->calculAge(), " ans. <br>";
echo $p2->getPrenom()," ". $p2->getNom()," a ".  $p2->calculAge(), " ans. <br>";




?>