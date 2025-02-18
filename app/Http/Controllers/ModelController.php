<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Model;

class ModelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $models = Model::all();
        //ddd($models);
        return view('models.index', compact('models'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('models.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(
            ['name'=>'required|min:3|max:255'],
            ['name.min'=>'A módosított szónak minimum 3 betűnek kell lennie!']
        );
        $model  = new Model();
        $model->name = $request->input('name');
        $model->save();

        return redirect()->route('models.index')->with('success', "{$model->name} sikeresen létrehozva");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $model = new Model();
        return view('models.edit', compact('model'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $model = Model::find($id);
        return view('models.edit', compact('model'));
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
        $request->validate(
            ['name'=>'required|min:3|max:255'],
            ['name.min'=>'A módosított szónak minimum 3 betűnek kell lennie!']
        );
        $model  = Model::find($id);
        $model->name = $request->input('name');
        $model->save();

        return redirect()->route('models.index')->with('success', "{$model->name} sikeresen módosítva");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $model= Model::find($id);
        $model-> delete();

        return redirect()->route('models.index')->with('success', "{$model->name} sikeresen módosítva");
    }
}
