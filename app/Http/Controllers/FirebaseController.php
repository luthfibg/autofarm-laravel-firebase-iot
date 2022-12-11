<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Kreait\Laravel\Firebase\Facades\Firebase;

class FirebaseController extends Controller
{
    /**
     * Initialize realtime database 
     *
     * using app() helper
     */
    protected $database;
    public function __construct()
    {
        $this->database = app('firebase.database');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $switch1 = $database->getReference('Control/R1');
        $switch2 = $database->getReference('Control/R2');
        $humid1 = $database->getReference('Monitor/S1');
        $snapshot = $switch1->getSnapshot();
        $value = $snapshot->getValue();
        return view('pages.realtime')->with([
            'value' => $value,
        ]);
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
    public function show() //! $id parameter removed
    {
        // $snapshot = $switch1->getSnapshot();
        // $value = $snapshot->getValue();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function setOn() //! $id parameter removed
    {
        $database->getReference('Control')->set([
            'R1' => '1',
            'R2' => 1,
        ]);
    }

    public function setOff() //! $id parameter removed
    {
        $database->getReference('Control')->set([
            'R1' => '0',
            'R2' => 0,
        ]);
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
