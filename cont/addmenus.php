
    <script type="text/javascript" src="plugins/forms/elastic/jquery.elastic.js"></script>
    <!-- <link rel="stylesheet" href="css/cont/addmenus.css"> -->

        <div class="contentwrapper"><!--Content wrapper-->

                <div class="heading">

                    <h3>Agregar Menus </h3>                    

                    <div class="resBtnSearch">
                        <a href="./index.php"><span class="icon16 icomoon-icon-search-3"></span></a>
                    </div>
                    
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
                    <form name="formaddmenu" method="post" accept-charset="utf-8">
                     <input type="hidden" name="action" value="addmenu">
                     <input type="hidden" name="cod_menu" value="<?=$id?>">
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
                                            <input type="text" name="nombre_menu" class="form-control">
                                        </div>
                                    </div> 
                                    <div class="form-group">
                                        <label class="col-lg-3 control-label">Descripcion</label>
                                        <div class="col-lg-9">
                                             <textarea id="" name="descripcion_menu" rows="2" class="form-control elastic"></textarea>
                                        </div>
                                    </div> 
                              <div class="form-group">
                                 <label class="col-lg-3 control-label" for="select">Categoria</label>
                                 <div class="col-lg-9">
                                    <select name="categoria_menu" class="form-control">
                                       <option value=""></option>
                                       <?
                                          $sql = mysqli_query($mysqli_link,"SELECT * FROM categorias where status = 0");
                                          while($row=mysqli_fetch_array($sql)){
                                             print_r("<option value='".$row['codigo']."'>".$row['nombre']."</option>");
                                          }
                                       ?>
                                    </select>
                                 </div>
                              </div>
                                    <div class="form-group">
                                        <label class="col-lg-3 control-label" for="checkboxes">Status</label>
                                        <div class="col-lg-9">
                                            <label class="checkbox-inline">
                                                <input type="checkbox" name="status" id="inlineCheckbox1" value="1" >
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-lg-offset-3 col-lg-9">
                                            <button type="button" class="btn btn-default">Cancel</button>
                                            <button type="button" id="savemenus" class="btn btn-info">Guardar</button>
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
                  <div class="row">               
                     <div class="col-lg-10">
                        <div class="panel panel-default gradient">
                           <div class="panel panel-default gradient">
                              <div class="panel-heading">
                                 <h4>
                                    <span>Detalles Menu</span>
                                 </h4>
                              </div>
                              <div class="panel-body" >  
                                 <div class="col-lg-5">
                                    <div class="row">
                                       <div class="page-header center">
                                          <h4>QTip <small> tooltip plugin</small></h4>
                                       </div>
                                       <div class="input-group" >
                                          <input id="textaddmenu" type="text" class="form-control">
                                          <span class="input-group-btn">
                                             <button id="btn-add-adicionales" class="btn btn-default" type="button">
                                             <span class="icon16 icomoon-icon-plus-circle"></span>
                                          </button>
                                          </span>
                                       </div> 
                                       <div class="page-header center"></div>
                                       <div id="content-add-adicionales" ></div> 
                                    </div> 
                                 </div> 
                                 <div class="col-lg-1"></div>
                                 <div class="col-lg-5">
                                    <div class="row" >   
                                       <div class="page-header center">
                                          <h4>QTip <small> tooltip plugin</small></h4>
                                       </div>                                    
                                       <div class="col-lg-8">
                                             <div class="searchBox">
                                                <input type="text" id="box1Filter" class="searchField form-control" placeholder="filter ..."/>
                                                <button id="box1Clear" type="button" class="btn">
                                                   <span class="icon12  icomoon-icon-cancel-circle"></span>
                                                </button>
                                             </div>
                                             <select id="box1View" multiple="multiple" class="multiple nostyle form-control" style="height:300px;">
                                                <option value="1">Spain</option>
                                                <option value="2">Germany</option>
                                                <option value="3">Uruguay</option>
                                                <option value="4" selected="selected">Brazil</option>
                                                <option value="5" selected="selected">England</option>
                                                <option value="6" selected="selected">Portugal</option>
                                                <option value="7">Argentina</option>
                                                <option value="8">Italy</option>
                                                <option value="9">Croatia</option>
                                                <option value="10">Denmark</option>
                                                <option value="11">Russia</option>
                                                <option value="12">Greece</option>
                                                <option value="13">Chile</option>
                                                <option value="14">Côte d'Ivoire</option>
                                                <option value="15" selected="selected">France</option>
                                                <option value="16">Sweden</option>
                                                <option value="17">Switzerland</option>
                                                <option value="18">Republic of Ireland</option>
                                                <option value="19">Australia</option>
                                             </select>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>                         
                        </div>
                     </div>
                  </div>                                  
                </div>
                 
            </div><!-- End contentwrapper -->
   <script src="js/cont/addmenus.js" type="text/javascript" charset="utf-8" async defer></script>
