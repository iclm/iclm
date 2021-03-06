<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>login</title>
    <style>
      html,
      body {
          height: 100%;
      }
      .cover-container {
          height: 100vh;
      }

      .flex-fill {
          flex: 1 1 auto;
      }
      .fs-100 {
        font-size: 100px;
      }
      body {
  margin: 0;
  background: #000;
}
video {
    position: fixed;
    top: 50%;
    left: 50%;
    min-width: 100%;
    min-height: 100%;
    width: auto;
    height: auto;
    z-index: -100;
    transform: translateX(-50%) translateY(-50%);
 background: url('//demosthenes.info/assets/images/polina.jpg') no-repeat;
  background-size: cover;
  transition: 1s opacity;
}
.stopfade {
   opacity: .5;
}

#polina {
  font-family: Agenda-Light, Agenda Light, Agenda, Arial Narrow, sans-serif;
  font-weight:100;
  background: rgba(0,0,0,0.3);
  color: white;
  padding: 2rem;
  width: 33%;
  margin:2rem;
  float: right;
  font-size: 1.2rem;
}
h1 {
  font-size: 3rem;
  text-transform: uppercase;
  margin-top: 0;
  letter-spacing: .3rem;
}
#polina button {
  display: block;
  width: 80%;
  padding: .4rem;
  border: none;
  margin: 1rem auto;
  font-size: 1.3rem;
  background: rgba(255,255,255,0.23);
  color: #fff;
  border-radius: 3px;
  cursor: pointer;
  transition: .3s background;
}
#polina button:hover {
   background: rgba(0,0,0,0.5);
}

a {
  display: inline-block;
  color: #fff;
  text-decoration: none;
  background:rgba(0,0,0,0.5);
  padding: .5rem;
  transition: .6s background;
}
a:hover{
  background:rgba(0,0,0,0.9);
}
@media screen and (max-width: 500px) {
  div{width:70%;}
}
@media screen and (max-device-width: 800px) {
  html { background: url(https://thenewcode.com/assets/images/polina.jpg) #000 no-repeat center center fixed; }
  #bgvid { display: none; }
}
:root {
  --input-padding-x: 1.5rem;
  --input-padding-y: .75rem;
}

body {
  background: #fa9b9b;
    fallback for old browsers
   background: -webkit-linear-gradient(to right, #0052D4, #65C7F7, #9CECFB);
  Chrome 10-25, Safari 5.1-6
  background: linear-gradient(to right, #0052D4, #65C7F7, #9CECFB);
   W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+
}

.card-signin {
  border: 0;
  border-radius: 1rem;
  box-shadow: 0 0.5rem 1rem 0 rgba(0, 0, 0, 0.1);
}

.card-signin .card-title {
  margin-bottom: 2rem;
  font-weight: 300;
  font-size: 1.5rem;
}

.card-signin .card-body {
  padding: 2rem;
}

.form-signin {
  width: 100%;
}

.form-signin .btn {
  font-size: 80%;
  border-radius: 5rem;
  letter-spacing: .1rem;
  font-weight: bold;
  padding: 1rem;
  transition: all 0.2s;
}

.form-label-group {
  position: relative;
  margin-bottom: 1rem;
}

.form-label-group input {
  border-radius: 2rem;
}

.form-label-group>input,
.form-label-group>label {
  padding: var(--input-padding-y) var(--input-padding-x);
}

.form-label-group>label {
  position: absolute;
  top: 0;
  left: 0;
  display: block;
  width: 100%;
  margin-bottom: 0;
  /* Override default `<label>` margin */
  line-height: 1.5;
  color: #495057;
  border: 1px solid transparent;
  border-radius: .25rem;
  transition: all .1s ease-in-out;
}

.form-label-group input::-webkit-input-placeholder {
  color: transparent;
}

.form-label-group input:-ms-input-placeholder {
  color: transparent;
}

.form-label-group input::-ms-input-placeholder {
  color: transparent;
}

.form-label-group input::-moz-placeholder {
  color: transparent;
}

.form-label-group input::placeholder {
  color: transparent;
}

.form-label-group input:not(:placeholder-shown) {
  padding-top: calc(var(--input-padding-y) + var(--input-padding-y) * (2 / 3));
  padding-bottom: calc(var(--input-padding-y) / 3);
}

.form-label-group input:not(:placeholder-shown)~label {
  padding-top: calc(var(--input-padding-y) / 3);
  padding-bottom: calc(var(--input-padding-y) / 3);
  font-size: 12px;
  color: #777;
}

.btn-google {
  color: white;
  background-color: #ea4335;
}

.btn-facebook {
  color: white;
  background-color: #3b5998;
}
.videoContainer {
  position: absolute;
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
  bottom: 0;
  right: 0;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
}

iframe {
  /* optional */
  width: 100%;
  height: 100%;
}
div.overlay {
    position: absolute;
    width: 100%;
    top: 0;
    left: 0;
    background: #000;
    opacity: 0.8;
    filter: alpha(opacity = 50); /* required for opacity to work in IE */
}
    </style>
  </head>
  <body>
    <!-- ปิดวีดีโอ-->
  <!--  <div class="videoContainer overlay">
        <iframe class="videoContainer__video" width="100%" height="" src="https://www.youtube.com/embed/WxjY1NrsSZc?mute=0&enablejsapi=1&controls=0&fs=0&loop=1&rel=0&showinfo=0&disablekb=1s&autoplay=1&playlist=WxjY1NrsSZc" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
    </div>-->
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="container-fluid cover-container text-center d-flex flex-column">
              <div class="row align-items-center justify-content-center flex-fill">
                  <div class="row col-md-12">
                      <div class="col-md-4"></div>
                      <div class="col-md-4" align="left">
                        <div class="col-sm-12 mx-auto">
                          <div class="card card-signin my-5">
                            <div class="card-body">
                              <h5 class="card-title text-center">เข้าสู่ระบบ</h5>
                              <form class="form-signin"  >
                                <div class="form-label-group">
                                  <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
                                  <label for="inputEmail">Username</label>
                                </div>

                                <div class="form-label-group">
                                  <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
                                  <label for="inputPassword">Password</label>
                                </div>

                                <div class="custom-control custom-checkbox mb-3">
                                  <input type="checkbox" class="custom-control-input" id="customCheck1">
                                  <label class="custom-control-label" for="customCheck1">ลืมรหัสผ่าน</label>
                                </div>
                                <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">เข้าสู่ระบบ</button>
                                <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">สมัครสมาชิก</button>
                                <hr class="my-4">
                              </form>
                            </div>
                          </div>
                        </div>
                      </div>
                  </div>
              </div>
          </div>
        </div>
      </div>
    </div>

  <script>

  </script>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
