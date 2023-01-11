@extends('layout')

@section('content')

<form action="{{ route('items.store')}}" method="POST" class="row g-3">
  @csrf
  <div class="col-md-6">
    <label for="value1" class="form-label">v1</label>
    <input name="value1" type="text" class="form-control" id="value1">
  </div>
  <div class="col-md-6">
    <label for="value2" class="form-label">v2</label>
    <input name="value2" type="text" class="form-control" id="value2">
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-primary">сохранить</button>
  </div>
</form>
@endsection