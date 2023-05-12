<?php

namespace App\Http\Controllers\Admin;
use App\Models\Comic;
use App\Http\Controllers\Controller;
use App\Http\Requests\ComicRequest;


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
        return view('comic.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('comic.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ComicRequest $request)
    {
        $request->validated();
        /* $request->validated([
            'title' => 'required|max:100',
            'description' => 'required',
            'thumb' => 'url|nullable|ends_with:png,jpg,webp,svg,ico',
            'price' => 'required|max:10',
            'series' => 'required|max:50',
            'sale_date' => 'required|date',
            'type' => ['required',
            Rule::in(['comic book', 'graphic novel'])
            ],
            'artists' => 'required',
            'writers' => 'required'
        ]); */


        //salvataggio dati da form
        $data = $request->all();
        //creazione modello pasta
        $newComic = new Comic();
        //mapping
        /* $newComic->title = $data['title'];
        $newComic->description = $data['description'];
        $newComic->thumb = $data['thumb'];
        $newComic->price = $data['price'];
        $newComic->series = $data['series'];
        $newComic->sale_date = $data['sale_date'];
        $newComic->type = $data['type'];
        $newComic->artists = $data['artists'];
        $newComic->writers = $data['writers']; */

        $newComic->fill($data);
        //salvataggio dati in db
        $newComic->save();

        return to_route('comics.index', $newComic->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic)
    {
        return view('comic.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
        return view('comic.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ComicRequest $request, Comic $comic)
    {

        $request->validated();

        /* $request->validate([
            'title' => 'required|max:100',
            'description' => 'required',
            'thumb' => 'url|nullable|ends_with:png,jpg,webp,svg,ico',
            'price' => 'required|max:10',
            'series' => 'required|max:50',
            'sale_date' => 'required|date',
            'type' => ['required',
            Rule::in(['comic book', 'graphic novel'])
            ],
            'artists' => 'required',
            'writers' => 'required'
        ]); */


        $data = $request->all();

        //mapping
        $comic->title = $data['title'];
        $comic->description = $data['description'];
        $comic->thumb = $data['thumb'];
        $comic->price = $data['price'];
        $comic->series = $data['series'];
        $comic->sale_date = $data['sale_date'];
        $comic->type = $data['type'];
        $comic->artists = $data['artists'];
        $comic->writers = $data['writers'];
        //salvataggio dati in db
        $comic->save();

        return to_route('comics.index', $comic->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();
        return to_route('comics.index');
    }
}
