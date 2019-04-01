function verifForm2(f)

{
var comailOk = verifMail(f.comail);

var comdpOk = verifPrenom(f.comdp);
  
if(comailOk && comdpOk)

      return true;

   else

   {

      alert("Veuillez remplir correctement tous les champs");

      return false;

   }

}

	function surligne(champ, erreur)

	{
	
	   if(erreur)
	
		  champ.style.backgroundColor = "#fba";
	
	   else
	
		  champ.style.backgroundColor = "";
	
	}

	function verifNom(champ)
{

	if(champ.value.length < 5 || champ.value.length > 25)
	{
	   surligne(champ, true);
	   return false;
	}
	else
	{
	   surligne(champ, false);
	   return true;
	}
}
function verifPrenom(champ)
{
   if(champ.value.length < 5 || champ.value.length > 25)
   {
      surligne(champ, true);
      return false;
   }
   else
   {
      surligne(champ, false);
      return true;
   }
}



function verifMail(champ)

{

   var regex = /^[a-zA-Z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$/;

   if(!regex.test(champ.value))

   {

      surligne(champ, true);

      return false;

   }

   else

   {

      surligne(champ, false);

      return true;

   }

}

function verifCin(champ)

{

   var regex = /^[0-9]*$/;

   if(!regex.test(champ.value))

   {

      surligne(champ, true);

      return false;

   }

   else

   {

      surligne(champ, false);

      return true;

   }

}
function verifnom(champ)

{

   var regex = /^[a-zA-Z()]+$/;

   if(!regex.test(champ.value) || champ.value.length < 5 || champ.value.length > 25)

   {

      surligne(champ, true);

      return false;

   }

   else

   {

      surligne(champ, false);

      return true;

   }
}

function verifForm(f)

{

   var pseudoOk = verifPrenom(f.user);

   var telOk = verifCin(f.telephone);

   var mailOk = verifMail(f.mail);
   var mdpOk = verifPrenom(f.mdp);

   

   if(pseudoOk && telOk && mailOk && mdpOk)

      return true;

   else

   {

      alert("Veuillez remplir correctement tous les champs");

      return false;

   }

}
function verifForm1(f)

{

   var numOk = verifCin(f.num);

    var nomOk = verifNom(f.nom);
   var cinOk = verifCin(f.cin);

 if(numOk && nomOk && cinOk)

      return true;

   else

   {

      alert("Veuillez remplir correctement tous les champs");

      return false;

   }

}