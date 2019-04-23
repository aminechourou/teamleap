// JavaScript Document


	function surligne(champ, erreur)

	{
	
	   if(erreur)
	
		  champ.style.backgroundColor = "#fba";
	
	   else
	
		  champ.style.backgroundColor = "";
	
	}

	
function verifpwd(champ)
{
   if(champ.value.length < 2 || champ.value.length > 25)
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



function verifemail(champ)

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

function verifForm(f)

{

   var pwdOk = verifpwd(f.pwd);

   var emailOk = verifemail(f.email);

   

   

   if( pwdOk  && emailOk )
 
      return  window.location.replace("index1.html"); 

   else

   {

     alert("Veuillez remplir correctement tous les champs");
 
      return    false ;
	   
   }

}