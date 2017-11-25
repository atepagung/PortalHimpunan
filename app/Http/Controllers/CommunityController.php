<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Community;
use App\Major;
use Illuminate\Support\Facades\DB;
use Exception;
use Illuminate\Support\Facades\Auth;

class CommunityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $communities = Community::get();

        echo "<pre>";
        var_dump($communities);
        echo "</pre>";
        die();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {

        $majors = Major::with('university')->get();

        return view('testing.testCreateHimpunan', ['majors' => $majors]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            DB::beginTransaction();

            Community::create([
                'name' => $request->input('name'),
                'major_id' => $request->input('jurusan'),
                'user_id' => Auth::id(),
                'status' => 0
            ]);

            DB::commit();
        }catch (Exception $e) {
            DB::rollBack();
            echo 'Message : '.$e->getMessage();
        };

        return "Himpunan Berhasil Dibuat";
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $himpunan = Community::where(['id' => $id])->get();

        echo "<pre>";
        var_dump($himpunan);
        echo "</pre>";
        die();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        try {
            DB::beginTransaction();

            
        }catch (Exception $e) {
            DB::rollBack();
            echo 'Message : '.$e->getMessage();
        }
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
