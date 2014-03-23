<div class="contribute-band">
	<div class="container">
		<p>Want to help with the site? We accept pull requests! <a href="{{ Config::get('site.repo_url') }}">Find us on Github</a></p>
	</div>
</div>

<div class="footer">
	<div class="container">
		<div class="row">

			<div class="col-md-6">
				<ul class="footer-links list-inline">

					<li><a href="{{ route('home') }}">SNIPPETS</a></li>

					@if(Auth::check())
						<li><a href="{{ route('member.user.dashboard') }}">DASHBOARD</a></li>
					@endif

					<li><a href="{{ route('user.getIndex') }}">MEMBERS</a></li>

					@if(Auth::check() && Auth::user()->isAdmin())
						<!-- <li><a href="#">All Snippets</a></li> -->
					@endif

					@if(Auth::check())
						<li>
							<!--<li><a href="#">Profile</a></li>-->
							<a href="{{ route('auth.getLogout') }}">SIGN OUT</a>
						</li>
					@else
						<li>
							<a href="{{ route('auth.getLogin') }}">SIGN IN</a>
						</li>
					@endif

					<li><a href="{{ route('member.snippet.getCreate') }}">SUBMIT</a></li>

				</ul>
			</div>

			<div class="col-md-6">
				<p class="footer-copyright">{{ Config::get('site.footer_copyright') }}</p>
			</div>

		</div>
	</div>
</div>