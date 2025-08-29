@extends('layouts.master')

@section('title')
Buat Account Baru!
@endsection

@section('content')
<div class="card p-5" >
    <form action="/login" method="POST" >
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
        <label>Email:</label>
        <br>
        <input type="email" name="email" class="form-control">
        <br>
        <label>Password:</label>
        <br>
        <input type="password" name="password" class="form-control">
        <br>
        <div class="text-center">
            <button type="submit"  class="btn btn-primary" >
                Login
            </button>
        </div>
    </form>
</div>
@endsection

