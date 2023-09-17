// Initialize the map
function initMap() {
    const map = new google.maps.Map(document.getElementById("map"), {
      center: { lat: 37.7749, lng: -122.4194 }, // Specify initial map center
      zoom: 10, // Specify initial zoom level
    });
  }