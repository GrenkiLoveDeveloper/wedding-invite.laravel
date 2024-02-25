<script src="https://api-maps.yandex.ru/2.1/?apikey=0809c72d-a4de-4341-b5fd-55340a8130f8" type="text/javascript">
</script>
<div class="container-fluid py-4 pt-5 pb-5">
    <div class="container py-4">
        <div class="section-title position-relative text-center">
            <h6 class="text-uppercase text-primary mb-3" style="letter-spacing: 3px;">карта</h6>
            <h1 class="font-secondary display-4">Карта события</h1>
            <i class="far fa-heart text-dark"></i>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div id="map" style="width: 600px; height: 400px"></div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    ymaps.ready(init);

    function init() {
        var myMap = new ymaps.Map("map", {
            center: [55.76, 37.64], // Coordinates of the center of your map
            zoom: 7
        });

        var myPlacemark = new ymaps.Placemark([55.76, 37.64], {}, {
            preset: 'islands#icon',
            iconColor: '#0095b6'
        });

        myMap.geoObjects.add(myPlacemark);
    }
</script>
