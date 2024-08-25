@extends ('frontend.master')
@section('footer')



<footer class="site-footer section-padding">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-12 mb-4 pb-2">
                        <a class="navbar-brand mb-2">
                            <i class="bi-back"></i>
                            <span>Portfolio</span>
                        </a>
                    </div>

                    <div class="col-lg-3 col-md-4 col-6">
                        <h6 class="site-footer-title mb-3">Resources</h6>

                        <ul class="site-footer-links">
                            <li class="site-footer-link-item">
                                <a href="#" class="site-footer-link">Home</a>
                            </li>

                            <li class="site-footer-link-item">
                                <a href="#section_2" class="site-footer-link">Works and Designs</a>
                            </li>

                            <li class="site-footer-link-item">
                                <a href="#section_3" class="site-footer-link">About</a>
                            </li>

                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-4 col-6 mb-4 mb-lg-0">
                        <h6 class="site-footer-title mb-3">Contact</h6>

                        <p class="text-white d-flex mb-1">
                            <a href="tel: 09519084022" class="site-footer-link">
                                09519084022
                            </a>
                        </p>

                        <p class="text-white d-flex">
                            <a href="https://mail.google.com/mail/u/0/#inbox " class="site-footer-link">
                            Richardbilan005@gmail.com
                            </a>
                        </p>
                    </div>

                    <div class="col-lg-3 col-md-4 col-12 mt-4 mt-lg-0 ms-auto">
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            English</button>

                            <ul class="dropdown-menu">
                                <li><button class="dropdown-item" type="button">Bicol</button></li>

                                <li><button class="dropdown-item" type="button">Tagalog</button></li>

                                <li><button class="dropdown-item" type="button">English</button></li>
                            </ul>
                        </div>

                    </div>

                </div>
            </div>
        </footer>

        @endsection