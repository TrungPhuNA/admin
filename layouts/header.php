<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <meta name="description" content="">
        <meta name="keywords" content="">
        <title> Admin </title>
        <link rel="stylesheet" href="/css/vendor.bundle.css">
        <link rel="stylesheet" href="/css/app.css">
        <link rel="stylesheet" href="/css/theme-a.css">
    </head>
    <body>
        <div id="app_wrapper">
            <header id="app_topnavbar-wrapper">
                <nav role="navigation" class="navbar topnavbar">
                    <div class="nav-wrapper">
                        <ul class="nav navbar-nav pull-left left-menu">
                            <li class="app_menu-open">
                                <a href="javascript:void(0)" data-toggle-state="app_sidebar-left-open" data-key="leftSideBar">
                                <i class="zmdi zmdi-menu"></i>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav navbar-nav left-menu hidden-xs">
                            <li>
                                <a href="javascript:void(0)" class="nav-link">
                                <span>Home</span>
                                </a>
                            </li>
                           
                        </ul>
                        <ul class="nav navbar-nav pull-right">
                            <li class="dropdown avatar-menu">
                                <a href="javascript:void(0)" data-toggle="dropdown" aria-expanded="false">
                                <span class="meta">
                                <span class="avatar">
                                <img src="assets/img/profiles/02.jpg" alt="" class="img-circle max-w-35">
                                <i class="badge mini success status"></i>
                                </span>
                                <span class="name">Mike Jones</span>
                                <span class="caret"></span>
                                </span>
                                </a>
                                <ul class="dropdown-menu btn-primary dropdown-menu-right">
                                    <li>
                                        <a href="page-profile.html"><i class="zmdi zmdi-account"></i> Profile</a>
                                    </li>
                                    <li>
                                        <a href="app-mail.html"><i class="zmdi zmdi-email"></i> Messages</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)"><i class="zmdi zmdi-settings"></i> Account Settings</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)"><i class="zmdi zmdi-sign-in"></i> Sign Out</a>
                                    </li>
                                </ul>
                            </li>
                        
                            <li>
                                <a href="javascript:void(0)" data-navsearch-open>
                                <i class="zmdi zmdi-search"></i>
                                </a>
                            </li>
                            <li class="dropdown hidden-xs hidden-sm">
                                <a href="javascript:void(0)" data-toggle="dropdown" aria-expanded="false">
                                <span class="badge mini status danger"></span>
                                <i class="zmdi zmdi-notifications"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-lg-menu dropdown-menu-right dropdown-alt">
                                    <li class="dropdown-menu-header">
                                        <ul class="card-actions icons  left-top">
                                            <li class="withoutripple">
                                                <a href="javascript:void(0)" class="withoutripple">
                                                <i class="zmdi zmdi-settings"></i>
                                                </a>
                                            </li>
                                        </ul>
                                        <h5>NOTIFICATIONS</h5>
                                        <ul class="card-actions icons right-top">
                                            <li>
                                                <a href="javascript:void(0)">
                                                <i class="zmdi zmdi-check-all"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <div class="card">
                                            <a href="javascript:void(0)" class="pull-right dismiss" data-dismiss="close">
                                            <i class="zmdi zmdi-close"></i>
                                            </a>
                                            <div class="card-body">
                                                <ul class="list-group ">
                                                    <li class="list-group-item ">
                                                        <span class="pull-left"><img src="assets/img/profiles/11.jpg" alt="" class="img-circle max-w-40 m-r-10 "></span>
                                                        <div class="list-group-item-body">
                                                            <div class="list-group-item-heading">Dakota Johnson</div>
                                                            <div class="list-group-item-text">Do you want to grab some sushi for lunch?</div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="card">
                                            <a href="javascript:void(0)" class="pull-right dismiss" data-dismiss="close">
                                            <i class="zmdi zmdi-close"></i>
                                            </a>
                                            <div class="card-body">
                                                <ul class="list-group ">
                                                    <li class="list-group-item ">
                                                        <span class="pull-left"><img src="assets/img/profiles/07.jpg" alt="" class="img-circle max-w-40 m-r-10 "></span>
                                                        <div class="list-group-item-body">
                                                            <div class="list-group-item-heading">Todd Cook</div>
                                                            <div class="list-group-item-text">Let's schedule a meeting with our design team at 10am.</div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="card">
                                            <a href="javascript:void(0)" class="pull-right dismiss" data-dismiss="close">
                                            <i class="zmdi zmdi-close"></i>
                                            </a>
                                            <div class="card-body">
                                                <ul class="list-group ">
                                                    <li class="list-group-item ">
                                                        <span class="pull-left"><img src="assets/img/profiles/05.jpg" alt="" class="img-circle max-w-40 m-r-10 "></span>
                                                        <div class="list-group-item-body">
                                                            <div class="list-group-item-heading">Jennifer Ross</div>
                                                            <div class="list-group-item-text">We're looking to hire two more protypers to our team.</div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="dropdown-menu-footer">
                                        <a href="javascript:void(0)">
                                        All notifications
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="last">
                                <a href="javascript:void(0)" data-toggle-state="sidebar-overlay-open" data-key="rightSideBar">
                                <i class="mdi mdi-playlist-plus"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <form role="search" action="" class="navbar-form" id="navbar_form">
                        <div class="form-group">
                            <input type="text" placeholder="Search and press enter..." class="form-control" id="navbar_search" autocomplete="off">
                            <i data-navsearch-close class="zmdi zmdi-close close-search"></i>
                        </div>
                        <button type="submit" class="hidden btn btn-default">Submit</button>
                    </form>
                </nav>
            </header>
            <aside id="app_sidebar-left">
                <div id="logo_wrapper">
                    <ul>
                        <li class="logo-icon">
                            <a href="index.html">
                                <div class="logo">
                                    <img src="/images/logo-icon.png" alt="Logo">
                                </div>
                                <h1 class="brand-text">MaterialWrap</h1>
                            </a>
                        </li>
                        <li class="menu-icon">
                            <a href="javascript:void(0)" role="button" data-toggle-state="app_sidebar-menu-collapsed" data-key="leftSideBar">
                            <i class="mdi mdi-backburger"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <nav id="app_main-menu-wrapper" class="scrollbar">
                    <div class="sidebar-inner sidebar-push">
                        <ul class="nav nav-pills nav-stacked">
                            <li class="sidebar-header">NAVIGATION</li>
                            <li class="active"><a href="index.html"><i class="zmdi zmdi-view-dashboard"></i>Dashboard</a></li>
                            <li class="nav-dropdown">
                                <a href="#"><i class="zmdi zmdi-view-quilt"></i>Page Layouts</a>
                                <ul class="nav-sub">
                                    <li class="nav-dropdown">
                                        <a href="#">Full Width Layouts </a>
                                        <ul class="nav-sub">
                                            <li><a href="layout-fullwidth-v1.html">Full Width v1</a></li>
                                            <li><a href="layout-fullwidth-v2.html">Full Width v2</a></li>
                                            <li><a href="layout-fullwidth-v3.html">Full Width v3</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-dropdown">
                                        <a href="#">Boxed Layouts</a>
                                        <ul class="nav-sub">
                                            <li><a href="layout-boxed-v1.html">Boxed Layout v1</a></li>
                                            <li><a href="layout-boxed-v2.html">Boxed Layout v2</a></li>
                                            <li><a href="layout-boxed-v3.html">Boxed Layout v3</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-dropdown">
                                        <a href="#">Left Side Nav</a>
                                        <ul class="nav-sub">
                                            <li><a href="layout-left-sidenav-v1.html">Left Side Nav v1</a></li>
                                            <li><a href="layout-left-sidenav-v2.html">Left Side Nav v2</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-dropdown">
                                        <a href="#">Right Side Nav</a>
                                        <ul class="nav-sub">
                                            <li><a href="layout-right-sidenav-v1.html">Right Side Nav v1</a></li>
                                            <li><a href="layout-right-sidenav-v2.html">Right Side Nav v2</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                           
                            <li class="nav-dropdown">
                                <a href="#"><i class="zmdi zmdi-view-subtitles"></i>Forms</a>
                                <ul class="nav-sub">
                                    <li><a href="form-elements.html">Form Elements</a></li>
                                    <li><a href="form-components.html">Form Components</a></li>
                                    <li><a href="form-layouts.html">Form Layouts</a></li>
                                    <li><a href="form-validation.html">Form Validation</a></li>
                                    <li><a href="form-wizard.html">Form Wizard</a></li>
                                </ul>
                            </li>
                            <li class="nav-dropdown">
                                <a href="#"><i class="zmdi zmdi-view-headline"></i>Tables</a>
                                <ul class="nav-sub">
                                    <li><a href="tables.html">Basic Tables</a></li>
                                    <li><a href="tables-datatables.html">Data Tables</a></li>
                                </ul>
                            </li>
                            <li><a href="javascript:void(0)" data-trigger="sidebar-overlay-open"><i class="zmdi zmdi-invert-colors"></i>Theme Settings</a></li>
                            <li class="sidebar-header">EXTRAS</li>
                            <li><a href="index.html"><i class="zmdi zmdi-view-web"></i>Front-end</a><span class="label label-info pull-right font-size-11">Coming soon</span></li>
                        
                            <li><a href="helper-classes.html"><i class="zmdi zmdi-info"></i>Helper Classes</a></li>
                        </ul>
                    </div>
                </nav>
            </aside>