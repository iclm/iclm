<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

    <title>login</title>
    <style>

body {
    background: #fff;
	font-family: 'Roboto', sans-serif;
	color:#333;
	line-height: 22px;
}
h1, h2, h3, h4, h5, h6 {
	font-family: 'Roboto Condensed', sans-serif;
	font-weight: 400;
	color:#111;
	margin-top:5px;
	margin-bottom:5px;
}
h1, h2, h3 {
	text-transform:uppercase;
}

input.upload {
    position: absolute;
    top: 0;
    right: 0;
    margin: 0;
    padding: 0;
    font-size: 12px;
    cursor: pointer;
    opacity: 1;
    filter: alpha(opacity=1);
}

.form-inline .form-group{
    margin-left: 0;
    margin-right: 0;
}
.control-label {
    color:#333333;
}
    </style>
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

/*body {
  background: #fa9b9b;
    fallback for old browsers
   background: -webkit-linear-gradient(to right, #0052D4, #65C7F7, #9CECFB);
  Chrome 10-25, Safari 5.1-6
  background: linear-gradient(to right, #0052D4, #65C7F7, #9CECFB);
   W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+
}*/

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
    <div class="videoContainer overlay">
        <iframe class="videoContainer__video" width="100%" height="" src="https://www.youtube.com/embed/UnKJL_ifwkk?autoplay=1&mute=0&enablejsapi=1&controls=0&fs=0&loop=1&rel=0&showinfo=0&disablekb=1s" allow="autoplay; encrypted-media" frameborder="0"></iframe>
    </div>
    <div class="container">
 	<div class="row">
     <div class="col-md-8">
       <!--[เรียกใช้พื้นหลัง]-->
         <div class="card card-signin my-5">
       <section>
         <h1 class="text-center">สมัครสมาชิก</h1>
         <hr>
                                        <form class="form-horizontal" method="post" name="signup" id="signup" enctype="multipart/form-data" >
                                          <!--คำนำหน้าชื่อ-->
                                          <div class="form-group">
                                            <label class="control-label col-sm-3">คำนำหน้าชื่อ </label>
                                            <div class="col-md-8 col-sm-9 col-sm-10">
                                              <label>
                                              <input name="prefix" type="radio" value="mr" checked>
                                              นาย </label>
                                                 
                                              <label>
                                              <input name="prefix" type="radio" value="mrs" >
                                              นาง </label>

                                              <label>
                                              <input name="prefix" type="radio" value="miss" >
                                              นางสาว </label>
                                            </div>
                                          </div>
                                          <!--ชื่อจริง-->
                                          <div class="form-group">
                                            <label class="control-label col-sm-3">ชื่อจริง<br>
                                            </label>
                                            <div class="col-md-5 col-sm-8">
                                              <input type="text" class="form-control" name="contactnum2" id="contactnum2" placeholder="ชื่อจริง" value="">
                                            </div>
                                          </div>
                                          <div class="form-group">
                                            <label class="control-label col-sm-3">นามสกุล<br>
                                            </label>
                                            <div class="col-md-5 col-sm-8">
                                              <input type="text" class="form-control" name="contactnum2" id="contactnum2" placeholder="นามสกุล" value="">
                                            </div>
                                          </div>

                                          <!--วันเกิด-->
                                          <div class="form-group">
                                            <label class="control-label col-sm-3">Date of Birth <span class="text-danger">*</span></label>
                                            <div class="col-xs-8">
                                              <div class="form-inline">
                                                <div class="form-group">
                                                  <select name="dd" class="form-control">
                                                    <option value="">Date</option>
                                                    <option value="1" >1 </option><option value="2" >2 </option><option value="3" >3 </option><option value="4" >4 </option><option value="5" >5 </option><option value="6" >6 </option><option value="7" >7 </option><option value="8" >8 </option><option value="9" >9 </option><option value="10" >10 </option><option value="11" >11 </option><option value="12" >12 </option><option value="13" >13 </option><option value="14" >14 </option><option value="15" >15 </option><option value="16" >16 </option><option value="17" >17 </option><option value="18" >18 </option><option value="19" >19 </option><option value="20" >20 </option><option value="21" >21 </option><option value="22" >22 </option><option value="23" >23 </option><option value="24" >24 </option><option value="25" >25 </option><option value="26" >26 </option><option value="27" >27 </option><option value="28" >28 </option><option value="29" >29 </option><option value="30" >30 </option><option value="31" >31 </option>                </select>
                                                </div>
                                                <div class="form-group">
                                                  <select name="mm" class="form-control">
                                                    <option value="">Month</option>
                                                    <option value="1">Jan</option><option value="2">Feb</option><option value="3">Mar</option><option value="4">Apr</option><option value="5">May</option><option value="6">Jun</option><option value="7">Jul</option><option value="8">Aug</option><option value="9">Sep</option><option value="10">Oct</option><option value="11">Nov</option><option value="12">Dec</option>                </select>
                                                </div>
                                                <div class="form-group" >
                                                  <select name="yyyy" class="form-control">
                                                    <option value="0">Year</option>
                                                    <option value="1955" >1955 </option><option value="1956" >1956 </option><option value="1957" >1957 </option><option value="1958" >1958 </option><option value="1959" >1959 </option><option value="1960" >1960 </option><option value="1961" >1961 </option><option value="1962" >1962 </option><option value="1963" >1963 </option><option value="1964" >1964 </option><option value="1965" >1965 </option><option value="1966" >1966 </option><option value="1967" >1967 </option><option value="1968" >1968 </option><option value="1969" >1969 </option><option value="1970" >1970 </option><option value="1971" >1971 </option><option value="1972" >1972 </option><option value="1973" >1973 </option><option value="1974" >1974 </option><option value="1975" >1975 </option><option value="1976" >1976 </option><option value="1977" >1977 </option><option value="1978" >1978 </option><option value="1979" >1979 </option><option value="1980" >1980 </option><option value="1981" >1981 </option><option value="1982" >1982 </option><option value="1983" >1983 </option><option value="1984" >1984 </option><option value="1985" >1985 </option><option value="1986" >1986 </option><option value="1987" >1987 </option><option value="1988" >1988 </option><option value="1989" >1989 </option><option value="1990" >1990 </option><option value="1991" >1991 </option><option value="1992" >1992 </option><option value="1993" >1993 </option><option value="1994" >1994 </option><option value="1995" >1995 </option><option value="1996" >1996 </option><option value="1997" >1997 </option><option value="1998" >1998 </option><option value="1999" >1999 </option><option value="2000" >2000 </option><option value="2001" >2001 </option><option value="2002" >2002 </option><option value="2003" >2003 </option><option value="2004" >2004 </option><option value="2005" >2005 </option><option value="2006" >2006 </option>                </select>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                          <!--อายุ-->
                                        <!--  <div class="form-group">
                                            <label class="control-label col-sm-3">ชื่อจริง<br>
                                            </label>
                                            <div class="col-md-5 col-sm-8">
                                              <input type="text" class="form-control" name="contactnum2" id="contactnum2" placeholder="ชื่อจริง" value="">
                                            </div>
                                    <div class="form-group">
                                      <label class="control-label col-sm-3">Set Password <span class="text-danger">*</span></label>
                                      <div class="col-md-5 col-sm-8">
                                        <div class="input-group">
                                          <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                          <input type="password" class="form-control" name="password" id="password" placeholder="Choose password (5-15 chars)" value="">
                                       </div>
                                      </div>
                                    </div>-->
                                    <!--อายุ-->
                                    <div class="form-group">
                                      <label class="control-label col-sm-3">อายุ<br>
                                      </label>
                                      <div class="col-md-5 col-sm-8">
                                        <input type="text" class="form-control" name="contactnum2" id="contactnum2" placeholder="อายุ" value="">
                                      </div>
                                    </div>
                                    <!--เพศ-->
                                    <div class="form-group">
                                    <label class="control-label col-sm-3">เพศ</label>
                                    <div class="col-md-8 col-sm-9">
                                      <label>
                                      <input name="gender" type="radio" value="Male" checked>
                                      ชาย </label>
                                         
                                      <label>
                                      <input name="gender" type="radio" value="Female" >
                                      หญิง </label>
                                    </div>
                                  </div>
                                    <!--ที่อยู่-->
                                    <div class="form-group">
                                      <label class="control-label col-sm-3">ที่อยู่<br>
                                      </label>
                                      <div class="col-md-5 col-sm-8">
                                        <input type="text" class="form-control" name="contactnum2" id="contactnum2" placeholder="ที่อยู่" value="">
                                      </div>
                                    </div>

                                    <!--จังหวัด-->
                                    <!--เบอร์โทร-->
                                    <div class="form-group">
                                      <label class="control-label col-sm-3">เบอร์โทรศัพท์</span></label>
                                      <div class="col-md-5 col-sm-8">
                                      	<div class="input-group">
                                          <span class="input-group-addon"><i class="glyphicon glyphicon-phone"></i></span>
                                        <input type="text" class="form-control" name="contactnum" id="contactnum" placeholder="Enter your Primary contact no." value="">
                                        </div>
                                      </div>
                                    </div>
                                    <!--อีเมลล์-->
                                    <div class="form-group">
                                      <label class="control-label col-sm-3">Email</label>
                                      <div class="col-md-8 col-sm-9">
                                          <div class="input-group">
                                          <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                                          <input type="email" class="form-control" name="email" id="email" placeholder=" Email" value="">
                                        </div>
                                        <small> กรุณาใส่ Email เพื่อความปลอดภัยของคุณ </small> </div>
                                    </div>
                                    <!--Username-->
                                    <div class="form-group">
                                      <label class="control-label col-sm-3">Username<span class="text-danger">*</span></label>
                                      <div class="col-md-8 col-sm-9">
                                        <input type="text" class="form-control" name="mem_name" id="mem_name" placeholder="กรุณาใส่ Username ของคุณ" value="">
                                      </div>
                                    </div>
                                    <!--Password-->
                                    <div class="form-group">
                                      <label class="control-label col-sm-3"> Password <span class="text-danger">*</span></label>
                                      <div class="col-md-5 col-sm-8">
                                        <div class="input-group">
                                          <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                          <input type="password" class="form-control" name="cpassword" id="cpassword" placeholder="กรุณาใส่รหัสผ่าน 7 ตัว" value="">
                                        </div>
                                      </div>
                                    </div>
                                    <!--ConPassword-->
                                    <div class="form-group">
                                      <label class="control-label col-sm-3"> ยืนยัน Password <span class="text-danger">*</span></label>
                                      <div class="col-md-5 col-sm-8">
                                        <div class="input-group">
                                          <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                          <input type="password" class="form-control" name="cpassword" id="cpassword" placeholder="กรุณาใส่รหัสผ่านอีกครั้ง" value="">
                                        </div>
                                      </div>
                                    </div>

                                    <!--
                                    <div class="form-group">
                                      <label class="control-label col-sm-3">Security Code </label>
                                      <div class="col-md-5 col-sm-8">
                                        <div >

                                            <input type="text" name="captcha" id="captcha" class="form-control label-warning"  />
                                          </div>
                                      </div>
                                    </div>-->
                                    <div class="form-group">
                                    <!--  <div class="col-xs-offset-3 col-md-8 col-sm-9"><span class="text-muted"><span class="label label-danger">Note:-</span> By clicking Sign Up, you agree to our <a href="#">Terms</a> and that you have read our <a href="#">Policy</a>, including our <a href="#">Cookie Use</a>.</span> </div>-->
                                    </div>
                                    <div class="form-group">
                                      <div class="col-xs-offset-3 col-xs-10">
                                        <input name="Submit" type="submit" value="Sign Up" class="btn btn-primary">
                                      </div>
                                    </div>
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
      </div>
    </div>

  <script>

  </script>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
  </body>
</html>
