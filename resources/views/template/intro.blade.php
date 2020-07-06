	<!-- Intro Section -->
	<div class="hero-section">
		@foreach ($intro as $item)
		<div class="hero-content">
			<div class="hero-center">
				<img src=" {{$item -> link}} " alt="">
				<p> {{$item -> title}} </p>
			</div>
		</div>
		<!-- slider -->
		<div id="hero-slider" class="owl-carousel">
			<div class="item  hero-item" data-bg="{{$item -> slide1}}"></div>
			<div class="item  hero-item" data-bg="{{$item -> slide2}}"></div>
		</div>
		@endforeach
	</div>
	<!-- Intro Section -->