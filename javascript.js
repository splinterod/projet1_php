


/**alert('Welcome to COMMMITTTT TREEEEEE');*/

/** Fonction basculant la visibilité d'un élément dom
* avec petite animation pourl'apparition de la section choisi
*/


function apparitionMenuBurger()
{
  $('#div_burger_menu').css("visibility","visible");
}

 

 document.addEventListener("click", (evt) => {
  const flyoutElement = document.getElementById("div_burger_menu");
  let targetElement = evt.target; // clicked element

  if (targetElement.id != "image_menuburger") {
      do {
          if (targetElement == flyoutElement) {
              // This is a click inside. Do nothing, just return.
              return;
          }
          // Go up the DOM
          targetElement = targetElement.parentNode;
      } while (targetElement);

      // This is a click outside.
      $('#div_burger_menu').css("visibility","hidden");
  }
});




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




