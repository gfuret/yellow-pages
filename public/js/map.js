$( document ).ready(function() {
   // Location for google map app
   function initialize() {
      var map_canvas = document.getElementById('map_canvas');
      var map_options = {
          center: new google.maps.LatLng($('#xcoord').val(), $('#ycoord').val()),
          zoom: 8,
          mapTypeId: google.maps.MapTypeId.ROADMAP
      }
      var map = new google.maps.Map(map_canvas, map_options)
   }
   google.maps.event.addDomListener(window, 'load', initialize);
   
});