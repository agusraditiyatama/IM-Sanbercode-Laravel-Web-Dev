@extends('layouts.master')

@section('title')
Create Profile
@endsection

@section('content')
<div class="card p-5" >
    <form method="POST" action="/profile">
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
        <label>Umur:</label>
        <br><br>
        <input type="number" name="age" class="form-control">
        <br><br>
        <label>Alamat:</label>
        <br><br>
        <textarea  class="form-control"  rows="5" name="address"></textarea>
        <br><br>
        <div class="text-center">
            <button type="submit" class="btn btn-primary" >
                kirim
            </button>
        </div>
    </form>
</div>
@endsection