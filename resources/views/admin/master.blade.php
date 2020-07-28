<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>  
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700&amp;subset=latin" rel="stylesheet">
    <link href="{{url('/')}}/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{url('/')}}/css/nifty.min.css" rel="stylesheet">
    <link href="{{url('/')}}/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="{{url('/')}}/plugins/animate-css/animate.min.css" rel="stylesheet">
    <link href="{{url('/')}}/plugins/morris-js/morris.min.css" rel="stylesheet">
    <link href="{{url('/')}}/plugins/switchery/switchery.min.css" rel="stylesheet">
    <link href="{{url('/')}}/plugins/bootstrap-select/bootstrap-select.min.css" rel="stylesheet">
    <link href="{{url('/')}}/css/demo/nifty-demo.min.css" rel="stylesheet">
    <link href="{{url('/')}}/plugins/pace/pace.min.css" rel="stylesheet">
    <script src="{{url('/')}}/plugins/pace/pace.min.js"></script>
</head>
<body>
     <div id="container" class="effect mainnav-lg">    
        <header id="navbar">
            <div id="navbar-container" class="boxed">
                <div class="navbar-header">
                    <a href="{{url('/')}}/" class="navbar-brand">
                        <img src="{{url('/')}}/img/logo.png" alt="Nifty Logo" class="brand-icon">
                        <div class="brand-title">
                            <span class="brand-text">{{ Auth::user()->name }}</span>
                        </div>
                    </a>
                </div>
                <div class="navbar-content clearfix">
                    <ul class="nav navbar-top-links pull-left">

                        <li class="tgl-menu-btn">
                            <a class="mainnav-toggle" href="#">
                                <i class="fa fa-navicon fa-lg"></i>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav navbar-top-links pull-right">
                        <li id="dropdown-user" class="dropdown">
                            <a href="#" data-toggle="dropdown" class="dropdown-toggle text-right">
                                <span class="pull-right">
                                    <img class="img-circle img-user media-object" src="{{url('/')}}/img/av1.png" alt="Profile Picture">
                                </span>
                                <div class="username hidden-xs">{{ Auth::user()->name }}</div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-md dropdown-menu-right with-arrow panel-default">
                                <ul class="head-list">
                                    <li>
                                        <a href="">
                                            <i class="fa fa-user fa-fw fa-lg"></i> Profile 
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('password.request') }}">
                                            <i class="fa fa-unlock fa-fw fa-lg"></i> Reset Password
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{url('/')}}/Register">
                                            <i class="fa fa-user-plus" aria-hidden="true"></i> Sign Up
                                        </a>
                                    </li>
                                    </li>
                                </ul>
                                <!-- Dropdown footer -->
                                <div class="pad-all text-right">
                                <a href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();" class="btn btn-primary">
                                   <i class="fa fa-sign-out fa-fw"></i>{{ __('Logout') }}
                                 </a>
                                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                  </form>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </header>
            <nav id="mainnav-container">
                <div id="mainnav">

                    <div id="mainnav-shortcut">
                        <ul class="list-unstyled">
                            <li class="col-xs-4" data-content="Additional Sidebar">
                                <a id="demo-toggle-aside" class="shortcut-grid" href="#">
                                    <i class="fa fa-magic"></i>
                                </a>
                            </li>
                            <li class="col-xs-4" data-content="Notification">
                                <a id="demo-alert" class="shortcut-grid" href="#">
                                    <i class="fa fa-bullhorn"></i>
                                </a>
                            </li>
                            <li class="col-xs-4" data-content="Page Alerts">
                                <a id="demo-page-alert" class="shortcut-grid" href="#">
                                    <i class="fa fa-bell"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div id="mainnav-menu-wrap">
                        <div class="nano">
                            <div class="nano-content">
                                <ul id="mainnav-menu" class="list-group">
                                    <li class="list-header">Navigation</li>
                                    <li class="active-link">
                                        <a href="{{url('/')}}/AdminShri">
                                            <i class="fa fa-dashboard"></i>
                                            <span class="menu-title">
                                                <strong>Dashboard</strong>
                                                <span class="label label-success pull-right">Top</span>
                                            </span>
                                        </a>
                                    </li>                           
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-th"></i>
                                            <span class="menu-title">
                                                <strong>Layouts</strong>
                                            </span>
                                            <i class="arrow"></i>
                                        </a>
                                        <!--Submenu-->
                                        <ul class="collapse">
                                            <li><a href="{{url('/')}}/Subscribe">Subscriber</a></li>
                                            <li><a href="{{url('/')}}/List-Contact">List Contact</a></li>
                                            <li><a href="{{url('/')}}/Users">Users</a></li>
                                            <li><a href="{{url('/')}}/Register">Add Register</a></li>
                                        </ul>
                                    </li> 
                                     <li>
                                        <a href="{{url('/')}}/About-Us">
                                           <i class="fa fa-users" aria-hidden="true"></i>
                                            <span class="menu-title">
                                                <strong>About Us</strong>
                                            </span>
                                        </a> 
                                      </li>  
                                      <li>
                                        <a href="{{url('/')}}/Maps">
                                           <i class="fa fa-users" aria-hidden="true"></i>
                                            <span class="menu-title">
                                                <strong>Maps</strong>
                                            </span>
                                        </a> 
                                      </li>   
                                      <li>
                                        <a href="{{url('/')}}/Blog">
                                           <i class="fa fa-users" aria-hidden="true"></i>
                                            <span class="menu-title">
                                                <strong>Blogs</strong>
                                            </span>
                                        </a> 
                                      </li>                                       
                                  </ul>
                           </div>
                    </div>
                  
                </div>
            </nav>
          
