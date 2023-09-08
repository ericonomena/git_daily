<!DOCTYPE html>
<html lang="en" class="h-100">


<!-- Mirrored from dompet.dexignlab.com/xhtml/page-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 21 Sep 2022 10:36:35 GMT -->
<head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="admin, dashboard" />
	<meta name="author" content="DexignZone" />
	<meta name="robots" content="index, follow" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Dompet : Payment Admin Template" />
	<meta property="og:title" content="Dompet : Payment Admin Template" />
	<meta property="og:description" content="Dompet : Payment Admin Template" />
	<meta property="og:image" content="social-image.png" />
	<meta name="format-detection" content="telephone=no">
	
	<!-- favicon -->
	<link rel="shortcut icon" type="image/png" href="images/oasis/i-oasis-tp_cleanup-removebg-preview__1_-removebg-preview.png">

	<!-- Page Title Here -->
	<title>i-oasis-ma - Daily Report Task</title>
    
    <link href="css/style2.css" rel="stylesheet">

</head>

<body class="vh-100">
    <div class="authincation h-100" >
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-6">
                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <div class="auth-form">
									<div class="text-center mb-3">
										<a href="index.html">
                                            <div class="row" style="display: flex;">
                                                <div style="width:50%;">
                                                    <img src="images/oasis/i-oasis-tp_cleanup-removebg-preview__1_-removebg-preview.png" style="height: 170px;margin-left: 80px; ">
                                                </div>
                                                <div style="width: 50%;display: flex;align-items: center;" >
                                                    <h1><strong><span style="font-size: 2em;color: #F6A42D">i</span>-oasis</strong></h1>
                                                </div>
                                            </div>
                                        </a>
                                        
									</div>
                                    <h4 class="text-center mb-4">Sign in your account</h4>
                                    <form action="/connect" novalidate method="POST">
                                        @csrf
                                        <div class="mb-3">
                                            <label class="mb-1"><strong>Email</strong></label>
                                            <input type="email" class="form-control" name="email" required>
                                        </div>
                                        <div class="mb-3">
                                            <label class="mb-1"><strong>Password</strong></label>
                                            <input type="password" class="form-control" name="password" required>
                                        </div>
                                        <div class="mb-3" style="display: flex;justify-content: center;">
                                            <p style="color: red">{{ $error }}</p>
                                        </div>
                                        <div class="row d-flex justify-content-between mt-4 mb-2">
                                            <div class="mb-3">
                                                <a href="page-forgot-password.html">Forgot Password?</a>
                                            </div>
                                        </div>
                                        
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary btn-block" style="background-color: #F6A42D">Sign Me In</button>
                                        </div>
                                    </form>
                                    <div class="new-account mt-3">
                                        <p>Don't have an account? <a class="text-primary" href="register">Sign up</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="vendor/global/global.min.js"></script>
    <script src="js/custom.min.js"></script>
    <script src="js/dlabnav-init.js"></script>
	<script src="js/styleSwitcher.js"></script>
</body>

<!-- Mirrored from dompet.dexignlab.com/xhtml/page-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 21 Sep 2022 10:36:38 GMT -->
</html>