@extends('layouts.master')

@section('title')
Edit Profile
@endsection

@section('content')
@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
<div class="card p-5" >
    <form method="POST" action="/profile/{{$profile->id}}">
        @csrf 
        @method("PUT")
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
        <input type="number" name="age" value="{{$profile->age}}" class="form-control">
        <br><br>
        <label>Alamat:</label>
        <br><br>
        <textarea  class="form-control"  rows="5" name="address">{{$profile->address}}</textarea>
        <br><br>
        <div class="text-center">
            <button type="submit" class="btn btn-primary" >
                kirim
            </button>
        </div>
    </form>
</div>
@endsection