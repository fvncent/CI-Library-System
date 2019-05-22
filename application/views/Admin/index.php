<?php $this->load->view('template/include_head.php') ?>
<?php $this->load->view('admin/header.php') ?>

<main class="app-main">
	<div class="wrapper">
		<div class="page">
			<nav class="page-navs">
				<div class="nav-scroller">
					<div class="nav nav-tabs">
						<a class="nav-link active" href="#">Home</a>
						<a class="nav-link" href="#">Books <span class="badge">16</span></a>
						<a class="nav-link" href="#">Users</a>
						<a class="nav-link" href="#">Projects</a>
						<a class="nav-link" href="#">Tasks</a>
						<a class="nav-link" href="#">Settings</a>
					</div>
				</div>
			</nav>
			<div class="page-inner container">
				<header class="page-title-bar">
					<div class="d-flex flex-column flex-md-row">
						<p class="lead">
							<span class="font-weight-bold">Hi, Beni.</span>
							<span class="d-block text-muted"
								>Here’s what’s happening with your business today.</span
							>
						</p>
						<div class="ml-auto">
							<!-- .dropdown -->
							<div class="dropdown">
								<button
									class="btn btn-secondary"
									data-toggle="dropdown"
									aria-haspopup="true"
									aria-expanded="false"
								>
									<span>This Week</span> <i class="fa fa-fw fa-caret-down"></i>
								</button>
								<div class="dropdown-arrow dropdown-arrow-right"></div>
								<!-- .dropdown-menu -->
								<div
									class="dropdown-menu dropdown-menu-right dropdown-menu-md stop-propagation"
								>
									<!-- .custom-control -->
									<div class="custom-control custom-radio">
										<input
											type="radio"
											class="custom-control-input"
											id="dpToday"
											name="dpFilter"
											value="0"
										/>
										<label
											class="custom-control-label d-flex justify-content-between"
											for="dpToday"
											><span>Today</span>
											<span class="text-muted">Mar 27</span></label
										>
									</div>
									<!-- /.custom-control -->
									<!-- .custom-control -->
									<div class="custom-control custom-radio">
										<input
											type="radio"
											class="custom-control-input"
											id="dpYesterday"
											name="dpFilter"
											value="1"
										/>
										<label
											class="custom-control-label d-flex justify-content-between"
											for="dpYesterday"
											><span>Yesterday</span>
											<span class="text-muted">Mar 26</span></label
										>
									</div>
									<!-- /.custom-control -->
									<!-- .custom-control -->
									<div class="custom-control custom-radio">
										<input
											type="radio"
											class="custom-control-input"
											id="dpWeek"
											name="dpFilter"
											value="2"
											checked=""
										/>
										<label
											class="custom-control-label d-flex justify-content-between"
											for="dpWeek"
											><span>This Week</span>
											<span class="text-muted">Mar 21-27</span></label
										>
									</div>
									<!-- /.custom-control -->
									<!-- .custom-control -->
									<div class="custom-control custom-radio">
										<input
											type="radio"
											class="custom-control-input"
											id="dpMonth"
											name="dpFilter"
											value="3"
										/>
										<label
											class="custom-control-label d-flex justify-content-between"
											for="dpMonth"
											><span>This Month</span>
											<span class="text-muted">Mar 1-31</span></label
										>
									</div>
									<!-- /.custom-control -->
									<!-- .custom-control -->
									<div class="custom-control custom-radio">
										<input
											type="radio"
											class="custom-control-input"
											id="dpYear"
											name="dpFilter"
											value="4"
										/>
										<label
											class="custom-control-label d-flex justify-content-between"
											for="dpYear"
											><span>This Year</span>
											<span class="text-muted">2018</span></label
										>
									</div>
									<!-- /.custom-control -->
									<!-- .custom-control -->
									<div class="custom-control custom-radio">
										<input
											type="radio"
											class="custom-control-input"
											id="dpCustom"
											name="dpFilter"
											value="5"
										/>
										<label class="custom-control-label" for="dpCustom"
											>Custom</label
										>
										<div class="custom-control-hint my-1">
											<!-- datepicker:range -->
											<input
												type="text"
												class="form-control flatpickr-input"
												data-toggle="flatpickr"
												data-mode="range"
												data-disable-mobile="true"
												data-date-format="Y-m-d"
												readonly="readonly"
											/>
											<!-- /datepicker:range -->
										</div>
									</div>
									<!-- /.custom-control -->
								</div>
								<!-- /.dropdown-menu -->
							</div>
							<!-- /.dropdown -->
						</div>
					</div>
				</header>
			</div>
		</div>
	</div>
	<footer class="app-footer">
		<ul class="list-inline">
			<li class="list-inline-item">
				<a class="text-muted" href="#">Support</a>
			</li>
			<li class="list-inline-item">
				<a class="text-muted" href="#">Help Center</a>
			</li>
			<li class="list-inline-item">
				<a class="text-muted" href="#">Privacy</a>
			</li>
			<li class="list-inline-item">
				<a class="text-muted" href="#">Terms of Service</a>
			</li>
		</ul>
		<div class="copyright">Copyright © 2018. All right reserved.</div>
	</footer>
	<!-- /.app-footer -->
</main>
<?php $this->load->view('template/include_footer.php') ?>