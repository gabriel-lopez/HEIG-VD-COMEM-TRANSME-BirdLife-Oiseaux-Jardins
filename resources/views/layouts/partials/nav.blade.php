<nav class="navbar navbar-expand-lg navbar-dark navbar-birdlife">
    <div class="container">
        <a class="navbar-brand" href="/">@lang('messages.title')</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">

            <ul class="navbar-nav mr-auto">
                <!-- empty -->
            </ul>

            <ul class="navbar-nav">
                <li class="nav-item {{ set_active(['birds*']) }}">
                    <a class="nav-link" href="{{ url('/birds') }}">@lang('messages.birds')</a>
                </li>

                <li class="nav-item {{ set_active(['game*']) }}">
                    <a class="nav-link" href="{{ url('/game') }}">@lang('messages.game')</a>
                </li>
            </ul>

        </div>
    </div>
</nav>
