document.addEventListener("DOMContentLoaded", () => {
    "use strict";
    let setLocation = false;

    function initializeMap () {
        let map = L.map('map', {
            center: [-37.325704, -59.1299634],
            zoom: 17
        });
        L.tileLayer('http://{s}.google.com/vt/lyrs=s,h&x={x}&y={y}&z={z}',{
            subdomains:['mt0','mt1','mt2','mt3'],
            id: 'mapbox/streets-v11',
        }).addTo(map);
        L.marker([-37.325704, -59.1299634]).addTo(map).bindPopup("Centro de acgi opio");
        map.on("click", (e) => {
            let latitude = e.latlng.lat;
            let longitude = e.latlng.lng;
            setLocation = true;
            document.getElementById("latitude").value = latitude;
            document.getElementById("longitude").value = longitude;
            map.eachLayer(function (layer) {
                if (layer._popup && layer._popup._content == "Direccion")
                    map.removeLayer(layer);
            });
            L.marker([latitude, longitude]).addTo(map).bindPopup("Direccion");
        });
    }

    document.getElementById("form").addEventListener("submit", (e) => {
        if (setLocation == false) {
            e.preventDefault();
            alert("Indique su direccion en el mapa.")
        }
    });
    initializeMap();
});