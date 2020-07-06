		<!-- About content -->
		<div class="about-contant">
			<div class="container">
				@foreach ($aboutSection as $item)
				    
				<div class="section-title">
					<h2> {{$item -> title}} </h2>
				</div>
				<div class="row">
					<div class="col-md-6">
						<p> {{$item -> desc1}} </p>
					</div>
					<div class="col-md-6">
						<p> {{$item -> desc2}} </p>
					</div>
				</div>
				<div class="text-center mt60">
					<a href=" {{$item ->btnlink}} " class="site-btn"> {{$item -> btn}} </a>
				</div>
				@endforeach
				<!-- popup video -->
				<div class="intro-video">
					<div class="row">
						<div class="col-md-8 col-md-offset-2">
							<img src="img/video.jpg" alt="">
							<a href="https://www.youtube.com/watch?v=JgHfx2v9zOU" class="video-popup">
								<i class="fa fa-play"></i>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- About section end -->