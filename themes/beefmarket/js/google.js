function initialize() {
  var mapProp = {
    center: new google.maps.LatLng(19.09880338457021,-104.32266121729812),
    zoom:19,
    mapTypeId:google.maps.MapTypeId.ROADMAP
  };
  
  var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
  var objConfigMarker = {
	position: mapProp.center, 
	map: map
	}
	var gMarker = new google.maps.Marker (objConfigMarker);

}
google.maps.event.addDomListener(window, 'load', initialize);