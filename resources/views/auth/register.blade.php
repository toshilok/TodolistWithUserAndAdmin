@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('firstname') ? ' has-error' : '' }}">
                            <label for="firstname" class="col-md-4 control-label">First Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="firstname" value="{{ old('firstname') }}" required autofocus>

                                @if ($errors->has('firstname'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('firstname') }}</strong>
                                    </span>
                                @endif
                            </div>
                                  </div>
          <!---end of first name -->
                  <div class="form-group{{ $errors->has('lastname') ? ' has-error' : '' }}">
                      <label for="lastname" class="col-md-4 control-label">Last Name</label>

                      <div class="col-md-6">
                          <input id="name" type="text" class="form-control" name="lastname" value="{{ old('lastname') }}" required autofocus>

                          @if ($errors->has('lastname'))
                              <span class="help-block">
                                  <strong>{{ $errors->first('lastname') }}</strong>
                              </span>
                          @endif
                      </div>
                  </div>
                  <!---end of last name -->


                  <div class="form-group{{ $errors->has('birthday') ? ' has-error' : '' }}">
                      <label for="birthday" class="col-md-4 control-label">BirthDay</label>
                        <div class="col-md-1">
                          <select class="form-control" name="month" id="select" style="width:120px" placeholder="month">
                            <option @if(old('month') == 'Month') selected="selected" @endif> Month </option>
                            <option @if(old('month') == 'January') selected="selected" @endif> January </option>
                            <option @if(old('month') == 'February') selected="selected" @endif> February </option>
                            <option @if(old('month') == 'March') selected="selected" @endif> March </option>
                            <option @if(old('month') == 'April') selected="selected" @endif> April </option>
                            <option @if(old('month') == 'May') selected="selected" @endif> May </option>
                            <option @if(old('month') == 'June') selected="selected" @endif> June </option>
                            <option @if(old('month') == 'July') selected="selected" @endif> July </option>
                            <option @if(old('month') == 'August') selected="selected" @endif> August </option>
                            <option @if(old('month') == 'September') selected="selected" @endif> September </option>
                            <option @if(old('month') == 'October') selected="selected" @endif> October </option>
                            <option @if(old('month') == 'November') selected="selected" @endif> November </option>
                            <option @if(old('month') == 'December') selected="selected" @endif> December </option>
                          </select>
                        </div>

                          <!--end of day-->
                        <div class="col-md-1 col-md-offset-1">
                          <select class="form-control" name="day" id="select" style="width:75px" placeholder="day">
                            <option>Day</option>

                            @for($i=1;$i<=31;$i++)

                            <option @if(old('day') == $i) selected='selected' @endif>{{ $i }} </option>

                            @endfor
                          </select>
                        </div>

                          <!--end of day-->

                              <div class="col-md-1 col-md-offset-1">
                              <select class="form-control" name="year" id="select" style="width:100px; margin-left:-40px;" placeholder="year">

                                <option> Year</option>
                                @for($i=1960;$i<=2020;$i++)

                                <option @if(old('year')== $i) selected='selected' @endif> {{ $i }} </option>

                                @endfor

                              </select>
                            </div>
                        <div>

                                @if ($errors->has('year'))
                                      <span class="help-block">
                                                <strong>{{ $errors->first('year') }}</strong>
                                            </span>
                                  @endif
                        </div>
                      </div>
                          <!--end of year-->
                      <!---end of Birthd Day -->
                  <div class="form-group{{ $errors->has('gender') ? ' has-error' : '' }}">
                      <label for="gender" class="col-md-4 control-label">Gender</label>

                      <div class="col-md-6">
                          <input id="name" type="text" class="form-control" name="gender" value="{{ old('gender') }}" required autofocus>

                          @if ($errors->has('gender'))
                              <span class="help-block">
                                  <strong>{{ $errors->first('gender') }}</strong>
                              </span>
                          @endif
                      </div>
                  </div>
                  <!---end of Gender -->


                        <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
                            <label for="username" class="col-md-4 control-label">Username</label>

                            <div class="col-md-6">
                                <input id="email" type="text" class="form-control" name="username" value="{{ old('username') }}" required>

                                @if ($errors->has('username'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
