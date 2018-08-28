<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\Paginator;

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
            'fname' => 'required',
            'lname' => 'required',
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
            $path = $request->file('image')->storeAs('/public/photos', $fileNameToStore);
        } else {
            $fileNameToStore = 'default.png';
        }

        $child= new \App\Child;

        $child->fname=$request->get('fname');
        $child->lname=$request->get('lname');
        $child->dob=$request->get('dob');
        $child->gender=$request->get('gender');
        $child->guardian=$request->get('guardian');
        $child->county=$request->get('county');
        $child->status=$request->get('status');
        $child->image=$fileNameToStore;
        $child->save();

        return redirect('admin')->with('success', 'Created Successfully');
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
        $child = Child::find($id);
        $child->fname = $request->fname;
        $child->lname = $request->lname;
        $child->dob = $request->dob;
        $child->gender = $request->gender;
        $child->guardian = $request->guardian;
        $child->county = $request->county;
        $child->save();

        return redirect()->route('children.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $child = Child::find($id);
        $child->delete();
        return redirect()->route('children.index')->with('success','Child has been  deleted');
    }

    public function available()
    {
        $children = DB::select('select * from children where status = :status', ['status' => 1]);
        return view('admin.child.available', ['children' => $children]);
    }

    public function adopt(){
        return view('admin.child.adopt');
    }

    public function adopted($id)

    {
        $child = Child::find($id);
        $child->adopted = 1;
        $child->save();

        return view()->back();
    }
}
