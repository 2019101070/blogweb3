<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Services</title>
    <!-- Font Awesome Icons -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
    />
    <style>
        * {
  padding: 0;
  margin: 0;
  box-sizing: border-box;
}
body {
  background-color: #eef5ff;
}
.wrapper {
  width: 100%;
  position: absolute;
  transform: translate(-50%, -50%);
  top: 50%;
  left: 50%;
  display: grid;
  place-items: center;
  gap: 15px;
}
.container {
  height: 200px;
  width: 200px;
  background-color: #ffffff;
  box-shadow: 0 0 25px rgba(17, 1, 68, 0.08);
  border-radius: 8px;
  position: relative;
  cursor: pointer;
}
input[type="checkbox"] {
  -webkit-appearance: none;
  position: relative;
  width: 100%;
  cursor: pointer;
}
input[type="checkbox"]:after {
  position: absolute;
  font-family: "Font Awesome 5 Free";
  font-weight: 400;
  content: "\f111";
  font-size: 18px;
  color: transparent;
  right: 10px;
  top: -5px;
}
input[type="checkbox"]:checked:after {
  font-weight: 900;
  content: "\f058";
  color: green;
}
.container img {
  width: 70%;
  position: absolute;
  margin: auto;
  left: 0;
  right: 0;
  top: 0;
  bottom: 0;
  cursor: pointer;
}
@media screen and (min-width: 950px) {
  .wrapper {
    grid-template-columns: repeat(6, 1fr);
    gap: 10px;
  }
  .container {
    height: 100px;
    width: 100px;
  }
  input[type="checkbox"]:after {
    font-size: 50px;
  }
}
    </style>
  </head>
  <body>
    <div class="wrapper">
      <div class="container">
      <img src="{{url('/image/carpentry.jpg')}}" />
        <input type="checkbox" id="carpentry" />
        <label for="carpentry">
        </label>
      </div>
      <div class="container">
      <img src="{{url('/image/laundry.jpg')}}" />
        <input type="checkbox" id="laundry" />
        <label for="laundry">
        </label>
      </div>
      <div class="container">
      <img src="{{url('/image/massage.jpg')}}" />
        <input type="checkbox" id="massage" />
        <label for="massage">
        </label>
      </div>
    </div>
  </body>
</html>