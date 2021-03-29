const canvas = document.querySelector("canvas");

canvas.width = 800;
canvas.height = 600;
//slå på ritmotron
var ctx = canvas.getContext("2d");

//skapa karta
var karta = [[1, 0, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1],
[1, 0, 0, 1, 1, 1, 1, 1, 1, 1, 1, 1],
[1, 1, 0, 1, 1, 0, 0, 1, 1, 0, 0, 0],
[1, 1, 0, 0, 1, 0, 0, 1, 1, 0, 1, 1],
[1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 1, 1],
[1, 1, 1, 0, 1, 1, 1, 1, 1, 0, 1, 1],
[1, 1, 0, 0, 1, 1, 1, 1, 1, 0, 1, 1],
[1, 0, 0, 1, 1, 1, 1, 1, 1, 0, 1, 1],
[1, 0, 0, 0, 1, 0, 0, 1, 0, 0, 1, 1],
[1, 0, 1, 0, 0, 0, 0, 0, 0, 1, 1, 1],
[1, 0, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1],
];

function ritaKartan() {
    //loopa igenom arrayen
    for (var rad = 0; rad < 12; rad++) {

        for (var kolumn = 0; kolumn < 12; kolumn++) {

            //om "1" rita ut en kloss
            if (karta[rad][kolumn] == 1) {
                ctx.fillRect(rad * 50, kolumn * 50, 50, 50)
            }
        }
    }
}

function loopen() {
    //sudda ut canvas
    ctx.clearRect(0, 0, 800, 600)

    //rita karta
    ritaKartan();
    requestAnimationFrame(loopen);
}

loopen()
