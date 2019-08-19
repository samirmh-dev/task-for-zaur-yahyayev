@extends('front/layout')

@section('content')
<section id="page-title" class="page-title-center page-title-parallax page-title-dark" style="background-image: url('{{asset('images/hotels/page-title.jpg')}}'); background-position: center center; padding: 100px 0;" data-bottom-top="background-position:0px 300px;" data-top-bottom="background-position:0px -300px;">

	<div class="container clearfix">
		<h1>{{ $hotelCount }} Hotels Found</h1>

		@isset($first)
			<span><i class="icon-map-marker"></i> {{ $first->city }}</span>
		@endisset

	</div>

</section><!-- #page-title end -->

<!-- Content
============================================= -->
<section id="content">

	<div class="content-wrap">

		<div class="container clearfix">

			<!-- Post Content
			============================================= -->
			<div class="postcontent nobottommargin col_last clearfix" style="width: 100%">

				<!-- Posts
				============================================= -->
				<div id="posts" class="small-thumbs">

					@isset($hotels)
						@foreach($hotels as $hotel)

							<div class="entry clearfix">
								<div class="row clearfix">
									<div class="col-lg-4">

										@if($hotel->images->count() > 1)
											<div class="fslider" data-pagi="false" data-lightbox="gallery">
												<div class="flexslider">
													<div class="slider-wrap">

														@foreach($hotel->images as $image)

															<div class="slide">
																<a href="{{asset('images/uploads') . '/' . $image->name }}" data-lightbox="gallery-item">
																	<img class="image_fade" src="{{asset('images/uploads') . '/' . $image->name }}" alt="{{ $hotel->name }}">
																</a>
															</div>

														@endforeach

													</div>
												</div>
											</div>
										@elseif($hotel->images)
											@foreach($hotel->images as $image)
												<a href="{{asset('images/uploads') . '/' . $image->name }}" data-lightbox="image"><img class="image_fade" src="{{asset('images/uploads') . '/' . $image->name }}" alt="{{ $hotel->name }}"></a>
											@endforeach
										@endif

									</div>
									<div class="bottommargin-sm d-block d-md-block d-lg-none"></div>
									<div class="col-lg-6 col-md-8">
										<div class="entry-c">
											<div class="entry-title">
												<h2><a href="blog-single.html">{{ $hotel->name }}</a></h2>
											</div>
											<ul class="entry-meta clearfix">
												<li>
													@for($i = 0; $i < $hotel->stars; $i++)
														<i class="icon-star3 color"></i>
													@endfor

													@for($i; $i < 5; $i++)
														<i class="icon-star-empty color"></i>
													@endfor
												</li>
												<li><i class="icon-line-map"></i><a href="#">{{ $hotel->city }}</a></li>
												<li><i class="icon-map-marker2"></i> <a href="https://maps.google.com/maps?q={{ $hotel->city . ' ' . $hotel->adress }}" data-lightbox="iframe">View map</a></li>
											</ul>
											<div class="entry-content">
												<div class="clearfix" style="margin-bottom: 10px;">
													<i class="i-rounded i-small i-bordered icon-wifi-full"  data-toggle="tooltip" data-placement="top" title="WiFi"></i>
													<i class="i-rounded i-small i-bordered icon-glass"  data-toggle="tooltip" data-placement="top" title="Bar"></i>
													<i class="i-rounded i-small i-bordered icon-line-shuffle"  data-toggle="tooltip" data-placement="top" title="Air Conditioner"></i>
													<i class="i-rounded i-small i-bordered icon-food"  data-toggle="tooltip" data-placement="top" title="Restaurant"></i>
													<i class="i-rounded i-small i-bordered noborder i-light icon-barbell"  data-toggle="tooltip" data-placement="top" title="Gym Unavailable"></i>
													<i class="i-rounded i-small i-bordered icon-bell"  data-toggle="tooltip" data-placement="top" title="Room Service"></i>
													<i class="i-rounded i-small i-bordered noborder i-light icon-coffee2"  data-toggle="tooltip" data-placement="top" title="Cafe Unavailable"></i>
												</div>
												<p class="nobottommargin">{{ $hotel->description }}</p>
											</div>
										</div>
									</div>
									<div class="col-lg-2 col-md-4 center">
										<div class="hotel-price">
											<i class="icon-dollar"></i>{{ $hotel->price }}
										</div>
										<small><em>Price per night*</em></small><br>
										<a href="#"class="button button-rounded topmargin-sm">Book Now</a>
									</div>
								</div>
							</div>

						@endforeach
						{{ $hotels->appends($filter)->links() }}
					@endisset

				</div>

			</div>

		</div>

	</div>

</section><!-- #content end -->
@endsection('content')

@section('go-to-top')
<div id="gotoTop" class="icon-angle-up"></div>
@endsection('go-to-top')

@section('script')
<script>
	$(function() {
		$('.travel-date-group').datepicker({
			autoclose: true,
			startDate: "today"
		});
	});
</script>
@endsection('script')