	<!-- Promotion section -->
	<div class="promotion-section">
		<div class="container">
			<div class="row">
				@foreach ($promotion as $item)
				<div class="col-md-9">
					<h2> {{$item -> title}} </h2>
					<p> {{$item -> desc}} </p>
				</div>
				<div class="col-md-3">
					<div class="promo-btn-area">
						<a href="/services" class="site-btn btn-2"> {{$item -> btn}} </a>
					</div>
				</div>
				@endforeach
			</div>
		</div>
	</div>
	<!-- Promotion section end-->