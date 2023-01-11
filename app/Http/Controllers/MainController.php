<?php

namespace App\Http\Controllers;

use App\Models\Dataitem;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        $items = Dataitem::orderBy('id', 'desc')->get();
        return view('items.index', compact('items'));
    }

    public function create()
    {
        return view('items.create');
    }

    public function store(Request $request)
    {
        // dd($request);
        $request->validate([
            'value1' => 'required',
            'value2' => 'required',
        ]);
        $lastItem = Dataitem::orderBy('id', 'desc')->get()[0];
        // dd($lastItem);

        $inaccuracy = ((($request->input('value1') - $lastItem['value1']) - ($request->input('value2') - $lastItem['value2'])) / ($request->input('value1') - $lastItem['value1'])) * 100;

        Dataitem::create(['value1' => $request->input('value1'), 'value2' => $request->input('value2'), 'inaccuracy' => $inaccuracy]);

        return redirect()->route('items.index')->with('success', 'created');
    }
}
