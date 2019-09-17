<!DOCTYPE html>

<html>

    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/25-5.less', 'css/25-5.css');
        ?>
        <link href="css/25-5.css" rel="stylesheet" type="text/css" />
        <script src="js/jquery.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <script src="js/skycons.js" type="text/javascript"></script>
        <script src="js/jquery.vmap.js" type="text/javascript"></script>
        <script src="js/jquery.vmap.world.js" type="text/javascript"></script>
        <script src="js/jquery.vmap.sampledata.js" type="text/javascript"></script>
        <script src="js/custom.min.js" type="text/javascript"></script>
    </head>

    <body>

        <div class="type-25-5">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-2">
                    </div>
                    <div class="col-md-10">
                        <div class="content5">
                            <div class="col-md-4 col-sm-4 col-xs-12">
                            </div>
                            <div class="col-md-8 col-sm-8 col-xs-12">
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <div class="x_panel">
                                            <div class="x_title">
                                                <h2>Visitors location <small>geo-presentation</small></h2>
                                                <ul class="nav navbar-right panel_toolbox">
                                                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                                    </li>
                                                    <li class="dropdown">
                                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                                        <ul class="dropdown-menu" role="menu">
                                                            <li><a href="#">Settings 1</a>
                                                            </li>
                                                            <li><a href="#">Settings 2</a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                                                    </li>
                                                </ul>
                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="x_content">
                                                <div class="col-md-4">
                                                    <h2>125.7k Views from 60 countries</h2>

                                                    <table class="countries_list">
                                                        <tbody>
                                                            <tr>
                                                                <td>United States</td>
                                                                <td class=" text-right">33%</td>
                                                            </tr>
                                                            <tr>
                                                                <td>France</td>
                                                                <td class="text-right">27%</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Germany</td>
                                                                <td class="text-right">16%</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Spain</td>
                                                                <td class="text-right">11%</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Britain</td>
                                                                <td class="text-right">10%</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <div id="world-map-gdp" class="col-md-8 col-sm-12 col-xs-12" style="height:230px;">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <div class="x_panel">
                                            <div class="x_title">
                                                <h2>To Do List <small>Sample tasks</small></h2>
                                                <ul class="nav navbar-right panel_toolbox">
                                                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                                    </li>
                                                    <li class="dropdown">
                                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                                        <ul class="dropdown-menu" role="menu">
                                                            <li><a href="#">Settings 1</a>
                                                            </li>
                                                            <li><a href="#">Settings 2</a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                                                    </li>
                                                </ul>
                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="x_content">
                                                <div class="">
                                                    <ul class="to_do">
                                                        <li>
                                                            <p>
                                                                <input type="checkbox" class="flat"> Schedule meeting with new client </p>
                                                        </li>
                                                        <li>
                                                            <p>
                                                                <input type="checkbox" class="flat"> Create email address for new intern</p>
                                                        </li>
                                                        <li>
                                                            <p>
                                                                <input type="checkbox" class="flat"> Have IT fix the network printer</p>
                                                        </li>
                                                        <li>
                                                            <p>
                                                                <input type="checkbox" class="flat"> Copy backups to offsite location</p>
                                                        </li>
                                                        <li>
                                                            <p>
                                                                <input type="checkbox" class="flat"> Food truck fixie locavors mcsweeney</p>
                                                        </li>
                                                        <li>
                                                            <p>
                                                                <input type="checkbox" class="flat"> Food truck fixie locavors mcsweeney</p>
                                                        </li>
                                                        <li>
                                                            <p>
                                                                <input type="checkbox" class="flat"> Create email address for new intern</p>
                                                        </li>
                                                        <li>
                                                            <p>
                                                                <input type="checkbox" class="flat"> Have IT fix the network printer</p>
                                                        </li>
                                                        <li>
                                                            <p>
                                                                <input type="checkbox" class="flat"> Copy backups to offsite location</p>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <div class="x_panel">
                                            <div class="x_title">
                                                <h2>Daily active users <small>Sessions</small></h2>
                                                <ul class="nav navbar-right panel_toolbox">
                                                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                                    </li>
                                                    <li class="dropdown">
                                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                                        <ul class="dropdown-menu" role="menu">
                                                            <li><a href="#">Settings 1</a>
                                                            </li>
                                                            <li><a href="#">Settings 2</a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                                                    </li>
                                                </ul>
                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="x_content">
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <div class=""><b>Monday</b>, 07:30 AM
                                                            <span>F</span>
                                                            <span><b>C</b></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-4">
                                                        <canvas height="84" width="84" id="partly-cloudy-day"></canvas>
                                                    </div>
                                                    <div class="col-sm-8">
                                                        <div class="weather-text">
                                                            <h2>Texas <br><i>Partly Cloudy Day</i></h2>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="weather-text">
                                                    <h3 class="degrees">23</h3>
                                                </div>
                                                <div class="clearfix"></div>
                                                <div class="row">
                                                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                                                        <div class="daily-weather">
                                                            <h2 class="day">Mon</h2>
                                                            <h3 class="degrees">25</h3>
                                                            <canvas id="clear-day" width="32" height="32"></canvas>
                                                            <h5>15 <i>km/h</i></h5>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                                                        <div class="daily-weather">
                                                            <h2 class="day">Tue</h2>
                                                            <h3 class="degrees">25</h3>
                                                            <canvas height="32" width="32" id="rain"></canvas>
                                                            <h5>12 <i>km/h</i></h5>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                                                        <div class="daily-weather">
                                                            <h2 class="day">Wed</h2>
                                                            <h3 class="degrees">27</h3>
                                                            <canvas height="32" width="32" id="snow"></canvas>
                                                            <h5>14 <i>km/h</i></h5>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                                                        <div class="daily-weather">
                                                            <h2 class="day">Thu</h2>
                                                            <h3 class="degrees">28</h3>
                                                            <canvas height="32" width="32" id="sleet"></canvas>
                                                            <h5>15 <i>km/h</i></h5>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                                                        <div class="daily-weather">
                                                            <h2 class="day">Fri</h2>
                                                            <h3 class="degrees">28</h3>
                                                            <canvas height="32" width="32" id="wind"></canvas>
                                                            <h5>11 <i>km/h</i></h5>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                                                        <div class="daily-weather">
                                                            <h2 class="day">Sat</h2>
                                                            <h3 class="degrees">26</h3>
                                                            <canvas height="32" width="32" id="cloudy"></canvas>
                                                            <h5>10 <i>km/h</i></h5>
                                                        </div>
                                                    </div>
                                                    <div class="clearfix"></div>
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
        </div>
    </body>

</html>