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
/*
var tank = new Image();
tank.src = "./bilder/tank-sheet-2.png"

//hur lång tid varhe ruta får (1/60)
var tankRutor = [1, 2, 3, 4, 5, 6, 7, 8];

varx = 100, y = 100, rotation = 0;
var kör = false;*/

//objekt tank
var tank = {
    bild: new Image(),
    rutor: [1, 2, 3, 4, 5, 6, 7, 8],
    i: 0,
    kör: false,
    x: 100,
    y: 100,
    rotation: 0

}
tank.bild.src = "./bilder/tank-sheet-2.png";
var explosion = [
    17, 18, 19
];
//för att rita ut tank figuren
var i = 0;
var j = 0;
function ritaTank() {
    //plocka ut rätt ruta
    var x = Math.floor(tank.rutor[Math.floor(tank.i)] % 8) * 32;
    var y = Math.floor(tank.rutor[Math.floor(tank.i)] / 8) * 32;
    //spara koordinatsystemtet
    ctx.save();
    //Flytta kordinatsystemet
    ctx.translate(tank.x, tank.y);
    //Vrida kordinatsystemet
    ctx.rotate(tank.rotation / 180 * Math.PI);
    ctx.drawImage(tank.bild, x, y, 32, 32, -16, -16, 32, 32);
    //Återställ systemet
    ctx.restore();

    //hoppa till nästa
    tank.i += 0.5;
    if (tank.i > tank.rutor.length) {
        tank.i = 0;
    }
}
function ritaExplosion() {
    //plocka ut rätt ruta
    var x = Math.floor(explosion[Math.floor(j)] % 8) * 32;
    var y = Math.floor(explosion[Math.floor(j)] / 8) * 32;
    ctx.drawImage(tank.bild, x, y, 32, 32, 200, 100, 32, 32);

    //hoppa till nästa
    
    if (tank.i > tank.rutor.length) {
        tank.i = 0;
    }
}

/*       ***************          */
/*       ANIMATIONSLOOPEN         */
/*       ****************         */
function loopen() {
    ctx.clearRect(0, 0, 800, 600);
    ritaTank();
    ritaExplosion();
    requestAnimationFrame(loopen);
}
loopen();
/*       ***************          */
/*       INTERAKTIVITET         */
/*       ****************         */
window.addEventListener("keydown", function (e) {
    tank.kör = true;

    switch (e.code) {
        case "ArrowDown":
            tank.y += 20;
            tank.rotation = 180;
            break;
        case "ArrowUp":
            tank.y -= 20;
            tank.rotation = 0;
            break;
        case "ArrowLeft":
           tank.x -= 20;
            tank.rotation = 270;
            break;
        case "ArrowRight":
           tank.x += 20;
            tank.rotation = 90;
            break;

    }
})
window.addEventListener("keyup", function () {
    kör = false;
})

