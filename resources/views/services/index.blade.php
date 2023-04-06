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
                        <div class="card-header">Booking a Service</div>
                        <div class="card-body">
                          <form action="#" method="POST">
                            <label for="name">Name:</label>
                            <input type="text" id="name" name="name" required>
                            <br>
                            <label for="email">Email:</label>
                            <input type="email" id="email" name="email" required>
                            <br>
                            <label for="date">Date:</label>
                            <input type="date" id="date" name="date" required>
                            <br>
                            <label for="time">Time:</label>
                            <input type="time" id="time" name="time" required>
                            <br>
                            <label for="service">Service:</label>
                            <select id="service" name="service" required>
                              <option value="">Select a service</option>
                              <option value="carpentry">Carpentry</option>
                              <option value="culinary">Culinary</option>
                              <option value="laundry">Laundry</option>
                              <option value="massage">Massage</option>
                              <option value="plumbing">Plumbing</option>
                              <option value="technician">Technician</option>
                            </select>
                            <br>
                            <label for="message">Message:</label>
                            <textarea id="message" name="message"></textarea>
                            <br>
                            <input type="submit" value="Book It Now!">
                          </form>
</body>
</html>
@endsection
