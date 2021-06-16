<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Comic;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //get data from db
        $comics = Comic::paginate(5);

        return view ('comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('comics.create');
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
        dump($data);

        // INSERT DB_DATABASE
        $new_comic = new Comic();

        // a
        // $new_comic->title = $data['title'];
        // $new_comic->slug = Str::slug($new_comic->title, '-');
        // $new_comic->description = $data['description'];
        // $new_comic->type = $data['type'];
        // $new_comic->thumb = $data['thumb'];
        // $new_comic->series = $data['series'];

        // b
        $data['slug'] = Str::slug($data['title'], '-');
        $new_comic->fill($data);

        // SAVE DATA
        $new_comic->save();

        // redirect to pasta detail
        return redirect()->route('comics.show', $new_comic->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {   
        // GET COMICS BY id
        $comic = Comic::where('slug', $slug)->first();

        if ($comic) {
            return view('comics.show', compact('comic'));
        }
        
        // 404
        abort(404, 'Not Found');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
        //get comic by id
        // $comic = Comic::find($id);
        if($comic) {
            return view ('comics.edit', compact('comic'));
        }

        return view('comics.edit', compact('comics'));
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
        //get form data
        $data = $request->all();
        dump($data);

        // get comic by id
        $comic = Comic::find($id);

        $data['slug'] = Str::slug($data['title'], '-');

        // $comic->update($data); fillable nel model!!!!

        return redirect()->route('comics.show', $comic->id);
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
        $comic = Comic::find($id);
        $comic->delete();

        return redirect()->route('comics.index')->with('deleted', $comic->title);
    }
}
