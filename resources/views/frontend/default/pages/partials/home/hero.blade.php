    <div class="slider_area owl-carousel">
    @foreach ($sliders as $slider) 
        <div class="single_slider cm-h-100vh" data-bgimg="{{ uploadedAsset($slider->image) }}">
            <div class="container">
                <!-- <div class="row align-items-center">
                    <div class="col-12">
                        <div class="slider_content">
                            <p>exclusive offer -10% off this week</p>
                            <h1>jewelry arrivals</h1>
                            <p class="slider_price">starting at <span>$2.199.oo</span></p>
                            <a class="button" href="shop.html">shopping now</a>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
        @endforeach
    </div>
