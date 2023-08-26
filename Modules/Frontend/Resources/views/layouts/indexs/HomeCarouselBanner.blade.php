@php
    $slides = array(
        [
            'id'=>'0',
            'type'=>'image',
            'src'=>'img/banner1920x720.png',
            'alt'=>'Banner Slide',
            'url'=>'',
        ],
        [
            'id'=>'2',
            'type'=>'youtube',
            'src'=>'https://www.youtube.com/watch?v=l40nk18GUzk&ab_channel=4KOceanWorld',
            'alt'=>'',
            'url'=>'',
        ],
        [
            'id'=>'2',
            'type'=>'image',
            'src'=>'img/banner1920x720.png',
            'alt'=>'',
            'url'=>'',
        ],
        [
            'id'=>'3',
            'type'=>'image',
            'src'=>'img/banner1920x720.png',
            'alt'=>'',
            'url'=>'',
        ],
    )
@endphp

<x-frontend::carousel.CarouselBanner
    slideName='splide-banner-slide'
    :slideData=$slides
></x-frontend>