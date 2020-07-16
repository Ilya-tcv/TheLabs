	<!-- Team Section -->
	<div class="team-section spad">
		<div class="overlay"></div>
		<div class="container">
			<div class="section-title">
				<h2>{!! str_replace('(', '<span>', str_replace(')', '</span>', $title[3]->title)) !!}</h2>
			</div>
			<div class="row">
				@foreach ($team as $item)
				<!-- single member -->
				<div class="col-sm-4">
					<div class="member">
						<img src=" {{$item -> link}} " alt="">
						<h2> {{$item -> title}} </h2>
						<h3> {{$item -> job}} </h3>
					</div>
				</div>
				@endforeach
			</div>
		</div>
	</div>
	<!-- Team Section end-->