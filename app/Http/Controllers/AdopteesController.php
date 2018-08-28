<?php

namespace App\Http\Controllers;

use Auth;
use App\User;
use App\Adoptee;
use App\Child;
use Illuminate\Http\Request;

class AdopteesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.adopted')
            ->with('adoptees', Adoptee::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $child = \App\Child::find($id);
        return view('admin.child.adopt', compact('child', 'id'));
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
            'idno' => 'required',
            'age' => 'required',
            'marital' => 'required',
            'location' => 'required',
            'passport' => 'required',
            'good_conduct' => 'required',
            'bank' => 'required',
            'marriage_cert' => 'required',
        ]);

        if($request->hasFile('passport')) {
            $filenameWithExt = $request->file('passport')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('passport')->getClientOriginalExtension();
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            $path = $request->file('passport')->storeAs('public/passports', $fileNameToStore);
        }else {
            $fileNameToStore = 'default.png';
        }

        if($request->hasFile('bank')) {
            $filenameWithExt = $request->file('bank')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('bank')->getClientOriginalExtension();
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            $path = $request->file('bank')->storeAs('public/banks', $fileNameToStore);
        }else {
            $fileNameToStore = 'default.png';
        }

        if($request->hasFile('marriage_cert')) {
            $filenameWithExt = $request->file('marriage_cert')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('marriage_cert')->getClientOriginalExtension();
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            $path = $request->file('marriage_cert')->storeAs('public/marriage_certs', $fileNameToStore);
        }else {
            $fileNameToStore = 'default.png';
        }

        if($request->hasFile('good_conduct')) {
            $filenameWithExt = $request->file('good_conduct')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('good_conduct')->getClientOriginalExtension();
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            $path = $request->file('good_conduct')->storeAs('public/good_conducts', $fileNameToStore);
        }else {
            $fileNameToStore = 'default.png';
        }

        $adoptee= new \App\Adoptee;
        $adoptee->user_id=Auth::id();
        // $adoptee->child_id=$child->id;
        $adoptee->name=$request->get('name');
        $adoptee->idno=$request->get('idno');
        $adoptee->age=$request->get('age');
        $adoptee->marital=$request->get('marital');
        $adoptee->location=$request->get('location');
        $adoptee->reason=$request->get('reason');
        $adoptee->address=$request->get('address');
        $adoptee->status=$request->get('status');
        $adoptee->passport=$fileNameToStore;
        $adoptee->good_conduct=$fileNameToStore;
        $adoptee->bank=$fileNameToStore;
        $adoptee->marriage_cert=$fileNameToStore;
        $adoptee->save();

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
