@extends('layouts.master')

@section('title')
Tabel
@endsection

@section('content')
<a href="/genre/create" class="btn btn-primary btn-sm my-2">tambah</a>
<table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Name</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @forelse ($genres as $items)
        <tr>
            <th scope="row">{{$loop->iteration}}</th>
            <td >{{$items->name}}</td>
            <td>
                <form method="POST" action="/genre/{{$items->id}}">
                <a href="/genre/{{$items->id}}" class= "btn btn-info btn-sm">detail</a>
                <a href="/genre/{{$items->id}}/edit" class= "btn btn-warning btn-sm">edit</a>
                
                  @csrf
                  @method("DELETE")
                  <input type="submit" value="Delete" class="btn btn-danger btn-sm">
                </form>
            </td>
        </tr>
    @empty
        <p>No users</p>
    @endforelse

  </tbody>
</table>

@endsection
