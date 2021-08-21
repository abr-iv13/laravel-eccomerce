<!-- ::::::  Start Large Header Section  ::::::  -->
<div class="header header--1">
    <!-- Start Header Top area -->
    @include('site.layouts.headers.header-top')
    <!-- Start Header Top area -->

    <!-- Start Header Middle area -->
    @include('site.layouts.headers.header-middle')
    <!-- End Header Middle area -->

    <!-- Start Header Menu Area -->
    @include('site.layouts.headers.header-menu')
    <!-- End Header Menu Area -->
</div>
<!-- ::::::  End Large Header Section  ::::::  -->

<!-- ::::::  Start Mobile Header Section  ::::::  -->
@include('site.layouts.headers.mobile-header')
<!-- ::::::  Start Mobile Header Section  ::::::  -->

<!-- ::::::  Start Mobile-offcanvas Menu Section  ::::::  -->
@include('site.layouts.mobile-offcanvas-menu')
<!-- ::::::  End Mobile-offcanvas Menu Section  ::::::  -->

<!-- ::::::  Start Popup Add Cart ::::::  -->
@include('site.layouts.popup-add-cart')
<!-- :::::: End Popup Add Cart :::::: -->

<div class="offcanvas-overlay"></div>
<!-- ::::::  End  Header Section  ::::::  -->
