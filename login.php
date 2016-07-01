<? session_start();    
    include("main/config.php");
    if($_SESSION["user"] ){
        header("Location: ./");
        die();
    }?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Supr admin</title>
    <meta name="author" content="SuggeElson" />
    <meta name="description" content="Supr admin template - new premium responsive admin template. This template is designed to help you build the site administration without losing valuable time.Template contains all the important functions which must have one backend system.Build on great twitter boostrap framework" />
    <meta name="keywords" content="admin, admin template, admin theme, responsive, responsive admin, responsive admin template, responsive theme, themeforest, 960 grid system, grid, grid theme, liquid, masonry, jquery, administration, administration template, administration theme, mobile, touch , responsive layout, boostrap, twitter boostrap" />
    <meta name="application-name" content="Supr admin template" />

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Force IE9 to render in normla mode -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- Le styles -->
    <link href="css/bootstrap/bootstrap.css" rel="stylesheet" />
    <!-- <link href="css/bootstrap/bootstrap-responsive.css" rel="stylesheet" /> -->
    <link href="css/bootstrap/" rel="stylesheet" />
    <link href="css/supr-theme/jquery.ui.supr.css" rel="stylesheet" type="text/css"/>
    <link href="css/icons.css" rel="stylesheet" type="text/css" />
    <link href="plugins/forms/uniform/uniform.default.css" type="text/css" rel="stylesheet" />

    <!-- Main stylesheets -->
    <link href="css/main.css" rel="stylesheet" type="text/css" />
    <link href="css/_main.css" rel="stylesheet" type="text/css" />


    <!--[if IE 8]><link href="css/ie8.css" rel="stylesheet" type="text/css" /><![endif]-->
    
    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script type="text/javascript" src="js/libs/excanvas.min.js"></script>
      <script type="text/javascript" src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
      <script type="text/javascript" src="js/libs/respond.min.js"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="images/favicon.ico" />
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/apple-touch-icon-144-precomposed.png" />
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/apple-touch-icon-114-precomposed.png" />
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/apple-touch-icon-72-precomposed.png" />
    <link rel="apple-touch-icon-precomposed" href="images/apple-touch-icon-57-precomposed.png" />

    <script type="text/javascript" src="js/libs/modernizr.js"></script>
    <script  type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap/bootstrap.js"></script>  
    <script type="text/javascript" src="plugins/forms/validate/jquery.validate.min.js"></script>
    <script type="text/javascript" src="plugins/forms/uniform/jquery.uniform.min.js"></script>
    </head>
      
    <body class="loginPage">

    <div class="container">

        <div id="header">

            <div class="row">

                <div class="navbar">
                    <div class="container">
                        <p class="navbar-brand" >Supr.<span class="slogan">admin</span></p>
                    </div>
                </div><!-- /navbar -->

            </div><!-- End .row -->

        </div><!-- End #header -->

    </div><!-- End .container -->    

    <div class="container">

        <div class="loginContainer">
            <form class="form-horizontal" name='login' action="index.php" id="loginForm" role="form" >
                <input type="hidden" name="login" value="true">
                <div class="form-group">
                    <label class="col-lg-12 control-label" for="username">Usuario:</label>
                    <div class="col-lg-12">
                        <input id="username" type="text" name="email" class="form-control" placeholder="E-mail">
                        <span class="icon16 icomoon-icon-user right gray marginR10"></span>
                    </div>
                </div><!-- End .form-group  -->
                <div class="form-group">
                    <label class="col-lg-12 control-label" for="password">Password:</label>
                    <div class="col-lg-12">
                        <input id="password" name="pass" type="password" placeholder="Password" class="form-control">
                        <span class="icon16 icomoon-icon-lock right gray marginR10"></span>
                        <!-- <span class="forgot help-block"><a href="#">Forgot your password?</a></span> -->
                        <span class="forgot help-block">Forgot your password?</span>
                    </div>
                </div><!-- End .form-group  -->
                <div class="form-group">
                    <div class="col-lg-12 clearfix form-actions">
                       <!--  <div class="checkbox left">
                            <label><input type="checkbox" id="keepLoged" value="Value" class="styled" name="logged" /> Keep me logged in</label>
                        </div> -->
                        <button type="submit" class="btn btn-info right" id="loginBtn"><span class="icon16 icomoon-icon-enter white"></span> Login</button>
                    </div>
                </div><!-- End .form-group  -->
            </form>
        </div>
    </div><!-- End .container -->   
    </body>
    <script type="text/javascript">
        jQuery(function($) {
            // $(document).on('click', '.toolbar a[data-target]', function(e) {
            //     e.preventDefault();
            //     var target = $(this).data('target');
            //         $('.widget-box.visible').removeClass('visible');//hide others
            //         $(target).addClass('visible');//show target
            //     }); 
        
            $("form[name='login']").submit(function(event) {
                event.preventDefault();
                $.getJSON('main/exec.php', $(this).serialize(), function(json, textStatus) {
                    console.log(json)
                    if(json.status=='OK'){
                            window.location = './index.php';
                    } else {
                        $('.alert').html(json.msj);
                        $('.alert').removeClass('hide');
                        setTimeout(function(){
                            $('.alert').addClass('hide');
                        },5000);
                    }
                });
                return false;
            });
        });
        </script>    
</html>
