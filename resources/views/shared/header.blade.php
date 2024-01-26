<header>

    <div class="navbar-header">
        <div class="logo">
            <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="">
        </div>
        <div class="list">
            <ul>
                @foreach ($itemsHeader as $item)
                    <li>
                        <a href="">{{ $item['title'] }}</a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</header>
