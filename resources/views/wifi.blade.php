<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
        integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
        crossorigin="" />
    <style>
        #mapid {
            height: 180px;
        }
    </style>
</head>

<body>
    <div id="mapid" style="width: 600px; height: 400px;"></div>
    
    <div id="app" class="container">
    <div class="row">    
        <div class="col-md-9">
        <!-- The map goes here -->
            <span v-bind:title="message">
                Hover your mouse over me for a few seconds
                to see my dynamically bound title!
            </span>
        </div>    
        <div class="col-md-3">
        <!-- The layer checkboxes go here -->
        </div>  
    </div>

    
    </div>

    <!-- Make sure you put this AFTER Leaflet's CSS -->
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
        integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
        crossorigin=""></script>

    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>

    <script>
        var app = new Vue({
            el: '#app',
            // data: {
            //     message: 'You loaded this page on ' + new Date().toLocaleString()
            // }
            data(){
                return{
                    message: 'You loaded this page on ' + new Date().toLocaleString()
                }
            },
            created(){
                var mymap = L.map('mapid').setView([51.505, -0.09], 13);

                L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
                    maxZoom: 18,
                    attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
                        '<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
                        'Imagery © <a href="h   ttps://www.mapbox.com/">Mapbox</a>',
                    id: 'mapbox/streets-v11',
                    tileSize: 512,
                    zoomOffset: -1
                }).addTo(mymap);

                var marker = L.marker([51.5, -0.09]).addTo(mymap);
            }
        })
    </script>
    <script>
        // var mymap = L.map('mapid').setView([51.505, -0.09], 13);

        // L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
        //     maxZoom: 18,
        //     attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
        //         '<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
        //         'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
        //     id: 'mapbox/streets-v11',
        //     tileSize: 512,
        //     zoomOffset: -1
        // }).addTo(mymap);

        // var marker = L.marker([51.5, -0.09]).addTo(mymap);
        // var marker = L.marker([51.51, -0.09]).addTo(mymap);
    </script>
</body>

</html>