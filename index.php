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
        <script type="text/javascript" src="resources/js/d3.v2.js"></script>
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
                    <div class="pull-right padding_top_5px">
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
                                                <div class="textBold">Top 10 Customer's ACD, PDD and ASR for 2016-2-12</div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <ul class="nav nav-tabs customNav" role="tablist">
                                                    <li role="presentation" class="active"><a href="#cutomerAcdYToday" aria-controls="cutomerAcdToday" role="tab" data-toggle="tab">Today</a></li>
                                                    <li role="presentation"><a href="#cutomerAcdYesterday" aria-controls="cutomerAcdYesterday" role="tab" data-toggle="tab">Yesterday</a></li>
                                                    <li role="presentation"><a href="#cutomerAcdWeek" aria-controls="cutomerAcdWeek" role="tab" data-toggle="tab">Week</a></li>
                                                    <li role="presentation" ><a href="#cutomerAcdMonth" aria-controls="cutomerAcdMonth" role="tab" data-toggle="tab">Month</a></li>
                                                </ul>
                                                <div class="tab-content">
                                                    <div role="tabpanel" class="tab-pane active" id="cutomerAcdYToday">
                                                        <?php
                                                        include("cutomers_acd.php");
                                                        ?>
                                                    </div>
                                                    <div role="tabpanel" class="tab-pane" id="cutomerAcdYesterday">
                                                        <?php
                                                        include("cutomers_acd.php");
                                                        ?>
                                                    </div>
                                                    <div role="tabpanel" class="tab-pane" id="cutomerAcdWeek">
                                                        <?php
                                                        include("cutomers_acd.php");
                                                        ?>
                                                    </div>
                                                    <div role="tabpanel" class="tab-pane" id="cutomerAcdMonth">
                                                        <?php
                                                        include("cutomers_acd.php");
                                                        ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="paglet">
                                        <div class="row form-group">
                                            <div class="col-md-12">
                                                <div class="textBold">Top 10 Customers for 2016-2-12</div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <ul class="nav nav-tabs customNav" role="tablist">
                                                    <li role="presentation" class="active"><a href="#topCutomerToday" aria-controls="topCutomerToday" role="tab" data-toggle="tab">Today</a></li>
                                                    <li role="presentation"><a href="#topCutomerYesterday" aria-controls="topCutomerYesterday" role="tab" data-toggle="tab">Yesterday</a></li>
                                                    <li role="presentation"><a href="#topCutomerWeek" aria-controls="topCutomerWeek" role="tab" data-toggle="tab">Week</a></li>
                                                    <li role="presentation" ><a href="#topCutomerMonth" aria-controls="topCutomerMonth" role="tab" data-toggle="tab">Month</a></li>
                                                </ul>
                                                <div class="tab-content">
                                                    <div role="tabpanel" class="tab-pane active" id="topCutomerToday">
                                                        <?php
                                                        include("top_customers.php");
                                                        ?>
                                                    </div>
                                                    <div role="tabpanel" class="tab-pane" id="topCutomerYesterday">
                                                        <?php
                                                        include("top_customers.php");
                                                        ?>
                                                    </div>
                                                    <div role="tabpanel" class="tab-pane" id="topCutomerWeek">
                                                        <?php
                                                        include("top_customers.php");
                                                        ?>
                                                    </div>
                                                    <div role="tabpanel" class="tab-pane" id="topCutomerMonth">
                                                        <?php
                                                        include("top_customers.php");
                                                        ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="paglet">
                                        <div class="row form-group">
                                            <div class="col-md-12">
                                                <div class="textBold">Country-wise ACD for 2016-2-12</div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <ul class="nav nav-tabs customNav" role="tablist">
                                                    <li role="presentation" class="active"><a href="#countryWiseAcdToday" aria-controls="countryWiseAcdToday" role="tab" data-toggle="tab">Today</a></li>
                                                    <li role="presentation"><a href="#countryWiseAcdYesterday" aria-controls="countryWiseAcdYesterday" role="tab" data-toggle="tab">Yesterday</a></li>
                                                    <li role="presentation"><a href="#countryWiseAcdWeek" aria-controls="countryWiseAcdWeek" role="tab" data-toggle="tab">Week</a></li>
                                                    <li role="presentation" ><a href="#countryWiseAcdMonth" aria-controls="countryWiseAcdMonth" role="tab" data-toggle="tab">Month</a></li>
                                                </ul>
                                                <div class="tab-content">
                                                    <div role="tabpanel" class="tab-pane active" id="countryWiseAcdToday">
                                                        <?php
                                                        include("country_wise_acd_today.php");
                                                        ?>
                                                    </div>
                                                    <div role="tabpanel" class="tab-pane" id="countryWiseAcdYesterday">
                                                        <?php
                                                        include("country_wise_acd_yesterday.php");
                                                        ?>
                                                    </div>
                                                    <div role="tabpanel" class="tab-pane" id="countryWiseAcdWeek">
                                                        <?php
                                                        include("country_wise_acd_week.php");
                                                        ?>
                                                    </div>
                                                    <div role="tabpanel" class="tab-pane" id="countryWiseAcdMonth">
                                                        <?php
                                                        include("country_wise_acd_month.php");
                                                        ?>
                                                    </div>
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
                                                    <li role="presentation" class="active"><a href="#gatewayAcdYToday" aria-controls="gatewayAcdToday" role="tab" data-toggle="tab">Today</a></li>
                                                    <li role="presentation"><a href="#gatewayAcdYesterday" aria-controls="gatewayAcdYesterday" role="tab" data-toggle="tab">Yesterday</a></li>
                                                    <li role="presentation"><a href="#gatewayAcdWeek" aria-controls="gatewayAcdWeek" role="tab" data-toggle="tab">Week</a></li>
                                                    <li role="presentation" ><a href="#gatewayAcdMonth" aria-controls="gatewayAcdMonth" role="tab" data-toggle="tab">Month</a></li>
                                                </ul>
                                                <div class="tab-content">
                                                    <div role="tabpanel" class="tab-pane active" id="gatewayAcdYToday">
                                                        <?php
                                                        include("gateways_acd.php");
                                                        ?>
                                                    </div>
                                                    <div role="tabpanel" class="tab-pane" id="gatewayAcdYesterday">
                                                        <?php
                                                        include("gateways_acd.php");
                                                        ?>
                                                    </div>
                                                    <div role="tabpanel" class="tab-pane" id="gatewayAcdWeek">
                                                        <?php
                                                        include("gateways_acd.php");
                                                        ?>
                                                    </div>
                                                    <div role="tabpanel" class="tab-pane" id="gatewayAcdMonth">
                                                        <?php
                                                        include("gateways_acd.php");
                                                        ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="paglet">
                                        <div class="row form-group">
                                            <div class="col-md-12">
                                                <div class="textBold">Top 10 Gateways for 2016-2-12</div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <ul class="nav nav-tabs customNav" role="tablist">
                                                    <li role="presentation" class="active"><a href="#topGatewayToday" aria-controls="topGatewayToday" role="tab" data-toggle="tab">Today</a></li>
                                                    <li role="presentation"><a href="#topGatewayYesterday" aria-controls="topGatewayYesterday" role="tab" data-toggle="tab">Yesterday</a></li>
                                                    <li role="presentation"><a href="#topGatewayWeek" aria-controls="topGatewayWeek" role="tab" data-toggle="tab">Week</a></li>
                                                    <li role="presentation" ><a href="#topGatewayMonth" aria-controls="topGatewayMonth" role="tab" data-toggle="tab">Month</a></li>
                                                </ul>
                                                <div class="tab-content">
                                                    <div role="tabpanel" class="tab-pane active" id="topGatewayToday">
                                                        <?php
                                                        include("top_gateways.php");
                                                        ?>
                                                    </div>
                                                    <div role="tabpanel" class="tab-pane" id="topGatewayYesterday">
                                                        <?php
                                                        include("top_gateways.php");
                                                        ?>
                                                    </div>
                                                    <div role="tabpanel" class="tab-pane" id="topGatewayWeek">
                                                        <?php
                                                        include("top_gateways.php");
                                                        ?>
                                                    </div>
                                                    <div role="tabpanel" class="tab-pane" id="topGatewayMonth">
                                                        <?php
                                                        include("top_gateways.php");
                                                        ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="paglet">
                                        <div class="row form-group">
                                            <div class="col-md-12">
                                                <div class="textBold">Top 10 Countries (Traffic Minutes) for 2016-2-12</div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <ul class="nav nav-tabs customNav" role="tablist">
                                                    <li role="presentation" class="active"><a href="#topCountryTrafficToday" aria-controls="topCountryTrafficToday" role="tab" data-toggle="tab">Today</a></li>
                                                    <li role="presentation"><a href="#topCountryTrafficYesterday" aria-controls="topCountryTrafficYesterday" role="tab" data-toggle="tab">Yesterday</a></li>
                                                    <li role="presentation"><a href="#topCountryTrafficYesterday" aria-controls="topCountryTrafficYesterday" role="tab" data-toggle="tab">Week</a></li>
                                                    <li role="presentation" ><a href="#topCountryTrafficMonth" aria-controls="topCountryTrafficMonth" role="tab" data-toggle="tab">Month</a></li>
                                                </ul>
                                                <div class="tab-content">
                                                    <div role="tabpanel" class="tab-pane active" id="topCountryTrafficToday">
                                                        <?php
                                                        include("top_country_traffic_today.php");
                                                        ?>
                                                    </div>
                                                    <div role="tabpanel" class="tab-pane" id="topCountryTrafficYesterday">
                                                        <?php
                                                        include("top_country_traffic_yesterday.php");
                                                        ?>
                                                    </div>
                                                    <div role="tabpanel" class="tab-pane" id="topCountryTrafficWeek">
                                                        <?php
                                                        include("top_country_traffic_week.php");
                                                        ?>
                                                    </div>
                                                    <div role="tabpanel" class="tab-pane" id="topCountryTrafficMonth">
                                                        <?php
                                                        include("top_country_traffic_month.php");
                                                        ?>
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
        </div>
    </body>
</html>
