<?php

namespace App\Http\Controllers\Backsite;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// model
use App\Models\ManagementAccess\RadGroupReplay;

//request validation
use App\Http\Requests\Group\StoreGroupRequest;

class RadGroupReplayController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');        
    }

    public function index()
    {
        //
        $datas = RadGroupReplay::orderBy('created_at','desc')->get();
        
        return view('pages.backsite.operational.radgroupreplay.index',compact('datas'));

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
        $value = $request->download . '/' .$request->upload . 'M';
       
        $datas = RadGroupReplay::create([
            'groupname' => $request->groupname,
            'attribute' => $request->attribute,
            'op' => $request->op,
            'value' => $value
        ]);

        alert()->success('Success Message', 'Data group berhasil ditambahkan');
        return redirect()->route('backsite.group.index');
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
    public function edit(RadGroupReplay $group)
    {
        //
        $value = $group->value;
        $explode = explode("/", $value);
        $download = $explode[0];
        $upload = $explode[1];

        return view('pages.backsite.operational.radgroupreplay.edit',compact('group','download','upload'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RadGroupReplay $group)
    {
        //
          // get all request from frontsite
        $data = $request->all();
        $value = $request->download . '/' . $request->upload;
        // update to database
        $group->update([
            'groupname' => $request->groupname,
            'attribute' => $request->attribute,
            'op' => $request->op,
            'value' => $value
            ]
        );

        alert()->success('Success Message', 'Data group berhasil diedit');
        return redirect()->route('backsite.group.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(RadGroupReplay $group)
    {
        //
        $group->forceDelete();

        alert()->success('Success Message', 'Data group berhasil dihapus');
        return back();

    }
}
