@extends('frontend::config.master')
@section('title')

@section('style')

@endsection

@section('content')
    <main  class="min-h-[69vh]  bg-oc">
        <section class=" pt-12 ">
            <div class="container">
                <div class="mb-2">
                  
                    <h2 class="text-center ">Dissertation Services</h2>
                </div>
                @include('frontend::layouts.indexs.HomeCarouselProduct')

                <div class="pt-10">
                    @include('frontend::layouts.pagination.Pagination01Basic')
                </div>
  
            </div>
        </section>

    </main>
@endsection

@section('script')


@endsection
