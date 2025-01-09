<section class="best-seller cm-second-bg">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-3">
                <div class="best-seller-banner" style="background-image: url({{ uploadedAsset(getSetting('best_deal_banner')) }});">
                    <!-- <img src="" alt=""> -->
                    <div class="best-seller-banner-title">
                        <h3>Seasonal Sale</h3>
                        <a href="">SHOP NOW</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-9">
                <div class="row align-items-end">
                    <div class="col-6 text-center">
                        <div class="best-seller-title">
                            <h2>Best Seller</h2>
                            <p>Take a look at our best selling products that we have
                                provided for your beauty and jewelry needs.</p>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="best-seller-right">
                            <div class="slider-search">
                                <input type="text" id="slider-search" />
                                <i class="ion-ios-search-strong"></i>
                            </div>
                            <div class="slide-count">
                                <span id="current-slide">1</span> / <span id="total-slides">4</span>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- product_row2 -->
                <div class="row cm-product_row2">
                @php
                    $weekly_best_deals = getSetting('weekly_best_deals') != null ? json_decode(getSetting('weekly_best_deals')) : [];
                    $products = \App\Models\Product::whereIn('id', $weekly_best_deals)->get();
                @endphp
                @foreach ($products as $product)
                    <div class="best-seller-single">
                        <div class="best-seller-img">
                        @include(
                                    'frontend.default.pages.partials.products.horizontal-product-card',
                                    [
                                        'product' => $product,
                                    ]
                                )
                        </div>

                        <div class="best-seller-product-title">
                            <h2>Silver Diamond Earring</h2>
                            <span>₹25,058</span>
                        </div>
                    </div>
                @endforeach
                </div>
            </div>
        </div>
    </div>
</section>