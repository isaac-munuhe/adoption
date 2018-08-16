<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Child;

class ChildController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.child.index')
            ->with('children', Child::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.child.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'dob' => 'required',
            'gender' => 'required',
            'guardian' => 'required',
            'county' => 'required',
            'image' => 'required',
        ]);

        if($request->hasFile('image')) {
            $filenameWithExt = $request->file('image')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('image')->getClientOriginalExtension();
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            $path = $request->file('image')->storeAs('public/images', $fileNameToStore);
        }else {
            $fileNameToStore = 'default.png';
        }

        $child= new \App\Child;

        $child->name=$request->get('name');
        $child->dob=$request->get('dob');
        $child->gender=$request->get('gender');
        $child->guardian=$request->get('guardian');
        $child->county=$request->get('county');
        $child->image=$fileNameToStore;
        $child->save();

        return redirect('admin/children')->with('success', 'Created Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $child = \App\Child::find($id);
        return view('admin.child.show', compact('child', 'id'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $child = \App\Child::find($id);
        return view('admin.child.edit', compact('child','id'));
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
        $child= Child::find($id);
        $child->name=$request->get('name');
        $child->guardian=$request->get('guardian');
        $child->county=$request->get('county');
        $child->save();
        return redirect('admin/children');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $child = \App\Child::find($id);
        $child->delete();
        return redirect('admin/children')->with('success','Successfully  deleted');
    }
}
