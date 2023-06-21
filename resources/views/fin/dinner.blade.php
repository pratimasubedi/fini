
@extends('home-master')
@section('content')

<div class="container-fluid dinner-section pad-tb">
	<div class="container">
		<div class="dinner-wrapper">
             <div class="dinner-title text-center">
				<h3>Dinner Menu</h3>
			
			</div>

			<div class="row">
				<div class="col-md-4">
					<div class="dinner-col">
						<div class="dinner-content">
							<h3>SOUPS</h3>

							<a href="{{url('soup-detail')}}" class="btn btn-dinnerread">View More</a>
						</div>
						<img src="public/images/soup.jpg">
					</div>
				</div>

				<div class="col-md-4">
					<div class="dinner-col">
						<div class="dinner-content">
							<h3>SALAD</h3>

							<a href="{{url('salad-detail')}}" class="btn btn-dinnerread">View More</a>
						</div>
						<img src="public/images/salad.jpg"/>
					</div>
				</div>

				<div class="col-md-4">
					<div class="dinner-col">
						<div class="dinner-content">
							<h3>MENU FOR CHILDREN</h3>

							<a href="{{url('childrenmenu-detail')}}" class="btn btn-dinnerread">View More</a>
						</div>
						<img src="public/images/chowmine.jpg"/>
					</div>
				</div>
				<div class="col-md-4">
					<div class="dinner-col">
						<div class="dinner-content">
							<h3>VEGETARIAN DISHES</h3>

							<a href="{{url('vegdishes-detail')}}" class="btn btn-dinnerread">View More</a>
						</div>
						<img src="public/images/veg.jpg"/>
					</div>
				</div>
				<div class="col-md-4">
					<div class="dinner-col">
						<div class="dinner-content">
							<h3>CHICKEN DISHES</h3>

							<a href="{{url('chickendishes-detail')}}" class="btn btn-dinnerread">View More</a>
						</div>
						<img src="public/images/chicken.jpg"/>
					</div>
				</div>
				<div class="col-md-4">
					<div class="dinner-col">
						<div class="dinner-content">
							<h3>LAMB DISHES</h3>
                        <a href="{{url('lambdishes-detail')}}" class="btn btn-dinnerread">View More</a>
						</div>
						<img src="public/images/lamb.jpg"/>
					</div>
				</div>
				<div class="col-md-4">
					<div class="dinner-col">
						<div class="dinner-content">
							<h3>TANDOOR CLAY DISHES</h3>
                     <a href="{{url('tandooridishes-detail')}}" class="btn btn-dinnerread">View More</a>
						</div>
						<img src="public/images/tanduri.jpg"/>
					</div>
				</div>
				<div class="col-md-4">
					<div class="dinner-col">
						<div class="dinner-content">
							<h3>SEAFOOD</h3>

							<a href="{{url('seafood-detail')}}" class="btn btn-dinnerread">View More</a>
						</div>
						<img src="public/images/sea.jpg"/>
					</div>
				</div>
				<div class="col-md-4">
					<div class="dinner-col">
						<div class="dinner-content">
							<h3>PORK DISHES </h3>
                        <a href="{{url('porkdishes-detail')}}" class="btn btn-dinnerread">View More</a>
						</div>
						<img src="public/images/p1.jpg"/>
					</div>
				</div>
				<div class="col-md-4">
					<div class="dinner-col">
						<div class="dinner-content">
							<h3>DESSERTS </h3>

							<a href="{{url('desserts-detail')}}" class="btn btn-dinnerread">View More</a>
						</div>
						<img src="public/images/ice.jpg"/>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection