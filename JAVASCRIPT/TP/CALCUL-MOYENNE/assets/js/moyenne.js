// let toto = [15, 14, 16, 12, 18];

// // Version procédural
// let nbNotes = toto.length;
// let somme = 0; 

// for(item in toto)
// {
//     somme += toto[item];
//     console.log(somme);
// }

// var moyenne = somme/nbNotes;
// console.log(somme);
// console.log(nbNotes);
// console.log(`La moyenne de toto est de : ${moyenne}`);
    
// //Version avec fonction
// function moyenne(tab)
// {
//     let nbNotes = 0;
//     let somme = 0;
//     for(item in tab)
//     {
//         // console.log(typeof tab[item]);
//         //Vérifie le type de la variable
//         switch(typeof tab[item]) 
//         {
//             case 'boolean':
//                 break;
//             case 'undefined':
//                 break;
//             case 'string':
//             testNote = parseInt(tab[item]);
//                 // Vérifier chaque entrée et ne prendre que les chiffres entre 0 et 20
//                 if (testNote >= 0 && testNote <= 20){
//                     somme += testNote;
//                     nbNotes += 1;
//                 }
//                 break;
//             case 'number':
//                 testNote = tab[item];
//                 // Vérifier chaque entrée et ne prendre que les chiffres entre 0 et 20
//                 if (testNote >= 0 && testNote <= 20)
//                 {
//                     somme += testNote;
//                     nbNotes += 1;
//                 }
//                 break;
//         }
//     }
//     return somme / nbNotes;
// }
    
// console.log('La moyenne est de : ' + moyenne(toto));
// document.getElementById("moyenne").innerHTML = x;

// //Version avec entrées utlisateur
// let nbNotes2 = 0;
// let somme2 = 0; 
// let again = true;

// while (again){

//     let note = prompt('Entrez votre note ou annuler pour quitter');

//     if ( isNaN(parseInt(note)) && (note != null) ) 
//     {
//         console.log('Vous ne devez saisir que des chiffres');
//     } 
//     else if (note == null) 
//     {
//         again = false;
//     } 
//     else 
//     {
//         if (note >= 0 && note <= 20) 
//         {
//             console.log('note', typeof note);
//             somme2 += parseInt(note);
//             nbNotes2 += 1;
//         } 
//         else 
//         {
//             console.log('Vos notes doivent être comprise entre 0 et 20');
//         }
//     }
// }

// console.log('Votre moyenne est de : ' + (somme2/nbNotes2));

//------------------------------------------------------------------------------------------------------------

// ---------------------- LES FONCTIONS (insertionNotes et moyennNotes) --------------------------------------

/**
 * fonction qui demande à un utilisateur d'entrer des notes, en vérifie la validitée et après approbation l'insert dans un tableau passé en paramètre
 * @param {*} tab 
 */
function insertionNotes(tab)
{
    let again = true;

    while (again) {

        let note = prompt('Entrez votre note ou annuler pour quitter');

        if (isNaN(parseInt(note)) && (note != null)) {
            console.log('Vous ne devez saisir que des chiffres');
        }
        else if (note == null) {
            again = false;
        }
        else {
            if (note >= 0 && note <= 20) {
                console.log('note', typeof note);
                note = parseInt(note);
                tab.push(note);
            }
            else {
                console.log('Vos notes doivent être comprise entre 0 et 20');
            }
        }
    }
}

/**
 * fonction qui fait la moyenne de notes d'un tableau
 * @param {*} tab 
 */
function moyennNotes(tab)
{
    let nbNotes = 0;
    let somme = 0;
    for (item in tab) {
       
        somme += tab[item];
        nbNotes += 1;
    }
    return Math.round(somme/nbNotes);
}

// --------------------- L'EXECUTION DES FONCTIONS -------------------------------------------------------

//Déclaration d'un tableau vide
christophe = [];

// Insertion des notes
insertionNotes(christophe);

//Parcours du tableau et renvoie des valeurs
for (item in christophe)
{
    console.log('Note n°' + (parseInt(item) + 1) + ' : ' + christophe[item]);
}
//Affichage du nombre de notes contenu dans le tableau christophe
console.log('Nombre de notes : ' + christophe.length);

//Affichage de la moyenne
console.log('Votre moyenne est de : ' + moyennNotes(christophe) + '/20');

