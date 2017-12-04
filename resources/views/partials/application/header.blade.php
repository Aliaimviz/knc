<div id="social-header">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <ul>
                    <li><a href="#"><img src="{{ asset('application/images/social-be.png') }}"></a></li>
                    <li><a href="#"><img src="{{ asset('application/images/social-fb.png') }}"></a></li>
                    <li><a href="#"><img src="{{ asset('application/images/social-ig.png') }}"></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>

<header>
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="site-logo">
                    <img src="{{ asset('application/images/logo.png') }}">
                </div>
                <div class="site-menu-r">
                    <ul>
                        <li class="active"><a href="{{route('page', ['pageSlug' => 'home'])}}">Home</a></li>
                        <li><a href="{{route('page', ['pageSlug' => 'about'])}}">About</a></li>
                        <li><a href="#">The Workroom</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="{{route('page', ['pageSlug' => 'contact'])}}">Contact</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>