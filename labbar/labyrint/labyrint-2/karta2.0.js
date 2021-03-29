const canvas = document.querySelector("canvas");
const ePoints = document.querySelector("p")

canvas.width = 800;
canvas.height = 600;
//slå på ritmotron
var ctx = canvas.getContext("2d");

//skapa karta
var karta = [
    [1, 0, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1],
    [1, 0, 0, 1, 1, 1, 1, 1, 1, 1, 1, 1],
    [1, 1, 0, 1, 1, 0, 0, 1, 1, 0, 0, 0],
    [1, 1, 0, 0, 1, 0, 0, 1, 1, 0, 1, 1],
    [1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 1, 1],
    [1, 1, 1, 0, 1, 1, 1, 1, 1, 0, 1, 1],
    [1, 1, 0, 0, 1, 1, 1, 1, 1, 0, 1, 1],
    [1, 0, 0, 1, 1, 1, 1, 1, 1, 0, 1, 1],
    [1, 0, 0, 0, 1, 0, 0, 1, 0, 0, 1, 1],
    [1, 0, 1, 0, 0, 0, 0, 0, 0, 1, 1, 1],
    [1, 0, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1]
];

function ritaKartan() {
    //loopa igenom arrayen
    for (var rad = 0; rad < 11; rad++) {

        for (var kolumn = 0; kolumn < 12; kolumn++) {

            //om "1" rita ut en kloss
            if (karta[rad][kolumn] == 1) {
                ctx.fillRect(kolumn * 50 ,rad * 50, 50, 50)
            }
        }
    }
}
//Figur objektet
var figur = {
    rad: 0,
    kolumn: 1,
    rotation: 0,
    poäng: 0,
    bild: new Image()
}
var mynt = {
    rad: 0,
    kolumn: 0,
    bild: new Image()
}
figur.bild.src = "../nyckelpiga.png";
mynt.bild.src = "../coin.png";

//rita ut fiuren
function ritaFigur() {
    ctx.save();
    ctx.translate(figur.kolumn * 50 + 25, figur.rad * 50 + 25);
    ctx.rotate(figur.rotation / 180 * Math.PI);
    ctx.drawImage(figur.bild, -25, -25, 50, 50);
    ctx.restore();
}
function ritaMynt() {
    ctx.drawImage(mynt.bild, mynt.kolumn * 50, mynt.rad * 50, 50, 50);
}
//spawna mynt
function spawnaMynt() {
    while (true) {
        mynt.rad = Math.floor(Math.random() * 11);
        mynt.kolumn = Math.floor(Math.random() * 12);
        if (karta[mynt.rad][mynt.kolumn] == 0) {
            break;
        }
        console.log();
    }
}

//plocka myntet, få poäng
function plockaPoäng() {
    if (figur.rad == mynt.rad && figur.kolumn == mynt.kolumn) {
        //öka poäng
        figur.poäng++;
        ePoints.textContent = figur.poäng;
        //spawna om myntet
        spawnaMynt();
    }
}
spawnaMynt();
function loopen() {
    //sudda ut canvas
    ctx.clearRect(0, 0, 800, 600)

    //rita karta
    ritaKartan();
    ritaFigur();
    ritaMynt();
    plockaPoäng();
    requestAnimationFrame(loopen);
}

loopen()

window.addEventListener("keypress", function (e) {
    switch (e.code) {
        case "KeyW":
            if (karta[figur.rad - 1][figur.kolumn] == 0) {
                figur.rad--;
            }
            figur.rotation = 0;
            break;

        case "KeyA":
            if (karta[figur.rad][figur.kolumn - 1] == 0) {
                figur.kolumn--;
            }
            figur.rotation = 270;
            break;

        case "KeyS":
            if (karta[figur.rad + 1][figur.kolumn] == 0) {
                figur.rad++;
            }
            figur.rotation = 180;
            break;

        case "KeyD":
            if (karta[figur.rad][figur.kolumn + 1] == 0) {
                figur.kolumn++;
            }
            figur.rotation = 90;

            break;
    }
    console.log("coll: " + figur.rad + ", row: " + figur.kolumn);
})