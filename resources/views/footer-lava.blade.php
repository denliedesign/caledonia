<div id="footer">
    <div class="bg-dark text-white pb-5 font-syne">
        <div class="container">
            <div class="pt-5">
                <div class="row m-0 p-0">
                    <div class="col-sm-4 mt-3">
                        <p class="lead">CONTACT</p>
                        <ul class="list-group" id="footer-list">
                            <li class="list-group-item px-0 border-0">
                                <ion-icon name="navigate"></ion-icon>
                                131 E. Main Street, Suite E, Caledonia, MI 49316
                            </li>
                            <li class="list-group-item px-0 border-0">
                                <ion-icon name="call"></ion-icon>
                                <a href="tel:6168911606" style="text-decoration: none">616-891-1606</a>
                            </li>
                            <li class="list-group-item px-0 border-0">
                                <ion-icon name="mail"></ion-icon>
                                info@CaledoniaDanceAndMusic.com
                            </li>
                            <li class="list-group-item px-0 border-0">
                                <ion-icon name="pencil"></ion-icon>
                                <button type="button" class="text-primary" style="background: none;border: none;padding: 0;font: inherit;cursor: pointer;outline: inherit;" data-bs-toggle="modal" data-bs-target="#trymodal">Send A Message</button>
                            </li>
                        </ul>
                    </div>
                    <div class="col-sm-2 mt-3">
                        <p class="lead">SOCIAL</p>
                        <div class="d-flex d-inline">
                            <div class="d-inline">
                                <a class="nav-link text-white p-0 mx-2" href="https://www.facebook.com/caledoniadanceandmusiccenter" target="_blank">
                                    <ion-icon name="logo-facebook"></ion-icon>
                                </a>
                            </div>
                            <div class="d-inline">
                                <a class="nav-link text-white p-0 mx-2" href="https://www.instagram.com/caledoniadanceandmusic/" target="_blank">
                                    <ion-icon name="logo-instagram"></ion-icon>
                                </a>
                            </div>
                            <div class="d-inline">
                                <a class="nav-link text-white p-0 mx-2" href="https://www.youtube.com/channel/UCvjNDVtwUvSxYH7KVknrQyg/" target="_blank">
                                    <ion-icon name="logo-youtube"></ion-icon>
                                </a>
                            </div>
                            <div class="d-inline">
                                <a class="nav-link text-white p-0 mx-2" href="https://vimeo.com/showcase/7392246" target="_blank">
                                    <ion-icon name="logo-vimeo"></ion-icon>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 mt-3">
                        <p class="lead">MORE LINKS</p>
                        <div class="row">
                            <div class="col-sm">
                                <ul class="list-group" id="footer-list">
{{--                                    <li class="list-group-item px-0 border-0">--}}
{{--                                        <a class="text-decoration-none txt-blue" href="/summer">Summer</a>--}}
{{--                                    </li>--}}
                                    <li class="list-group-item px-0 border-0">
                                        <a class="text-decoration-none txt-blue" href="/storytime-with-a-twist">Storytime</a>
                                    </li>
                                    <li class="list-group-item px-0 border-0">
                                        <a class="text-decoration-none txt-blue" href="/introduce-a-friend">Introduce a Friend</a>
                                    </li>
                                    <li class="list-group-item px-0 border-0">
                                        <a class="text-decoration-none txt-blue" href="/music-lessons">Music Lessons</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-sm">
                                <ul class="list-group" id="footer-list">
                                                                    <li class="list-group-item px-0 border-0">
                                                                        <a class="text-decoration-none txt-blue" href="/dance-teacher-jobs-michigan">Employment</a>
                                                                    </li>
                                    @guest
                                        <li class="list-group-item px-0 border-0">
                                            <a class="text-decoration-none txt-blue" href="{{ route('login') }}">{{ __('Admin') }}</a>
                                        </li>
                                    @else
                                        <li class="list-group-item px-0 border-0 dropdown">
                                            <a class="text-decoration-none txt-blue" href="{{ route('logout') }}"
                                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                {{ __('Logout') }}
                                            </a>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                @csrf
                                            </form>
                                        </li>
                                    @endguest
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="bottom" class="bg-dark text-white-50 text-center pt-3 font-syne">
        © 2023 Caledonia Dance & Music Center
    </div>
    <p id="credit" class="bg-dark text-center pb-3 m-0">
        <a class="text-decoration-none" href="/byron-center-dance"><small class="text-muted">Byron Center Dance</small></a>
        &nbsp; <small class="text-muted">/</small> &nbsp; <a class="text-decoration-none" href="/kentwood-dance-studios"><small class="text-muted">Kentwood Dance</small></a>
        &nbsp; <small class="text-muted">/</small> &nbsp; <a class="text-decoration-none" href="/hastings-dance"><small class="text-muted">Hastings Dance</small></a>
        &nbsp; <small class="text-muted">/</small> &nbsp; <a class="text-decoration-none" href="/wayland-dance"><small class="text-muted">Wayland Dance</small></a>
        &nbsp; <small class="text-muted">/</small> &nbsp; <a class="text-decoration-none" href="/grand-rapids-dance"><small class="text-muted">Grand Rapids Dance</small></a>
        <br>&nbsp;
        <a class="text-decoration-none" href="https://denliedesign.com/" target="_blank"><small class="text-muted">Dance Website Design by Denlie Design</small></a>
    </p>
    <div id="bottom"></div>
</div>
