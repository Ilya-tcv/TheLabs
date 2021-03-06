	<!-- services section -->
	<div class="services-section spad">
		<div class="container">
			<div class="section-title dark">
				<h2>{!! str_replace('(', '<span>', str_replace(')', '</span>', $title[2] -> title)) !!}</h2>
			</div>
			<div class="row">
				@foreach ($service as $item)
				<!-- single service -->
				<div class="col-md-4 col-sm-6">
					<div class="service">
						<div class="icon">
							<i class=" {{$item -> icon}} "></i>
						</div>
						<div class="service-text">
							<h2> {{$item -> title}} </h2>
							<p> {{$item -> desc}} </p>
						</div>
					</div>
				</div>
				@endforeach
			</div>
			<div class="text-center">
				<a href="" class="site-btn">Browse</a>
			</div>
		</div>
	</div>
	<!-- services section end -->