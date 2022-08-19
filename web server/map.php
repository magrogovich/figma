<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.8.0/dist/leaflet.css" integrity="sha512-hoalWLoI8r4UszCkZ5kL8vayOGVae1oxXe/2A4AO6J9+580uKHDO3JdHb7NzwwzK5xr/Fs0W40kiNHxM9vyTtQ==" crossorigin="" />
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body> 


    <?php
        $content = file_get_contents("http://192.168.1.18:7777/");
        $json = json_decode($content, true);
        $x = $json['lat'];
        $y = $json['lng'];
    ?>

    <div id="map"></div>

    <script src="https://unpkg.com/leaflet@1.8.0/dist/leaflet.js" integrity="sha512-BB3hKbKWOc9Ez/TAwyWxNXeoV9c1v6FIeYiBieIWkpLjauysF18NzgR1MBNBXf8/KABdlkX68nAhlwcDFLGPCQ==" crossorigin=""></script>
    <script>
        let mapOption = {
            center:[<?= $x ?>, <?= $y ?>],
            zoom:10
        }

        let map = new L.map('map',mapOption);

        let layer = new L.TileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png')
        let marker = new L.Marker([<?= $x ?>,<?= $y ?>])
        marker.addTo(map)
        map.addLayer(layer)
    </script>
</body>
</html>