<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Template</title>
    <script src="https://kit.fontawesome.com/64340c05bf.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="CSS/bootstrap.min.css">
    <link rel="stylesheet" href="CSS/owl.carousel.min.css">

    <link rel="stylesheet" href="style.css">
</head>

<body>
    <!-- header section start -->

    <section style="background-color: gray; padding: 20px;" class="container bg-success">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <div class="hader">
                        <h2>অলংকার পুর আদর্শ মাধ্যমিক বিদ্যালয়</h2>
                        <h4>বালিয়াকান্দি, রাজবাড়ী</h4>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12">
                    <div class="logo-img  ">
                        <img src="images/logo (2).png" alt="" class="brand-logo">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- header section end -->
    <!-- marquee section start -->
    <section class="container">
        <marquee behavior="" direction="" class="fw-bold text-uppercase text-primary">Alongkerpur Ideal Hiegh School,
            Baliakandi,Rajbari</marquee>
    </section>
    <!-- marquee section s end-->








   


    <!-- navbar section start -->
    <section class="container">
        <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
            <div class="container">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="mynavbar">
                    <ul class="navbar-nav me-auto">
                        <li class="nav-item">
                            <a class="nav-link active" href="index.html">HOME</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.html">ABOUT US</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#">STUDENT CORNER</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Our Student</a>  </li>
                                <li><a class="dropdown-item" href="#">Feesh pyment</a> </li>
                                
                                <li><a class="dropdown-item" href="#">Dress info</a></li>
                                <li><a class="dropdown-item" href="#">Class Rutting</a></li>
                                <li><a class="dropdown-item" href="#">Exam Rutting</a></li>
                               
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">RESULTS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="galary.html">GALLERY</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">CONTACT</a>
                        </li>
                       
                    </ul>
                    <form class="action_page.php d-flex">
                        <a href="#mymodel" class="btn btn-primary me-2" data-bs-toggle="modal">Log-In</a>
                        <a href="#mymode2" data-bs-toggle="modal" class="btn btn-primary">Sign-Up</a>
                    </form>
                </div>
            </div>
        </nav>
    </section>
    <!-- navbar section start -->

   

    
    
  
    
   
    


    

    <script src="JS/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="JS/owl.carousel.min.js"></script>
 
     












    <script>
        document.querySelector('input[type="file"]').addEventListener('change', function () {
            const fileInput = this;
            const uploadedImage = document.getElementById('uploadedImage');
            
            if (fileInput.files && fileInput.files[0]) {
                const reader = new FileReader();
                
                reader.onload = function (e) {
                    uploadedImage.src = e.target.result;
                };
                
                reader.readAsDataURL(fileInput.files[0]);
            }
        });
    </script>
    











</body>

</html>