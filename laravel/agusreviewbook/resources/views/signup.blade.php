@extends('layouts.master')

@section('title')
Buat Account Baru!
@endsection

@section('content')
<div class="card p-5" >
    <form action="/welcome" method="POST" >
        @csrf 
            <label>First name:</label>
            <br><br>
            <input type="text" name="first_name" class="form-control">
            <br><br>

        <label>Last name:</label>
        <br><br>
        <input type="text" name="last_name" class="form-control">
        <br><br>
        <label>Gender:</label>
        <br><br>
        <input class="form-check-input" type="radio" name="gender" value="1"> Male
        <br>
        <input class="form-check-input" type="radio" name="gender" value="2"> Female
        <br>
        <input class="form-check-input" type="radio" name="gender" value="3"> Other
        <br><br>
        <label>Nationality:</label>
        <br><br>
        <select name="nasionality" class="form-select">
            <option value="1">Indonesian</option>
            <option value="2">Malaysian</option>
            <option value="3">Singaporean</option>
        </select>
        <br><br>
        <label>Language Spoken:</label>
        <br><br>
        <input class="form-check-input" type="checkbox" name="language" value="1"> Bahasa Indonesia
        <br>
        <input class="form-check-input" type="checkbox" name="language" value="2"> English
        <br>
        <input class="form-check-input" type="checkbox" name="language" value="3"> Other
        <br><br>
        <label>Bin:</label>
        <br><br>
        <textarea  class="form-control"  rows="5" name="pin"></textarea>
        <br><br>
        <div class="text-center">
            <button type="submit" value="kirim" class="btn btn-primary" >
                kirim
            </button>
        </div>
    </form>
</div>
@endsection

