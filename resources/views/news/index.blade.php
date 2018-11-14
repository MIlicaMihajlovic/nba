@extends('layouts.master')



@section('content')
      <h1>List of news</h1>  

      @foreach($news as $new)
       <h4><a href="/news/{{ $new->id }}"> {{ $new->title }} </a></h4>
       <p> {{ $new->content }} </p>

       <p><strong>Author: </strong>{{ $new->user->name }}</p>
      @endforeach

      <nav class="blog-pagination">
            <a class="btn btn-outline-{{ $news->currentPage() == 1 ? 'secondary disabled' : 'primary'
            }}" href="{{ $news->previousPageUrl() }}">Older</a>
            <a class="btn btn-outline-{{ $news->hasMorePages() ? 'primary' : 'secondary disabled' 
            }}" href="{{ $news->nextPageUrl() }}">Newer</a>
            Page {{ $news->currentPage() }} of {{ $news->lastPage() }}
            <!-- pokazuje nam na kojoj smo stranici -->
        </nav>
        <!-- dodavanje paginacije  dugmica a za disabled moramo da napisemo logiku ako nema daljih stranica-->
@endsection