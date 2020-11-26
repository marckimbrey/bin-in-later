<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\File;

class ItemController extends Controller
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
        $items = Item::all();
        return view('items.items', ['items' => $items]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('items.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        

        $validated = $request->validate([
            'product' => 'required',
            'box_size' => 'required',
            'boxes' => 'required',
            'location' => 'required',
            'file_name' => 'required|image|mimes:jpg,png,jpeg,gif,svg'
        ]);
        
        $path = $request->file('file_name')->store('barcodes');




        $validated['file_name'] = $path;
        Item::create($validated);

        return redirect()->route('items.index');

         
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function show(Item $item)
    {
       $db_item =  Item::where('id', $item->id)->firstOrFail();
       
       return view('items.item', ['item' => $db_item]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function edit(Item $item)
    {
        return view('items.edit', ['item' => $item]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Item $item)
    {
        $validated = $request->validate([
            'product' => 'required',
            'box_size' => 'required',
            'boxes' => 'required',
            'file_name' => 'required|image|mimes:jpg,png,jpeg,gif,svg'
        ]);
        // delete existing file
        Storage::delete($item->file_name);
        // save new file to disc
        $path = $request->file('file_name')->store('barcodes');
        // update file path
        $validated['file_name'] = $path;

        $item->update($validated);
        
        return redirect()->route('items.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function destroy(Item $item)
    {
        $item->delete();
        return redirect('/items');
    }

}
