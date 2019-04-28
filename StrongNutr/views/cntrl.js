/*jslint devel: true */

/*global
alert
*/
/*exported verifForm */
/*jshint unused:false*/


function surligne(champ,erreur)

	{
	
	   if(erreur)
	
		  champ.style.backgroundColor = "#fba";
	
	   else
	
		  champ.style.backgroundColor = "#98FB98";
	
	}

	function verifref(champ)
{

	if(champ.value.length !=6 || isNaN(champ.value) )
	{
	   surligne(champ,true);
	   return false;
	}
	else
	{
	   surligne(champ, false);
	   return true;
	}
}



function verifaprix(champ)

{

   

   if(isNaN(champ.value)  )

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

function verifnprix(champ)

{

   

   if(isNaN(champ.value) )

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

   var refOk=verifref(f.reference);

   var aprixOk=verifaprix(f.aprix);

   var nprixOk=verifnprix(f.nprix);

   

   if ( refOk && aprixOk && nprixOk){
 
      return true;

   }else { 
	 
	 alert('Veuillez remplir correctement tous les champs');
       return false;
	    

   } 

} 