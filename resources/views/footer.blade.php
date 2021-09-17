<div class="jumbotron jumbotron-fluid bg-gray jumbo-footer mb-0 pb-3" style="background: #3d1951 !important;">
    <div class="footer text-center d-flex align-items-center">
        <div class="footer-items">
            <div class="row">
                <div class="mb-5 mb-md-0 col-md-1 d-flex justify-content-center">
                    <div class="copyright-items">
                        <img src="/images/cdmc-logo-white.png" alt="">
                        <p class="pt-2"><small class="text-muted">&#169; 2020</small></p>
                    </div>
                </div>
                <div class="mb-5 mb-md-0 col-md-2">
                    <p class="text-white footer-title">NAV</p>
                    <ul class="nav flex-column">

                        <li class="nav-item">
                            <a class="nav-link" href="/about-us">About</a>
                        </li>
{{--                        <li class="nav-item">--}}
{{--                            <a class="nav-link" href="/faculty">Faculty</a>--}}
{{--                        </li>--}}
                        <li class="nav-item">
                            <a class="nav-link" href="/class-schedule">Summer</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/calendar">Calendar</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/mini-camps">Mini Camps</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/storytime-with-a-twist">Storytime</a>
                        </li>
{{--                        <li class="nav-item">--}}
{{--                            <a class="nav-link" href="/nutcracker">Nutcracker</a>--}}
{{--                        </li>--}}
                        <li class="nav-item">
                            <a class="nav-link" href="/music-lessons">Music Lessons</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/birthday-parties">Birthdays</a>
                        </li>
{{--                        <li class="nav-item">--}}
{{--                            <a class="nav-link" href="/media">Media</a>--}}
{{--                        </li>--}}
                        <li class="nav-item">
                            <a class="nav-link" href="https://app.jackrabbitclass.com/regv2.asp?id=383292&preLoadClassID=11480783" target="_blank">Register</a>
                        </li>

                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Staff Login') }}</a>
                            </li>
                            {{--                    @if (Route::has('register'))--}}
                            {{--                        <li class="nav-item">--}}
                            {{--                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>--}}
                            {{--                        </li>--}}
                            {{--                    @endif--}}
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    {{--                            <a class="dropdown-item" href="{{ url('admin') }}">Admin</a>--}}
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
                <div class="mb-5 mb-md-0 col-md-3">
                    <p class="text-white footer-title">CONTACT</p>
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <ion-icon name="location"></ion-icon>
                            131 E. Main Street, Suite E, Caledonia, MI 49316
                        </li>
                        <li class="nav-item">
                            <a href="tel:6168911606">
                                <ion-icon name="call"></ion-icon>
                                616-891-1606
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="mailto:info@caledoniadanceandmusic.com">
                                <ion-icon name="mail"></ion-icon>
                                info@Caledonia<br>DanceAndMusic.com
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="mb-5 mb-md-0 col-md-2">
                    <p class="text-white footer-title">HOURS</p>
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <strong>Sept through May:</strong>
                            <br>
                            Mon-Thur 12pm-8pm, Fri by appointment
                        </li>
                        <li class="nav-item">
                            <strong>Additional Hours October 22-Dec 4:</strong>
                            <br>
                            Fri 4-7pm, Sat 10am-2pm
                        </li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <div style="width: 100%"><iframe width="100%" height="275" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=131%20E.%20Main%20Street,%20Suite%20E,%20Caledonia,%20MI%2049316+(Caledonia%20Dance%20&amp;%20Music%20Center)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe></div>
                </div>
            </div>
            <p class="pt-5" id="credit"><a href="https://denliedesign.com/" target="_blank"><small class="text-muted">Dance Website Design by Denlie Design</small></a></p>
        </div>
    </div>
</div>
