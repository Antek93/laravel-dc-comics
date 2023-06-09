<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

//models

use App\Models\Comic;

//helpers

use Illuminate\Validation\Rule;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comic::all();

        return view('comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate ([
            'title' => 'required|max:50',
            'description' => 'required|max:1000|min:10',
            'thumb' => 'max:255',
            'price' => 'required|numeric|',
            'series' => 'required|max:50|min:10',
            'sale_date' => 'required|max:50|min:10',
            'type' => [
                'required',
                Rule::in(['comics', 'comic', 'fumetto', 'comic book'])
            ],
        ]);

        $data = $request-> all();

        $newComic = new Comic;
        $newComic->Title = $data['title'];
        $newComic->Description = $data['description'];
        $newComic->Thumb = $data['thumb'];
        $newComic->Price = $data['price'];
        $newComic->Series = $data['series'];
        $newComic->Sale_date = $data['sale_date'];
        $newComic->Type = $data['type'];
        $newComic->save();

        return redirect()->route('comics.show', $newComic->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $comics = Comic::find($id);

        return view('comics.show', compact('comics'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $comics = Comic::find($id);

        return view ('comics.edit', compact('comics'));
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
        $data = $request-> all();

        $comics = Comic::findOrFail($id);

        $request->validate ([
            'title' => 'required|max:50',
            'description' => 'required|max:1000|min:10',
            'thumb' => 'max:255',
            'price' => 'required|numeric|',
            'series' => 'required|max:50|min:10',
            'sale_date' => 'required|max:50|min:10',
            'type' => [
                'required',
                Rule::in(['comics', 'comic', 'fumetto', 'comic book'])
            ],
        ]);

        $comics->Title = $data['title'];
        $comics->Description = $data['description'];
        $comics->Thumb = $data['thumb'];
        $comics->Price = $data['price'];
        $comics->Series = $data['series'];
        $comics->Sale_date = $data['sale_date'];
        $comics->Type = $data['type'];
        $comics->save();

        return redirect()->route('comics.show', $comics->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $comics = Comic::findOrFail($id);
        $comics->delete();
        
        return redirect()->route('comics.index');
    }
}
