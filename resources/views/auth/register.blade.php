@php $title = 'register'; @endphp
@extends('layouts.main')

@section('container')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default modal-content" style="margin-bottom: 8px;">
                <div class="panel-title text-center">

                    <h2 class="title">Sign Up</h2>
                    <hr style="margin: 0 auto; background: #090909; height: 1.2px;"/>
                </div>
                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="control-label">Name</label>
                            @if ($errors->has('name'))
                                <span class="help-block">
                                                <strong>{{ $errors->first('name') }}</strong>
                                            </span>
                            @endif
                            <div class="form-control">
                                <div class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"
                                                                           aria-hidden="true"></i></span>
                                    <input type="text" class="form-control" name="name" id="name"
                                           placeholder="Enter your Name" value="{{ old('name') }}" required
                                           autofocus>

                                </div>
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="control-label">E-Mail Address</label>

                            @if ($errors->has('email'))
                                <span class="help-block">
                                                    <strong>{{ $errors->first('email') }}</strong>
                                                </span>
                            @endif
                            <div class="form-control">
                                <div class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"
                                                                           aria-hidden="true"></i></span>
                                    <input type="email" class="form-control" name="email" id="email"
                                           placeholder="Enter your Email" value="{{ old('email') }}" required>

                                </div>
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('student_id') ? ' has-error' : '' }}">
                            <label for="student_id" class="control-label">Student ID (Format: XX-XX-XX-XXX)</label>

                            @if ($errors->has('student_id'))
                                <span class="help-block">
                                                    <strong>{{ $errors->first('student_id') }}</strong>
                                                </span>
                            @endif
                            <div class="form-control">
                                <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="fa fa-address-card"></i>
                                        </span>
                                    <input type="text" class="form-control" name="student_id" id="student_id"
                                           placeholder="Enter your AUST student ID" value="{{ old('student_id') }}"
                                           required>


                                </div>
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
                            <label for="phone" class="control-label">Phone Number (Format: 1XXXXXXXXX)</label>

                            @if ($errors->has('phone'))
                                <span class="help-block">
                                                    <strong>{{ $errors->first('phone') }}</strong>
                                                </span>
                            @endif

                            <div class="form-control">
                                <div class="input-group">
                                        <span class="input-group-addon">
                                            <i i class="fa fa-phone" aria-hidden="true">
                                                <span class="input-group-text" id="basic-addon3">+880</span>
                                            </i>
                                        </span>
                                    <input type="tel" class="form-control" name="phone" id="phone" aria-label="phone"
                                           placeholder="Enter your active phone number" value="{{ old('phone') }}"
                                           required>
                                </div>
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="control-label">Password</label>

                            @if ($errors->has('password'))
                                <span class="help-block">
                                                    <strong>{{ $errors->first('password') }}</strong>
                                                </span>
                            @endif
                            <div class="form-control">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"
                                                                       aria-hidden="true"></i></span>

                                    <input id="password" type="password" class="form-control" name="password"
                                           placeholder="Enter your Password"
                                           required>

                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="control-label">Confirm
                                Password</label>

                            <div class="form-control">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"
                                                                       aria-hidden="true"></i></span>
                                    <input type="password" class="form-control" name="password_confirmation"
                                           id="confirm_password" required
                                           placeholder="Confirm Your Password"/>
                                </div>
                            </div>
                        </div>

                        <p class="form-group">
                        <p style="text-align: center;">
                            <button type="submit" class="btn btn-primary">
                                Register
                            </button>
                            &ensp;
                            Already have an account? <b>
                                <a href={{route('login')}}>Sign In</a></b>
                        </p>

                </div>
                </form>
            </div>
        </div>
    </div>
@endsection
