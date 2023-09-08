<!DOCTYPE html>
<html lang="en" class="h-100">


<!-- Mirrored from dompet.dexignlab.com/xhtml/page-register.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 21 Sep 2022 10:36:38 GMT -->
<head>
    <meta charset="UTF-8">
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
	<link rel="shortcut icon" type="image/png" href="images/oasis/i-oasis-tp_cleanup-removebg-preview__1removebg-preview.png">

	<!-- Page Title Here -->
	<title>i-oasis-ma - Daily Report Task</title>

    <link href="css/style2.css" rel="stylesheet">

</head>

<body class="vh-100" >
    <div class="authincation h-100">
        <div class="container h-100" >
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
                                                    <img src="images/oasis/i-oasis-tp_cleanup-removebg-preview.jpg" style="height: 170px;margin-left: 80px; ">
                                                </div>
                                                <div style="width: 50%;display: flex;align-items: center;" >
                                                    <h1><strong><span style="font-size: 2em;color: #F6A42D">i</span>-oasis</strong></h1>
                                                </div>
                                            </div>
                                        </a>
									</div>
                                    <h4 class="text-center mb-4">Create your account</h4>
                                    <form action="/register/insert" method="post">
                                        @csrf
                                        <div class="mb-3">
                                            <label class="mb-1"><strong>Name</strong></label>
                                            <input type="text" class="form-control" placeholder="name" name="name" required>
                                        </div>
                                        <div class="mb-3">
                                            <label class="mb-1"><strong>Firstname</strong></label>
                                            <input type="text" class="form-control" placeholder="firstname" name="firstname">
                                        </div>
                                        <div class="mb-3">
                                            <label class="mb-1"><strong>Email</strong></label>
                                            <input type="email" class="form-control" placeholder="hello@example.com" name="email" required>
                                        </div>
                                        <div class="mb-3">
                                            <label class="mb-1"><strong>Profile</strong></label>
                                            <select class="default-select form-control wide mb-3" name="idprofile" required>
                                                <option selected>--</option>
                                                @foreach ($profiles as $profile)
                                                <option value="{{ $profile->id }}">{{ $profile->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <label class="mb-1"><strong>Password</strong></label>
                                            <input type="password" class="form-control" name="password" required>
                                        </div>
                                        <div class="text-center mt-4">
                                            <button  onclick="createAuthUserWithEmailAndPassword('ericonomena@gmail.com','123456')" type="submit" class="btn btn-primary btn-block" style="background-color: #F6A42D">Sign me up</button>
                                        </div>
                                    </form>
                                    <div style="color: red">{{ $error }}</div>
                                    <div class="new-account mt-3">
                                        <p>Already have an account? <a class="text-primary" href="login">Sign in</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<!--****************************
	Scripts
***********************************-->
<!-- Required vendors -->
<script src="vendor/global/global.min.js"></script>
<script src="js/custom.min.js"></script>
<script src="js/dlabnav-init.js"></script>
<script src="js/styleSwitcher.js"></script>

<script type="module">


    // Import the functions you need from the SDKs you need
    import { initializeApp } from "https://www.gstatic.com/firebasejs/10.3.0/firebase-app.js";
    import { getAnalytics } from "https://www.gstatic.com/firebasejs/10.3.0/firebase-analytics.js";
    // TODO: Add SDKs for Firebase products that you want to use
    // https://firebase.google.com/docs/web/setup#available-libraries
    // import { createUserWithEmailAndPassword,signIn} from 'https://www.gstatic.com/firebasejs/10.3.0/firebase- SERVICE .js'

    import { getAuth, signInWithEmailAndPassword, createUserWithEmailAndPassword, sendEmailVerification } from 'https://www.gstatic.com/firebasejs/10.3.0/firebase-auth.js';
  
    // Your web app's Firebase configuration
    // For Firebase JS SDK v7.20.0 and later, measurementId is optional
    const firebaseConfig = {
      apiKey: "AIzaSyAjoALG-s9XTr0Wb1rojiD5Mdb-Lk1f_ZI",
      authDomain: "i-oasis-auth.firebaseapp.com",
      projectId: "i-oasis-auth",
      storageBucket: "i-oasis-auth.appspot.com",
      messagingSenderId: "856590068745",
      appId: "1:856590068745:web:a53360607123846e42dcd8",
      measurementId: "G-K905Y9R43W"
    };
  
    // Initialize Firebase
    const app = initializeApp(firebaseConfig);
    const analytics = getAnalytics(app);
    const auth = getAuth(app);


    const createAuthUserWithEmailAndPassword = async (email, password) => {
    const response = await createUserWithEmailAndPassword(auth, email, password)
    const { user } = response
    console.log("User created")
    if (user) {
        console.log(user)
     sendEmailVerification(auth.currentUser)
    }
    return response
    }

    const signInUserWithEmailAndPassword = async (email, password) => {
    const response = await signInWithEmailAndPassword(auth, email, password)
    const { user } = response
    console.log("user conn")
    if (user) {
        console.log(user)
    sendEmailVerification(auth.currentUser)
    }

    return response
    }


  </script>




</body>

<!-- Mirrored from dompet.dexignlab.com/xhtml/page-register.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 21 Sep 2022 10:36:38 GMT -->
</html>


