

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


function VerifPrix(champ)
{
   if( isNaN(champ.value) )
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




function VerifCat(champ)
{
   if(champ.value.length <5 || champ.value.length > 200)
   {
      surligne(champ, true);
	    alert("Veuillez remplir correctement tous les champs");
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

   var IDOk = VerifID(fou.idprod);
   var nomOk = VerifNom(fou.nomprod);
	var catOk = VerifCat(fou.categorieprod);
	var prixOk = VerifPrix(fou.prixprod);
   	var quantiteOk = Verifprix(fou.quantiteprod);


   if(IDOk || nomOk || catOk || prixOk || quantiteOk)

      return true;

   else

   {

      alert("Veuillez remplir correctement tous les champs");
	   return false;
      ;

   }

} 

