@extends('frontend::config.master')
@section('title')

@section('style')

@endsection

@section('content')
    <main class="bg-all">
         {{--Section  About --}}
         <div class="container py-8">
            <div class="flex flex-wrap items-center justify-between -mx-2">
                <div class="w-full md:w-1/2 px-2 mb-4 md:mb-0">
                    <img class="" src="{{ Module::asset("frontend:img/1about.png") }}" alt="About">
                </div>
                <div class="w-full md:w-1/2 px-2">
                    <h2 class=" text-34 font-semibold">About</h2>
                    <h2 class="text-34  font-semibold">Señorita Clinic</h2>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis </p>
                </div>
                <div class="w-full py-6 px-2">
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis  Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet</p>
                </div>
                
            </div>
            <div class="flex flex-wrap items-center justify-between -mx-2">
                <div class="w-full md:w-1/2 px-2 mb-4 md:mb-0">
                    <p class="font-semibold">Lorem ipsum dolor sit amet</p>
                    <h2 class="text-34  font-semibold">Señorita Clinic</h2>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis </p>
                
                </div>
                <div class="w-full md:w-1/2 px-2 flex justify-center md:justify-end ">
                    <img class=" rounded-xl md:w-10/12" src="{{ Module::asset("frontend:img/about1.png") }}" alt="About">
                </div>
                <div class=" w-full px-2 mt-6">
                    <img class=" rounded-xl mx-auto" src="{{ Module::asset("frontend:img/futuristic-corridor 1.png") }}" alt="About">
                </div>
            </div>
        </div>
    {{-- End Section  About --}}
    </main>
@endsection

@section('script')


@endsection