@yield('content')

        <footer id="footer">
            <div class="show-fixed pull-right">
                <ul class="footer-list list-inline">
                    <li>
                        <p class="text-sm">SEO Proggres</p>
                        <div class="progress progress-sm progress-light-base">
                            <div style="width: 80%" class="progress-bar progress-bar-danger"></div>
                        </div>
                    </li>

                    <li>
                        <p class="text-sm">Online Tutorial</p>
                        <div class="progress progress-sm progress-light-base">
                            <div style="width: 80%" class="progress-bar progress-bar-primary"></div>
                        </div>
                    </li>
                    <li>
                        <button class="btn btn-sm btn-dark btn-active-success">Checkout</button>
                    </li>
                </ul>
            </div>
            <div class="hide-fixed pull-right pad-rgt">Design by Shashikant</div>
            <p class="pad-lft">&#0169; 2015 Your A2ZJOBS</p>
        </footer>
        <button id="scroll-top" class="btn"><i class="fa fa-chevron-up"></i></button>
 </div>
    <script src="js/jquery-2.1.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="plugins/fast-click/fastclick.min.js"></script>
    <script src="js/nifty.min.js"></script>
    <script src="plugins/morris-js/morris.min.js"></script>
    <script src="plugins/morris-js/raphael-js/raphael.min.js"></script>
    <script src="plugins/sparkline/jquery.sparkline.min.js"></script>
    <script src="plugins/skycons/skycons.min.js"></script>
    <script src="plugins/switchery/switchery.min.js"></script>
    <script src="plugins/bootstrap-select/bootstrap-select.min.js"></script>
    <script src="js/demo/nifty-demo.min.js"></script>
    <script src="js/demo/dashboard.js"></script>
    <script type="text/javascript">
     function printDiv() 
    {

      var divToPrint=document.getElementById('DivIdToPrint');

      var newWin=window.open('','Print-Window');

      newWin.document.open();

      newWin.document.write('<html><body onload="window.print()"><table border="1" cellspacing="0">'+divToPrint.innerHTML+'</table></body></html>');

      newWin.document.close();

      setTimeout(function(){newWin.close();},10);

    }
    $(document).ready(function(){
        $("input").attr('autocomplete', 'off');
    });
    </script>
    @yield('script')
</body>
</html>   
