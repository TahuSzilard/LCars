<?php

namespace App\Http\Controllers;
use App\Http\Requests\MakerRequest;
use Illuminate\Http\Request;
use App\Models\Maker;

class MakerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $makers = Maker::all();
        //ddd($makers);
        return view('makers.index', compact('makers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('makers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MakerRequest $request)
    {
        $request->validate(
            ['name'=>'required|min:3|max:255'],
            ['name.min'=>'A módosított szónak minimum 3 betűnek kell lennie!']
        );
        $maker  = new Maker();
        $maker->name = $request->input('name');
        $maker->save();

        return redirect()->route('makers.index')->with('success', "{$maker->name} sikeresen létrehozva");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $maker = new Maker();
        return view('makers.edit', compact('maker'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $maker = Maker::find($id);
        return view('makers.edit', compact('maker'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(MakerRequest $request, $id)
    {
        $request->validate(
            ['name'=>'required|min:3|max:255'],
            ['name.min'=>'A módosított szónak minimum 3 betűnek kell lennie!']
        );
        $maker  = Maker::find($id);
        $maker->name = $request->input('name');
        $maker->save();

        return redirect()->route('makers.index')->with('success', "{$maker->name} sikeresen módosítva");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $maker= Maker::find($id);
        $maker-> delete();

        return redirect()->route('makers.index')->with('success', "{$maker->name} sikeresen módosítva");
    }
}
