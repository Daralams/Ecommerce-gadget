@extends('admin.dashboard.layouts.index')
@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Customers</h1>
    
</div>
<div class="table-responsive small">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Name</th>
              <th scope="col">Gender</th>
              <th scope="col">Email</th>
              <th scope="col">Register At</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            @php
            $counter = 1;
            @endphp
             @foreach($users as $user)
            <tr>
              <td>{{$counter++}}</td>
              <td>{{$user->firstname}}</td>
              <td>{{$user->gender}}</td>
              <td>{{$user->email}}</td>
              <td>{{$user->created_at->diffForHumans()}}</td>
              <td>
                <button class="badge bg-info border-0"><i class="bi bi-eye-fill"></i></button>
                <form action="/deletecustomer" method="post" class="d-inline">
                  @method('delete')
                  @csrf
                  <button class="badge bg-danger border-0"><i class="bi bi-trash" onclick="return confirm('Are you sure?')"></i></button>
                </form>
              </td>
            </tr>
              @endforeach
          </tbody>
        </table>
      </div>
@endsection