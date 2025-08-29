@extends('layouts.master')

@section('title')
Sanberbook
@endsection

@section('content')

@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
@if (session('danger'))
    <div class="alert alert-danger">
        {{ session('danger') }}
    </div>
@endif


    <h2>Website Buku Online</h2>
    <p>Tempat berbagi informasi dan rekomendasi buku yang telah dibaca kepada orang lain</p>
    <h3>Benefit Join di SanberBook</h3>

    <ul>
        <li>Mendapatkan motivasi dari sesama pembaca</li>
        <li>Sharing buku rekomendasi dari pada member</li>
        <li>Dibuat untuk kalian yang baru mau memulai membaca buku</li>        
    </ul>
@guest
    <h3>Cara Bergabung ke SanberBook</h3>

    <ol>
        <li>Mengunjungi website ini</li>
        <li>Mendaftar di <a href="/register">Form Sign Up</a></li>
        <li>Selesai!</li>
    </ol>
@endguest
@auth
<br>
<h3> Selamat datang {{Auth()->user()->name}} 
    @if (Auth()->user()->profile)
        ({{Auth()->user()->profile->age}} tahun)
    @else

    @endif
</h3>
@endauth
@endsection

