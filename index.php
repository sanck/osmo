<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>OSMO</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>


	<link rel="shortcut icon" type="image/png" href="/media/images/favicon.png">
		<link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
		<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.1/css/responsive.dataTables.min.css">
		<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
		<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script> 
		<script src="https://cdn.datatables.net/responsive/2.2.1/js/dataTables.responsive.min.js"></script>

	<style type="text/css">
		#example thead th, #example tbody tr{
			font-size: 14px;
			font-family: Helvetica;
			font-weight: normal;
		}
		/* .azul{
			color: #69D2E7;
		}
		.azul_l{
			color: #A7DBD8;
		}
		.verde_l{
			color: #E0E4CC;
		}
		.naranja_l{
			color: #F38630;
		}
		.naranja{
			color: #FA6900;
		}
		.bg_none{
			background: transparent;
		}
		.title_osmo{
			font-size: 80px;
		} */
	</style>
	<script type="text/javascript">

		var dataSet = [
			{name:"Daniel", c:"Coolant", d:"Farruko", e:"Coolant", f:"2019-01-14", g:"3:31"},
			{name:"Daniel", c:"Coolant", d:"Farruko", e:"Coolant", f:"2019-01-14", g:"3:31"},
			{name:"Daniel", c:"Coolant", d:"Farruko", e:"Coolant", f:"2019-01-14", g:"3:31"},
			{name:"Daniel", c:"Coolant", d:"Farruko", e:"Coolant", f:"2019-01-14", g:"3:31"},
			{name:"Daniel", c:"Coolant", d:"Farruko", e:"Coolant", f:"2019-01-14", g:"3:31"},
			{name:"Daniel", c:"Coolant", d:"Farruko", e:"Coolant", f:"2019-01-14", g:"3:31"},
			{name:"Daniel", c:"Coolant", d:"Farruko", e:"Coolant", f:"2019-01-14", g:"3:31"},
			{name:"Daniel", c:"Coolant", d:"Farruko", e:"Coolant", f:"2019-01-14", g:"3:31"}
		];
		var myTable = $('#example').DataTable();
 
			
		$(document).ready(function() {
		    //$('#example').DataTable();
		    $('#example').DataTable( {
		        "language": {
		            "url": "//cdn.datatables.net/plug-ins/1.10.20/i18n/Spanish.json"
		        }, 
                "columns":[
                	{"data": "c", title:"TÍTULO"},
                	{"data": "d", title:"ARTISTA"},
                	{"data": "e", title:"ÁLBUM"},
                	{"data": "f", title:"FECHA"},
                	{"data": "g", title:"HORA"}
                ],
                //"ajax": 'ajax/data/arrays.txt'
				data: dataSet,
				rowId: 'name',
				responsive: true,
				"dom": '<"top"f>rt<"bottom"p><"clear">',
				columnDefs: [
					{
						targets: 3,
						className: 'dt-body-right'
					},
					{
						targets: 4,
						className: 'dt-body-right'
					}
					/*{ targets: [0, 1], visible: true},
					{ targets: '_all', visible: false }*/
					/*
					{
					"targets": 3,
					"searchable": false
					}
					*/
				],
				/*
					"paging":   false,
					"ordering": false,
					"info":     false
				*/
				/*"dom": '<"top"i>rt<"bottom"flp><"clear">'*/
				/*
				$("div.toolbar").html('<b>Custom tool bar! Text/images etc.</b>');
				*/
		    } ); 
			var table = $('#example').DataTable();
			$('#example tbody').on('click', 'tr', function () {

				var id = table.row(this).id();
				alert('ID: '+id);

				/*var data = table.row( this ).data();
				alert( 'You clicked on '+data[0]+'\'s row' );*/
			} );
			
		} );
	</script>

</head>
<body>


    

	<!--nav class="navbar navbar-expand-md bg-light navbar-light">
	  <a class="navbar-brand azul" href="#">
	  	<img src="assets/img/osmo_logo.png" class="rounded"  width="70" height="30"> 
	  </a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
	    <span class="navbar-toggler-icon"></span>
	  </button>
	  <div class="collapse navbar-collapse" id="collapsibleNavbar">
	    <ul class="navbar-nav">
	      <li class="nav-item">
	        <a class="nav-link" href="#">precios</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="#">nosotros</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="#">contacto</a>
	      </li>
	    </ul>
	  </div>
	</nav-->

	<div class="jumbotron text-center bg_none" style="margin-top:80px">
		<h1 class="azul title_osmo"><b>OSMO CLEAR WATER</b></h1>
		<p class="naranja_l">Analisis microbiologicos</p> 
	</div>

	<div class="container" >
		<div class="row">

			<div class="col-sm-9">
			
				<table id="example" class="hover row-border" style="width:100%">
				</table>
			
			</div>

			<div class="col-sm-4">
				<h3 class="naranja">Garantizamos lo que consumes</h3>
				<p>Realizamos analisis microbiologicos mes a mes</p>
				<p>Sus problemas son nuestros problemas, nosotros nos hacemos cargo!</p>
			</div>
			<div class="col-sm-4">
				<h3 class="naranja">Tu seguridad es primero</h3>
				<p>Somos una empresa que pone la tranquilidad del cliente ante todo</p>
				<p>Contamos con el equipo mas rápido y limpio del mercado</p>
			</div>
			<div class="col-sm-4">
				<h3 class="naranja">La mejor purificación</h3>        
				<p>Nuestra agua esta en el top 1 de purificación</p>
				<p>Muchas plantas de agua confia en OSMO, somos la mejor opción!</p>
			</div>
			<div class="col-sm-12">
				<br>
				<center class="naranja"><b>Toda la planta que esta asociado a nosotros cuenta con una etiqueta OSMO junto a un certificado de calidad que es renovado periodicamente.</b></center>
			</div>
		</div>
	</div>
</body>
</html>