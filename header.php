<!--<div class="row">
      <div class="col-sm-12"><h2 style="text-align: center;height: 40px;"><?php// echo $_SESSION['Username']?></h2></div>
    </div>
  </div>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <div class="row mr-2">
      <div class="col-sm-2 ">
       <a href="dashboard.php"><img src="photo/<?php //echo $_SESSION['profile']?>" height="60px;" width="60px;" style="border-radius: 50%">
      </a></div>
    </div>
    <a class="navbar-brand" href="#">Welcome &nbsp;<?php //echo $_SESSION['Username']?></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span  class="navbar-toggler-icon"></span>
    </button> 
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
        
        <a href="MyDetails.php">
           <button class="btn btn-outline-success me-2" type="button">My Details </button>
        </a>

        <a href="BookAppointment.php">
           <button class="btn btn-outline-success me-2" type="button"> Book Appointment </button>
        </a> 

        <a href="ViewAppointment.php">
           <button class="btn btn-outline-success me-2" type="button">View Appointment </button>
        </a>

        <a href="CancelBooking.php">
           <button class="btn btn-outline-success me-2" type="button">Cancel Booking </button>
        </a>

        <a href="SearchDoctor.php">
           <button class="btn btn-outline-success me-2" type="button">Search Doctor </button>
        </a>

        <a href="DonateOrgan.php">
           <button class="btn btn-outline-success me-2" type="button">Donate Organ </button>
        </a> 
          
        <a href="SearchDonate.php">
           <button class="btn btn-outline-success me-2" type="button">Search Donate </button>
        </a> 
         
        <a href="Feedback.php">
           <button class="btn btn-outline-danger me-2" type="button">Feedback </button>
        </a>
  
        <a href="Logout.php">
          <button class="btn btn-outline-info me-2" type="button">Logout </button>
        </a>

      </ul>
    </div>
  </div>
</nav>
background image
<div class="container-fluid background">
-->


  <div class="row" style="background:#2ac1d6;">
  <div class="col-sm-12" id="header1"><span id="text">WELCOME TO DOCTOR PATIENT PORTAL-<?php echo $_SESSION['Username']?></span></div>
  </div>
  <div class="row" style="padding:5px;background:#e6e9ec;min-height:70px;">
  <div class="col-sm-1" ><a href="dashboard.php"><img src="images/h1.png";style="border-radius:100%"width="80px";height="80px"/></a></div>
  <div class="col-sm-10" >
  <!--nav bar coding -->
  <nav class="navbar navbar-expand-lg navbar-light "id="menu">
  <button class="navbar-toggler" type="button" data-toggle="collapse" 
  data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" 
  aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="dashboard.php"><i class="fa fa-dashboard" >
    </i>&nbsp;Dashboard</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="MyDetails.php"><i class="fa fa-file" ></i>&nbsp;My Details</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="BookAppointment.php"><i class="fa fa-medkit" >
        </i>&nbsp;Book Appointment</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="ViewAppointment.php"><i class="fa fa-meh-o" >
    </i>&nbsp;View Appointment </a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="CancelBooking.php"><i class="fa fa-close" >
    </i>&nbsp;Cancel Booking</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="SearchDoctor.php"><i class="fa fa-user-md" >
    </i>&nbsp;Search Doctor </a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="DonateOrgan.php"><i class="fa fa-heartbeat" >
    </i>&nbsp;Donate Organ </a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="SearchDonate.php"><i class="fa fa-search" >
    </i>&nbsp;Search Donate </a>
      </li>
        <li class="nav-item">
        <a class="nav-link" href="Feedback.php"><i class="fa fa-comment" >
    </i>&nbsp;Feedback </a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link " href="Logout.php"><i class="fa fa-sign-out" >
    </i>&nbsp;Logout</a>
      </li>
    </ul>
  </div></div>
  <div class="col-sm-1"><img src="photo/<?php echo $_SESSION['profile']?>" style="border-radius:50%;"height="60px" width="60px"<?php echo $_SESSION['profile']?>
     /></div>
  </div>