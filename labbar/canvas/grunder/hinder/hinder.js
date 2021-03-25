//element vi använder

const canvas = document.querySelector("canvas");

//slå på ritmotorn
var ctx = canvas.getContext("2d");

//ange mått på canvas
canvas.width = 800;
canvas.height = 600;

//figurens egenskaper
var moln = {
    x: 300,
    y: 400,
    bild: new Image()
}
//Ladda in bilder
angry.bild.src = "./angry-bird-icon.png";

//ett hinder
var hinder = {
    x: 800 * Math.random() ,
    y: 600 * Math.random()
}


//Animationsfiguren

function loopen() {
    //sudda ut
    ctx.clearRect(0,0,200,200);
    //rita ut figuren
    ctx.drawImage(angry.bild, angry.x, angry.y);

    //rita ut hinder
    ctx.fillRect(hinder.x, hinder.y, 100, 100)
    requestAnimationFrame(loopen)
}
//starta animationen
loopen();

//lyssna på piltangenter
window.addEventListener("keydown", function (e) {
    //var händer för tangenterna
    switch (e.code) {
        case "Numpad8":
         if (angry.y > 0) {
            if (angry.y > hinder.y + 100) {
                angry.y -= 5; 
                }
         } else {
             console.log("Du krockar med övrevägg");
         }
            break;
        case "Numpad2":
           if (angry.y) {
             if (angry.y < hinder.y - 64) {
                angry.y += 5;
                }
           } 
            break;
        case "Numpad4":
            if (angry.x > 0) {
                if (angry.x > hinder.x + 100) {
                    angry.x -=5; 
                    }
            }
            break;
        case "Numpad6":
            //Inte krocka med väggen till höger
            if (angry.x < 735) {
                //är angry i höjd med hindret?
                if (hinder.y > angry.y + 64 && angry.y > hinder.y + 100) {
                     //inte krocka med hindrets vänterkant
                if (angry.x < hinder.x - 64) {
                    angry.x += 5;   
                }
                }
            }
            break;
    }
    console.log(angry.x, angry.y, hinder.x, hinder.y);
})