<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Free Cocktail Restaurant & Bar</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ url('public/assets/img/favicon.ico') }}">
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="{{ url('public/assets/css/bootstrap.min.css') }}">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="{{ url('public/assets/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="{{ url('public/assets/css/animate.css')}}">
    <!-- meanmenu icon CSS
		============================================ -->
    <link rel="stylesheet" href="{{ url('public/assets/css/meanmenu.min.css')}}">
    <!-- main CSS
		============================================ -->
    <link rel="stylesheet" href="{{ url('public/assets/css/main.css')}}">
    <!-- educate icon CSSi
		============================================ -->
    <!--<link rel="stylesheet" href="{{ url('public/assets/css/educate-custon-icon.css')}}">-->
    <!-- colorpicker CSS
		============================================ -->
    <!--<link rel="stylesheet" href="{{ url('public/assets/css/colorpicker/colorpicker.css')}}">-->
    <!-- cropper CSS
    ============================================ -->
    <!--<link rel="stylesheet" href="{{ url('public/assets/css/cropper/cropper.min.css')}}">-->

    <!-- mCustomScrollbar CSS
		============================================ -->
    <!--<link rel="stylesheet" href="{{ url('public/assets/css/scrollbar/jquery.mCustomScrollbar.min.css')}}">-->
    <!-- normalize CSS
		============================================ -->
    <!--<link rel="stylesheet" href="{{ url('public/assets/css/data-table/bootstrap-table.css')}}">-->
    <!--<link rel="stylesheet" href="{{ url('public/assets/css/data-table/bootstrap-editable.css')}}">-->
    <!-- dropzone CSS
		============================================ -->
    <!--<link rel="stylesheet" href="{{ url('public/assets/css/dropzone/dropzone.css')}}">-->
    <!-- forms CSS
		============================================ -->
    <link rel="stylesheet" href="{{ url('public/assets/css/form/all-type-forms.css')}}">
    <!-- global CSS
		============================================ -->
    <link rel="stylesheet" href="{{ url('public/assets/css/global.css')}}">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="{{ url('public/assets/css/style.css')}}">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="{{ url('public/assets/css/responsive.css')}}">
</head>

