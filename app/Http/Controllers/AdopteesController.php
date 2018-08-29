<?php

namespace App\Http\Controllers;

use Auth;
use App\User;
use App\Adoptee;
use App\Child;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Exports\AdopteesExport;
use Maatwebsite\Excel\Facades\Excel;

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
     * @param  \Illuminate\Http\Request $request
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
//dd($request->all());
        $adoptee = Adoptee::create(array_merge($request->all()));
        if ($request->hasFile('passport') || $request->hasFile('good_conduct') || $request->hasFile('marriage_cert') || $request->hasFile('bank')) {
            $file = $request->file('passport');
            $file1 = $request->file('good_conduct');
            $file2 = $request->file('marriage_cert');
            $file3 = $request->file('bank');
            $fileName = time() . '.' . $file->getClientOriginalExtension();
            $fileName1 = time() . '.' . $file1->getClientOriginalExtension();
            $fileName2 = time() . '.' . $file2->getClientOriginalExtension();
            $fileName3 = time() . '.' . $file3->getClientOriginalExtension();
            $request->passport->move('uploads/documents/', $fileName);
            $request->good_conduct->move('uploads/documents/', $fileName1);
            $request->marriage_cert->move('uploads/documents/', $fileName2);
            $request->bank->move('uploads/documents/', $fileName3);
            $adoptee->update([
                'passport' => $fileName,
                'good_conduct' => $fileName1,
                'marriage_cert' => $fileName2,
                'bank' => $fileName3,
            ]);
        }

        return redirect('admin')->with('success', 'Created Successfully');
    }
    // ---------------- Toggle status ----------
    public function toggle_status($id)
    {
        //dd($id);
        try {
            $status = Adoptee::where('id', $id)->first()->is_approved;
            if ($status == 1) {
                Adoptee::where('id', $id)->update(['is_approved' => 0]);
            } else {
                Adoptee::where('id', $id)->update(['is_approved' => 1]);
            }
            return redirect()->back()->with('info', 'Adoption status has been updated!');
        } catch (\Exception $exception) {
            return redirect()->back()->with('error', 'Whoops!, Something went wrong when updating status, Please try again.');
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    // public function chartjs()
    // {
    //     $child = Child::select(DB::raw("SUM(gender) as count"))
    //         ->orderBy("created_at")
    //         ->groupBy(DB::raw("day(created_at)"))
    //         ->get()->toArray();
    //     $child = array_column($child, 'count');

    //     $click = Click::select(DB::raw("SUM(numberofclick) as count"))
    //         ->orderBy("created_at")
    //         ->groupBy(DB::raw("year(created_at)"))
    //         ->get()->toArray();
    //     $click = array_column($click, 'count');


    //     return view('chartjs')
    //         ->with('child', json_encode($child, JSON_NUMERIC_CHECK));
    //     ->with('click',json_encode($click,JSON_NUMERIC_CHECK));
    // }

    public function export() 
    {
        return Excel::download(new AdopteesExport, 'adoptees.xlsx');
        // (new AdopteesExport)->download('adoptees.pdf', \Maatwebsite\Excel\Excel::DOMPDF);
    }

}
