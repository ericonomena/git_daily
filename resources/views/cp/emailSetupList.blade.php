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
				<form action="/searchproject" novalidate method="GET">
					<div class="card-body">
						<div class="row">
							<div class="col-sm-6">
								<label class="form-check-label">name project</label>
								<input type="text" class="form-control mb-3 mb-xl-0" name="namesearch" placeholder="Title">

								<label class="form-check-label">status</label>
								<select class="form-control default-select dashboard-select-2 h-auto wide" name="status">
									<option selected>Select Status</option>
									<option value="1">Published</option>
								</select> 
							</div>
							<div class="col-xl-3 col-sm-6">
								<label class="form-check-label">start date</label>
								<input type="date" class="form-control mb-3 mb-xl-0" name="startdate">

								<label class="form-check-label">finish date</label>
								<input type="date" class="form-control mb-3 mb-xl-0" name="finishdate">
							</div>
							<div class="col-xl-3 col-sm-6">
								<label class="form-check-label">Acttion</label>
								<br><button class="btn btn-primary" title="Click here to Search" type="submit"><i class="fa fa-search me-1"></i>Filter</button>
								<br><br><a href="/projectList"><button class="btn btn-danger light" title="Click here to remove filter" type="button">Remove</button></a>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
		<div class="mb-3">
			<ul class="d-flex align-items-center flex-wrap">
				{{-- <li><a href="/projectNew" class="btn btn-primary ">Add Project</a></li> --}}
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
						
						<table class="table table-responsive-sm mb-0">
								<thead>
									<tr>
										<th style="width:50px;">
											<div class="form-check custom-checkbox checkbox-success check-lg me-3">
											    <input type="checkbox" class="form-check-input" id="checkAll" required="">
												<label class="form-check-label" for="checkAll"></label> 
											</div>
										</th>
										{{-- <th><strong>ROLL NO.</strong></th> --}}
										<th><strong>NAME</strong></th>
										<th><strong>DATE</strong></th>
										<th><strong>Status</strong></th>
										<th><strong>Status</strong></th>
										<th><strong>Acttion</strong></th>
									</tr>
								</thead>
								@foreach ($projects as $project)
								<tbody>
									<tr>
										<td>
											<div class="form-check custom-checkbox checkbox-success check-lg me-3">
												<input type="checkbox" class="form-check-input" id="customCheckBox2" required="">
												<label class="form-check-label" for="customCheckBox2"></label>
											</div>
										</td>
										{{-- <td><strong>{{ $project->id }}</strong></td> --}}
										<td><div class="d-flex align-items-center"><span class="w-space-no">{{ $project->name }}</span></div></td>
										<td>{{ $project->date }}</td>
										<td><div class="d-flex align-items-center"><i class="fa fa-circle text-success me-1"></i> in process</div></td>
										<td><div class="d-flex align-items-center"><i class="fa fa-circle text-success me-1"></i> in process</div></td>
										<td>
											<div class="d-flex">
											 	@php $data_json = json_encode($project) @endphp 
												 <button  type="button" class="btn btn-rounded btn-secondary" onclick="get_delete('{{ $project->id }}')" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><span class="btn-icon-start text-secondary"><i class="fa fa-gear color-info"></i></span>Setup</button>
											</div>
										</td>
									</tr>	
								</tbody>
								@endforeach
								
							
						</table>
							
					</div>
					<div class="d-flex align-items-center justify-content-xl-between flex-wrap justify-content-center mt-3">
							<small class="mb-xl-0 mb-3"></small>
							<nav aria-label="Page navigation example">
							  <ul class="pagination mb-2 mb-sm-0">
								<li class="page-item">{{ $projects->links() }}</li>		
							  </ul>
							</nav>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


 <!-- Button trigger modal -->
 {{-- <button type="button" class="btn btn-primary mb-2" data-bs-toggle="modal" data-bs-target="#exampleModalCenter">Modal centered</button> --}}
 <!-- Modal -->
 <div class="modal fade" id="exampleModalCenter">
	 <div class="modal-dialog modal-dialog-centered" role="document">
		 <div class="modal-content">
			 <div class="modal-header">
				 <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
			 </div>
				<div class="modal-body">
					<div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Email Setup</h4>
                        </div>
                        <div class="card-body">
                            <div class="basic-list-group">
                                <form>
                                    <ul class="list-group text-center"> <!-- Ajoutez la classe text-center pour centrer horizontalement -->
                                        <li class="list-group-item active">Time Setup</li>
                                        @foreach ($timesetup as $time)
                                        <li class="list-group-item d-flex justify-content-center align-items-center">
                                            <input type="radio" class="form-check-input" name="optradio"> {{$time->number}} jours
                                        </li>
                                        @endforeach
                                    </ul>
                                </form>
                            </div>
                        </div>
                    </div>
				</div>
				<div class="modal-footer justify-content-center">
					<button type="button" class="btn btn-danger light" data-bs-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-primary">Confirm</button>
				</div>
		 </div>
	 </div>
 </div>
<!-- Button trigger modal -->

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

	<!-- Get DATA -->
    <script type="text/javascript">
		function get_id(data) {
			var datavalue = JSON.parse(data);
			console.log(datavalue);
			const propertyNames = Object.keys(datavalue).map((key) => { 
				var inputElem = document.getElementsByName(key)[0];
				if (inputElem) {
					var valeur = datavalue[key];
					inputElem.value = valeur;
					console.log(key)	
				}
				
			});		
		}
	</script>

	<script type="text/javascript">
		function get_delete(iddelete) {
			// data 
			console.log("data :"+iddelete);
			var input = document.getElementById('iddelete');
			input.value = iddelete;
		}
    </script>

	{{-- ckeditor --}}
	<script src="vendor/ckeditor/ckeditor/ckeditor.js"></script>	
 @endsection
