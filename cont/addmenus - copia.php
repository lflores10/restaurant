
    <script src="js/jquery.nestable.js" type="text/javascript" ></script>

            <div class="contentwrapper"><!--Content wrapper-->

                <div class="heading">

                    <h3>Add Menus </h3>                    

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
                        <li>
                            <a href="./?p=invmenus" >Menus</a> 
                            <span class="divider">
                                <span class="icon16 icomoon-icon-arrow-right-3"></span>
                            </span>
                        </li>
                        <li class="active">Agregar Menus</li>
                    </ul>

                </div><!-- End .heading-->

                <!-- Build page from here: -->
                
                <div class="row">
                    <form action="" method="get" accept-charset="utf-8">                       
                        <div class="col-lg-7">
                           <div class="panel panel-default gradient">
                                <div class="panel-heading">
                                    <h4>
                                        <span>Detalles</span>
                                    </h4>
                                </div>
                                <div class="panel-body" >  
                                    <div class="form-group" >
                                        <label class="col-lg-3 control-label">Nombre Menu</label>
                                        <div class="col-lg-9">
                                            <input type="text" name="namemenu" class="form-control">
                                        </div>
                                    </div> 
                                    <div class="form-group">
                                        <label class="col-lg-3 control-label">Descripcion</label>
                                        <div class="col-lg-9">
                                            <input type="text" name="namemenu" class="form-control">
                                        </div>
                                    </div>  
                                    <div class="form-group">
                                        <label class="col-lg-3 control-label">Categoria</label>
                                        <div class="col-lg-9">
                                            <input type="text" name="namemenu" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-lg-3 control-label" for="checkboxes">Status</label>
                                        <div class="col-lg-9">
                                            <label class="checkbox-inline">
                                                <input type="checkbox" id="inlineCheckbox1" value="option1" >
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-lg-offset-3 col-lg-9">
                                            <button type="submit" class="btn btn-info">Save changes</button>
                                            <button type="button" class="btn btn-default">Cancel</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>                  
                        <div class="col-lg-3">
                           <div class="panel panel-default gradient">
                                <div class="panel-heading">
                                    <h4>
                                        <span class="icon16 icomoon-icon-image center"></span>
                                    </h4>
                                </div>
                                    <div class="panel-body noPad clearfix" >
                                        <input type="image" name="" value="" placeholder="">
                                    </div>
                           </div>
                        </div>

                    </form>
                </div><!-- End .row -->
                 
            </div><!-- End contentwrapper -->

     <script type="text/javascript">
        var dt;           
        $(document).ready(function() {

         $('button[name="addmenu"]').on('click', function(event) {
            // $(this).prop('disabled', true); // Prevenir Doble Click
            window.location.href = "./?p=addmenus&c=1";
            // console.log(event)
         });

            // dt = $('.dynamicTable').dataTable({
            //     ajax: 'main/exec.php?action=get_clientes',
            //     columns: [
            //         {"data": "nombre" },
            //         {"data": "direccion" },
            //         {"data": "telefono" },
            //         {"data": "email" ,
            //             "render": function (data, type, row) {
            //                 return data + '&nbsp;&nbsp;&nbsp;<a href="#" class="btn btn-default btn-xs">Enviar E-mail</a>'
            //             } 
            //         },
            //         {"data": "codigo",
            //             "render": function (data, type, row) {
            //                 var page = "'datoscliente'"  
            //                 var cod = "'"+row.codigo+"'"
            //                 // var cita = '<a title="Programar visita" onclick="modal('+page+','+cod+')" ><span class="icon16 icomoon-icon-equalizer"></span></a>'
            //                 var cita = '<a title="Editar Cliente" onclick="modal('+page+','+cod+')"><span class="icon16 icomoon-icon-equalizer"></span></a>'
            //                 return cita
            //             }                       
            //         }
            //     ],
            //     language: {"url": "js/Spanish.json"}
            // })
        });

    </script>