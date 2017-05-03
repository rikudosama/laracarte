<nav class="navbar navbar-default navbar-static-top">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#example-navbar">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="{{ route('root_path') }}">Laracarte</a>
		</div>

		<div class="collapse navbar-collapse" id="example-navbar">
			<ul class="nav navbar-nav">
				<li class="active"><a href="{{ route('root_path') }}">Home</a></li>
				<li><a href="{{ route('about_path') }}">About</a></li>
				<li><a href="#">Artisans</a></li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle btn" data-toggle="dropdown">Planet <b class="caret"></b>
						<!-- You can add classes for different colours on the next element -->
						<ul class="dropdown-menu">
							<li><a href="https://laravel.com">laravel.com</a></li>
							<li><a href="https://laravel.io">laravel.io</a></li>
							<li><a href="https://laracasts.com">Laracasts</a></li>
							<li><a href="https://larajobs.com">Larajobs</a></li>
							<li><a href="https://laravel-news.com">Laravel News</a></li>
							<li><a href="https://larachat.co">Larachat</a></li>
						</ul>
					</a>
				</li>
				<li><a href="#">Contact</a></li>
			</ul>
			<ul id="topMenu" class="nav navbar-nav pull-right">
				<li class=""><a href="special_offer.html">Login</a></li>
				<li class=""><a href="normal.html">Register</a></li>
			</ul>
		</div>
	</div>
</div>
</nav>
