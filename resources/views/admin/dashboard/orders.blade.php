@extends('admin.dashboard.layouts.index')
@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Orders</h1>
</div>

<div class="table-responsive small">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Name</th>
              <th scope="col">Phone</th>
              <th scope="col">Price</th>
              <th scope="col">Dibayar</th>
              <th scope="col">Quantity</th>
              <th scope="col">Order at</th>
              <th scope="col">Status</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            @php
            $counter = 1;
            @endphp
             @foreach($orders as $order)
            <tr>
              <td>{{$counter++}}</td>
              <td>{{$order->fullname}}</td>
              <td>{{$order->phone}}</td>
              <td>{{$order->harga}}</td>
              <td>{{$order->dibayar}}</td>
              <td>{{$order->jml_order}}</td>
              <td>{{$order->created_at->diffForHumans()}}</td>
              <td>{{$order->status}}</td>
             <td>
              <form action="/dashboard-admin/orders/{{$order->id}}" method="post" class="d-inline">
                  @method('put')
                  @csrf
                  <button class="badge bg-danger border-0" onclick="return confirm('Confirm?')">Acc</button>
                </form>
              </td>
            </tr>
              @endforeach
          </tbody>
        </table>
      </div>
@endsection