@php

    $navItems = ['CHARACTHERS', 'COMICS', 'MOVIES', 'TV', 'GAMES', 'COLLECTIBLES', 'VIDEOS', 'FANS', 'NEWS', 'SHOP'];
@endphp



<div class="container">
    <header>
        <img src={{ Vite::asset('/resources/img/dc-logo.png') }} alt="logo">
    
        <nav>  
            <ul>
                @php
                    foreach ($navItems as $item)
                        echo '<li><a href="">'
                            . $item
                            . "</a></li>"
                @endphp
            </ul>
        </nav>

    </header>
</div>

<section class="jumbotron">
    <img src= {{ Vite::asset('/resources/img/jumbotron.jpg') }}   alt="jumbotron">
</section>

