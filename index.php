<!DOCTYPE html>
<html lang="en">
<head>
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
<body class="nav-md">
<div class="container body">
  <div class="main_container">
  <div class="top_nav">
  <div class="nav_menu">
    <nav>
      <div class="nav toggle"> <a id="menu_toggle"><i class="fa icon-menu"></i></a> </div>
      <ul class="nav navbar-nav navbar-right">
<li> <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false"> <img src="http://192.168.1.194:8081/currenteasyweb/images/img.jpg" alt="">

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
            <li> <a href="releases/notification.php"> <span class="image"><img src="http://192.168.1.194:8081/currenteasyweb/images/img.jpg" alt="Profile Image" /></span> <span> <span>John Smith</span> <span class="time">3 mins ago</span> </span> <span class="message"> Film festivals used to be do-or-die moments for movie makers. They were where... </span> </a> </li>
            <li> <a href="releases/notification.php"> <span class="image"><img src="http://192.168.1.194:8081/currenteasyweb/images/img.jpg" alt="Profile Image" /></span> <span> <span>John Smith</span> <span class="time">3 mins ago</span> </span> <span class="message"> Film festivals used to be do-or-die moments for movie makers. They were where... </span> </a> </li>
            <li> <a href="releases/notification.php"> <span class="image"><img src="http://192.168.1.194:8081/currenteasyweb/images/img.jpg" alt="Profile Image" /></span> <span> <span>John Smith</span> <span class="time">3 mins ago</span> </span> <span class="message"> Film festivals used to be do-or-die moments for movie makers. They were where... </span> </a> </li>
            <li> <a href="releases/notification.php"> <span class="image"><img src="http://192.168.1.194:8081/currenteasyweb/images/img.jpg" alt="Profile Image" /></span> <span> <span>John Smith</span> <span class="time">3 mins ago</span> </span> <span class="message"> Film festivals used to be do-or-die moments for movie makers. They were where... </span> </a> </li>
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
    <?php 
    include("include/right-nav.php"); ?>
    <div class="right_col" role="main">
      <div class="row tile_count">
        <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count"> <span class="count_top"><i class="fa icon-user"></i> Overdue</span>
          <div class="count">2500</div>
          <span class="count_bottom"><i class="green">4% </i> From last Week</span> </div>
        <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count"> <span class="count_top"><i class="fa icon-clock"></i> Open</span>
          <div class="count">123.50</div>
          <span class="count_bottom"><i class="green"><i class="fa icon-up-dir"></i> 3% </i> From last Week</span> </div>
        <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count"> <span class="count_top"><i class="fa icon-user"></i> Total Males</span>
          <div class="count green">2,500</div>
          <span class="count_bottom"><i class="green"><i class="fa icon-up-dir"></i> 34% </i> From last Week</span> </div>
        <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count"> <span class="count_top"><i class="fa icon-user"></i> On Hold</span>
          <div class="count">4,567</div>
          <span class="count_bottom"><i class="red"><i class="fa icon-up-dir"></i> 12% </i> From last Week</span> </div>
        <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count"> <span class="count_top"><i class="fa icon-user"></i> Due Today</span>
          <div class="count">2,315</div>
          <span class="count_bottom"><i class="green"><i class="fa icon-up-dir"></i> 34% </i> From last Week</span> </div>
        <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count"> <span class="count_top"><i class="fa icon-user"></i> Unassigned</span>
          <div class="count">7,325</div>
          <span class="count_bottom"><i class="green"><i class="fa icon-up-dir"></i> 34% </i> From last Week</span> </div>
      </div>
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12 margin-bottom-20">
          <div class="dashboard_graph padding-bottom-10">
            <h3>Recent Activity</h3>
            <ul class="bdList">
              <li>
                <div class="media">
                  <div class="media-left"><img src="images/profile_blank_thumb.gif" alt="" class="img-circle" /></div>
                  <div class="media-body">
                    <p>Account Admin changed the release status of <a href="#"><strong>Replacing Exchange Server 3 (ES3) (#REL-1)</strong></a> to Completed.M</p>
                    <p>3 days ago</p>
                  </div>
                </div>
              </li>
              <li>
                <div class="media">
                  <div class="media-left"><img src="images/profile_blank_thumb.gif" alt="" class="img-circle" /></div>
                  <div class="media-body">
                    <p>Account Admin changed the release status of <a href="#"><strong>Replacing Exchange Server 3 (ES3) (#REL-1)</strong></a> to Completed.M</p>
                    <p>3 days ago</p>
                  </div>
                </div>
              </li>
              <li>
                <div class="media">
                  <div class="media-left"><img src="images/profile_blank_thumb.gif" alt="" class="img-circle" /></div>
                  <div class="media-body">
                    <p>Account Admin changed the release status of <a href="#"><strong>Replacing Exchange Server 3 (ES3) (#REL-1)</strong></a> to Completed.M</p>
                    <p>3 days ago</p>
                  </div>
                </div>
              </li>
              <li>
                <div class="media">
                  <div class="media-left"><img src="images/profile_blank_thumb.gif" alt="" class="img-circle" /></div>
                  <div class="media-body">
                    <p>Account Admin changed the release status of <a href="#"><strong>Replacing Exchange Server 3 (ES3) (#REL-1)</strong></a> to Completed.M</p>
                    <p>3 days ago</p>
                  </div>
                </div>
              </li>
            </ul>
            <div class="clearfix"></div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4 col-sm-4 col-xs-12">
          <div class="x_panel tile fixed_height_320">
            <div class="x_title">
              <h2>Aishwarya M <br>
                <span class="p-xs green">(Account Manager) Freshservice</span></h2>
              <ul class="nav navbar-right panel_toolbox">
                <li><a class="collapse-link"><i class="fa icon-up-open"></i></a> </li>
                <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa icon-wrench"></i></a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="#">Settings 1</a> </li>
                    <li><a href="#">Settings 2</a> </li>
                  </ul>
                </li>
                <li><a class="close-link"><i class="fa icon-cancel"></i></a> </li>
              </ul>
              <div class="clearfix"></div>
            </div>
            <div class="x_content">
              <h4>Hi, How is it going? </h4>
              <p>I will be your account manager helping you with your evaluation. Please reach out to me if you have any questions.</p>
              <div class="media">
                <div class="media-left">
                  <p><i class="icon-mail"></i></p>
                  <p><i class="icon-phone"></i></p>
                </div>
                <div class="media-body">
                  <p><a href="mailto:aishwarya.m@freshdesk.com">aishwarya.m@freshdesk.com</a></p>
                  <p><a href="mailto:aishwarya.m@freshdesk.com">+1 (866) 832-3090</a></p>
                </div>
              </div>
              <p>Current Plan: <strong>Estate</strong> &nbsp;&nbsp;<strong><a href="#">Choose a Plan<i class="icon-angle-double-right"></i></a></strong></p>
              <p>Your trial will expire in 25 days.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-4 col-xs-12">
          <div class="x_panel tile fixed_height_320 overflow_hidden">
            <div class="x_title">
              <h2>Announcements</h2>
              <ul class="nav navbar-right panel_toolbox">
                <li><a class="collapse-link"><i class="fa icon-up-open"></i></a> </li>
                <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa icon-wrench"></i></a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="#">Settings 1</a> </li>
                    <li><a href="#">Settings 2</a> </li>
                  </ul>
                </li>
                <li><a class="close-link"><i class="fa icon-cancel"></i></a> </li>
              </ul>
              <div class="clearfix"></div>
            </div>
            <div class="x_content">
              <h4><a href="#">Welcome to Freshservice</a> <br>
                <span class="p-xs green">30 Jun 2016</span></h4>
              <p><a href="#"><i class="icon-plus-circled"></i> New Announcement</a> / <a href="#" class="green">View All</a></p>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-4 col-xs-12">
          <div class="x_panel tile fixed_height_320">
            <div class="x_title">
              <h2>My Tasks</h2>
              <ul class="nav navbar-right panel_toolbox">
                <li><a class="collapse-link"><i class="fa icon-up-open"></i></a> </li>
                <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa icon-wrench"></i></a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="#">Settings 1</a> </li>
                    <li><a href="#">Settings 2</a> </li>
                  </ul>
                </li>
                <li><a class="close-link"><i class="fa icon-cancel"></i></a> </li>
              </ul>
              <div class="clearfix"></div>
            </div>
            <div class="x_content">
              <ul class="bdList">
                <li><a href="#">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</a></li>
                <li><a href="#">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled 
                  it to make a type specimen book.</a></li>
                <li><a href="#">It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 col-sm-6 col-xs-12">
          <div class="x_panel tile fixed_height_320">
            <div class="x_title">
              <h2>Leaderboard <br>
                <span class="p-xs green">This Month</span></h2>
              <ul class="nav navbar-right panel_toolbox">
                <li><a class="collapse-link"><i class="fa icon-up-open"></i></a> </li>
                <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa icon-wrench"></i></a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="#">Settings 1</a> </li>
                    <li><a href="#">Settings 2</a> </li>
                  </ul>
                </li>
                <li><a class="close-link"><i class="fa icon-cancel"></i></a></li>
              </ul>
              <div class="clearfix"></div>
            </div>
            <div class="x_content">
              <ul class="bdList">
                <li>
                  <div class="media">
                    <div class="media-left"><img src="images/profile_blank_thumb.gif" width="40" alt="" class="img-circle borderSolid"></div>
                    <div class="media-body">
                      <p><a href="#" class="green">Account Admin</a><br>
                        Most Valuable Player</p>
                    </div>
                    <div class="media-right"><img src="images/trophy1.png" width="40" alt=""></div>
                  </div>
                </li>
                <li>
                  <div class="media">
                    <div class="media-left"><img src="images/profile_blank_thumb.gif" width="40" alt="" class="img-circle borderSolid"></div>
                    <div class="media-body">
                      <p><a href="#" class="green">Account Admin</a><br>
                        Sharpshooter</p>
                    </div>
                    <div class="media-right"><img src="images/trophy2.png" width="40" alt=""></div>
                  </div>
                </li>
                <li>
                  <div class="media">
                    <div class="media-left"><img src="images/profile_blank_thumb.gif" width="40" alt="" class="img-circle borderSolid"></div>
                    <div class="media-body">
                      <p><a href="#" class="green">Account Admin</a><br>
                        Most Valuable Player</p>
                    </div>
                    <div class="media-right"><img src="images/trophy1.png" width="40" alt=""></div>
                  </div>
                </li>
              </ul>
              <p><a href="#" class="green">See all</a></p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-sm-6 col-xs-12">
          <div class="x_panel tile fixed_height_320">
            <div class="x_title">
              <h2>Available Quests</h2>
              <ul class="nav navbar-right panel_toolbox">
                <li><a class="collapse-link"><i class="fa icon-up-open"></i></a> </li>
                <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa icon-wrench"></i></a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="#">Settings 1</a> </li>
                    <li><a href="#">Settings 2</a> </li>
                  </ul>
                </li>
                <li><a class="close-link"><i class="fa icon-cancel"></i></a></li>
              </ul>
              <div class="clearfix"></div>
            </div>
            <div class="x_content">
              <ul class="bdList">
                <li>
                  <div class="media">
                    <div class="media-left">
                      <p class="padding-top-10"><img src="images/Capture1.png" alt="" width="35" />
                      <p>
                      <p class="text-center"><span class="bg-green img-rounded padding-5">200</span></p>
                    </div>
                    <div class="media-body p-xs">
                      <h5>Earn Customer Love!</h5>
                      Resolve 10 tickets in a week with Customer Satisfaction rating of Awesome and unlock the "Heart" badge and get 200 Bonus points!</div>
                  </div>
                </li>
                <li>
                  <div class="media">
                    <div class="media-left">
                      <p class="padding-top-10"><img src="images/Capture1.png" alt="" width="35" />
                      <p>
                      <p class="text-center"><span class="bg-green img-rounded padding-5">500</span></p>
                    </div>
                    <div class="media-body p-xs">
                      <h5>Earn Customer Love!</h5>
                      Resolve 10 tickets in a week with Customer Satisfaction rating of Awesome and unlock the "Heart" badge and get 200 Bonus points!</div>
                  </div>
                </li>
              </ul>
              <p><a href="#" class="green">See all</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php include("include/footer.php"); ?>
  </div>
</div>

</body>
</html>