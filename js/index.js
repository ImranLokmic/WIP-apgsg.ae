function sendEmail(){
    document.getElementById("emailform").submit();
}

function myMap() {
    var mapProp= {
      center:new google.maps.LatLng(25.1188296,55.3756951),
      zoom:17,
    };
       var marker = new google.maps.Marker({
        position: new google.maps.LatLng(25.1188296,55.3756951),
        map: mapProp,
        title: "APGSG"
    });
    var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
    }