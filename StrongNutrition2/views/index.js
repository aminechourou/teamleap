// JavaScript Document


	function surligne(champ, erreur)

	{
	
	   if(erreur)
	
		  champ.style.backgroundColor = "#fba";
	
	   else
	
		  champ.style.backgroundColor = "#B0F2B6";
	
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


function Check()
{
	password = document.fo.mdp.value;
	passwordlow = password.toLowerCase();
	majuscule = false;
	
	//On vérifie si il y a des majuscules
	if(password != passwordlow)
	{
		majuscule = true;
	}
	
	taille = password.length;
	numerique = false;
	// On vérifie qu'il y a des chiffres
	for(i=0;i<taille-1;i++)
	{
		caractere = password.substring(i,i+1);
		if(!isNaN(caractere))
		{
			numerique = true;
		}
	}
	
	if((majuscule==false && numerique==false))
	{ 
		if(document.getElementById)
		{
		document.getElementById("faible").style.backgroundColor = '#D2CAEC';
		document.getElementById("moyen").style.backgroundColor = 'white';
		document.getElementById("elevee").style.backgroundColor = 'white';
		}
	}
	else
	{
		if((majuscule || numerique) && taille<=8)
		{
			document.getElementById("faible").style.backgroundColor = '#D2CAEC';
			document.getElementById("moyen").style.backgroundColor = '#D2CAEC';
			document.getElementById("elevee").style.backgroundColor = 'white';
		}
		else if(majuscule && numerique && taille>8)
		{
			document.getElementById("faible").style.backgroundColor = '#D2CAEC';
			document.getElementById("moyen").style.backgroundColor = '#D2CAEC';
			document.getElementById("elevee").style.backgroundColor = '#D2CAEC';
		}
	}
}







function verifPseudo()
{
   if(verifMail(fo.email.value)=="sonihadouej1998%40hotmail.fr" )
   { //verifForm();
     document.location.href="index1.html" ;
   }
   else
   {
    alert("Wrong");
   }
}



function verifForm()

{  
	var mailOk= verifMail(fo.email);
   var mdpOk = Check(fo.mdp);
	

   

   if(mailOk)

     { return true;}

   else

   {

      alert("Veuillez Verifier la saisie! ");

      return false;

   }

} 

