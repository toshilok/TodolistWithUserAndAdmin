@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">TodoList</div>

                <form class="for-horizontal" role="form" method="POST" action="/home/save">
                  {{ csrf_field() }}

                <div class="panel-body">
                  <div class="form-group">
        <label for="title" class="col-md-8 col-md-offset-2">Enter Title</label>
        <div class="col-md-8 col-md-offset-2">
          <input type="text" name="title" value="{{old('title') }}" class="form-control" id="inputEmail" placeholder="Title">
          @if($errors->has('title'))
          <span class="help-block">
            <strong>{{ $errors->first('title')}}</strong>
          </span>
          @endif
        </div>
      </div>

      <br>  <br>  <br>  <br>
      <div class="form-group {{ $errors->has('body') ? 'has-error': '' }}">
     <label for="body" class="col-md-8 col-md-offset-2">Body</label><br>
     <div class="col-md-8 col-md-offset-2">
       <textarea class="form-control" rows="10" id="body" name="body" value="{{old('body')}}"></textarea>

       @if($errors->has('body'))
       <span class="help-block">
         <strong>{{ $errors->first('password') }}</strong>
         @endif
         </div>
   </div>

</div>

@if(count($errors) > 0 )
  <div class="alert alert-danger">
    <strong>Error::</strong>
    <ul>
      @foreach($errors -> all() as $error)
        <li>{{ $error }}
      @endforeach
    </ul>
  </div>
@endif

    <div class="form-group">
      &nbsp&nbsp&nbsp&nbsp&nbsp
      <button type="submit" class="btn btn-primary">
        Add Todolist
      </button>

    </div>


</div>
</form>

            </div>
        </div>


@endsection
