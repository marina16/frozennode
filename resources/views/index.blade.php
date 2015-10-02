@extends('app')

@section('content')

@if (count($instance))
 <table class="table table-bordered">
 <thead>
  <tr>
  <th></th>
  <th>Name</th>
  <th>Author</th>
  </tr>
  </thead>
  <tbody>

 @foreach($instance as $book)
 <tr>
 <td><img src="/uploads/books/covers/{{$book->cover}}"/></td>
 <td>{{$book->name}}</td>
 <td>{{$book->authors->name}}</td>
 </tr>
@endforeach

</tbody>
</table>
@endif
@stop



