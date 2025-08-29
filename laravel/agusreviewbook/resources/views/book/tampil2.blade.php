@extends('layouts.master')

@section('title')
List Buku
@endsection

@section('content')
@auth
@if (Auth()->user()->role === "admin")
<a href="/book/create" class="btn btn-primary btn-sm my-2">Tambah</a>
@endif
@endauth

<div class="row">
    @forelse
        <div class="col-4">
            <div class="card mt-5"  >
                <img src="{{asset('image/'.$item->image)}}" class="card-img-top" alt="..." height= "400px">
                <div class="card-body">
                    <h5 class="card-title" style="height: 50px;">{{$item->title}}</h5>
                    <span class="badge bg-success">{{$item->genre->name}}</span>
                    <p class="card-text">{{Str::limit($item->summary, 100)}}</p>
                    <div class="d-grid gap-2">
                        <a href="/book/{{$item->id}}" class="btn btn-primary">Detail</a>
                    </div>
                    @auth
                    @if (Auth()->user()->role === "admin")
                    <div class="row mt-3">
                        <div class="col">
                            <div class="d-grid gap-2">
                                <a href="/book/{{$item->id}}/edit" class="btn btn-warning">Edit</a>
                            </div>
                        </div>
                        <div class="col">
                            <form method="POST" action="/book/{{$item->id}}">
                            @csrf
                            @method("DELETE")
                                <div class="d-grid gap-2">
                                    <input type="submit" value="Delete" class="btn btn-danger">
                                </div>
                            </form>
                    
                        </div>
                    </div>
                    @endif
                    @endauth
                </div>
            </div>
        </div>
    @empty

    @endforelse
</div>

@endsection