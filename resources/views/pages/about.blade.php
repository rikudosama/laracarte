@extends('layouts.default')
@section('content')
<div class="container">
	<h2>What is laracarte ?</h2>
	<p>
		Laracarte is a clone app of <a href="https://laramap.com" target="_blank">Laramap</a>
	</p>
	<div class="row">
		<div class="col-md-6">
			<p class="alert alert-warning">
			<strong><i class="fa fa-exclamation-triangle"></i> This app has been biult by <a href="https://twitter.com/lerikudosam">@lerikdudosama</a> for learning purpose</strong>
			</p>
		</div>
	</div>
	<p>Feel free to help improve the <a href="#">source code</a></p>

	<hr>

	<h2>What is Laramap</h2>
	<p>Laramap is the website by which laramap is inspired :)</p>
	<p>More info <a href="https://laramap.com/p/about">here</a></p>

	<hr>

	<h2>Which tools and services are used in laracarte ?</h2>
	<p>Basically is built on laravel &amp; boostrap.But there is a bunch of services for email and other sections. </p>
	<ul>
		<li>Laravel</li>
		<li>Bootstrap</li>
		<li>Amazon S3</li>
		<li>Mandrill</li>
		<li>Google Maps</li>
		<li>Gravatar</li>
		<li>Antony Martin's Geolocalisation Package</li>
		<li>Micheal Fortin's Markdown Package</li>
		<li>Heroku</li>
	</ul>
</div>
@endsection