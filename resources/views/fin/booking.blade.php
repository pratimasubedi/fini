
@extends('home-master')
@section('content')
<div class="container-fluid booking-section">
	<div class="container">
		<div class="row">
			<div class="col-md-6  col-sm-12 col-lg-6">
				<div class="booking-heading">
					<h1>Bookings / Bookings</h1>
					<p>Table reservations for dinner and dinner.<br>
					We do not accept table reservations for lunch between 11-13</p>
					<form>
						<label class="form-label">Name / Name *</label>
						<input type="text">
						<label class="form-label">Telephone / Telephone *</label>
						<input type="text" >
						<label class="form-label">Email / Email *</label>
						<input type="text" >
						<label class="form-label">Date and Time / Date and Time *</label>
						<input type="text" >
						<label class="form-label">Number of people / Party size *</label>
						<input type="text" >
						<label class="form-label">Learn more / Additional information</label>
						<textarea  style="height:200px"></textarea>
						<input type="submit" value="Send / send">
					</form>
				</div>
			</div>
			<div class="col-md-4  col-sm-12 col-lg-4">
				<div class="booking-images">
					<img class="img-fluid"src="public/images/b1.jpg">
				</div>
			</div>
		</div>
	</div>
</div>

@endsection
