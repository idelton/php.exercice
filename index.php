<?php
//exercice1

$notes = [10, 15, 20];
$eleves = [
    "Cm1" => ["jean", "huber", "emlie"],
    "Cm2" => ["trouvert", "bankok", "troussot"]
];

foreach ($eleves as $classe => $elevesClasse) { // classe est une variable qui prend la valeur de  la cle associer a chaque element  
    echo "La Classe $classe : \n"; // classe permet de distinguer differente clase du tableaux 
    foreach ($elevesClasse as $eleve) {
        echo "- $eleve \n"; 
    }
    echo "\n"; 
}

/* explicationOn crée un tableau appelé $eleves où chaque classe (par exemple, "Cm1") est associée à un autre tableau contenant les noms des élèves de cette classe.

foreach ($eleves as $classe => $elevesClasse) {
On utilise une boucle foreach pour parcourir chaque élément du tableau $eleves.
$classe est une variable qui prend la valeur de la clé associée à chaque élément (par exemple, "Cm1", "Cm2").
$elevesClasse est une variable qui prend la valeur du tableau d'élèves associé à chaque classe.
Affichage des noms des élèves :


    foreach ($elevesClasse as $eleve) {
        echo "- $eleve \n";
    }
On utilise une autre boucle foreach pour parcourir les noms des élèves dans chaque classe.
$eleve est une variable qui prend la valeur du nom de chaque élève.
Affichage de la classe et des noms des élèves :


    echo "La Classe $classe : \n";
    // ...
On affiche le nom de la classe en utilisant la variable $classe.
Puis, à l'intérieur de cette classe, on affiche les noms des élèves.
En résumé, le terme "classe" est utilisé ici pour représenter différentes classes scolaires, et la boucle foreach est utilisée pour itérer à travers ces classes, affichant ensuite les noms des élèves de chaque classe.
*/
?>






<?php
/*
demander a lutilisateur de rentrer une notes ou taper "fin"
chaque note est sauvegarder dans un tableaux $notes
a la fin on affiche le tableaux avec une list
*/

/*
TANT QUE l'utilisateur ne tape pas  fin"
on ajoute la note tape au tableau notes
POUR CHAQUE note dans notes 
ON AFFICHE " note
 */


$notes = []; // tableau vide 
$action = null; // 

// TANT QUE l'utilisateur ne tape pas "fin"
while ($action !== "fin") {
    $action = readline('Entrez une nouvelle note (ou \'fin\' pour terminer la saisie) :');
   
    // On ajoute la note tapée au tableau notes
    if ($action !== "fin") {
        $notes[] = (int)$action;  //car action est une chaine de caractère 
    }
}

// POUR CHAQUE note dans notes 
foreach ($notes as $note) {
    // ON affiche " note"
    echo "- $note \n";
}
?>

<?php
//exercice 2 

 //on veut demander a lutilisateur de rentrer les horaire duverture 
 //on demande a lutilisateur de rentrer une heure et on lui dira si cest ouvert ou pas 

 //on demande l'heure du début
 // ondemande lheure de fin
 //verication  que lheure de debut est superieur a lheure de fin
 //on demande si on veut rajouter un nouveaux crenaux oui ou non 
 //on demande a lutilisateur de rentrer une heure 
 // on affiche letat douverture du  magasin

 $creneaux = [];

 while (true) {
     $debut = (int)readline('Heure début du créneau : ');
     $fin = (int)readline('Heure de fermeture : ');
     if ($debut >= $fin) {
         echo "L'heure d'ouverture à $debut est supérieure à l'heure de fermeture à $fin.\n";
     } else {
        $creneaux[] = [$debut, $fin];
         $action = readline('Voulez-vous enregistrer un nouveau créneau ? (o/n) ');
         if ($action === 'n') {
             break;
         }
 
         // Enregistrement du créneau dans le tableau
         
     }
 }

 $heure = (int)readline('quelle heure voulez vous visiter');
 $creneauTrouver = false ;
 foreach($crenaux as crenau) {
    if ($heure >= $crenau[0] && $heure <= $creneau[1]){
       $creneauTrouver = true  ;
       break;
    }
 }
   if($creneauTrouver ){
    echo "le magsin sera ouver ";
   }else{
    echo "le mGsin SERA fermer";
   }


 

?>


