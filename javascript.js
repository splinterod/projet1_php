


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




 // redimensionnement des marges haut et bas du header en fontion de la largeur de la page
window.addEventListener("resize", displayWindowSize);
window.onload = function() {
  displayWindowSize()
  }

function displayWindowSize(){

  // Get width and height of the window excluding scrollbars

  var w = document.documentElement.clientWidth;
  var marge = 0;
  


  if (w <= 1010) {
    $('header').css("margin-top","00px");
} else {
  marge ="" + Math.round((w-1010) /13)+ "px";
  // Display result inside a div element
  $('header').css("margin-top",marge);
  $('header').css("margin-bottom",marge);
}
}
  
  





