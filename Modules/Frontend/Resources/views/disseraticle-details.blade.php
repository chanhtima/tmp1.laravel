@extends('frontend::config.master')
@section('title')

@section('style')

@endsection

@section('content')
<main class="bg-oc py-12  min-h-[69vh]">
        
            <div class="container">
                <div class="mb-4">
                    <div class="flex items-center justify-center bg-secondary rounded-full  mx-auto w-52 py-1 mb-4">
                        <img src="{{ Module::asset('frontend:img/Date_today.png') }}"  class="mr-2 w-4">
                        <p class="text-18 font-semibold"> 21-jun-2023</p>
                    </div>
                    <h2 class=" text-center ">เครื่องมือในการทำวิจัย (Research Instrument)</h2>
                </div>
                <div class="flex  flex-wrap items-center">
                    <div class="w-full lg:w-1/3 mb-4 lg:mb-0">
                        <img class="w-full rounded-xl"  src="{{ Module::asset("frontend:img/card-8.png") }}" alt="disseraticle-details w-full rounded-xl ">
                    </div>
                    <div class="w-full lg:w-2/3 pl-0 lg:pl-10">
                    <p>โดยทั่วไปแล้วรูปแบบของการทำวิจัยนั้นจะถูกแบ่งออกเป็น 2 กลุ่มหลักๆ คือ การทำวิจัยแบบนิรนัย (Deductive Approach) และ การทำวิจัยแบบอุปนัย (Inductive Approach) โดย Deductive Approach จะเป็นรูปแบบการทำวิจัยที่ตั้งต้นจากทฤษฏีหรือข้อมูลที่มีอยู่ จากนั้นทำการกำหนดสมมุติฐาน ทดสอบ และยืนยันสมมุติฐาน จะเห็นได้ว่ารูปแบบการวิจัยนี้เป็นการเริ่มต้นจากหลักการ ทฤษฎี หรือข้อมูลที่มีอยู่ในภาพกว้างก่อนที่จะจำกัดให้ค่อยๆแคบลงไปสู่เรื่องที่ทำการศึกษา โดยส่วนมากผลที่ได้จะออกมาในเชิงปริมาณ (Quantitative) ซึ่งจะตรงข้ามกับ Inductive Approach ที่เริ่มจากข้อมูลที่ต้องการทำวิจัยเป็นหัวข้อที่แคบและชัดเจน ก่อนที่จะค่อยๆกว้างขึ้นโดยการหาข้อมูลที่เกี่ยวข้องในมุมมองที่กว้าง ก่อนที่จะทำการวางรูปแบบข้อมูลที่ได้ ด้วยการกำหนดสมมุติฐานที่เป็นไปได้ และนำไปสู่แนวคิดหรือทฤษฎีในขั้นตอนสุดท้าย โดยส่วนมากการทำวิจัยแบบ Inductive Approach มักจะออกมาในเชิงคุณภาพ (Qualitative)</p>
                    </div>

                </div>
      

    </main>
@endsection

@section('script')


@endsection
