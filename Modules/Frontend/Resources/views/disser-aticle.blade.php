@extends('frontend::config.master')
@section('title')

@section('style')

@endsection

@section('content')
    <main  class="bg-oc py-12  min-h-[69vh]">
            <div class="container">
                <div class="mb-4">
                 
                    <h2 class="text-center">Disser Article</h2>
                </div>
               <div class="mb-4">
              
                @include('frontend::components.card.Card01Horizontal ')
               </div>
               
               <div class="flex flex-wrap items-center -mx-4">
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
                    
                        @foreach ($productCards as $index => $card)
                        <div class="w-full xtn:w-1/2 lg:w-1/3 p-2 ">
                            <x-frontend::card.Card04Basic :img="$card['img']" :url="$card['url']" :title="$card['title']">
                            </x-frontend>
                        </div>
                         @endforeach
                    </div>
                <div class="pt-10">
                    @include('frontend::layouts.pagination.Pagination01Basic')
                </div>
  
            </div>
 

    </main>
@endsection

@section('script')


@endsection
