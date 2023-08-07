<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Mapa OpenLayers com Geolocalização e Ícone de Pessoa Palito</title>
    <link rel="stylesheet" href="https://openlayers.org/en/v6.6.1/css/ol.css" type="text/css">
    <script src="https://openlayers.org/en/v6.6.1/build/ol.js"></script>
    <style>
      /* Defina a altura do mapa */
      #map {
        padding: 10px;
        height: 1000px;
        width: 100%;
      }
    </style>
  </head>
  <body>
    <div id="map"></div>
    <script type="text/javascript">
      // Defina as coordenadas do centro do mapa
      var center = ol.proj.fromLonLat([-43.172896, -22.906847]);
      
      // Defina o ícone de pessoa palito
      var personIcon = new ol.style.Style({
        image: new ol.style.Icon({
          anchor: [0.5, 1],
          src: 'https://i.pinimg.com/originals/0f/61/ba/0f61ba72e0e12ba59d30a50295964871.png',
          scale: 1 // Defina a escala inicial do ícone de pessoa palito
        })
      });
      // Defina as coordenadas do trabalhador
      var workerCoords = ol.proj.fromLonLat([-43.173124, -22.906926]);

   
      var jobIcon = new ol.style.Style({
        image: new ol.style.Icon({
          anchor: [0.5, 1],
          src: 'https://cdn-icons-png.flaticon.com/512/732/732952.png',
          scale: 0.5 // Defina a escala inicial do ícone da pasta de advogado
        })
      });

        // Crie a camada do trabalhador
        var workerLayer = new ol.layer.Vector({
          source: new ol.source.Vector({
            features: [
              new ol.Feature({
                geometry: new ol.geom.Point(workerCoords),
                name: 'Trabalhador'
              })
            ]
          }),
          style: jobIcon
        });
      
      // Crie o mapa
      var map = new ol.Map({
        target: 'map',
        layers: [
          new ol.layer.Tile({
            source: new ol.source.OSM()
          })
        ],
        view: new ol.View({
          center: center,
          zoom: 20
        })
      });
      
// Adicione a geolocalização do usuário
if ("geolocation" in navigator) {
  navigator.geolocation.watchPosition(function(position) {
    // Defina as coordenadas do usuário
    var userCoords = ol.proj.fromLonLat([position.coords.longitude, position.coords.latitude]);
    
    // Defina as coordenadas do trabalhador
    var workerCoords = ol.proj.fromLonLat([position.coords.longitude + 0.0011, position.coords.latitude + 0.0051]);

    // Crie a camada do ícone de pessoa palito
    var personLayer = new ol.layer.Vector({
      source: new ol.source.Vector({
        features: [
          new ol.Feature({
            geometry: new ol.geom.Point(userCoords),
            name: 'Pessoa'
          })
        ]
      }),
      style: personIcon
    });
    

    // Crie a camada do trabalhador
    var workerLayer = new ol.layer.Vector({
      source: new ol.source.Vector({
        features: [
          new ol.Feature({
            geometry: new ol.geom.Point(workerCoords),
            name: 'Trabalhador'
          })
        ]
      }),
      style: jobIcon
    });

    // Adicione a camada do ícone de pessoa palito ao mapa
    map.addLayer(personLayer);
    // Adicione a camada do trabalhador ao mapa
    map.addLayer(workerLayer);

    // Atualize o centro do mapa para as coordenadas do usuário
    map.getView().setCenter(userCoords);
  });
  
  // Adicione um evento de mudança de zoom ao mapa
  map.on('moveend', function() {
    // Obtenha o zoom atual do mapa
    var zoom = map.getView().getZoom();
    
    // Calcule a nova escala do ícone de pessoa palito
    var scale = Math.max(0.1, Math.min(1, 1 - (zoom - 15) * 0.1));
    
    // Atualize a escala do ícone de pessoa palito
    personIcon.getImage().setScale(scale);

    
  });
}
    </script>

<script>
  // Obtenha a permissão do usuário para usar a localização
  navigator.geolocation.getCurrentPosition(function(position) {
    // Obtém as coordenadas do usuário
    var userCoords = position.coords.latitude + ',' + position.coords.longitude;
  
    // Crie o link do Google Maps com as coordenadas do usuário
    var googleMapsLink = 'https://www.google.com/maps/search/?api=1&query=' + userCoords;
    
    // Crie um elemento <a> para exibir o link
    var linkElement = document.createElement('a');
    linkElement.href = googleMapsLink;
    linkElement.textContent = 'Abrir no Google Maps';
    
    // Adicione o elemento ao corpo do documento
    document.body.appendChild(linkElement);
  });
</script>

  </body>
</html>
