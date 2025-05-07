<head>
<style>
    .custom-button {
        display: inline-block;
        background-color: #b0c4de; /* Sky blue */
        color: white;
        padding: 12px 24px;
        text-transform: uppercase;
        text-decoration: none;
        border-radius: 20px; /* Curved corners */
        font-weight: bold;
        transition: background-color 0.3s ease;
    }

    .custom-button:hover {
        background-color: #
        e6e6fa; /* Slightly darker on hover */
    }
</style>
</head>
<div>
    <!-- start banner Area -->
    <section class="banner-area">
        <div class="container">
            <div class="row fullscreen align-items-center justify-content-start">
                <div class="col-lg-12">
                    <div class="active-banner-slider owl-carousel">
                        <!-- single-slide -->
                        <div class="row single-slide align-items-center d-flex">
                            <div class="col-lg-5 col-md-6">
                                <div class="banner-content">
                                    <h1>Glow  like  never  before!</h1>
                                    <div class="add-bag d-flex align-items-center">
                                        <a class="custom-button" href="/products" wire:navigate>
                                            Explore Our Products
                                         </a>
                                    </div>
                                    <!-- <div class="add-bag d-flex align-items-center">
                                        <a class="add-btn" href="/products" wire:navigate><span class="lnr lnr-cross"></span></a>
                                        <span class="add-text text-uppercase"><b style="color:white">Explore Products</b></span>
                                    </div> -->
                                </div>
                            </div>
                            
                        </div>
                        <!-- single-slide -->
                        <div class="row single-slide">
                            <div class="col-lg-5">
                                <div class="banner-content">
                                    <h1>Beauty<br>Collection!</h1>
                                    <div class="add-bag d-flex align-items-center">
                                        <a class="custom-button" href="/categories" wire:navigate>
                                            Explore Our Categories
                                         </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End banner Area -->


    <!-- Start category Area -->
    <div class="bg-categories py-20">
        <div class="max-w-xl mx-auto">
            <div class="text-center ">
                <div class="relative flex flex-col items-center">
                    <h1 class="text-4xl font-bold dark:text-gray-200"> Browse Categories
                </h1>
                    <div class="flex w-40 mt-2 mb-6 overflow-hidden rounded">
                        <div class="flex-1 h-2 bg-purple-200">
                        </div>
                        <div class="flex-1 h-2 bg-purple-300">
                        </div>
                        <div class="flex-1 h-2 bg-purple-500">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="max-w-[85rem] px-4 sm:px-6 lg:px-8 mx-auto">
            <div class="grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-3 sm:gap-6 ">

                @foreach($categories as $category)

                <a class="group  flex flex-col hover:shadow-md hover:-translate-y-1 transition-colors  transition-transform transform duration-300 bg-white border shadow-sm rounded-xl hover:shadow-md transition dark:bg-slate-900 dark:border-gray-800 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600" href="/products?selected_categories[0]={{$category->id}}" wire:key="{{$category->id}}" wire:navigate>
                    <div class="  hover:bg-purple-100 hover:rounded-xl p-4 md:p-5 transition-all duration-300">
                        <div class="flex justify-between items-center">
                            <div class="flex items-center">
                                <img class="h-[2.375rem] w-[2.375rem] rounded-full" src="{{url('storage', $category->image)}}" alt="{{$category->name}}">
                                <div class="ms-3">
                                    <h3 class="group-hover:text-purple-600 font-semibold text-gray-800 dark:group-hover:text-gray-400 dark:text-gray-200">
                                        {{$category->name}}
                                    </h3>
                                </div>
                            </div>
                            <div class="ps-3">
                                <svg class="flex-shrink-0 w-5 h-5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="m9 18 6-6-6-6" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </a>

                @endforeach
            </div>
        </div>

    </div>
    <!-- End category Area -->

    <!--Start Brand Area -->
    <section class="py-5 bg-brands">
        <div class="max-w-xl mx-auto">
            <div class="text-center ">
                <div class="relative flex flex-col items-center">
                    <h1 class="text-4xl font-bold dark:text-gray-200"> Browse Popular Brands
                        </h1>
                    <div class="flex w-40 mt-2 mb-6 overflow-hidden rounded">
                        <div class="flex-1 h-2 bg-purple-200">
                        </div>
                        <div class="flex-1 h-2 bg-purple-300">
                        </div>
                        <div class="flex-1 h-2 bg-purple-500">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="justify-center max-w-6xl px-4 py-3 mx-auto lg:py-0">
            <div class="grid grid-cols-1 gap-6 lg:grid-cols-4 md:grid-cols-2">
                @foreach($brands as $brand)
                <div class="bg-white rounded-lg shadow-md" wire:key="{{$brand->id}}">
                    <a href="/products?selected_brands[0]={{$brand->id}}" class="h-screen" wire:navigate>
                        <img src="{{url('storage', $brand->image)}}" alt="{{$brand->name}}" class="object-cover w-full h-64 rounded-t-lg object-scale-down max-h-full m-auto px-1">
                    </a>
                    <div class="p-5 text-center">
                        <a href="" class="text-2xl font-bold tracking-tight text-gray-900 hover:text-purple-600 dark:text-gray-300">
                            {{$brand->name}}
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!--End Brand Area -->

    <!-- start features Area -->
    <section class="features-area section_gap bg-categories">
        <div class="container bg-purple-100">
        <div class="row features-inner">
				<!-- single features -->
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="single-features">
						<div class="f-icon px-10">
							<img class="px-20" src="{{asset('home-page-assets/img/features/f-icon1.png')}}" alt="Free Delivery">
						</div>
						<h6>Free Delivery</h6>
						<p>Free Shipping on all order</p>
					</div>
				</div>
				<!-- single features -->
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="single-features">
						<div class="f-icon px-10">
							<img class="px-20" src="{{asset('home-page-assets/img/features/f-icon2.png')}}" alt="Return Policy">
						</div>
						<h6>Return Policy</h6>
						<p>Free Shipping on all order</p>
					</div>
				</div>
				<!-- single features -->
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="single-features">
						<div class="f-icon px-10">
							<img class="px-20" src="{{asset('home-page-assets/img/features/f-icon3.png')}}" alt="24 Hour Support">
						</div>
						<h6>24/7 Support</h6>
						<p>Free Shipping on all order</p>
					</div>
				</div>
				<!-- single features -->
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="single-features">
						<div class="f-icon px-10">
							<img class="px-20" src="{{asset('home-page-assets/img/features/f-icon4.png')}}" alt="Secure Patment">
						</div>
						<h6>Secure Payment</h6>
						<p>Free Shipping on all order</p>
					</div>
				</div>
			</div>
        </div>
    </section>
    <!-- end features Area -->

</div>