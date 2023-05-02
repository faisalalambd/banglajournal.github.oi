<!DOCTYPE html>

<html lang="en">



<head>

    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">


    <title>Otika - Admin Dashboard Template</title>


    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">


    <!-- General CSS Files -->
    <link rel="stylesheet" href="{{asset('admin')}}/assets/css/app.min.css">
    <link rel="stylesheet" href="{{asset('admin')}}/assets/bundles/summernote/summernote-bs4.css">
    <link rel="stylesheet" href="{{asset('admin')}}/assets/bundles/codemirror/lib/codemirror.css">
    <link rel="stylesheet" href="{{asset('admin')}}/assets/bundles/codemirror/theme/duotone-dark.css">
    <link rel="stylesheet" href="{{asset('admin')}}/assets/bundles/jquery-selectric/selectric.css">


    <!-- Template CSS -->
    <link rel="stylesheet" href="{{asset('admin')}}/assets/bundles/datatables/datatables.min.css">
    <link rel="stylesheet" href="{{asset('admin')}}/assets/bundles/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="{{asset('admin')}}/assets/css/style.css">
    <link rel="stylesheet" href="{{asset('admin')}}/assets/css/components.css">


    <!-- Custom style CSS -->
    <link rel="stylesheet" href="{{asset('admin')}}/assets/css/custom.css">
    <link rel='shortcut icon' type='image/x-icon' href="{{asset('admin')}}/assets/img/favicon.ico" />


</head>



<body>

    <!-- <div class="loader"></div> -->


    <div id="app">

        <div class="main-wrapper main-wrapper-1">

            <div class="navbar-bg"></div>


            <nav class="navbar navbar-expand-lg main-navbar sticky">

                <div class="form-inline mr-auto">

                    <ul class="navbar-nav mr-3">

                        <li>
                            <a href="#" data-toggle="sidebar" class="nav-link nav-link-lg collapse-btn">
                                <i data-feather="align-justify"></i>
                            </a>
                        </li>


                        <li>
                            <a href="#" class="nav-link nav-link-lg fullscreen-btn">
                                <i data-feather="maximize"></i>
                            </a>
                        </li>


                        <li>
                            <form class="form-inline mr-auto">
                                <div class="search-element">
                                    <input class="form-control" type="search" placeholder="Search" aria-label="Search" data-width="200">
                                    <button class="btn" type="submit">
                                        <i class="fas fa-search"></i>
                                    </button>
                                </div>
                            </form>
                        </li>

                    </ul>

                </div>

            </nav>


            <div class="main-sidebar sidebar-style-2">

                <aside id="sidebar-wrapper">

                    <!-- ############################## LOGO ############################## -->
                    <div class="sidebar-brand">
                        <a href="index.php">
                            <img alt="image" src="assets/img/logo.png" class="header-logo" />
                            <span class="logo-name">Otika</span>
                        </a>
                    </div>


                    <!-- ############################## SIDEBAR ############################## -->
                    <ul class="sidebar-menu">

                        <li class="dropdown active">
                            <a href="index.php" class="nav-link">
                                <i data-feather="monitor"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>


                        <li>
                            <a class="nav-link" href="{{route('headlines.index')}}">
                                <i class="far fa-file-alt"></i>
                                <span>Headlines</span>
                            </a>
                        </li>

                        <li>
                            <a class="nav-link" href="{{route('slider.index')}}">
                                <i class="far fa-file-alt"></i>
                                <span>Slider</span>
                            </a>
                        </li>

                        <li>
                            <a class="nav-link" href="{{route('category.index')}}">
                                <i class="far fa-file-alt"></i>
                                <span>Category</span>
                            </a>
                        </li>

                        <li>
                            <a class="nav-link" href="{{route('news.index')}}">
                                <i class="far fa-file-alt"></i>
                                <span>News</span>
                            </a>
                        </li>
                        
                        <li>
                            <a class="nav-link" href="{{route('image_gallery.index')}}">
                                <i class="far fa-file-alt"></i>
                                <span>Image Gallery</span>
                            </a>
                        </li> 
                        
                        <li>
                            <a class="nav-link" href="{{route('video_gallery.index')}}">
                                <i class="far fa-file-alt"></i>
                                <span>Video Gallery</span>
                            </a>
                        </li> 

                        <li>
                            <a class="nav-link" href="{{route('analytic.index')}}">
                                <i class="far fa-file-alt"></i>
                                <span>Add Analytics Code</span>
                            </a>
                        </li> 


                    </ul>

                </aside>

            </div>



            <!-- ############################## Main Content ############################## -->
            <div class="main-content">






            @yield('content')








            </div>



<footer class="main-footer">

    <div class="copyright_text text-center">

        <p>

            Copyright ©

            <script>
                document.write(new Date().getFullYear());
            </script>

            All rights reserved | Developed by <a href="https://www.srsoftbd.xyz/" target="_blank">SR Soft BD</a>

        </p>

    </div>

</footer>



</div>

</div>



<!-- General JS Scripts -->
<script src="{{asset('admin')}}/assets/js/app.min.js"></script>


<!-- JS Libraies -->
<script src="{{asset('admin')}}/assets/bundles/apexcharts/apexcharts.min.js"></script>
<script src="{{asset('admin')}}/assets/bundles/datatables/datatables.min.js"></script>
<script src="{{asset('admin')}}/assets/bundles/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js"></script>
<script src="{{asset('admin')}}/assets/bundles/datatables/export-tables/dataTables.buttons.min.js"></script>
<script src="{{asset('admin')}}/assets/bundles/datatables/export-tables/buttons.flash.min.js"></script>
<script src="{{asset('admin')}}/assets/bundles/datatables/export-tables/jszip.min.js"></script>
<script src="{{asset('admin')}}/assets/bundles/datatables/export-tables/pdfmake.min.js"></script>
<script src="{{asset('admin')}}/assets/bundles/datatables/export-tables/vfs_fonts.js"></script>
<script src="{{asset('admin')}}/assets/bundles/datatables/export-tables/buttons.print.min.js"></script>
<script src="{{asset('admin')}}/assets/bundles/summernote/summernote-bs4.js"></script>
<script src="{{asset('admin')}}/assets/bundles/codemirror/lib/codemirror.js"></script>
<script src="{{asset('admin')}}/assets/bundles/codemirror/mode/javascript/javascript.js"></script>
<script src="{{asset('admin')}}/assets/bundles/jquery-selectric/jquery.selectric.min.js"></script>
<script src="{{asset('admin')}}/assets/bundles/ckeditor/ckeditor.js"></script>


<!-- Page Specific JS File -->
<script src="{{asset('admin')}}/assets/js/page/index.js"></script>
<script src="{{asset('admin')}}/assets/js/page/datatables.js"></script>
<script src="{{asset('admin')}}/assets/js/page/ckeditor.js"></script>


<!-- Template JS File -->
<script src="{{asset('admin')}}/assets/js/scripts.js"></script>


<!-- Custom JS File -->
<script src="{{asset('admin')}}/assets/js/custom.js"></script>


</body>

</html>