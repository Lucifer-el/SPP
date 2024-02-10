<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class SppController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $spp = DB::table("spps")->get();
        return view("spp.index", compact("spp"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('spp.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'tahun'  => 'required|min:4',
            'nominal'  => 'required',
        ]);

        
        $query = DB::table('spps')->insert([
            'tahun'  => $request['tahun'],
            'nominal' => $request['nominal']
        ]);
        
        return redirect()->route('spp.index')->with('success','your data has been successfully added');
    }
    

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //ngambil data dari genres
        $spp = DB::table('spps')->where('id_spp', $id)->first();
        return view('spp.edit', compact('spp'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'tahun'  => 'required|min:4',
            'nominal'  => 'required',
        ]);

        
        $query = DB::table('spps')
        ->where('id_spp', $id)
        ->update([
            'tahun'  => $request['tahun'],
            'nominal'  => $request['nominal'],

        ]);
        
        return redirect()->route('spp.index')->with('success','your data has been successfully edited');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $query = DB::table('spps')->where('id_spp', $id)->delete();
        return redirect()->route('spp.index')->with('success','your data has been successfully deleted');

    }
}