<body>
    <!-- Start Welcome area -->
    <div class="all-content-wrapper">
        <!-- Login -->
        <div class="banner-section-five">
            <div class="layer-outer">
                <div class="layer-image"></div>
            </div>
            <div class="container full-container">
                <div class="d-flex justify-content-center">
                    <div class="error-page-int pagewrap">
                        <div class="text-center m-b-md custom-login pb-20">
                            <img src="{{ url('public/assets/img/logo/login-logo.png')}}" alt="login-logo" width="150">
                            <p class="pt-10"><b>Restaurant & bar management</b></p>
                        </div>
                        <div>{!! session("message") !!}</div>
                        <div class="content">
                            <h2>{{__('msg.Sign in')}}</h2>
                            <div class="hpanel">
                                <div class="panel-body">
                                    {{Form::open(array("url"=>"loginSubmit","method"=>"post","id"=>"loginForm"))}}
                                        <div class="form-group">
                                            {{Form::email("email",isset($_COOKIE["coolreward_restro_login"])?$_COOKIE["coolreward_restro_login"]:'',["class"=>"form-control","placeholder"=>__('msg.Email')])}}
                                            <div class="error">{{ $errors->first("email") }}</div>
                                        </div>
                                        <div class="form-group">
                                            {{Form::password("password",["id"=>"password","class"=>"form-control","placeholder"=>__('msg.Password')])}}
                                            <span toggle="#password" class="hd_mega fa fa-fw fa-eye field-icon toggle-password"></span>
                                            <div class="error">{{ $errors->first("password") }}</div>
                                        </div>
                                        <div class="">
                                            <div class="custome-checkbox">
                                                {{Form::checkbox("rememberMe","1",(isset($_COOKIE["coolreward_restro_login"])),["class"=>"form-check-input","id"=>"rememberMe"])}}
                                                <label class="form-check-label" for="rememberMe"><span>Remember me</span></label>
                                            </div>
                                        </div>
                                        {{Form::submit(__('msg.Sign in'),["class"=>"btn btn-success loginbtn w-100 my-2"])}}
                                        <p class="help-block small"><a href="#">{{__('msg.Forgot your password')}}?</a></p>
                                        <div class="pt-3">
                                            <p class="m-0">{{__('msg.Don\'t have an account')}}? <a href="{{url('signup')}}">{{__('msg.Sign up for free')}}</a></p>
                                        </div>
                                    {{Form::close()}}
                                </div>
                            </div>
                        </div>
                    </div>   
                </div>
            </div>
        </div>
    </div>


    <!-- jquery
		============================================ -->
    <script src="{{ url('public/assets/js/vendor/jquery-1.12.4.min.js')}}"></script>
    <!-- bootstrap JS
		============================================ -->
    <script src="{{ url('public/assets/js/bootstrap.min.js')}}"></script>
    <!-- wow JS
		============================================ -->
    <script src="{{ url('public/assets/js/wow.min.js')}}"></script>
    <!-- Charts JS
		============================================ -->
        <!--<script src="{{ url('public/assets/js/charts/Chart.js')}}"></script>-->
        <!--<script src="{{ url('public/assets/js/charts/bar-chart.js')}}"></script>-->
    <!-- price-slider JS
		============================================ -->
    <script src="{{ url('public/assets/js/jquery-price-slider.js')}}"></script>
    <!-- meanmenu JS
		============================================ -->
    <script src="{{ url('public/assets/js/jquery.meanmenu.js')}}"></script>
    <!-- owl.carousel JS
		============================================ -->
    <!--<script src="{{ url('public/assets/js/owl.carousel.min.js')}}"></script>-->
    <!-- sticky JS
		============================================ -->
    <!--<script src="{{ url('public/assets/js/jquery.sticky.js')}}"></script>-->
     <!-- dropzone JS
		============================================ -->
    <!--<script src="{{ url('public/assets/js/dropzone/dropzone.js')}}"></script>-->
    <!-- scrollUp JS
		============================================ -->
    <script src="{{ url('public/assets/js/jquery.scrollUp.min.js')}}"></script>
    <!-- mCustomScrollbar JS
		============================================ -->
    <!--<script src="{{ url('public/assets/js/scrollbar/jquery.mCustomScrollbar.concat.min.js')}}"></script>-->
    <!--<script src="{{ url('public/assets/js/scrollbar/mCustomScrollbar-active.js')}}"></script>-->
    <!-- data table JS
		============================================ -->
    <!--<script src="{{ url('public/assets/js/data-table/bootstrap-table.js')}}"></script>-->
    <!--<script src="{{ url('public/assets/js/data-table/tableExport.js')}}"></script>-->
    <!--<script src="{{ url('public/assets/js/data-table/data-table-active.js')}}"></script>-->
    <!--<script src="{{ url('public/assets/js/data-table/bootstrap-table-editable.js')}}"></script>-->
    <!--<script src="{{ url('public/assets/js/data-table/bootstrap-editable.js')}}"></script>-->
    <!--<script src="{{ url('public/assets/js/data-table/bootstrap-table-resizable.js')}}"></script>-->
    <!--<script src="{{ url('public/assets/js/data-table/colResizable-1.5.source.js')}}"></script>-->
    <!--<script src="{{ url('public/assets/js/data-table/bootstrap-table-export.js')}}"></script>-->
    <!-- metisMenu JS
		============================================ -->
    <!--<script src="{{ url('public/assets/js/metisMenu/metisMenu.min.js')}}"></script>-->
    <!--<script src="{{ url('public/assets/js/metisMenu/metisMenu-active.js')}}"></script>-->
    <!--<script src="https://bestwebcreator.com/shopwise/demo/assets/js/jquery.dd.min.js"></script>-->
    <!-- colorpicker JS
		============================================ -->
    <!--<script src="{{ url('public/assets/js/colorpicker/jquery.spectrum.min.js')}}"></script>-->
    <!--<script src="{{ url('public/assets/js/colorpicker/color-picker-active.js')}}"></script>-->
    <!-- cropper JS
		============================================ -->
    <!--<script src="{{ url('public/assets/js/cropper/cropper.min.js')}}"></script>-->
    <!--<script src="{{ url('public/assets/js/cropper/cropper-actice.js')}}"></script>-->
    <!-- main JS
		============================================ -->
    <script src="{{ url('public/assets/js/main.js')}}"></script>
</body>

</html>