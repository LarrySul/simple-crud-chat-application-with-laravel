@extends('layouts.app')
@section('content')
  <div class="row">
  @forelse($articles as $article)
    <div class="col-md-4 col-md-offset-4">
     <div class="panel panel-default">
        <div class="panel-heading">
         <span> Article by:(</span>

         <span class="pull-right">
           {{$article->created_at->diffForHumans()}}
         </span>
        </div>
        <div class="panel-body">
          {{$article->shortContent}}
          <a href="/articles/{{ $article->id}}" class="btn btn-success btn-xs">Read more</a>

          
        </div>
        <div class="panel-footer clearfix" style="background: #fff">
        @if($article->user_id == Auth::id())
          <form action="/articles/{{$article->id}}" method="POST" class="pull-right" >
            {{csrf_field()}}
            {{method_field('DELETE')}}
          <button class="btn btn-danger btn-xs">Delete </button>
          </form>
          @endif 
          <i class="fa fa-heart pull-left"></i>
        </div>
      </div>
   </div>
   @empty
    No articles
   @endforelse
  </div> 
  <div class="row">
    <div class="" style="text-align: center;">
    {{$articles->links()}}
    </div>
 </div>
@endsection
