<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Artesaos\SEOTools\Facades\SEOMeta;

class HomeController extends Controller
{



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function about()
    {
        SEOMeta::setTitle('About us');
        return view('home.about');
    }
    public function index()
    {
        SEOMeta::setTitle('Home');
        return view('home.index');
    }

    public function committee()
    {
        SEOMeta::setTitle('Our Committee');
        return view('home.committee');
    }

    public function objectives()
    {
        SEOMeta::setTitle('Our Objectives');
        return view('home.objectives');
    }

    public function projects()
    {
        SEOMeta::setTitle('Our Projects and Plans');
        return view('home.projects');
    }

    public function galleryRinpoche()
    {
        SEOMeta::setTitle('Gallery of Jikdral Thinley Rinpoche');
        return view('home.gallery-of-jikdral-rinpoche');
    }

    public function thechuNgyarngaPuja()
    {
        SEOMeta::setTitle('Thechu and Ngyarnga Puja');
        return view('home.thechu-and-ngyarnga-puja');
    }

    public function letterOfRinpoche()
    {
        SEOMeta::setTitle('Letter of Rinpoche');
        return view('home.letter-of-rinpoche');
    }

    public function donation()
    {
        SEOMeta::setTitle('Donation');
        return view('home.donation');
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
