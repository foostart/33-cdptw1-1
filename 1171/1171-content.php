<?php
    $url_host = 'http://'.$_SERVER['HTTP_HOST'];
    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';
    
    preg_match_all($pattern_uri, __DIR__, $matches);
    $url_path = $url_host . $matches[1][0];
    $url_path = str_replace('\\', '/', $url_path);
?>
        <div class="type-1171">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-10 col-md-offset-2">
                        <div class="content5">
                            <div class="col-md-8 col-md-offset-4 col-sm-8 col-sm-offset-4 col-xs-12 col-xs-offser-0">
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <div class="x_panel">
                                            <div class="x_title">
                                                <h2 class="geo">Visitors location<small> geo-presentation</small></h2>
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
                                                    <h2 class="countreis"> 125.7k Views from 60 countries</h2>

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
                                                <div id="world-map-gdp" class="col-md-8 col-sm-12 col-xs-12 world map" style="height:230px; left: 24px;">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <div class="x_panel">
                                            <div class="x_title">
                                                <h2 class="geo">To Do List<small> Sample tasks</small></h2>
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
                                                <h2 class="geo">Daily active users<small> Sessions</small></h2>
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
                                                   
                                                    <canvas id="partly-cloudy-day" width="64" height="64" style="padding-top: 14px;"></canvas>
                                                    </div>
                                                    <div class="col-sm-8">
                                                        <div class="weather-text">
                                                            <h3>Texas Partly Cloudy Day</h3>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="weather-text">
                                                    <h4 class="degrees">23</h4>
                                                </div>
                                                <div class="clearfix"></div>
                                                <div class="row">
                                                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                                                        <div class="daily-weather">
                                                            <h2 class="day">Mon</h2>
                                                            <h4 class="degrees">25</h4>
                                                            <canvas id="clear-day" width="32" height="32" style="margin: -2px;"></canvas>
                                                            <h5>15 <i>km/h</i></h5>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                                                        <div class="daily-weather">
                                                            <h2 class="day">Tue</h2>
                                                            <h4 class="degrees">25</h4>
                                                            <canvas height="32" width="32" id="rain" style="margin: -2px;"></canvas>
                                                            <h5>12 <i>km/h</i></h5>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                                                        <div class="daily-weather">
                                                            <h2 class="day">Wed</h2>
                                                            <h4 class="degrees">27</h4>
                                                            <canvas height="32" width="32" id="snow" style="margin: -2px;"></canvas>
                                                            <h5>14 <i>km/h</i></h5>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                                                        <div class="daily-weather">
                                                            <h2 class="day">Thu</h2>
                                                            <h4 class="degrees">28</h4>
                                                            <canvas height="32" width="32" id="sleet" style="margin: -2px;"></canvas>
                                                            <h5>15 <i>km/h</i></h5>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                                                        <div class="daily-weather">
                                                            <h2 class="day">Fri</h2>
                                                            <h4 class="degrees">28</h4>
                                                            <canvas height="32" width="32" id="wind" style="margin: -2px;"></canvas>
                                                            <h5>11 <i>km/h</i></h5>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                                                        <div class="daily-weather">
                                                            <h2 class="day">Sat</h2>
                                                            <h4 class="degrees">26</h4>
                                                            <canvas height="32" width="32" id="cloudy" style="margin: -2px;"></canvas>
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
