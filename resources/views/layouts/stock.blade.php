<!DOCTYPE html> 
<html  lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>

        <style>
            #loading .svg-icon-loader {position: absolute;top: 50%;left: 50%;margin: -50px 0 0 -50px;}
        </style>


        <meta charset="UTF-8">
        <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
        <title>OWO-GPM | STOCKS</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

        <!-- Favicons -->

        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{ url('asset_delight/assets-minified/images/icons/apple-touch-icon-144-precomposed.png') }}">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{ url('asset_delight/assets-minified/images/icons/apple-touch-icon-114-precomposed.png') }}">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{ url('asset_delight/assets-minified/images/icons/apple-touch-icon-72-precomposed.png') }}">
        <link rel="apple-touch-icon-precomposed" href="{{ url('asset_delight/assets-minified/images/icons/apple-touch-icon-57-precomposed.png') }}">
        <link rel="shortcut icon" href="{{ url('asset_delight/assets-minified/images/icons/favicon.png') }}">



        <link rel="stylesheet" type="text/css" href="{{ url('asset_delight/assets-minified/admin-all-demo.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ url('asset_delight/assets-minified/icons/elusive/elusive.css') }}">
        
        <link rel="stylesheet" type="text/css" href="{{ url('css/main.css') }}">

        <!-- JS Core -->

        <script type="text/javascript" src="{{ url('asset_delight/assets-minified/js-core.js') }}"></script>


        <script type="text/javascript">
            $(window).load(function(){
                setTimeout(function() {
                    $('#loading').fadeOut( 400, "linear" );
                }, 300);
            });
        </script>



    </head>


    <body>
        <div id="sb-site">
            
            <!-- BEGIN SideBars -->
            <div class="sb-slidebar bg-black sb-left sb-style-overlay">
                <div class="scrollable-content scrollable-slim-sidebar">
                    <div class="pad10A">
                        <div class="divider-header">Online</div>
                        <ul class="chat-box">
                            <li>
                                <div class="status-badge">
                                    <img class="img-circle" width="40" src="{{ url('asset_delight/assets-minified/image-resources/people/testimonial1.jpg') }}" alt="">
                                    <div class="small-badge bg-green"></div>
                                </div>
                                <b>
                                    Grace Padilla
                                </b>
                                <p>On the other hand, we denounce...</p>
                                <a href="#" class="btn btn-md no-border radius-all-100 btn-black"><i class="glyph-icon icon-comments-o"></i></a>
                            </li>
                            <li>
                                <div class="status-badge">
                                    <img class="img-circle" width="40" src="{{ url('asset_delight/assets-minified/image-resources/people/testimonial2.jpg') }}" alt="">
                                    <div class="small-badge bg-green"></div>
                                </div>
                                <b>
                                    Carl Gamble
                                </b>
                                <p>Dislike men who are so beguiled...</p>
                                <a href="#" class="btn btn-md no-border radius-all-100 btn-black"><i class="glyph-icon icon-comments-o"></i></a>
                            </li>
                            <li>
                                <div class="status-badge">
                                    <img class="img-circle" width="40" src="{{ url('asset_delight/assets-minified/image-resources/people/testimonial3.jpg') }}" alt="">
                                    <div class="small-badge bg-green"></div>
                                </div>
                                <b>
                                    Michael Poole
                                </b>
                                <p>Of pleasure of the moment, so...</p>
                                <a href="#" class="btn btn-md no-border radius-all-100 btn-black"><i class="glyph-icon icon-comments-o"></i></a>
                            </li>
                            <li>
                                <div class="status-badge">
                                    <img class="img-circle" width="40" src="{{ url('asset_delight/assets-minified/image-resources/people/testimonial4.jpg') }}" alt="">
                                    <div class="small-badge bg-green"></div>
                                </div>
                                <b>
                                    Bill Green
                                </b>
                                <p>That they cannot foresee the...</p>
                                <a href="#" class="btn btn-md no-border radius-all-100 btn-black"><i class="glyph-icon icon-comments-o"></i></a>
                            </li>
                            <li>
                                <div class="status-badge">
                                    <img class="img-circle" width="40" src="{{ url('asset_delight/assets-minified/image-resources/people/testimonial5.jpg') }}" alt="">
                                    <div class="small-badge bg-green"></div>
                                </div>
                                <b>
                                    Cheryl Soucy
                                </b>
                                <p>Pain and trouble that are bound...</p>
                                <a href="#" class="btn btn-md no-border radius-all-100 btn-black"><i class="glyph-icon icon-comments-o"></i></a>
                            </li>
                        </ul>
                        <div class="divider-header">Idle</div>
                        <ul class="chat-box">
                            <li>
                                <div class="status-badge">
                                    <img class="img-circle" width="40" src="{{ url('asset_delight/assets-minified/image-resources/people/testimonial6.jpg') }}" alt="">
                                    <div class="small-badge bg-orange"></div>
                                </div>
                                <b>
                                    Jose Kramer
                                </b>
                                <p>Equal blame belongs to those...</p>
                                <a href="#" class="btn btn-md no-border radius-all-100 btn-black"><i class="glyph-icon icon-comments-o"></i></a>
                            </li>
                            <li>
                                <div class="status-badge">
                                    <img class="img-circle" width="40" src="{{ url('asset_delight/assets-minified/image-resources/people/testimonial7.jpg') }}" alt="">
                                    <div class="small-badge bg-orange"></div>
                                </div>
                                <b>
                                    Dan Garcia
                                </b>
                                <p>Weakness of will, which is same...</p>
                                <a href="#" class="btn btn-md no-border radius-all-100 btn-black"><i class="glyph-icon icon-comments-o"></i></a>
                            </li>
                            <li>
                                <div class="status-badge">
                                    <img class="img-circle" width="40" src="{{ url('asset_delight/assets-minified/image-resources/people/testimonial8.jpg') }}" alt="">
                                    <div class="small-badge bg-orange"></div>
                                </div>
                                <b>
                                    Edward Bridges
                                </b>
                                <p>These cases are perfectly simple...</p>
                                <a href="#" class="btn btn-md no-border radius-all-100 btn-black"><i class="glyph-icon icon-comments-o"></i></a>
                            </li>
                        </ul>
                        <div class="divider-header">Offline</div>
                        <ul class="chat-box">
                            <li>
                                <div class="status-badge">
                                    <img class="img-circle" width="40" src="{{ url('asset_delight/assets-minified/image-resources/people/testimonial1.jpg') }}" alt="">
                                    <div class="small-badge bg-red"></div>
                                </div>
                                <b>
                                    Randy Herod
                                </b>
                                <p>In a free hour, when our power...</p>
                                <a href="#" class="btn btn-md no-border radius-all-100 btn-black"><i class="glyph-icon icon-comments-o"></i></a>
                            </li>
                            <li>
                                <div class="status-badge">
                                    <img class="img-circle" width="40" src="{{ url('asset_delight/assets-minified/image-resources/people/testimonial2.jpg') }}" alt="">
                                    <div class="small-badge bg-red"></div>
                                </div>
                                <b>
                                    Patricia Bagley
                                </b>
                                <p>when nothing prevents our being...</p>
                                <a href="#" class="btn btn-md no-border radius-all-100 btn-black"><i class="glyph-icon icon-comments-o"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="sb-slidebar bg-black sb-right sb-style-overlay">
                <div class="scrollable-content scrollable-slim-sidebar">
                    <div class="pad15A">
                        <a href="#" title="" data-toggle="collapse" data-target="#sidebar-toggle-1" class="popover-title">
                            Cloud status
                            <span class="caret"></span>
                        </a>
                        <div id="sidebar-toggle-1" class="collapse in">
                            <div class="pad15A">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="text-center font-gray pad5B text-transform-upr font-size-12">New visits</div>
                                        <div class="chart-alt-3 font-gray-dark" data-percent="55"><span>55</span>%</div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="text-center font-gray pad5B text-transform-upr font-size-12">Bounce rate</div>
                                        <div class="chart-alt-3 font-gray-dark" data-percent="46"><span>46</span>%</div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="text-center font-gray pad5B text-transform-upr font-size-12">Server load</div>
                                        <div class="chart-alt-3 font-gray-dark" data-percent="92"><span>92</span>%</div>
                                    </div>
                                </div>
                                <div class="divider mrg15T mrg15B"></div>
                                <div class="text-center">
                                    <a href="#" class="btn center-div btn-info mrg5T btn-sm text-transform-upr updateEasyPieChart">
                                        <i class="glyph-icon icon-refresh"></i>
                                        Update charts
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="clear"></div>

                        <a href="#" title="" data-toggle="collapse" data-target="#sidebar-toggle-6" class="popover-title">
                            Latest transfers
                            <span class="caret"></span>
                        </a>
                        <div id="sidebar-toggle-6" class="collapse in">

                            <ul class="files-box">
                                <li>
                                    <i class="files-icon glyph-icon font-red icon-file-archive-o"></i>
                                    <div class="files-content">
                                        <b>blog_export.zip</b>
                                        <div class="files-date">
                                            <i class="glyph-icon icon-clock-o"></i>
                                            added on <b>22.10.2014</b>
                                        </div>
                                    </div>
                                    <div class="files-buttons">
                                        <a href="#" class="btn btn-xs hover-info tooltip-button" data-placement="left" title="Download">
                                            <i class="glyph-icon icon-cloud-download"></i>
                                        </a>
                                        <a href="#" class="btn btn-xs hover-danger tooltip-button" data-placement="left" title="Delete">
                                            <i class="glyph-icon icon-times"></i>
                                        </a>
                                    </div>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <i class="files-icon glyph-icon icon-file-code-o"></i>
                                    <div class="files-content">
                                        <b>homepage-test.html</b>
                                        <div class="files-date">
                                            <i class="glyph-icon icon-clock-o"></i>
                                            added  <b>19.10.2014</b>
                                        </div>
                                    </div>
                                    <div class="files-buttons">
                                        <a href="#" class="btn btn-xs hover-info tooltip-button" data-placement="left" title="Download">
                                            <i class="glyph-icon icon-cloud-download"></i>
                                        </a>
                                        <a href="#" class="btn btn-xs hover-danger tooltip-button" data-placement="left" title="Delete">
                                            <i class="glyph-icon icon-times"></i>
                                        </a>
                                    </div>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <i class="files-icon glyph-icon font-yellow icon-file-image-o"></i>
                                    <div class="files-content">
                                        <b>monthlyReport.jpg</b>
                                        <div class="files-date">
                                            <i class="glyph-icon icon-clock-o"></i>
                                            added on <b>10.9.2014</b>
                                        </div>
                                    </div>
                                    <div class="files-buttons">
                                        <a href="#" class="btn btn-xs hover-info tooltip-button" data-placement="left" title="Download">
                                            <i class="glyph-icon icon-cloud-download"></i>
                                        </a>
                                        <a href="#" class="btn btn-xs hover-danger tooltip-button" data-placement="left" title="Delete">
                                            <i class="glyph-icon icon-times"></i>
                                        </a>
                                    </div>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <i class="files-icon glyph-icon font-green icon-file-word-o"></i>
                                    <div class="files-content">
                                        <b>new_presentation.doc</b>
                                        <div class="files-date">
                                            <i class="glyph-icon icon-clock-o"></i>
                                            added on <b>5.9.2014</b>
                                        </div>
                                    </div>
                                    <div class="files-buttons">
                                        <a href="#" class="btn btn-xs hover-info tooltip-button" data-placement="left" title="Download">
                                            <i class="glyph-icon icon-cloud-download"></i>
                                        </a>
                                        <a href="#" class="btn btn-xs hover-danger tooltip-button" data-placement="left" title="Delete">
                                            <i class="glyph-icon icon-times"></i>
                                        </a>
                                    </div>
                                </li>
                            </ul>

                        </div>

                        <div class="clear"></div>

                        <a href="#" title="" data-toggle="collapse" data-target="#sidebar-toggle-3" class="popover-title">
                            Tasks for today
                            <span class="caret"></span>
                        </a>
                        <div id="sidebar-toggle-3" class="collapse in">

                            <ul class="progress-box">
                                <li>
                                    <div class="progress-title">
                                        New features development
                                        <b>87%</b>
                                    </div>
                                    <div class="progressbar-smaller progressbar" data-value="87">
                                        <div class="progressbar-value bg-azure">
                                            <div class="progressbar-overlay"></div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="progress-title">
                                        Finishing uploading files
                                        <b>66%</b>
                                    </div>
                                    <div class="progressbar-smaller progressbar" data-value="66">
                                        <div class="progressbar-value bg-red">
                                            <div class="progressbar-overlay"></div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="progress-title">
                                        Creating tutorials
                                        <b>58%</b>
                                    </div>
                                    <div class="progressbar-smaller progressbar" data-value="58">
                                        <div class="progressbar-value bg-blue-alt"></div>
                                    </div>
                                </li>
                                <li>
                                    <div class="progress-title">
                                        Frontend bonus theme
                                        <b>74%</b>
                                    </div>
                                    <div class="progressbar-smaller progressbar" data-value="74">
                                        <div class="progressbar-value bg-purple"></div>
                                    </div>
                                </li>
                            </ul>

                        </div>

                        <div class="clear"></div>

                        <a href="#" title="" data-toggle="collapse" data-target="#sidebar-toggle-4" class="popover-title">
                            Pending notifications
                            <span class="bs-label bg-orange tooltip-button" title="Label example">New</span>
                            <span class="caret"></span>
                        </a>
                        <div id="sidebar-toggle-4" class="collapse in">
                            <ul class="notifications-box notifications-box-alt">
                                <li>
                                    <span class="bg-purple icon-notification glyph-icon icon-users"></span>
                                    <span class="notification-text">This is an error notification</span>
                                    <div class="notification-time">
                                        a few seconds ago
                                        <span class="glyph-icon icon-clock-o"></span>
                                    </div>
                                    <a href="#" class="notification-btn btn btn-xs btn-black tooltip-button" data-placement="left" title="View details">
                                        <i class="glyph-icon icon-arrow-right"></i>
                                    </a>
                                </li>
                                <li>
                                    <span class="bg-warning icon-notification glyph-icon icon-ticket"></span>
                                    <span class="notification-text">This is a warning notification</span>
                                    <div class="notification-time">
                                        <b>15</b> minutes ago
                                        <span class="glyph-icon icon-clock-o"></span>
                                    </div>
                                    <a href="#" class="notification-btn btn btn-xs btn-black tooltip-button" data-placement="left" title="View details">
                                        <i class="glyph-icon icon-arrow-right"></i>
                                    </a>
                                </li>
                                <li>
                                    <span class="bg-green icon-notification glyph-icon icon-random"></span>
                                    <span class="notification-text font-green">A success message example.</span>
                                    <div class="notification-time">
                                        <b>2 hours</b> ago
                                        <span class="glyph-icon icon-clock-o"></span>
                                    </div>
                                    <a href="#" class="notification-btn btn btn-xs btn-black tooltip-button" data-placement="left" title="View details">
                                        <i class="glyph-icon icon-arrow-right"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END SideBars -->


            <div id="page-wrapper">

                <!-- BEGIN LEFT -->
                <div id="mobile-navigation">
                    <button id="nav-toggle" class="collapsed" data-toggle="collapse" data-target="#page-sidebar"><span></span></button>
                </div>
                <div id="page-sidebar">
                    <div id="header-logo" class="logo-bg">
                        <a href="#" class="logo-content-big" title="OWO-GPM">
                            OWO-GPM
                            <span>Gestion de Processus Métiers</span>
                        </a>
                        <a href="#" class="logo-content-small" title="OWO-GPM">
                            OWO-GPM
                            <span>Gestion de Processus Métiers</span>
                        </a>
                        <a id="close-sidebar" href="#" title="Close sidebar">
                            <i class="glyph-icon icon-outdent"></i>
                        </a>
                    </div>
                    <div class="scroll-sidebar">
                        <ul id="sidebar-menu">
                            <li class="header"><span>GESTION STOCK</span></li>
                            <li>
                                <a href="{{url('/stock/article/list')}}" title="Articles">
                                    <i class="glyph-icon icon-linecons-tv"></i>
                                    <span>Articles</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{url('/stock/commande/list')}}" title="Commandes">
                                    <i class="glyph-icon icon-linecons-tv"></i>
                                    <span>Commandes</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{url('/stock/livraison/list')}}" title="Livraisons">
                                    <i class="glyph-icon icon-linecons-tv"></i>
                                    <span>Livraisons</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{url('/stock/stock/list')}}" title="Stocks">
                                    <i class="glyph-icon icon-linecons-tv"></i>
                                    <span>Stocks</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{url('/stock/rebus/list')}}" title="Rebus">
                                    <i class="glyph-icon icon-linecons-tv"></i>
                                    <span>Rebus</span>
                                </a>
                            </li>
                            <li class="header"><span>GESTION FOURNISSEURS</span></li>
                            <li>
                                <a href="{{url('/stock/fournisseur/list')}}" title="Fournisseurs">
                                    <i class="glyph-icon icon-linecons-tv"></i>
                                    <span>Fournisseurs</span>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);" title="Elements 2">
                                    <i class="glyph-icon icon-linecons-diamond"></i>
                                    <span>Element 2</span>
                                </a>
                                <div class="sidebar-submenu">

                                    <ul>
                                        <li><a href="#" title="Sous-Element 2.1"><span>Sous-Element 2.1</span></a></li>
                                        <li><a href="#" title="Sous-Element 2.2"><span>Sous-Element 2.2</span></a></li>
                                        <li><a href="#" title="Sous-Element 2.3"><span>Sous-Element 2.3</span></a></li>
                                    </ul>

                                </div><!-- .sidebar-submenu -->
                            </li>

                        </ul><!-- #sidebar-menu -->
                    </div>
                </div>
                <!-- END LEFT -->

                <!-- BEGIN CONTENT -->
                <div id="page-content-wrapper">
                    <div id="page-content">
                        <div id="page-header">
                            <div id="header-nav-left">
                                <a class="header-btn" id="logout-btn" href="lockscreen-4.html" title="Lockscreen page example">
                                    <i class="glyph-icon icon-linecons-lock"></i>
                                </a>
                                <div class="user-account-btn dropdown">
                                    <a href="#" title="My Account" class="user-profile clearfix" data-toggle="dropdown">
                                        <img width="28" src="{{ url('asset_delight/assets-minified/image-resources/gravatar.jpg') }}" alt="Profile image">
                                        <span>[UTILISATEUR]</span>
                                        <i class="glyph-icon icon-angle-down"></i>
                                    </a>
                                    <div class="dropdown-menu float-right">
                                        <div class="box-sm">
                                            <div class="login-box clearfix">
                                                <div class="user-img">
                                                    <a href="#" title="" class="change-img">Change photo</a>
                                                    <img src="{{ url('asset_delight/assets-minified/image-resources/gravatar.jpg') }}" alt="">
                                                </div>
                                                <div class="user-info">
                                                    <span>
                                                        [UTILISATEUR]
                                                        <i>UX/UI developer</i>
                                                    </span>
                                                    <a href="#" title="Edit profile">Edit profile</a>
                                                    <a href="#" title="View notifications">View notifications</a>
                                                </div>
                                            </div>
                                            <div class="divider"></div>
                                            <ul class="reset-ul mrg5B">
                                                <li>
                                                    <a href="#">
                                                        View login page example
                                                        <i class="glyph-icon float-right icon-caret-right"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        View lockscreen example
                                                        <i class="glyph-icon float-right icon-caret-right"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        View account details
                                                        <i class="glyph-icon float-right icon-caret-right"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                            <div class="button-pane button-pane-alt pad5L pad5R text-center">
                                                <a href="#" class="btn btn-flat display-block font-normal btn-danger">
                                                    <i class="glyph-icon icon-power-off"></i>
                                                    Logout
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- #header-nav-left -->

                            <div id="header-nav-right">

                                <div class="dropdown" id="dashnav-btn">
                                    <a href="#" data-toggle="dropdown" data-placement="bottom" class="popover-button-header tooltip-button" title="Dashboard Quick Menu">
                                        <i class="glyph-icon icon-linecons-cog"></i>
                                    </a>
                                    <div class="dropdown-menu float-left">
                                        <div class="box-sm">
                                            <div class="pad5T pad5B pad10L pad10R dashboard-buttons clearfix">
                                                <a href="#" class="btn vertical-button hover-blue-alt" title="">
                                                    <span class="glyph-icon icon-separator-vertical pad0A medium">
                                                        <i class="glyph-icon icon-dashboard opacity-80 font-size-20"></i>
                                                    </span>
                                                    Dashboard
                                                </a>
                                                <a href="#" class="btn vertical-button hover-green" title="">
                                                    <span class="glyph-icon icon-separator-vertical pad0A medium">
                                                        <i class="glyph-icon icon-tags opacity-80 font-size-20"></i>
                                                    </span>
                                                    Widgets
                                                </a>
                                                <a href="#" class="btn vertical-button hover-orange" title="">
                                                    <span class="glyph-icon icon-separator-vertical pad0A medium">
                                                        <i class="glyph-icon icon-fire opacity-80 font-size-20"></i>
                                                    </span>
                                                    Tables
                                                </a>
                                                <a href="#" class="btn vertical-button hover-orange" title="">
                                                    <span class="glyph-icon icon-separator-vertical pad0A medium">
                                                        <i class="glyph-icon icon-bar-chart-o opacity-80 font-size-20"></i>
                                                    </span>
                                                    Charts
                                                </a>
                                                <a href="#" class="btn vertical-button hover-purple" title="">
                                                    <span class="glyph-icon icon-separator-vertical pad0A medium">
                                                        <i class="glyph-icon icon-laptop opacity-80 font-size-20"></i>
                                                    </span>
                                                    Buttons
                                                </a>
                                                <a href="#" class="btn vertical-button hover-azure" title="">
                                                    <span class="glyph-icon icon-separator-vertical pad0A medium">
                                                        <i class="glyph-icon icon-code opacity-80 font-size-20"></i>
                                                    </span>
                                                    Panels
                                                </a>
                                            </div>
                                            <div class="divider"></div>
                                            <div class="pad5T pad5B pad10L pad10R dashboard-buttons clearfix">
                                                <a href="#" class="btn vertical-button remove-border btn-info" title="">
                                                    <span class="glyph-icon icon-separator-vertical pad0A medium">
                                                        <i class="glyph-icon icon-dashboard opacity-80 font-size-20"></i>
                                                    </span>
                                                    Dashboard
                                                </a>
                                                <a href="#" class="btn vertical-button remove-border btn-danger" title="">
                                                    <span class="glyph-icon icon-separator-vertical pad0A medium">
                                                        <i class="glyph-icon icon-tags opacity-80 font-size-20"></i>
                                                    </span>
                                                    Widgets
                                                </a>
                                                <a href="#" class="btn vertical-button remove-border btn-purple" title="">
                                                    <span class="glyph-icon icon-separator-vertical pad0A medium">
                                                        <i class="glyph-icon icon-fire opacity-80 font-size-20"></i>
                                                    </span>
                                                    Tables
                                                </a>
                                                <a href="#" class="btn vertical-button remove-border btn-azure" title="">
                                                    <span class="glyph-icon icon-separator-vertical pad0A medium">
                                                        <i class="glyph-icon icon-bar-chart-o opacity-80 font-size-20"></i>
                                                    </span>
                                                    Charts
                                                </a>
                                                <a href="#" class="btn vertical-button remove-border btn-yellow" title="">
                                                    <span class="glyph-icon icon-separator-vertical pad0A medium">
                                                        <i class="glyph-icon icon-laptop opacity-80 font-size-20"></i>
                                                    </span>
                                                    Buttons
                                                </a>
                                                <a href="#" class="btn vertical-button remove-border btn-warning" title="">
                                                    <span class="glyph-icon icon-separator-vertical pad0A medium">
                                                        <i class="glyph-icon icon-code opacity-80 font-size-20"></i>
                                                    </span>
                                                    Panels
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <a href="#" class="hdr-btn" id="fullscreen-btn" title="Fullscreen">
                                    <i class="glyph-icon icon-arrows-alt"></i>
                                </a>
                                <a href="#" class="hdr-btn sb-toggle-left" id="chatbox-btn" title="Chat sidebar">
                                    <i class="glyph-icon icon-linecons-paper-plane"></i>
                                </a>
                                <div class="dropdown" id="notifications-btn">
                                    <a data-toggle="dropdown" href="#" title="">
                                        <span class="small-badge bg-yellow"></span>
                                        <i class="glyph-icon icon-linecons-megaphone"></i>
                                    </a>
                                    <div class="dropdown-menu box-md float-left">

                                        <div class="popover-title display-block clearfix pad10A">
                                            Notifications
                                            <a class="text-transform-cap font-primary font-normal btn-link float-right" href="#" title="View more options">
                                                More options...
                                            </a>
                                        </div>
                                        <div class="scrollable-content scrollable-slim-box">
                                            <ul class="no-border notifications-box">
                                                <li>
                                                    <span class="bg-danger icon-notification glyph-icon icon-bullhorn"></span>
                                                    <span class="notification-text">This is an error notification</span>
                                                    <div class="notification-time">
                                                        a few seconds ago
                                                        <span class="glyph-icon icon-clock-o"></span>
                                                    </div>
                                                </li>
                                                <li>
                                                    <span class="bg-warning icon-notification glyph-icon icon-users"></span>
                                                    <span class="notification-text font-blue">This is a warning notification</span>
                                                    <div class="notification-time">
                                                        <b>15</b> minutes ago
                                                        <span class="glyph-icon icon-clock-o"></span>
                                                    </div>
                                                </li>
                                                <li>
                                                    <span class="bg-green icon-notification glyph-icon icon-sitemap"></span>
                                                    <span class="notification-text font-green">A success message example.</span>
                                                    <div class="notification-time">
                                                        <b>2 hours</b> ago
                                                        <span class="glyph-icon icon-clock-o"></span>
                                                    </div>
                                                </li>
                                                <li>
                                                    <span class="bg-azure icon-notification glyph-icon icon-random"></span>
                                                    <span class="notification-text">This is an error notification</span>
                                                    <div class="notification-time">
                                                        a few seconds ago
                                                        <span class="glyph-icon icon-clock-o"></span>
                                                    </div>
                                                </li>
                                                <li>
                                                    <span class="bg-warning icon-notification glyph-icon icon-ticket"></span>
                                                    <span class="notification-text">This is a warning notification</span>
                                                    <div class="notification-time">
                                                        <b>15</b> minutes ago
                                                        <span class="glyph-icon icon-clock-o"></span>
                                                    </div>
                                                </li>
                                                <li>
                                                    <span class="bg-blue icon-notification glyph-icon icon-user"></span>
                                                    <span class="notification-text font-blue">Alternate notification styling.</span>
                                                    <div class="notification-time">
                                                        <b>2 hours</b> ago
                                                        <span class="glyph-icon icon-clock-o"></span>
                                                    </div>
                                                </li>
                                                <li>
                                                    <span class="bg-purple icon-notification glyph-icon icon-user"></span>
                                                    <span class="notification-text">This is an error notification</span>
                                                    <div class="notification-time">
                                                        a few seconds ago
                                                        <span class="glyph-icon icon-clock-o"></span>
                                                    </div>
                                                </li>
                                                <li>
                                                    <span class="bg-warning icon-notification glyph-icon icon-user"></span>
                                                    <span class="notification-text">This is a warning notification</span>
                                                    <div class="notification-time">
                                                        <b>15</b> minutes ago
                                                        <span class="glyph-icon icon-clock-o"></span>
                                                    </div>
                                                </li>
                                                <li>
                                                    <span class="bg-green icon-notification glyph-icon icon-user"></span>
                                                    <span class="notification-text font-green">A success message example.</span>
                                                    <div class="notification-time">
                                                        <b>2 hours</b> ago
                                                        <span class="glyph-icon icon-clock-o"></span>
                                                    </div>
                                                </li>
                                                <li>
                                                    <span class="bg-purple icon-notification glyph-icon icon-user"></span>
                                                    <span class="notification-text">This is an error notification</span>
                                                    <div class="notification-time">
                                                        a few seconds ago
                                                        <span class="glyph-icon icon-clock-o"></span>
                                                    </div>
                                                </li>
                                                <li>
                                                    <span class="bg-warning icon-notification glyph-icon icon-user"></span>
                                                    <span class="notification-text">This is a warning notification</span>
                                                    <div class="notification-time">
                                                        <b>15</b> minutes ago
                                                        <span class="glyph-icon icon-clock-o"></span>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="button-pane button-pane-alt pad5T pad5L pad5R text-center">
                                            <a href="#" class="btn btn-flat btn-primary" title="View all notifications">
                                                View all notifications
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="dropdown" id="progress-btn">
                                    <a data-toggle="dropdown" href="#" title="">
                                        <span class="small-badge bg-azure"></span>
                                        <i class="glyph-icon icon-linecons-params"></i>
                                    </a>
                                    <div class="dropdown-menu pad0A box-sm float-left" id="progress-dropdown">
                                        <div class="scrollable-content scrollable-slim-box">
                                            <ul class="no-border progress-box progress-box-links">
                                                <li>
                                                    <a href="#" title="">
                                                        <div class="progress-title">
                                                            Finishing uploading files
                                                            <b>23%</b>
                                                        </div>
                                                        <div class="progressbar-smaller progressbar" data-value="23">
                                                            <div class="progressbar-value bg-blue-alt">
                                                                <div class="progressbar-overlay"></div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" title="">
                                                        <div class="progress-title">
                                                            Roadmap progress
                                                            <b>91%</b>
                                                        </div>
                                                        <div class="progressbar-smaller progressbar" data-value="91">
                                                            <div class="progressbar-value bg-red">
                                                                <div class="progressbar-overlay"></div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" title="">
                                                        <div class="progress-title">
                                                            Images upload
                                                            <b>58%</b>
                                                        </div>
                                                        <div class="progressbar-smaller progressbar" data-value="58">
                                                            <div class="progressbar-value bg-green"></div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" title="">
                                                        <div class="progress-title">
                                                            WordPress migration
                                                            <b>74%</b>
                                                        </div>
                                                        <div class="progressbar-smaller progressbar" data-value="74">
                                                            <div class="progressbar-value bg-purple"></div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" title="">
                                                        <div class="progress-title">
                                                            Agile development procedures
                                                            <b>91%</b>
                                                        </div>
                                                        <div class="progressbar-smaller progressbar" data-value="91">
                                                            <div class="progressbar-value bg-black">
                                                                <div class="progressbar-overlay"></div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" title="">
                                                        <div class="progress-title">
                                                            Systems integration
                                                            <b>58%</b>
                                                        </div>
                                                        <div class="progressbar-smaller progressbar" data-value="58">
                                                            <div class="progressbar-value bg-azure"></div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" title="">
                                                        <div class="progress-title">
                                                            Code optimizations
                                                            <b>97%</b>
                                                        </div>
                                                        <div class="progressbar-smaller progressbar" data-value="97">
                                                            <div class="progressbar-value bg-yellow"></div>
                                                        </div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="button-pane button-pane-alt pad5A text-center">
                                            <a href="#" class="btn btn-flat display-block font-normal hover-green" title="View all notifications">
                                                View all notifications
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="dropdown" id="cloud-btn">
                                    <a href="#" data-placement="bottom" class="tooltip-button sb-toggle-right" title="Statistics Sidebar">
                                        <i class="glyph-icon icon-linecons-cloud"></i>
                                    </a>
                                </div>

                            </div><!-- #header-nav-right -->

                        </div>
                        

                        <!-- xCharts -->

                        <script type="text/javascript" src="{{ url('asset_delight/assets-minified/js-core/d3.js') }}"></script>
                        <script type="text/javascript" src="{{ url('asset_delight/assets-minified/widgets/charts/xcharts/xcharts.js') }}"></script>
                        <script type="text/javascript" src="{{ url('asset_delight/assets-minified/widgets/charts/xcharts/xcharts-demo-1.js') }}"></script>

                        <!-- Sparklines charts -->

                        <script type="text/javascript" src="{{ url('asset_delight/assets-minified/widgets/charts/sparklines/sparklines.js') }}"></script>
                        <script type="text/javascript" src="{{ url('asset_delight/assets-minified/widgets/charts/sparklines/sparklines-demo.js') }}"></script>

                        <!-- Skycons -->

                        <script type="text/javascript" src="{{ url('asset_delight/assets-minified/widgets/skycons/skycons.js') }}"></script>

                        <!-- Calendar -->

                        <script type="text/javascript" src="{{ url('asset_delight/assets-minified/widgets/daterangepicker/moment.js') }}"></script>
                        <script type="text/javascript" src="{{ url('asset_delight/assets-minified/widgets/calendar/calendar.js') }}"></script>
                        <script type="text/javascript" src="{{ url('asset_delight/assets-minified/widgets/calendar/calendar-demo.js') }}"></script>

                        <div id="page-title">
                            <h2>@yield('titre_contenu', 'STOCKS')</h2>
                            <p>@yield('sous_titre_contenu', '[SOUS MODULE]')</p>

                        </div>

                        <div class="row">
                            @yield('contenu_page', '[-EN COURS DE DEVELOPPEMENT-]')
                            
                        </div>


                        

                    </div>
                </div>
                <!-- END CONTENT -->
            </div>


            <!-- JS Demo -->
            <script type="text/javascript" src="{{ url('asset_delight/assets-minified/admin-all-demo.js') }}"></script>


        </div>
    </body>


</html>