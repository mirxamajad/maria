<div id="wrapper">
    <!-- header begin -->
    <header class="header-fullwidth menu-expand transparent">
        <div class="container-fluid">
            <div class="row-fluid">
                <div class="col-md-12">
                    <!-- logo begin -->
                    <div id="logo">
                        <a href="#">
                            <img class="logo" style="width:15% ; height: auto;" src="{{ asset('assets/logos/logo.png') }}" alt="">
                        </a>
                    </div>
                    <!-- logo close -->
                    <!-- small button begin -->
                    <div id="mo-button-open" class="mo-bo-s1">
                        <div></div>
                        <div></div>
                        <div></div>
                    </div>
                    <!-- small button close -->
                </div>
            </div>
        </div>
    </header>
    <!-- header close -->
    <!-- menu overlay begin -->
    <div id="menu-overlay" class="slideDown">
        <div class="container-fluid">
            <div class="row-fluid">
                <div class="col-md-12">
                    <div id="mo-button-close">
                        <div class="line-1"></div>
                        <div class="line-2"></div>
                    </div>
                    <div class="pt80 pb80">
                        <div class="mo-nav text-center">
                            <a href="#">
                                <img class="logo" style="width:15% ; height: auto;"  src="{{ asset('assets/logos/logo.png') }}" alt="">
                            </a>
                            <div class="spacer-single"></div>
                            <!-- mainmenu begin -->
                            <ul id="mo-menu">
                                <li>
                                    Home
                                </li>
                                <li><a href="{{ route('Grundriss.index') }}">3D GRUNDRISS</a></li>
                                <li><a href="{{ route('digital_home_staing.index') }}">DIGITALES HOME STAGING</a></li>
                                <li><a href="{{ route('contact.index') }}">Kontakt</a></li>
                                <li><a href="{{ route('aboutus') }}">Über uns</a></li>
                            </ul>
                            <!-- mainmenu close -->
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

