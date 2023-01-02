@extends('layout.front.index')
@section('title')@section('title')
@endsection

@section('content')

			<!-- HEADING-BANNER START -->
			<div class="heading-banner-area overlay-bg">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="heading-banner">
								<div class="heading-banner-title">
									<h2>Categories</h2>
								</div>
								<div class="breadcumbs pb-15">
									<ul>
										<li><a href="{{ route('home') }}">Home</a></li>
										<li>Categories</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- HEADING-BANNER END -->
			<!-- PRODUCT-AREA START -->
			<div class="product-area pt-80 pb-80 product-style-2">
				<div class="container">
					<div class="row">
						<div class="col-lg-3 order-2">
						</div>
						<div class="col-lg-12 order-1">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="product-option mb-30 clearfix">
                                        <!-- Nav tabs -->
                                        <ul class="nav d-block shop-tab">
                                            <li><a href="#grid-view" data-bs-toggle="tab"><i class="zmdi zmdi-view-module"></i></a></li>
                                            <li><a class="active" href="#list-view"  data-bs-toggle="tab"><i class="zmdi zmdi-view-list"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                <!-- Widget-Search start -->
                                <aside class="widget widget-search mb-30">
                                    <form action="#">
                                        <input id="search" type="text" placeholder="Search here..." />
                                        <button type="submit">
                                            <i class="zmdi zmdi-search"></i>
                                        </button>
                                    </form>
                                </aside>
                                <!-- Widget-search end -->
                                </div>
                            </div>
							<!-- Shop-Content End -->
							<div class="shop-content mt-tab-30 mb-30 mb-lg-0">

								<!-- Tab panes -->
								<div class="tab-content">
									<div class="tab-pane" id="grid-view">
										<div class="row">
                                            <!-- Single-product start -->
                                            <div class="col-lg-4 col-md-6 category">
                                                <div class="single-product">
                                                    <div class="product-img">
                                                        <span class="pro-label new-label">new</span>
                                                        <span class="pro-price-2">$ 56.20</span>
                                                        <a href="single-product.html"><img src="{{ asset('front-end-assets/img/product/1.jpg') }}" alt="" /></a>
                                                    </div>
                                                    <div class="product-info clearfix text-center">
                                                        <div class="fix">
                                                            <h4 class="post-title"><a href="#">dummy Product name</a></h4>
                                                        </div>
                                                        <div class="product-action clearfix d-flex align-items-center justify-content-center">
                                                            <a href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
                                                            <a href="#" data-bs-toggle="modal"  data-bs-target="#productModal" title="Quick View"><i class="zmdi zmdi-zoom-in"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Single-product end -->
                                            <!-- Single-product start -->
                                            <div class="col-lg-4 col-md-6 category">
                                                <div class="single-product">
                                                    <div class="product-img">
                                                        <span class="pro-label new-label">new</span>
                                                        <span class="pro-price-2">$ 56.20</span>
                                                        <a href="single-product.html"><img src="{{ asset('front-end-assets/img/product/1.jpg') }}" alt="" /></a>
                                                    </div>
                                                    <div class="product-info clearfix text-center">
                                                        <div class="fix">
                                                            <h4 class="post-title"><a href="#">dummy Product name</a></h4>
                                                        </div>
                                                        <div class="product-action clearfix d-flex align-items-center justify-content-center">
                                                            <a href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
                                                            <a href="#" data-bs-toggle="modal"  data-bs-target="#productModal" title="Quick View"><i class="zmdi zmdi-zoom-in"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Single-product end -->
                                            <!-- Single-product start -->
                                            <div class="col-lg-4 col-md-6 category">
                                                <div class="single-product">
                                                    <div class="product-img">
                                                        <span class="pro-label new-label">new</span>
                                                        <span class="pro-price-2">$ 56.20</span>
                                                        <a href="single-product.html"><img src="{{ asset('front-end-assets/img/product/1.jpg') }}" alt="" /></a>
                                                    </div>
                                                    <div class="product-info clearfix text-center">
                                                        <div class="fix">
                                                            <h4 class="post-title"><a href="#">dummy Product name</a></h4>
                                                        </div>
                                                        <div class="product-action clearfix d-flex align-items-center justify-content-center">
                                                            <a href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
                                                            <a href="#" data-bs-toggle="modal"  data-bs-target="#productModal" title="Quick View"><i class="zmdi zmdi-zoom-in"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Single-product end -->
                                            <!-- Single-product start -->
                                            <div class="col-lg-4 col-md-6 category">
                                                <div class="single-product">
                                                    <div class="product-img">
                                                        <span class="pro-label new-label">new</span>
                                                        <span class="pro-price-2">$ 56.20</span>
                                                        <a href="single-product.html"><img src="{{ asset('front-end-assets/img/product/1.jpg') }}" alt="" /></a>
                                                    </div>
                                                    <div class="product-info clearfix text-center">
                                                        <div class="fix">
                                                            <h4 class="post-title"><a href="#">dummy Product name</a></h4>
                                                        </div>
                                                        <div class="product-action clearfix d-flex align-items-center justify-content-center">
                                                            <a href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
                                                            <a href="#" data-bs-toggle="modal"  data-bs-target="#productModal" title="Quick View"><i class="zmdi zmdi-zoom-in"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Single-product end -->
                                            <!-- Single-product start -->
                                            <div class="col-lg-4 col-md-6 category">
                                                <div class="single-product">
                                                    <div class="product-img">
                                                        <span class="pro-label new-label">new</span>
                                                        <span class="pro-price-2">$ 56.20</span>
                                                        <a href="single-product.html"><img src="{{ asset('front-end-assets/img/product/1.jpg') }}" alt="" /></a>
                                                    </div>
                                                    <div class="product-info clearfix text-center">
                                                        <div class="fix">
                                                            <h4 class="post-title"><a href="#">dummy Product name</a></h4>
                                                        </div>
                                                        <div class="product-action clearfix d-flex align-items-center justify-content-center">
                                                            <a href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
                                                            <a href="#" data-bs-toggle="modal"  data-bs-target="#productModal" title="Quick View"><i class="zmdi zmdi-zoom-in"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Single-product end -->
                                            <!-- Single-product start -->
                                            <div class="col-lg-4 col-md-6 category">
                                                <div class="single-product">
                                                    <div class="product-img">
                                                        <span class="pro-label new-label">new</span>
                                                        <span class="pro-price-2">$ 56.20</span>
                                                        <a href="single-product.html"><img src="{{ asset('front-end-assets/img/product/1.jpg') }}" alt="" /></a>
                                                    </div>
                                                    <div class="product-info clearfix text-center">
                                                        <div class="fix">
                                                            <h4 class="post-title"><a href="#">dummy Product name</a></h4>
                                                        </div>
                                                        <div class="product-action clearfix d-flex align-items-center justify-content-center">
                                                            <a href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
                                                            <a href="#" data-bs-toggle="modal"  data-bs-target="#productModal" title="Quick View"><i class="zmdi zmdi-zoom-in"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Single-product end -->
                                            <!-- Single-product start -->
                                            <div class="col-lg-4 col-md-6 category">
                                                <div class="single-product">
                                                    <div class="product-img">
                                                        <span class="pro-label new-label">new</span>
                                                        <span class="pro-price-2">$ 56.20</span>
                                                        <a href="single-product.html"><img src="{{ asset('front-end-assets/img/product/1.jpg') }}" alt="" /></a>
                                                    </div>
                                                    <div class="product-info clearfix text-center">
                                                        <div class="fix">
                                                            <h4 class="post-title"><a href="#">dummy Product name</a></h4>
                                                        </div>
                                                        <div class="product-action clearfix d-flex align-items-center justify-content-center">
                                                            <a href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
                                                            <a href="#" data-bs-toggle="modal"  data-bs-target="#productModal" title="Quick View"><i class="zmdi zmdi-zoom-in"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Single-product end -->
                                            <!-- Single-product start -->
                                            <div class="col-lg-4 col-md-6 category">
                                                <div class="single-product">
                                                    <div class="product-img">
                                                        <span class="pro-label new-label">new</span>
                                                        <span class="pro-price-2">$ 56.20</span>
                                                        <a href="single-product.html"><img src="{{ asset('front-end-assets/img/product/1.jpg') }}" alt="" /></a>
                                                    </div>
                                                    <div class="product-info clearfix text-center">
                                                        <div class="fix">
                                                            <h4 class="post-title"><a href="#">dummy Product name</a></h4>
                                                        </div>
                                                        <div class="product-action clearfix d-flex align-items-center justify-content-center">
                                                            <a href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
                                                            <a href="#" data-bs-toggle="modal"  data-bs-target="#productModal" title="Quick View"><i class="zmdi zmdi-zoom-in"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Single-product end -->
                                            <!-- Single-product start -->
                                            <div class="col-lg-4 col-md-6 category">
                                                <div class="single-product">
                                                    <div class="product-img">
                                                        <span class="pro-label new-label">new</span>
                                                        <span class="pro-price-2">$ 56.20</span>
                                                        <a href="single-product.html"><img src="{{ asset('front-end-assets/img/product/1.jpg') }}" alt="" /></a>
                                                    </div>
                                                    <div class="product-info clearfix text-center">
                                                        <div class="fix">
                                                            <h4 class="post-title"><a href="#">dummy Product name</a></h4>
                                                        </div>
                                                        <div class="product-action clearfix d-flex align-items-center justify-content-center">
                                                            <a href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
                                                            <a href="#" data-bs-toggle="modal"  data-bs-target="#productModal" title="Quick View"><i class="zmdi zmdi-zoom-in"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Single-product end -->
										</div>
									</div>
									<div class="tab-pane active" id="list-view">
										<div class="row shop-list">
											<!-- Single-product start -->
											<div class="col-lg-12 category">
												<div class="single-product clearfix">
													<div class="product-img">
														<span class="pro-label new-label">new</span>
														<span class="pro-price-2">$ 56.20</span>
														<a href="single-product.html"><img src="{{ asset('front-end-assets/img/product/1.jpg') }}" alt="" /></a>
													</div>
													<div class="product-info">
														<div class="fix">
															<h4 class="post-title floatleft"><a href="#">dummy Product name</a></h4>
														</div>
														<div class="fix mb-20">
															<span class="pro-price">$ 56.20</span>
														</div>
														<div class="product-description">
															<p>There are many variations of passages of Lorem Ipsum available, but the majority have be suffered alteration in some form, by injected humour, or randomised words which donot look even slightly believable. If you are going to use a passage of Lorem Ipsum, you neede be sure there isn't anythin  going to use a passage embarrassing.</p>
														</div>
														<div class="clearfix">
															<div class="product-action clearfix d-flex align-items-center justify-content-center">
																<a href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
																<a href="#" data-bs-toggle="modal"  data-bs-target="#productModal" title="Quick View"><i class="zmdi zmdi-zoom-in"></i></a>
															</div>
														</div>
													</div>
												</div>
											</div>
                                            <!-- Single-product end -->
											<!-- Single-product start -->
											<div class="col-lg-12 category">
												<div class="single-product clearfix">
													<div class="product-img">
														<span class="pro-label new-label">new</span>
														<span class="pro-price-2">$ 56.20</span>
														<a href="single-product.html"><img src="{{ asset('front-end-assets/img/product/1.jpg') }}" alt="" /></a>
													</div>
													<div class="product-info">
														<div class="fix">
															<h4 class="post-title floatleft"><a href="#">dummy Product name</a></h4>
														</div>
														<div class="fix mb-20">
															<span class="pro-price">$ 56.20</span>
														</div>
														<div class="product-description">
															<p>There are many variations of passages of Lorem Ipsum available, but the majority have be suffered alteration in some form, by injected humour, or randomised words which donot look even slightly believable. If you are going to use a passage of Lorem Ipsum, you neede be sure there isn't anythin  going to use a passage embarrassing.</p>
														</div>
														<div class="clearfix">
															<div class="product-action clearfix d-flex align-items-center justify-content-center">
																<a href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
																<a href="#" data-bs-toggle="modal"  data-bs-target="#productModal" title="Quick View"><i class="zmdi zmdi-zoom-in"></i></a>
															</div>
														</div>
													</div>
												</div>
											</div>
                                            <!-- Single-product end -->
											<!-- Single-product start -->
											<div class="col-lg-12 category">
												<div class="single-product clearfix">
													<div class="product-img">
														<span class="pro-label new-label">new</span>
														<span class="pro-price-2">$ 56.20</span>
														<a href="single-product.html"><img src="{{ asset('front-end-assets/img/product/1.jpg') }}" alt="" /></a>
													</div>
													<div class="product-info">
														<div class="fix">
															<h4 class="post-title floatleft"><a href="#">dummy Product name</a></h4>
														</div>
														<div class="fix mb-20">
															<span class="pro-price">$ 56.20</span>
														</div>
														<div class="product-description">
															<p>There are many variations of passages of Lorem Ipsum available, but the majority have be suffered alteration in some form, by injected humour, or randomised words which donot look even slightly believable. If you are going to use a passage of Lorem Ipsum, you neede be sure there isn't anythin  going to use a passage embarrassing.</p>
														</div>
														<div class="clearfix">
															<div class="product-action clearfix d-flex align-items-center justify-content-center">
																<a href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
																<a href="#" data-bs-toggle="modal"  data-bs-target="#productModal" title="Quick View"><i class="zmdi zmdi-zoom-in"></i></a>
															</div>
														</div>
													</div>
												</div>
											</div>
                                            <!-- Single-product end -->
											<!-- Single-product start -->
											<div class="col-lg-12 category">
												<div class="single-product clearfix">
													<div class="product-img">
														<span class="pro-label new-label">new</span>
														<span class="pro-price-2">$ 56.20</span>
														<a href="single-product.html"><img src="{{ asset('front-end-assets/img/product/1.jpg') }}" alt="" /></a>
													</div>
													<div class="product-info">
														<div class="fix">
															<h4 class="post-title floatleft"><a href="#">dummy Product name</a></h4>
														</div>
														<div class="fix mb-20">
															<span class="pro-price">$ 56.20</span>
														</div>
														<div class="product-description">
															<p>There are many variations of passages of Lorem Ipsum available, but the majority have be suffered alteration in some form, by injected humour, or randomised words which donot look even slightly believable. If you are going to use a passage of Lorem Ipsum, you neede be sure there isn't anythin  going to use a passage embarrassing.</p>
														</div>
														<div class="clearfix">
															<div class="product-action clearfix d-flex align-items-center justify-content-center">
																<a href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
																<a href="#" data-bs-toggle="modal"  data-bs-target="#productModal" title="Quick View"><i class="zmdi zmdi-zoom-in"></i></a>
															</div>
														</div>
													</div>
												</div>
											</div>
                                            <!-- Single-product end -->
											<!-- Single-product start -->
											<div class="col-lg-12 category">
												<div class="single-product clearfix">
													<div class="product-img">
														<span class="pro-label new-label">new</span>
														<span class="pro-price-2">$ 56.20</span>
														<a href="single-product.html"><img src="{{ asset('front-end-assets/img/product/1.jpg') }}" alt="" /></a>
													</div>
													<div class="product-info">
														<div class="fix">
															<h4 class="post-title floatleft"><a href="#">dummy Product name</a></h4>
														</div>
														<div class="fix mb-20">
															<span class="pro-price">$ 56.20</span>
														</div>
														<div class="product-description">
															<p>There are many variations of passages of Lorem Ipsum available, but the majority have be suffered alteration in some form, by injected humour, or randomised words which donot look even slightly believable. If you are going to use a passage of Lorem Ipsum, you neede be sure there isn't anythin  going to use a passage embarrassing.</p>
														</div>
														<div class="clearfix">
															<div class="product-action clearfix d-flex align-items-center justify-content-center">
																<a href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
																<a href="#" data-bs-toggle="modal"  data-bs-target="#productModal" title="Quick View"><i class="zmdi zmdi-zoom-in"></i></a>
															</div>
														</div>
													</div>
												</div>
											</div>
                                            <!-- Single-product end -->
											<!-- Single-product start -->
											<div class="col-lg-12 category">
												<div class="single-product clearfix">
													<div class="product-img">
														<span class="pro-label new-label">new</span>
														<span class="pro-price-2">$ 56.20</span>
														<a href="single-product.html"><img src="{{ asset('front-end-assets/img/product/1.jpg') }}" alt="" /></a>
													</div>
													<div class="product-info">
														<div class="fix">
															<h4 class="post-title floatleft"><a href="#">dummy Product name</a></h4>
														</div>
														<div class="fix mb-20">
															<span class="pro-price">$ 56.20</span>
														</div>
														<div class="product-description">
															<p>There are many variations of passages of Lorem Ipsum available, but the majority have be suffered alteration in some form, by injected humour, or randomised words which donot look even slightly believable. If you are going to use a passage of Lorem Ipsum, you neede be sure there isn't anythin  going to use a passage embarrassing.</p>
														</div>
														<div class="clearfix">
															<div class="product-action clearfix d-flex align-items-center justify-content-center">
																<a href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Wishlist"><i class="zmdi zmdi-favorite-outline"></i></a>
																<a href="#" data-bs-toggle="modal"  data-bs-target="#productModal" title="Quick View"><i class="zmdi zmdi-zoom-in"></i></a>
															</div>
														</div>
													</div>
												</div>
											</div>
                                            <!-- Single-product end -->
										</div>
									</div>
								</div>
							</div>
							<!-- Shop-Content End -->
						</div>
					</div>
				</div>
			</div>
			<!-- PRODUCT-AREA END -->
            <script type="text/javascript">
                const search = document.getElementById('search');
                search.addEventListener("input", (e)=>{
                    e.preventDefault();
                    const val = e.target.value.toLowerCase();
                    console.log(val);
                    const categories = document.querySelectorAll(".category");
                    // console.log(categories);
                    categories.forEach(category => {
                        const dot = category.querySelector('.post-title').textContent;
                        console.log(dot);
                        if(dot.toLowerCase().includes(val)){
                            category.style.display = "block";
                        }else{
                            category.style.display = "none";
                        }
                    });
                })
            </script>
@endsection
