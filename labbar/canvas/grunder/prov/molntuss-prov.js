//läs in element
const canvas = document.querySelector("canvas");
const pilv = document.querySelector("#pilv");
const pilh = document.querySelector("#pilh");
const moln = document.querySelector("#moln");

 //slå på ritmotron
 var ctx = canvas.getContext("2d");
 //rita ut en bild
 var sol = {
    x: 270,
    y: 10,
    bild: new Image()
}
//rita ut moln
var aMoln = {
    x: 160,
    y: 20
}

var speed = 2;

//ladda in bilder
 sol.bild.src = "./Henry Cantwell - sun.png";

 //Animationsfiguren
 function loopen() {
      //sudda ut
      ctx.clearRect(200, 0, 400, 500);
    //rita ut figuren
    ctx.drawImage(sol.bild, sol.x, sol.y);

    
    //rita ut moln
    ctx.fillRect(aMoln.x, aMoln.y, 100, 50,)

    moln.addEventListener("click", function () {
        //moln
       //ändra postition i xled
       aMoln += 5;
       aMoln -= speed;
  })

    requestAnimationFrame(loopen)
 }
 loopen();
 //lyssna på knapparna
 pilv.addEventListener("click", function (e) {
     sol.y -= 5;
 })
 pilh.addEventListener("click", function (e) {
    sol.y += 5;
})
