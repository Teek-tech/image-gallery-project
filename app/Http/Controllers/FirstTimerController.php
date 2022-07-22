<?php

namespace App\Http\Controllers;

use App\Models\FirstTimer;
use Illuminate\Http\Request;

class FirstTimerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.first-timer');
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
         $validate = $request->validate([
            "first_name" => "required",
            "last_name" => "required",
            "email" => "required",
            "phone" => "required|min:11|max:11",
            "gender" => "required",
            "age" => "required",
            "marital_status" => "required",
            "residence" => "required",
            "bustop" => "required",
            "bos_address" => "required",
            "occupation" => "required",
            "visit" => "required"
        ]);
        FirstTimer::create($validate, [
            "reg_date" => date('Y-m-d')
        ]);
        
        return back()->with('success', "You have successfully added ".$validate['first_name']." to First Timers");
       
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FirstTimer  $firstTimer
     * @return \Illuminate\Http\Response
     */
    public function show(FirstTimer $firstTimer)
    {
        return view('admin.ftm-list', [
            "members"  => FirstTimer::orderBy('id', 'desc')->get()
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FirstTimer  $firstTimer
     * @return \Illuminate\Http\Response
     */
    public function edit(FirstTimer $firstTimer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\FirstTimer  $firstTimer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FirstTimer $firstTimer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FirstTimer  $firstTimer
     * @return \Illuminate\Http\Response
     */
    public function destroy(FirstTimer $firstTimer)
    {
        //
    }
}
