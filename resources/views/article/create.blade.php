@extends("shared.layout")

@section("content")
  <h3>Create a Article</h3>
  {!! Form::open(['route' => 'article.store', 'class' => 'formhorizontal','role' => 'form']) !!}
   @include('article.form')
  {!! Form::close() !!}
@stop