@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-heading">Login</div>
        <div class="panel-body">
          {!! Form::open(['url'=>'login','class'=>'form-horizontal']) !!}
            <div class="form-group{{ $errors->has('name') ? ' has-error' : ''}}">
              {!! Form::label('email','Alamat Email',['class'=>'col-md-4 control-label']) !!}
              <div class="col-md-6">
                {!! Form::email('email',null,['class'=>'form-control']) !!}
                {!! $errors->first('email','<p class="help-block">:message</p>') !!}
              </div>
            </div>
            <div class="form-group{{ $errors->has('password') ? ' has-error' : ''}}">
              {!! Form::label('password','Password',['class'=>'col-md-4 control-label']) !!}
              <div class="col-md-6">
                {!! Form::password('password',['class'=>'form-control']) !!}
                {!! $errors->first('password','<p class="help-block">:message</p>') !!}
              </div>
            </div>
            <div class="form-group">
              <div class="col-md-6 col-md-offset-4">
                <div class="checkbox">
                  <label>
                    {!! Form::checkbox('remeber') !!} Ingat saya
                  </label>
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="col-md-6 col-md-offset-4">
                <button class="btn btn-primary" type="submit">
                  <i class="fa fa-btn fa-sign in"></i> Login
                </button>

                <a href="{{url('/password/reset') }}" class="btn btn-link">Lupa password</a>
              </div>
            </div>
          {!! Form::close() !!}
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
