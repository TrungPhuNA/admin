<?php include "layouts/header.php" ?>

            <section id="content_outer_wrapper" class="">
                <div id="content_wrapper" class="rightnav_v2">
                    <div id="header_wrapper" class="header-sm">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-xs-12">
                                    <header id="header">
                                        <h1>Dashboards</h1>
                                    </header>
                                </div>
                            </div>
                        </div>
                        <ul class="card-actions icons lg alt-actions right-top">
                            <li>
                                <a href="javascript:void(0)" class="drawer-trigger" data-drawer="toggle-right">
                                <i class="zmdi zmdi-menu"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="tabpanel tab-header">
                        <ul class="nav nav-tabs p-l-20">
                            <li class="active" role="presentation"><a href="#dashboard1" data-toggle="tab">Dashboard v1</a></li>
                        </ul>
                    </div>
                    <div id="content" class="container-fluid">
                        <div class="content-body">
                            <div id="dashboard_content" class="tab-content">
                                <div class="tab-pane fade active in" id="dashboard1">
                                    
                                </div>
                               
                            </div>
                            <!-- ENDS $dashboard_content -->
                        </div>
                    </div>
                    <!-- ENDS $content -->
                    <aside id="rightnav">
                        <div class="rightnav-content-wrapper scrollbar">
                            <div class="card date transparent">
                                <div class="card-body">
                                    <div class="curr-date">
                                        <h4 class="curr-dd"></h4>
                                        <h5 class="curr-mmmm-dd"></h5>
                                    </div>
                                </div>
                            </div>
                            <div class="card type--weather transparent">
                                <div class="card-body">
                                    <header class="curr-weather">
                                        <h5>San Francisco, CA</h5>
                                        <i class="wi wi-day-cloudy"></i>
                                        <div class="curr-temp-wrapper">
                                            <span class="curr-temp">72</span>
                                            <sup class="curr-sup">°</sup>
                                            <span class="curr-f">F</span>
                                        </div>
                                        <h6>Clear with periodic clouds</h6>
                                    </header>
                                    <ul class="forcast">
                                        <li>
                                            <div class="curr-temp-wrapper">
                                                <span class="forcast-day forcast-one"></span>
                                                <i class="wi wi-day-rain-mix"></i>
                                                <span class="curr-temp">65</span>
                                                <sup class="curr-sup">°</sup>
                                                <span class="curr-f">F</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="curr-temp-wrapper">
                                                <span class="forcast-day forcast-two"></span>
                                                <i class="wi wi-day-cloudy-gusts"></i>
                                                <span class="curr-temp">70</span>
                                                <sup class="curr-sup">°</sup>
                                                <span class="curr-f">F</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="curr-temp-wrapper">
                                                <span class="forcast-day forcast-three"></span>
                                                <i class="wi wi-day-lightning"></i>
                                                <span class="curr-temp">73</span>
                                                <sup class="curr-sup">°</sup>
                                                <span class="curr-f">F</span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card card-task transparent m-t-30">
                                <header class="card-heading">
                                    <h5>My Task</h5>
                                    <ul class="card-actions icons  right-top">
                                        <li>
                                            <a href="javascript:void(0)" class="animate_plus_x" data-toggle="input"><i class="zmdi zmdi-plus"></i> </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)" data-toggle="collapse"><i class="zmdi zmdi-chevron-down"></i> </a>
                                        </li>
                                    </ul>
                                </header>
                                <div class="card-body">
                                    <form>
                                        <div class="form-group">
                                            <input type="text" value="" placeholder="Add task" class="form-control" />
                                        </div>
                                    </form>
                                    <ul class="checklist">
                                        <li><span class="checkbox">
                                            <label>
                                            <input type="checkbox" value="">
                                            <i class="input-helper"></i> add gulp script to project
                                            </label>
                                            </span>
                                        </li>
                                    
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </aside>
                </div>
            </section>

            <aside id="app_sidebar-right">
                <div class="sidebar-inner sidebar-overlay">
                    <div class="tabpanel">
                        <ul class="nav nav-tabs nav-justified">
                            <li class="active" role="presentation"><a href="#sidebar_chat" data-toggle="tab" aria-expanded="true">Chat</a></li>
                            <li role="presentation"><a href="#sidebar_activity" data-toggle="tab">Activity</a></li>
                            <li role="presentation"><a href="#sidebar_settings" data-toggle="tab">Settings</a></li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane fade active in" id="sidebar_chat">
                                <form class="m-l-15 m-r-15 m-t-30">
                                    <div class="input-group search-target">
                                        <span class="input-group-addon"><i class="zmdi zmdi-search"></i></span>
                                        <div class="form-group is-empty">
                                            <input type="text" value="" placeholder="Filter contacts..." class="form-control" data-search-trigger="open">
                                        </div>
                                    </div>
                                </form>
                                <ul class="description">
                                    <li class="title">
                                        Online
                                    </li>
                                </ul>
                               
                                <button class="btn btn-primary btn-fab btn-fab-sm animate-fab" data-chat="open" id="chat_fab_new">
                                <i class="zmdi zmdi-plus"></i>
                                </button>
                            </div>
                            <div class="tab-pane fade" id="sidebar_activity">
                                <div class="sidebar-timeline">
                                    <div class="time-item">
                                        <div class="item-info">
                                            <small class="text-muted">15 minutes ago</small>
                                            <p><a href="#" class="accent">Mike Jones</a> fixed z-index conflict sidebar.scss</p>
                                        </div>
                                    </div>
                                    <div class="time-item">
                                        <div class="item-info">
                                            <small class="text-muted">30 minutes ago</small>
                                            <p><a href="javascript:void(0)" class="accent">Hazel	Dean</a> left a comment on product page designs.</p>
                                            <p><em>"Yuccie shoreditch trust fund, artisan tumblr sustainable cronut unicorn blog seitan. "</em></p>
                                        </div>
                                    </div>
                                
                                    <div class="time-item">
                                        <div class="item-info">
                                            <small class="text-muted">5 hours ago</small>
                                            <p><a href="javascript:void(0)" class="accent">Neal Stephens</a> setup a meeting with<a href="#" class="text-success"> Jason Kendall</a>.</p>
                                            <p><em>"Authentic aesthetic tattooed, PBR&B squid tote bag schlitz vaporware glossier yr man braid direct trade disrupt poke.  "</em></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="sidebar_settings">
                                <div class="color-container">
                                    <h3 class="title">Preset Color Options</h3>
                                    <div class="row">
                                        <div class="col-xs-3 p-0">
                                            <div class="color-option-check">
                                                <label data-load-css="assets/css/theme-a.css">
                                                <input type="radio" name="setting-theme" checked="checked">
                                                <span class="icon-check"></span>
                                                <span class="split">
                                                <span class="color bg-primary-theme-a"></span>
                                                <span class="color bg-shade-theme-a"></span>
                                                </span>
                                                <span class="color bg-menu-darkBlue"></span>
                                                </label>
                                            </div>
                                        </div>
                                    
                                    </div>
                                    <div class="row m-t-20">
                                        <div class="col-xs-3 p-0">
                                            <div class="color-option-check">
                                                <label data-load-css="assets/css/theme-e.css">
                                                <input type="radio" name="setting-theme" checked="checked">
                                                <span class="icon-check"></span>
                                                <span class="split">
                                                <span class="color bg-primary-theme-e"></span>
                                                <span class="color bg-shade-theme-e"></span>
                                                </span>
                                                <span class="color bg-menu-white"></span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <h3 class="title m-t-30">Layout Mode</h3>
                                    <ul class="description">
                                        <li>
                                            <div class="radio block"><label><input type="radio" name="layoutMode" value="" checked>FULL WIDTH</label></div>
                                        </li>
                                        <li>
                                            <div class="radio block"><label><input type="radio" name="layoutMode" value="boxed-layout">BOXED</label></div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </aside>
        
        </div>
        
        <script src="/js/vendor.js"></script>
        <script src="/js/app.js"></script>
    </body>
</html>