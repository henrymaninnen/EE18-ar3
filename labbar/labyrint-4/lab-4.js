/* *************** */
/*  INSTÄLLNINGAR   */
/* *************** */
//Hitta element vi ska använda

const canvas = document.querySelector("canvas");

//Ställ in storlek på canvas
canvas.height = 800;
canvas.width = 600;

var ctx = canvas.getContext("2d");

/*       ***************         */
/*       GLOBALA VARIABLER       */
/*       ***************         */

var karta = [
    1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,
1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,120,121,122,1,
1,1,1,7,8,9,1,1,1,1,1,1,1,1,1,1,136,137,138,1,
1,1,1,23,24,25,1,1,1,1,1,1,1,120,121,122,152,153,154,1,
1,1,1,39,40,41,1,1,1,1,1,1,1,136,137,138,1,1,1,1,
1,1,1,1,1,1,1,1,1,1,1,1,1,152,153,154,1,1,1,1,
1,1,1,1,1,1,1,1,20,1,1,1,1,1,1,1,1,1,1,1,
1,1,7,8,9,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,
1,1,23,24,25,1,1,1,1,1,20,1,1,1,1,1,7,8,9,1,
1,1,39,40,41,1,1,1,1,1,1,1,1,1,1,1,23,24,25,1,
1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,39,40,41,1,
1,1,1,1,117,118,119,1,1,1,120,121,122,1,1,1,1,1,1,1,
1,1,1,1,133,134,135,1,1,1,136,137,138,1,1,1,1,1,1,1,
1,1,1,1,149,150,151,1,1,1,152,153,154,1,1,1,1,1,1,1,
1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,120,121,122,1,1,
1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,136,137,138,1,1,
1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,152,153,154,1,1,
1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,
1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,
1,1,1,1,1,1,1,1,1,1,1,1,1,1,91,91,1,1,1,1
]
var lager2 = [
    1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,
    1,77,78,1,1,1,1,1,1,1,1,1,1,1,1,1,120,121,122,1,
    1,93,94,7,8,9,1,97,98,97,98,1,1,1,1,1,136,137,138,1,
    1,1,1,23,24,25,1,113,114,113,114,1,1,120,121,122,152,153,154,1,
    1,1,1,39,40,41,1,1,1,1,1,1,1,136,137,138,1,1,1,1,
    1,1,1,1,1,1,1,1,1,1,1,77,78,152,153,154,77,78,1,1,
    1,1,1,1,1,1,1,1,20,1,1,93,94,1,1,1,93,94,1,1,
    1,1,7,8,9,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,
    1,1,23,24,25,1,97,98,1,1,20,1,1,77,78,1,7,8,9,1,
    1,1,39,40,41,1,113,114,1,1,1,1,1,93,94,1,23,24,25,1,
    1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,39,40,41,1,
    1,1,1,1,117,118,119,1,1,1,120,121,122,1,1,1,1,1,1,1,
    1,1,1,1,133,134,135,1,1,1,136,137,138,1,1,1,1,1,1,1,
    1,1,1,1,149,150,151,1,1,1,152,153,154,1,1,1,1,1,1,1,
    1,97,98,1,1,1,1,1,1,1,1,1,1,1,1,120,121,122,1,1,
    1,113,114,97,98,1,1,1,1,1,1,1,1,1,1,136,137,138,1,1,
    1,1,1,113,114,1,97,98,1,1,1,1,1,1,1,152,153,154,1,1,
    1,1,1,1,1,1,113,114,1,1,1,1,1,1,1,1,1,1,1,1,
    1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,
    1,1,1,1,1,1,1,1,1,1,1,1,1,1,91,91,1,1,1,1
]
var figur = {
    bild: new Image(),
    x: 100,
    y: 100,
    går: false,
    rad: 0,
    i: 0
}
figur.bild.src = "./pokemon-bald-sprite.png"
var kartaBild = new Image();
kartaBild.src = "./forest_tiles.png"

/*       ***************         */
/*       OBJEKT SOM SKA SYNAS    */
/*       ***************         */

/*       ***************          */
/*       FUNKTIONER               */
/*       ****************         */

function ritaLager() {
    //index i arrayen
    var index = 0;
    //loopa igenom raderna på canvas
    for (var rad = 0; rad < 20; rad++) {
        //loopa igenom kolummnerna
        for (var kolumn = 0; kolumn < 20; kolumn++) {
            //plocka ut rätt ruta
            var x = Math.floor(karta[index] % 16 - 1) * 32;
            var y = Math.floor(karta[index] / 16) * 32;
            //plocka ut rätt ruta
            ctx.strokeRect(kolumn * 32, rad * 32, 32, 32);
            ctx.drawImage(kartaBild, x, y, 32, 32, kolumn * 32, rad * 32, 32, 32);
            //hoppa till nästa rutaq
            index++;
        
        }
    }
}
function ritaLager2() {
    //index i arrayen
    var index = 0;
    //loopa igenom raderna på canvas
    for (var rad = 0; rad < 20; rad++) {
        //loopa igenom kolummnerna
        for (var kolumn = 0; kolumn < 20; kolumn++) {
            //plocka ut rätt ruta
            var x = Math.floor(lager2[index] % 16 - 1) * 32;
            var y = Math.floor(lager2[index] / 16) * 32;
            //plocka ut rätt ruta
            ctx.strokeRect(kolumn * 32, rad * 32, 32, 32);
            ctx.drawImage(kartaBild, x, y, 32, 32, kolumn * 32, rad * 32, 32, 32);
            //hoppa till nästa rutaq
            index++;
        
        }
    }
}

function ritaFiguren() {
     //plocka ut rätt ruta
     var x = figur.i * 64;
     var y = figur.rad * 64;

     ctx.drawImage(figur.bild, x, y, 64, 64, figur.x, figur.y, 64, 64)

     if (figur.i > figur.rutor) {
         figur++;
     }
}
//rita ut fiuren


/*       ***************          */
/*       ANIMATIONSLOOPEN         */
/*       ****************         */
function loopen() {
    ctx.clearRect(0, 0, 800, 600);
    ritaLager();
    ritaLager2();
    ritaFiguren();
    requestAnimationFrame(loopen);
}
loopen();

window.addEventListener("keydown", function (e) {
    figur.går = true;

    switch (e.code) {
        case "ArrowDown":
            figur.y += 20;
            figur.rad = 0;
            break;
        case "ArrowUp":
            figur.y -= 20;
            figur.rad = 3;
            break;
        case "ArrowLeft":
           figur.x -= 20;
           figur.rad = 1;
            break;
        case "ArrowRight":
           figur.x += 20;
           figur.rad = 2;
            break;

    }
})
window.addEventListener("keyup", function () {
    går = false;
})

