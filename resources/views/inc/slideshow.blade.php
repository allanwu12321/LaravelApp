<!--Carousel Wrapper-->
<div id="carousel-example-2" class="carousel slide carousel-fade" data-ride="carousel">
    <!--Indicators-->
    <ol class="carousel-indicators">
        <li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-2" data-slide-to="1"></li>
        <li data-target="#carousel-example-2" data-slide-to="2"></li>
    </ol>
    <!--/.Indicators-->
    <!--Slides-->
    <div class="carousel-inner" role="listbox">
        <div class="carousel-item active">
            <div class="view">
                <img class="d-block w-100" src="/storage/slideshow_images/Laravel_One.png"
                alt="First slide">
                <div class="mask rgba-black-light"></div>
            </div>
            {{-- <div class="carousel-caption">
                <h3 class="h3-responsive">Light mask</h3>
                <h4>First text</h4>
            </div> --}}
        </div>
        <div class="carousel-item">
            <!--Mask color-->
            <div class="view">
                <img class="d-block w-100" src="/storage/slideshow_images/Laravel_Two.jpeg"
                alt="Second slide">
                <div class="mask rgba-black-strong"></div>
            </div>
            {{-- <div class="carousel-caption">
                <h3 class="h3-responsive">Strong mask</h3>
                <h4>Secondary text</h4>
            </div> --}}
        </div>
        <div class="carousel-item">
        <!--Mask color-->
            <div class="view">
                <img class="d-block w-100" src="/storage/slideshow_images/Laravel_Three.png"
                alt="Third slide">
                <div class="mask rgba-black-slight"></div>
            </div>
            {{-- <div class="carousel-caption">
                <h3 class="h3-responsive">Slight mask</h3>
                <h4>Third text</h4>
            </div> --}}
        </div>
    </div>
    <!--/.Slides-->
    <!--Controls-->
    <a class="carousel-control-prev" href="#carousel-example-2" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carousel-example-2" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
    <!--/.Controls-->
</div>
<!--/.Carousel Wrapper-->