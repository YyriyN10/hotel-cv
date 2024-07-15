<?php /* Component Contact Map */  ?>

<link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
<script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>

<div id="contact-map"></div>

<?php /* Map */ if (!empty($map = get_field('site_contacts_addresses', 'options'))) : ?>
  <script>
    var map = L.map('contact-map', {
      scrollWheelZoom: false
    }).setView([<?php echo $map[0]['latitude'] ?>, <?php echo $map[0]['longitude'] ?>], 17);

    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
      attribution: '© OpenStreetMap contributors'
    }).addTo(map);

    <?php foreach ((array) $map as $marker) : ?>
      var marker = L.marker([<?php echo $marker['latitude'] ?>, <?php echo $marker['longitude'] ?>]).addTo(map);
      marker.bindPopup('<div class="editor">' + <?php echo json_encode($marker['info']); ?> + '</div>').openPopup();
    <?php endforeach; ?>
  </script>
<?php /* Map End */ endif; ?>

<?php /* Component Contact Map End */  ?>