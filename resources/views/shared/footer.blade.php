<footer>
    <div class="container">
        <div class="content">
            @foreach ($itemsFooter as $item)
                <div class="list">
                    <h3>{{ $item['title'] }}</h3>
                    <ul>
                        @foreach ($item['listContent'] as $itemContent)
                            <li> <a href="">{{ $itemContent['text'] }}</a> </li>
                        @endforeach
                    </ul>
                </div>
            @endforeach
        </div>
        <div>
            <img src="../../assets/img/dc-logo-bg.png" alt="">
        </div>
</footer>
