<?php
require_once('../classes/Path.php');
require_once('../classes/UserDetail.php');
  
      if(!isset($_SESSION)){session_start();}
       if(!isset($_SESSION['userid'])){
   header('Location:'.WEB_ROOT.'login/index');
 }
 
   
 
?><head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Techvedic</title>
<link href="<?php echo CSS_ROOT;?>bootstrap.min.css" rel="stylesheet">
<link href="<?php echo CSS_ROOT;?>fontello.css" rel="stylesheet">
<link href="<?php echo CSS_ROOT;?>nprogress.css" rel="stylesheet">
<link href="<?php echo CSS_ROOT;?>prettify.min.css" rel="stylesheet">
<link href="<?php echo CSS_ROOT;?>select2.min.css" rel="stylesheet">
<link href="<?php echo CSS_ROOT;?>custom.min.css" rel="stylesheet">
<link href="<?php echo CSS_ROOT;?>style.css" rel="stylesheet">
<!--[if lte IE 8]>
	<script type='text/javascript' src='../js/html5shiv.js'></script>
	<script type='text/javascript' src='../js/respond.min.js'></script>
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
<li> <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false"> <img src="<?php if($viewdata['profile_pic']!=''){
echo DOCS_ROOT.$_SESSION['userid']."/profile/".$viewdata['profile_pic'];
             }else{
              echo IMAGE_ROOT."profile.gif";
             } ?>"  alt="">
<?php echo $viewdata['name'];?>
  <span class=" fa icon-angle-down"></span> </a>
          <ul class="dropdown-menu dropdown-usermenu pull-right">
            <li><a href="<?php echo WEB_ROOT;?>profiles/index"> Profile</a></li>
            <li> <a href="javascript:;"> <span class="badge bg-red pull-right">50%</span> <span>Settings</span> </a> </li>
            <li><a href="javascript:;">Help</a></li>
            <li><a href="<?php echo WEB_ROOT;?>classes/Logout"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
          </ul>
        </li>
        <li role="presentation" class="dropdown"> <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false"> <i class="fa icon-mail"></i> <span class="badge bg-green">6</span> </a>
          <ul id="menu1" class="dropdown-menu list-unstyled msg_list">
            <li> <a href="<?php echo WEB_ROOT;?>releases/notification"> <span class="image"><img src="<?php echo IMAGE_ROOT;?>img.jpg" alt="Profile Image" /></span> <span> <span>John Smith</span> <span class="time">3 mins ago</span> </span> <span class="message"> Film festivals used to be do-or-die moments for movie makers. They were where... </span> </a> </li>
            <li> <a href="<?php echo WEB_ROOT;?>releases/notification"> <span class="image"><img src="<?php echo IMAGE_ROOT;?>img.jpg" alt="Profile Image" /></span> <span> <span>John Smith</span> <span class="time">3 mins ago</span> </span> <span class="message"> Film festivals used to be do-or-die moments for movie makers. They were where... </span> </a> </li>
            <li> <a href="<?php echo WEB_ROOT;?>releases/notification"> <span class="image"><img src="<?php echo IMAGE_ROOT;?>img.jpg" alt="Profile Image" /></span> <span> <span>John Smith</span> <span class="time">3 mins ago</span> </span> <span class="message"> Film festivals used to be do-or-die moments for movie makers. They were where... </span> </a> </li>
            <li> <a href="<?php echo WEB_ROOT;?>releases/notification"> <span class="image"><img src="<?php echo IMAGE_ROOT;?>img.jpg" alt="Profile Image" /></span> <span> <span>John Smith</span> <span class="time">3 mins ago</span> </span> <span class="message"> Film festivals used to be do-or-die moments for movie makers. They were where... </span> </a> </li>
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
            <li> <a href="<?php echo WEB_ROOT;?>tickets/new"> Incident </a> </li>
            <li> <a href="<?php echo WEB_ROOT;?>problems/new"> Problem </a> </li>
            <li> <a href="<?php echo WEB_ROOT;?>changes/new"> Change </a> </li>
            <li> <a href="<?php echo WEB_ROOT;?>releases/new"> Release </a> </li>
          </ul>
        </li>
      </ul>
    </nav>
  </div>
</div>
