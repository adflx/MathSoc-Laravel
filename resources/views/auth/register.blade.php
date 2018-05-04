@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="fname" class="col-md-4 col-form-label text-md-right">{{ __('First Name') }}</label>

                            <div class="col-md-6">
                                <input id="fname" type="text" class="form-control{{ $errors->has('fname') ? ' is-invalid' : '' }}" name="fname" value="{{ old('fname') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
						
                        <div class="form-group row">
                            <label for="lname" class="col-md-4 col-form-label text-md-right">{{ __('Last Name') }}</label>

                            <div class="col-md-6">
                                <input id="lname" type="text" class="form-control{{ $errors->has('lname') ? ' is-invalid' : '' }}" name="lname" value="{{ old('lname') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('lname') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
						
                        <div class="form-group row">
                            <label for="mi" class="col-md-4 col-form-label text-md-right">{{ __('Middle Initial') }}</label>

                            <div class="col-md-6">
                                <input id="mi" type="text" class="form-control{{ $errors->has('mi') ? ' is-invalid' : '' }}" name="mi" value="{{ old('mi') }}" required autofocus>

                                @if ($errors->has('mi'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('mi') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
						
                        <div class="form-group row">
                            <label for="course" class="col-md-4 col-form-label text-md-right">{{ __('Course') }}</label>

                            <div class="col-md-6">
                                <input id="course" type="text" class="form-control{{ $errors->has('course') ? ' is-invalid' : '' }}" name="course" value="{{ old('course') }}" required autofocus>

                                @if ($errors->has('course'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('course') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
						
                        <div class="form-group row">
                            <label for="year" class="col-md-4 col-form-label text-md-right">{{ __('Year') }}</label>

                            <div class="col-md-6">
                                <input id="year" type="number" class="form-control{{ $errors->has('year') ? ' is-invalid' : '' }}" name="year" value="{{ old('year') }}" required autofocus>

                                @if ($errors->has('year'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('year') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
						
                        <div class="form-group row">
                            <label for="section" class="col-md-4 col-form-label text-md-right">{{ __('Section') }}</label>

                            <div class="col-md-6">
                                <input id="section" type="text" class="form-control{{ $errors->has('section') ? ' is-invalid' : '' }}" name="section" value="{{ old('section') }}" required autofocus>

                                @if ($errors->has('section'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('section') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
						
                        <div class="form-group row">
                            <label for="position" class="col-md-4 col-form-label text-md-right">{{ __('Position') }}</label>

                            <div class="col-md-6">
                                <input id="position" type="text" class="form-control{{ $errors->has('position') ? ' is-invalid' : '' }}" name="position" value="{{ old('position') }}" required autofocus>

                                @if ($errors->has('position'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('position') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
						
                        <div class="form-group row">
                            <label for="studID" class="col-md-4 col-form-label text-md-right">{{ __('User ID') }}</label>

                            <div class="col-md-6">
                                <input id="studID" type="text" class="form-control{{ $errors->has('studID') ? ' is-invalid' : '' }}" name="studID" value="{{ old('studID') }}" required>

                                @if ($errors->has('studID'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('studID') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
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
