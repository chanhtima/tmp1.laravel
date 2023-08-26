@extends('frontend::config.master')
@section('title')

@section('style')

@endsection

@section('content')
    <main class="min-h-[88vh]">
        @include('frontend::layouts.indexs.HomeCarouselBanner')
        
        {{-- About --}}
            <section class=" py-12">
    
                    <div class="container ">
                        <div class="about mb-8">
                            <img class="mx-auto w-3/4 md:w-auto mb-4" src="{{ Module::asset("frontend:img/Pic1-1.png") }}" alt="About">
                            <p class=" text-center ">www.ONEDISSER.com คือ สถาบันสอน และให้รวมความรู้ด้านการทำงานวิทยานิพนธ์ การทำวิจัย การทำบทความวิชาการ การทำรายงานวิจัย หรือไม่ว่าจะเป็นการเขียนงาน dissertation การเขียนงาน Thesis และการเขียนงาน Essay Assignment Coursework
                                คณะอาจารย์ของเรามีความเชี่ยวชาญในการทำงานวิทยานิพนธ์ภาษาอังกฤษ และงานวิจัยภาษาอังกฤษ หรือที่เรียกว่า Dissertation และ Thesis  โดยเฉพาะระดับปริญญาโท และเอก
                                เพราะทีมงานของเราจบการศึกษาระดับ ปริญญา โท และเอก จาก UK และมีประสบการณ์ในการทำวิทยานิพนธ์ Dissertation Thesis และ งาน academic journal มากมาย รวมถึง การทำแผนธุรกิจ หรือ Business Plan ในหลากหลาย สาขาวิชา ตั้งแต่ปี 2008 ด้วยประสบการณ์ ความสำเร็จ และความรู้ที่เราสะสมมา ทำให้เรามั่นใจว่า “เราเป็นหนึ่งในผู้ที่เชี่ยวชาญมากที่สุดในไทย ในเรื่องการทำงานวิทยานิพนธ์ และวิจัยภาษาอังกฤษโดยเฉพาะระดับปริญญาโท และเอก”
                                ดังนั้นทาง OneDisser มีความตั้งใจที่จะแบ่งปันประสบการณ์ในการทำวิทยานิพนธ์ และงานวิจัยต่างๆ ผ่านการสอน และการให้คำปรึกษากับนักวิจัย และนักศึกษาที่ต้องการความรู้ เพื่อนำไปใช้ทำงานวิทยานิพนธ์ของตนเองได้จนสำเร็จ</p>
                        </div>
                    </div>
                <div class="bg-about">
                        <div class="container ">
                  
                            <div class="flex flex-wrap items-center justify-between ">
                                <div class="w-full xl:w-1/2 mb-4 xl:mb-0">
                                    <img  class="mx-auto w-3/4 md:w-auto" src="{{ Module::asset("frontend:img/Pic2-1.png") }}" alt="About">
                                </div>
                                <div class=" w-full xl:w-1/2 xl:pl-4">
                                    <h2 class=" mb-4">เทคนิคการทำวิจัย และ งานวิทยานิพนธ์</h2>
                                            @php
                                        $titles = [
                                            'การเลือกหัวข้อวิจัยที่เหมาะสม (Research Topic)',
                                            'การกำหนดวัตถุประสงค์ และคำถามวิจัย (Research Objectives & Research Questions)',
                                            'การทำโคร่งร่างงานวิจัย (Research Concept/ Outline)',
                                            'การเลือกเครื่องมือวิจัย (Research Methodology)',
                                            'การเลือกเครื่องมือทางสถิติ (Statistical analysis tools)',
                                            'การคำนวณกลุ่มตัวอย่าง (Sample Size Calculation)',
                                            'การเลือกผู้ช่วยในการทำ Dissertation ที่ถูกต้อง',
                                            
                                        ];
                                        $image = 'icon-1.png';
                                    @endphp
                            
                                    @foreach($titles as $title)
                                    <div class="flex items-start xtn:items-center mb-4 ">
                                        <img src="{{ Module::asset('frontend:img/icon/' . $image) }}" alt="{{ $title }}" class="mr-4 ">
                                        <p >
                                                {{ $title }}
                                            </p>
                                        </div>
                                
                                    @endforeach
                                  
                                </div>
                            </div>
                        </div>
                </div>
            </section>

        {{-- End About --}}
        {{-- Dissertation Services --}}
            <section class=" bg-gradient-to-b from-accent to-white pt-16">
                <div class="container">
                    <div class="mb-2">
    
                        <h2 class=" text-center">Dissertation Services</h2>
                    </div>
                </div>
                @include('frontend::layouts.indexs.HomeCarouselProduct')
            </section>
        {{-- End Dissertation Services --}}
        {{-- มีความรู้จริง ประสบการณ์ตั้งแต่ปี 2008  --}}
            <section class="pt-12 ">
                <div class="container ">
                    <div class="flex flex-wrap items-center  bg-secondary rounded-xl  p-6 xs:p-8">
                        <div class="w-full lg:w-2/3 lg:pr-4 mb-6 lg:mb-0">
                        <h2 class=" text-40 font-semibold text-primary "> 01</h2>
                        <h2 >มีความรู้จริง ประสบการณ์ตั้งแต่ปี 2008</h2>
                        <p>ทีมอาจารย์สอนทำวิทยานิพนธ์ของเราได้สะสมความรู้ในการทำวิทยานิพนธ์ และการทำบทความวิจัย มาตั้งแต่จบการศึกษาจากประเทศอังกฤษในปี 2008 จนถึง ปัจจุบัน เราได้ช่วยให้ความรู้ และเป็นที่ปรึกษาให้ทั้งนักศึกษา และอาจารย์ในมหาวิทยาลัยดังๆทั่วประเทศ ผ่านการทำงานมาแล้วแทบจะทุกหัวข้อ รู้ขั้นตอน และปัญหาในการทำวิจัยของนักศึกษา และอาจารย์แต่ละท่านเป็นอย่างดี 
                            <span class=" font-semibold"> ลองโทรเข้ามาปรึกษาเราก่อนตัดสินใจได้</span> เชิญเข้ามาพิสูจน์ว่าเราสามารถให้คำปรึกษาที่ถูกต้อง และชัดเจน ตามที่แจ้งไว้มั้ย รับรองว่า เราจะไม่ทำให้ทุกท่านต้องผิดหวัง และเสียเวลาอันมีค่า</p>
                        </div>
                        <div class="w-full lg:w-1/3 ">
                            <img class="mx-auto w-full rounded-xl " src="{{ Module::asset("frontend:img/card-1.png") }}" alt="About">
                        </div>
                    </div>
                </div>
            </section>
        {{-- End มีความรู้จริง ประสบการณ์ตั้งแต่ปี 2008  --}}
        {{-- ช่วยแก้ปัญหาการทำวิทยานิพนธ์ทุกหัวข้อ  --}}
                <section class="pt-12">
                    <div class="container ">
                        <div class="flex flex-wrap items-center bg-primary rounded-xl  p-6 xs:p-8">
                            <div class="w-full lg:w-1/3 mb-6 lg:mb-0 ">
                                <img class="mx-auto w-full  rounded-xl "  src="{{ Module::asset("frontend:img/card-2.png") }}" alt="About">
                            </div>
                            <div class="w-full lg:w-2/3 lg:pl-6 ">
                               <h2 class="text-40  text-secondary font-semibold "> 02</h2>
                               <h2 >ช่วยแก้ปัญหาการทำวิทยานิพนธ์ทุกหัวข้อ</h2>
                               <p>งานวิทยานิพนธ์มีมากมายหลากหลายหัวข้อ ตามสาขาที่นักศึกษาเรียน จากประสบการณ์ของเรา นักศึกษาส่วนใหญ่จะเลือกเรียนในสาขาการตลาด และการจัดการ ซึ่งจะแยกย่อยกันไปอีกหลายสาขา (ดูรูปด้านล่าง) โดยการสอนงานแต่ละสาขา ผู้สอนจะต้องมีความรู้ที่แท้จริงเกี่ยวกับเรื่องนั้นๆ โดยเฉพาะในเชิงทฤษฎีที่เกี่ยวข้อง เพราะเป็นใจความสำคัญในการทำงานวิทยานิพนธ์ และบทความวิจัย ที่ OneDisser พี่ๆน้องๆ สามารถสบายใจได้ว่า จะมีคนคอยให้คำปรึกษาที่ถูกต้องเกี่ยวกับการวางโครงเรื่องในการเขียนงานวิทยานิพนธ์หัวข้อต่างๆ ที่หลากหลาย เพราะทีมอาจารย์ของเราเป็นกลุ่มคนที่ชอบหาความรู้เพิ่มเติม ชอบอ่านหนังสือ มีเทคนิคในการอ่านหนังสือที่ดี และเทคนิคในการถ่ายทอดความรู้ที่ดี ทำให้พี่ๆน้องๆได้ความรู้ที่ถูกต้อง และไม่ต้องเสียเวลาอันมีค่า</p>
                            </div>
                           
                        </div>
                    </div>
                </section>
        {{-- Endช่วยแก้ปัญหาการทำวิทยานิพนธ์ทุกหัวข้อ --}}
       
        {{-- มีตัวตนจริง โปรไฟล์จริง --}}
            <section class="pt-12">
                <div class="container  ">
                    <div class="flex flex-wrap items-center bg-secondary rounded-xl  p-6 xs:p-8">
                        <div class="w-full lg:w-2/3 lg:pr-4 mb-6 lg:mb-0">
                        <h2 class="text-40 text-primary font-semibold"> 03</h2>
                        <h2 >มีตัวตนจริง โปรไฟล์จริง</h2>
                        <p>ทีมอาจารย์ของเรามีตัวตนจริง สามารถโทรคุยได้ นัดเจอได้ ไม่ต้องกังวลว่า จะติดต่อไม่ได้ จะไม่ได้งานตามที่ตกลง โดยเฉพาะงานเขียนบทความวิชาการ หรือแผนธุรกิจ</p>
                        </div>
                        <div class="w-full lg:w-1/3 ">
                            <img class="mx-auto w-full  rounded-xl " src="{{ Module::asset("frontend:img/card-3.png") }}" alt="About">
                        </div>
                    </div>
                </div>
            </section>
        {{-- End มีตัวตนจริง โปรไฟล์จริง --}}
        {{-- ไม่รับงานด่วน  --}}
            <section class="pt-12">
                <div class="container ">
                    <div class="flex flex-wrap items-center bg-primary rounded-xl p-6 xs:p-8">
                        <div class="w-full lg:w-1/3 mb-6 lg:mb-0">
                            <img class="mx-auto w-full  rounded-xl" src="{{ Module::asset("frontend:img/card-4.png") }}" alt="About">
                        </div>
                        <div class="w-full lg:w-2/3 lg:pl-6 ">
                           <h2 class="text-40  text-secondary  font-semibold"> 04</h2>
                           <h2> ไม่รับงานด่วน</h2>
                          <p>เราไม่สามารถรับงานด่วน แบบด่วนภายใน 24 ชม. ได้ เพราะไม่อยากทำให้ต้องผิดหวังกัน ต้องขอบอกพี่ๆน้องๆ ทุกท่านด้วยใจจริงว่า งานเขียนที่เราให้บริการ เช่น งานเขียนแผนธุรกิจ หรือบทความทางวิชาการ Research Journal อื่นๆ ล้วนเป็นงานที่ต้องใช้เวลาเพื่อ หาข้อมูล อ่านวิเคราะห์ และตกผลึก เพื่อจะได้เขียนออกมาในคำพูดของตัวเองได้ โดยไม่ติดลอกงาน ดังนั้นการทำงานแบบนี้ภายใน 24 ชม. สำหรับเรา ถือว่าเป็นเรื่องที่อิมพอสสิเบิ้ล เพราะไหนจะหาข้อมูล จะตกผลึก จะเขียนแล้ว ยังต้องมีการตรวจเช็คความเรียบร้อย เพื่อให้งานออกมาดี ไม่ทำให้ลูกค้าผิดหวัง เสียเวลา ดังนั้นเราขอให้พี่ๆน้องๆ ช่วยเผื่อเวลาในการให้เราช่วยทำงานเขียนเชิงวิชาการทุกชนิด เพื่อความเรียบร้อย และมีมาตรฐาน</p>
                        </div>
                       
                    </div>
                </div>
            </section>
        {{-- End ไม่รับงานด่วน  --}}
         {{-- การตลาด --}}
         <section class="pt-12">
            <div class="container">
                <div class="flex flex-wrap ">
                    <div class="w-full md:w-1/2 lg:w-1/3 px-6  lg:border-r border-black">
                        <h2 class="  text-center mb-4">การตลาด</h2>
                  
                        @php
                        $titles = [
                           'Ecommerce',
                           'Digital Communication',
                           'Digital Marketing',
                           'International Marketing',
                           'Retail Marketing',
                           'Service Marketing',
                           'B2B Marketing',
                           
                        ];
                        $image = 'icon-3.png';
                        @endphp
                        
                        @foreach($titles as $title)
                            <div class="flex items-start sm:items-center mb-6 ">
                                <img src="{{ Module::asset('frontend:img/icon/' . $image) }}" alt="{{ $title }}" class="mr-6 w-7 ">
                                <p >
                                    {{ $title }}
                                </p>
                            </div>
                        @endforeach
                    
                    </div>
                    <div class="w-full md:w-1/2 lg:w-1/3 px-6  lg:border-r border-black">
                        <h2 class=" text-center mb-6">การจัดการ</h2>
                        @php
                            $titles = [
                            'MBA / Management',
                            'Digital Communication',
                            'HR Management',
                            'Supply Chain Management',
                            'IT Management',
                            'Entrepreneurship',
                            'Innovation Management',
                            'Risk Management / Retail Management '
                            
                            ];
                            $image = 'icon-3.png';
                        @endphp
                        
                        @foreach($titles as $title)
                            <div class="flex items-start sm:items-center mb-6 ">
                                <img src="{{ Module::asset('frontend:img/icon/' . $image) }}" alt="{{ $title }}" class="mr-6 w-7 ">
                                <p >
                                    {{ $title }}
                                </p>
                            </div>
                        @endforeach
                    
                    </div>
                    <div class="w-full md:w-1/2 lg:w-1/3 px-6 ">
                        <h2 class=" text-center mb-4">สาขาอื่นๆ</h2>
                        @php
                            $titles = [
                            'Finance',
                            'Accounting ',
                            'Laws',
                            'Economics',
                            'Psychology',
                            
                            
                            ];
                            $image = 'icon-3.png';
                        @endphp
                        
                        @foreach($titles as $title)
                            <div class="flex items-start sm:items-center mb-6">
                                <img src="{{ Module::asset('frontend:img/icon/' . $image) }}" alt="{{ $title }}" class="mr-6 w-7 ">
                                <p >
                                    {{ $title }}
                                </p>
                            </div>
                        @endforeach
                    
                    </div>
                   
                    
                </div>
            </div>
           </section>
        {{-- ENd การตลาด --}}
        {{--  ลูกค้าคาดหวังอะไรจากเราได้บ้าง ? --}}
          <section class="pt-12">
            <div class="container">
                <h2 class="text-center"> ลูกค้าคาดหวังอะไรจากเราได้บ้าง ? </h2>
               <div class="flex flex-wrap mx-[1.5rem] ">
                 @php
                    
                    $Number = [
                        'icontext (2).png','icontext (3).png', 'icontext (4).png','icontext (5).png',
                                'icontext (6).png','icontext (1).png',
                    
                    ];
                
                    $Text = [
                        'ความรู้ และคำแนะนำที่ถูกต้อง จากทีม อจ. ตัวจริง ประสบการณ์โค้ชวิทยานิพนธ์ตั้งแต่ปี 2008 จากประเทศอังกฤษ',
                        ' การช่วยเหลือในการวางโครงงานวิทยานิพนธ์ที่ถูกต้องตามหลักสูตรมหาวิทยาลัยชั้นนำ และการสร้างกรอบแนวคิดที่สอดคล้องกับหัวข้อวิทยานิพนธ์ และทฤษฎีที่เกี่ยวข้อง',
                        'หัวข้อวิทยานิพนธ์ที่ไม่จำเจ แปลกใหม่ ตรงตามความต้องการของนักวิจัย พร้อมข้อมูลสนับสนุน ทำให้ไม่ต้องแก้ไปแก้มา ',
                        'งานเขียนวิทยานิพนธ์ที่มีคุณภาพ เนื้อหาคุณภาพ ภาษาเขียนถูกต้องตามหลักวิชาการ',
                        'แนะนำวิธีเขียนวิทยานิพนธ์ภาษาอังกฤษยังไง ไม่ให้ติดลอกงานคนอื่น และวิธีแก้การลอกงานวิทยานิพนธ์',
                        'จำนวนงานวิจัยสำหรับอ้างอิง ที่เหมาะสมกับการทำงานวิทยานิพนธ์แต่ละเล่ม และวิธีการทำ list of references ที่ถูกต้องตามแต่ละประเทศ แต่ละสไตล์',

                    ];
                @endphp
                @foreach($Number as $index => $Numbers)
                <div class="w-full  sm:w-1/2 md:w-1/2 lg:w-1/3 text-center px-6 pt-6">
                        <img src="{{ Module::asset('frontend:img/icon/' . $Numbers) }}" alt="{{$Text[$index]}}" class="mx-auto w-20  md:w-24 mb-6">
                        <p >
                            {{$Text[$index]}}
                        </p>
                </div>
                @endforeach
               </div>
            </div>
          </section>
        {{-- End  ลูกค้าคาดหวังอะไรจากเราได้บ้าง ? --}}
        {{-- Dissertation Services --}}
                <section class=" bg-gradient-to-b from-accent to-white pt-12 mt-12">
                    <div class="container">
                        <div class="xtn:flex items-center justify-between mb-2">
                            <div>
                                {{-- <p class=" bg-secondary rounded-full w-36 text-center text-18 font-semibold ">Blog</p> --}}
                                <h2 class="mb-3 xtn:mb-0">
                                    Disser Article
                                </h2>
                            </div>
                            <div class="flex xtn:justify-end ">
                                <x-frontend::button.Button01LeftIcon
                                img='icon-2.png'
                                url='disser-aticle'
                                title='See More'
                                />
                            </div> 
                        </div>
                    </div>
                    <div class="px-4 md:px-0">
                        @include('frontend::layouts.indexs.HomeCarouselNews')
                    </div>
                    
                </section>
        {{-- End Dissertation Services --}}
        {{-- Video --}}
            <section class="pt-12">
                <div class="container">
                    <div class="xtn:flex items-center justify-between mb-4">
                       
                        <div >
                            <h2 class=" mb-3 xtn:mb-0">
                                Disser Video
                            </h2>
                        </div>
                        <div class="flex xtn:justify-end ">
                            <x-frontend::button.Button01LeftIcon
                            img='icon-2.png'
                            url='/disser-video'
                            title='See More'
                            />
                        </div> 
                    </div>
                    @include('frontend::layouts.indexs.HomeCarouselVideo')
               
      
                </div>

            </section>
        {{-- End video --}}
        {{-- Guarantee Quality  --}}
            <section class="pt-12 pb-8 level">
                <div class="container">
                    <h2 class=" mb-4 text-center ">Guarantee Quality
                    </h2>
                <div class="flex flex-wrap  mb-6">
                  
                        <div class="w-full tn:w-1/2 md:w-1/3 xl:w-1/5 p-4 max-h-full">
                            <img src="{{ Module::asset('frontend:img/textrun (1).png') }}" alt="Dissertation Projects" class=" w-20 md:w-28 mx-auto">
                            <div class="text-center mt-4">
                                <h4>  Dissertation Projects</h4>
                                <h2 class=" font-normal textRun" data-value="1080">
                                    0 
                                </h2>
                               
                            </div>
                        </div>
                        <div class="w-full tn:w-1/2 md:w-1/3 xl:w-1/5 p-4 max-h-full">
                            <img src="{{ Module::asset('frontend:img/textrun (2).png') }}" alt="Dissertation Projects" class=" w-20 md:w-28 mx-auto">
                            <div class="text-center mt-4">
                                <h4> Essay Projects</h4>
                                <h2 class=" font-normal  textRun" data-value="1800">
                                    0 
                                </h2>
                              
                            </div>
                        </div>
                        <div class="w-full tn:w-1/2 md:w-1/3 xl:w-1/5 p-4 max-h-full">
                            <img src="{{ Module::asset('frontend:img/textrun (3).png') }}" alt="Dissertation Projects" class=" w-20 md:w-28 mx-auto">
                            <div class="text-center mt-4">
                                <h4> Journal Projects</h4>
                                <h2 class=" font-normal  textRun" data-value="900">
                                    0 
                                </h2>
                                <p class="p-0">
                                    (5/months since 2008)
                                </p>
                            </div>
                        </div>
                        <div class="w-full tn:w-1/2 md:w-1/3 xl:w-1/5 p-4 max-h-full">
                            <img src="{{ Module::asset('frontend:img/textrun (4).png') }}" alt="Dissertation Projects" class=" w-20 md:w-28 mx-auto">
                            <div class="text-center mt-4">
                                <h4>'A' Grade Project</h4>
                                 <h2 class="  font-normal  textRun" data-value="3780">
                                    0 
                                 </h2>
                               
                            </div>
                        </div>
                        <div class="w-full tn:w-1/2 md:w-1/3 xl:w-1/5 p-4 max-h-full">
                            <img src="{{ Module::asset('frontend:img/textrun (5).png') }}" alt="Dissertation Projects" class=" w-20 md:w-28 mx-auto">
                            <div class="text-center mt-4">
                                <h4>Return Customers</h4>
                                 <h2 class=" font-normal textRun" data-value="98">
                                    0 %
                                 </h2>
                             
                            </div>
                        </div>
                </div>
                </div>
            </section>
        {{--End Guarantee Quality --}}



    </main>
    
@endsection
    
@section('script')
<script src="{{ Module::asset('frontend:js/index.min.js') }}"></script>

@endsection
    