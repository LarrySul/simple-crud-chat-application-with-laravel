@extends('layouts.app')
@section('content')
  <div class="row">
    <div class="col-md-6 col-md-offset-3">
     <div class="panel panel-default">
        <div class="panel-heading">
          Publish article
        </div>
        <div class="panel-body">
          <form method="POST" action="/articles">
          {{csrf_field()}}
          <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
            <div class="form-group">
              <label for="content">Content</label>
              <textarea name="content" class="form-control"></textarea>
            </div>
            <div class="checkbox col-md-9 col-sm-9">
              <label>
                <input type="checkbox" name="live">Live
              </label>
            </div>
            <div class="col-md-3 col-sm-3" style="margin-top: 5px">
              <input type="submit" class="btn btn-primary btn-block btn-sm" value="Share">
            </div>
          </form>
        </div>
      </div>
   </div>
 </div> 
@endsection
