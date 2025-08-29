@extends('layouts.master')

@section('title')
Detail Genre
@endsection

@section('content')
<h1>{{$genres->name}}</h1>
<p>{{$genres->description}}</p>

<hr>
<div class="row">

@forelse ($genres->book as $item)

        <div class="col-4">
          <div class="card" >
            <img src="{{asset('image/'.$item->image)}}" class="card-img-top" alt="..." height= "400px">
            <div class="card-body">
              <h5 class="card-title" style="height: 50px;">{{$item->title}}</h5>
              <p class="card-text">{{Str::limit($item->summary, 100)}}</p>
              <div class="d-grid gap-2">
                  <a href="/book/{{$item->id}}" class="btn btn-primary">Detail</a>
              </div>
             
              </div>
            </div>
          </div>


@empty
    <h1>Tidak ada buku dalam genre ini</h1>
@endforelse
</div>
<br>
<a href="/genre" class="btn btn-secondary btn-sm">kembali</a>
@endsection
