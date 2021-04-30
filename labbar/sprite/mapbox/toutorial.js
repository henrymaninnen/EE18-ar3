//hitta tabellen
const eTable = document.querySelector('table');
const btn = document.querySelector("button");
//min personliga accesToken
mapboxgl.accessToken = 'pk.eyJ1IjoiaGVucnltYW5pbm5lbjExMiIsImEiOiJja2w2ZHNlMTYwNHp3MnZucDloZ3hjN3FyIn0.LbzF4TYHiTd6NrwSomai2Q'; // replace this with your access token
var map = new mapboxgl.Map({
    container: 'map',
    style: 'mapbox://styles/henrymaninnen112/ckm1xgkhqamx417ljtehfwvva', // replace this with your style URL
    center: [18.080569, 59.309585],
    zoom: 10.7
});

map.on("click", function (e) {

    var marker = new mapboxgl.Marker()
        .setLngLat(e.lngLat)
        .addTo(map);

    //infoga rad i tabellen
    var newRow = eTable.insertRow();
    newRow.insertCell().innerText = e.lngLat.lng;
    newRow.insertCell().innerText = e.lngLat.lat;
    var lastCell = newRow.insertCell();
    lastCell.contentEditable = "true";
    lastCell.innerText = "...";
});

btn.addEventListener("click", function () {
    const eCeller = document.querySelectorAll("td");
    const eCell = document.querySelector("td");

    eCeller.forEach(cell => {
        console.log(cell.innerText);
    });

    //låtsas att vi har ett formulär

    var formData = new FormData();
    formData.append("texten", "Latitude->....")

    fetch("mapbox.php", {
        method: "post",
        body: formData
    })     //skickar
    .then(response => response.then() //tar emot
});


// code from the next step will go here