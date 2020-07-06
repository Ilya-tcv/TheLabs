	<!-- About section -->
	<div class="about-section">
		<div class="overlay"></div>
		<!-- card section -->
		<div class="card-section">
			<div class="container">
				<div class="row">
					<!-- single card -->
					@foreach ($about as $item)
					<div class="col-md-4 col-sm-6">
						<div class="lab-card">
							<div class="icon">
								<i class=" {{$item -> icon}} "></i>
							</div>
							<h2> {{$item -> title}} </h2>
							<p> {{$item -> text}} </p>
						</div>
					</div>
					@endforeach
				</div>
			</div>
		</div>
		<!-- card section end-->