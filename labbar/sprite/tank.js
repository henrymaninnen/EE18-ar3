/* *************** */
/*  INSTÄLLNINGAR   */
/* *************** */
//Hitta element vi ska använda

const canvas = document.querySelector("canvas");

//Ställ in storlek på canvas
canvas.height = 800;
canvas.width = 600;

var ctx = canvas.getContext("2d");

/*       ***************          */
/*       KOD INNAN LOOOPEN STARTAR        */
/*       ****************         */
//ladda in grafiken
var tank = new Image();
tank.src = "./bilder/tank-sprite.png"

//hur lång tid varhe ruta får (1/60)
var tankRutor = [
0, 0, 0 , 1, 1, 1, 2, 2, 2, 3, 3, 3, 4, 4, 4, 5, 5, 5, 6, 6, 6
];
//för att rita ut tank figuren
var i = 0;
function ritaTank() {
    ctx.drawImage(tank, 32 * tankRutor[i], 0, 32, 32, 100, 100, 32, 32);

    //hoppa till nästa
    i++;
    if (i > tankRutor.length - 1) {
        i = 0;
    }
}

/*       ***************          */
/*       ANIMATIONSLOOPEN         */
/*       ****************         */
function loopen() {
    ctx.clearRect(0, 0, 800, 600);  
    ritaTank();
    requestAnimationFrame(loopen);
}
loopen();