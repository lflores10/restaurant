      
    <link href="css/jquery.dataTables.css" type="text/css" rel="stylesheet" />
    <link href="css/responsive.dataTables.css" type="text/css" rel="stylesheet" />
    <!-- <link href="plugins/tables/dataTables/jquery.dataTables.css" type="text/css" rel="stylesheet" /> -->
    <!-- <link href="plugins/tables/dataTables/TableTools.css" type="text/css" rel="stylesheet" /> -->
    <!-- Table plugins -->
    <script type="text/javascript" src="js/jquery.dataTables.js"></script>
    <script type="text/javascript" src="js/dataTables.responsive.js"></script>

            <div class="contentwrapper"><!--Content wrapper-->

                <div class="heading">

                    <h3>Clientes</h3>                    

                    <div class="resBtnSearch">
                        <a href="./index.php"><span class="icon16 icomoon-icon-search-3"></span></a>
                    </div>

                 <!--    <div class="search">

                        <form id="searchform" action="search.html">
                            <input type="text" id="tipue_search_input" class="top-search" placeholder="Search here ..." />
                            <input type="submit" id="tipue_search_button" class="search-btn" value=""/>
                        </form>
                
                    </div> End search --> 
                    
                    <ul class="breadcrumb">
                        <li>Usted esta aqui:</li>
                        <li>
                            <a href="./index.php" class="tip" title="Volver al Inicio">
                                <span class="icon16 icomoon-icon-screen-2"></span>
                            </a> 
                            <span class="divider">
                                <span class="icon16 icomoon-icon-arrow-right-3"></span>
                            </span>
                        </li>
                        <li class="active">Clientes</li>
                    </ul>

                </div><!-- End .heading-->

                <!-- Build page from here: -->
                
                <div class="row">

                    <div class="col-lg-12">

                           <div class="panel panel-default gradient">
                                <div class="panel-heading">
                                    <h4>
                                        <span>Clientes Registrados</span>
                                    </h4>
                                </div>
                                <div class="panel-body noPad clearfix" >
                                    <table cellpadding="0" cellspacing="0" border="0" class="dynamicTable display table table-bordered" width="100%" style="margin-top: 10px;">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Nombre</th>
                                                <th>Telefonos</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>                                            
                                        </tbody>
                                       <!--  <tfoot>
                                            <tr>
                                                <th>Nombre</th>
                                                <th>Direcci&oacuten</th>
                                                <th>Telefonos</th>
                                                <th>Engine version</th>
                                                <th></th>
                                            </tr>
                                        </tfoot> -->
                                    </table>
                                </div>

                            </div>

                    </div><!-- End .span8 -->

                </div><!-- End .row -->
                 
            </div><!-- End contentwrapper -->

            <form id="FormClientes" method="post" >
                <div class="modal fade" id="myModal" role="dialog" aria-labelledby="myModalLabel">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Edicion Clientes</h4>
                      </div>
                      <div class="modal-body">                            
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                        <button type="button" id="submit" class="btn btn-primary">Guardar Cambios</button>
                      </div>
                    </div>
                  </div>
                </div>
            </form>

     <script type="text/javascript">
        var dt;           
        $(document).ready(function() {
            dt = $('.dynamicTable').dataTable({
                ajax: 'main/exec.php?action=get_categorias',
                responsive: true,
                columns: [
                    {"data": "foto" },
                    {"data": "nombre" },
                    {"data": "orden" },
                    {"data": "codigo",
                        "render": function (data, type, row) {
                            var page = "'datoscategorias'"  
                            var cod = "'"+row.codigo+"'"
                            // var cita = '<a title="Programar visita" onclick="modal('+page+','+cod+')" ><span class="icon16 icomoon-icon-equalizer"></span></a>'
                            var cita = '<a title="Editar Categorias" onclick="modal('+page+','+cod+')"><span class="icon16 icomoon-icon-equalizer"></span></a>'
                            return cita
                        }                       
                    }
                ],
                language: {"url": "js/Spanish.json"}
            })
        });
        function modal(page,n) {
            $('.modal-body').load('cont/'+page+'.php?c='+ n
            ,function( response, status, xhr ) {
                $('#myModal').modal({backdrop : false})
            });
        }

        $(function(){
            $('FormClientes').on('submit', function(e){
                alert("entre")
                // e.preventDefault();
                // $.ajax({
                //     url: url, //this is the submit URL
                //     type: 'GET', //or POST
                //     data: $('#subscribe-email-form').serialize(),
                //     success: function(data){
                //          alert('successfully submitted')
                //     }
                // });
            });
        });

    </script>