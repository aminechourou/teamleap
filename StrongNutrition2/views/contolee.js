
// JavaScript Document


	function surligne(champ, erreur)

	{
	
	   if(erreur)
	
		  champ.style.backgroundColor = "#fba";
	
	   else
	
		  champ.style.backgroundColor = "#B0F2B6";
	
	}



function VerifID(champ)
{
   if(champ.value.length !=6 || isNaN(champ.value) )
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


	function VerifNom(champ)
{

	if(champ.value.length < 2 || champ.value.length > 50)
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





function VerifForm(fou)

{  

   var IDOk = VerifID(fou.idcat);
   var nomOk = VerifNom(fou.nomcat);
	


   if(IDOk && nomOk)

      return true;

   else

   {

      alert("Veuillez remplir correctement tous les champs");
	   return false;
      ;

   }

} 

