@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Booking Service</title>
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}


/* The popup form - hidden by default */
.form-popup {
  display: none;
  position: fixed;
  top: 155px;
  right: 328px;
  border: 3px solid green;
  z-index: 9;
}

/* Add styles to the form container */
.form-container {
  max-width: 500px;
  max-height: 1000px;
  padding: 10px;
  background-color: white;
}



/* Set a style for the submit/login button */
.form-container .btn {
  background-color: #04AA6D;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom:10px;
  opacity: 0.8;
}

/* Add some hover effects to buttons */
.form-container .btn:hover, .open-button:hover {
  opacity: 1;
}
</style>
</head>
<body>
<div class="container">
      <div class="row justify-content-center">
            <div class="col-md-8">
                 <div class="card">
                    <div class="card-header">Book a Service(s)</div>
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
                        <button type="button" class="btn btn-primary" class="open-button" onclick="openForm()">
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
<div class="form-popup" id="myForm">
  <form action="/action_page.php" class="form-container">
  

    <label class="alert alert-success"><b>Booked Successfully!</b></label>
    <a href="services"><span class="close">&times;</span></a>
  
    <a href="services"><button type="button" class="btn btn-primary">{{ __('Book another Service?') }}</button></a>
    

    <a href="bookings"><button type="button" class="btn btn-primary">View Booked Services</button></a>
  </form>
</div>

<script>
function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "block";
}
</script>

</body>
</html>
@endsection
