<!doctype html>
<html lang="en">
<head>
    <base href="{{asset('')}}"/>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="{{asset('uploads/logos/'.$infoweb->info_imgtitle)}}">
    <link rel="icon" href="{{asset('uploads/logos/'.$infoweb->info_imgtitle)}}">

    <title>
        Đăng ký Shop
    </title>

    <!-- Canonical SEO -->
    <link rel="canonical" href="{{asset('/')}}" />

    <!--  Social tags      -->
    <meta name="keywords" content="{{$infoweb->info_keywords}}">
    <meta name="description" content="{{$infoweb->info_description}}">

    <!-- Schema.org markup for Google+ -->
    <meta itemprop="name" content="{{$infoweb->info_title}}">
    <meta itemprop="description" content="{{$infoweb->info_description}}">

    <!-- Twitter Card data -->
    <meta name="twitter:card" content="Shop">
    <meta name="twitter:site" content="@doubletc">
    <meta name="twitter:title" content="{{$infoweb->info_title}}">
    <meta name="twitter:description" content="{{$infoweb->info_description}}">
    <meta name="twitter:creator" content="DoubleTC">

    <!-- Open Graph data -->
    <meta property="og:title" content="{{$infoweb->info_title}}" />
    <meta property="og:description" content="{{$infoweb->info_description}}" />
    <meta property="og:site_name" content="{{$infoweb->info_name}}" />

    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />

    <link rel="stylesheet" href="./assetscp/css/material-dashboard.min.css?v=2.0.1">

    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="./assetscp/assets-for-demo/demo.css" rel="stylesheet"/>

    <script type="text/javascript">
        if (document.readyState === 'complete') {
            if (window.location != window.parent.location) {
                const elements = document.getElementsByClassName("iframe-extern");
                while (elemnts.lenght > 0) elements[0].remove();
                // $(".iframe-extern").remove();
            }
        };
    </script>
</head>

<body class="off-canvas-sidebar login-page">

<!-- End Navbar -->

<div class="wrapper wrapper-full-page">
    <div class="page-header login-page header-filter" filter-color="black" style="    min-height: 100vh;;background-image: url('./assetscp/img/login.jpg'); background-size: cover; background-position: top center;">
        <div class="container">
            <div class="col-md-5 col-sm-7 ml-auto mr-auto">
                <h4>Bạn đã đăng ký thành công, vui lòng đợi xét duyệt</h4>
            </div>
        </div>

    </div>
</div>

</body>

<!--   Core JS Files   -->
<script src="./assetscp/js/core/jquery.min.js"></script>
<script src="./assetscp/js/core/popper.min.js"></script>
<script src="./assetscp/js/bootstrap-material-design.min.js"></script>
<script src="./assetscp/js/plugins/perfect-scrollbar.jquery.min.js"></script>

<!--  Plugin for Date Time Picker and Full Calendar Plugin  -->
<script src="./assetscp/js/plugins/moment.min.js"></script>

<!--	Plugin for the Datepicker, full documentation here: https://github.com/Eonasdan/bootstrap-datetimepicker -->
<script src="./assetscp/js/plugins/bootstrap-datetimepicker.min.js"></script>

<!--	Plugin for the Sliders, full documentation here: https://refreshless.com/nouislider/ -->
<script src="./assetscp/js/plugins/nouislider.min.js"></script>

<!--	Plugin for Select, full documentation here: https://silviomoreto.github.io/bootstrap-select -->
<script src="./assetscp/js/plugins/bootstrap-selectpicker.js"></script>

<!--	Plugin for Tags, full documentation here: https://xoxco.com/projects/code/tagsinput/  -->
<script src="./assetscp/js/plugins/bootstrap-tagsinput.js"></script>

<!--	Plugin for Fileupload, full documentation here: https://www.jasny.net/bootstrap/javascript/#fileinput -->
<script src="./assetscp/js/plugins/jasny-bootstrap.min.js"></script>

<!-- Plugins for presentation and navigation  -->
<script src="./assetscp/assets-for-demo/js/modernizr.js"></script>

<!-- Material Kit Core initialisations of plugins and Bootstrap Material Design Library -->
<script src="./assetscp/js/material-dashboard.js?v=2.0.1"></script>

<!-- Include a polyfill for ES6 Promises (optional) for IE11, UC Browser and Android browser support SweetAlert -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>

<!-- Library for adding dinamically elements -->
<script src="./assetscp/js/plugins/arrive.min.js" type="text/javascript"></script>

<!-- Forms Validations Plugin -->
<script src="./assetscp/js/plugins/jquery.validate.min.js"></script>

<!--  Charts Plugin, full documentation here: https://gionkunz.github.io/chartist-js/ -->
<script src="./assetscp/js/plugins/chartist.min.js"></script>

<!--  Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->
<script src="./assetscp/js/plugins/jquery.bootstrap-wizard.js"></script>

<!--  Notifications Plugin, full documentation here: https://bootstrap-notify.remabledesigns.com/    -->
<script src="./assetscp/js/plugins/bootstrap-notify.js"></script>

<!-- Vector Map plugin, full documentation here: https://jvectormap.com/documentation/ -->
<script src="./assetscp/js/plugins/jquery-jvectormap.js"></script>

<!-- Sliders Plugin, full documentation here: https://refreshless.com/nouislider/ -->
<script src="./assetscp/js/plugins/nouislider.min.js"></script>

<!--  Plugin for Select, full documentation here: https://silviomoreto.github.io/bootstrap-select -->
<script src="./assetscp/js/plugins/jquery.select-bootstrap.js"></script>

<!--  DataTables.net Plugin, full documentation here: https://datatables.net/    -->
<script src="./assetscp/js/plugins/jquery.datatables.js"></script>

<!-- Sweet Alert 2 plugin, full documentation here: https://limonte.github.io/sweetalert2/ -->
<script src="./assetscp/js/plugins/sweetalert2.js"></script>

<!-- Plugin for Fileupload, full documentation here: https://www.jasny.net/bootstrap/javascript/#fileinput -->
<script src="./assetscp/js/plugins/jasny-bootstrap.min.js"></script>

<!--  Full Calendar Plugin, full documentation here: https://github.com/fullcalendar/fullcalendar    -->
<script src="./assetscp/js/plugins/fullcalendar.min.js"></script>

<!-- demo init -->
<script src="./assetscp/js/plugins/demo.js"></script>

<script type="text/javascript">
    $().ready(function(){
        demo.checkFullPageBackgroundImage();

        setTimeout(function(){
            // after 1000 ms we add the class animated to the login/register card
            $('.card').removeClass('card-hidden');
        }, 700)
    });
</script>
</html>