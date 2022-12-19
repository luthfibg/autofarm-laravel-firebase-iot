<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Kreait\Firebase;
use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;
// use Kreait\Firebase\Database;
use Kreait\Firebase\Contract\Database;
use Kreait\Firebase\Database\Snapshot;

class FirebaseController extends Controller
{
    /**
     * Initialize realtime database 
     *
     * using app() helper
     */
    protected $database;
    public function __construct(Database $database)
    {
        $this->database = $database;
        $this->dataroot = 'users';
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $monitorized = $this->database->getReference($this->dataroot)->getValue();
        return view('pages.realtime', $monitorized);
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
        $postData = [
            'uname' => $request->username,
            'name' => $request->name,
            'email' => $request->email,
            'pass' => $request->password,
        ];
        $postRef = $this->database->getReference($this->dataroot)->push($postData);

        if ($postRef) {
            return redirect()->intended('home')->with('status', 'You\'ve signed up');
        } else {
            return redirect()->intended('register')->with('status', 'Registration failed, please check your connection');
        }
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
