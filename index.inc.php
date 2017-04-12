var map;
var options = {
enableHighAccuracy: true,
timeout: 5000,
maximumAge: 0
};
function error(err) {
console.warn('ERROR(' + err.code + '): ' + err.message);
}

function showDiv(divName) {
document.getElementById(divName).style.display = "block";
}
function hideDiv(divName) {
document.getElementById(divName).style.display = "none";
}

$(function() {
$("#divFaixaPreco").dialog({
height: 300,
width: 400,
zIndex: 999,
autoOpen: false,
modal: true
});
$("#divQuarto").dialog({
height: 300,
width: 400,
zIndex: 999,
autoOpen: false,
modal: true
});
$("#divSuite").dialog({
height: 300,
width: 400,
zIndex: 999,
autoOpen: false,
modal: true
});
$("#divFaixaArea").dialog({
height: 300,
width: 400,
zIndex: 999,
autoOpen: false,
modal: true
});
$("#divVaga").dialog({
height: 300,
width: 400,
zIndex: 999,
autoOpen: false,
modal: true
});
$("#divFaixaArea").dialog({
height: 300,
width: 400,
zIndex: 999,
autoOpen: false,
modal: true
});
$("#divImovelDetail").dialog({
height: 320,
width: 'auto', // overcomes width:'auto' and maxWidth bug
maxWidth: 300,
zIndex: 999,
autoOpen: false,
modal: true,
fluid: true, //new option
resizable: false
});
$("#divFilterDetail").dialog({
zIndex: 999,
autoOpen: false,
width: 'auto', // overcomes width:'auto' and maxWidth bug
height: 300,
maxWidth: 400,
modal: false,
fluid: true, //new option
resizable: false
});
/*$("#slider-range").slider({
range: true,
min: 0,
max: 5000000,
values: [75000, 3000000],
slide: function(event, ui) {
$("#amount").val("R$" + ui.values[0] + " - R$" + ui.values[1]);
}
});
$("#amount").val("$" + $("#slider-range").slider("values", 0) +
" - $" + $("#slider-range").slider("values", 1));

$("#slider-range1").slider({
range: true,
min: 0,
max: 1000,
values: [50, 200],
slide: function(event, ui) {
$("#amount1").val(ui.values[0] + '-' + ui.values[1]);
}
});
$("#amount1").val("$" + $("#slider-range1").slider("values", 0) +
" - $" + $("#slider-range1").slider("values", 1));*/
viewController.showFilter();
//viewController.showGrid1();
var mapOptions = {
zoom: 14,
disableDefaultUI: true,
center: new google.maps.LatLng(<?php echo $mediaLat; ?>, <?php echo $mediaLon; ?>),
mapTypeId: google.maps.MapTypeId.ROADMAP,

styles: [
{
"featureType": "all",
"elementType": "geometry.fill",
"stylers": [
{
"visibility": "on"
}
]
},
{
"featureType": "administrative.province",
"elementType": "geometry.stroke",
"stylers": [
{
"visibility": "on"
}
]
},
{
"featureType": "landscape",
"elementType": "geometry.fill",
"stylers": [
{
"visibility": "on"
},
{
"color": "#dcdcdc"
},
{
"saturation": "0"
},
{
"lightness": "25"
},
{
"gamma": "1.00"
}
]
},
{
"featureType": "poi.park",
"elementType": "geometry.fill",
"stylers": [
{
"visibility": "on"
},
{
"color": "#dbe4ab"
}
]
},
{
"featureType": "road.highway",
"elementType": "geometry.fill",
"stylers": [
{
"color": "#f6cc90"
}
]
},
{
"featureType": "road.highway",
"elementType": "geometry.stroke",
"stylers": [
{
"color": "#f4c179"
},
{
"weight": "0.75"
}
]
},
{
"featureType": "road.highway.controlled_access",
"elementType": "geometry.fill",
"stylers": [
{
"color": "#f8afa8"
}
]
},
{
"featureType": "road.arterial",
"elementType": "geometry.fill",
"stylers": [
{
"color": "#f8eba8"
}
]
},
{
"featureType": "water",
"elementType": "geometry.fill",
"stylers": [
{
"color": "#a8c9f8"
}
]
}
]


};
map = new google.maps.Map(document.getElementById('map_canvas'), mapOptions);

viewController.showFull();
});

