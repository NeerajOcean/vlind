@extends('templates.master')

@section('extra_js')
 {{ HTML::script('assets/js/facebook-login.js') }}
@stop

@section('content')
	<div class="content_wrapper">
		<div class="col-md-12 site-title">
			<strong><span>V</span>LIND</strong> <span>D</span>ATE
		</div>

		<div class="col-md-12">
			<div class="col-md-8 login-box">
				<div class="login-box-content">
					<span>Enter into the world of <span>excitement</span>, Find a <span>perfect match</span> for date</span>
				</div>

				<h2>&nbsp; Start Dating :)</h2>

				<div class="fb-login"> 
					<div style="text-align: center; margin-top: 72px;">
						<div class="col-md-4 fb-login-box" id="fb_login" onClick="fb_login_funtion();">
							<span>
								<img src="{{ URL::asset('assets/images/social/facebook.png') }}">
							</span>
							Login
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>
@stop