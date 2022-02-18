<footer class="page-footer font-small elegant-color mt-4">

    <div class="color-primary">
        <div class="container">

            <!-- Grid row-->
            <div class="row py-4 d-flex align-items-center">

                <!-- Grid column -->
                <div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0">
                    <h6 class="mb-0">Get connected with us on social networks!</h6>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-6 col-lg-7 text-center text-md-right">

                    <!-- Facebook -->
                    <a class="fb-ic" href="https://www.facebook.com/mostafa.khalaf.161/">
                        <i class="fab fa-facebook-f white-text mr-4"> </i>
                    </a>
                    <!-- Twitter -->
                    <a class="tw-ic" href="https://twitter.com/mostafa57194761">
                        <i class="fab fa-twitter white-text mr-4"> </i>
                    </a>
                    <!-- Google +-->
                    {{-- <a class="gplus-ic" href="">
                        <i class="fab fa-google-plus-g white-text mr-4"> </i>
                    </a> --}}

                    <a class="git-ic" href="https://github.com/mostafakhalaf11/">
                        <i class="fab fa-github white-text mr-4"> </i>
                    </a>
                    <!--Linkedin -->
                    <a class="li-ic" href="https://www.linkedin.com/in/mostafa-khalaf-3b003621a/">
                        <i class="fab fa-linkedin-in white-text mr-4"> </i>
                    </a>
                    <!--Instagram-->
                    <a class="ins-ic" href="https://www.instagram.com/mostafakhalaf11/">
                        <i class="fab fa-instagram white-text"> </i>
                    </a>

                </div>
                <!-- Grid column -->

            </div>
            <!-- Grid row-->

        </div>
    </div>
    <!-- Footer Links -->
    <div class="container text-center text-md-left pt-4 pt-md-5">

        <!-- Grid row -->
        <div class="row mt-1 mt-md-0 mb-4 mb-md-0">

            <!-- Grid column -->
            <div class="col-md-3 mx-auto mt-3 mt-md-0 mb-0 mb-md-4">

                <!-- Links -->
                <h5>Get to Know Us</h5>
                <hr class="color-primary mb-4 mt-0 d-inline-block mx-auto w-60">

                <ul class="list-unstyled foot-desc">
                    <li class="mb-2">
                        <a  href="{{ route('blog.index')}}">Blog</a>
                    </li>
                    <li class="mb-2">
                        <a href="{{ route('about_us')}}">About Dragon </a>
                    </li>
                    <li class="mb-2">
                        <a href="{{route('contact.index')}}">Investor Relations</a>
                    </li>
                    <li class="mb-2">
                        <a href="{{route('about_us')}}">Dragon Tours</a>
                    </li> <li class="mb-2">
                        <a href="{{route('about_us')}}"> Dragon Devices</a>
                </ul>
            </div>
            <!-- Grid column -->

            <hr class="clearfix w-100 d-md-none">

            <!-- Grid column -->
            <div class="col-md-3 mx-auto mt-3 mt-md-0 mb-0 mb-md-4">

                <!-- Links -->
                <h5>Products</h5>
                <hr class="color-primary mb-4 mt-0 d-inline-block mx-auto w-60">

                <ul class="list-unstyled foot-desc">
                    <li class="mb-2">
                        <a href="/shop?category=mobile-phones">Mobile Phone</a>
                    </li>
                    <li class="mb-2">
                        <a href="/shop?category=smart-watch">Smart Watch</a>
                    </li>
                    <li class="mb-2">
                        <a href="/shop?category=digital-cameras">Digital Camera</a>
                    </li>
                    <li class="mb-2">
                        <a href="/shop?category=laptops">Laptop</a>
                    </li>
                    <li class="mb-2">
                        <a href="/shop?category=tablets">Tablet</a>
                    </li>
                    <li class="mb-2">
                        <a href="/shop?category=video-game">Video Game</a>
                    </li>
                </ul>

            </div>
            <!-- Grid column -->

            <hr class="clearfix w-100 d-md-none">

            <!-- Grid column -->
            <div class="col-md-3 mx-auto mt-3 mt-md-0 mb-0 mb-md-4">

                <!-- Links -->
                <h5>Useful links</h5>
                <hr class="color-primary mb-4 mt-0 d-inline-block mx-auto w-60">

                <ul class="list-unstyled foot-desc">

                    @if (Route::has('login'))
                            @auth
                            <li class="mb-2">
                                <a href="{{ route('profile', ['id'=>auth()->user()->id]) }}">Your Account</a>
                            </li>
                            @else
                                <a href="{{ route('login') }}">Login</a>
                        <br>

                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}">Register</a>
                                @endif
                            @endauth
                    @endif

                    <li class="mb-2">
                        <a href="{{route('contact.index')}}">Become an Affiliate</a>
                    </li>

                    <li class="mb-2">
                        <a href="{{route('contact.index')}}">Sell products on Dragon</a>
                    </li>

                    <li class="mb-2">
                        <a href="{{route('contact.index')}}">  Sell apps on Dragon</a>
                    </li>

                    <li class="mb-2">
                        <a href="{{route('contact.index')}}">Shipping Rates</a>
                    </li>

                    <li class="mb-2">
                        <a href="{{route('contact.index')}}">Help</a>
                    </li>
                </ul>

            </div>
            <!-- Grid column -->

            <hr class="clearfix w-100 d-md-none">

            <!-- Grid column -->
            <div class="col-md-3 mx-auto mt-3 mt-md-0 mb-0 mb-md-4">

                <!-- Links -->
                <h5>Contacts</h5>
                <hr class="color-primary mb-4 mt-0 d-inline-block mx-auto w-60">

                <ul class="fa-ul foot-desc ml-4">
                    <li class="mb-2"><span class="fa-li"><i class="far fa-map"></i></span>Cairo, Alm3z Street 10
                    </li>
                    <li class="mb-2"><span class="fa-li"><i class="fas fa-phone-alt"></i></span>(+20)11 555 68 401</li>
                    <li class="mb-2"><span class="fa-li"><i class="far fa-envelope"></i></span>dragon@gmail.com</li>
                    <li><span class="fa-li"><i class="far fa-clock"></i></span>Monday - Friday: 10-17</li>
                </ul>

            </div>
            <!-- Grid column -->

        </div>
        <!-- Grid row -->

    </div>
    <!-- Footer Links -->

    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">© 2021 Copyright:
        <a href="{{route('home')}}"> Dragon.com</a>
    </div>
    <!-- Copyright -->


</footer>
