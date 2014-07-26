$( document ).ready(function() {

   // Run function to get JSON objects for the input what and where
   // with company name + category name and location data (county + city)
   autocomplete('what', 'companies');
   autocomplete('where', 'location');

   function autocomplete(input, page ){


               

         var what = $('#'+input).val();
         var dataString = input + '='+ what;
         $.ajax({
            dataType: "json",
            type: "POST",         
            url: '/directory/public/pages/' + page,
            data: dataString,
            success: function(response){

               autocompleteInput = [];
               $.each(response, function( index, value ) {
                     autocompleteInput.push(value.name);
               });

               $( "#" + input ).autocomplete({
                  source: autocompleteInput
               });       
            },
            error: function(){
               console.log('This time you will have to complete the sentence in the what input ');
            }
         });
   }

   // Load info in the google map app
   function initialize() {
      var map_canvas = document.getElementById('map_canvas');
      var map_options = {
          center: new google.maps.LatLng($('#xcoord').val(), $('#ycoord').val()),
          zoom: 8,
          mapTypeId: google.maps.MapTypeId.ROADMAP
      }
      var map = new google.maps.Map(map_canvas, map_options)
   }




});

   //Set the language
   //lang has to match with the letters in the database
   function setLanguage(lang) {
      console.log('at least I am here');
      document.cookie="lang=" + lang;
      location.reload();
   }