@php
    $productCards = [
        [
            'id' => '0',
            'img' => 'img/card-5.png',
            'title' => 'เครื่องมือในการทำวิจัย (Research Instrument)',
            'url' => '/disseraticle-details',
        ],
        [
            'id' => '1',
            'img' => 'img/card-6.png',
            'title' => 'เครื่องมือในการทำวิจัย (Research Instrument)',
            'url' => '/disseraticle-details',
        ],
        [
            'id' => '2',
            'img' => 'img/card-7.png',
            'title' => 'เครื่องมือในการทำวิจัย (Research Instrument)',
            'url' => '/disseraticle-details',
        ],
        [
            'id' => '3',
            'img' => 'img/card-8.png',
            'title' => 'เครื่องมือในการทำวิจัย (Research Instrument)',
            'url' => '/disseraticle-details',
        ],
        [
            'id' => '4',
            'img' => 'img/card-5.png',
            'title' => 'เครื่องมือในการทำวิจัย (Research Instrument)',
            'url' => '/disseraticle-details',
        ],
        [
            'id' => '5',
            'img' => 'img/card-6.png',
            'title' => 'เครื่องมือในการทำวิจัย (Research Instrument)',
            'url' => '/disseraticle-details',
        ],
       
       
    ];
@endphp
<div class="container">

    <div class="la-bg-Carousel">
        <x-frontend::carousel.CarouselMultiple slideName='splide-news'>
            @slot('slideItemList')
            @foreach ($productCards as $index => $card)
                    <x-frontend::carousel.CarouselMultipleItem>
                        @slot('slideItem')
                            <div class="p-2">
                                <x-frontend::card.Card04Basic :img="$card['img']" :url="$card['url']" :title="$card['title']">
                                </x-frontend>
                            </div>
                            @endslot
                        </x-frontend>
                        @endforeach
                        @endslot
                    </x-frontend>
                </div>
                
</div>