<!doctype html>
<html lang="en">
<head>

 <title>Home</title>

 <?php require 'core.php'; ?>

<link href="https://fonts.googleapis.com/css?family=Mali|Sriracha" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Kanit" rel="stylesheet">
</head>
<style>

p1 {font-family: 'Sriracha', cursive;}
้h4 {font-family: 'Kanit', sans-serif;}
</style>
<body>

<div class="wrapper">


    <!--<div class="main-panel">
        <nav class="navbar navbar-default navbar-fixed"> ฟิคขนาด-->
            <div class="container-fluid">

                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-left">
                      <li>
                          <a href="#">
                              <p1>สื่อส่งเสริมการเรียนรู้ทรัพย์สินทางปัญญาและลิขสิทธิ์</p1>
                          </a>
                      </li>
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                      <li>
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                              <i class="pe-7s-user"></i>
                          </a>
                      </li>
                        <li>

                            <a href="#"data-toggle="modal" data-target="#exampleModal">
                                <p>เข้าสู่ระบบ</p>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="pe-7s-user"></i>
                            </a>
                        </li>
                          <li>
                              <a href="#"class="dropdown-toggle" data-toggle="dropdown">
                                  <p>สมัครสมาชิก</p>
                              </a>
                          </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container-fluid">
            <div class="card">
                <div class="header">
                    <h4 class="title"></h4>
                    <p class="category"></p>
                </div>
                <!-- <div class="content" align="center"> ปิดกรอบที่ครอบวีดีโอ-->

              <iframe width="1500" height="600" src="https://www.youtube.com/embed/0QBns7xyKjk" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                        </div>

        <div class="content">
            <div class="container-fluid">

            </div>
        </div>

    </div>
</div>
<!--modal-->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Sign in</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
    <div class="form-group">
  <label for="exampleDropdownFormEmail2">Username</label>
  <input type="email" class="form-control" id="exampleDropdownFormEmail2" placeholder="Username">
 </div>
 <div class="form-group">
  <label for="exampleDropdownFormPassword2">Password</label>
  <input type="password" class="form-control" id="exampleDropdownFormPassword2" placeholder="Password">
 </div>
 <div class="form-check">
  <input type="checkbox" class="form-check-input" id="dropdownCheck2">
  <label class="form-check-label" for="dropdownCheck2">
   Remember me
  </label>
 </div>
 <button type="submit" class="btn btn-primary">Sign in</button>
      </div>

      !-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
      <!--<div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>-->
    </div>
  </div>
</div>

</body>

 <script type="text/javascript">
     $(document).ready(function(){

     });
 </script>

</html>
