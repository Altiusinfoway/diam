<section class="offer-banner-section">
    <div class="container-fluid">
        <div class="row">
        @foreach ($banner_section_one_banners as $index => $banner)
            <div class="{{ $index === 0 ? 'col-xl-12' : 'col-xl-6' }}">
                <div class="offer-banner-img">
                    <img src="{{ uploadedAsset($banner->image) }}" alt="">
                    <div class="offer-banner-title-section">
                        <h4>Cleopatra Glam</h4>
                        <p>Introducing our new mesmerizing jewelry collection. </p>
                        <a href{{ $banner->link }}">SHOP NOW</a>
                    </div>
                </div>
            </div>
            
            @endforeach
            
        </div>
</section>