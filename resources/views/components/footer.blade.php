@php
    $footerEl = 
    [
        [
            'title'=> 'DC Comics',
            'elements'=> [
                'Characthers', 'Comics', 'TV', 'Games', 'Videos', 'News'
            ]
        ],

        [
            'title'=> 'Shop',
            'elements'=> [
                'Shop DC', 'Shop DC Collectibles'
            ]
        ],

        [
            'title'=> 'DC',
            'elements'=> [
                'Terms of Use', 'Privacy policy (New)', 'Advertising', 'Jobs', 'Subscriptions', 'Talent Workshops', 'CPSC Certificates', 'Ratings', 'Shop Help', 'Contact US'
            ]
        ],

        [
            'title'=> 'Sites',
            'elements'=> [
                'DC', 'MAD Magazine', 'DC Kids', 'DC Universe', 'DC Power Visa'
            ]
        ]
    ];

    $imgSrc = ['/resources/img/footer-facebook.png', '/resources/img/footer-twitter.png', '/resources/img/footer-youtube.png', '/resources/img/footer-pinterest.png', '/resources/img/footer-periscope.png'];
@endphp

<section class="footer-top">
    <div class="container">
        <div class="left-col">
            @foreach ($footerEl as $list)
                <ul>
                    <strong>{{ $list['title'] }}</strong>

                    @foreach ($list['elements'] as $element)
                        <li v-for="element in list.elements">
                            <a href="">
                                {{ $element }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            @endforeach
        </div>
    </div>
</section>

<footer>
    <div class="container">
        <button>
            SIGN-UP NOW!
        </button>

        <div>
            <strong>FOLLOW US</strong>

            @foreach ($imgSrc as $img)
                <a href="#">
                    <img src={{ Vite::asset($img) }} alt="social">
                </a>
            @endforeach
        </div>
    </div>
</footer>