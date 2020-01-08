<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use materialadmin\assets\MaterialAsset;

$assets = MaterialAsset::register($this);
?>
<?php $this->beginPage() ?>
<html lang="en">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body class="menubar-hoverable header-fixed menubar-pin">
<?php $this->beginBody() ?>

<?= $this->render('header.php') ?>

<div id="base">
    <div id="content">
        <section>
            <div class="section-body">
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="card">
                            <div class="card-body no-padding">
                                <div class="alert alert-callout alert-info no-margin">
                                    <strong class="pull-right text-success text-lg">0,38% <i
                                                class="md md-trending-up"></i></strong>
                                    <strong class="text-xl">$ 32,829</strong><br/>
                                    <span class="opacity-50">Revenue</span>
                                    <div class="stick-bottom-left-right">
                                        <div class="height-2 sparkline-revenue" data-line-color="#bdc1c1"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-3 col-sm-6">
                        <div class="card">
                            <div class="card-body no-padding">
                                <div class="alert alert-callout alert-warning no-margin">
                                    <strong class="pull-right text-warning text-lg">0,01% <i
                                                class="md md-swap-vert"></i></strong>
                                    <strong class="text-xl">432,901</strong><br/>
                                    <span class="opacity-50">Visits</span>
                                    <div class="stick-bottom-right">
                                        <div class="height-1 sparkline-visits" data-bar-color="#e5e6e6"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-3 col-sm-6">
                        <div class="card">
                            <div class="card-body no-padding">
                                <div class="alert alert-callout alert-danger no-margin">
                                    <strong class="pull-right text-danger text-lg">0,18% <i
                                                class="md md-trending-down"></i></strong>
                                    <strong class="text-xl">42.90%</strong><br/>
                                    <span class="opacity-50">Bounce rate</span>
                                    <div class="stick-bottom-left-right">
                                        <div class="progress progress-hairline no-margin">
                                            <div class="progress-bar progress-bar-danger" style="width:43%"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-3 col-sm-6">
                        <div class="card">
                            <div class="card-body no-padding">
                                <div class="alert alert-callout alert-success no-margin">
                                    <h1 class="pull-right text-success"><i class="md md-timer"></i></h1>
                                    <strong class="text-xl">54 sec.</strong><br/>
                                    <span class="opacity-50">Avg. time on site</span>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
                <div class="row">


                    <div class="col-md-9">
                        <div class="card ">
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="card-head">
                                        <header>Site activity</header>
                                    </div>
                                    <div class="card-body height-8">
                                        <div id="flot-visitors-legend"
                                             class="flot-legend-horizontal stick-top-right no-y-padding"></div>
                                        <div id="flot-visitors" class="flot height-7" data-title="Activity entry"
                                             data-color="#7dd8d2,#0aa89e"></div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card-head">
                                        <header>Today's stats</header>
                                    </div>
                                    <div class="card-body height-8">
                                        <strong>214</strong> members
                                        <span class="pull-right text-success text-sm">0,18% <i
                                                    class="md md-trending-up"></i></span>
                                        <div class="progress progress-hairline">
                                            <div class="progress-bar progress-bar-primary-dark" style="width:43%"></div>
                                        </div>
                                        756 pageviews
                                        <span class="pull-right text-success text-sm">0,68% <i
                                                    class="md md-trending-up"></i></span>
                                        <div class="progress progress-hairline">
                                            <div class="progress-bar progress-bar-primary-dark" style="width:11%"></div>
                                        </div>
                                        291 bounce rates
                                        <span class="pull-right text-danger text-sm">21,08% <i
                                                    class="md md-trending-down"></i></span>
                                        <div class="progress progress-hairline">
                                            <div class="progress-bar progress-bar-danger" style="width:93%"></div>
                                        </div>
                                        32,301 visits
                                        <span class="pull-right text-success text-sm">0,18% <i
                                                    class="md md-trending-up"></i></span>
                                        <div class="progress progress-hairline">
                                            <div class="progress-bar progress-bar-primary-dark" style="width:63%"></div>
                                        </div>
                                        132 pages
                                        <span class="pull-right text-success text-sm">0,18% <i
                                                    class="md md-trending-up"></i></span>
                                        <div class="progress progress-hairline">
                                            <div class="progress-bar progress-bar-primary-dark" style="width:47%"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-head">
                                <header class="text-primary">Server status</header>
                            </div>
                            <div class="card-body height-4">
                                <div class="pull-right text-center">
                                    <em class="text-primary">Temperature</em>
                                    <br/>
                                    <div id="serverStatusKnob"
                                         class="knob knob-shadow knob-primary knob-body-track size-2">
                                        <input type="text" class="dial" data-min="0" data-max="100" data-thickness=".09"
                                               value="50" data-readOnly=true>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body height-4 no-padding">
                                <div class="stick-bottom-left-right">
                                    <div id="rickshawGraph" class="height-4" data-color1="#0aa89e"
                                         data-color2="rgba(79, 89, 89, 0.2)"></div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
                <div class="row">


                    <div class="col-md-3">
                        <div class="card ">
                            <div class="card-head">
                                <header>Todo's</header>
                                <div class="tools">
                                    <a class="btn btn-icon-toggle btn-close"><i class="md md-close"></i></a>
                                </div>
                            </div>
                            <div class="card-body no-padding height-9 scroll">
                                <ul class="list" data-sortable="true">
                                    <li class="tile">
                                        <div class="checkbox checkbox-styled tile-text">
                                            <label>
                                                <input type="checkbox" checked>
                                                <span>Call clients for follow-up</span>
                                            </label>
                                        </div>
                                        <a class="btn btn-flat ink-reaction btn-default">
                                            <i class="md md-delete"></i>
                                        </a>
                                    </li>
                                    <li class="tile">
                                        <div class="checkbox checkbox-styled tile-text">
                                            <label>
                                                <input type="checkbox">
                                                <span>
															Schedule meeting
															<small>opportunity for new customers</small>
														</span>
                                            </label>
                                        </div>
                                        <a class="btn btn-flat ink-reaction btn-default">
                                            <i class="md md-delete"></i>
                                        </a>
                                    </li>
                                    <li class="tile">
                                        <div class="checkbox checkbox-styled tile-text">
                                            <label>
                                                <input type="checkbox">
                                                <span>
															Upload files to server
															<small>The files must be shared with all members of the board</small>
														</span>
                                            </label>
                                        </div>
                                        <a class="btn btn-flat ink-reaction btn-default">
                                            <i class="md md-delete"></i>
                                        </a>
                                    </li>
                                    <li class="tile">
                                        <div class="checkbox checkbox-styled tile-text">
                                            <label>
                                                <input type="checkbox">
                                                <span>Forward important tasks</span>
                                            </label>
                                        </div>
                                        <a class="btn btn-flat ink-reaction btn-default">
                                            <i class="md md-delete"></i>
                                        </a>
                                    </li>
                                    <li class="tile">
                                        <div class="checkbox checkbox-styled tile-text">
                                            <label>
                                                <input type="checkbox">
                                                <span>Forward important tasks</span>
                                            </label>
                                        </div>
                                        <a class="btn btn-flat ink-reaction btn-default">
                                            <i class="md md-delete"></i>
                                        </a>
                                    </li>
                                    <li class="tile">
                                        <div class="checkbox checkbox-styled tile-text">
                                            <label>
                                                <input type="checkbox">
                                                <span>Forward important tasks</span>
                                            </label>
                                        </div>
                                        <a class="btn btn-flat ink-reaction btn-default">
                                            <i class="md md-delete"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-head">
                                <header>Registration history</header>
                                <div class="tools">
                                    <a class="btn btn-icon-toggle btn-refresh"><i class="md md-refresh"></i></a>
                                    <a class="btn btn-icon-toggle btn-collapse"><i class="fa fa-angle-down"></i></a>
                                    <a class="btn btn-icon-toggle btn-close"><i class="md md-close"></i></a>
                                </div>
                            </div>
                            <div class="card-body no-padding height-9">
                                <div class="row">
                                    <div class="col-sm-6 hidden-xs">
                                        <div class="force-padding text-sm text-default-light">
                                            <p>
                                                <i class="md md-mode-comment text-primary-light"></i>
                                                The registrations are measured from the time that the redesign was fully
                                                implemented and after the first e-mailing.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="force-padding pull-right text-default-light">
                                            <h2 class="no-margin text-primary-dark"><span class="text-xxl">66.05%</span>
                                            </h2>
                                            <i class="fa fa-caret-up text-success fa-fw"></i> more registrations
                                        </div>
                                    </div>
                                </div>
                                <div class="stick-bottom-left-right force-padding">
                                    <div id="flot-registrations" class="flot height-5" data-title="Registration history"
                                         data-color="#0aa89e"></div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-head">
                                <header>New registrations</header>
                                <div class="tools hidden-md">
                                    <a class="btn btn-icon-toggle btn-close"><i class="md md-close"></i></a>
                                </div>
                            </div>
                            <div class="card-body no-padding height-9 scroll">
                                <ul class="list divider-full-bleed">
                                    <li class="tile">
                                        <div class="tile-content">
                                            <div class="tile-icon">
                                                <img src="../../assets/img/avatar9.jpg?1404026744" alt=""/>
                                            </div>
                                            <div class="tile-text">Ann Laurens</div>
                                        </div>
                                        <a class="btn btn-flat ink-reaction">
                                            <i class="md md-block text-default-light"></i>
                                        </a>
                                    </li>
                                    <li class="tile">
                                        <div class="tile-content">
                                            <div class="tile-icon">
                                                <img src="../../assets/img/avatar4.jpg?1404026791" alt=""/>
                                            </div>
                                            <div class="tile-text">Alex Nelson</div>
                                        </div>
                                        <a class="btn btn-flat ink-reaction">
                                            <i class="md md-block text-default-light"></i>
                                        </a>
                                    </li>
                                    <li class="tile">
                                        <div class="tile-content">
                                            <div class="tile-icon">
                                                <img src="../../assets/img/avatar11.jpg?1404026774" alt=""/>
                                            </div>
                                            <div class="tile-text">Mary Peterson</div>
                                        </div>
                                        <a class="btn btn-flat ink-reaction">
                                            <i class="md md-block text-default-light"></i>
                                        </a>
                                    </li>
                                    <li class="tile">
                                        <div class="tile-content">
                                            <div class="tile-icon">
                                                <img src="../../assets/img/avatar7.jpg?1404026721" alt=""/>
                                            </div>
                                            <div class="tile-text">Philip Ericsson</div>
                                        </div>
                                        <a class="btn btn-flat ink-reaction">
                                            <i class="md md-block text-default-light"></i>
                                        </a>
                                    </li>
                                    <li class="tile">
                                        <div class="tile-content">
                                            <div class="tile-icon">
                                                <img src="../../assets/img/avatar8.jpg?1404026729" alt=""/>
                                            </div>
                                            <div class="tile-text">Jim Peters</div>
                                        </div>
                                        <a class="btn btn-flat ink-reaction">
                                            <i class="md md-block text-default-light"></i>
                                        </a>
                                    </li>
                                    <li class="tile">
                                        <div class="tile-content">
                                            <div class="tile-icon">
                                                <img src="../../assets/img/avatar2.jpg?1404026449" alt=""/>
                                            </div>
                                            <div class="tile-text">Jessica Cruise</div>
                                        </div>
                                        <a class="btn btn-flat ink-reaction">
                                            <i class="md md-block text-default-light"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <form class="form" role="form">
                                    <div class="form-group floating-label">
                                        <input type="text" class="form-control" id="regular2">
                                        <label for="regular2">Regular input</label>
                                    </div>
                                    <div class="form-group floating-label">
                                        <input type="password" class="form-control" id="password2">
                                        <label for="password2">Password</label>
                                    </div>
                                    <div class="form-group floating-label">
                                        <input type="text" class="form-control" id="placeholder2">
                                        <label for="placeholder2">Placeholder</label>
                                    </div>
                                    <div class="form-group floating-label">
                                        <input type="text" class="form-control" id="help2">
                                        <label for="help2">Input with help text</label>
                                        <p class="help-block">Help text</p>
                                    </div>
                                    <div class="form-group floating-label">
                                        <input type="text" class="form-control" id="tooltip2" data-toggle="tooltip"
                                               data-placement="bottom" data-trigger="hover"
                                               data-original-title="Example input tooltip text here">
                                        <label for="help2">Input with tooltip</label>
                                    </div>
                                    <div class="form-group floating-label">
                                        <select id="select2" name="select2" class="form-control">
                                            <option value="">&nbsp;</option>
                                            <option value="30">30</option>
                                            <option value="40">40</option>
                                            <option value="50">50</option>
                                            <option value="60">60</option>
                                            <option value="70">70</option>
                                        </select>
                                        <label for="select2">Select</label>
                                    </div>
                                    <div class="form-group floating-label">
                                        <textarea name="textarea2" id="textarea2" class="form-control" rows="3"
                                                  placeholder=""></textarea>
                                        <label for="textarea2">Textarea</label>
                                    </div>
                                    <div class="form-group floating-label">
                                        <label>Static control</label>
                                        <p class="form-control-static">email@example.com</p>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <form class="form-horizontal" role="form">
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Checkboxes</label>
                                        <div class="col-sm-9">
                                            <div class="checkbox checkbox-styled">
                                                <label>
                                                    <input type="checkbox" value="">
                                                    <span>Default checkbox</span>
                                                </label>
                                            </div>
                                            <div class="checkbox checkbox-styled">
                                                <label>
                                                    <input type="checkbox" value="">
                                                    <span>Another default checkbox</span>
                                                </label>
                                            </div>
                                            <div class="checkbox checkbox-styled">
                                                <label>
                                                    <input type="checkbox" value="" disabled="">
                                                    <span>Disabled checkbox</span>
                                                </label>
                                            </div>
                                            <div class="checkbox checkbox-styled">
                                                <label>
                                                    <input type="checkbox" value="" disabled="" checked="">
                                                    <span>Disabled and checked checkbox</span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Inline checkboxes</label>
                                        <div class="col-sm-9">
                                            <label class="checkbox-inline checkbox-styled">
                                                <input type="checkbox" value="option1"><span>1</span>
                                            </label>
                                            <label class="checkbox-inline checkbox-styled">
                                                <input type="checkbox" value="option2"><span>2</span>
                                            </label>
                                            <label class="checkbox-inline checkbox-styled">
                                                <input type="checkbox" value="option3"><span>3</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Checkbox styles</label>
                                        <div class="col-sm-9">
                                            <label class="checkbox-inline checkbox-styled checkbox-primary">
                                                <input type="checkbox" value="option1" checked=""><span>Primary</span>
                                            </label>
                                            <label class="checkbox-inline checkbox-styled checkbox-success">
                                                <input type="checkbox" value="option3" checked=""><span>Success</span>
                                            </label>
                                            <label class="checkbox-inline checkbox-styled checkbox-warning">
                                                <input type="checkbox" value="option3" checked=""><span>Warning</span>
                                            </label>
                                            <label class="checkbox-inline checkbox-styled checkbox-danger">
                                                <input type="checkbox" value="option2" checked=""><span>Danger</span>
                                            </label>
                                            <label class="checkbox-inline checkbox-styled checkbox-info">
                                                <input type="checkbox" value="option3" checked=""><span>Info</span>
                                            </label>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-body">
                                <form class="form-horizontal" role="form">
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Radio buttons</label>
                                        <div class="col-sm-9">
                                            <div class="radio radio-styled">
                                                <label>
                                                    <input type="radio" name="optionsRadios" value="option1" checked="">
                                                    <span>Default radio button</span>
                                                </label>
                                            </div>
                                            <div class="radio radio-styled">
                                                <label>
                                                    <input type="radio" name="optionsRadios" value="option1">
                                                    <span>Another default radio button</span>
                                                </label>
                                            </div>
                                            <div class="radio radio-styled">
                                                <label>
                                                    <input type="radio" name="optionsRadios" value="option2"
                                                           disabled="">
                                                    <span>Disabled radio button</span>
                                                </label>
                                            </div>
                                            <div class="radio radio-styled">
                                                <label>
                                                    <input type="radio" name="optionsRadios2" value="option3"
                                                           disabled="" checked="">
                                                    <span>Disabled and checkedradio button</span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Inline radio buttons</label>
                                        <div class="col-sm-9">
                                            <label class="radio-inline radio-styled">
                                                <input type="radio" name="inlineRadioOptions"
                                                       value="option1"><span>1</span>
                                            </label>
                                            <label class="radio-inline radio-styled">
                                                <input type="radio" name="inlineRadioOptions"
                                                       value="option2"><span>2</span>
                                            </label>
                                            <label class="radio-inline radio-styled">
                                                <input type="radio" name="inlineRadioOptions"
                                                       value="option3"><span>3</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Radio buttons styles</label>
                                        <div class="col-sm-9">
                                            <label class="radio-inline radio-styled radio-primary">
                                                <input type="radio" checked=""><span>Primary</span>
                                            </label>
                                            <label class="radio-inline radio-styled radio-success">
                                                <input type="radio" checked=""><span>Success</span>
                                            </label>
                                            <label class="radio-inline radio-styled radio-warning">
                                                <input type="radio" checked=""><span>Warning</span>
                                            </label>
                                            <label class="radio-inline radio-styled radio-danger">
                                                <input type="radio" checked=""><span>Danger</span>
                                            </label>
                                            <label class="radio-inline radio-styled radio-info">
                                                <input type="radio" checked=""><span>Info</span>
                                            </label>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?= $this->render('menu.php') ?>
    </div>

    <?php $this->endBody() ?>

    <script src="<?= $assets->baseUrl ?>/js/demo/moment.min.js"></script>
    <script src="<?= $assets->baseUrl ?>/js/demo/jquery.flot.min.js"></script>
    <script src="<?= $assets->baseUrl ?>/js/demo/jquery.flot.time.min.js"></script>
    <script src="<?= $assets->baseUrl ?>/js/demo/curvedLines.js"></script>
    <script src="<?= $assets->baseUrl ?>/js/demo/jquery.sparkline.min.js"></script>
    <script src="<?= $assets->baseUrl ?>/js/demo/d3.v3.js"></script>
    <script src="<?= $assets->baseUrl ?>/js/demo/rickshaw.min.js"></script>
    <script src="<?= $assets->baseUrl ?>/js/demo/DemoDashboard.js"></script>
</body>
</html>
<?php $this->endPage() ?>
