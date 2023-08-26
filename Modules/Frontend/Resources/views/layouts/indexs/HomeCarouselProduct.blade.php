@php
    $productCards = [
        [
            'id' => '0',
            'img' => 'img/card-5.png',
            'title' => 'สอนทำวิทยานิพนธ์ สอนทำ Dissertation สอนทำ Thesis',
            'url' => '/dissertation-details',
        ],
        [
            'id' => '1',
            'img' => 'img/card-6.png',
            'title' => 'สอนทำบทความวิจัย (Research Article/ Research Journal)',
            'url' => '/dissertation-details',
        ],
        [
            'id' => '2',
            'img' => 'img/card-7.png',
            'title' => 'สอนการวิเคราะห์ผลทางสถิติ (Statistical Analysis)',
            'url' => '/dissertation-details',
        ],
        [
            'id' => '3',
            'img' => 'img/card-6.png',
            'title' => 'สอนทำรายงานวิจัย (Essay/Assignment/Coursework)',
            'url' => '/dissertation-details',
        ],
  
        [
            'id' => '4',
            'img' => 'img/card-5.png',
            'title' => 'สอน และรับทำแผนธุรกิจ (Business Plan)',
            'url' => '/dissertation-details',
        ],
        [
            'id' => '5',
            'img' => 'img/card-6.png',
            'title' => 'ให้คำแนะนำเลือกผู้ช่วยเขียน Dissertation',
            'url' => '/dissertation-details',
        ],
       
    ];
@endphp
<div class="container ">
    <div class="flex flex-wrap items-center">
        @foreach ($productCards as $index => $card)
        <div class="w-full xtn:w-1/2 lg:w-1/3 p-2 ">
                                <x-frontend::card.Card04Basic :img="$card['img']" :url="$card['url']" :title="$card['title']">
                                </x-frontend>
                            </div>
                @endforeach

</div>