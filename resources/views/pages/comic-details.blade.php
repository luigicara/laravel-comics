@extends('layouts.main-layout')

@section('head')
    <title>Comic - Details</title>
@endsection

@section('content')
<div id="info_comic">

    <div id="plot">
        <div class="plot_left">
            <h2>
                ACTION COMICS #1000: THE DELUXE EDITION
            </h2>
            <div class="my_price">
                <div>
                    U.S. Price <span>$19.99</span>
                </div>
                <div class="my_availabile">
                    <div class="my_availabile-left">
                        AVAILABLE
                    </div>
                    <span class="my_availabile-right">
                        check Availability
                    </span>
                </div>
            </div>
            <p>
                The celebration of 1,000 Issues or Action Comics continues with a new, Deluxe Edition or the comic that won raves when it hit comics shops in April! This hardcover includes all the stories fromthatIssue, DIus the tale LevI an artst1s that appeared in the Actioncomics. o rears Ur supermanars, design sketches by ImLee tor subermans ne lo, scripts for the storles, the original art Trom the lost story turInby Curt Swan and more! Plus: a complete reprint of the stories that started it all-the Supermarstories Action Comics #1 and 2 from 1938!
            </p>
        </div>
        <div class="plot_right">
            <h4>ADVERTISEMENT</h4>
            <img src={{ Vite::asset('/resources/img/adv.jpg') }} alt="">
        </div>
    </div>
    <div class="about_comic">
        <div class="my_container">
            <div class="my_artists">
                <h4>Talent</h4>
                <div class="my_artist">
                    Art by: 
                    <div>

                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus, ea animi. Cupiditate ducimus, aspernatur at inventore in ab id, excepturi,
                    </div>
                </div>
                <div class="my_artist">
                    Written by: 
                    <div>

                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus, ea animi. Cupiditate ducimus, aspernatur at inventore in ab id, excepturi,
                    </div>
                </div>
            </div>
            <div class="my_specs">
                <h4>Specs</h4>
                <div class="my_spec">
                    Series: 
                    <div class="my_series">

                        ACTION COMICS
                    </div>
                </div>
                <div class="my_spec">
                    U.S. price: 
                    <div>

                        $ 19.99
                    </div>
                </div>
                <div class="my_spec">
                    On Sale Date: 
                    <div>

                        Oct 02,20218
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection