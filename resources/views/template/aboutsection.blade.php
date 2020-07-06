		<!-- About content -->
		<div class="about-contant">
			<div class="container">
				
				<div class="section-title">
					<h2>{!! str_replace('(', '<span>', str_replace(')', '</span>', $title -> about_title)) !!}</h2>
				</div>
				@foreach ($aboutSection as $item)
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
					@foreach ($video as $item)
					<div class="row">
						<div class="col-md-8 col-md-offset-2">
							<img src=" {{$item -> imglink}} " alt="">
							<a href=" {{$item -> videolink}} " class="video-popup">
								<i class="fa fa-play"></i>
							</a>
						</div>
					</div>
					@endforeach
				</div>
			</div>
		</div>
	</div>
	<!-- About section end -->