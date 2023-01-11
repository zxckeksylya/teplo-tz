@extends('layout')
@section('content')

@if(count($items))

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">v1</th>
      <th scope="col">v2</th>
      <th scope="col">погрешность</th>
    </tr>
  </thead>
  <tbody>
    @foreach($items as $item)
    <tr>
      <th scope="row">{{$item->id}}</th>
      <td>{{$item->value1}}</td>
      <td>{{$item->value2}}</td>
      <td class="{{$item->inaccuracy >= 7.4 ? 'table-danger' : ''}}">{{$item->inaccuracy}}</td>
    </tr>
    @endforeach
  </tbody>
</table>
@endif
@endsection