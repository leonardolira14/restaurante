
<div class=" overflow-hidden bg-menu height-100 cont-menu">
	<div class="row">
		<div class="col-12 p-t-20 text-right p-r-40" onclick="help.menu_close()">
					<h4 class="text-white">
						<i class="fa fa-times" aria-hidden="true"></i>
					</h4>
		</div>
	</div>
			<ul class="list-group">
			  <a href="<?= base_url('/inicio') ?>"><li class="list-group-item "><i class="fa fa-cutlery" aria-hidden="true"></i> Inicio</li></a>
			  <a href="<?= base_url('/sopas') ?>"> <li class="list-group-item active"><i class="fa fa-glass" aria-hidden="true"></i> Sopas</li></a>
			  <a href="<?= base_url('/comidas') ?>"> <li class="list-group-item  "><i class="fa fa-list-ol" aria-hidden="true"></i> Comidas</li></a>
			  <a href="<?= base_url('/bebidas/0') ?>"> <li class="list-group-item "><i class="fa fa-beer" aria-hidden="true"></i> Bebidas</li></a>
			  <a href="<?= base_url('/pagos') ?>"> <li class="list-group-item"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Pagos</li></a>
			 <a href="<?= base_url('/nosotros') ?>">  <li class="list-group-item"><i class="fa fa-question-circle" aria-hidden="true"></i> Nosotros</li></a>
			</ul>
			<div class="row m-t-50">
				<div class="col-4 text-center ">
					<h4 class="text-white"><i class="fa fa-facebook" aria-hidden="true"></i></h4>	
				</div>
				<div class="col-4 text-center ">
					<h4  class="text-white"><i class="fa fa-instagram" aria-hidden="true"></i></h4>	
				</div>
				<div class="col-4 text-center ">
					<h4  class="text-white"><i class="fa fa-twitter" aria-hidden="true"></i></h4>	
				</div>
			</div>
		</div>

<div class="container-fluid ">
	<div class="row">
		<div class="col-12 bg-menu p-t-10 p-b-10 ">
			<div class="row">
				<div class="col-1" onclick="help.menu_close()">
					<h4 class="text-white">
						<i class="fa fa-bars" aria-hidden="true"></i>
					</h4>
				</div>
				<div class="col-11">
					<span>Comanda Express | Sopas</span>
				</div>
			</div>
		</div>
		
			<div class="container-fluid">
				<div class="row">

					<div class="col-12 text-center text-Lobster subtitulo-pricipal">
						Sopas del Día
					</div>
					<?
					foreach ($sopas as $platos) {
						?>
						<div class="col-12  col-md-3 col-xl-3 col-lg-3 m-t-20">
						<div class="card">
							<img src="<?= base_url('assets/img/').$platos["Imagen"] ?>" class="card-img-top" >
							<div class="card-body text-center">
							    <h5 class="card-title"><?=$platos["Nombre"]?></h5>
							    <p class="card-text"><?=$platos["Descripcion"]?></p>
							    <p ><h4 class="text-Lobster text-orange text-center ">$ <?= round($platos["Costo"],2)?></h4></p>
							   <button llcid="<?=$platos['IDMenu'] ?>" llcprecio='<?=$platos["Costo"] ?>' llcnombre='<?=$platos["Nombre"] ?>' class="agregar btn btn-primary text-center ">Agregar a Pedido</button>
							</div>
						</div>
					</div>
						<?
					}
					?>
					
				</div>
			</div>
	</div>
</div>
<script>
	$('.agregar').on('click',function(){
		if(localStorage.mesaseleccion){
			var productos=[];
			var mesas=JSON.parse(localStorage.ventas);
			mesas.forEach((mesa)=>{
				if(mesa.Mesa===parseInt(localStorage.mesaseleccion)){
					productos=mesa.Pedido;
					return false;
				}
			})
			var datos={ID:$(this).attr('llcid'),Precio:$(this).attr('llcprecio'),Nombre:$(this).attr('llcnombre')}
			productos.push(datos);
			mesas.forEach((mesa)=>{
				
				if(mesa.Mesa===parseInt(localStorage.mesaseleccion)){
					mesa.Pedido=productos;
					console.log(mesa);
					return false;
				}
			})
			localStorage.setItem("ventas",JSON.stringify(mesas));
			alert("producto agregado");
		}else{
			alert("No hay mesa seleccionada");
		}
		console.log($(this).attr('llcprecio'))
	})
	
</script>