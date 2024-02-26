<div class="container-fluid py-4 pt-5 pb-5 " id="ymap">
    <div class="container py-4">
        <div class="section-title position-relative text-center">
            <h6 class="text-uppercase text-primary mb-3" style="letter-spacing: 3px;">карта</h6>
            <h1 class="font-secondary display-4">Карта главного события</h1>
            <i class="far fa-heart text-dark"></i>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div id="map" style="width: 100%; height: 400px"></div>
            </div>
        </div>
    </div>
</div>


<script defer>
    const mapContainer = document.getElementById('map');

    const observer = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                observer.unobserve(entry.target);
                loadYandexMaps();
            }
        });
    });

    observer.observe(mapContainer);

    function loadYandexMaps() {
        const script = document.createElement('script');
        script.src =
            'https://api-maps.yandex.ru/2.1/?apikey=0809c72d-a4de-4341-b5fd-55340a8130f8&lang=ru_RU&mode=release';
        script.onload = initMap;
        document.body.appendChild(script);
    }

    function initMap() {
        ymaps.ready(() => {
            const myMap = new ymaps.Map("map", {
                center: [47.139179, 39.777534],
                zoom: 11
            });

            const myPlacemark = new ymaps.Placemark([47.139179, 39.777534], {
                balloonContent: 'Восточное ш., 17Б'
            }, {
                preset: 'islands#redIcon',
                iconColor: 'red'
            });

            myMap.geoObjects.add(myPlacemark);
        });
    }
</script>
