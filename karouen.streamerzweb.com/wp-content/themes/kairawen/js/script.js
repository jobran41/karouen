$(document).ready(function($) {
    

}); 


function initMap() { 
 
    var mapDiv = document.getElementById('map');
    var map = new google.maps.Map(mapDiv, {
        center: {lat: 35.632585, lng: 10.082234},
        zoom: 18,
        disableDefaultUI: true
    });
    
    var marker = new google.maps.Marker({
      position: {lat: 35.632585, lng: 10.082234},
      map: map,
    });
}