      @extends('admin.dashboard.layouts.index')
       @section('container')
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        @auth
        <h1 class="h2">Welcome back, {{auth()->user()->firstname}}</h1>
        @endauth
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

      <h3>Manage : </h3>
      <div class="d-flex flex-wrap gap-2">
        <a href="/dashboard-admin/products" class="btn btn-outline-info px-4 px-3">Products</a>
        <a href="/dashboard-admin/brand" class="btn btn-outline-success px-4 px-3">Brand</a>
      </div>
      @endsection