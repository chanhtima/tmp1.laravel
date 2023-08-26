<?php

namespace Modules\Frontend\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class FrontendController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        return view('frontend::index');
    }
    public function dissertation()
    {
        return view('frontend::dssertation');
    }
    public function dissertationDetails()
    {
        return view('frontend::dissertation-details');
    }
    public function disserAticleDetails()
    {
        return view('frontend::disseraticle-details');
    }
    public function disserAticle()
    {
        return view('frontend::disser-aticle');
    }
    public function DisserVideo()
    {
        return view('frontend::disser-video');
    }
    public function about()
    {
        return view('frontend::about');
    }
    public function contacts()
    {
        return view('frontend::contacts');
    } 

    public function policy()
    {
        return view('frontend::policy');
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('frontend::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        return view('frontend::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        return view('frontend::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        //
    }
}
