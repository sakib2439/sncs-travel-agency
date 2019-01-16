<!DOCTYPE html>
<html lang="en">
<head>
<title>Contact</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Travello template project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="styles/contact.css">
<link rel="stylesheet" type="text/css" href="styles/contact_responsive.css">
</head>
<body>

<div class="super_container">

	<!-- Header -->

  @include('layouts.header')


	<!-- Menu -->

  @include('layouts.menu')



	<!-- Home -->

	<div class="home">
		<div class="background_image" style="background-image:url(images/contact.jpg)"></div>
	</div>

	<!-- Contact -->

	<div class="contact">
		<div class="container">
			<div class="row">

				<!-- Get in touch -->
				<div class="col-lg-6">
					<div class="contact_content">
						<div class="contact_title">Get in touch with us</div>
						<div class="contact_text">
							<p>We are providing best travel with lower prices. To get the best travel in our providing countries be connected with us.</p>
						</div>
						<div class="contact_list">
							<ul>
								<li>
									<div>address:</div>
									<div>Mirpur DOHS, Dhaka</div>
								</li>
								<li>
									<div>phone:</div>
									<div>+880 1766 115337</div>
								</li>
								<li>
									<div>email:</div>
									<div>sakib2439@gmail.com</div>
								</li>
							</ul>
						</div>
					</div>
				</div>

				<!-- Contact Form -->
				<div class="col-lg-6">
					<div class="contact_form_container">


          {!! Form::open(['action'=>'MailController@sendmail', 'id'=>'contact_form', 'class'=>'contact_form', 'method'=>'POST']) !!}



							<div style="margin-bottom: 18px">
                {{Form::label('name','Your Name')}}
                {{Form::text('name', '',['class'=>'contact_input contact_input_name inpt', 'placeholder'=>'Your Name'])}}
                @csrf

                <div class="input_border"></div>
              </div>
							<div class="row">
								<div class="col-lg-6" style="margin-bottom: 18px">
									<div>
                    {{Form::label('email','Your E-mail')}}
                    {{Form::text('email', '',['class'=>'contact_input contact_input_email inpt', 'placeholder'=>'Your E-mail'])}}

                    <div class="input_border">
                    </div>
                  </div>
								</div>
								<div class="col-lg-6" style="margin-bottom: 18px">
									<div>
                    {{Form::label('subject','Subject')}}
                    {{Form::text('subject', '',['class'=>'contact_input contact_input_subject inpt', 'placeholder'=>'Subject'])}}

                    <div class="input_border"></div></div>
								</div>
							</div>
							<div>
                {{Form::label('message','Message')}}
                {{Form::textarea('message', '',['class'=>'contact_textarea contact_input inpt', 'placeholder'=>'Message'])}}

                <div class="input_border" style="bottom:3px"></div></div>

                @if(Session::has("success"))
                <div class="alert alert-success">
                  Your mail sent <b>Successfully !</b>
                </div>
                @endif
                {{Form::submit('Send',['class'=>'btn btn-primary'])}}

        {!! Form::close() !!}
					</div>
				</div>
			</div>
		</div>
	</div>


</div>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCIwF204lFZg1y4kPSIhKaHEXMLYxxuMhA"></script>
<script src="js/contact.js"></script>
</body>
</html>
