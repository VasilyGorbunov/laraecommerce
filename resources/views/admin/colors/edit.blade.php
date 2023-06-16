@extends('layouts.admin')

@section('content')
  <div class="row">
    <div class="col-md-12">
      @if (session('message'))
        <div class="alert alert-success">{{ session('message') }}</div>
      @endif
      <div class="card">
        <div class="card-header">
          <h4>
            Edit Color
            <a href="{{ url('admin/colors/index') }}" class="btn btn-danger btn-sm text-white float-end">
              BACK</a>
          </h4>
        </div>
        <div class="card-body">
          <form action="{{ url('admin/colors/' . $color->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
              <label>Color Name</label>
              <input type="text" name="name" class="form-control" value="{{ $color->name }}">
            </div>
            <div class="mb-3">
              <label>Color Code</label>
              <input type="text" name="code" class="form-control" value="{{ $color->code }}">
            </div>
            <div class="mb-3">
              <label>Status</label><br/>
              <input type="checkbox" name="status" {{ $color->status ? 'checked' : '' }} style="width: 24px; height: 24px;"> Checked=Hidden, UnChecked=Visible
            </div>
            <div class="mb-3">
              <button type="submit" class="btn btn-primary">Save</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection
