<?php

namespace App\Http\Controllers;
use App\Http\Requests\BodyRequest;
use Illuminate\Http\Request;
use App\Models\Body;

class BodyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bodies = Body::all();
        //ddd($makers);
        return view('bodies.index', compact('bodies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('bodies.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BodyRequest $request)
    {
        $request->validate(
            ['name'=>'required|min:3|max:255'],
            ['name.min'=>'A módosított szónak minimum 3 betűnek kell lennie!']
        );
        $body  = new Body();
        $body->name = $request->input('name');
        $body->save();

        return redirect()->route('bodies.index')->with('success', "{$body->name} sikeresen létrehozva");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $body = new Bodies();
        return view('bodies.edit', compact('body'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $body = Body::find($id);
        return view('bodies.edit', compact('body'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(BodyRequest $request, $id)
    {
        $request->validate(
            ['name'=>'required|min:3|max:255'],
            ['name.min'=>'A módosított szónak minimum 3 betűnek kell lennie!']
        );
        $body  = Body::find($id);
        $body= $request->input('name');
        $body=save();

        return redirect()->route('bodies.index')->with('success', "{$body->name} sikeresen módosítva");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $body= Body::find($id);
        $body-> delete();

        return redirect()->route('bodies.index')->with('success', "{$body->name} sikeresen módosítva");
    }
}