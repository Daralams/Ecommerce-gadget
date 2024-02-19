@extends('admin.dashboard.layouts.index')
@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Brands</h1>
</div>

<a class="btn btn-success mt-2 mb-4" href="/dashboard-admin/brand/addNewBrand">Add new Brand</a>

    @if(session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show mt-3 mx-4" role="alert">
        {{session('success')}}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
     @endif

<div class="table-responsive small">
    <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Brand</th>
              <th scope="col">Publish at</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
          @php 
           $number = 1;
          @endphp
           @foreach($kategoriMerk as $brand)
            <tr>
              <td>{{$number++}}</td>
              <td>{{$brand->merk}}</td>
              <td>{{$brand->created_at->diffForHumans()}}</td>
              <td>
                <a href="/dashboard-admin/brand/{{$brand->slug}}/editBrand" class="badge bg-success border-0"><i class="bi bi-pencil-square"></i></a>
              </td>
            </tr>
           @endforeach
          </tbody>
        </table>
      </div>
@endsection