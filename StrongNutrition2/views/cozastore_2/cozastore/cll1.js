// JavaScript Document

/*jslint devel: true */

/*global
alert , Swal
*/
/*exported verifForm alert */
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
if( champ.value.length !=6 || isNaN(champ.value) )
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
function verifprix(champ)
{
if( champ.value <10 || isNaN(champ.value) )
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
function verifdes(champ)
{
var regex = /^[a-zA-Z()]+$/;
if(!regex.test(champ.value) || champ.value.length < 10 || champ.value.length > 100)
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
if(!regex.test(champ.value) || champ.value.length < 3 || champ.value.length > 25)
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
var prixOk=verifprix(f.prix);
var desOk=verifdes(f.description);
var nomOk=verifnom(f.nom);
if ( refOk && prixOk && desOk && nomOk){
return true;
}
else
{ 
Swal.fire({
  type: 'error',
  title: 'Erreur...',
  text: 'Veuillez remplir correctement tous les champs!',
  
});
return false;
} 
} 