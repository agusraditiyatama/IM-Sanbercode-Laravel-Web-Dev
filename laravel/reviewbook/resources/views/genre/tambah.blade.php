@extends('layouts.master')

@section('title')
Tambah genres
@endsection

@section('content')
<div class="card p-5" >
    <form method="POST" action="/genre">
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
        <label>Name:</label>
        <br><br>
        <input type="text" name="name" class="form-control">
        <br><br>
        <label>Description:</label>
        <br><br>
        <textarea  class="form-control"  rows="5" name="description"></textarea>
        <br><br>
        <div class="text-center">
            <button type="submit" class="btn btn-primary" >
                kirim
            </button>
        </div>
    </form>
</div>
@endsection