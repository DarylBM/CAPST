<?= $this->include('layout/header') ?>
<style>
  .contact_section {
    padding: 50px 0;
  }

  .heading_container {
    text-align: center;
    margin-bottom: 50px;
  }

  .heading_container h2 {
    font-size: 36px;
    color: #333;
    margin-bottom: 20px;
  }

  .row {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
  }

  .col-md-6 {
    flex: 0 0 48%;
    max-width: 48%;
  }

  .form_container {
    background: #f9f9f9;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    margin-bottom: 30px;
  }

  .form_container input[type="text"],
  .form_container input[type="email"] {
    width: 100%;
    padding: 10px;
    margin-bottom: 20px;
    border: 1px solid #ccc;
    border-radius: 5px;
  }

  .btn_box button {
    padding: 10px 20px;
    background: #333;
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
  }

  .map_container {
    position: relative;
    overflow: hidden;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    height: 400px;
  }

  #map {
    width: 100%;
    height: 100%;
  }
</style>

<div></div>
<section class="contact_section layout_padding">
  <div class="container">
    <div class="heading_container">
      <h2>Rental Page</h2>
      <!-- Display user info here -->
    </div>
    <div class="row">
      <div class="col-md-6">
        <div class="form_container">
          <form id="rental_form">
          <div>
  <input type="text" id="location_input" placeholder="Location" />
</div>
<div>
  <input type="text" id="name_input" placeholder="Your Name" />
</div>
<div>
  <input type="text" id="phone_input" placeholder="Phone Number" />
</div>
<div>
  <input type="email" id="email_input" placeholder="Email" />
</div>
<div>
  <input type="datetime-local" id="date_time_input" />
</div>
<div class="btn_box">
  <button type="submit">Submit</button>
</div>

          </form>
        </div>
      </div>
      <div class="col-md-6">
        <div class="map_container">
          <div id="map"></div>
          <div id="time_date_icon" style="cursor: pointer;">
            <img src="clock_icon.png" alt="Clock Icon" onclick="showTimeAndDate()">
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<script>
  function showTimeAndDate() {
    var dateTime = new Date();
    var time = dateTime.toLocaleTimeString();
    var date = dateTime.toLocaleDateString();
    
    // Automatically input time and date into the form
    document.getElementById("location_input").value = time;
    document.getElementById("email_input").value = date;
  }
</script>


<script src="<?= base_url('js/script.js') ?>"></script>
<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
<script src="https://unpkg.com/leaflet-control-geocoder/dist/Control.Geocoder.js"></script>
<script src="https://unpkg.com/leaflet-bookmarks/src/leaflet.bookmarks.js"></script>
<script>
  var map = L.map('map').setView([51.505, -0.09], 13);

  L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
  }).addTo(map);

  var geocoder = L.Control.geocoder().addTo(map);

  var bookmarks = L.control.bookmarks().addTo(map);

  geocoder.on('markgeocode', function (e) {
    var latlng = e.geocode.center;
    map.setView(latlng, map.getZoom());
    var marker = L.marker(latlng, { draggable: true }).addTo(map);
    marker.on('dragend', function (event) {
      var marker = event.target;
      var position = marker.getLatLng();
      document.getElementById('location_input').value = position.lat + ', ' + position.lng;
    });
    bookmarks.addBookmark(e.geocode.name, latlng);
  });

  document.getElementById('rental_form').addEventListener('submit', function (event) {
    event.preventDefault();
    // Here you can handle form submission, like sending data to server
    var formData = {
      location: document.getElementById('location_input').value,
      name: document.getElementById('name_input').value,
      phone: document.getElementById('phone_input').value,
      email: document.getElementById('email_input').value
    };
    console.log(formData); // Just for demonstration, you can replace it with your logic
  });
</script>
