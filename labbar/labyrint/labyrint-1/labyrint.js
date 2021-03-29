const canvas = document.querySelector("canvas");

canvas.width = 600;
canvas.height = 500;
//slå på ritmotron
var ctx = canvas.getContext("2d");
//figuren
//Figur objektet
var figur = {
    x: 100,
    y: 100,
    rotation: 0,
    bild: new Image()
}
figur.bild.src = "./nyckelpiga.png";

//rita ut fiuren

function ritaFigur() {
    ctx.save();
    ctx.translate(figur.x, figur.y);
     ctx.rotate(figur.rotation / 180 * Math.PI);
    ctx.drawImage(figur.bild, -25, -25, 50, 50);
    ctx.restore();
}
function loopen() {
    //sudda ut canvas
    ctx.clearRect(0, 0, 600, 500)
    ritaFigur();  
    requestAnimationFrame(loopen);
}

loopen()


window.addEventListener("keypress", function (e) {
    switch (e.code) {
        case "KeyW":
            console.log("gehege");
            if(karta[figur.rad] [figur.kolumn + 1] == 0){
            figur.rad--;
            }
            figur.rotation = 90;
             break;

        case "KeyA":
            if(karta[figur.rad] [figur.kolumn - 1 == 0] ){
                figur.rad--;
                }
                figur.rotation = 90;
                 break;

        case "KeyA":
            if(figur.rad > 0 ){
                figur.kolumn++;
                }
                figur.rotation = 90;
             break;

        case "KeyD":
            if(figur.rad < 550 ){
                figur.kolumn++;
                }
                figur.rotation = 90;
         
             break;
    } 
    console.log("coll: " + figur.rad / 50 + ", row: " + figur.kolumn / 50);
})