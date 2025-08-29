@extends('layouts.master')

@section('title')
Detail Buku
@endsection

@section('content')

<img src="{{asset('image/'. $book->image)}}" alt="" height= "400px">
<h1 class="text-primary">{{$book->title}}</h1>
<p>{{$book->summary}}</p>
<hr>
<h3>Komentar</h3>
@forelse ($book->comments as $item)

<div class="card mt-2">
  <div class="card-header">
    {{$item->owner->name}}
  </div>
  <div class="card-body">
    <p class="card-text">{{$item->content}}</p>
  </div>
</div>
@empty
<h3>Tidak ada Komentar</h3>
@endforelse

<hr>
@auth
<h3>buat komentar</h3>
<div class="card p-5" >
    <form method="POST" action="/comments/{{$book->id}}">
        @csrf 
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <label>Komentar:</label>
        <br><br>
        <textarea  class="form-control"  rows="5" name="content" placeholder="masukkan komentar..."></textarea>
        <br><br>
        <div class="text-center">
            <button type="submit" class="btn btn-primary" >
                kirim
            </button>
        </div>
    </form>
</div>
@endauth

<a href="/book" class="btn btn-secondary btn-sm">kembali</a>
@endsection
