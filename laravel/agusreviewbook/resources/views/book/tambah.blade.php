@extends('layouts.master')

@section('title')
Tambah Book
@endsection

@section('content')
<div class="card p-5" >
    <form method="POST" action="/book" enctype="multipart/form-data">
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

        <div class="mb-3">
            <label class="form-label">Genre:</label>
            <select name="genre_id" id="" class="form-control">
                <option value="">--Pilih Genre--</option>
                @forelse ($genre as $item)
                    <option value="{{$item->id}}">{{$item->name}}</option>
                    
                @empty
                    <option value="">Belum ada genre</option>
                @endforelse

            </select>

        </div>
        <label>Title:</label>
        <br><br>
        <input type="text" name="title" class="form-control">
        <br><br>
        <label>Summary:</label>
        <br><br>
        <textarea  class="form-control"  rows="5" name="summary"></textarea>
        <br><br>
        <label>Image:</label>
        <br><br>
        <input type="file" name="image" class="form-control">
        <br><br>
        <label>Stock:</label>
        <br><br>
        <input type="number" name="stock" class="form-control">
        <br><br>
        
        <div class="text-center">
            <button type="submit" class="btn btn-primary" >
                kirim
            </button>
        </div>
    </form>
</div>
@endsection