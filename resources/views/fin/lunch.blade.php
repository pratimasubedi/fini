@extends('home-master')
@section('content')

<div class="container-fluid lunch-section">
	<div class="container">
		<div class="panel-group" id="accordion1">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h5 class="panel-title">
					<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#accordion1_1">Monday</a>
					</h5>
				</div>
				<div id="accordion1_1" class="panel-collapse collapse in">
					<div class="panel-body">
						<h1>Lunch – Monday</h1>
						<p><strong>1. Chana Tofu Masala (G, L) <img  class="img-fluid"src="{{url('public/images/chill.jpg')}}"></strong></p>
						<p>Kikherneitä ja tofua tulisessa masalakastikkessa</p>
						<p><strong>2. Malai Kofta 9,00€(G)</strong></p>
						<p>Pehmeät kasvispyörykät (cashewpähkinää,
						<br>tuorejuustoa, perunaa) tomaatti-voi-kermakastikkeessa</p>
						<p><strong>3. Mango Chicken (G) 9,30€</strong></p>
						<p>Broilerin rintafilee ja mango tomaatti-voi-kermakastikkeessa</p>
						<p><strong>4. Lamb Kebab (G, L)<img  class="img-fluid"src="{{url('public/images/chill.jpg')}}"><img  class="img-fluid"src="{{url('public/images/chill.jpg')}}"> 9,50€</strong></p>
						<p>Tandooriuunissa grillattua lampaan jauhelihaa
						<br>tomaatti-chilikastikkeessa</p>
						<p><strong>5. Shrimps Chilli (G, L)<img  class="img-fluid"src="{{url('public/images/chill.jpg')}}"><img  class="img-fluid"src="{{url('public/images/chill.jpg')}}"> 9,50€</strong></p>
						<p>
						Katkarapuja, paprikaa, sipulia, tomaattia, kumina-chilli kastikkeessa</p>
						<p><strong>6. Mix-special 10,40€</strong>Voit valita kaksi eri ruokaa yllä olevalta listalta<br>
						samaan annokseen</p>
						<p><strong>7. Päivän Erikois – Kathmandu Hot Mix (G) 12€</strong><img  class="img-fluid"src="{{url('public/images/chill.jpg')}}"></p>
						<p>Tandooriuunissa grillattua lampaan-sisäfilepaloja, kanaa,
							jättikatkarapu, tuorejuustoa</p>
						
					</div>
				</div>
			</div>
			<div class="panel panel-default">
				<div class="panel-heading">
					<h5 class="panel-title">
					<a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion1" href="#accordion1_2">Tuesday</a>
					</h5>
				</div>
				<div id="accordion1_2" class="panel-collapse collapse">
					<div class="panel-body">
						
						<h1>Lunch – Tuesday</h1>
						<p><strong>1. Saag Tofu (L, G) 8,50€</strong></p>
						<p>Tofua ja pinaattia tomatti-valkosipuli-voi-kermakastikkeessa</p>
						<p><strong>2. Veg Kofta (G,L) 9,00€</strong></p>
						<p>Kasvispyörykät (kukkakaalia, perunaa, tuorejuustoa)
						<br>kerma-currykastikkeessa</p>
						<p><strong>3. Butter Chicken 9,30€</strong></p>
						<p>Tandooriuunissa paistettua broilerin filepaloja,tomaatti-voi-kermakastikkeessa</p>
						<p><strong>4. Lamb Curry (G, L)<img  class="img-fluid"src="{{url('public/images/chill.jpg')}}"> 9,50€</strong></p>
						<p>Lammasta, valkosipuli-inkivääri-kumina- currykastikkeessa</p>
						<p><strong>5. Fish Chili (G, L)<img  class="img-fluid"src="{{url('public/images/chill.jpg')}}"><img  class="img-fluid"src="{{url('public/images/chill.jpg')}}"><img  class="img-fluid"src="{{url('public/images/chill.jpg')}}"> 9,50€</strong></p>
						<p>Paistettua pangasius filettä, paprikaa, sipulia,tomaatti-kumina-soija-chillikastikkeessa</p>
						<p><strong>6. Mix-special 10,40€</strong>Voit valita kaksi eri ruokaa yllä olevalta listalta<br>
						samaan annokseen</p>
						<p><strong>7. Päivän Erikois – Chicken Tikka Masala (G) 12,00€</strong><img  class="img-fluid"src="{{url('public/images/chill.jpg')}}"></p>
						<p>Jogurtissa marinoituja tandooriuunissa grillattuja broilerin rintafileitä, sipuli-tomaatti-kumina kastikkeessa</p>
						
					</div>
				</div>
			</div>
			<div class="panel panel-default">
				<div class="panel-heading">
					<h5 class="panel-title">
					<a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion1" href="#accordion1_3">Wednesday</a>
					</h5>
				</div>
				<div id="accordion1_3" class="panel-collapse collapse">
					<div class="panel-body">
						
						<h1>Lunch – Wednesday</h1>
						<p><strong>1. Tofu Masala (G,L)<img  class="img-fluid"src="{{url('public/images/chill.jpg')}}">8,50€</strong></p>
						<p>Tofua, tomaattia ja inkivääriä curry masalakastikkeessa</p>
						<p><strong>2. Palak Paneer (G) 9,00€</strong></p>
						<p>Tuorejuustoa inkivääri-curry- pinatti-voi-kermakastikkessa</p>
						<p><strong>3. Chicken Chili (G, L)<img  class="img-fluid"src="{{url('public/images/chill.jpg')}}"><img  class="img-fluid"src="{{url('public/images/chill.jpg')}}"><img  class="img-fluid"src="{{url('public/images/chill.jpg')}}"> 9,30€</strong></p>
						<p>Broilerin rintafileitä, sipulia ja paprikaa vahvassa tomaatti- valkosipuli-chilli-soijakastikkessa</p>
						<p><strong>4.Lamb Butter Masala (G)<img  class="img-fluid"src="{{url('public/images/chill.jpg')}}"> 9,50€</strong></p>
						<p>Lampaan fileitä tomaatti-voi-kerma-masalakastikkeessa</p>
						<p><strong>5. Shrimp Korma (G, L) 9,50€</strong></p>
						<p>Katkarapuja, tomaatti-kookos-currykermakastikkeessa</p>
						<p><strong>6. Mix-Special Lunch 10,40€</strong>Voit valita kaksi eri ruokaa yllä olevalta listalta<br>
						samaan annokseen</p>
						<p><strong>7. Päivän Erikois – Chicken Special Karai (G) 12,00€</strong><img  class="img-fluid"src="{{url('public/images/chill.jpg')}}"></p>
						<p>Tandooriuunissa grillattuja kanan rintapaloja sekä tuorejuustoa paprika-tomatti-sipuli- inkivääri-cashew pähkinäkastikkeessa</p>
						
					</div>
				</div>
			</div>
			<div class="panel panel-default">
				<div class="panel-heading">
					<h5 class="panel-title">
					<a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion1" href="#accordion1_4">Thursday</a>
					</h5>
				</div>
				<div id="accordion1_4" class="panel-collapse collapse">
					<div class="panel-body">
						<h1>Lunch – Wednesday</h1>
						<p><strong>1. Tofu Curry (L, G)<img  class="img-fluid"src="{{url('public/images/chill.jpg')}}">8,50€</strong></p>
						<p>Tofua tomaatti-currykastikkeessa.</p>
						<p><strong>2. Saag Kofta (G, L) 9,00€</strong></p>
						<p>Kasvispyörykät (kukkakaalia, perunaa, tuorejuustoa) pinaatti- kerma-currykastikkeessa</p>
						<p><strong>3. Butter Chicken (G) 9,30€</strong></p>
						<p>Tandooriuunissa paistettua broilerin filepaloja, tomaatti-voi-kermakastikkeessa</p>
						<p><strong>Mutton Chilli (G, L) <img  class="img-fluid"src="{{url('public/images/chill.jpg')}}"><img  class="img-fluid"src="{{url('public/images/chill.jpg')}}"><img  class="img-fluid"src="{{url('public/images/chill.jpg')}}"> 9,50€</strong></p>
						<p>Lampaanfilettä ja paprika, sipuli, tomaatti,kumina-soija-chillikastikkeessa</p>
						<p><strong>5. Fish Masala (G, L)<img  class="img-fluid"src="{{url('public/images/chill.jpg')}}"> 9,50€</strong></p>
						<p>Paistettua pangasius filettä, tomaatti,inkivääri,curry ja masalakastikkeessa</p>
						<p><strong>6. Mix-Special Lunch 10,40€</strong>Voit valita kaksi eri ruokaa yllä olevalta listalta<br>
						samaan annokseen</p>
						<p><strong>7. Päivän Erikois – Chicken Special Karai (G) 12,00€</strong><img  class="img-fluid"src="{{url('public/images/chill.jpg')}}"></p>
						<p>Yrtti-jogurttimarinoituja tandoorissa grillattuja broilerin rintafileitä tomaatti-jogurtikastikkeessa</p>
					</div>
				</div>
			</div>
			<div class="panel panel-default">
				<div class="panel-heading">
					<h5 class="panel-title">
					<a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion1" href="#accordion1_5">Friday</a>
					</h5>
				</div>
				<div id="accordion1_5" class="panel-collapse collapse">
					<div class="panel-body">
						<h1>Lunch – Friday</h1>
						<p><strong>1. Tofu Chili (G, L)<img  class="img-fluid"src="{{url('public/images/chill.jpg')}}"><img  class="img-fluid"src="{{url('public/images/chill.jpg')}}">8,50€</strong></p>
						<p>Tofua ja paprika, sipuli, tomaatti, kumina-soija-chilli kastikkeessa</p>
						<p><strong>2. Shahi Paneer (G) 9,00€</strong></p>
						<p>Tuorejuustoa tomatti-voi-kermakastikkessa</p>
						<p><strong>3. Garlic Chicken (G)<img  class="img-fluid"src="{{url('public/images/chill.jpg')}}"><img  class="img-fluid"src="{{url('public/images/chill.jpg')}}"> 9,30€</strong></p>
						<p>Broilerin rintafileet valkosipuli-sipuli currykastikkeessa</p>
						<p><strong>4. Lamb Korma (L,G) 9,50€</strong></p>
						<p>Lammasta, tomaatti-kookos-curry-kermakastikkeessa</p>
						<p><strong>5. Shrimps Butter Masala (G)<img  class="img-fluid"src="{{url('public/images/chill.jpg')}}"> 9,50€</strong></p>
						<p>Katkarapuja, tomaatti-kerma-masalakastikkeessa</p>
						<p><strong>6. Mix-special Lunch 10,40€</strong>Voit valita kaksi eri ruokaa yllä olevalta listalta<br>
						samaan annokseen</p>
						<p><strong>7. Päivän Erikois – Kathmandu Special Karai (G) 12,00€</strong></p>
						<p>Tandoorissa paistettu broilerin filee, tuorejuusto, hunaja ja cashew tomaatti-voi-kermakastikkeessa</p>
					</div>
				</div>
			</div>
			<div class="panel panel-default">
				<div class="panel-heading">
					<h5 class="panel-title">
					<a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion1" href="#accordion1_6">saturday</a>
					</h5>
				</div>
				<div id="accordion1_6" class="panel-collapse collapse">
					<div class="panel-body">
						<h1>Lunch-Saturday</h1>
						<p><strong>1. Tofu Chili (G, L)<img  class="img-fluid"src="{{url('public/images/chill.jpg')}}"><img  class="img-fluid"src="{{url('public/images/chill.jpg')}}">8,50€</strong></p>
						<p>Tofua ja paprika, sipuli, tomaatti, kumina-soija-chilli kastikkeessa</p>
						<p><strong>2. Shahi Paneer (G) 9,00€</strong></p>
						<p>Tuorejuustoa tomatti-voi-kermakastikkessa</p>
						<p><strong>3. Garlic Chicken (G)<img  class="img-fluid"src="{{url('public/images/chill.jpg')}}"> 9,30€</strong></p>
						<p>Broilerin rintafileet valkosipuli-sipuli currykastikkeessa</p>
						<p><strong>4. Lamb Korma (L,G) 9,50€</strong></p>
						<p>Lammasta, tomaatti-kookos-curry-kermakastikkeessa</p>
						<p><strong>5. Shrimps Butter Masala (G)<img  class="img-fluid"src="{{url('public/images/chill.jpg')}}"> 9,50€</strong></p>
						<p>Katkarapuja, tomaatti-kerma-masalakastikkeessa</p>
						<p><strong>6. Mix-special Lunch 10,40€</strong>Voit valita kaksi eri ruokaa yllä olevalta listalta<br>
						samaan annokseen</p>
						<p><strong>7. Päivän Erikois – Kathmandu Special Karai (G) 12,00€</strong></p>
						<p>Tandoorissa paistettu broilerin filee, tuorejuusto, hunaja ja cashew tomaatti-voi-kermakastikkeessa</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>



@endsection