<!-- Navigation -->
 <nav class="navbar navbar-expand-lg navbar-light bg-white py-3" id="navbar">
     <div class="container">
         <a class="navbar-brand" href="{{ route('home') }}">Visaghor Carrier Consultancy</a>
         <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
             <span class="navbar-toggler-icon"></span>
         </button>
         <div class="collapse navbar-collapse" id="navbarNav">
             <ul class="navbar-nav mx-auto">
                 <li class="nav-item">
                     <a class="nav-link active" href="{{ route('home') }}">Home</a>
                 </li>
                 <li class="nav-item">
                     <a class="nav-link" href="#">Find a Job</a>
                 </li>
                 <li class="nav-item">
                     <a class="nav-link" href="#">Recruiters</a>
                 </li>
                 <li class="nav-item">
                     <a class="nav-link" href="#">Candidates</a>
                 </li>
                 <li class="nav-item">
                     <a class="nav-link" href="#">Pages</a>
                 </li>
                 <li class="nav-item">
                     <a class="nav-link" href="#">Blog</a>
                 </li>
             </ul>
             <div class="d-flex">
                @guest
                    <!-- User is not logged in -->
                    <a class="btn btn-primary me-2" href="{{ route('login') }}">Login</a>
                    <a class="btn btn-success" href="{{ route('register') }}">Register</a>
                @else
                    <!-- User is logged in -->
                    @if (auth()->user()->isUser())
                        <a class="btn btn-danger" href="{{ route('user.dashboard') }}">Dashboard</a>
                    @endif
                @endguest
             </div>
         </div>
     </div>
 </nav>
