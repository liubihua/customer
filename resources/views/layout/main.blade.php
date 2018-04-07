<!DOCTYPE html>
<html lang="zh">
    <head>
        <meta charset="UTF-8">
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no"/>
        <title>@yield('title', '一颗杨梅') | 项目 | 博客 </title>
        <!-- bootstrap -->
        <link href="{{ ('lib/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
        <!-- AdminLTE -->
        <link href="{{ ('lib/admin-lte/css/AdminLTE.min.css') }}" rel="stylesheet">
    
        <script src="{{ ('lib/jquery/jquery.min.js') }}"></script>
     
    </head>

    <body class="skin-blue layout-top-nav">
        <div class="wrapper" style="height: auto; min-height: 100%;">
            <header class="main-header">
                <nav class="navbar navbar-static-top">
                  <div class="container">
                    <div class="navbar-header">
                      <a href="../../index2.html" class="navbar-brand"><b>Admin</b>LTE</a>
                      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
                        <i class="fa fa-bars"></i>
                      </button>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
                      <ul class="nav navbar-nav">
                        <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
                        <li><a href="#">Link</a></li>
                        <li class="dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <span class="caret"></span></a>
                          <ul class="dropdown-menu" role="menu">
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something else here</a></li>
                            <li class="divider"></li>
                            <li><a href="#">Separated link</a></li>
                            <li class="divider"></li>
                            <li><a href="#">One more separated link</a></li>
                          </ul>
                        </li>
                      </ul>
                      <form class="navbar-form navbar-left" role="search">
                        <div class="form-group">
                          <input type="text" class="form-control" id="navbar-search-input" placeholder="Search">
                        </div>
                      </form>
                    </div>
                    <!-- /.navbar-collapse -->
                    <!-- Navbar Right Menu -->
                    <div class="navbar-custom-menu">
                      <ul class="nav navbar-nav">
                        <!-- Messages: style can be found in dropdown.less-->
                        <li class="dropdown messages-menu">
                          <!-- Menu toggle button -->
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-envelope-o"></i>
                            <span class="label label-success">4</span>
                          </a>
                          <ul class="dropdown-menu">
                            <li class="header">You have 4 messages</li>
                            <li>
                              <!-- inner menu: contains the messages -->
                              <ul class="menu">
                                <li><!-- start message -->
                                  <a href="#">
                                    <div class="pull-left">
                                      <!-- User Image -->
                                      <img src="../../dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                                    </div>
                                    <!-- Message title and timestamp -->
                                    <h4>
                                      Support Team
                                      <small><i class="fa fa-clock-o"></i> 5 mins</small>
                                    </h4>
                                    <!-- The message -->
                                    <p>Why not buy a new awesome theme?</p>
                                  </a>
                                </li>
                                <!-- end message -->
                              </ul>
                              <!-- /.menu -->
                            </li>
                            <li class="footer"><a href="#">See All Messages</a></li>
                          </ul>
                        </li>
                        <!-- /.messages-menu -->

                        <!-- Notifications Menu -->
                        <li class="dropdown notifications-menu">
                          <!-- Menu toggle button -->
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-bell-o"></i>
                            <span class="label label-warning">10</span>
                          </a>
                          <ul class="dropdown-menu">
                            <li class="header">You have 10 notifications</li>
                            <li>
                              <!-- Inner Menu: contains the notifications -->
                              <ul class="menu">
                                <li><!-- start notification -->
                                  <a href="#">
                                    <i class="fa fa-users text-aqua"></i> 5 new members joined today
                                  </a>
                                </li>
                                <!-- end notification -->
                              </ul>
                            </li>
                            <li class="footer"><a href="#">View all</a></li>
                          </ul>
                        </li>
                        <!-- Tasks Menu -->
                        <li class="dropdown tasks-menu">
                          <!-- Menu Toggle Button -->
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-flag-o"></i>
                            <span class="label label-danger">9</span>
                          </a>
                          <ul class="dropdown-menu">
                            <li class="header">You have 9 tasks</li>
                            <li>
                              <!-- Inner menu: contains the tasks -->
                              <ul class="menu">
                                <li><!-- Task item -->
                                  <a href="#">
                                    <!-- Task title and progress text -->
                                    <h3>
                                      Design some buttons
                                      <small class="pull-right">20%</small>
                                    </h3>
                                    <!-- The progress bar -->
                                    <div class="progress xs">
                                      <!-- Change the css width attribute to simulate progress -->
                                      <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                        <span class="sr-only">20% Complete</span>
                                      </div>
                                    </div>
                                  </a>
                                </li>
                                <!-- end task item -->
                              </ul>
                            </li>
                            <li class="footer">
                              <a href="#">View all tasks</a>
                            </li>
                          </ul>
                        </li>
                        <!-- User Account Menu -->
                        <li class="dropdown user user-menu">
                          <!-- Menu Toggle Button -->
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <!-- The user image in the navbar-->
                            <img src="../../dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
                            <!-- hidden-xs hides the username on small devices so only the image appears. -->
                            <span class="hidden-xs">Alexander Pierce</span>
                          </a>
                          <ul class="dropdown-menu">
                            <!-- The user image in the menu -->
                            <li class="user-header">
                              <img src="../../dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                              <p>
                                Alexander Pierce - Web Developer
                                <small>Member since Nov. 2012</small>
                              </p>
                            </li>
                            <!-- Menu Body -->
                            <li class="user-body">
                              <div class="row">
                                <div class="col-xs-4 text-center">
                                  <a href="#">Followers</a>
                                </div>
                                <div class="col-xs-4 text-center">
                                  <a href="#">Sales</a>
                                </div>
                                <div class="col-xs-4 text-center">
                                  <a href="#">Friends</a>
                                </div>
                              </div>
                              <!-- /.row -->
                            </li>
                            <!-- Menu Footer-->
                            <li class="user-footer">
                              <div class="pull-left">
                                <a href="#" class="btn btn-default btn-flat">Profile</a>
                              </div>
                              <div class="pull-right">
                                <a href="#" class="btn btn-default btn-flat">Sign out</a>
                              </div>
                            </li>
                          </ul>
                        </li>
                      </ul>
                    </div>
                    <!-- /.navbar-custom-menu -->
                  </div>
                  <!-- /.container-fluid -->
                </nav>
            </header>
            <div class="content-wrapper">
                <section class="content-header hidden-xs">
                    <ol class="breadcrumb">
                        <li><a href="{{ url('home') }}"><i class="glyphicon glyphicon-home"></i>首页</a></li>
                        @section('breadcrumb')
                        @show
                    </ol>
                </section>
                <section class="content padding-top-7">
                    @section('content')
                    @show
                </section>
            </div>
            <footer class="main-footer text-center padding-top-3 padding-bottom-0">
                
            </footer>
        </div>

        <!-- bootstrap -->
        <script src="{{ asset('lib/bootstrap/js/bootstrap.min.js') }}"></script>
       
        <!-- datetimepicker -->
        <!-- AdminLTE App -->
        <script src="{{ asset('lib/admin-lte/js/app.min.js') }}"></script>
        @section('custom.js')
        @show
    </body>
</html>