@extends('shared.layout')

@section('page_title', 'Home')

@section('content')
  <div class="row">
    <h2 class="pull-left">List Articles</h2> {!! link_to(route("article.create"),
    "Create", ["class"=>"pull-right btn btn-raised btn-primary"]) !!}
  </div>
@foreach($articles as $article)
  <div class="row">
      <h1>{!!$article->title!!}</h1>
      <p>
          {!!str_limit($article->content, 50)!!}
          {!! link_to(route('article.show', $article->id), 'Read More') !!}
      </p>
  </div>
  @endforeach
  @endsection