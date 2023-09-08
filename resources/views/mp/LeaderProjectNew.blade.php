@extends('root_user')
@section('root-content')

<head>

    <!-- All Meta -->
     <meta charset="utf-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="author" content="DexignLab">
     <meta name="robots" content="">
     <meta name="keywords" content="bootstrap admin, card, clean, credit card, dashboard template, elegant, invoice, modern, money, transaction, Transfer money, user interface, wallet">
     <meta name="description" content="Dompet is a clean-coded, responsive HTML template that can be easily customised to fit the needs of various credit card and invoice, modern, creative, Transfer money, and other businesses.">
     <meta property="og:title" content="Dompet - Payment Admin Dashboard Bootstrap Template">
     <meta property="og:description" content="Dompet is a clean-coded, responsive HTML template that can be easily customised to fit the needs of various credit card and invoice, modern, creative, Transfer money, and other businesses.">
     <meta property="og:image" content="social-image.png">
     <meta name="format-detection" content="telephone=no">
 
     <!-- Mobile Specific -->
     <meta name="viewport" content="width=device-width, initial-scale=1">
 
     <!-- favicon -->
     <link rel="shortcut icon" type="image/png" href="images/favicon.png">
 
     <!-- Page Title Here -->
     <title>Dompet - Payment Admin Dashboard Bootstrap Template</title>
     
     
     
     <link href="vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
     <link href="vendor/jquery-nice-select/css/nice-select.css" rel="stylesheet">
     <link href="vendor/bootstrap-datepicker-master/css/bootstrap-datepicker.min.css" rel="stylesheet">
     
     <!-- Style css -->
      <link href="css/style.css" rel="stylesheet">
     
 </head>



{{-- ROW --}}

