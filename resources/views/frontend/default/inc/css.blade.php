<!-- 3rd party -->
<link rel="stylesheet" href="{{ staticAsset('frontend/common/css/toastr.css') }}">
<!-- 3rd party -->
@if ($localLang->is_rtl == 1)
    <link rel="stylesheet" href="{{ staticAsset('frontend/default/assets/css/main-rtl.css') }}">
@else
    <link rel="stylesheet" href="{{ staticAsset('frontend/default/assets/css/main.css') }}">
@endif
<!-- 
<link rel="stylesheet" href="{{ staticAsset('frontend/common/css/select2.css') }}">
<link rel="stylesheet" href="{{ staticAsset('frontend/common/css/custom.css') }}">
<link rel="stylesheet" href="{{ staticAsset('frontend/common/css/summernote-lite.min.css') }}">
<link rel="stylesheet" href="{{ staticAsset('frontend/common/css/summernote-custom.css') }}"> -->



<link rel="stylesheet" href="{{ staticAsset('frontend/main/css/plugins.css') }}">

<!-- Main Style CSS -->
<link rel="stylesheet" href="{{ staticAsset('frontend/main/css/style.css') }}">
<link rel="stylesheet" href="{{ staticAsset('frontend/main/css/custom.css') }}">
<link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/x-mega-menu@1.4.1/dist/x-mega-menu.min.css'>
<link rel="stylesheet" href=" https://cdnjs.com/libraries/bootstrap-datetimepicker/4.17.37">
<!--modernizr min js here-->
<script src="{{ staticAsset('frontend/main/js/vendor/modernizr-3.7.1.min.js') }}"></script>


<style>
    @media (min-width: 1200px) {
        .choose-us-section::after {
            background-image: url({{ uploadedAsset(getSetting('halal_why_choose_us_large_img')) }});
        }

        .on-sale-banner {
            background-image: url({{ uploadedAsset(getSetting('halal_on_sale_banner')) }});
        }
</style>
