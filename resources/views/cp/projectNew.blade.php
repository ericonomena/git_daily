@extends('root_user')
@section('root-content')


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
	 <link rel="stylesheet" href="vendor/nouislider/nouislider.min.css">
	 <!-- Style css -->
	  <link href="css/style.css" rel="stylesheet">
	 
{{-- ROW --}}

<!--**********************************
            Content body start
        ***********************************-->
				<!-- Row -->
				<div class="row">
					<div class="col-xl-12">
						 <div class="page-titles">
							<ol class="breadcrumb">
								{{-- <li class="breadcrumb-item"><a href="javascript:void(0)">CMS</a></li> --}}
								<li class="breadcrumb-item active"><a href="javascript:void(0)">Project</a></li>
							</ol>
						</div>
						<div class="row">
							<div class="">
								<div class="filter cm-content-box box-primary">
									<div class="content-title">
										<div class="cpa">
											Add New Project
										</div>
										<div class="tools">
											<a href="javascript:void(0);" class="expand SlideToolHeader"><i class="fal fa-angle-down"></i></a>
										</div>
									</div>
									<div class="cm-content-body  form excerpt">
										<div class="card-body">
											<form action="/project/insert" method="post">
												@csrf
												<div class="mb-3">
												<label  class="form-label">Name Project</label>
												<input type="text" class="form-control" placeholder="Name" name="name">
												</div>
												<div class="mb-3">
													<label  class="form-label">Date</label>
													<input type="date" class="form-control" name="date" >
												</div>
												<div class="mb-3">
												<label for="exampleFormControlTextarea1" class="form-label">Description</label>
												<textarea id="ckeditor" class="ckeditor form-control" id="exampleFormControlTextarea1" rows="8" name="descriptions"></textarea>
												</div>
												<div style="color: red">{{ $error }}</div>
												<div>
													<a href="/projectList" class="expand SlideToolHeader"><button type="button" class="btn btn-danger light">Cancel</button></a>
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
			
        <!--**********************************
            Content body end
        ***********************************-->


{{-- END ROW --}}


  <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
	<script src="vendor/global/global.min.js"></script>
	<script src="vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
	<script src="vendor/jquery-nice-select/js/jquery.nice-select.min.js"></script>
	<script src="js/dashboard/cms.js"></script>
    <script src="vendor/chart-js/chart.bundle.min.js"></script>
<!-- Apex Chart -->
	<script src="vendor/apexchart/apexchart.js"></script>
    <script src="js/custom.min.js"></script>
	<script src="js/dlabnav-init.js"></script>
	<script src="js/demo.js"></script>
   <script src="js/styleSwitcher.js"></script>
   {{-- ckeditor --}}
	<script src="vendor/ckeditor/ckeditor/ckeditor.js"></script>

 @endsection