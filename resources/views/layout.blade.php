<!DOCTYPE html>
<html lang="en">
<head>
    <title>Dashboard</title>

    <!-- BEGIN META -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="your,keywords">
    <meta name="description" content="Short explanation about this website">
    <!-- END META -->

    <!-- BEGIN STYLESHEETS -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:300italic,400italic,300,400,500,700,900' rel='stylesheet' type='text/css'/>
    <link type="text/css" rel="stylesheet" href="/css/bootstrap.css" />
    <link type="text/css" rel="stylesheet" href="/css/materialadmin.css" />
    <link type="text/css" rel="stylesheet" href="/css/font-awesome.min.css" />
    <link type="text/css" rel="stylesheet" href="/css/material-design-iconic-font.min.css" />
    <link type="text/css" rel="stylesheet" href="/css/libs/rickshaw/rickshaw.css" />
    <link type="text/css" rel="stylesheet" href="/css/libs/morris/morris.core.css" />
    <link type="text/css" rel="stylesheet" href="/css/app.css" />

    @yield('css')
    <!-- END STYLESHEETS -->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script type="text/javascript" src="/js/libs/utils/html5shiv.js"></script>
    <script type="text/javascript" src="/js/libs/utils/respond.min.js"></script>
    <![endif]-->
</head>
<body class="menubar-hoverable header-fixed menubar-pin">
@yield('content')
<!-- BEGIN JAVASCRIPT -->
<script src="/js/libs/jquery/jquery-1.11.2.min.js"></script>
<script src="/js/libs/jquery/jquery-migrate-1.2.1.min.js"></script>
<script src="/js/libs/bootstrap/bootstrap.min.js"></script>
<script src="/js/libs/spin.js/spin.min.js"></script>
<script src="/js/libs/autosize/jquery.autosize.min.js"></script>
<script src="/js/libs/moment/moment.min.js"></script>
<script src="/js/libs/flot/jquery.flot.min.js"></script>
<script src="/js/libs/flot/jquery.flot.time.min.js"></script>
<script src="/js/libs/flot/jquery.flot.resize.min.js"></script>
<script src="/js/libs/flot/jquery.flot.orderBars.js"></script>
<script src="/js/libs/flot/jquery.flot.pie.js"></script>
<script src="/js/libs/flot/curvedLines.js"></script>
<script src="/js/libs/jquery-knob/jquery.knob.min.js"></script>
<script src="/js/libs/sparkline/jquery.sparkline.min.js"></script>
<script src="/js/libs/nanoscroller/jquery.nanoscroller.min.js"></script>
<script src="/js/libs/d3/d3.min.js"></script>
<script src="/js/libs/d3/d3.v3.js"></script>
<script src="/js/libs/rickshaw/rickshaw.min.js"></script>
<script src="/js/core/source/App.js"></script>
<script src="/js/app.js"></script>
<script src="/js/core/source/AppNavigation.js"></script>
<script src="/js/core/source/AppOffcanvas.js"></script>
<script src="/js/core/source/AppCard.js"></script>
<script src="/js/core/source/AppForm.js"></script>
<script src="/js/core/source/AppNavSearch.js"></script>
<script src="/js/core/source/AppVendor.js"></script>
<script src="/js/core/demo/Demo.js"></script>
<!-- END JAVASCRIPT -->

<form action=""><input type="hidden" name="_method" value="DELETE"></form>

<script>
    $("a[data-delete]").click(function(evt){
        var url = $(this).attr('href');
        console.log("url",url);
        $('<form id="deleteForm" method="post" action="'+url+'"><input type="hidden" name="_method" value="DELETE"></form>')
                .appendTo('body');
        $('form#deleteForm')
                .submit()
                .remove();

        evt.preventDefault();
    });
</script>
@yield('js')

</body>
</html>
