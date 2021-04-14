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


/*       ***************         */
/*       OBJEKT SOM SKA SYNAS    */
/*       ***************         */

var karta = [
    [1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1],
    [1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1],
    [1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1],
    [1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1],
    [1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1],
    [1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1],
    [1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1]
]

var piga = {

}
var monster = {

}


/*       ***************          */
/*       ANIMATIONSLOOPEN         */
/*       ****************         */
function loopen() {
    ctx.clearRect(0, 0, 800, 600);
    ritaPiga();
    requestAnimationFrame(loopen);
}
loopen();
//rita ut nyckelpiga
function ritaPiga() {
    ctx.drawImage(piga.bild, piga.x, piga.y, 50, 50);
}

/*       ***************         */
/*       INTERAKTION             */
/*       ***************         */
window.addEventListener("keypress", function (e) {    //e = villken tangent
    switch (e.code) {
        case "NumPad2":
        piga.y++;
            break;

        case "NumPad8":
            break;

        case "NumPad4":
            break;

        case "NumPad6":
            break;
        default:
            break;
    }
})