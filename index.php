<? session_start();
if(!isset($_SESSION["user"])){
        header("Location: login.php");
        die;
    }
    include("main/config.php");
 ?>

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
    <!-- Force IE9 to render in normal mode -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- Le styles -->
    <!-- Use new way for google web fonts 
    http://www.smashingmagazine.com/2012/07/11/avoiding-faux-weights-styles-google-web-fonts -->
    <!-- Headings -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css' />
    <!-- Text -->
    <link href='http://fonts.googleapis.com/css?family=Droid+Sans:400,700' rel='stylesheet' type='text/css' /> 
    <!--[if lt IE 9]>
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400" rel="stylesheet" type="text/css" />
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:700" rel="stylesheet" type="text/css" />
    <link href="http://fonts.googleapis.com/css?family=Droid+Sans:400" rel="stylesheet" type="text/css" />
    <link href="http://fonts.googleapis.com/css?family=Droid+Sans:700" rel="stylesheet" type="text/css" />
    <![endif]-->

    <!-- Core stylesheets do not remove -->
    <link id="bootstrap" href="css/bootstrap/bootstrap.css" rel="stylesheet" type="text/css" />
    <link href="css/bootstrap/bootstrap-theme.css" rel="stylesheet" type="text/css" />
    <link href="css/supr-theme/jquery.ui.supr.css" rel="stylesheet" type="text/css"/>
    <link href="css/icons.css" rel="stylesheet" type="text/css" />
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />

    <!-- Plugins stylesheets -->
    <link href="plugins/misc/qtip/jquery.qtip.css" rel="stylesheet" type="text/css" />
    <link href="plugins/misc/fullcalendar/fullcalendar.css" rel="stylesheet" type="text/css" />
    <link href="plugins/misc/search/tipuesearch.css" type="text/css" rel="stylesheet" />

    <link href="plugins/forms/uniform/uniform.default.css" type="text/css" rel="stylesheet" />     
    <link href="css/jquery.dataTables.css" type="text/css" rel="stylesheet" />
    <link href="css/responsive.dataTables.css" type="text/css" rel="stylesheet" />
    <link href="plugins/misc/pnotify/jquery.pnotify.default.css" type="text/css" rel="stylesheet" />

    <!-- Main stylesheets -->
    <link href="css/main.css" rel="stylesheet" type="text/css" /> 

    <!-- Custom stylesheets ( Put your own changes here ) -->
    <link href="css/custom.css" rel="stylesheet" type="text/css" /> 

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
    
    <!-- Windows8 touch icon ( http://www.buildmypinnedsite.com/ )-->
    <meta name="application-name" content="Supr"/> 
    <meta name="msapplication-TileColor" content="#3399cc"/> 

    <!-- Load modernizr first -->
    <script type="text/javascript" src="js/libs/modernizr.js"></script>
      <!-- Le javascript
    ================================================== -->
    <!-- Important plugins put in all pages -->
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <!-- <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script> -->
    <script type="text/javascript" src="js/jquery-ui.min.js"></script>
    <!-- <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.2/jquery-ui.min.js"></script> -->
    <script type="text/javascript" src="js/jquery-migrate-1.2.1.min.js"></script>
    <!-- <script type="text/javascript" src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script> -->
    <script type="text/javascript" src="js/bootstrap/bootstrap.js"></script>  
    <script type="text/javascript" src="js/jquery.mousewheel.js"></script>
    <script type="text/javascript" src="js/libs/jRespond.min.js"></script>

    <!-- Charts plugins -->
    <script type="text/javascript" src="plugins/charts/flot/jquery.flot.js"></script>
    <script type="text/javascript" src="plugins/charts/flot/jquery.flot.grow.js"></script>
    <script type="text/javascript" src="plugins/charts/flot/jquery.flot.pie.js"></script>
    <script type="text/javascript" src="plugins/charts/flot/jquery.flot.resize.js"></script>
    <script type="text/javascript" src="plugins/charts/flot/jquery.flot.tooltip_0.4.4.js"></script>
    <script type="text/javascript" src="plugins/charts/flot/jquery.flot.orderBars.js"></script>
    <script type="text/javascript" src="plugins/charts/sparkline/jquery.sparkline.min.js"></script><!-- Sparkline plugin -->
    <script type="text/javascript" src="plugins/charts/knob/jquery.knob.js"></script><!-- Circular sliders and stats -->

    <!-- Misc plugins -->
    <script type="text/javascript" src="plugins/misc/fullcalendar/fullcalendar.min.js"></script><!-- Calendar plugin -->
    <script type="text/javascript" src="plugins/misc/qtip/jquery.qtip.min.js"></script><!-- Custom tooltip plugin -->
    <script type="text/javascript" src="plugins/misc/totop/jquery.ui.totop.min.js"></script> <!-- Back to top plugin -->
    
    <script type="text/javascript" src="plugins/misc/pnotify/jquery.pnotify.min.js"></script> 
    <script type="text/javascript" src="js/jquery.dataTables.js"></script>
    <script type="text/javascript" src="js/dataTables.responsive.js"></script>
    <script src="js/jquery.nestable.js" type="text/javascript" ></script>
    
    
    <!-- Search plugin -->
    <script type="text/javascript" src="plugins/misc/search/tipuesearch_set.js"></script>
    <script type="text/javascript" src="plugins/misc/search/tipuesearch_data.js"></script><!-- JSON for searched results -->
    <script type="text/javascript" src="plugins/misc/search/tipuesearch.js"></script>

    <!-- Form plugins -->
    <script type="text/javascript" src="plugins/forms/uniform/jquery.uniform.min.js"></script>
    
    <!-- Init plugins -->
    <script type="text/javascript" src="js/main.js"></script><!-- Core js functions -->

    </head>
      
    <body>
    <!-- loading animation -->
    <div id="qLoverlay"></div>
    <div id="qLbar"></div>
        
    <div id="header">
        
        <? include("header.php");?>

    </div><!-- End #header -->

    <div id="wrapper">

        <!--Responsive navigation button-->  
        <div class="resBtn">
            <a href="#"><span class="icon16 minia-icon-list-3"></span></a>
        </div>
        
        <!--Left Sidebar collapse button-->  
        <div class="collapseBtn leftbar">
             <a href="#" class="tipR" title="Hide Left Sidebar"><span class="icon12 minia-icon-layout"></span></a>
        </div>

        <!--Sidebar background-->
        <div id="sidebarbg"></div>
        <!--Sidebar content-->
        <div id="sidebar">

            <div class="shortcuts">
                <ul>
                     <li>
                        <a href="index.php" title="Pagina Principal" class="tip"><span class="icon24 icomoon-icon-home"></span></a>
                    </li>
                </ul> 
            </div><!-- End search -->

            <div class="sidenav">

            <? include("menu.php");?>
                
            </div><!-- End sidenav -->
        </div><!-- End #sidebar -->

        <!--Body content-->
        <div id="content" class="clearfix">  
            <?
                $p=$p?$p:"index";
                $f = "cont/$p.php";
                include(file_exists($f)?$f:"cont/404.php");
                
            ?>          
        </div><!-- End #content -->
    
    </div><!-- End #wrapper -->
      <div  id="footer" >
          
      </div>
    </body>
</html>
