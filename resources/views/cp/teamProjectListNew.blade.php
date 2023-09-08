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
	
	
	
	<link href="vendor/jquery-nice-select/css/nice-select.css" rel="stylesheet">
     <link href="css/style.css" rel="stylesheet">

	
     
 </head>



{{-- ROW --}}

 <!--**********************************
            Content body start
        ***********************************-->
				<div class="row page-titles">
					<ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Add Team to : {{ $project->name }}</a></li>
                    </ol>
                </div>
                <div class="row">
                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Not in the project</h4>
                            </div>
                            <div class="card-body">
                                <!-- Nav tabs -->
                                <form action="/searchleaderproject" novalidate method="GET">
                                    @csrf
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control mb-3 mb-xl-0" name="search_term" placeholder="....search">
                                        </div>
                                        
                                        <div class="col-sm-6">
                                            <button class="btn btn-primary" title="Click here to Search" type="submit"><i class="fa fa-search me-1"></i>Filter</button>
                                            <a href="#"><button class="btn btn-danger light" title="Click here to remove filter" type="button">Remove</button></a>
                                        </div>
                                    </div>
                                </form>
                                {{-- table --}}
                                <br />
                                <div class="table-responsive">
						
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th style="width:50px;">
                                                    <div class="form-check custom-checkbox checkbox-success check-lg me-3">
                                                        <input type="checkbox" class="form-check-input"  id="checkAll1" required="">
                                                        <label class="form-check-label" for="checkAll"></label>
                                                    </div>
                                                </th>
                                                <th><strong>NAME</strong></th>
                                                <th><strong>Acttion</strong></th>
                                            </tr>
                                        </thead>
                                        <form id="ajoutEvenementForm" novalidate >
                                            @csrf
                                                @foreach ($simpleUsers as $simpleUser)
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <div class="form-check custom-checkbox checkbox-success check-lg me-3">
                                                                <input type="checkbox" data-table="1" class="form-check-input customCheckBox1"  value="{{ $simpleUser->id }}" required="">
                                                                <label class="form-check-label" for="customCheckBox2"></label>
                                                            </div>
                                                        </td>
                                                        <td><div class="d-flex align-items-center"><img src="images/avatar/1.jpg" class="rounded-lg me-2" width="24" alt=""> <span class="w-space-no">{{ $simpleUser->name }} {{ $simpleUser->firstname }}</span></div></td>
                                                        <td>
                                                            <a href="/TeamProject/insertOne?id={{ $simpleUser->id }}&&idproject={{ $project->id }}" class="btn btn-success shadow btn-xs sharp"><i class="fa fa-plus color-info"></i></a>
                                                        </td>
                                                    </tr>	
                                                </tbody>
                                                @endforeach
                                        </form>
                                        
                                    </table>
                                    <a href="#"><button type="button" class="btn btn-rounded btn-success">Add</button></a>
                                </div>
                                <div class="d-flex align-items-center justify-content-xl-between flex-wrap justify-content-center mt-3">
                                    <small class="mb-xl-0 mb-3"></small>
                                    <nav aria-label="Page navigation example">
                                      <ul class="pagination mb-2 mb-sm-0">
                                        <li class="page-item">{{ $simpleUsers->appends(['id' => ($project->id)])->links() }}</li>

                                      </ul>
                                    </nav>
                                </div>
                                {{--  --}}

                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">In the project</h4>
                            </div>
                            <div class="card-body">
                                <!-- Nav tabs -->
                                <form action="/searchleaderproject" novalidate method="GET">
                                    @csrf
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control mb-3 mb-xl-0" name="search_term" placeholder="....search">
                                        </div>
                                        
                                        <div class="col-sm-6">
                                            <button class="btn btn-primary" title="Click here to Search" type="submit"><i class="fa fa-search me-1"></i>Filter</button>
                                            <a href="/LeaderProjectList"><button class="btn btn-danger light" title="Click here to remove filter" type="button">Remove</button></a>
                                        </div>
                                    </div>
                                </form>
                                {{-- table --}}
                                <br />

                                <div class="table-responsive">
                                    <table class="table ">
                                        <thead>
                                            <tr>
                                                <th style="width:50px;">
                                                    <div class="form-check custom-checkbox checkbox-danger check-lg me-3">
                                                        <input type="checkbox" class="form-check-input" id="checkAll2" required="">
                                                        <label class="form-check-label" for="checkAll"></label>
                                                    </div>
                                                </th>
                                                <th><strong>NAME</strong></th>
                                                <th><strong>Acttion</strong></th>
                                            </tr>
                                        </thead>
                                        <form id="ajoutEvenementForm" novalidate >
                                            @csrf
                                                @foreach ($teamprojects as $teamproject)
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <div class="form-check custom-checkbox checkbox-danger check-lg me-3">
                                                                <input type="checkbox" data-table="2" class="form-check-input customCheckBox"  value="{{ $teamproject->iduser }}" required="">
                                                                <label class="form-check-label" for="customCheckBox2"></label>
                                                            </div>
                                                        </td>
                                                        <td><div class="d-flex align-items-center"><img src="images/avatar/1.jpg" class="rounded-lg me-2" width="24" alt=""> <span class="w-space-no">{{ $teamproject->name }} {{ $teamproject->firstname }}</span></div></td>
                                                        <td>
                                                            <a href="/TeamProject/deleteOne?id={{ $teamproject->id }}&&idproject={{ $project->id }}" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-minus color-info"></i></a>
                                                        </td>
                                                    </tr>	
                                                </tbody>
                                                @endforeach
                                        </form>
                                        
                                    </table> 
                                    <a href="#"><button class="btn btn-danger light" title="Click here to remove filter" type="button">Remove</button></a>
                                </div>
                                <div class="d-flex align-items-center justify-content-xl-between flex-wrap justify-content-center mt-3">
                                    <small class="mb-xl-0 mb-3"></small>
                                    <nav aria-label="Page navigation example">
                                      <ul class="pagination mb-2 mb-sm-0">
                                        <li class="page-item">{{ $teamprojects->appends(['id' => ($project->id)])->links() }}</li>
                                      </ul>
                                    </nav>
                                </div>

                            </div>
                        </div>
                    </div>
                  
                </div>
                <div class="row page-titles">
					<a href="/TeamProjectList"><button class="btn btn-danger light" title="Click here to remove filter" type="button">Cancel</button></a>
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
	<script src="vendor/jquery-nice-select/js/jquery.nice-select.min.js"></script>
	  <script src="js/custom.min.js"></script>
	<script src="js/dlabnav-init.js"></script>
	<script src="js/demo.js"></script>
   <script src="js/styleSwitcher.js"></script>

   <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function () {
        // Gestion du "Check All" de la deuxième table
        $("#checkAll2").change(function () {
            var isChecked = $(this).prop("checked");
            // Ciblez les cases à cocher de la deuxième table en utilisant l'attribut data-table="2"
            $("[data-table='2']").prop("checked", isChecked);
        });
    });
</script>
<script>
    $(document).ready(function () {
        // Gestion du "Check All" de la deuxième table
        $("#checkAll1").change(function () {
            var isChecked = $(this).prop("checked");
            // Ciblez les cases à cocher de la deuxième table en utilisant l'attribut data-table="2"
            $("[data-table='1']").prop("checked", isChecked);
        });
    });
</script>
  
 @endsection
