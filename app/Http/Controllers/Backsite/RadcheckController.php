<?php

namespace App\Http\Controllers\Backsite;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash; 

// model
use App\Models\ManagementAccess\Radcheck;
use App\Models\ManagementAccess\RadGroupReplay;

class RadcheckController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datas = Radcheck::orderBy('created_at', 'asc')->get();
        $groups = RadGroupReplay::all();
        
        return view('pages.backsite.operational.radcheck.index',compact('datas', 'groups',));
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
        $hashed = hash('sha1', $request->password);

        Radcheck::create([
            'username' => $request->username,
            'attribute' => $request->attribute,
            'op' => $request->op,
            'value' => $hashed
        ]);

        alert()->success('Success Message', 'Data User berhasil ditambahkan');
        return redirect()->route('backsite.radcheck.index');
        
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
    public function edit(Radcheck $radcheck)
    {
        //

        return view('pages.backsite.operational.radcheck.edit',compact('radcheck'));
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
    public function destroy(Radcheck $radcheck)
    {
        //
        $radcheck->forceDelete();

        alert()->success('Success Message', 'Data User berhasil dihapus');
        return back();
    }
}
