@extends('layout')
@section('title', 'Users')
@section('content')

<a class="btn btn-primary" href="{{route('users.create')}}">Create user</a>

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
    @foreach($users as $user)
    <tr>
      <th scope="row">{{ $user->id}}</th>
      <td>
        <a href="{{route('users.show', $user)}}" class="">{{ $user->name}}</a>
      <td>
        <a href="{{route('users.show', $user)}}" class="">{{ $user->email}}</a>
      </td>
      <td>
        
        <form method="POST" action="{{route('users.destroy', $user)}}" class="">
          <a href="{{route('users.edit',  $user)}}" class="btn btn-warning">Edit</a>
          @csrf
          @method('DELETE')
          <button type="submit" class="btn btn-danger">Delete</button>
        </form>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection