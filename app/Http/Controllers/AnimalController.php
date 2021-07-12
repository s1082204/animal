<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
//
use App\Models\Animal;

class AnimalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        if (Gate::allows('admin')) {
            $animals = Animal::all();
            return view('animals.index', compact('animals'));
        }
        if (Gate::allows('user')) {
            $animals = Animal::all();
            return view('animals.userindex', compact('animals'));
        }
        $animals = Animal::all();
        return view('animals.userview', compact('animals'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('animals.create');
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
        $request->validate([
            'ani_id'=>'required',
            'ani_name'=>'required',
            'ani_gentle'=>'required',
            'ani_info'=>'required'
        ]);
        $animal = new Animal([
            'ani_id' => $request->get('ani_id'),
            'ani_name' => $request->get('ani_name'),
            'ani_gentle' => $request->get('ani_gentle'),
            'ani_info' => $request->get('ani_info'),
        ]);
        $animal->save();
        return redirect('/animals')->with('success', 'Animal saved!');
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
        $animal = Animal::find($id);
        return view('edit', compact('animal'));
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
        $request->validate([
            'ani_id'=>'required',
            'ani_name'=>'required',
            'ani_info'=>'required',
            'ani_gentle'=>'required'
        ]);
        $animal = Animal::find($id);
        $animal->ani_id =  $request->get('ani_id');
        $animal->ani_name = $request->get('ani_name');
        $animal->ani_info = $request->get('ani_info');
        $animal->ani_gentle = $request->get('ani_gentle');
        //
        $animal->save();
        return redirect('/animals')->with('success', 'Animal updated!');
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
        if (Gate::allows('admin')) {
            $animal = Animal::find($id);
            $animal->delete();
            return redirect('/animals')->with('success', 'Animal deleted!');
        }
        if (Gate::denies('admin')) {
            return '非系統管理者！';
        }
    }
}
