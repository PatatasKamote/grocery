<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Grocery App CMS</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{url('/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="{{url('/vendor/metisMenu/metisMenu.min.css')}}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{url('/css/sb-admin-2.css')}}" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="{{url('/vendor/morrisjs/morris.css')}}" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="{{url('/vendor/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Grocery App</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="{{url('/')}}/logout"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="{{url('/')}}"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href="{{url('/products')}}"><i class="fa fa-dashboard fa-fw"></i> Products</a>
                        </li>
                        <li>
                            <a href="{{url('/categories')}}"><i class="fa fa-dashboard fa-fw"></i> Product Categories</a>
                        </li>
                        <li>
                            <a href="{{url('/transactions')}}"><i class="fa fa-dashboard fa-fw"></i> Transactions</a>
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">{{ucfirst(Request::segment(1)  == '' ? 'Home' : Request::segment(1) )}}</h1>
                @yield('content')
                </div>
                <!-- /.col-lg-12 -->
            </div>
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="{{url('vendor/jquery/jquery.min.js')}}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{url('vendor/bootstrap/js/bootstrap.min.js')}}"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="{{url('/vendor/metisMenu/metisMenu.min.js')}}"></script>

    <!-- Morris Charts JavaScript -->

    <!-- Custom Theme JavaScript -->
    <script src="{{url('/js/sb-admin-2.js')}}"></script>
    <script src="{{url('/js/main.js')}}"></script>
    <script type="text/javascript">
        const baseurl = '{{url("/")}}';
        const module = '{{Request::segment(1)}}';
        const method = '{{Request::segment(2)}}';
        const dataid = '{{Request::segment(3)}}';
    </script>

</body>

</html>
