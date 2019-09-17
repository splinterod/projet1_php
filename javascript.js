


/**alert('Welcome to COMMMITTTT TREEEEEE');*/

/** Fonction basculant la visibilité d'un élément dom
* avec petite animation pourl'apparition de la section choisi
*/


function apparitionSection()
{
  /** clic sur page pour fermer menu burger */
  /** eleement parents et tout ces enfants */
  if (event.target.id != "div_burger_menu" || $(".child-element").parents("#main-nav").length == 1 ) {

    $('#div_burger_menu').css("visibility","hidden");
  }  

  /**clic sur menu burger */
  if (event.target.id === "image_menuburger" ) {
    $('#div_burger_menu').css("visibility","visible");
  }  

  

   /**
    * event.target.id != "image_menuburger" || 
  var visible = $('#div_burger_menu').css("visibility") == "visible"; 
  un mélange de jquery et javascript dans une fct !!! SUPER BEAU !!!!! 

  if ($('#div_burger_menu').css("visibility") == "visible") {
    $('#div_burger_menu').css("visibility","hidden");
    /** alert('on cache bruger menu'); 
}
else
{
  /**  On affiche burger menu
  $('#div_burger_menu').css("visibility","visible");


 /** animation de l'apparition du bruger menu  
document.getElementById("#div_burger_menu").animate([
  {opacity: '0'},
  {opacity: '1'}
], 1000);
document.getElementById("#div_burger_menu").style.opacity = '1';
}
*/ 
}



