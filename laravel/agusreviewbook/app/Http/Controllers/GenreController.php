<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Models\Genre;

class GenreController extends Controller
{
    //
    public function create()
    {
        return view('genre.tambah');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|min:2',
            'description' => 'required',
        ]);

        DB::table('genres')->insert([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        return redirect('/genre');
    }

    public function index()
    {
        $genres = DB::table('genres')->get();
        
        //dd($genres);
        return view('genre.tampil', ['genres' => $genres]);
    }

    public function show($id)
    {
        $genres = Genre::find($id);

        return view('genre.detail', ['genres'=> $genres]);
    }

    public function edit($id)
    {
     $genres = DB::table('genres')->find($id);

        return view('genre.edit', ['genres'=> $genres]);   
    }

    public function update($id, Request $request)
    {
        $request->validate([
            'name' => 'required|min:2',
            'description' => 'required',
        ]);

        DB::table('genres')
            ->where('id', $id)
            ->update(
                [
                    'name' => $request->input('name'),
                    'description'=>$request->input('description'),
                    'updated_at' => Carbon::now(),
                ]
            );
        return redirect('/genre');

    }

    public function destroy($id)
    {
        DB::table('genres')->where('id', $id)->delete();

        return redirect('/genre');
    }
}
