function user_verify() {

  //INITIALISATION DES VARIABLES EGALES A L'ID DU CHAMP CORRESPONDANT

  var nom = document.getElementById('nom');
  var prenom = document.getElementById('prenom');
  var email = document.getElementById('email');
  var telephone = document.getElementById('telephone');
  var website = document.getElementById('website');
  var date_de_naissance = document.getElementById('date_de_naissance');

    /*SI LE CHAMP VARIABLE EST VIDE
    ALORS LA COULEUR DE FOND CHANGE EN ROUGE ET UN MESSAGE D'ERREUR S'AFFICHE
    SINON LA COULEUR DE FOND PASSE BLANCHE */

    if(nom.value.length == 0)
    {
      nom.style.backgroundColor = "red";
      alert("Vous n'avez pas entre votre nom");
    }
    else
    {
      nom.style.backgroundColor="white";
    }

    if(prenom.value.length == 0)
    {
      prenom.style.backgroundColor = "red";
      alert("Vous n'avez pas entre votre prenom");
    }
    else
    {
      prenom.style.backgroundColor="white";
    }

    if(email.value.length == 0)
    {
      email.style.backgroundColor = "red";
      alert("Vous n'avez pas entre votre email");
    }
    else
    {
      email.style.backgroundColor="white";
    }

    if(telephone.value.length == 0)
    {
      telephone.style.backgroundColor = "red";
      alert("Vous n'avez pas entre votre telephone");
    }
    else
    {
      telephone.style.backgroundColor="white";
    }

    if(website.value.length == 0)
    {
      website.style.backgroundColor = "red";
      alert("Vous n'avez pas entre votre url");
    }
    else
    {
      website.style.backgroundColor="white";
    }

    if(date_de_naissance.value.length == 0)
    {
      date_de_naissance.style.backgroundColor = "red";
      alert("Vous n'avez pas entre votre date de naissance");
    }
    else
    {
      date_de_naissance.style.backgroundColor="white";
    }

    /*SI TOUTES LES VALEURS SONT SUPERIEURS OU EGALES A 1
    ALORS UN MESSAGE SUCCESS S'AFFICHE ET LE FORMULAIRE EST ENVOYE
    SINON LE FORMULAIRE N'EST PAS ENVOYE*/

    if(website.value.length >= 1 && telephone.value.length >= 1 && email.value.length >= 1 && prenom.value.length >= 2 && nom.value.length >= 1 && date_de_naissance.value.length >= 1)
    {
      alert("Vous etes desormais inscrit");
      return true;
    }
    else
    {
      return false;
    }

}
