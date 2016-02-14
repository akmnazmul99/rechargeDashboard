<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Recharge DashBoard</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link type='text/css' rel="stylesheet" href="resources/css/styles.css">
        <link type='text/css' rel="stylesheet" href="resources/css/bootstrap.min.css">

        <script type="text/javascript" src="resources/js/jquery-1.11.1.min.js"></script>
        <script type="text/javascript" src="resources/js/bootstrap.min.js"></script>
    </head>
    <body class="dashBoardBackground">
        <div class="container-fluid dashBoardHeaderBackground">
            <div class="row form-group">
                <div class="col-md-12">
                    <div class="dashBoardHeaderLeftContent">Welcome help</div>
                    <div class="dashBoardHeaderRightContent">About</div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row form-group">
                <div class="col-md-12">
                    <div class="pull-right">
                        Last Refresh Time: 12-Feb-2016 02:45:17 BDT
                        <input class="btn btn-default btn-xs" type="button" value="Refresh">
                    </div>
                </div>
            </div>
            <div class="row form-group">
                <div class="col-md-3">
                    <?php
                    include("left_panel.php");
                    ?>
                </div>


                <!--https://developers.google.com/chart/interactive/docs/gallery/piechart-->


                <div class="col-md-9">
                    <div class="tableHeaderTitle borderFull padding_5px">
                        <div class="row">
                            <div class="col-md-12">
                                Last Day Status [2016-2-11]
                            </div>
                        </div>
                    </div>
                    <div class="miniWindow form-group">
                        <div class="textBold borderWithoutTop padding_5px" >
                            <div class="row">
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    <div class="borderRight">Highest Call</div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    147
                                </div>
                            </div>
                        </div>
                        <div class="textBold borderWithoutTop padding_5px" >
                            <div class="row">
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    <div class="borderRight">Lowest Call</div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    0
                                </div>
                            </div>
                        </div>
                        <div class="textBold borderWithoutTop padding_5px" >
                            <div class="row">
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    <div class="borderRight">Total Successful Calls</div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    11780
                                </div>
                            </div>
                        </div>
                        <div class="textBold borderWithoutTop padding_5px" >
                            <div class="row">
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    <div class="borderRight">ACD</div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    4:37
                                </div>
                            </div>
                        </div>
                        <div class="textBold borderWithoutTop padding_5px" >
                            <div class="row">
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    <div class="borderRight">ASR</div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    100%
                                </div>
                            </div>
                        </div>
                        <div class="textBold borderWithoutTop padding_5px" >
                            <div class="row">
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    <div class="borderRight">Total Minute</div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    54446
                                </div>
                            </div>
                        </div>
                        <div class="textBold borderWithoutTop padding_5px" >
                            <div class="row">
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    <div class="borderRight">Revenue</div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    715221
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="maxWindow form-group">
                        <div class="textBold borderWithoutTop padding_5px whiteBackground">
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="borderRight">Highest Call</div>
                                </div>
                                <div class="col-md-2">
                                    <div class="borderRight marginLeft">Lowest Call</div>
                                </div>
                                <div class="col-md-3">
                                    <div class="borderRight marginLeft">Total Successful Calls</div>
                                </div>
                                <div class="col-md-1">
                                    <div class="borderRight marginLeft">ACD</div>
                                </div>
                                <div class="col-md-1">
                                    <div class="borderRight marginLeft">ASR</div>
                                </div>
                                <div class="col-md-2">
                                    <div class="borderRight marginLeft">Total Minute</div>
                                </div>
                                <div class="col-md-1">
                                    <div class="marginLeft">Revenue</div>
                                </div>
                            </div>
                        </div>
                        <div class="textBold borderWithoutTop padding_5px" >
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="borderRight">147</div>
                                </div>
                                <div class="col-md-2">
                                    <div class="borderRight marginLeft">0</div>
                                </div>
                                <div class="col-md-3">
                                    <div class="borderRight marginLeft">11780</div>
                                </div>
                                <div class="col-md-1">
                                    <div class="borderRight marginLeft">4:37</div>
                                </div>
                                <div class="col-md-1">
                                    <div class="borderRight marginLeft">100%</div>
                                </div>
                                <div class="col-md-2">
                                    <div class="borderRight marginLeft">54446</div>
                                </div>
                                <div class="col-md-1">
                                    <div class="marginLeft">715221</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="paglet">
                                        <div class="row form-group">
                                            <div class="col-md-12">
                                                <div class="textBold">Top 10 customer's ACD, PDD and ASR for 2016-2-12</div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <ul class="nav nav-tabs customNav" role="tablist">
                                                    <li role="presentation" class="active"><a href="#today" aria-controls="today" role="tab" data-toggle="tab">Today</a></li>
                                                    <li role="presentation"><a href="#yesterday" aria-controls="yesterday" role="tab" data-toggle="tab">Yesterday</a></li>
                                                    <li role="presentation"><a href="#week" aria-controls="week" role="tab" data-toggle="tab">Week</a></li>
                                                    <li role="presentation" ><a href="#month" aria-controls="month" role="tab" data-toggle="tab">Month</a></li>
                                                </ul>
                                                <div class="tab-content">
                                                    <?php
                                                    include("cutomers_acd.php");
                                                    ?>
                                                    <div role="tabpanel" class="tab-pane" id="yesterday">Yesterday</div>
                                                    <div role="tabpanel" class="tab-pane" id="week">Week</div>
                                                    <div role="tabpanel" class="tab-pane" id="month">Month</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="paglet">
                                        <div class="row form-group">
                                            <div class="col-md-12">
                                                <div class="textBold">Top 10 Gateway's ACD, PDD and ASR for 2016-2-12</div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <ul class="nav nav-tabs customNav" role="tablist">
                                                    <li role="presentation" class="active"><a href="#today" aria-controls="today" role="tab" data-toggle="tab">Today</a></li>
                                                    <li role="presentation"><a href="#yesterday" aria-controls="yesterday" role="tab" data-toggle="tab">Yesterday</a></li>
                                                    <li role="presentation"><a href="#week" aria-controls="week" role="tab" data-toggle="tab">Week</a></li>
                                                    <li role="presentation" ><a href="#month" aria-controls="month" role="tab" data-toggle="tab">Month</a></li>
                                                </ul>
                                                <div class="tab-content">
                                                    <?php
                                                    include("cutomers_acd.php");
                                                    ?>
                                                    <div role="tabpanel" class="tab-pane" id="yesterday">Yesterday</div>
                                                    <div role="tabpanel" class="tab-pane" id="week">Week</div>
                                                    <div role="tabpanel" class="tab-pane" id="month">Month</div>
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
