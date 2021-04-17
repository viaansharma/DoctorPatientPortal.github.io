 <div class="row" style="background:#2ac1d6;">
  <div class="col-sm-12" id="header1"><span id="text">WELCOME TO DOCTOR PATIENT PORTAL-<?php echo $_SESSION['email']?></span></div>
  </div>
  <div class="row" style="padding:5px;background:#e6e9ec;min-height:70px;">
  <div class="col-sm-1" ><a href="dashboard.php"><img src="images/logo.png";style="border-radius:100%"width="100px";height="100px"/></a></div>
  <div class="col-sm-11" >
  <!--nav bar coding -->
  <nav class="navbar navbar-expand-lg navbar-light ml-3"id="menu">
  <button class="navbar-toggler" type="button" data-toggle="collapse" 
  data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" 
  aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse pl-3" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto px-3">
      <li class="nav-item active">
        <a style="font-size: 22px;" class="nav-link" href="admin_dashboard.php"><i class="fa fa-dashboard" >
    </i>&nbsp;Dashboard</a>
      </li>
      <li class="nav-item">
        <a style="font-size: 22px;" class="nav-link" href="add_doctors.php"><i class="fa fa-file" ></i>&nbsp;Add Doctors</a>
      </li>
      <li class="nav-item">
        <a style="font-size: 22px;" class="nav-link" href="view_doctors.php"><i class="fa fa-file" ></i>&nbsp;View Doctors</a>
      </li>
      <li class="nav-item">
        <a style="font-size: 22px;" class="nav-link" href="view_feedbacks.php"><i class="fa fa-file" ></i>&nbsp;View Feedbacks</a>
      </li>
      <li class="nav-item">
        <a style="font-size: 22px;" class="nav-link" href="view_patients.php"><i class="fa fa-upload" ></i>&nbsp;View Patient</a>
      </li>
       <li class="nav-item">
        <a style="font-size: 22px;" style="font-size: 22px;" class="nav-link" href="view_appointments.php"><i class="fa fa-upload" >
    </i>&nbsp;View Appointment</a>
      </li>
       <li class="nav-item">
        <a style="font-size: 22px;" class="nav-link" href="search_donars.php"><i class="fa fa-upload" >
    </i>&nbsp;Search Donar</a>
      <li class="nav-item">
        <a style="font-size: 22px;" class="nav-link " href="admin_logout.php"><i class="fa fa-sign-out" >
    </i>&nbsp;Logout</a>
      </li>
    </ul>
  </div></div>
  </div>