<!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
    @include('admin.partials.head')
</head>
<body>
<div class="page-container">
    <div class="left-content">
        <div class="mother-grid-inner">
            <!--header start here-->
            @include('admin.partials.header')
            <!--heder end here-->

            <!--inner block start here-->
            <div class="inner-block" style="padding-bottom: 500px">
                @yield('content')
            </div>
            <!--inner block end here-->
            <!--copy rights start here-->
            @include('admin.partials.footer')
            <!--COPY rights end here-->
        </div>
    </div>
    <!--slider menu-->
   @include('admin.partials.sidebar')
    <div class="clearfix"> </div>
</div>
<!--slide bar menu end here-->
@include('admin.partials.main-js')
</body>
</html>
