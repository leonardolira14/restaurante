<div class="container-fluid w-100 overflow-hidden height-100">
	<div class="row">
		<div class="col-12 bg-menu p-t-10 p-b-10 ">
			<span>Comando Express | Pagos</span>
		</div>
		<div class="col-3 overflow-hidden bg-menu height-100 cont-menu">
			<ul class="list-group">
			  <a href="<?= base_url('/inicio') ?>"><li class="list-group-item "><i class="fa fa-cutlery" aria-hidden="true"></i> Inicio</li></a>
			  <a href="<?= base_url('/sopas') ?>"> <li class="list-group-item "><i class="fa fa-glass" aria-hidden="true"></i> Sopas</li></a>
			  <a href="<?= base_url('/comidas') ?>"> <li class="list-group-item "><i class="fa fa-list-ol" aria-hidden="true"></i> Comidas</li></a>
			  <a href="<?= base_url('/bebidas/0') ?>"> <li class="list-group-item "><i class="fa fa-beer" aria-hidden="true"></i> Bebidas</li></a>
			  <a href="<?= base_url('/pagos') ?>"> <li class="list-group-item active"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Pagos</li></a>
			 <a href="<?= base_url('/nosotros') ?>">  <li class="list-group-item"><i class="fa fa-question-circle" aria-hidden="true"></i> Nosotros</li></a>
			</ul>
		</div>
		<div class="col-9 cont-principal ">
			<div class="container overflow-auto  position-absolute">
				<div class="row">
					<div class="col-12 text-center text-Lobster subtitulo-pricipal">
						Pagos
					</div>
					<div class="col-4">
						<div class="row">
							<div class="col-12 bg-success text-white ">Ventas Abiertas</div>
							<ul class="list-group col-12 lista_mesasocupadas">
							  
							</ul>
							<div class="col-12 m-t-30 text-center">
								<button class="btn btn-primary" onclick="abrir_cerraralertvnt()">Abrir Venta</button>
							</div>
						</div>
					</div>
					<div class="col-8">
						<div class="row">
							<div class="col-12 bg-success text-white">Detalles de Venta</div>
							<div class="col-12">
								<table class="table" id="tbdetalle_venta">
									<thead class="thead-dark">
										<tr >
											<th>Acciones</th>
											<th>Producto</th>
											<th class="text-right">Precio</th>
										</tr>
										
									</thead>
									<tbody class="table_body">
										
										<tr>
											<td></td>
											<td colspan="2" class="text-right">Total:</td>
											<td  class="text-right">$ 0.00</td>
										</tr>
									</tbody>
								</table>
							</div>
							<div class="col-12 m-t-30 text-right">
								<div class="btn-group" role="group" aria-label="Basic example">
								  <button type="button" id="" class="btn btn-secondary mr-3 ingresaventa">Ingresar Productos</button>
								  <button id='' type="button" class="btn btn-danger mr-3 elimarventa">Cancelar Venta</button>
								  <button onclick="cerrar_venta()"  type="button" class="cerrar_venta btn btn-success">Cerrar Venta</button>
								</div>
								
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="modal-cont d-none" id="window_venta" >
	<div class="col-5 modal-window">
		<div class="card">
			<div class="card-header bg-primary">
				Abrir Venta
			</div>
		  <div class="card-body container listmesas">
		    	<div class="row">
		    		<?
		    		foreach ($mesas as $mesa) {
		    			?>
						<div class="col-3 m-t-20">
			    			<div class="card" id="<?=$mesa['Numero']?>" onclick="abrir_venta(<?=$mesa["Numero"]?>)">
			    				<div class="card-body">
			    					<div class="mesa">
			    						<p>Mesa <?=$mesa["Numero"]?></p>
			    					</div>
			    				</div>
			    			</div>
			    		</div>
		    			<?
		    		}
		    		?>

		    		<div class="col-12 m-t-20">
		    			<small class="text-muted">Nota: Las mesas ocupadas son las que estan en color azul.</small>
		    		</div>
		    	</div>
		  </div>
		  <div class="card-footer text-muted text-right">
		  	<div class="btn-group " role="group" aria-label="Basic example">
			  <button onclick="abrir_cerraralertvnt()" type="button" class="btn btn-danger mr-3"><i class="fa fa-ban" aria-hidden="true"></i> Cerrar</button>
			  <button type="button" class="btn btn-success"><i class="fa fa-folder-open" aria-hidden="true"></i> Abrir</button>
			</div>
		  </div>
		</div>
	</div>
