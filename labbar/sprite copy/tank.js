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
var csgo = new Image();
csgo.src = "./71146-6759d84cc4ddee8e806275766f775df4.jpg"

//hur lång tid varhe ruta får (1/60)
var csgoRutor = [
0, 0, 0, 0, 0, 0, 1, 1, 1, 1, 1, 1, 2, 2, 2, 2, 2, 2, 3, 3, 3, 3, 3, 3, 4, 4, 4, 4, 4, 4, 4, 5, 5, 5, 5, 5, 6, 6, 6, 6, 6, 6
];
//för att rita ut tank figuren
var i = 0;
function ritaCsgo() {
    ctx.drawImage(csgo, 32 * csgoRutor[i], 0, 64, 64, 100, 100, 64, 64);

    //hoppa till nästa
    i++;
    if (i > csgoRutor.length - 1) {
        i = 0;
    }
}

/*       ***************          */
/*       ANIMATIONSLOOPEN         */
/*       ****************         */
function loopen() {
    ctx.clearRect(0, 0, 800, 600);  
    ritaCsgo();
    requestAnimationFrame(loopen);
}
loopen();