<div class="nav-bar">
    <div class="container">
        <nav class="navbar navbar-expand-md bg-dark navbar-dark">
            <a href="#" class="navbar-brand">MENU</a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                <div class="navbar-nav mr-auto">
                    <a href="{{route('frontsite.home')}}" class="nav-item nav-link active">Home</a>
                    <a href="{{route('frontsite.single')}}" class="nav-item nav-link">Single Page</a>
                    <a href="{{route('frontsite.contact')}}" class="nav-item nav-link">Contact Us</a>



                    @auth
                        <a href="{{route('dashboard.home')}}" class="nav-item nav-link">Dashboard</a>
                        <a href="{{route('logout')}}" class="nav-item nav-link">Logout</a>
                    @endauth
                </div>
                <div class="social ml-auto">
                    <a href=""><i class="fab fa-twitter"></i></a>
                    <a href=""><i class="fab fa-facebook-f"></i></a>
                    <a href=""><i class="fab fa-linkedin-in"></i></a>
                    <a href=""><i class="fab fa-instagram"></i></a>
                    <a href=""><i class="fab fa-youtube"></i></a>
                </div>
            </div>
        </nav>
    </div>
</div>