</div>
<div class="modal-cont d-none" id="window_cambio" >
	<div class="col-3 modal-window">
		<div class="card">
			<div class="card-header bg-primary">
				Pagar
			</div>
		  <div class="card-body container listmesas">
		    	
		    		
		    		   <div class="form-group">
						    <label for="exampleInputEmail1">Total</label>
						    <input type="numero" id="text_total"  readonly class="form-control"  placeholder="$ 0.00">
					  </div>
					  <div class="form-group">
						    <label for="exampleInputEmail1">Efectivo</label>
						    <input type="numero" id="text_fectivo" onkeyup="cambio()" class="form-control"  placeholder="$ 0.00">
					  </div>
					  <div class="form-group">
						    <label for="exampleInputEmail1">Cambio</label>
						    <input type="numero" id="text_cambio"  readonly class="form-control"  placeholder="$ 0.00">
					  </div>
		    		
		    	
		  </div>
		  <div class="card-footer text-muted text-right">
		  	<div class="btn-group " role="group" aria-label="Basic example">
			  <button onclick="abrir_cerraralertcamb()" type="button" class="btn btn-danger mr-3"><i class="fa fa-ban" aria-hidden="true"></i> Cerrar</button>
			  <button type="button" class="btn btn-success terminarventa"><i class="fa fa-folder-open" aria-hidden="true"></i> Cerrar Venta</button>
			</div>
		  </div>
		</div>
	</div>
