<?php

namespace App\Http\Controllers;
use App\Models\stuses;
use App\Models\orm;
use Illuminate\Http\Request;

class stuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $student = stuses::where('first_name', 'Jane')->get();
        $student = stuses::all();
        return view('orm.fetch', ['data' => $student]); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('orm.addorm');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $student = new stuses;

        $student->first_name = $request->first_name;
        $student->last_name = $request->last_name;
        $student->email = $request->email;
        $student->date_of_birth = $request->date_of_birth;
        $student->grade = $request->grade;


        $student->save();

        return redirect()->route('stu.index')
                        ->with('status', 'new Student Added Sucessfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {   
        $student = stuses::find($id);
        // return $student;

       
        return view('orm.vieworm',['data' => $student]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $student = stuses::find($id);

        return view('orm.updateorm',['data' => $student]);
       
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
        $student = stuses::find($id);

        $student->first_name = $request->first_name;
        $student->last_name = $request->last_name;
        $student->email = $request->email;
        $student->date_of_birth = $request->date_of_birth;
        $student->grade = $request->grade;


        $student->save();

        return redirect()->route('stu.index')
                        ->with('status', ' Student Record Update Sucessfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $student = stuses::find($id);
        $student->delete();

        return redirect()->route('stu.index')
                        ->with('status', ' Student Record Delete Sucessfully');
    }
}
