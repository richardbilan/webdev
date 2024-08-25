<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="">
        <meta name="author" content="">

        <title>Topic Detail Page</title>

        <!-- CSS FILES -->        
        <link rel="preconnect" href="https://fonts.googleapis.com">
        
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700&family=Open+Sans&display=swap" rel="stylesheet">
                        
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <link href="css/bootstrap-icons.css" rel="stylesheet">

        <link href="css/templatemo-topic-listing.css" rel="stylesheet">

    </head>
    
    <body id="top">

        <main>

        <nav class="navbar navbar-expand-lg">
                <div class="container">
                    <a class="navbar-brand">
                        <i class="bi-back"></i>
                        <span>PORTFOLIO</span>
                    </a>

                    <div class="d-lg-none ms-auto me-4">
                        <a href="#top" class="navbar-icon bi-person smoothscroll"></a>
                    </div>
    
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
    
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav ms-lg-5 me-lg-auto">
                        <li class="nav-item">
                     <a class="nav-link click-scroll" href="{{ url('/') }}">Home</a>
                             </li>

                            <li class="nav-item">
                                <a class="nav-link click-scroll" href="{{ url('/#section_2') }}">Content</a>
                            </li>
    
                            <li class="nav-item">
                            <a class="nav-link click-scroll" href="{{ url('/#section_3') }}">About</a>
                            </li>
                    </div>
                </div>
            </nav>
            

            <header class="site-header d-flex flex-column justify-content-center align-items-center">
                <div class="container">
                    <div class="row justify-content-center align-items-center">

                        <div class="col-lg-5 col-12 mb-5">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Homepage</a></li>

                                    <li class="breadcrumb-item active" aria-current="page">Web Design</li>
                                </ol>
                            </nav>

                            <h2 class="text-white">INTRODUCTION OF MY WEB DESIGNS</h2>

                            
                        </div>

                        <div class="col-lg-5 col-12">
                        <div class="topics-detail-block bg-white shadow-lg" style="position: relative; overflow: hidden; width: 450px; height: 250px;">
    <video style="width: 100%; height: 100%; object-fit: cover;" controls>
        <source src="images/topics/Culture_project.mp4" type="video/mp4">
        <source src="videos/Culture_project.ogg" type="video/ogg">
        Your browser does not support the video tag.
    </video>
</div>
<h5 style="margin-top: 10px; padding: 0 10px;">Philippine Culture Quest</h5>
<p style="color: black;">This is the First Web Project I made in Bicol University.</p>
<p style="color: black;">
    You can access this 
    <a href="https://github.com/richardbilan/MY-PROJECTS.git" style="color: black; text-decoration: underline;">Here</a>.
</p>



                        </div>

                    </div>
                </div>
            </header>


            @yield('footer')

        <!-- JAVASCRIPT FILES -->
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/jquery.sticky.js"></script>
        <script src="js/custom.js"></script>

    </body>
</html>