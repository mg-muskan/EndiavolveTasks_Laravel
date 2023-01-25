<header>

    <!-- Navbar -->
    <div id="home-navbar">
        <nav class="navbar navbar-expand-lg mt-8 jibran-top-nav">
            <div class="container-fluid">
                <a class="navbar-brand logo-brand-landing-page" href="index.php">
                    <img src="http://endiavolve.com/img/logo/LOGO2.png" alt="logo" class="img-responsive mt-0 logo"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" 
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <!-- <span class="navbar-toggler-icon"></span> -->
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <form class="me-3">
                        <div class="form-white input-group" style="width: 250px;">
                        <input type="search" class="form-control rounded" placeholder="Search or jump to... ( / )" 
                        aria-label="Search" aria-describedby="search-addon">
                        </div>
                    </form>
                    <ul class="navbar-nav me-auto mb-lg-0 mt-2 mt-lg-0">
                        
                        <li class="navbar-li-tag active"><a class="nav-link" href="/">Home</a></li>
                        <li class="navbar-li-tag "><a class="nav-link" href="{{ url('curriculum') }}">Curriculum</a></li>

                        <li class="navbar-li-tag "><a class="nav-link" href="career">Career</a></li>
                        <li class="navbar-li-tag "><a class="nav-link" href="suggestion">Suggestion</a></li>
                        <li class="navbar-li-tag "><a class="nav-link" href="aboutus">About us</a></li>
                        <li class="navbar-li-tag "><a class="nav-link" href="contactus">Contact us</a></li>
                    </ul>
                    <ul class="navbar-nav form-signin-head d-flex flex-row ms-auto me-3">
                        <li class="nav-item  me-3 me-lg-0"><a class="nav-link" href="commingSoon.php"><i class="fa fa-sign-in"></i> Login</a></li>
                        
                    </ul>
                </div>    
            </div>
        </nav>
    </div>
    <!-- END Navbar -->

</header>