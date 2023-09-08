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
				<li class="breadcrumb-item"><a href="javascript:void(0)">Add Team</a></li>
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
												{{-- <input type="checkbox" class="form-check-input" id="checkAll" required=""> --}}
												{{-- <label class="form-check-label" for="checkAll"></label> --}}
											</div>
										</th>
										<th><strong>ROLL NO.</strong></th>
										<th><strong>NAME</strong></th>
										<th><strong>DATE</strong></th>
										<th><strong>Status</strong></th>
										<th><strong>Teams</strong></th>
										<th><strong>Acttion</strong></th>
									</tr>
								</thead>
								@foreach ($collectionRecuperee as $collection)
								 @php $project = $collection->get('project'); @endphp
								 @php $teamprojects = $collection->get('teamprojects'); @endphp
								 @php $data_json = json_encode($teamprojects) @endphp
								<tbody>
									<tr>
										<td>
											<div class="form-check custom-checkbox checkbox-success check-lg me-3">
												{{-- <input type="checkbox" class="form-check-input" id="customCheckBox2" required=""> --}}
												{{-- <label class="form-check-label" for="customCheckBox2"></label> --}}
											</div>
										</td>
										<td><strong>{{ $project->id }}</strong></td>
										<td><div class="d-flex align-items-center"><span class="w-space-no">{{ $project->name }}</span></div></td>
										<td>{{ $project->date }}</td>
										<td><div class="d-flex align-items-center"><i class="fa fa-circle text-success me-1"></i> in process</div></td>
										<td>
                                            <button  type="button" class="btn btn-rounded btn-info" onclick="get_teams('@php echo htmlspecialchars($data_json, ENT_QUOTES, 'UTF-8'); @endphp','{{ $project->name }}')" data-bs-toggle="modal" data-bs-target=".bd-example-modal-lg"><span class="btn-icon-start text-info"><i class="fa fa-plus color-info"></i></span>View</button>
										</td>
										<td>
                                            <a href="/TeamProjectListNew?id={{ $project->id }}" ><button type="button" class="btn btn-rounded btn-success"><span class="btn-icon-start text-info"><i class="fa fa-plus color-info"></i></span>Add Team</button></a>
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

<!-- Large modal -->
<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				{{-- <h5 class="modal-title">Update Project</h5> --}}
				<button type="button" class="btn-close" data-bs-dismiss="modal">
				</button>
			</div>
			<div class="modal-body">
					<div class="card">
						<div class="card-header">
							<h4 class="card-title">Participants List</h4>
						</div>
						<div class="card-body">
							<div class="basic-list-group">
								<ul class="list-group">
									<li class="list-group-item active" id="projectname">Project Name</li>
									<li class='list-group-item'>tt</li>
									
								</ul>
							</div>
						</div>
					</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-danger light" data-bs-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>
<!-- Large modal -->


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
		function get_teams(data,projectname) {
			var datavalue = JSON.parse(data);
			// console.log(datavalue);
			
			const divbegin = "<li class='list-group-item'><img src='images/avatar/1.jpg' class='rounded-lg me-2' width='24'>";
			const divend = "<i class='fa fa-circle text-success me-1'></i>Able to work</li>";
			// Sélectionnez le div dans lequel vous souhaitez ajouter les éléments <p>
			var div = document.getElementById("votreDivId");
			var projectnametmp = document.getElementById("projectname");
	

			var paragraphsHTML = datavalue.map(function(item) {
            return divbegin + item.name +" "+ item.firstname + ", Email: " + item.email +divend;
        	});

			// Utilisez join pour concaténer les chaînes HTML en une seule chaîne
			var divContent = paragraphsHTML.join("");

			// Modifiez le contenu du div en remplaçant son innerHTML
			div.innerHTML = divContent;

			console.log(projectname);
			projectnametmp.innerHTML = projectname;
		}
	</script>

	
	
	{{-- ckeditor --}}
	<script src="vendor/ckeditor/ckeditor/ckeditor.js"></script>	
 @endsection
