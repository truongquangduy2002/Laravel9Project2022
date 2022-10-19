@php
    $brands = App\Models\Brand::orderBy('brand_name', 'ASC')->limit(10)->get();
    $categories = App\Models\Category::orderBy('category_name', 'ASC')->get();
@endphp

<section class="banners mb-25">
    <div class="container">
        <div class="section-title">
            <div class="slider-arrow slider-arrow-2 flex-right carausel-10-columns-arrow" id="carausel-10-columns-arrows">
            </div>
        </div>
        <div class="row">

            @foreach($brands as $brand)
            <div class="col-lg-2 col-md-6 text-center">
                <div class="banner-img wow animate__ animate__fadeInUp animated" data-wow-delay="0"
                    style="visibility: visible; animation-name: fadeInUp;">
                    <a href="#">{{ $brand->brand_name}}</a>
                    <a href="#"><img src="{{ asset($brand->brand_image ) }}" alt="" width="80px" height="40px"></a>
                    <div class="banner-text">                 
                        
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</section>
