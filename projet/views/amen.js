function surligne(champ, erreur)

	{
	
	   if(erreur)
	
		  champ.style.backgroundColor = "#fba";
	
	   else
	
		  champ.style.backgroundColor = "";
	
    }
    

    function verifNomTransporteur(champ)
    {
    
        if(champ.value < 50 || champ.value > 200)
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
    function verifDelai(champ)
    {
    
        if(champ.value < 0 || champ.value > 100)
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

    function verifvitesse(champ)
    {
    
        if(champ.value < 50 || champ.value > 200)
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

    function verifAdresseTransporteur(champ)

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