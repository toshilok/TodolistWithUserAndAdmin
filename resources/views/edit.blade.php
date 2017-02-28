@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Update</div>

                <form class="for-horizontal" role="form" method="POST" action="{{ URL::to('home/'. $todo->id . '/update')}}">
                  {{ method_field('PATCH') }}
                  {{ csrf_field() }}

                <div class="panel-body">
                  <div class="form-group">
        <label for="title" class="col-md-8 col-md-offset-2">Enter Title</label>
        <div class="col-md-8 col-md-offset-2">
          <input type="text" name="title" value="{{ $todo->title }}" class="form-control" id="title" placeholder="Title">
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
       <textarea class="form-control" rows="10" id="body" name="body">{{ $todo-> body }}</textarea>

       @if($errors->has('body'))
       <span class="help-block">
         <strong>{{ $errors->first('body') }}</strong>
         @endif
         </div>
   </div>

   <div class="form-group {{ $errors->has('date') ? 'has-error': '' }}">
     <label for="title" class="col-md-12">Choose Date</label>
     <div class="col-md-8 col-md-offset-2">
       <input type="date" name="date" value="{{$todo-> date}}" class="form-control" id="inputEmail" placeholder="Date">



       @if($errors->has('date'))
       <span class="help-block">
         <strong>{{ $errors->first('date')}}</strong>
       </span>
       @endif
     </div>
   </div>

</div>



    <div class="form-group">
      <input type="submit" value="Save!" class="btn btn-success btn-lg">
      <a href="{{ URL::to('home/'.Auth::user()->id . '/todo')}}" class="btn btn-danger btn-lg pull-right">Go back</a>
    </div>

                  @if (Session::has('success'))
                  <div class="alert alert-success">
                    <strong>Sucess::</strong>
                    {{ Session::get('success') }}
                  </div>

                  @endif
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




</div>
</form>

            </div>
        </div>


@endsection
