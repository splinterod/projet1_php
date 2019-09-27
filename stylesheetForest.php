<?php
header('content-type: text/css');


function idCssArbre () {
    for ($i=1 ; $i<=100 ;$i++) {

        $positonLeft = mt_rand(0, 550);
        $positonTop = mt_rand(0, 350);
        $positionZ = mt_rand(1, 5);
        /* $profondeur = mt_rand(-200, 200);*/

         $idImage = "img$i";
         echo "#$idImage {";
         echo "position:absolute ;";
         echo "height:150px;";
         echo "width:150px;";
         echo "left:$positonLeft" . "px;";
         echo "top:$positonTop" . "px ;";
        /* echo "transform: translateZ($profondeur)"; */
         echo "z-index:$i ;}";
    }


    }
?>


*{
    box-sizing: border-box;
  margin:0px;
  padding:0px;
 }

body {
    width:100%;
    font-family: Roboto, 'Times New Roman', Times, serif;
    /* min-width: 600px;*/
 }
/*css header par julien */
 /*div du burger menu */

#div_burger_menu {
    width: 300px;
    height: 100%;
    background-color: rgb(59, 56, 56);
    color: white;
    border: solid 2px greenyellow;
    box-shadow: 0px 0px 15px #333;
    position: absolute;
    top:0px;
    left: 0px;
    visibility: hidden;
    text-align: center;
    transform:translateX(-300px);

}





#div_burger_menu h2  {
    margin: 10px 0px;
}

#div_burger_menu ul {
    margin-bottom:50px;
    list-style-type: none;

}

menuburger_div_logo {
    width: 100%;
}


#div_burger_menu h3 {
    border-bottom: solid 1px greenyellow;
}

#div_burger_menu li {
    margin-top:20px;
}

/*css du menu pleine largeur*/

#menuPleinePage {
    height: 50px;
    display:flex;
    background-color: rgb(59, 56, 56);


}



.lienMenuBlanc {
    color: white;
    text-decoration:none;
}

/* affichage infos menu plaine largeur */
.sousMenuPleineLargeur {
    width: 250px;
    text-align: center;
    line-height: 50px;
}

.sousMenuPleineLargeurPageEnCours {
    width: 250px;
    text-align: center;
    line-height: 50px;
    background-color: rgb(150, 156, 156);
    color: yellow;
}

.lienMenuBlancPageEnCours {
    color: yellow;
    text-decoration:none;
}


/*sytyle interne au menu burger */

 header {

    width:100%;
    height: auto;
    max-height:150px;
     background-position: center;
     background: linear-gradient(to right, rgba(255,255,255,0) 20%,  rgba(255,255,255,1) , rgba(255,255,255,0) 80% , rgba(255,255,255,1) 90% ), url("Images/fond_header_haut.jpg");
     display:flex;
     align-items:center;
     justify-content: space-around;
 }

 header div {
    width: 20%;
    height: auto;

    text-align: center;

 }

 .header_vide {
    width: 10px;
 }

.logo_header {
    max-width:40%;
 max-height: auto;
 min-width: 150px;
 min-height: auto;
}

#image_menuburger {
 height: 60px;
 width: 60px;
 opacity: 25%;
 margin-left:10px;
}

#header_user_info
{
    text-align: center;
 font-weight: bold;

}

#header_logo_username {
 height: 90px;
 width: auto;
}

.div_usr_infos {
    color: black;
    width: 100%;
    font-weight: bold;

}

/* fin css header par julien */

.logoleft {
    display:  none;
}

.logoright {
    display:  none;
}

/*affichage de la foret */
#myForest
{
margin-top:50px;
margin-bottom:50px;
height:550px;
/*border:solid 1px black;*/
margin: none;
width: 750px;
display:inline-block;
position: relative;
z-index:-1;
}

<?php echo idCssArbre(); ?>






  @media screen and (min-width: 1100px) {
    .container {
        display: flex;
        flex-direction: row;
      flex-wrap: wrap;
      justify-content: space-around;
      align-items: flex-start;
      margin: 5px;

   }

.logoleft {
        display:  flex;
        flex-direction: column;
  align-items: space-between;


}

.logoright {
        display: flex;
        flex-direction: column;
  align-items: space-between;


}

.pvr{
    display:  block;
    width : 360px;
    height: 240px;
    margin-left: : 60px;
    margin-top: 60px;
    border-radius: 1em;
 }



}

    /* debut css footer par Phil */
    footer{
    background-color: rgb(59, 56, 56);
      border-top: solid 2px greenyellow;


      width: 100%;
      margin: auto;
      padding-top: 15px;
      padding-bottom: 15px;
  }
  nav{
    display: flex;
    justify-content: space-between;
  }
  .contact{
    width: 100%;
}
  .topbar
  {
      width: 100%;
      display: flex;
      justify-content: space-around;
      margin: 5px 0;
  }

  .topbar p{
    display: inline;
    margin-right: 20px;
      text-align: center;

  }
  .topbar a{
    color: white;
    text-decoration: none;
  }

  .topbar a:hover{
    background-image: url("Images/fond_header.png");
      border: solid 2px greenyellow;
      color: rgb(59, 56, 56);
      border-radius: 1em;
      box-shadow: 0px 0px 15px #333;
      font-size: 1.2em;
      padding: 3px 10px;
  }
  .address{
    text-align: center;
      font-weight: bold;
      color: white;
      margin-top: 80px;
      font-size: 0.8em;
  }
  br{
    visibility: 1;
}
  .left{
    margin-top: 100px;
      margin-left: 15px;
  }
  .right{
    margin-top: 100px;
      margin-right: 15px;
  }

  /* fin section footer ,suite animation section footer */

  @keyframes animation_logo{
    0% {
        transform: translateY(0px);
      }
      50% {
        transform: translateY(5px);
      }
      100% {
        transform: translateY(5px);
      }
  }

  footer img:hover{
    animation: animation_logo 1s;
  }

  /* fin animation section footer */
@media screen and (min-width: 768px) {


    .header_vide {
        width: 25%;
    }

    #centrale_container {
        display: flex;
        width: 100%;
        margin: auto;
    }

    .bloc_left {
    margin: 10px;

    }

    .bloc_center {
    margin: 10px;
    }


    .bloc_right {
    margin: 10px;
    }

    .page_left {
    margin-bottom: 50px;
    }

    .page_center {

    display: flex;
    flex-direction: column-reverse;

    }

    .page_right {

}
}