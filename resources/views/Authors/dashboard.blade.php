@extends('Authors.layouts.app')
@section('title', "Dashboard")
@section('content')

<div class="row">
  <div class="col-6 mb-5">
    <div class="card" style="max-height: 100%;">
        <div class="card-body text-center ustify-content-center">
          <h1>{{ $totalpostapproved }} </h1>
          <p>Total berita sudah diapprove</p>
        </div>
    </div>
  </div>

  <div class="col-6">
    <div class="card" style="max-height: 100%;">
        <div class="card-body text-center ustify-content-center">
          <h1>{{ $totalpostnotapproved }} </h1>
          <p>Total berita belum diapprove</p>
        </div>
    </div>
  </div>

  <div class="col-6">
    <div class="card" style="max-height: 100%;">
        <div class="card-body text-center ustify-content-center">
          <h1>{{ $totaluser }} </h1>
          <p>Total user</p>
        </div>
    </div>
  </div>

  <div class="col-6">
    <div class="card" style="max-height: 100%;">
        <div class="card-body text-center ustify-content-center">
          <h1>{{ $totalcategory }} </h1>
          <p>Total kategori terdaftar</p>
        </div>
    </div>
  </div>
</div>

@endsection
