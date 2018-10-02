<div class="page-wrapper">
  <div class="container-fluid">



    <div class="row page-titles">
      <div class="col-md-5 col-8 align-self-center">
        <h3 class="text-themecolor">Peta Kenavigasian</h3>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
          <li class="breadcrumb-item active">Peta Kenavigasian</li>
        </ol>
      </div>
    </div>



    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-body">

              <h4 class="card-title text-center">Map</h4>
            <div id="map" style="width:100%;height:380px;"></div>

            <script src="https://maps.googleapis.com/maps/api/js?libraries=places&key="></script>

<!-- AARTsJoe7L_kJ1kK-_nCE_l4PN3rHDHNNg&amp  API KEY-->




            <script type="text/javascript">
            function initialize() {

              var mapOptions = {
                zoom: 7,  //zoom 17
                center: new google.maps.LatLng(-6.1194908, 106.8624483),
                disableDefaultUI: true
              };

              var mapElement = document.getElementById('map');

              var map = new google.maps.Map(mapElement, mapOptions);

              setMarkers(map, officeLocations);

            }

            var officeLocations = [
              <?php
              $data = file_get_contents('http://localhost/disnavv/Adminmenu/getdata');
              $no=1;
              if(json_decode($data,true)){
                $obj = json_decode($data);
                foreach($obj->results as $item){
                  ?>
                  [<?php echo $item->id ?>,
                    '<?php echo $item->nama ?>',
                    '<?php echo $item->kelompok ?>',
                    <?php echo $item->latitude ?>,
                    <?php echo $item->longtitude ?>,
                    <?php //echo $item->lokasi ?>,
                    <?php //echo $item->luas_area ?>,
                    <?php //echo $item->nomordsi ?>,
                    <?php //echo $item->penanggung_jawab ?>,
                    <?php //echo $item->jml_sdm ?>,
                    <?php //echo $item->wktjagaopl ?>,
                    <?php //echo $item->perangkat ?>,
                    <?php //echo $item->lampu ?>,
                    <?php //echo $item->solar_cell ?>,
                    <?php //echo $item->battery ?>,

                  ],




                  <?php
                }
              }
              ?>
            ];

            function setMarkers(map, locations)
            {
              var globalPin = 'assets/images/marker.png';

              for (var i = 0; i < locations.length; i++) {

                var office = locations[i];
                var myLatLng = new google.maps.LatLng(office[3], office[4]);
                var infowindow = new google.maps.InfoWindow({content: contentString});

                var contentString =
                '<div id="content">'+
                '<div id="siteNotice">'+
                '</div>'+
                '<h5 id="firstHeading" class="firstHeading">'+ office[1] + '</h5>'+
                '<div id="bodyContent">'+
                '<a href=detail.php?id='+office[0]+'>Info Detail</a>'+
                '</div>'+
                '</div>';

                var marker = new google.maps.Marker({
                  position: myLatLng,
                  map: map,
                  title: office[1],
                  icon:'assets/images/marker.png'
                });

                google.maps.event.addListener(marker, 'click', getInfoCallback(map, contentString));
              }
            }

            function getInfoCallback(map, content) {
              var infowindow = new google.maps.InfoWindow({content: content});
              return function() {
                infowindow.setContent(content);
                infowindow.open(map, this);
              };
            }

            initialize();
          </script>


        </div>
      </div>
    </div>
  </div>



</div>
</div>

</div>
