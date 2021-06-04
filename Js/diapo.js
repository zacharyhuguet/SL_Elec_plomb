var cpt = 1 ;
var cpt2 = 2 ;
var cpt3 = 3 ;
var Nbrimg = 6 ;
var timer1 = null;

function init(){
Afficher();
start();
}

function suivant(){
    cpt++ ;
    cpt2++ ;
    cpt3++ ;

    if (cpt > Nbrimg){ cpt = 1; }
    
    if (cpt2 > Nbrimg){ cpt2 = 1; }

    if (cpt3 > Nbrimg){ cpt3 = 1; }

    img1.src = cpt+'.jpg';
    img2.src = cpt2+'.jpg';
    img3.src = cpt3+'.jpg';
}

function precedent(){
    cpt-- ;
    cpt2-- ;
    cpt3-- ;

    if (cpt < 1){ cpt = Nbrimg; }
    
    if (cpt2 < 1){ cpt2 = Nbrimg; }

    if (cpt3 < 1){ cpt3 = Nbrimg; }

    img1.src = cpt+'.jpg';
    img2.src = cpt2+'.jpg';
    img3.src = cpt3+'.jpg';
}

function Afficher(){
    img1.src = cpt+'.jpg';
    
    img2.src = cpt2+'.jpg';

    img3.src = cpt3+'.jpg';
}
    
function start(){
    if ( timer1 == null )
        timer1 = setInterval('suivant()', 4000);
}

function stop(){
    clearInterval(timer1);
    timer1 = null;
}





