@extends('home-master')
@section('content')

<div class="container-fluid contact-section">
	<div class="container">
		<div class="row">
			<div class="col-md-6  col-sm-12 col-lg-6">
				 <div class="contact-heading">
					<h1>contact</h1>
				 </div>
				 <div class="content">
					<h5>contact</h5>
					<p>Address: Runeberginkatu 3, 00100 Helsinki / kamppi@ravintolafactory.com <br>Phone: 0102053211</p>
					<p>We take table reservations for dinner.</p>
					<p>Visit A ​​la Carte on weekdays at 18:00 and Saturdays at 16:00 on the Runeberginkatu entrance</p>
					<h5>Visiting hours:</h5>
					<h8 class="contact-p">Today 07:30 to 21:00</h8>
					<p>Breakfast 07:30 to 10:00 
                    <br>Lunch 10:30 to 15:00 
                    <br>Salad Bar 07:30 
                    <br>to 18:00 A´la Carte 15:00 to 21:00 (the kitchen closes at 20:30)</p>
                    <h8 class="contact-p">Tue-Fri 07: 30-22: 00</h8>
                    <p>Breakfast 07: 30-10: 00 
                    <br>Lunch 10: 30-15: 00 
                    <br>Salad Bar 07: 30-18: 00 
                    <br>A´la Carte 15: 00-22: 00 (kitchen closes at 21:30)</p>
                    <h8 class="contact-p">Sat 12: 00-22: 00</h8>
                    <p>Lunch 12: 00-16: 00 
                    <br>A´la Carte 15: 00-22: 00 (kitchen closes at 21:30)</p>
			     </div>
			 </div>
			     <div class="col-md-6  col-sm-12 col-lg-6">
			     	<div class="contact-form">
					<h1>Take contact</h1>
					<p>There were errors in the form. Please check the form and try again</p>
					<form>
						<label class="form-label">Name (required)</label>
						<input type="text">
						<label class="form-label">Email (required)</label>
						<input type="text" >
						<label class="form-label">Phone number (required)</label>
						<input type="text" >
						<label class="form-label">Subject</label>
						<input type="text" >
						
						<label class="form-label">Message</label>
						<textarea  style="height:200px"></textarea>
						<input type="submit" value="send" style="width:20%;border-radius: 10px;">
					</form>
				</div>
		         </div>
		    </div>
	</div>
</div>



@endsection