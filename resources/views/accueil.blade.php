@extends('layouts.default')

@section('titre_page')
ACCUEIL
@endsection('titre_page')

@section('titre_contenu')
ACCUEIL 
@endsection('titre_contenu')

@section('sous_titre_contenu')
ACCUEIL TEMPORAIRE
@endsection('sous_titre_contenu')

@section('contenu_page')
    <div class="col-md-8">
        <div class="row">
            <div class="col-md-3">
                <a href="#" title="Example tile shortcut" class="tile-box tile-box-shortcut btn-danger">
                    <span class="bs-badge badge-absolute">1</span>
                    <div class="tile-header">
                        Reach
                    </div>
                    <div class="tile-content-wrapper">
                        <i class="glyph-icon icon-file-photo-o"></i>
                    </div>
                </a>
            </div>
            <div class="col-md-3">
                <a href="#" title="Example tile shortcut" class="tile-box tile-box-shortcut btn-success">
                    <div class="tile-header">
                        Comments
                    </div>
                    <div class="tile-content-wrapper">
                        <i class="glyph-icon icon-desktop"></i>
                    </div>
                </a>
            </div>
            <div class="col-md-3">
                <a href="#" title="Example tile shortcut" class="tile-box tile-box-shortcut btn-info">
                    <span class="bs-badge badge-absolute">2</span>
                    <div class="tile-header">
                        Reviews
                    </div>
                    <div class="tile-content-wrapper">
                        <i class="glyph-icon icon-download"></i>
                    </div>
                </a>
            </div>
            <div class="col-md-3">
                <a href="#" title="Example tile shortcut" class="tile-box tile-box-shortcut btn-warning">
                    <div class="tile-header">
                        Visitors
                    </div>
                    <div class="tile-content-wrapper">
                        <i class="glyph-icon icon-code-fork"></i>
                    </div>
                </a>
            </div>
        </div>
        <div class="panel mrg20T">
            <div class="panel-body">
                <h3 class="title-hero">
                    Weekly Sales
                </h3>
                <div class="example-box-wrapper">
                    <div id="data-example-1" class="mrg20B" style="width: 100%; height: 300px;"></div>
                </div>
            </div>
        </div>


        <div class="panel-layout">
            <div class="panel-box col-xs-6">

                <div class="panel-content bg-white">
                    <canvas id="icon-cloud" width="80" height="80"></canvas>
                </div>
                <div class="panel-content bg-black">
                    <div class="center-vertical">

                        <ul class="center-content nav nav-justified">
                            <li>
                                <h4>
                                    <i class="glyph-icon font-green opacity-80 icon-chevron-down"></i>
                                    7 º
                                </h4>
                                <p class="opacity-80 text-transform-upr font-size-11 mrg5T">Low</p>
                            </li>
                            <li>
                                <h4>
                                    <i class="glyph-icon font-red opacity-80 icon-chevron-up"></i>
                                    21 º
                                </h4>
                                <p class="opacity-80 text-transform-upr font-size-11 mrg5T">High</p>
                            </li>
                        </ul>

                    </div>
                </div>

            </div>
            <div class="panel-box col-xs-6 bg-blue-alt">
                <div class="panel-content">
                    <h3>San Francisco</h3>
                    <h4 class="opacity-60">California</h4>
                </div>
            </div>
        </div>

        <div class="panel">
        <div class="panel-body">
        <h3 class="title-hero">
            Basic
        </h3>
        <div class="example-box-wrapper">

        <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="datatable-example">
        <thead>
        <tr>
            <th>Browser</th>
            <th>Platform(s)</th>
            <th>Engine version</th>
        </tr>
        </thead>
        <tbody>
        <tr class="odd gradeX">
            
            <td>Internet
                Explorer 4.0</td>
            <td>Win 95+</td>
            <td class="center"> 4</td>
            
        </tr>
        <tr class="even gradeC">
            
            <td>Internet
                Explorer 5.0</td>
            <td>Win 95+</td>
            <td class="center">5</td>
            
        </tr>
        <tr class="odd gradeA">
            
            <td>Internet
                Explorer 5.5</td>
            <td>Win 95+</td>
            <td class="center">5.5</td>
            
        </tr>
        <tr class="even gradeA">
            
            <td>Internet
                Explorer 6</td>
            <td>Win 98+</td>
            <td class="center">6</td>
            
        </tr>
        <tr class="odd gradeA">
            
            <td>Internet Explorer 7</td>
            <td>Win XP SP2+</td>
            <td class="center">7</td>
            
        </tr>
        <tr class="even gradeA">
            
            <td>AOL browser (AOL desktop)</td>
            <td>Win XP</td>
            <td class="center">6</td>
            
        </tr>
        <tr class="gradeA">
            
            <td>Firefox 1.0</td>
            <td>Win 98+ / OSX.2+</td>
            <td class="center">1.7</td>
            
        </tr>
        <tr class="gradeA">
            
            <td>Firefox 1.5</td>
            <td>Win 98+ / OSX.2+</td>
            <td class="center">1.8</td>
            
        </tr>
        <tr class="gradeA">
            
            <td>Firefox 2.0</td>
            <td>Win 98+ / OSX.2+</td>
            <td class="center">1.8</td>
            
        </tr>
        <tr class="gradeA">
            
            <td>Firefox 3.0</td>
            <td>Win 2k+ / OSX.3+</td>
            <td class="center">1.9</td>
            
        </tr>
        <tr class="gradeA">
            
            <td>Camino 1.0</td>
            <td>OSX.2+</td>
            <td class="center">1.8</td>
            
        </tr>
        <tr class="gradeA">
            
            <td>Camino 1.5</td>
            <td>OSX.3+</td>
            <td class="center">1.8</td>
            
        </tr>
        <tr class="gradeU">

            <td>All others</td>
            <td>-</td>
            <td class="center">-</td>
            
        </tr>
        </tbody>
        </table>
        </div></div></div>

        <div class="panel">
            <div class="panel-body">
                <h3 class="title-hero">
                    Alternate carousel
                </h3>
                <div class="example-box-wrapper">
                    <div class="owl-carousel-4 slider-wrapper inverse arrows-outside carousel-wrapper">

                        <div>
                            <div class="thumbnail-box-wrapper mrg5A">
                                <div class="thumbnail-box">
                                    <a class="thumb-link" href="#" title=""></a>
                                    <div class="thumb-content">
                                        <div class="center-vertical">
                                            <div class="center-content">
                                                <i class="icon-helper icon-center animated zoomInUp font-white glyph-icon icon-linecons-camera"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="thumb-overlay bg-black"></div>
                                    <img src="../../assets-minified/image-resources/stock-images/img-17.jpg" alt="">
                                </div>
                                <div class="thumb-pane">
                                    <h3 class="thumb-heading animated rollIn">
                                        <a href="#" title="">
                                            Working in the morning
                                        </a>
                                        <small>12 March 2015</small>
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="thumbnail-box-wrapper mrg5A">
                                <div class="thumbnail-box">
                                    <a class="thumb-link" href="#" title=""></a>
                                    <div class="thumb-content">
                                        <div class="center-vertical">
                                            <div class="center-content">
                                                <i class="icon-helper icon-center animated zoomInUp font-white glyph-icon icon-linecons-camera"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="thumb-overlay bg-black"></div>
                                    <img src="../../assets-minified/image-resources/stock-images/img-18.jpg" alt="">
                                </div>
                                <div class="thumb-pane">
                                    <h3 class="thumb-heading animated rollIn">
                                        <a href="#" title="">
                                            Working in the morning
                                        </a>
                                        <small>12 March 2015</small>
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="thumbnail-box-wrapper mrg5A">
                                <div class="thumbnail-box">
                                    <a class="thumb-link" href="#" title=""></a>
                                    <div class="thumb-content">
                                        <div class="center-vertical">
                                            <div class="center-content">
                                                <i class="icon-helper icon-center animated zoomInUp font-white glyph-icon icon-linecons-camera"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="thumb-overlay bg-black"></div>
                                    <img src="../../assets-minified/image-resources/stock-images/img-19.jpg" alt="">
                                </div>
                                <div class="thumb-pane">
                                    <h3 class="thumb-heading animated rollIn">
                                        <a href="#" title="">
                                            Working in the morning
                                        </a>
                                        <small>12 March 2015</small>
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="thumbnail-box-wrapper mrg5A">
                                <div class="thumbnail-box">
                                    <a class="thumb-link" href="#" title=""></a>
                                    <div class="thumb-content">
                                        <div class="center-vertical">
                                            <div class="center-content">
                                                <i class="icon-helper icon-center animated zoomInUp font-white glyph-icon icon-linecons-camera"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="thumb-overlay bg-black"></div>
                                    <img src="../../assets-minified/image-resources/stock-images/img-20.jpg" alt="">
                                </div>
                                <div class="thumb-pane">
                                    <h3 class="thumb-heading animated rollIn">
                                        <a href="#" title="">
                                            Working in the morning
                                        </a>
                                        <small>12 March 2015</small>
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="thumbnail-box-wrapper mrg5A">
                                <div class="thumbnail-box">
                                    <a class="thumb-link" href="#" title=""></a>
                                    <div class="thumb-content">
                                        <div class="center-vertical">
                                            <div class="center-content">
                                                <i class="icon-helper icon-center animated zoomInUp font-white glyph-icon icon-linecons-camera"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="thumb-overlay bg-black"></div>
                                    <img src="../../assets-minified/image-resources/stock-images/img-23.jpg" alt="">
                                </div>
                                <div class="thumb-pane">
                                    <h3 class="thumb-heading animated rollIn">
                                        <a href="#" title="">
                                            Working in the morning
                                        </a>
                                        <small>12 March 2015</small>
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="thumbnail-box-wrapper mrg5A">
                                <div class="thumbnail-box">
                                    <a class="thumb-link" href="#" title=""></a>
                                    <div class="thumb-content">
                                        <div class="center-vertical">
                                            <div class="center-content">
                                                <i class="icon-helper icon-center animated zoomInUp font-white glyph-icon icon-linecons-camera"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="thumb-overlay bg-black"></div>
                                    <img src="../../assets-minified/image-resources/stock-images/img-24.jpg" alt="">
                                </div>
                                <div class="thumb-pane">
                                    <h3 class="thumb-heading animated rollIn">
                                        <a href="#" title="">
                                            Working in the morning
                                        </a>
                                        <small>12 March 2015</small>
                                    </h3>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="col-md-4">
        <div class="dashboard-box dashboard-box-chart bg-white content-box">
            <div class="content-wrapper">
                <div class="header">
                    8960
                    <span>Total Downloads<b> in last</b> 6 years</span>
                </div>
                <div class="bs-label bg-orange">~51%</div>
                <div class="center-div sparkline-big-alt">2210,2310,2010,2310,2123,2350</div>
                <div class="row list-grade">
                    <div class="col-md-2">2009</div>
                    <div class="col-md-2">2010</div>
                    <div class="col-md-2">2011</div>
                    <div class="col-md-2">2012</div>
                    <div class="col-md-2">2013</div>
                    <div class="col-md-2">2014</div>
                </div>
            </div>
            <div class="button-pane">
                <div class="size-md float-left">
                    <a href="#" title="">
                        View more details
                    </a>
                </div>
                <a href="#" class="btn btn-primary float-right tooltip-button" data-placement="top" title="View details">
                    <i class="glyph-icon icon-caret-right"></i>
                </a>
            </div>
        </div>
        <div class="content-box">
            <h3 class="content-box-header bg-default">
                <i class="glyph-icon icon-cog"></i>
                Live server status
                        <span class="header-buttons-separator">
                            <a href="#" class="icon-separator remove-button" data-animation="flipOutX">
                                <i class="glyph-icon icon-times"></i>
                            </a>
                        </span>
            </h3>
            <div class="content-box-wrapper pad0A">
                <div class="mrg20A">
                    <div class="row">
                        <div class="col-md-7 center-margin pad0A">
                            <canvas id="chart-area" width="150" height="150"/>
                        </div>
                    </div>
                </div>
                <table class="table remove-background">
                    <tbody>
                    <tr>
                        <td class="text-left size-sm">
                            <div class="badge mrg10L badge-small mrg5R bg-azure"></div>
                            New user registrations
                        </td>
                        <td class="text-right">
                            <a href="#" class="btn btn-sm hover-yellow tooltip-button" data-placement="top" title="Flag">
                                <i class="glyph-icon icon-flag"></i>
                            </a>
                            <a href="#" class="btn btn-sm hover-blue-alt tooltip-button" data-placement="top" title="Edit">
                                <i class="glyph-icon icon-edit"></i>
                            </a>
                            <a href="#" class="btn btn-sm hover-red tooltip-button" data-placement="top" title="Remove">
                                <i class="glyph-icon icon-remove"></i>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-left size-sm">
                            <div class="badge mrg10L badge-small mrg5R bg-orange"></div>
                            Returning visitors
                        </td>
                        <td class="text-right">
                            <a href="#" class="btn btn-sm hover-yellow tooltip-button" data-placement="top" title="Flag">
                                <i class="glyph-icon icon-flag"></i>
                            </a>
                            <a href="#" class="btn btn-sm hover-blue-alt tooltip-button" data-placement="top" title="Edit">
                                <i class="glyph-icon icon-edit"></i>
                            </a>
                            <a href="#" class="btn btn-sm hover-red tooltip-button" data-placement="top" title="Remove">
                                <i class="glyph-icon icon-remove"></i>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-left size-sm">
                            <div class="badge mrg10L badge-small mrg5R bg-gray"></div>
                            Page views
                        </td>
                        <td class="text-right">
                            <a href="#" class="btn btn-sm hover-yellow tooltip-button" data-placement="top" title="Flag">
                                <i class="glyph-icon icon-flag"></i>
                            </a>
                            <a href="#" class="btn btn-sm hover-blue-alt tooltip-button" data-placement="top" title="Edit">
                                <i class="glyph-icon icon-edit"></i>
                            </a>
                            <a href="#" class="btn btn-sm hover-red tooltip-button" data-placement="top" title="Remove">
                                <i class="glyph-icon icon-remove"></i>
                            </a>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="panel-layout">
                    <div class="panel-box">

                        <div class="panel-content bg-facebook">

                            <i class="glyph-icon font-size-35 icon-facebook"></i>

                        </div>
                        <div class="panel-content pad15A bg-white">
                            <div class="center-vertical">

                                <ul class="center-content list-group list-group-separator row mrg0A">
                                    <li class="col-md-6">
                                        <b>1,456</b>
                                        <p class="font-gray">Friends</p>
                                    </li>
                                    <li class="col-md-6">
                                        <b>593</b>
                                        <p class="font-gray">Likes</p>
                                    </li>
                                </ul>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="panel-layout">
                    <div class="panel-box">

                        <div class="panel-content bg-twitter">

                            <i class="glyph-icon font-size-35 icon-twitter"></i>

                        </div>
                        <div class="panel-content pad15A bg-white">
                            <div class="center-vertical">

                                <ul class="center-content list-group list-group-separator row mrg0A">
                                    <li class="col-md-6">
                                        <b>356</b>
                                        <p class="font-gray">Followers</p>
                                    </li>
                                    <li class="col-md-6">
                                        <b>981</b>
                                        <p class="font-gray">Tweets</p>
                                    </li>
                                </ul>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="panel">
            <div class="panel-body">
                <h3 class="title-hero">
                    Users activity
                </h3>
                <div class="example-box-wrapper">
                    <div class="timeline-box timeline-box-left">
                        <div class="tl-row">
                            <div class="tl-item float-right">
                                <div class="tl-icon bg-red">
                                    <i class="glyph-icon icon-toggle-on"></i>
                                </div>
                                <div class="popover right">
                                    <div class="arrow"></div>
                                    <div class="popover-content">
                                        <div class="tl-label bs-label label-info">Appointment</div>
                                        <p class="tl-content">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. </p>
                                        <div class="tl-time">
                                            <i class="glyph-icon icon-clock-o"></i>
                                            a few seconds ago
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tl-row">
                            <div class="tl-item float-right">
                                <div class="tl-icon bg-primary">
                                    <i class="glyph-icon icon-wifi"></i>
                                </div>
                                <div class="popover right">
                                    <div class="arrow"></div>
                                    <div class="popover-content">
                                        <div class="tl-label bs-label bg-yellow">Teleconference</div>
                                        <p class="tl-content">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. </p>
                                        <div class="tl-time">
                                            <i class="glyph-icon icon-clock-o"></i>
                                            a few seconds ago
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tl-row">
                            <div class="tl-item float-right">
                                <div class="tl-icon bg-black">
                                    <i class="glyph-icon icon-headphones"></i>
                                </div>
                                <div class="popover right">
                                    <div class="arrow"></div>
                                    <div class="popover-content">
                                        <div class="tl-label bs-label label-danger">Meeting</div>
                                        <p class="tl-content">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. </p>
                                        <div class="tl-time">
                                            <i class="glyph-icon icon-clock-o"></i>
                                            a few seconds ago
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection('contenu_page')

