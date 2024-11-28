<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- Styles -->
		@include('partials.styles')
		@yield('styles')

        <!--
        <style>
            .background{
                position: absolute;
                opacity: 0.2;
                background-image: url('images/background.jpg');
                height: 95vh;
                width: 100vw;
                background-size: 100% 100%;
                /*animation: slider 10s linear infinite;*/
                mask-image: linear-gradient(black, transparent);
                -webkit-mask-image: linear-gradient(180deg, black 60%, transparent 100%);
            }
            .div{
                position: fixed; /*position: absolute;*/
                top: 0; /*add*/
                left: 0; /*add*/
                width: 100vw; /*add*/
                height: 100vh; /*height:350px;*/
                min-height: 100%;
                background-size: 100%; /*background-size: 100% 100%;*/
                background-position: center;
                
                box-shadow: 20px 20px 10px gray;
                animation: slider 20s linear infinite;
                z-index: -1;
            }
            /*
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-size: cover;
            background-position: center;
            box-shadow: 20px 20px 10px gray;
            animation: slider 10s linear infinite;
            z-index: -1; /* Places the background behind everything */
            
            /*
            @keyframes slider{
                20%{
                    opacity: 0.4;
                    background-image: url('images/background.jpg');
                    mask-image: linear-gradient(black, transparent);
                    -webkit-mask-image: linear-gradient(180deg, black 60%, transparent 100%);
                }
                20%{
                    opacity: 0.4;
                    background-image: url('images/stiers1.jpg');
                    mask-image: linear-gradient(black, transparent);
                    -webkit-mask-image: linear-gradient(180deg, black 60%, transparent 100%);
                }
                30%{
                    opacity: 0.4;
                    background-image: url('images/stiers2.jpg');
                    mask-image: linear-gradient(black, transparent);
                    -webkit-mask-image: linear-gradient(180deg, black 60%, transparent 100%);
                }
                40%{
                    opacity: 0.4;
                    background-image: url('images/stiers3.jpg');
                    mask-image: linear-gradient(black, transparent);
                    -webkit-mask-image: linear-gradient(180deg, black 60%, transparent 100%);
                }
            }*/
            /*
            @media (max-width: 768px) {  */
            .div {
                background-position: top; /* Changes position for smaller screens if needed */
            /*}
        }*/
        </style>-->

		<title>Log In | Timetable</title>
    </head>

    <body class="login-page">
        <img src="images/background.jpg" class="background" style="width:100%" height="100%">
        <div class="div"></div>
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-4 col-sm-8 col-lg-4 col-md-offset-4 col-sm-offset-2 col-lg-offset-4">
                    <div id="login-form-container">
                        <div class="login-form-header">
                            <h3 class="text-center">Log In</h3>
                        </div>

                        <div class="login-form-body">
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                     <form method="POST" action="{{ URL::to('/login') }}">
                                        {!! csrf_field() !!}
                                        @include('errors.form_errors')

                                        <div class="form-group">
                                            <label>Password</label>
                                            <input type="password" class="form-control" placeholder="Password" name="password">
                                        </div>

                                        <div class="form-group">
                                            <input type="submit" name="submit" value="SIGN IN" class="btn btn-lg btn-block btn-custom">
                                        </div>

                                        <div class="form-group">
                                            <a href="/request_reset" class="btn btn-lg btn-block btn-primary">Forgot Password?</a>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Scripts -->
        @include('partials.scripts')
        @yield('scripts')
    </body>
</html>