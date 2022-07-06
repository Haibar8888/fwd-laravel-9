<?php

namespace App\Http\Controllers\Backsite;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ConfigPaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $check_name = SalaryType::where('name','ILIKE','%'.$request->name.'%')->where('deleted_at', NULL)->first();

        if(isset($check_name)){
            $str = $check_name->name;
            $pattern = '/'.$request->name.'/i';
            $result_regex = preg_match_all($pattern, $str);

            if($result_regex != 1){
                dd('boleh update karena 0');
            }else{
                if($check_name['id'] != $salary_type['id']){
                    dd('tidak boleh update karena regex 1');
                }else{
                    dd('boleh update karena id sama, walaupun regex 1');
                }
            }
        }else{
            dd('boleh update dong karena data nya tidak pernah ada');
        }

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
