<aside id="colorlib-aside" role="complementary" class="border js-fullheight">
    <div class="text-center">
        <div class="author-img" style="background-image: url({{asset('assets/images/about.jpg')}});"></div>
        <h1 id="colorlib-logo"><a href="{{ url('/') }}">SM Emon Islam</a></h1>
        <span class="position"><a href="{{ url('/') }}">Laravel Developer</a> in Bangladesh</span>
    </div>
    <nav id="colorlib-main-menu" role="navigation" class="navbar">
        <div class="main-menu">
            <ul>
                <li class="active"><a href="{{ url('/') }}">Home</a></li>
                <li><a href="{{ route('about') }}">About Me</a></li>
                <li><a href="{{ route('projects') }}">Projects</a></li>
                <li><a href="{{ route('contact') }}">Contact</a></li>
            </ul>
        </div>
    </nav> 
    
    @include('layouts.footer')
</aside>