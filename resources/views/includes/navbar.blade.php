<nav class="navbar navbar-expand-lg navbar-light bg-white f-13">

    <!--  Show this only on mobile to medium screens  -->
    <a class="navbar-brand d-lg-none" href="#">
        <h3>Luxe Tribes</h3>
    </a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggle"
        aria-controls="navbarToggle" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <!--  Use flexbox utility classes to change how the child elements are justified  -->
    <div class="collapse navbar-collapse justify-content-between" id="navbarToggle">

        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link active" href="#">Group Trips <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Private Trips</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Past trips & reviews</a>
            </li>
        </ul>


        <!--   Show this only lg screens and up   -->
        <a class="navbar-brand d-none d-lg-block" href="#">
            <h3>Luxe Tribes</h3>
        </a>



        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="#">About us</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">FAQs</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Blog</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Contact us</a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link ">
                    <button class="border br px-2">
                        <i class="fas fa-search icon"></i>
                    </button>
                </a>
            </li>
            <li class="nav-item">
                @guest
                    <a class="nav-link" href="{{ url('login') }}">
                        <button class="border br px-2">
                            <i class="far fa-user icon"></i>
                            Login
                        </button>
                    </a>
                @endguest
                @auth
                    <a class="nav-link" href="{{ url('logout') }}">
                        <button class="border br px-2">
                            <i class="far fa-user icon"></i>
                            Logout
                        </button>
                    </a>
                @endauth
            </li>
        </ul>
    </div>
</nav>
