/* *************** */
/*  INSTÄLLNINGAR   */
/* *************** */
//Hitta element vi ska använda

const canvas = document.querySelector("canvas");

//Ställ in storlek på canvas
canvas.height = 400;
canvas.width = 600;

var ctx = canvas.getContext("2d");

/*       ***************          */
/*       KOD INNAN LOOOPEN STARTAR        */
/*       ****************         */
/*
var plan = new Image();
plan.src = "./bilder/plan-sheet-2.png"

//hur lång tid varhe ruta får (1/60)
var planRutor = [1, 2, 3, 4, 5, 6, 7, 8];

varx = 100, y = 100, rotation = 0;
var kör = false;*/

//objekt plan
var plan = {
    bild: new Image(),
    rutor: [0,1,2],
    i: 0,
    kör: false,
    x: 100,
    y: 100,
    rotation: 0

}
plan.bild.src = "../shooter/1945.png";
//för att rita ut plan figuren
var i = 0;
var j = 0;
function ritaPlan() {
    //plocka ut rätt ruta
    var x = i * 64 + 4;
    var y = 400;
    //spara koordinatsystemtet
    ctx.save();
    //Flytta kordinatsystemet
    ctx.translate(plan.x, plan.y);
    //Vrida kordinatsystemet
    ctx.rotate(plan.rotation / 180 * Math.PI);
    ctx.drawImage(plan.bild, x, y, 64, 64, -16, -16, 64, 64);
    //Återställ systemet
    ctx.restore();

    //hoppa till nästa
    plan.i += 0.5;
    if (plan.i > plan.rutor.length) {
        plan.i = 0;
    }
}
/*       ***************          */
/*       ANIMATIONSLOOPEN         */
/*       ****************         */
function loopen() {
    ctx.clearRect(0, 0, 600, 400);
    ritaPlan();
    requestAnimationFrame(loopen);
}
loopen();
/*       ***************          */
/*       INTERAKTIVITET         */
/*       ****************         */
window.addEventListener("keydown", function (e) {
    plan.kör = true;

    switch (e.code) {
        case "ArrowDown":
            plan.y += 20;
            plan.rotation = 180;
            break;
        case "ArrowUp":
            plan.y -= 20;
            plan.rotation = 0;
            break;
        case "ArrowLeft":
           plan.x -= 20;
            plan.rotation = 270;
            break;
        case "ArrowRight":
           plan.x += 20;
            plan.rotation = 90;
            break;

    }
})
window.addEventListener("keyup", function () {
    kör = false;
})

