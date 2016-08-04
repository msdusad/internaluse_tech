<?php
      if(!isset($_SESSION)){session_start();}
       if(!isset($_SESSION['userid'])){
   header('Location:../login/index.php');
 }
 require_once('../classes/UserDetail.php');
 
 
?><head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Techvedic</title>
<link href="http://192.168.1.194:8081/currenteasyweb/css/bootstrap.min.css" rel="stylesheet">
<link href="http://192.168.1.194:8081/currenteasyweb/css/fontello.css" rel="stylesheet">
<link href="http://192.168.1.194:8081/currenteasyweb/css/nprogress.css" rel="stylesheet">
<link href="http://192.168.1.194:8081/currenteasyweb/css/prettify.min.css" rel="stylesheet">
<link href="http://192.168.1.194:8081/currenteasyweb/css/select2.min.css" rel="stylesheet">
<link href="http://192.168.1.194:8081/currenteasyweb/css/custom.min.css" rel="stylesheet">
<link href="http://192.168.1.194:8081/currenteasyweb/css/style.css" rel="stylesheet">
<!--[if lte IE 8]>
	<script type='text/javascript' src='http://192.168.1.194:8081/currenteasyweb/js/html5shiv.js'></script>
	<script type='text/javascript' src='http://192.168.1.194:8081/currenteasyweb/js/respond.min.js'></script>
<![endif]-->
</head>
<?php 
$getuser=new UserDetail() ;
$getuserdetail=$getuser->userdetails();
foreach ($getuserdetail as $viewdata) 

?>



<div class="top_nav">
  <div class="nav_menu">
    <nav>
      <div class="nav toggle"> <a id="menu_toggle"><i class="fa icon-menu"></i></a> </div>
      <ul class="nav navbar-nav navbar-right">
<li> <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false"> <img src="http://192.168.1.194:8081/currenteasyweb/images/img.jpg" alt="">
<?php echo $viewdata['name'];?>
  <span class=" fa icon-angle-down"></span> </a>
          <ul class="dropdown-menu dropdown-usermenu pull-right">
            <li><a href="http://192.168.1.194:8081/currenteasyweb/profiles/index.php"> Profile</a></li>
            <li> <a href="javascript:;"> <span class="badge bg-red pull-right">50%</span> <span>Settings</span> </a> </li>
            <li><a href="javascript:;">Help</a></li>
            <li><a href="http://192.168.1.194:8081/currenteasyweb/classes/Logout.php"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
          </ul>
        </li>
        <li role="presentation" class="dropdown"> <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false"> <i class="fa icon-mail"></i> <span class="badge bg-green">6</span> </a>
          <ul id="menu1" class="dropdown-menu list-unstyled msg_list">
            <li> <a href="../releases/notification.php"> <span class="image"><img src="http://192.168.1.194:8081/currenteasyweb/images/img.jpg" alt="Profile Image" /></span> <span> <span>John Smith</span> <span class="time">3 mins ago</span> </span> <span class="message"> Film festivals used to be do-or-die moments for movie makers. They were where... </span> </a> </li>
            <li> <a href="../releases/notification.php"> <span class="image"><img src="http://192.168.1.194:8081/currenteasyweb/images/img.jpg" alt="Profile Image" /></span> <span> <span>John Smith</span> <span class="time">3 mins ago</span> </span> <span class="message"> Film festivals used to be do-or-die moments for movie makers. They were where... </span> </a> </li>
            <li> <a href="../releases/notification.php"> <span class="image"><img src="http://192.168.1.194:8081/currenteasyweb/images/img.jpg" alt="Profile Image" /></span> <span> <span>John Smith</span> <span class="time">3 mins ago</span> </span> <span class="message"> Film festivals used to be do-or-die moments for movie makers. They were where... </span> </a> </li>
            <li> <a href="../releases/notification.php"> <span class="image"><img src="http://192.168.1.194:8081/currenteasyweb/images/img.jpg" alt="Profile Image" /></span> <span> <span>John Smith</span> <span class="time">3 mins ago</span> </span> <span class="message"> Film festivals used to be do-or-die moments for movie makers. They were where... </span> </a> </li>
            <li>
              <div class="text-center"> <a> <strong>See All Alerts</strong> <i class="fa fa-angle-right"></i> </a> </div>
            </li>
          </ul>
        </li>
        <li role="presentation" class="dropdown"> <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false"> <i class="fa icon-search"></i> </a>
          <ul id="menu2" class="dropdown-menu list-unstyled msg_list">
            <li>
              <div class="input-group noMargin">
                <input class="form-control" placeholder="Search for..." type="text">
                <span class="input-group-btn">
                <button class="btn btn-default" type="button">Go!</button>
                </span> </div>
            </li>
          </ul>
        </li>
        <li role="presentation" class="dropdown"> <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false"> <i class="fa icon-plus"></i>New </a>
          <ul id="menu3" class="dropdown-menu list-unstyled msg_list">
            <li> <a href="http://192.168.1.194:8081/currenteasyweb/tickets/new.php"> Incident </a> </li>
            <li> <a href="http://192.168.1.194:8081/currenteasyweb/problems/new.php"> Problem </a> </li>
            <li> <a href="http://192.168.1.194:8081/currenteasyweb/changes/new.php"> Change </a> </li>
            <li> <a href="http://192.168.1.194:8081/currenteasyweb/releases/new.php"> Release </a> </li>
          </ul>
        </li>
      </ul>
    </nav>
  </div>
</div>
