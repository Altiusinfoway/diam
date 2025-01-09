<section class="product_section p_bottom p_section1 cm-second-bg">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <div class="section_title">
                    <h2>Select Your Shape</h2>
                </div>
            </div>
            <div class="col-12">
                <div class="product_area ">
                    <div class="product_container bottom">
                        <div class="custom-row product_row1">
                        @php
                            $top_category_ids = getSetting('top_category_ids') != null ? json_decode(getSetting('top_category_ids')) : [];
                            $categories = \App\Models\Category::whereIn('id', $top_category_ids)->get();
                        @endphp

                        @foreach ($categories as $category)
                            @php
                                $productsCount = \App\Models\ProductCategory::where('category_id', $category->id)->count();
                            @endphp

                            <div class="custom-col-5">
                                <div class="single_product">
                                    <div class="product_thumb">
                                        <a class="primary_img" href="#"><img src="{{ uploadedAsset($category->collectLocalization('thumbnail_image')) }}" alt=""></a>
                                    </div>
                                    <div class="product_content">
                                        <h3><a href="{{ route('products.index') }}?&category_id={{ $category->id }}">{{ $category->collectLocalization('name') }}</a></h3>
                                    </div>
                                </div>
                            </div>

                        @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

