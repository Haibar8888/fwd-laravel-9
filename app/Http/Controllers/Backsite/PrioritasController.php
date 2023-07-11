<?php

namespace App\Http\Controllers\Backsite;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Gate;
use Symfony\Component\HttpFoundation\Response;

// models
use App\Models\Operational\Prioritas;

// request
use App\Http\Requests\Prioritas\StorePrioritasRequest;
use App\Http\Requests\Prioritas\UpdatePrioritasRequest;
class PrioritasController extends Controller
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
        // abort_if(Gate::denies('prioritas_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $prioritas = Prioritas::orderBy('created_at','desc')->get();

        return view('pages.backsite.operational.prioritas.index',compact('prioritas'));
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
    public function store(StorePrioritasRequest $request)
    {
        //
        $prioritas = $request->all();
        Prioritas::create($prioritas);

        alert()->success('Success Message', 'Data berhasil ditambahkan');
        return redirect()->route('backsite.prioritas.index');
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
    public function edit(Prioritas $priorita)
    {
        //
        return view('pages.backsite.operational.prioritas.edit',compact('priorita'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePrioritasRequest $request, Prioritas $priorita)
    {
        //
        $data = $request->all();
        $priorita->update($data);

        alert()->success('Success Message', 'Data berhasil diedit');
        return redirect()->route('backsite.prioritas.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Prioritas $priorita)
    {
        //
        $priorita->forceDelete();
        alert()->success('Success Message', 'Data berhasil dihapus');
        return back();
    }
}
