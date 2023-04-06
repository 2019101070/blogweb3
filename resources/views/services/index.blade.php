@extends('layout.app')

@section('content')
<!DOCTYPE html>
<html>
<head>
	<title>Booking Service</title>
</head>
<body>
<div class="container">
      <div class="row justify-content-center">
            <div class="col-md-8">
                 <div class="card">
                    <div class="card-header">Booking a Service(s)</div>
                        <div class="card-body">
                          <form action="{{ route('login') }}" method="POST">
                          <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address:') }}</label>
                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name:') }}</label>
                            <div class="col-md-6">
                                <input id="name" type="name" class="form-control @error('name') is-invalid @enderror" name="name" required autocomplete="current-name">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Date:') }}</label>
                          <div class="col-md-6">
                            <input type="date" id="date" name="date" required>
                        </div>
                          </div>
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Time:') }}</label>
                          <div class="col-md-6">
                            <input type="time" id="time" name="time" required>
                        </div>
                          </div>
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Service:') }}</label>
                          <div class="col-md-6">
                            <select id="service" name="service" required>
                              <option value="">Select a service</option>
                              <option value="carpentry">Carpentry</option>
                              <option value="culinary">Culinary</option>
                              <option value="laundry">Laundry</option>
                              <option value="massage">Massage</option>
                              <option value="plumbing">Plumbing</option>
                              <option value="technician">Technician</option>
                            </select>
                          </div>
                        </div>
                        <div class="form-group row mb-0">
                        <div class="col-md-8 offset-md-4">
                        <button type="submit" class="btn btn-primary">
                                    {{ __('Book It Now!') }}
                                </button>
                          </form>
                        </div>

                        </div>
                    </div>
                  </div>
            </div>
      </div>
</div>
</body>
</html>
@endsection
