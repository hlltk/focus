<?php

namespace App\Http\Controllers;

use App\Models\EditTable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EditTableController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id = Auth::user()->id;
        $editTable = EditTable::all()->where('created_by', $id)->all();
        return view('adddelete',compact('editTable',$editTable));
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
        $this->validate($request,[
           'name'=>'required',
            'time'=>'required',
            'day'=>'required',
            'description'=>'required',

        ]);
        $editTable=new EditTable();

        $editTable->name= $request->input('name');
        $editTable->time= $request->input('time');
        $editTable->day= $request->input('day');
        $editTable->description= $request->input('description');
        $editTable->created_by = auth()->user()->id;

        $editTable->save();
        return back()->with('success', 'Data saved');
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
