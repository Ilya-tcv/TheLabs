	<!-- Header section -->
	<header class="header-section">
		<div class="logo">
			@foreach ($NavLogo as $item)
			<img src=" {{ $item -> link }} " alt=" {{ $item -> name }} "><!-- Logo -->
			@endforeach
		</div>
		<!-- Navigation -->
		<div class="responsive"><i class="fa fa-bars"></i></div>
		<nav>
			<ul class="menu-list">
				@foreach ($NavTitre as $item)
				<li>
					<a href="{{ $item -> link }}">{{ $item -> title }}</a>
				</li>
				@endforeach
			</ul>
		</nav>
	</header>
	<!-- Header section end -->