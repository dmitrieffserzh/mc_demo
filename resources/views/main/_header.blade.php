<header class="header">
    <div class="container">
        @if(url('/'))
            {{--<div class="header__logo" onclick="location.reload();">--}}
                {{--@include('main._logo')--}}
            {{--</div>--}}
        @else
            <a href="{{ url('/') }}" class="header__logo">
                @include('main._logo')
            </a>
        @endif

        @include('main.menus.main_menu')
        <button type="button" id="button-menu" class="button-menu">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
    </div>
</header>