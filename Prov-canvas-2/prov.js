/* *************** */
/*  INSTÄLLNINGAR   */
/* *************** */
//Hitta element vi ska använda

const canvas = document.querySelector("canvas");

//Ställ in storlek på canvas
canvas.height = 800;
canvas.width = 1500;

var ctx = canvas.getContext("2d");

/*       ***************         */
/*       GLOBALA VARIABLER       */
/*       ***************         */
var karta1 = [
    [1, 2, 3, 4, 5, 6, 7, 8, 9, 10],
    [1, 2, 3, 4, 5, 6, 7, 8, 9, 10],
]
var karta2 = [
    [11, 12, 13, 14, 15, 16, 17, 18, 19, 20],
    [11, 12, 13, 14, 15, 16, 17, 18, 19, 20]
]
var skepp = [
    [0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
    [0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
    [0, 0, 0, 0, 0, 0, 1, 0, 0, 0],
    [0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
    [0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
    [0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
    [0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
    [0, 1, 0, 0, 0, 0, 1, 0, 0, 0],
    [0, 0, 0, 0, , 0, 0, 0, 0, 0],
    [0, 0, 1, 0, 0, 0, 0, 1, 0, 0],
]
var box1 = {
    rad: 0,
    kolumn: 0
}
var box2 = {
    rad: 0,
    kolumn: 0
}
var box3 = {
    rad: 0,
    kolumn: 0
}
var box4 = {
    rad: 0,
    kolumn: 0
}
var box5 = {
    rad: 0,
    kolumn: 0
}

/*       ***************          */
/*       FUNKTIONER               */
/*       ****************         */
function ritaKartan1() {
    //index i arrayen
    var index = 0;
    //loopa igenom arrayen
    for (var rad = 0; rad < 10; rad++) {

        for (var kolumn = 0; kolumn < 10; kolumn++) {
            ctx.strokeRect(kolumn * 32, rad * 32, 32, 32);

            if (skepp[rad][kolumn] == 1) {
                ctx.fillRect(kolumn * 38, rad * 19, 15, 15)
            }

            //hoppa till nästa rutaq
            index++;
        }
    }
}
function ritaKartan2() {
    //index i arrayen
    var index = 0;
    //loopa igenom arrayen
    for (var rad = 0; rad < 10; rad++) {

        for (var kolumn = 20; kolumn < 30; kolumn++) {
            ctx.strokeRect(kolumn * 32, rad * 32, 32, 32);
            //hoppa till nästa rutaq
            index++;
        }
    }
}
//Slumpa fram röda boxar
function slumpaBoxFunction(objekt) {
   objekt.rad = Math.floor(Math.random() * 10);
   objekt.kolumn = Math.floor(Math.random() * 12);
   ctx.fillRect(objekt.kolumn * 65 + 200, objekt.rad * 20 + 50 , 15, 15);
}
slumpaBoxFunction(box1);
slumpaBoxFunction(box2);
slumpaBoxFunction(box3);
slumpaBoxFunction(box4);
slumpaBoxFunction(box5);
/*       ***************          */
/*       ANIMATIONSLOOPEN         */
/*       ****************         */
function loopen() {
    ctx.clearRect(0, 0, 650, 1500)
    ritaKartan1();
    ritaKartan2();
    requestAnimationFrame(loopen);
}
loopen();