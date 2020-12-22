<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'MMS-Dashbord')</title>
    <!-- Core CSS - Include with every page -->
    <link href="{{asset('assets/plugins/bootstrap/bootstrap.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/font-awesome/css/font-awesome.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/plugins/pace/pace-theme-big-counter.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/plugins/morris/morris-0.4.3.min.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/css/main-style.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet" />

    @yield('piechart')
    <!-- Page-Level CSS -->
   </head>
<body>
    <!--  wrapper -->
    <div id="wrapper">
        <!-- header -->
            @include('layouts.master.header')
        <!-- header -->

        <!--Side Menu -->
            @include('layouts.master.menu')
        <!--Side Menu -->

        <!-- end navbar side -->
        <!--  page-wrapper -->
        <div id="page-wrapper">
{{--            @if($errors->count() > 0)--}}
{{--                <ul class="list-group">--}}
{{--                    @foreach($errors->all() as $error)--}}
{{--                        <li class="list-group-item text-danger">--}}
{{--                            {{ $error }}--}}
{{--                        </li>--}}
{{--                    @endforeach--}}
{{--                </ul>--}}
{{--            @endif--}}

            @yield('content')



        </div>
        <!-- end page-wrapper -->

    </div>
    <!-- end wrapper -->

    <!-- Core Scripts - Include with every page -->
    <script src="{{asset('assets/plugins/jquery-1.10.2.js')}}"></script>
    <script src="{{asset('assets/plugins/bootstrap/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/plugins/metisMenu/jquery.metisMenu.js')}}"></script>
    <script src="{{asset('assets/plugins/pace/pace.js')}}"></script>
    <script src="{{asset('assets/scripts/siminta.js')}}"></script>
    <!-- Page-Level Plugin Scripts-->
    <script src="{{asset('assets/plugins/morris/raphael-2.1.0.min.js')}}"></script>
    <!-- <script src="{{asset('assets/plugins/morris/morris.js')}}"></script> -->
    <!-- <script src="{{asset('assets/scripts/dashboard-demo.js')}}"></script> -->
    @yield('piechart-script')
    @yield('add-more')

</body>

</html>
