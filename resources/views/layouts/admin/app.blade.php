<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="_token" content="{{ csrf_token() }}" />
        <title>{{ config('app.name') }}</title>
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <style>
            body {
                font-family: 'Poppins', sans-serif;
                background: #fafafa;
            }
            #header_image{
                background-color: #E7D7FF;
                padding: 10px;
            }
            #header_image img {
                width: 25px;
                height: 25px;

            }
            p {
                font-family: 'Poppins', sans-serif;
                font-size: 1.1em;
                font-weight: 300;
                line-height: 1.7em;
                color: #999;
            }
            a,
            a:hover,
            a:focus {
                color: inherit;
                text-decoration: none;
            }
            .navbar {
                padding: 15px 10px;
                background: #fff;
                border: none;
                border-radius: 0;
                margin-bottom: 40px;
                box-shadow: 1px 1px 3px rgba(0, 0, 0, 0.1);
            }
            .navbar-btn {
                box-shadow: none;
                outline: none !important;
                border: none;
            }
            /* ---------------------------------------------------
                SIDEBAR STYLE
            ----------------------------------------------------- */
            .wrapper {
                display: flex;
                width: 100%;
                height: 100vh;
                overflow: hidden;
                align-items: stretch;
            }
            #sidebar {
                min-width: 250px;
                max-width: 250px;
                background: #CC59DB;
                color: #fff;
                max-height: 100vh;
                overflow-y: hidden;
                transition: all 0.3s;
            }
            #sidebar:hover {
                overflow-y: scroll;
            }
            #sidebar.active {
                margin-left: -250px;
            }
            #sidebar .sidebar-header {
                padding: 20px;
                background: #CC59DB;
                border-bottom: 1px solid rgba(255, 255, 255, 0.21);
            }
            #sidebar ul.components {
                padding: 20px 0;
                /* border-bottom: 1px solid #000; */
            }
            #sidebar ul p {
                color: #fff;
                padding: 10px;
            }
            #sidebar ul li a {
                padding: 10px;
                font-size: 1.1em;
                display: block;
            }
            #sidebar ul li a:hover {
                color: #CC59DB;
                background: #fff;
            }
            #sidebar ul li.active>a,
            a[aria-expanded="true"] {
                color: #fff;
                background: #CC59DB;
            }

            a[data-toggle="collapse"] {
                position: relative;
            }
            .dropdown-toggle::after {
                display: block;
                position: absolute;
                top: 50%;
                right: 20px;
                transform: translateY(-50%);
            }
            .drop_down{
                margin-left: -70px;
            }
            ul ul a {
                font-size: 0.9em !important;
                padding-left: 30px !important;
                background: #CC59DB;
            }
            ul.CTAs {
                padding: 20px;
            }
            ul.CTAs a {
                text-align: center;
                font-size: 0.9em !important;
                display: block;
                border-radius: 5px;
                margin-bottom: 5px;
            }
            a.download {
                background: #fff;
                color: #7386D5;
            }
            a.article,
            a.article:hover {
                background: #6d7fcc !important;
                color: #fff !important;
            }
            /* ---------------------------------------------------
                CONTENT STYLE
            ----------------------------------------------------- */
            #content {
                width: 100%;
                padding-bottom: 0px;
                min-height: 100vh;
                max-height: 100vh;
                overflow-y: scroll;
                transition: all 0.3s;
            }
            /* ---------------------------------------------------
                MEDIAQUERIES
            ----------------------------------------------------- */
            @media (max-width: 991px) {
                #sidebar {
                    margin-left: -250px;
                }
                #sidebar.active {
                    margin-left: 0;
                }
                #sidebarCollapse span {
                    display: none;
                }
            }
            /* width */
            ::-webkit-scrollbar {
                width: 5px;
                height:2px;
            }

            /* Track */
            ::-webkit-scrollbar-track {
                background: transparent;
            }

            /* Handle */
            ::-webkit-scrollbar-thumb {
                background: #bab9b6;
            }

            /* Handle on hover */
            ::-webkit-scrollbar-thumb:hover {
                background: #bab9b6;
            }
            .custom__btn{
                width: 100px;
            }
        </style>
    </head>
    <body>
        <div class="wrapper" >
            <!-- Sidebar  -->
            @include('layouts.admin.nav')
            <!-- Page Content  -->
            <div id="content" class="container-fluid">
                <div class="row px-0">
                    <div class="col-12 p-0">
                        <nav class="navbar navbar-expand-lg navbar-light">
                            <div class="container-fluid">
                                <div class="row w-100">
                                    <div class="col-md-12 d-flex justify-content-between">
                                        <button type="button" id="sidebarCollapse"
                                            class="align-self-center mr-2 p-0"
                                            style="font-size: 28px; background-color: transparent; border:0; color:#c97a67;"
                                        >
                                            <!-- <i class="fas fa-caret-left" style="color: #8C5FD7; font-size: 22px;"></i> -->
                                            <i class="fa fa-bars"></i>
                                        </button>
                                        <div class="d-flex justify-content-between">
                                            <div class="dropdown show">
                                                <b class=" dropdown-toggle" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <img src="https://picsum.photos/40" class="rounded-circle" alt="Profile Settings">
                                                    <i class="ml-4 fa-solid fa-caret-down"></i>
                                                </b>
                                                <div class="drop_down dropdown-menu shadow p-3 mb-5 bg-white rounded" aria-labelledby="dropdownMenuLink">
                                                    <a class="dropdown-item" href="#">Profile</a>
                                                    <a class="dropdown-item" href="#">App Settings</a>
                                                    <a class="dropdown-item" href="#">
                                                        <label id="label" for="logout"  style="cursor: pointer">
                                                            Logout
                                                        </label>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </nav>
                    </div>
                    <div class="col-12 p-0">
                        @yield('content')
                    </div>
                </div>
            </div>
        </div>

        <script src="{{ asset('js/app.js') }}" defer></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        @if(session()->has('msg'))
            <script>
                toastr.success("{{ Session::get('msg') }}")
            </script>
        @endif
        <script>
            $(document).ready(function () {
                $('#sidebarCollapse').on('click', function () {
                    $('#sidebar').toggleClass('active');
                });
            });
        </script>
        <script>
            $( document ).ready(function(){
                $("#btn-open").click(()=>{
                    $('#sidebar').animate({marginLeft: "0px"});
                })
                $("#btn-close").click(()=>{
                    $('#sidebar').animate({marginLeft: "-300px"});
                })
            });

            $( document ).ready(function(){
                var parts = window.location.pathname.split('/');
                var lastSegment = parts.pop() || parts.pop();  // handle potential trailing slash
                // alert(`#${lastSegment}`)
                $('#menu_area li').removeClass('active')
                $(`#${lastSegment}`).addClass('active')

            });

            // $.ajax({
            //     type: "GET",
            //     url: "https://jsonplaceholder.typicode.com/posts/1",
            //     cache: false,
            //     success: function(data){
            //         console.log(data);
            //         alert("ok")
            //     }
            // });
        </script>
        @stack('scripts')
    </body>
</html>
