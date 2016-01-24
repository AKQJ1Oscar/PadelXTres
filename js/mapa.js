google.maps.event.addDomListener(window, 'load', init);
var map;
function init() {
    var mapOptions = {
        center: new google.maps.LatLng(11.971313,8.387355),
        zoom: 3,
        zoomControl: true,
        zoomControlOptions: {
            style: google.maps.ZoomControlStyle.DEFAULT,
        },
        disableDoubleClickZoom: true,
        mapTypeControl: true,
        mapTypeControlOptions: {
            style: google.maps.MapTypeControlStyle.HORIZONTAL_BAR,
        },
        scaleControl: true,
        scrollwheel: false,
        panControl: false,
        streetViewControl: false,
        draggable : true,
        overviewMapControl: true,
        overviewMapControlOptions: {
            opened: false,
        },
        mapTypeId: google.maps.MapTypeId.ROADMAP,
        styles: [ { "stylers": [ { "saturation": -100 } ] },{ "featureType": "water", "elementType": "geometry.fill", "stylers": [ { "color": "#0247d0" } ] },{ "elementType": "labels", "stylers": [ { "visibility": "off" } ] },{ "featureType": "poi.park", "elementType": "geometry.fill", "stylers": [ { "color": "#aadd55" } ] },{ "featureType": "road.highway", "elementType": "labels", "stylers": [ { "visibility": "on" } ] },{ "featureType": "road.arterial", "elementType": "labels.text", "stylers": [ { "visibility": "on" } ] },{ "featureType": "road.local", "elementType": "labels.text", "stylers": [ { "visibility": "on" } ] },{ } ],
    }
    var mapElement = document.getElementById('wptmap');
    var map = new google.maps.Map(mapElement, mapOptions);
    var locations = [
        ['San Fernando Open', 'San Fernando Open: 8-12 de abril de 2015', 'undefined', 'undefined', 'undefined', 36.471455,  -6.207912, 'img/solid-pin-yellow.png'],['Barcelona Master', 'undefined', 'undefined', 'undefined', 'undefined', 41.3850639, 2.1734034999999, 'img/solid-pin-yellow.png'],['Málaga Master', 'undefined', 'undefined', 'undefined', 'undefined', 36.721261, -4.4212655, 'img/solid-pin-yellow.png'],['Monaco Master', 'undefined', 'undefined', 'undefined', 'undefined', 43.7384176, 7.4246158, 'img/solid-pin-yellow.png'],['Dubai Master', 'undefined', 'undefined', 'undefined', 'undefined', 25.2048493, 55.2707828, 'img/solid-pin-yellow.png'],['Valencia Master', 'undefined', 'undefined', 'undefined', 'undefined', 39.4699075, -0.37628810000001, 'img/solid-pin-yellow.png'],['Valladolid Open', 'undefined', 'undefined', 'undefined', 'undefined', 41.652251, -4.7245321, 'img/solid-pin-yellow.png'],['La Palma Open', 'undefined', 'undefined', 'undefined', 'undefined', 28.7133828, -17.9057813, 'img/solid-pin-yellow.png'],['Cádiz Open', 'undefined', 'undefined', 'undefined', 'undefined', 36.5270612, -6.2885962, 'img/solid-pin-yellow.png'],['Galicia Open', 'undefined', 'undefined', 'undefined', 'undefined', 42.5750554, -8.1338558, 'img/solid-pin-yellow.png'],['La Nucia Open', 'undefined', 'undefined', 'undefined', 'undefined', 38.612269, -0.12727080000002, 'img/solid-pin-yellow.png'],['Madrid Open', 'undefined', 'undefined', 'undefined', 'undefined', 40.4167754, -3.7037902, 'img/solid-pin-yellow.png'],['Lisboa Open', 'undefined', 'undefined', 'undefined', 'undefined', 38.7222524, -9.1393366, 'img/solid-pin-yellow.png'],['Argentina Open', 'undefined', 'undefined', 'undefined', 'undefined', -29.0953723368776, -60.7096538954346, 'img/solid-pin-yellow.png'],['Córdoba Callenger', 'undefined', 'undefined', 'undefined', 'undefined', 37.8881751, -4.7793835, 'img/solid-pin-yellow.png']
    ];
    for (i = 0; i < locations.length; i++) {
        if (locations[i][1] =='undefined'){ description ='';} else { description = locations[i][1];}
        if (locations[i][2] =='undefined'){ telephone ='';} else { telephone = locations[i][2];}
        if (locations[i][3] =='undefined'){ email ='';} else { email = locations[i][3];}
        if (locations[i][4] =='undefined'){ web ='';} else { web = locations[i][4];}
        if (locations[i][7] =='undefined'){ markericon ='';} else { markericon = locations[i][7];}
        marker = new google.maps.Marker({
            icon: markericon,
            position: new google.maps.LatLng(locations[i][5], locations[i][6]),
            map: map,
            title: locations[i][0],
            desc: description,
            tel: telephone,
            email: email,
            web: web
        });
        link = '';     }

}