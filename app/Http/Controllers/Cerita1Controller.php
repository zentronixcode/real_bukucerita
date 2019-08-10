<?php

namespace App\Http\Controllers;

use App\Cerita1;
use Illuminate\Http\Request;

class Cerita1Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        echo "au";
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $photo = date('d-m-y').'_'.$file->getClientOriginalName();
            $file->move(public_path().'/photo/',$photo);
        }
        $save = Cerita1::create([
            'title' => $request->input('title'),
            'chapters' => 1,
            'content' => $request->input('content'),
            'photo'=> $photo,
            'read' => 0,
            'rating' => 0
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Cerita1  $cerita1
     * @return \Illuminate\Http\Response
     */
    public function show(Cerita1 $cerita1)
    {
        $data = Story1::where('id_user', $_SESSION['id'])->get();
        return view('ec/update', ['data'=>$data,'data1'=>$data1]);
        return view(show_cerita);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cerita1  $cerita1
     * @return \Illuminate\Http\Response
     */
    public function edit(Cerita1 $cerita1)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cerita1  $cerita1
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cerita1 $cerita1)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cerita1  $cerita1
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cerita1 $cerita1)
    {
        //
    }
}
