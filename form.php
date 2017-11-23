<?php include "layouts/header.php" ?>

        
           <section id="content_outer_wrapper">
    <div id="content_wrapper" class="simple">
        <div id="header_wrapper" class="header-sm">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xs-12">
                        <header id="header">
                            <h1>Form Layouts</h1>
                            <ol class="breadcrumb">
                                <li><a href="index.html">Dashboard</a></li>
                                <li><a href="javascript:void(0)">Forms</a></li>
                                <li class="active">Form Layouts</li>
                            </ol>
                        </header>
                    </div>
                </div>
            </div>
        </div>
        <div id="content" class="container-fluid">
            <div class="content-body">
             
                <div class="row">
                    <div class="col-xs-12 col-md-6">
                        <div class="card">
                            <header class="card-heading p-b-0">
                                <h2 class="card-title">Inline Form with labels</h2>
                                <ul class="card-actions icons right-top">
                                    <li>
                                        <a href="javascript:void(0)" data-toggle-view="code">
                                        <i class="zmdi zmdi-code"></i>
                                        </a>
                                    </li>
                                </ul>
                            </header>
                            <div class="card-body">
                                <form class="form-inline">
                                    <div class="form-group is-empty">
                                        <label class="form-control-label" for="inputInlineUsername">Username: </label>
                                        <input type="text" class="form-control" id="inputInlineUsername" name="inputUsername" placeholder="Username" autocomplete="off">
                                    </div>
                                    <div class="form-group is-empty">
                                        <label class="form-control-label" for="inputInlinePassword">Password: </label>
                                        <input type="password" class="form-control" id="inputInlinePassword" name="inputPassword" placeholder="Password" autocomplete="off">
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-blue">Login</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-6">
                        <div class="card">
                            <header class="card-heading p-b-0">
                                <h2 class="card-title">Inline Form with labels &amp; addons</h2>
                                <ul class="card-actions icons right-top">
                                    <li>
                                        <a href="javascript:void(0)" data-toggle-view="code">
                                        <i class="zmdi zmdi-code"></i>
                                        </a>
                                    </li>
                                </ul>
                            </header>
                            <div class="card-body">
                                <form class="form-inline">
                                    <div class="form-group is-empty">
                                        <label class="form-control-label" for="inputInlineUsername">Username: </label>
                                        <input type="text" class="form-control" id="inputInlineUsername" name="inputUsername" placeholder="Username" autocomplete="off">
                                    </div>
                                    <div class="form-group is-empty">
                                        <label class="form-control-label" for="inputInlinePassword">Password: </label>
                                        <div class="input-group">
                                            <input type="password" class="form-control" id="inputInlinePassword" name="inputPassword" placeholder="Password" autocomplete="off">
                                            <span class="input-group-btn">
                                                <button type="button" class="btn btn-blue btn-fab animate-fab btn-fab-sm">
                                                    <i class="zmdi zmdi-mail-send"></i>
                                                    <div class="ripple-container"></div>
                                                </button>
                                            </span>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            
            </div>
           
        </div>
    </div>
    
</section>
        
        </div>
        
        <script src="/js/vendor.js"></script>
        <script src="/js/app.js"></script>
    </body>
</html>