</div>
<script>
	$(document).ready(()=>{
			ver_pedidos();
	})
	function ver_pedidos(){
		if(localStorage.ventas){
			var ventas=JSON.parse(localStorage.ventas);
			var cade='';
			ventas.forEach((venta)=>{
				$(".listmesas #"+venta.Mesa).addClass("active");
				cade+='<li id="'+venta.Mesa+'" onclick="ver_productos('+venta.Mesa+')" class="list-group-item">Mesa '+venta.Mesa+'</li>';
			})
			$(".lista_mesasocupadas").html(cade);
			cade="";
			total=0.00;
			cade+='<tr><td  colspan="2" class="text-right">Total:</td><td  class="text-right">$ '+total+'</td></tr>'
			$('#tbdetalle_venta tbody').html(cade);
		}
		
	}
	function abrir_cerraralertvnt(){
		var ventana = $("#window_venta");
		if (ventana.hasClass('d-none')){
			ventana.removeClass("d-none")
		}else{
			ventana.addClass("d-none")
		}
		
	}
	function abrir_venta(mesa){
		var fecha=new Date();
		var datos=[];
		if(localStorage.ventas){
			 datos=JSON.parse(localStorage.ventas);
		}
		datos.push({Mesa:mesa,Pedido:[],Fecha:fecha.getDate()+"/"+fecha.getMonth()+"/"+fecha.getFullYear()});
		localStorage.setItem("ventas",JSON.stringify(datos));
		ver_pedidos();
	}
	function cerrar_venta(total){
		$("#text_total").val(total);
		abrir_cerraralertcamb();
	}
	function abrir_cerraralertcamb(){
		var ventana = $("#window_cambio");
		if (ventana.hasClass('d-none')){
			ventana.removeClass("d-none")
		}else{
			ventana.addClass("d-none")
		}
		
	}
	function cambio(){
		var efectivo=$("#text_fectivo");
		var total=$("#text_total");
		var cambio=$("#text_cambio");
		cambio.val(parseFloat(parseFloat(efectivo.val())-parseFloat(total.val())).toFixed(2));
	}
	function ver_productos(mesa){
		$(".lista_mesasocupadas .list-group-item").removeClass('active')
		$(".lista_mesasocupadas #"+mesa).addClass("active");
		$('.ingresaventa').attr("id",mesa);
		$('.elimarventa').attr('id',mesa);
		$('.terminarventa ').attr('id',mesa);
		var ventas=JSON.parse(localStorage.ventas);
		var cade='';
		var productos=[];
		ventas.forEach((venta)=>{
			if(venta.Mesa===mesa){
				productos=venta.Pedido;
				return false;
			}
				
		})

		var total=0.00;
		if(productos!==''){
			productos.forEach((producto,index)=>{
				cade+='<tr><td class="text-center"><button onclick="elimarproducto('+index+','+mesa+')" class="btn btn-danger eliminarproducto"><i class="fa fa-trash" aria-hidden="true"></i> Eliminar</button></td><td>'+producto.Nombre+'</td><td class="text-right">$ '+producto.Precio+'</td></tr>';
				total=total+parseFloat(producto.Precio);
			})
		}
		
		cade+='<tr><td  colspan="2" class="text-right">Total:</td><td  class="text-right">$ '+total+'</td></tr>'
		$('#tbdetalle_venta tbody').html(cade);
		$(".cerrar_venta").attr("onclick","cerrar_venta('"+total+"')");
	}
	$('.ingresaventa').on( "click", function(){
			if($(this).attr("id")===""){
				alert("Selecciona una mesa para agregar productos");
			}else{
				if(localStorage.mesaseleccion){
					localStorage.removeItem('mesaseleccion');
					localStorage.setItem("mesaseleccion",$(this).attr('id'));
				}else{
					localStorage.setItem("mesaseleccion",$(this).attr('id'));
				}
				alert("La Mesa #"+$(this).attr("id")+" lista para ingresar productos");
			}
			
		})
	$(".elimarventa").on("click",function(){
			var numMesa=$(this).attr("id");
			var mesas=JSON.parse(localStorage.ventas);
			mesas.forEach((mesa,index)=>{
				if(mesa.Mesa===parseInt(numMesa)){
					
					 mesas.splice(index, 1 );
					 return false;
				}
			})
			
			localStorage.setItem("ventas",JSON.stringify(mesas));
			setTimeout(ver_pedidos(), 1000);

		})
	$("button.terminarventa").on("click",function(){
		var mesa=$(this).attr("id");
		var ventas=JSON.parse(localStorage.ventas);
		var cade='';
		var ventatotal=[];
		ventas.forEach((venta)=>{
			if(venta.Mesa===parseInt(mesa)){
				ventatotal=venta
				return false;
			}
				
		})
		ventatotal["Total"]=$("#text_total").val();
		ventatotal["Usuario"]=1;
		var datos={datos:ventatotal};
		help.senddata("https://agenciapegasus.com.mx/restaurante/admin/addventa/",datos,function(data){
			ventas.forEach((mesas,index)=>{
				if(mesas.Mesa===parseInt(mesa)){
					
					 ventas.splice(index, 1 );
					 return false;
				}
			})
			
			localStorage.setItem("ventas",JSON.stringify(ventas));
			abrir_cerraralertcamb();
			setTimeout(ver_pedidos(), 1000);
		});
	})
	function elimarproducto(index,mesa){
			var ventas=JSON.parse(localStorage.ventas);
			var cade='';
			var productos=[];
			var index_mesa;
			ventas.forEach((venta,i)=>{
				if(venta.Mesa===parseInt(mesa)){
					productos=venta.Pedido;
					index_mesa=i;
					return false;
				}
					
			})
			productos.splice(index,1);
			ventas[index_mesa].Pedido=productos;
			localStorage.setItem("ventas",JSON.stringify(ventas));
			setTimeout(ver_productos(mesa), 1000);
		}

	
</script>