@extends('frontend::config.master')
@section('title')

@section('style')

@endsection

@section('content')
    <main  class="bg-oc py-12  min-h-[69vh]">
  
            <div class="container">
                <div class="mb-4">
                   
                    <h2 class="text-center  mb-4">Disser Video</h2>
                    <p>หลากหลายความรู้เกี่ยวกับการเขียนงานวิทยานิพนธ์ การเขียนงานวิจัย การเขียนบทความวิจัย การเขียนงาน Dissertation การเขียนงาน Thesis การเขียนงาน Journal และเทคนิคต่างๆในการทำวิทยานิพนธ์ จะถูกรวบรวม และเพิ่มไว้ในหน้านี้อย่างต่อเนื่อง เพื่อให้นักศึกษาทุกท่านได้เข้ามาศึกษา และนำความรู้ไปใช้ในการทำงานวิทยานิพนธ์ของท่านเองโดยไม่เสียค่าใช้จ่าย หากพี่ๆน้องๆท่านใด ต้องการเสนอแนะเกี่ยวกับเรื่องที่ต้องการให้ทาง OneDisser จัดทำเป็นพิเศษ สามารถติดต่อเข้ามาได้เลยโดยไม่ต้องเกรงใจนะครับ</p>
 
                </div>
             
                <div class="flex flex-wrap items-center -mx-3 ">
                @php
                    $productCards = [
                        [
                            'modal' => 'modal_0',
                            'img' => 'video.png',
                            'title' => 'Disser Video Name  01 Lorem ipsum 
dolor sit amet, consectetuer',
                            'date' => '21-jun-2023'
                        ],
                        [
                            'modal' => 'modal_1',
                            'img' => 'video.png',
                            'title' => 'Disser Video Name  02 Lorem ipsum 
dolor sit amet, consectetuer',
                            'date' => '21-jun-2023'
                        ],
                        [
                            'modal' => 'modal_2',
                            'img' => 'video.png',
                            'title' => 'Disser Video Name  03 Lorem ipsum 
dolor sit amet, consectetuer',
                             'date' => '21-jun-2023'
                        ],
                        [
                            'modal' => 'modal_3',
                            'img' => 'video.png',
                            'title' => 'Disser Video Name  04 Lorem ipsum 
dolor sit amet, consectetuer',
                            'date' => '21-jun-2023'
                        ],
                        [
                            'modal' => 'modal_4',
                            'img' => 'video.png',
                            'title' => 'Disser Video Name  05 Lorem ipsum 
dolor sit amet, consectetuer',
                             'date' => '21-jun-2023'
                        ],
                        [
                            'modal' => 'modal_5',
                            'img' => 'video.png',
                            'title' => 'Disser Video Name  06 Lorem ipsum 
dolor sit amet, consectetuer',
                            'date' => '21-jun-2023'
                        ],
                    
                    ];
                @endphp
                    @foreach ($productCards as $index => $card)
                    <div class="w-full sm:w-1/2 lg:w-1/3 p-3">
                        <x-frontend::card.Card01VideoModal :modal="$card['modal']" :img="$card['img']" :date="$card['date']" :title="$card['title']">
                        </x-frontend>
                    </div>
                     @endforeach
                </div>
            
            <div class="pt-10">
                @include('frontend::layouts.pagination.Pagination01Basic')
            </div>
       

    </main>


@endsection

@section('script')


@endsection
