
    <div class="container-fluid">

        <div class="errorContainer">
            <div class="page-header">
                <h1 class="center"><small>ERROR</small> 404</h1>
            </div>

            <h2 class="center">Pagina No Encontrada.</h2>

            <div class="center">
                <a href="javascript: history.go(-1)" class="btn btn-default" style="margin-right:10px;"><span class="icon16 icomoon-icon-arrow-left-10"></span>Atras</a>
               <!--  <a href="dashboard.html" class="btn btn-default"><span class="icon16 icomoon-icon-screen"></span>Dashboard</a> -->
            </div>

        </div>

    </div><!-- End .container -->

     <script type="text/javascript">
        // document ready function
        $(document).ready(function() {
            //------------- Some fancy stuff in error pages -------------//
            $('.errorContainer').hide();
            $('.errorContainer').fadeIn(1000).animate({
                'top': "80%", 
                // 'margin-top': +($('#content').height()/2-30)
                'margin-top': +($('#content').height()/-2-30)
                }, {duration: 750, queue: false}, function() {
                // Animation complete.
            });
        });
    </script>
 