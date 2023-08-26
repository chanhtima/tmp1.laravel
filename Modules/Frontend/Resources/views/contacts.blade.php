@extends('frontend::config.master')
@section('title')

@section('style')

@endsection

@section('content')
    <main  class="min-h-[88vh]">
        <section class=" py-12 bg-oc">
            <div class="container">
                <div class="mb-4">
                    <h2 class="text-34 text-center font-semibold">Contact Us</h2>
                </div>
                <div >
                    <div class="max-w-full mb-8 mt-8 lg:mt-0">
                        <iframe class="w-full rounded-xl"  width="600" height="400" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3875.3261135910216!2d100.56324906524183!3d13.75919694034272!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30e29d4918d39f69%3A0x7c82b5cfabbf1f4a!2sFortune%20Town!5e0!3m2!1sen!2sth!4v1679977584185!5m2!1sen!2sth"  style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <div class="flex flex-wrap  mb-4">
                        <div class="w-full lg:w-1/2 lg:pr-4 lg:border-r-black lg:border-r-2">
                            <h2 class="text-34  font-semibold">Address </h2>  
                            <p class="text-18">Onedisser Fortune Town Branch 1, Ratchadaphisek Road, Din Daeng, Din Daeng, Bangkok 10400</p>
                            
                            <div class="flex items-center mt-4">
                                <a href="{{ url('mailto:Onedisser@gmail.com') }}">
                   
                                    <img src="{{ Module::asset('frontend:img/icon/iconcontact (2).png') }}" class=" w-10 h-10 mr-4" >
                                </a>
                                 <a href="{{ url('mailto:Onedisser@gmail.com') }}" class=" text-18 " >
                                               <p>
                                                   Onedisser@gmail.com
                                                </p> 
                                 </a>
                            </div>
                        <div class="flex items-center mt-4">
                            <a href="{{ url('tel:+668 888 888') }}">
                                <img src="{{ Module::asset('frontend:img/icon/iconcontact (1).png') }}"  class=" w-10 h-10 mr-4">
                            </a>
                            <a href="{{ url('tel:+668 888 888') }}" class=" text-18 " >
                               <p>
        
                                   +668 888 888 (Auto)
                               </p>
                            </a>
                        </div>
                        </div>
                        <div class="w-full lg:w-1/2 lg:pl-16 mt-4 lg:mt-0">
                            <h2 class="text-34  font-semibold"> Follow Us </h2>  
                            <div class="flex items-center mt-4">
                                <a href="{{ url('') }}" class="" >
                                    <img src="{{ Module::asset('frontend:img/Layer_1-1.png') }}" class=" w-10 h-10 mr-4" >
                                </a>
                                <a href="{{ url('') }}" class="" >
                                    <img src="{{ Module::asset('frontend:img/Layer_1-2.png') }}" class=" w-10 h-10 mr-4">
                                </a>
                                <a href="{{ url('') }}" class="" >
                                    <img src="{{ Module::asset('frontend:img/Layer_1-3.png') }}" class=" w-10 h-10 mr-4">
                                </a>
                                <a href="{{ url('') }}" class="" >
                                    <img src="{{ Module::asset('frontend:img/Layer_1-4.png') }}" class=" w-10 h-10 mr-4">
                                </a>
                                
                            </div>
                        </div>
                    </div>
                  
                </div>
            </div>
        </section>

    </main>
@endsection

@section('script')


@endsection
