<?php

namespace App\Http\Controllers;

use App\Models\OwnerType;
use Illuminate\Http\Request;

class OwnerTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ownerTypes = OwnerType::all();

        $data =  [
            "ownerTypes" => $ownerTypes
        ];

        return view('user.ownerTypes.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('user.ownerType.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();

        // validation
        $request->validate([
            "name" => "required|max:100",
        ]);

        $newOwnerType = new OwnerType();

        $newOwnerType->fill($data);
        $newOwnerType->save();

        return redirect()->route('ownerType.index');
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
    public function edit($ownerType)
    {
        $data = [
            'ownerType' => $ownerType,
        ];

        return view('user.ownerType.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, OwnerType $ownerType)
    {
        $data = $request->all();

        $ownerType->update($data);

        return redirect()->route('ownerType.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($ownerType)
    {
        $ownerType->delete();

        return redirect()->route('ownerType.index');
    }
}
