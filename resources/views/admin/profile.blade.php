@extends('admin.master')
@section('content')
<div class="boxed">

			<!--CONTENT CONTAINER-->
			<!--===================================================-->
			<div id="content-container">
				

				<!--Page content-->
				<!--===================================================-->
				<div id="page-content">
					
					<div class="row">
						<div class="col-lg-10">
              <aside id="aside-container">
				<div id="aside">
					<div class="nano">
						<div class="nano-content">
							
							<!-- Simple profile -->
							<div class="text-center pad-all">
								<div class="pad-ver">
									<img src="img/av1.png" class="img-lg img-border img-circle" alt="Profile Picture">
								</div>
								<h4 class="text-lg text-overflow mar-no">Shashikant </h4>
								<p class="text-sm">Digital Marketing Director</p>

								<div class="pad-ver btn-group">
									<a title="" href="#" class="btn btn-icon btn-hover-primary fa fa-facebook icon-lg add-tooltip" data-original-title="Facebook" data-container="body"></a>
									<a title="" href="#" class="btn btn-icon btn-hover-info fa fa-twitter icon-lg add-tooltip" data-original-title="Twitter" data-container="body"></a>
									<a title="" href="#" class="btn btn-icon btn-hover-danger fa fa-google-plus icon-lg add-tooltip" data-original-title="Google+" data-container="body"></a>
									<a title="" href="#" class="btn btn-icon btn-hover-mint fa fa-envelope icon-lg add-tooltip" data-original-title="Email" data-container="body"></a>
								</div>
								<button class="btn btn-block btn-success">Follow</button>
							</div>
							<hr>
							<ul class="list-group bg-trans">

								<!-- Profile Details -->
								<li class="list-group-item list-item-sm">
									<i class="fa fa-home fa-fw"></i> San Jose, CA
								</li>
								<li class="list-group-item list-item-sm">
									<i class="fa fa-clock-o fa-fw"></i> Member since 1 years ago
								</li>
								<li class="list-group-item list-item-sm text-primary text-semibold">
									<a href="#" class="btn-link">
										<i class="fa fa-globe fa-fw"></i> http://www.themeon.net
									</a>
								</li>
							</ul>
							<hr>
							<div class="pad-hor">
								<h5>About Me</h5>
								<small class="text-thin"></small>
							</div>
							<hr style="border: 2px solid white;">
							
						</div>
					</div>
				</div>
			</aside>
		</div>
	</div>
</div>
</div>
</div>
@endsection