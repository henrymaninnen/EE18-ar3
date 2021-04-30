// Element vi använder
const canvas = document.querySelector("canvas");

// Ställ in storlek på canvas
canvas.width = 600;
canvas.height = 500;

// Slå på rit-api
var ctx = canvas.getContext("2d");
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

//objekten

//Spelaren
//spelare class (oop)
class Mynt {
    constructor() {
        this.rad = 4;
        this.kolumn = 5;
        this.bild = new Image();
        this.bild.src = "./bilder/coin.png";
    }
    rita() {
        ctx.drawImage(this.bild, this.kolumn * 50, this.rad * 50, 50, 50);
    }
}
class Spelare {
    constructor() {
        this.rad = Math.floor(Math.random() * 10);
        this.kolumn = Math.floor(Math.random() * 10); 
        this.rotation = 0;
        this.bild = new Image();
        this.bild.src = "./bilder/nyckelpiga.png";
    }
    //rita ut fiuren
    rita() {
        ctx.save();
        ctx.translate(this.kolumn * 50 + 25, this.rad * 50 + 25);
        ctx.rotate(this.rotation / 180 * Math.PI);
        ctx.drawImage(this.bild, -25, -25, 50, 50);
        ctx.restore();
    }
}
var monsters = [];

mynten.push(new Mynt());
for (let i = 0; i < 3; i++) {
    
}
class Monster {
    constructor() {
        this.rad = 3;
            this.kolumn = 2;
               this.bild = new Image();
               this.bild.src = "./bilder/monster.png";
    }
    rita() {
        ctx.drawImage(this.bild, this.kolumn * 50, this.rad * 50, 50, 50);
    }
}
var spelare = new Spelare();
var mynt1 = new Mynt();
var mynt2 = new Mynt();
var mynt3 = new Mynt();
var monster = new Monster();
var monster2 = new Monster();
//mynt 
var mynt1 = {
    rad: 4,
    kolumn: 5,
    bild: new Image(),
    //rita mynt
    rita() {
        ctx.drawImage(this.bild, this.kolumn * 50, this.rad * 50, 50, 50);
    }
}
mynt1.bild.src = "./bilder/coin.png";
//mynt 
var mynt2 = {
    rad: 4,
    kolumn: 5,
    bild: new Image(),
    rita() {
        ctx.drawImage(this.bild, this.kolumn * 50, this.rad * 110, 50, 50);
    }
}
mynt2.bild.src = "./bilder/coin.png";
//mynt 
var mynt3 = {
    rad: 4,
    kolumn: 5,
    bild: new Image(),
    rita() {
        ctx.drawImage(this.bild, this.kolumn * 90, this.rad * 50, 50, 50);
    }

}
mynt3.bild.src = "./bilder/coin.png";

var monster = {
    rad: 3,
    kolumn: 2,
    bild: new Image(),
    rita() {
        ctx.drawImage(this.bild, this.kolumn * 50, this.rad * 50, 50, 50);
    }
}
monster.bild.src = "./bilder/monster.png";

var monster2 = {
    rad: 3,
    kolumn: 2,
    bild: new Image(),
    rita() {
        ctx.drawImage(this.bild, this.kolumn * 140, this.rad * 50, 50, 50);
    }
}
monster2.bild.src = "./bilder/monster.png";
function ritaKartan() {
    //loopa igenom arrayen
    for (var rad = 0; rad < 11; rad++) {

        for (var kolumn = 0; kolumn < 12; kolumn++) {

            //om "1" rita ut en kloss
            if (karta[rad][kolumn] == 1) {
                ctx.fillRect(kolumn * 50, rad * 50, 50, 50)
            }
        }
    }
}
// Animationsloopen
function loopen() {
    // Sudda ut canvas
    ctx.clearRect(0, 0, 600, 500);
    ritaKartan();
    spelare.rita();
    mynten.forEach(mynt => mynt.rita());
    monsters.forEach(monster => monster.rita());
    requestAnimationFrame(loopen);
}

// Starta loopen
loopen()

// Lyssna på piltangenter
window.addEventListener("keypress", function (e) {
    switch (e.code) {
        case "Numpad2": // Pil nedåt
            figur.y += 50;
            figur.rotation = 180;
            break;
        case "Numpad8": // Pil uppåt
            figur.y -= 50;
            figur.rotation = 0;
            break;
        case "Numpad4": // Pil vänster
            figur.x -= 50;
            figur.rotation = 270;
            break;
        case "Numpad6": // Pil höger
            figur.x += 50;
            figur.rotation = 90;
            break;

        default:
            break;
    }
    console.log("Kolumn: " + (figur.x - 25) / 50 + ", rad: " + (figur.y - 25) / 50);
})