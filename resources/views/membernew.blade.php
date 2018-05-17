@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Member</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="panel-body">
	<div class="row">
	<div class="col-sm-1">
	</div>
		<div class="col-sm-10">

	<h3>New Member</h3>
		<div class="row">

      <div class="card-body">



          <form method="post" action="{{action('MemberController@add')}}">
              @csrf

            



              <div class="form-group row">
                  <label for="idno" class="col-md-4 col-form-label text-md-right">{{ __('Student ID') }}</label>

                  <div class="col-md-6">
                      <input id="idno" type="text" class="form-control{{ $errors->has('idno') ? ' is-invalid' : '' }}" name="idno" value="" required>

                      @if ($errors->has('idno'))
                          <span class="invalid-feedback">
                              <strong>{{ $errors->first('idno') }}</strong>
                          </span>
                      @endif
                  </div>
              </div>


              <div class="form-group row">
                  <label for="fname" class="col-md-4 col-form-label text-md-right">{{ __('First Name') }}</label>

                  <div class="col-md-6">
                      <input type="text" class="form-control{{ $errors->has('fname') ? ' is-invalid' : '' }}" name="fname" value="" required autofocus>

                      @if ($errors->has('fname'))
                          <span class="invalid-feedback">
                              <strong>{{ $errors->first('fname') }}</strong>
                          </span>
                      @endif
                  </div>
              </div>


              <div class="form-group row">
                  <label for="lname" class="col-md-4 col-form-label text-md-right">{{ __('Last Name') }}</label>

                  <div class="col-md-6">
                      <input id="lname" type="text" class="form-control{{ $errors->has('lname') ? ' is-invalid' : '' }}" name="lname" value="" required autofocus>

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
                      <input id="mi" type="text" class="form-control{{ $errors->has('mi') ? ' is-invalid' : '' }}" name="mi" value="" required autofocus>

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
                      <input id="course" type="text" class="form-control{{ $errors->has('course') ? ' is-invalid' : '' }}" name="course" value="" required autofocus>

                      @if ($errors->has('course'))
                          <span class="invalid-feedback">
                              <strong>{{ $errors->first('course') }}</strong>
                          </span>
                      @endif
                  </div>
              </div>

              <div class="form-group row">
                  <label for="sex" class="col-md-4 col-form-label text-md-right">{{ __('Sex') }}</label>

                  <div class="col-md-6">
                      <input id="sex" type="text" class="form-control{{ $errors->has('sex') ? ' is-invalid' : '' }}" name="sex" value="" required autofocus>

                      @if ($errors->has('sex'))
                          <span class="invalid-feedback">
                              <strong>{{ $errors->first('sex') }}</strong>
                          </span>
                      @endif
                  </div>
              </div>

              <div class="form-group row">
                  <label for="professor" class="col-md-4 col-form-label text-md-right">{{ __('Professor') }}</label>

                  <div class="col-md-6">
                      <input id="professor" type="text" class="form-control{{ $errors->has('professor') ? ' is-invalid' : '' }}" name="professor" value="" required autofocus>

                      @if ($errors->has('professor'))
                          <span class="invalid-feedback">
                              <strong>{{ $errors->first('professor') }}</strong>
                          </span>
                      @endif
                  </div>
              </div>

              <div class="form-group row">
                  <label for="subject" class="col-md-4 col-form-label text-md-right">{{ __('Subject') }}</label>

                  <div class="col-md-6">
                      <input id="subject" type="text" class="form-control{{ $errors->has('subject') ? ' is-invalid' : '' }}" name="subject" value="" required autofocus>

                      @if ($errors->has('subject'))
                          <span class="invalid-feedback">
                              <strong>{{ $errors->first('subject') }}</strong>
                          </span>
                      @endif
                  </div>
              </div>

              <div class="form-group row">
                  <label for="datepay" class="col-md-4 col-form-label text-md-right">{{ __('Date of Payment') }}</label>

                  <div class="col-md-6">
                      <input id="datepay" type="calendar" class="form-control{{ $errors->has('datepay') ? ' is-invalid' : '' }}" name="datepay" value="" autofocus>

                      @if ($errors->has('datepay'))
                          <span class="invalid-feedback">
                              <strong>{{ $errors->first('datepay') }}</strong>
                          </span>
                      @endif
                  </div>
              </div>

              <div class="form-group row">
                  <label for="paystat" class="col-md-4 col-form-label text-md-right">{{ __('Payment status') }}</label>

                  <div class="col-md-6">
                      <input id="paystat" type="text" class="form-control{{ $errors->has('paystat') ? ' is-invalid' : '' }}" name="paystat" value="" autofocus>

                      @if ($errors->has('paystat'))
                          <span class="invalid-feedback">
                              <strong>{{ $errors->first('paystat') }}</strong>
                          </span>
                      @endif
                  </div>
              </div>

              <div class="form-group row">
                  <label for="memstat" class="col-md-4 col-form-label text-md-right">{{ __('Member status') }}</label>

                  <div class="col-md-6">
                      <input id="memstat" type="text" class="form-control{{ $errors->has('memstat') ? ' is-invalid' : '' }}" name="memstat" value="" autofocus>

                      @if ($errors->has('memstat'))
                          <span class="invalid-feedback">
                              <strong>{{ $errors->first('memstat') }}</strong>
                          </span>
                      @endif
                  </div>
              </div>

              <div class="form-group row">
                  <label for="memsy" class="col-md-4 col-form-label text-md-right">{{ __('Membership Duration') }}</label>

                  <div class="col-md-6">
                      <input id="memsy" type="text" class="form-control{{ $errors->has('memsy') ? ' is-invalid' : '' }}" name="memsy" value="" required autofocus>

                      @if ($errors->has('memsy'))
                          <span class="invalid-feedback">
                              <strong>{{ $errors->first('memsy') }}</strong>
                          </span>
                      @endif
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
		<div class="col-sm-1">
	</div>
	</div>
	</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
