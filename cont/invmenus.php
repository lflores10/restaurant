
			<div class="contentwrapper"><!--Content wrapper-->

				<div class="heading">

					<h3>Menus</h3>                    

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
						<li class="active">Menus</li>
					</ul>

				</div><!-- End .heading-->

				<!-- Build page from here: -->
				
				<div class="row">
					<div class="col-lg-12">
						   <div class="panel panel-default gradient">
								<div class="panel-heading">
									<h4>
										<span>Menus Disponibles</span>
											<span class="right addregister">
												<button name="addmenu" class="btn btn-success btn-xs"><span class=" icomoon-icon-panel-add"></span>Agregar Registro</button>
											</span>
									</h4>
								</div>
								<div class="panel-body noPad clearfix" >
									<table cellpadding="0" cellspacing="0" border="0" class="dynamicTable display table table-bordered" width="100%" style="margin-top: 10px;">
										<thead>
											<tr>
												<th>Menus</th>
												<th>Descripcion</th>
												<th>Categoria</th>
												<th>Status</th>
												<th></th>
											</tr>
										</thead>
										<tbody></tbody>
									</table>
								</div>
							</div>

					</div><!-- End .span8 -->

				</div><!-- End .row -->
				 
			</div><!-- End contentwrapper -->

	 <script type="text/javascript">
		var dt; 
		var catg = ''

		$(document).ready(function() {

		 
		 <? if ($nt) {  ?>
			setTimeout(function(){ 
			   $.pnotify({
			   type: 'success',
			   title: 'Registro',
			   text: 'Registro Agregado!',
			   icon: 'picon icon16 iconic-icon-check-alt white',
			   opacity: 0.95,
			   history: false,
			   sticker: false
			}); }, 500);
		 <?}?>
		 $('button[name="addmenu"]').on('click', function(event) {
			// $(this).prop('disabled', true); // Prevenir Doble Click
			window.location.href = "./?p=addmenus";
			
		 });
 
		 dt = $('.dynamicTable').dataTable({
			ajax: 'main/exec.php?action=get_menus',
			responsive: true,
			columns: [
					{"data": "nombre_menu"},
					{"data": "descripcion_menu"},
					{"data": "categoria_menu",
						render: function (data, type, row) {
						   return data
						} },
					{"data": "status" ,
						"render": function (data, type, row) {
						   if (data == 0) {
							  data = 'Activo'
						   } else {
							  data = 'Inactivo'                              
						   }
						   return data
						} 
					},
					{"data": "codigo_menu" ,
						"render": function (data, type, row) {
							return 'Detalles'
						} 
					}
				],
				language: {"url": "js/Spanish.json"}
			})
		});

	</script>