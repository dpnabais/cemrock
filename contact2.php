<!doctype html>

<html lang="en">
<head>
	<?php include 'includes/head.inc' ?>
	<script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
	<script>
		var map;
		var cemrock = new google.maps.LatLng(51.032192,-113.964273);
		var MY_MAPTYPE_ID = 'custom_style';
		var iconBase = 'https://maps.google.com/mapfiles/kml/shapes/';

		function addMarker(feature) {
		  var marker = new google.maps.Marker({
		    position: cemrock,
		    icon: iconBase + 'schools_maps.png',
		    map: map
		  });
		}

		function initialize() {
		  var featureOpts = [
		    {
		      stylers: [
		        { hue: '#F1C628' },
		        { visibility: 'simplified' },
		        { gamma: 0.5 },
		        { weight: 0.5 }
		      ]
		    },
		    {
		      elementType: 'labels',
		      stylers: [
		        { visibility: 'on' }
		      ]
		    },
		    {
		      featureType: 'water',
		      stylers: [
		        { color: '#F1C628' }
		      ]
		    },{
					featureType: 'road.highway',
      		elementType: 'geometry',
      		stylers: [
        		{ hue: '#F1C628' },
        		{ saturation: 60 },
        		{ lightness: -20 }
      		]
				}
		  ];


		  var mapOptions = {
		    zoom: 14,
		    center: cemrock,
		    mapTypeControlOptions: {
		      mapTypeIds: [google.maps.MapTypeId.ROADMAP, MY_MAPTYPE_ID]
		    },
		    mapTypeId: MY_MAPTYPE_ID
		  };

		  map = new google.maps.Map(document.getElementById('map-canvas'),
		      mapOptions);

		  var styledMapOptions = {
		    name: 'Custom Style'
		  };

		  var customMapType = new google.maps.StyledMapType(featureOpts, styledMapOptions);

		  map.mapTypes.set(MY_MAPTYPE_ID, customMapType);
		}

		google.maps.event.addDomListener(window, 'load', initialize);

</script>
</head>

<body class="contact">

	<div id="container">
		<div id="header">
			<?php include 'includes/header.inc' ?>
		</div>

	<div id="content">
		<!--############################# -->
		<!--#########  CONTENT ########## -->

		<h1>Contact information</h1>
		<!-- map.google -->
		<div id="map-canvas"></div>
		<p>Address:<br>
		<a href="http://www.maps.google.com/?q=121, 2432, 48 Street SE, Calgary" >
		#121, 2432 - 48 Street SE<br>
		Calgary, Alberta T2B 1M4</a></p>
		<p>Phone: <a href="tel:14032637168" data-rel="external">(403) 263 7168</a></p>
		<p>Fax: (403) 263 2391</p>
		<p>Email: <a href="mailto:cemrock@cemrock.ca">cemrock@cemrock.ca</a></p>


		<!--#########  /CONTENT ######### -->
		<!--############################# -->
	</div>

	<div id="footer">
		<?php include 'includes/footer.inc' ?>
	</div>

</div>

</body>
</html>
