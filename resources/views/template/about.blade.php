	<!-- About section -->
	<div class="about-section">
	    <div class="overlay"></div>
	    <!-- card section -->
	    <div class="card-section">
	        <div class="container">
	            <div class="row">
				  {{-- SET INCREMENTATION --}}
	                @php
	                    $i = 0;
	                @endphp

				{{-- LOOP --}}
	                @foreach($service -> shuffle() as $item)
	                    <!-- single card -->
	                    <div class="col-md-4 col-sm-6">
	                        <div class="lab-card">
	                            <div class="icon">
	                                <i class=" {{ $item -> icon }} "></i>
	                            </div>
	                            <h2> {{ $item -> title }} </h2>
	                            <p> {{ $item -> desc }} </p>
	                        </div>
					</div>
					
					{{-- SET WHEN TO BREAK --}}
	                    @php
	                        if (++$i == 3) break;
	                    @endphp
	                @endforeach
	            </div>
	        </div>
	    </div>
	    <!-- card section end-->
