
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Dark Bootstrap Admin by Bootstrapious.com</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="{{ asset('admin_asset/vendor/bootstrap/css/bootstrap.min.css') }}">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="{{ asset('admin_asset/vendor/font-awesome/css/font-awesome.min.css') }}">
    <!-- Custom Font Icons CSS-->
    <link rel="stylesheet" href="{{ asset('admin_asset/css/font.css') }}">
    <!-- Google fonts - Muli-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli:300,400,700">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="{{ asset('admin_asset/css/style.default.css') }}" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="{{ asset('admin_asset/css/custom.css') }}">
    <!-- Favicon-->
    <link rel="shortcut icon" href="{{ asset('admin_asset/img/favicon.ico') }}">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  
  <body>


    <header class="header">   
      <nav class="navbar navbar-expand-lg">
        <div class="search-panel">
          <div class="search-inner d-flex align-items-center justify-content-center">
            <div class="close-btn">Close <i class="fa fa-close"></i></div>
            <form id="searchForm" action="#">
              <div class="form-group">
                <input type="search" name="search" placeholder="What are you searching for...">
                <button type="submit" class="submit">Search</button>
              </div>
            </form>
          </div>
        </div>
        <div class="container-fluid d-flex align-items-center justify-content-between">
          <div class="navbar-header"><a href="index.html" class="navbar-brand">
              <div class="brand-text brand-big visible text-uppercase"><strong class="text-primary">Dark</strong><strong>Admin</strong></div>
              <div class="brand-text brand-sm"><strong class="text-primary">D</strong><strong>A</strong></div></a>
            <button class="sidebar-toggle"><i class="fa fa-long-arrow-left"></i></button>
          </div>
          <ul class="right-menu list-inline no-margin-bottom">    
            <li class="list-inline-item"><a href="#" class="search-open nav-link"><i class="icon-magnifying-glass-browser"></i></a></li>
            <li class="list-inline-item dropdown"><a id="navbarDropdownMenuLink1" href="http://example.com" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link messages-toggle"><i class="icon-email"></i><span class="badge dashbg-1">5</span></a>
              <ul aria-labelledby="navbarDropdownMenuLink1" class="dropdown-menu messages">
                <li><a href="#" class="dropdown-item message d-flex align-items-center">
                    <div class="profile"><img src="admin_asset/img/avatar-3.jpg" alt="..." class="img-fluid">
                      <div class="status online"></div>
                    </div>
                    <div class="content">   <strong class="d-block">Nadia Halsey</strong><span class="d-block">lorem ipsum dolor sit amit</span><small class="date d-block">9:30am</small></div></a></li>
                <li><a href="#" class="dropdown-item message d-flex align-items-center">
                    <div class="profile"><img src="admin_asset/img/avatar-2.jpg" alt="..." class="img-fluid">
                      <div class="status away"></div>
                    </div>
                    <div class="content">   <strong class="d-block">Peter Ramsy</strong><span class="d-block">lorem ipsum dolor sit amit</span><small class="date d-block">7:40am</small></div></a></li>
                <li><a href="#" class="dropdown-item message d-flex align-items-center">
                    <div class="profile"><img src="admin_asset/img/avatar-1.jpg" alt="..." class="img-fluid">
                      <div class="status busy"></div>
                    </div>
                    <div class="content">   <strong class="d-block">Sam Kaheil</strong><span class="d-block">lorem ipsum dolor sit amit</span><small class="date d-block">6:55am</small></div></a></li>
                <li><a href="#" class="dropdown-item message d-flex align-items-center">
                    <div class="profile"><img src="admin_asset/img/avatar-5.jpg" alt="..." class="img-fluid">
                      <div class="status offline"></div>
                    </div>
                    <div class="content">   <strong class="d-block">Sara Wood</strong><span class="d-block">lorem ipsum dolor sit amit</span><small class="date d-block">10:30pm</small></div></a></li>
                <li><a href="#" class="dropdown-item text-center message"> <strong>See All Messages <i class="fa fa-angle-right"></i></strong></a></li>
              </ul>
            </li>
            <li class="list-inline-item dropdown"><a id="navbarDropdownMenuLink2" href="http://example.com" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link tasks-toggle"><i class="icon-new-file"></i><span class="badge dashbg-3">9</span></a>
              <ul aria-labelledby="navbarDropdownMenuLink2" class="dropdown-menu tasks-list">
                <li><a href="#" class="dropdown-item">
                    <div class="text d-flex justify-content-between"><strong>Task 1</strong><span>40% complete</span></div>
                    <div class="progress">
                      <div role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" class="progress-bar dashbg-1"></div>
                    </div></a></li>
                <li>           <a href="#" class="dropdown-item">
                    <div class="text d-flex justify-content-between"><strong>Task 2</strong><span>20% complete</span></div>
                    <div class="progress">
                      <div role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" class="progress-bar dashbg-2"></div>
                    </div></a></li>
                <li>           <a href="#" class="dropdown-item">
                    <div class="text d-flex justify-content-between"><strong>Task 3</strong><span>70% complete</span></div>
                    <div class="progress">
                      <div role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" class="progress-bar dashbg-4"></div>
                    </div></a></li>
                <li>           <a href="#" class="dropdown-item">
                    <div class="text d-flex justify-content-between"><strong>Task 4</strong><span>40% complete</span></div>
                    <div class="progress">
                      <div role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" class="progress-bar dashbg-1"></div>
                    </div></a></li>
                <li>           <a href="#" class="dropdown-item">
                    <div class="text d-flex justify-content-between"><strong>Task 5</strong><span>30% complete</span></div>
                    <div class="progress">
                      <div role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" class="progress-bar dashbg-3"></div>
                    </div></a></li>
                <li>           <a href="#" class="dropdown-item text-center"> <strong>See All Tasks <i class="fa fa-angle-right"></i></strong></a></li>
              </ul>
            </li>
            <li class="list-inline-item dropdown menu-large"><a href="#" data-toggle="dropdown" class="nav-link">Mega <i class="fa fa-ellipsis-v"></i></a>
              <ul class="dropdown-menu megamenu">
                <div class="row">
                  <div class="col-lg-3"><strong class="text-uppercase">Elements Heading</strong>
                    <ul class="list-unstyled">
                      <li><a href="#">Lorem ipsum dolor</a></li>
                      <li><a href="#">Sed ut perspiciatis</a></li>
                      <li><a href="#">Voluptatum deleniti</a></li>
                      <li><a href="#">At vero eos</a></li>
                      <li><a href="#">Consectetur adipiscing</a></li>
                      <li><a href="#">Duis aute irure</a></li>
                      <li><a href="#">Necessitatibus saepe</a></li>
                      <li><a href="#">Maiores alias</a></li>
                    </ul>
                  </div>
                  <div class="col-lg-3"><strong class="text-uppercase">Elements Heading</strong>
                    <ul class="list-unstyled">
                      <li><a href="#">Lorem ipsum dolor</a></li>
                      <li><a href="#">Sed ut perspiciatis</a></li>
                      <li><a href="#">Voluptatum deleniti</a></li>
                      <li><a href="#">At vero eos</a></li>
                      <li><a href="#">Consectetur adipiscing</a></li>
                      <li><a href="#">Duis aute irure</a></li>
                      <li><a href="#">Necessitatibus saepe</a></li>
                      <li><a href="#">Maiores alias</a></li>
                    </ul>
                  </div>
                  <div class="col-lg-3"><strong class="text-uppercase">Elements Heading</strong>
                    <ul class="list-unstyled">
                      <li><a href="#">Lorem ipsum dolor</a></li>
                      <li><a href="#">Sed ut perspiciatis</a></li>
                      <li><a href="#">Voluptatum deleniti</a></li>
                      <li><a href="#">At vero eos</a></li>
                      <li><a href="#">Consectetur adipiscing</a></li>
                      <li><a href="#">Duis aute irure</a></li>
                      <li><a href="#">Necessitatibus saepe</a></li>
                      <li><a href="#">Maiores alias</a></li>
                    </ul>
                  </div>
                  <div class="col-lg-3"><strong class="text-uppercase">Elements Heading</strong>
                    <ul class="list-unstyled">
                      <li><a href="#">Lorem ipsum dolor</a></li>
                      <li><a href="#">Sed ut perspiciatis</a></li>
                      <li><a href="#">Voluptatum deleniti</a></li>
                      <li><a href="#">At vero eos</a></li>
                      <li><a href="#">Consectetur adipiscing</a></li>
                      <li><a href="#">Duis aute irure</a></li>
                      <li><a href="#">Necessitatibus saepe</a></li>
                      <li><a href="#">Maiores alias</a></li>
                    </ul>
                  </div>
                </div>
                <div class="row megamenu-buttons text-center">
                  <div class="col-lg-2 col-md-4"><a href="#" class="d-block megamenu-button-link dashbg-1"><i class="fa fa-clock-o"></i><strong>Demo 1</strong></a></div>
                  <div class="col-lg-2 col-md-4"><a href="#" class="d-block megamenu-button-link dashbg-2"><i class="fa fa-clock-o"></i><strong>Demo 2</strong></a></div>
                  <div class="col-lg-2 col-md-4"><a href="#" class="d-block megamenu-button-link dashbg-3"><i class="fa fa-clock-o"></i><strong>Demo 3</strong></a></div>
                  <div class="col-lg-2 col-md-4"><a href="#" class="d-block megamenu-button-link dashbg-4"><i class="fa fa-clock-o"></i><strong>Demo 4</strong></a></div>
                  <div class="col-lg-2 col-md-4"><a href="#" class="d-block megamenu-button-link bg-danger"><i class="fa fa-clock-o"></i><strong>Demo 5</strong></a></div>
                  <div class="col-lg-2 col-md-4"><a href="#" class="d-block megamenu-button-link bg-info"><i class="fa fa-clock-o"></i><strong>Demo 6</strong></a></div>
                </div>
              </ul>
            </li>
            <li class="list-inline-item logout">                   <a id="logout" href="{{ URL::to('logout') }}" class="nav-link">Logout <i class="icon-logout"></i></a></li>
          </ul>
        </div>
      </nav>
    </header>



    <div class="d-flex align-items-stretch">

    @yield('sideMenu')



  <div class="page-content">
    @yield('Content')




        <footer class="footer">
          <div class="footer__block block no-margin-bottom">
            <div class="container-fluid text-center">
              <!-- Please do not remove the backlink to us unless you support us at https://bootstrapious.com/donate. It is part of the license conditions. Thank you for understanding :)-->
              <p class="no-margin-bottom">2017 &copy; Your company. Developed by <a href="https://www.facebook.com/Ruhul2233">Ruhul Amin</a>.</p>
            </div>
          </div>
        </footer>
      </div>




    </div>
    <!-- Javascript files-->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"> </script>
    <script src="{{ asset('admin_asset/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('admin_asset/vendor/jquery.cookie/jquery.cookie.js') }}"> </script>
    <script src="{{ asset('admin_asset/vendor/chart.js/Chart.min.js') }}"></script>
    <script src="{{ asset('admin_asset/js/charts-home.js') }}"></script>
    <script src="{{ asset('admin_asset/js/front.js') }}"></script>
  </body>
</html>