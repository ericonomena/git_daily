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
	 <link href="vendor/dropzone/dist/dropzone.css" rel="stylesheet">
	  <link href="css/style.css" rel="stylesheet">
 
 </head>
 

 <!--**********************************
            Content body start
        ***********************************-->	
				<div class="row page-titles">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="javascript:void(0)">Email</a></li>
						<li class="breadcrumb-item active"><a href="javascript:void(0)">Compose</a></li>
					</ol>
                </div>
				
                <!-- row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="email-left-box px-0 mb-3">
                                    <div class="p-0">
                                        <a href="email-compose.html" class="btn btn-primary btn-block">Compose</a>
                                    </div>
                                    <div class="mail-list rounded mt-4">
                                        <a href="email-inbox.html" class="list-group-item active"><i
                                                class="fa fa-inbox font-18 align-middle me-2"></i> Inbox <span
                                                class="badge badge-secondary badge-sm float-end">198</span> </a>
                                        <a href="javascript:void()" class="list-group-item"><i
                                                class="fa fa-paper-plane font-18 align-middle me-2"></i>Sent</a> <a href="javascript:void()" class="list-group-item"><i
                                                class="fas fa-star font-18 align-middle me-2"></i>Important <span
                                                class="badge badge-danger text-white badge-sm float-end">47</span>
                                        </a>
                                        <a href="javascript:void()" class="list-group-item"><i
                                                class="mdi mdi-file-document-box font-18 align-middle me-2"></i>Draft</a><a href="javascript:void()" class="list-group-item"><i
                                                class="fa fa-trash font-18 align-middle me-2"></i>Trash</a>
                                    </div>
                                    <div class="mail-list rounded overflow-hidden mt-4">
										<div class="intro-title d-flex justify-content-between my-0">
											<h5>Categories</h5>
											<i class="fa fa-chevron-down"></i>
										</div>
                                        <a href="email-inbox.html" class="list-group-item"><span class="icon-warning"><i
                                                    class="fa fa-circle"></i></span>
                                            Work </a>
                                        <a href="email-inbox.html" class="list-group-item"><span class="icon-primary"><i
                                                    class="fa fa-circle"></i></span>
                                            Private </a>
                                        <a href="email-inbox.html" class="list-group-item"><span class="icon-success"><i
                                                    class="fa fa-circle"></i></span>
                                            Support </a>
                                        <a href="email-inbox.html" class="list-group-item"><span class="icon-dpink"><i
                                                    class="fa fa-circle"></i></span>
                                            Social </a>
                                    </div>
                                </div>
                                <div class="email-right-box ms-0 ms-sm-4 ms-sm-0">
                                    <div class="compose-content">
                                        <form action="#">
                                            <div class="mb-3">
                                                <input type="text" class="form-control bg-transparent" placeholder=" To:">
                                            </div>
                                            <div class="mb-3">
                                                <input type="text" class="form-control bg-transparent" placeholder=" Subject:">
                                            </div>
                                            <div class="mb-3">
                                                <textarea id="email-compose-editor" class="textarea_editor form-control bg-transparent" rows="15" placeholder="Enter text ..."></textarea>
                                            </div>
                                        </form>
                                        <h5 class="mb-4"><i class="fa fa-paperclip"></i> Attatchment</h5>
										<form action="#" class="dropzone">
											<div class="fallback">
												<input name="file" type="file" multiple>
											</div>
										</form>
                                    </div>
                                    <div class="text-start mt-4 mb-3">
                                        <button class="btn btn-primary btn-sl-sm me-2" type="button"><span class="me-2"><i class="fa fa-paper-plane"></i></span>Send</button>
                                        <button class="btn btn-danger light btn-sl-sm" type="button"><span class="me-2"><i class="fa fa-times"></i></span>Discard</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

           
        <!--**********************************
            Content body end
        ***********************************-->

		<!--**********************************
        Scripts
    	***********************************-->
    <!-- Required vendors -->
    <script src="vendor/global/global.min.js"></script>
	<script src="vendor/jquery-nice-select/js/jquery.nice-select.min.js"></script>
    <script src="vendor/dropzone/dist/dropzone.js"></script>
    <script src="js/custom.min.js"></script>
	<script src="js/dlabnav-init.js"></script>
	<script src="js/demo.js"></script>
    <script src="js/styleSwitcher.js"></script>

@endsection