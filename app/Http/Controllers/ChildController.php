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
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'fname' => 'required',
            'lname' => 'required',
            'dob' => 'required|date|after:2000-01-01',
            'gender' => 'required',
            'guardian' => 'required',
            'county' => 'required',
            'image' => 'required',
        ]);
        try {
            $child = Child::create(array_merge($request->all()));
            if ($request->hasFile('image')) {
                $file = $request->file('image');
                $fileName = time() . '.' . $file->getClientOriginalExtension();
                $request->image->move('uploads/children/', $fileName);
                $child->update(['image' => $fileName]);
            }
            return redirect()->back()->with('success', 'Child has been saved!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'An error occured during submission, please try again!');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $child = Child::find($id);
        return view('admin.child.adopt', ['child' => $child]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $child = Child::find($id);
        return view('admin.child.edit', compact('child', 'id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try {
            $child = Child::find($id);
            $child->update(array_merge($request->all()));
            if ($request->hasFile('image')) {
                $file = $request->file('image');
                $fileName = time() . '.' . $file->getClientOriginalExtension();
                $request->image->move('uploads/children/', $fileName);
                $child->update(['image' => $fileName]);
            }
            return redirect()->back()->with('info', 'Child info has been updated!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'An error occured during updating the child!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public
    function destroy($id)
    {
        $child = Child::find($id);
        $child->delete();
        return redirect()->route('children.index')->with('success', 'Child has been  deleted');
    }

    public
    function available()
    {
        $children = DB::select('select * from children where status = :status', ['status' => 1]);
        return view('admin.child.available', ['children' => $children]);
    }

    public
    function adopt($id)
    {
        $child = Child::find($id);
        return view('admin.child.adopt', ['child' => $child]);
    }

// public function sponsorChild($id){
//     $kids =Kid::find($id);
//     return view('sponsorChild',['kids'=>$kids]);
// }

    public
    function adopted($id)

    {
        $child = Child::find($id);
        $child->adopted = 1;
        $child->save();
        return view()->back();
    }
}
