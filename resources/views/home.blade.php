@extends('layouts.app')

@section('content')

<div class="container" >
  <div class=" col-md-12">
    <div class="row">
      <h1>Todo List {{Auth::user()->id}}</h1>
    </div>


                <div class="panel-body">

                  <table class='table'>
                    <tr>
                      <th>Todo #</th>
                      <th> Title</th>
                      <th> Body</th>
                      <th>Date</th>
                      <th>Edit</th>
                      <th>Delete</td>

                    </tr>
                  @foreach($todolist as $todo)
                  @if (count ($todo) > 0)
                  <tr>
                    <td style="width:10%;">{{ $todo->id}}</td>
                    <td style="width:20%;"><a href="{{ URL::to('home/'. $todo->id. '/edit') }}">{{ $todo->title }} </a></td>
                    <td style="width:45%;"><a href="{{ URL::to('home/'. $todo->id. '/edit') }}">{{ $todo->body }} </a></td>
                    <td style="width:20%;">{{$todo->date}}</td>

                    <td style="width:10%;">
                        <a href="{{ URL::to('home/'. $todo->id. '/edit') }}">  <button type="submit" class="btn btn-sm btn-warning">
                        edit
                      </button>
                    </a>
                  </td>
                    &nbsp;&nbsp;
                    <td style="width:10%;">
                          <a href="{{ URL::to('home/'. $todo->id. '/delete') }}"><button type="submit" class="btn btn-sm btn btn-danger">
                        delete
                      </button>
                    </a>
                      </td>
asd
                    </tr>

                    @endif
                          @endforeach
                </table><center>

              </center>
                    <div class="row">
                        <div class="col-md-12">



                                <form class="for-horizontal" role="form" method="POST" action="{{ URL::to('home/'.Auth::user()->id. '/save') }}">
                                  {{ csrf_field() }}

                                <div class="panel-body">
                                  <div class="form-group {{ $errors->has('title') ? 'has-error': '' }}">
                        <label for="title" class="col-md-12">Enter Title</label>
                        <div class="col-md-8 col-md-offset-2">
                          <input type="text" name="title" value="{{old('title') }}" class="form-control" id="inputEmail" placeholder="Title">
                          @if($errors->has('title'))
                          <span class="help-block">
                            <strong>{{ $errors->first('title')}}</strong>
                          </span>
                          @endif
                        </div>
                      </div>


                      <div class="form-group {{ $errors->has('body') ? 'has-error': '' }}">
                     <label for="body" class="col-md-12">Body</label><br>
                     <div class="col-md-8 col-md-offset-2">
                       <textarea class="form-control" rows="10" id="body" name="body" value="{{old('body')}}" placeholder="Body"></textarea>

                       @if($errors->has('body'))
                       <span class="help-block">
                         <strong>{{ $errors->first('password') }}</strong>
                         @endif
                         </div>
                   </div>

                   <div class="form-group {{ $errors->has('date') ? 'has-error': '' }}">
                     <label for="title" class="col-md-12">Choose Date</label>
                     <div class="col-md-8 col-md-offset-2">
                       <input type="date" name="date" value="{{old('date') }}" class="form-control" id="inputEmail" placeholder="Date">
                        


                       @if($errors->has('date'))
                       <span class="help-block">
                         <strong>{{ $errors->first('date')}}</strong>
                       </span>
                       @endif
                     </div>
                   </div>

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

                    <div class="form-group">
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      <button type="submit" class="btn btn-primary">
                        Add Todolist
                      </button>

                    </div>


                </div>
                </form>


                            </div>
                        </div>
                </div>
            </div>


@endsection
