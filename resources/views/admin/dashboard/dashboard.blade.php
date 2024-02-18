      @extends('admin.dashboard.layouts.index')
       @section('container')
       @auth
        <div class="alert alert-info alert-dismissible fade show mt-3 mx-4" role="alert">
           Welcome back, {{auth()->user()->firstname}}
           <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endauth
      
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Dashboard</h1>
        
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group me-2">
            <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
            <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
          </div>
          <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle d-flex align-items-center gap-1">
            <svg class="bi"><use xlink:href="#calendar3"/></svg>
            This week
          </button>
        </div>
      </div>

      <h2>Product : </h2>
      <a class="btn btn-success mt-2 mb-4" href="/dashboard-admin/addProduct">Add new Product</a>
      
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
              <th scope="col">Pic</th>
              <th scope="col">Brand</th>
              <th scope="col">Type</th>
              <th scope="col">Stock</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
          @php 
           $number = 1;
          @endphp
           @foreach($product as $item)
            <tr>
              <td>{{$number++}}</td>
              <td>
                <img src="{{asset('storage/' . $item->gambar)}}" alt="pic">
              </td>
              <td>{{$item->kategoriMerk->merk}}</td>
              <td>{{$item->tipe_laptop}}</td>
              <td>{{$item->stok}}</td>
              <td>
                <button class="badge bg-info border-0"><i class="bi bi-eye-fill"></i></button>
                <form action="/dashboard-admin/{{$item->id}}" method="post" class="d-inline">
                  @method('delete')
                  @csrf
                  <button class="badge bg-danger border-0"><i class="bi bi-trash" onclick="return confirm('Are you sure?')"></i></button>
                </form>
                <a href="/dashboard-admin/{{$item->slug}}/editProduct" class="badge bg-success border-0"><i class="bi bi-pencil-square"></i></a>
              </td>
            </tr>
           @endforeach
          </tbody>
        </table>
      </div>
      @endsection