<div class="row">
	<div class="col-xl-12">
		<div class="row page-titles">
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="javascript:void(0)">Project list</a></li>
			</ol>
		</div>
		<div class="filter cm-content-box box-primary">
			<div class="content-title">
				<div class="cpa">
				<i class="fa-solid fa-filter me-2"></i>Filter    	
				</div>
				<div class="tools">
					<a href="javascript:void(0);" class="expand SlideToolHeader"><i class="fal fa-angle-down"></i></a>
				</div>
			</div>
			<div class="cm-content-body form excerpt">
				<div class="card-body">
					<form action="/searchsimpleuser" novalidate method="GET">
						@csrf
						<div class="row">
							<div class="col-sm-6">
								<input type="text" class="form-control mb-3 mb-xl-0" name="search_term" placeholder="....search">
							</div>
							<div class="col-xl-3 col-sm-6">
								<select name="status" class="form-control default-select dashboard-select-2 h-auto wide">
									<option selected>Select Status</option>
									<option value="1">Published</option>
								</select> 
							</div>
							<div class="col-xl-3 col-sm-6">
								<button class="btn btn-primary" title="Click here to Search" type="submit"><i class="fa fa-search me-1"></i>Filter</button>
								<a href="/LeaderProjectNew"><button class="btn btn-danger light" title="Click here to remove filter" type="button">Remove</button></a>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
		<div class="mb-3">
			<ul class="d-flex align-items-center flex-wrap">
				{{-- <li><a href="/LeaderProjectNew" class="btn btn-primary ">Add Project</a></li> --}}
				{{-- <li><a href="blog-category.html" class="btn btn-primary mx-1">Blog Category</a></li>
				<li><a href="blog-category.html" class="btn btn-primary mt-sm-0 mt-1">Add Blog Category</a></li> --}}
			</ul>
		</div>
		<div class="filter cm-content-box box-primary">
			<div class="content-title">
				<div class="cpa">
					<i class="fa-solid fa-file-lines me-1"></i>Blogs List
				</div>
				<div class="tools">
					<a href="javascript:void(0);" class="expand SlideToolHeader"><i class="fal fa-angle-down"></i></a>
				</div>
			</div>
			<div class="cm-content-body form excerpt">
				<div class="card-body">
					<div class="table-responsive">
						
						<table class="table table-responsive-md">
							<thead>
								<tr>
									<th style="width:50px;">
										<div class="form-check custom-checkbox checkbox-success check-lg me-3">
											<input type="checkbox" class="form-check-input" id="checkAll" required="">
											<label class="form-check-label" for="checkAll"></label>
										</div>
									</th>
									<th><strong>ROLL NO.</strong></th>
									<th><strong>NAME</strong></th>
									<th><strong>FIRSTNAME</strong></th>
									<th><strong>Email</strong></th>
									<th><strong>Status</strong></th>
									<th class="text-end"><strong>Acttion</strong></th>
								</tr>
							</thead>
							<form id="ajoutEvenementForm" novalidate >
								@csrf
									@foreach ($simpleUsers as $simpleUser)
									<tbody>
										<tr>
											<td>
												<div class="form-check custom-checkbox checkbox-success check-lg me-3">
													<input type="checkbox" class="form-check-input customCheckBox"  value="{{ $simpleUser->iduser }}" required="">
													<label class="form-check-label" for="customCheckBox2"></label>
												</div>
											</td>
											<td><strong>{{ $simpleUser->iduser }}</strong></td>
											<td><div class="d-flex align-items-center"><img src="images/avatar/1.jpg" class="rounded-lg me-2" width="24" alt=""> <span class="w-space-no">{{ $simpleUser->name }}</span></div></td>
											<td>{{ $simpleUser->firstname }}</td>
											<td>{{ $simpleUser->email }} </td>
											<td><div class="d-flex align-items-center"><i class="fa fa-circle text-success me-1"></i> Able to work</div></td>
											<td class="text-end">
												<div class="d-flex justify-content-end">
													<a href="#" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
													<a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
												</div>
											</td>
										</tr>	
									</tbody>
									@endforeach
							</form>
							
						</table>
						
					</div>
					<div class="d-flex align-items-center justify-content-xl-between flex-wrap justify-content-center mt-3">
						<small class="mb-xl-0 mb-3"></small>
						<nav aria-label="Page navigation example">
						  <ul class="pagination mb-2 mb-sm-0">
							<li class="page-item">{{ $simpleUsers->links() }}</li>
						  </ul>
						</nav>
					</div>

					 <!-- Button trigger modal -->
					 <button type="button" class="btn btn-primary mb-2"  onclick="get_id()" data-bs-toggle="modal" data-bs-target="#exampleModalCenter">Validate</button>
					 <!-- Modal -->
					 <div class="modal fade" id="exampleModalCenter">
						 <div class="modal-dialog modal-dialog-centered" role="document">
							 <div class="modal-content">
								 <div class="modal-header">
									 <h5 class="modal-title"></h5>
									 <button type="button" class="btn-close" data-bs-dismiss="modal">
									 </button>
								 </div>
								 <form action="/LeaderProject/insert" method="post">
									@csrf
									<div class="modal-body text-center">
										<input type="hidden" class="form-control" id="idvalidate" name="idvalidate">
										<h3>Do you really want to confirm?</h3>
									</div>
									<div class="modal-footer justify-content-center">
										<button type="button" class="btn btn-danger light" data-bs-dismiss="modal">Close</button>
										<button type="submit" class="btn btn-primary">Save</button>
									</div>
								</form>
							 </div>
						 </div>
					 </div>
					 
				</div>
			</div>
		</div>
	</div>
</div>


{{-- END ROW --}}


    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="vendor/global/global.min.js"></script>
	<script src="vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
	<script src="vendor/jquery-nice-select/js/jquery.nice-select.min.js"></script>
	<script src="js/dashboard/cms.js"></script>
		<script src="vendor/bootstrap-datepicker-master/js/bootstrap-datepicker.min.js"></script>
   
    <script src="js/custom.min.js"></script>
	<script src="js/dlabnav-init.js"></script>
	<script src="js/demo.js"></script>
   <script src="js/styleSwitcher.js"></script>
	<script>
		$(function () {
			  $("#datepicker").datepicker({ 
					autoclose: true, 
					todayHighlight: true
			  }).datepicker('update', new Date());
		
		});

	</script>

<script>
	  
	function get_id() {

		// var checkbox = document.getElementById('customCheckBox2');

				// Récupérer toutes les cases à cocher avec la classe commune
		var checkboxes = document.querySelectorAll('.customCheckBox');

		// Tableau pour stocker les valeurs des cases à cocher cochées
		var valeursCochées = [];

		// Parcourir les cases à cocher
		checkboxes.forEach(function(checkbox) {
			if (checkbox.checked) {
				// Si la case est cochée, ajouter sa valeur au tableau
				valeursCochées.push(checkbox.value);
			}
		});

		// Afficher les valeurs des cases à cocher cochées dans la console
		console.log('Valeurs des cases à cocher cochées :', valeursCochées);

		var input = document.getElementById('idvalidate');
		input.value = valeursCochées;
				
	}
	 
  </script>

 @endsection