@extends('layouts.app')
@section('contenu')
<!--begin::Content-->
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
	<!--begin::Toolbar-->
	<div class="toolbar" id="kt_toolbar">
		<!--begin::Container-->
		<div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
			<!--begin::Page title-->
			<div data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}" class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
				<!--begin::Title-->
				<h1 class="d-flex text-dark fw-bolder fs-3 align-items-center my-1">Projet</h1>
				<!--end::Title-->
				<!--begin::Separator-->
				<span class="h-20px border-gray-300 border-start mx-4"></span>
				<!--end::Separator-->
				<!--begin::Breadcrumb-->
				
				<!--end::Breadcrumb-->
			</div>
			<!--end::Page title-->
		</div>
		<!--end::Container-->
	</div>
	<!--end::Toolbar-->
	<!--begin::Post-->
	<div class="post d-flex flex-column-fluid" id="kt_post">
		<!--begin::Container-->
		<div id="kt_content_container" class="container-xxl">
			<!--begin::Navbar-->
			<div class="card mb-6 mb-xl-9">
				<div class="card-body pt-9 pb-0">
					<!--begin::Details-->
					@include('layouts.myprojetmenu')
					<!--end::Details-->
					
				</div>
			</div>
			<!--end::Navbar-->
			{{--<!--begin::Row-->
			<div class="row g-6 g-xl-9">
				<!--begin::Col-->
				<div class="col-lg-6">
					<!--begin::Summary-->
					<div class="card card-flush h-lg-100">
						<!--begin::Card header-->
						<div class="card-header mt-6">
							<!--begin::Card title-->
							<div class="card-title flex-column">
								<h3 class="fw-bolder mb-1">Tasks Summary</h3>
								<div class="fs-6 fw-bold text-gray-400">24 Overdue Tasks</div>
							</div>
							<!--end::Card title-->
							<!--begin::Card toolbar-->
							<div class="card-toolbar">
								<a href="#" class="btn btn-light btn-sm">View Tasks</a>
							</div>
							<!--end::Card toolbar-->
						</div>
						<!--end::Card header-->
						<!--begin::Card body-->
						<div class="card-body p-9 pt-5">
							<!--begin::Wrapper-->
							<div class="d-flex flex-wrap">
								<!--begin::Chart-->
								<div class="position-relative d-flex flex-center h-175px w-175px me-15 mb-7">
									<div class="position-absolute translate-middle start-50 top-50 d-flex flex-column flex-center">
										<span class="fs-2qx fw-bolder">237</span>
										<span class="fs-6 fw-bold text-gray-400">Total Tasks</span>
									</div>
									<canvas id="project_overview_chart"></canvas>
								</div>
								<!--end::Chart-->
								<!--begin::Labels-->
								<div class="d-flex flex-column justify-content-center flex-row-fluid pe-11 mb-5">
									<!--begin::Label-->
									<div class="d-flex fs-6 fw-bold align-items-center mb-3">
										<div class="bullet bg-primary me-3"></div>
										<div class="text-gray-400">Active</div>
										<div class="ms-auto fw-bolder text-gray-700">30</div>
									</div>
									<!--end::Label-->
									<!--begin::Label-->
									<div class="d-flex fs-6 fw-bold align-items-center mb-3">
										<div class="bullet bg-success me-3"></div>
										<div class="text-gray-400">Completed</div>
										<div class="ms-auto fw-bolder text-gray-700">45</div>
									</div>
									<!--end::Label-->
									<!--begin::Label-->
									<div class="d-flex fs-6 fw-bold align-items-center mb-3">
										<div class="bullet bg-danger me-3"></div>
										<div class="text-gray-400">Overdue</div>
										<div class="ms-auto fw-bolder text-gray-700">0</div>
									</div>
									<!--end::Label-->
									<!--begin::Label-->
									<div class="d-flex fs-6 fw-bold align-items-center">
										<div class="bullet bg-gray-300 me-3"></div>
										<div class="text-gray-400">Yet to start</div>
										<div class="ms-auto fw-bolder text-gray-700">25</div>
									</div>
									<!--end::Label-->
								</div>
								<!--end::Labels-->
							</div>
							<!--end::Wrapper-->
							<!--begin::Notice-->
							<div class="notice d-flex bg-light-primary rounded border-primary border border-dashed p-6">
								<!--begin::Wrapper-->
								<div class="d-flex flex-stack flex-grow-1">
									<!--begin::Content-->
									<div class="fw-bold">
										<div class="fs-6 text-gray-700">
										<a href="#" class="fw-bolder me-1">Invite New .NET Collaborators</a>to create great outstanding business to business .jsp modutr class scripts</div>
									</div>
									<!--end::Content-->
								</div>
								<!--end::Wrapper-->
							</div>
							<!--end::Notice-->
						</div>
						<!--end::Card body-->
					</div>
					<!--end::Summary-->
				</div>
				<!--end::Col-->
				<!--begin::Col-->
				<div class="col-lg-6">
					<!--begin::Graph-->
					<div class="card card-flush h-lg-100">
						<!--begin::Card header-->
						<div class="card-header mt-6">
							<!--begin::Card title-->
							<div class="card-title flex-column">
								<h3 class="fw-bolder mb-1">Tasks Over Time</h3>
								<!--begin::Labels-->
								<div class="fs-6 d-flex text-gray-400 fs-6 fw-bold">
									<!--begin::Label-->
									<div class="d-flex align-items-center me-6">
									<span class="menu-bullet d-flex align-items-center me-2">
										<span class="bullet bg-success"></span>
									</span>Complete</div>
									<!--end::Label-->
									<!--begin::Label-->
									<div class="d-flex align-items-center">
									<span class="menu-bullet d-flex align-items-center me-2">
										<span class="bullet bg-primary"></span>
									</span>Incomplete</div>
									<!--end::Label-->
								</div>
								<!--end::Labels-->
							</div>
							<!--end::Card title-->
							<!--begin::Card toolbar-->
							<div class="card-toolbar">
								<!--begin::Select-->
								<select name="status" data-control="select2" data-hide-search="true" class="form-select form-select-solid form-select-sm fw-bolder w-100px">
									<option value="1">2020 Q1</option>
									<option value="2">2020 Q2</option>
									<option value="3" selected="selected">2020 Q3</option>
									<option value="4">2020 Q4</option>
								</select>
								<!--end::Select-->
							</div>
							<!--end::Card toolbar-->
						</div>
						<!--end::Card header-->
						<!--begin::Card body-->
						<div class="card-body pt-10 pb-0 px-5">
							<!--begin::Chart-->
							<div id="kt_project_overview_graph" class="card-rounded-bottom" style="height: 300px"></div>
							<!--end::Chart-->
						</div>
						<!--end::Card body-->
					</div>
					<!--end::Graph-->
				</div>
				<!--end::Col-->
				<!--begin::Col-->
				<div class="col-lg-6">
					<!--begin::Card-->
					<div class="card card-flush h-lg-100">
						<!--begin::Card header-->
						<div class="card-header mt-6">
							<!--begin::Card title-->
							<div class="card-title flex-column">
								<h3 class="fw-bolder mb-1">What's on the road?</h3>
								<div class="fs-6 text-gray-400">Total 482 participants</div>
							</div>
							<!--end::Card title-->
							<!--begin::Card toolbar-->
							<div class="card-toolbar">
								<!--begin::Select-->
								<select name="status" data-control="select2" data-hide-search="true" class="form-select form-select-solid form-select-sm fw-bolder w-100px">
									<option value="1" selected="selected">Options</option>
									<option value="2">Option 1</option>
									<option value="3">Option 2</option>
									<option value="4">Option 3</option>
								</select>
								<!--end::Select-->
							</div>
							<!--end::Card toolbar-->
						</div>
						<!--end::Card header-->
						<!--begin::Card body-->
						<div class="card-body p-9 pt-4">
							<!--begin::Dates-->
							<ul class="nav nav-pills d-flex flex-nowrap hover-scroll-x py-2">
								<!--begin::Date-->
								<li class="nav-item me-1">
									<a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-4 px-3 btn-active-primary" data-bs-toggle="tab" href="#kt_schedule_day_0">
										<span class="opacity-50 fs-7 fw-bold">Su</span>
										<span class="fs-6 fw-bolder">22</span>
									</a>
								</li>
								<!--end::Date-->
								<!--begin::Date-->
								<li class="nav-item me-1">
									<a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-4 px-3 btn-active-primary active" data-bs-toggle="tab" href="#kt_schedule_day_1">
										<span class="opacity-50 fs-7 fw-bold">Mo</span>
										<span class="fs-6 fw-bolder">23</span>
									</a>
								</li>
								<!--end::Date-->
								<!--begin::Date-->
								<li class="nav-item me-1">
									<a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-4 px-3 btn-active-primary" data-bs-toggle="tab" href="#kt_schedule_day_2">
										<span class="opacity-50 fs-7 fw-bold">Tu</span>
										<span class="fs-6 fw-bolder">24</span>
									</a>
								</li>
								<!--end::Date-->
								<!--begin::Date-->
								<li class="nav-item me-1">
									<a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-4 px-3 btn-active-primary" data-bs-toggle="tab" href="#kt_schedule_day_3">
										<span class="opacity-50 fs-7 fw-bold">We</span>
										<span class="fs-6 fw-bolder">25</span>
									</a>
								</li>
								<!--end::Date-->
								<!--begin::Date-->
								<li class="nav-item me-1">
									<a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-4 px-3 btn-active-primary" data-bs-toggle="tab" href="#kt_schedule_day_4">
										<span class="opacity-50 fs-7 fw-bold">Th</span>
										<span class="fs-6 fw-bolder">26</span>
									</a>
								</li>
								<!--end::Date-->
								<!--begin::Date-->
								<li class="nav-item me-1">
									<a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-4 px-3 btn-active-primary" data-bs-toggle="tab" href="#kt_schedule_day_5">
										<span class="opacity-50 fs-7 fw-bold">Fr</span>
										<span class="fs-6 fw-bolder">27</span>
									</a>
								</li>
								<!--end::Date-->
								<!--begin::Date-->
								<li class="nav-item me-1">
									<a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-4 px-3 btn-active-primary" data-bs-toggle="tab" href="#kt_schedule_day_6">
										<span class="opacity-50 fs-7 fw-bold">Sa</span>
										<span class="fs-6 fw-bolder">28</span>
									</a>
								</li>
								<!--end::Date-->
								<!--begin::Date-->
								<li class="nav-item me-1">
									<a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-4 px-3 btn-active-primary" data-bs-toggle="tab" href="#kt_schedule_day_7">
										<span class="opacity-50 fs-7 fw-bold">Su</span>
										<span class="fs-6 fw-bolder">29</span>
									</a>
								</li>
								<!--end::Date-->
								<!--begin::Date-->
								<li class="nav-item me-1">
									<a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-4 px-3 btn-active-primary" data-bs-toggle="tab" href="#kt_schedule_day_8">
										<span class="opacity-50 fs-7 fw-bold">Mo</span>
										<span class="fs-6 fw-bolder">30</span>
									</a>
								</li>
								<!--end::Date-->
								<!--begin::Date-->
								<li class="nav-item me-1">
									<a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px me-2 py-4 px-3 btn-active-primary" data-bs-toggle="tab" href="#kt_schedule_day_9">
										<span class="opacity-50 fs-7 fw-bold">Tu</span>
										<span class="fs-6 fw-bolder">31</span>
									</a>
								</li>
								<!--end::Date-->
							</ul>
							<!--end::Dates-->
							<!--begin::Tab Content-->
							<div class="tab-content">
								<!--begin::Day-->
								<div id="kt_schedule_day_0" class="tab-pane fade show">
									<!--begin::Time-->
									<div class="d-flex flex-stack position-relative mt-8">
										<!--begin::Bar-->
										<div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
										<!--end::Bar-->
										<!--begin::Info-->
										<div class="fw-bold ms-5 text-gray-600">
											<!--begin::Time-->
											<div class="fs-5">9:00 - 10:00
											<span class="fs-7 text-gray-400 text-uppercase">am</span></div>
											<!--end::Time-->
											<!--begin::Title-->
											<a href="#" class="fs-5 fw-bolder text-gray-800 text-hover-primary mb-2">Sales Pitch Proposal</a>
											<!--end::Title-->
											<!--begin::User-->
											<div class="text-gray-400">Lead by
											<a href="#">Michael Walters</a></div>
											<!--end::User-->
										</div>
										<!--end::Info-->
										<!--begin::Action-->
										<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
										<!--end::Action-->
									</div>
									<!--end::Time-->
									<!--begin::Time-->
									<div class="d-flex flex-stack position-relative mt-8">
										<!--begin::Bar-->
										<div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
										<!--end::Bar-->
										<!--begin::Info-->
										<div class="fw-bold ms-5 text-gray-600">
											<!--begin::Time-->
											<div class="fs-5">12:00 - 13:00
											<span class="fs-7 text-gray-400 text-uppercase">pm</span></div>
											<!--end::Time-->
											<!--begin::Title-->
											<a href="#" class="fs-5 fw-bolder text-gray-800 text-hover-primary mb-2">9 Degree Project Estimation Meeting</a>
											<!--end::Title-->
											<!--begin::User-->
											<div class="text-gray-400">Lead by
											<a href="#">Peter Marcus</a></div>
											<!--end::User-->
										</div>
										<!--end::Info-->
										<!--begin::Action-->
										<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
										<!--end::Action-->
									</div>
									<!--end::Time-->
									<!--begin::Time-->
									<div class="d-flex flex-stack position-relative mt-8">
										<!--begin::Bar-->
										<div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
										<!--end::Bar-->
										<!--begin::Info-->
										<div class="fw-bold ms-5 text-gray-600">
											<!--begin::Time-->
											<div class="fs-5">9:00 - 10:00
											<span class="fs-7 text-gray-400 text-uppercase">am</span></div>
											<!--end::Time-->
											<!--begin::Title-->
											<a href="#" class="fs-5 fw-bolder text-gray-800 text-hover-primary mb-2">Weekly Team Stand-Up</a>
											<!--end::Title-->
											<!--begin::User-->
											<div class="text-gray-400">Lead by
											<a href="#">Bob Harris</a></div>
											<!--end::User-->
										</div>
										<!--end::Info-->
										<!--begin::Action-->
										<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
										<!--end::Action-->
									</div>
									<!--end::Time-->
								</div>
								<!--end::Day-->
								<!--begin::Day-->
								<div id="kt_schedule_day_1" class="tab-pane fade show active">
									<!--begin::Time-->
									<div class="d-flex flex-stack position-relative mt-8">
										<!--begin::Bar-->
										<div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
										<!--end::Bar-->
										<!--begin::Info-->
										<div class="fw-bold ms-5 text-gray-600">
											<!--begin::Time-->
											<div class="fs-5">11:00 - 11:45
											<span class="fs-7 text-gray-400 text-uppercase">am</span></div>
											<!--end::Time-->
											<!--begin::Title-->
											<a href="#" class="fs-5 fw-bolder text-gray-800 text-hover-primary mb-2">Committee Review Approvals</a>
											<!--end::Title-->
											<!--begin::User-->
											<div class="text-gray-400">Lead by
											<a href="#">Walter White</a></div>
											<!--end::User-->
										</div>
										<!--end::Info-->
										<!--begin::Action-->
										<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
										<!--end::Action-->
									</div>
									<!--end::Time-->
									<!--begin::Time-->
									<div class="d-flex flex-stack position-relative mt-8">
										<!--begin::Bar-->
										<div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
										<!--end::Bar-->
										<!--begin::Info-->
										<div class="fw-bold ms-5 text-gray-600">
											<!--begin::Time-->
											<div class="fs-5">10:00 - 11:00
											<span class="fs-7 text-gray-400 text-uppercase">am</span></div>
											<!--end::Time-->
											<!--begin::Title-->
											<a href="#" class="fs-5 fw-bolder text-gray-800 text-hover-primary mb-2">Creative Content Initiative</a>
											<!--end::Title-->
											<!--begin::User-->
											<div class="text-gray-400">Lead by
											<a href="#">David Stevenson</a></div>
											<!--end::User-->
										</div>
										<!--end::Info-->
										<!--begin::Action-->
										<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
										<!--end::Action-->
									</div>
									<!--end::Time-->
									<!--begin::Time-->
									<div class="d-flex flex-stack position-relative mt-8">
										<!--begin::Bar-->
										<div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
										<!--end::Bar-->
										<!--begin::Info-->
										<div class="fw-bold ms-5 text-gray-600">
											<!--begin::Time-->
											<div class="fs-5">9:00 - 10:00
											<span class="fs-7 text-gray-400 text-uppercase">am</span></div>
											<!--end::Time-->
											<!--begin::Title-->
											<a href="#" class="fs-5 fw-bolder text-gray-800 text-hover-primary mb-2">Development Team Capacity Review</a>
											<!--end::Title-->
											<!--begin::User-->
											<div class="text-gray-400">Lead by
											<a href="#">Walter White</a></div>
											<!--end::User-->
										</div>
										<!--end::Info-->
										<!--begin::Action-->
										<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
										<!--end::Action-->
									</div>
									<!--end::Time-->
								</div>
								<!--end::Day-->
								<!--begin::Day-->
								<div id="kt_schedule_day_2" class="tab-pane fade show">
									<!--begin::Time-->
									<div class="d-flex flex-stack position-relative mt-8">
										<!--begin::Bar-->
										<div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
										<!--end::Bar-->
										<!--begin::Info-->
										<div class="fw-bold ms-5 text-gray-600">
											<!--begin::Time-->
											<div class="fs-5">14:30 - 15:30
											<span class="fs-7 text-gray-400 text-uppercase">pm</span></div>
											<!--end::Time-->
											<!--begin::Title-->
											<a href="#" class="fs-5 fw-bolder text-gray-800 text-hover-primary mb-2">Sales Pitch Proposal</a>
											<!--end::Title-->
											<!--begin::User-->
											<div class="text-gray-400">Lead by
											<a href="#">Sean Bean</a></div>
											<!--end::User-->
										</div>
										<!--end::Info-->
										<!--begin::Action-->
										<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
										<!--end::Action-->
									</div>
									<!--end::Time-->
									<!--begin::Time-->
									<div class="d-flex flex-stack position-relative mt-8">
										<!--begin::Bar-->
										<div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
										<!--end::Bar-->
										<!--begin::Info-->
										<div class="fw-bold ms-5 text-gray-600">
											<!--begin::Time-->
											<div class="fs-5">11:00 - 11:45
											<span class="fs-7 text-gray-400 text-uppercase">am</span></div>
											<!--end::Time-->
											<!--begin::Title-->
											<a href="#" class="fs-5 fw-bolder text-gray-800 text-hover-primary mb-2">Development Team Capacity Review</a>
											<!--end::Title-->
											<!--begin::User-->
											<div class="text-gray-400">Lead by
											<a href="#">Naomi Hayabusa</a></div>
											<!--end::User-->
										</div>
										<!--end::Info-->
										<!--begin::Action-->
										<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
										<!--end::Action-->
									</div>
									<!--end::Time-->
									<!--begin::Time-->
									<div class="d-flex flex-stack position-relative mt-8">
										<!--begin::Bar-->
										<div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
										<!--end::Bar-->
										<!--begin::Info-->
										<div class="fw-bold ms-5 text-gray-600">
											<!--begin::Time-->
											<div class="fs-5">14:30 - 15:30
											<span class="fs-7 text-gray-400 text-uppercase">pm</span></div>
											<!--end::Time-->
											<!--begin::Title-->
											<a href="#" class="fs-5 fw-bolder text-gray-800 text-hover-primary mb-2">Development Team Capacity Review</a>
											<!--end::Title-->
											<!--begin::User-->
											<div class="text-gray-400">Lead by
											<a href="#">Kendell Trevor</a></div>
											<!--end::User-->
										</div>
										<!--end::Info-->
										<!--begin::Action-->
										<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
										<!--end::Action-->
									</div>
									<!--end::Time-->
								</div>
								<!--end::Day-->
								<!--begin::Day-->
								<div id="kt_schedule_day_3" class="tab-pane fade show">
									<!--begin::Time-->
									<div class="d-flex flex-stack position-relative mt-8">
										<!--begin::Bar-->
										<div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
										<!--end::Bar-->
										<!--begin::Info-->
										<div class="fw-bold ms-5 text-gray-600">
											<!--begin::Time-->
											<div class="fs-5">13:00 - 14:00
											<span class="fs-7 text-gray-400 text-uppercase">pm</span></div>
											<!--end::Time-->
											<!--begin::Title-->
											<a href="#" class="fs-5 fw-bolder text-gray-800 text-hover-primary mb-2">Project Review &amp; Testing</a>
											<!--end::Title-->
											<!--begin::User-->
											<div class="text-gray-400">Lead by
											<a href="#">Karina Clarke</a></div>
											<!--end::User-->
										</div>
										<!--end::Info-->
										<!--begin::Action-->
										<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
										<!--end::Action-->
									</div>
									<!--end::Time-->
									<!--begin::Time-->
									<div class="d-flex flex-stack position-relative mt-8">
										<!--begin::Bar-->
										<div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
										<!--end::Bar-->
										<!--begin::Info-->
										<div class="fw-bold ms-5 text-gray-600">
											<!--begin::Time-->
											<div class="fs-5">9:00 - 10:00
											<span class="fs-7 text-gray-400 text-uppercase">am</span></div>
											<!--end::Time-->
											<!--begin::Title-->
											<a href="#" class="fs-5 fw-bolder text-gray-800 text-hover-primary mb-2">Team Backlog Grooming Session</a>
											<!--end::Title-->
											<!--begin::User-->
											<div class="text-gray-400">Lead by
											<a href="#">Terry Robins</a></div>
											<!--end::User-->
										</div>
										<!--end::Info-->
										<!--begin::Action-->
										<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
										<!--end::Action-->
									</div>
									<!--end::Time-->
									<!--begin::Time-->
									<div class="d-flex flex-stack position-relative mt-8">
										<!--begin::Bar-->
										<div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
										<!--end::Bar-->
										<!--begin::Info-->
										<div class="fw-bold ms-5 text-gray-600">
											<!--begin::Time-->
											<div class="fs-5">14:30 - 15:30
											<span class="fs-7 text-gray-400 text-uppercase">pm</span></div>
											<!--end::Time-->
											<!--begin::Title-->
											<a href="#" class="fs-5 fw-bolder text-gray-800 text-hover-primary mb-2">Weekly Team Stand-Up</a>
											<!--end::Title-->
											<!--begin::User-->
											<div class="text-gray-400">Lead by
											<a href="#">Terry Robins</a></div>
											<!--end::User-->
										</div>
										<!--end::Info-->
										<!--begin::Action-->
										<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
										<!--end::Action-->
									</div>
									<!--end::Time-->
								</div>
								<!--end::Day-->
								<!--begin::Day-->
								<div id="kt_schedule_day_4" class="tab-pane fade show">
									<!--begin::Time-->
									<div class="d-flex flex-stack position-relative mt-8">
										<!--begin::Bar-->
										<div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
										<!--end::Bar-->
										<!--begin::Info-->
										<div class="fw-bold ms-5 text-gray-600">
											<!--begin::Time-->
											<div class="fs-5">10:00 - 11:00
											<span class="fs-7 text-gray-400 text-uppercase">am</span></div>
											<!--end::Time-->
											<!--begin::Title-->
											<a href="#" class="fs-5 fw-bolder text-gray-800 text-hover-primary mb-2">Lunch &amp; Learn Catch Up</a>
											<!--end::Title-->
											<!--begin::User-->
											<div class="text-gray-400">Lead by
											<a href="#">Sean Bean</a></div>
											<!--end::User-->
										</div>
										<!--end::Info-->
										<!--begin::Action-->
										<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
										<!--end::Action-->
									</div>
									<!--end::Time-->
									<!--begin::Time-->
									<div class="d-flex flex-stack position-relative mt-8">
										<!--begin::Bar-->
										<div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
										<!--end::Bar-->
										<!--begin::Info-->
										<div class="fw-bold ms-5 text-gray-600">
											<!--begin::Time-->
											<div class="fs-5">12:00 - 13:00
											<span class="fs-7 text-gray-400 text-uppercase">pm</span></div>
											<!--end::Time-->
											<!--begin::Title-->
											<a href="#" class="fs-5 fw-bolder text-gray-800 text-hover-primary mb-2">Sales Pitch Proposal</a>
											<!--end::Title-->
											<!--begin::User-->
											<div class="text-gray-400">Lead by
											<a href="#">Karina Clarke</a></div>
											<!--end::User-->
										</div>
										<!--end::Info-->
										<!--begin::Action-->
										<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
										<!--end::Action-->
									</div>
									<!--end::Time-->
									<!--begin::Time-->
									<div class="d-flex flex-stack position-relative mt-8">
										<!--begin::Bar-->
										<div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
										<!--end::Bar-->
										<!--begin::Info-->
										<div class="fw-bold ms-5 text-gray-600">
											<!--begin::Time-->
											<div class="fs-5">14:30 - 15:30
											<span class="fs-7 text-gray-400 text-uppercase">pm</span></div>
											<!--end::Time-->
											<!--begin::Title-->
											<a href="#" class="fs-5 fw-bolder text-gray-800 text-hover-primary mb-2">Project Review &amp; Testing</a>
											<!--end::Title-->
											<!--begin::User-->
											<div class="text-gray-400">Lead by
											<a href="#">Karina Clarke</a></div>
											<!--end::User-->
										</div>
										<!--end::Info-->
										<!--begin::Action-->
										<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
										<!--end::Action-->
									</div>
									<!--end::Time-->
								</div>
								<!--end::Day-->
								<!--begin::Day-->
								<div id="kt_schedule_day_5" class="tab-pane fade show">
									<!--begin::Time-->
									<div class="d-flex flex-stack position-relative mt-8">
										<!--begin::Bar-->
										<div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
										<!--end::Bar-->
										<!--begin::Info-->
										<div class="fw-bold ms-5 text-gray-600">
											<!--begin::Time-->
											<div class="fs-5">10:00 - 11:00
											<span class="fs-7 text-gray-400 text-uppercase">am</span></div>
											<!--end::Time-->
											<!--begin::Title-->
											<a href="#" class="fs-5 fw-bolder text-gray-800 text-hover-primary mb-2">Development Team Capacity Review</a>
											<!--end::Title-->
											<!--begin::User-->
											<div class="text-gray-400">Lead by
											<a href="#">David Stevenson</a></div>
											<!--end::User-->
										</div>
										<!--end::Info-->
										<!--begin::Action-->
										<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
										<!--end::Action-->
									</div>
									<!--end::Time-->
									<!--begin::Time-->
									<div class="d-flex flex-stack position-relative mt-8">
										<!--begin::Bar-->
										<div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
										<!--end::Bar-->
										<!--begin::Info-->
										<div class="fw-bold ms-5 text-gray-600">
											<!--begin::Time-->
											<div class="fs-5">14:30 - 15:30
											<span class="fs-7 text-gray-400 text-uppercase">pm</span></div>
											<!--end::Time-->
											<!--begin::Title-->
											<a href="#" class="fs-5 fw-bolder text-gray-800 text-hover-primary mb-2">9 Degree Project Estimation Meeting</a>
											<!--end::Title-->
											<!--begin::User-->
											<div class="text-gray-400">Lead by
											<a href="#">Yannis Gloverson</a></div>
											<!--end::User-->
										</div>
										<!--end::Info-->
										<!--begin::Action-->
										<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
										<!--end::Action-->
									</div>
									<!--end::Time-->
									<!--begin::Time-->
									<div class="d-flex flex-stack position-relative mt-8">
										<!--begin::Bar-->
										<div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
										<!--end::Bar-->
										<!--begin::Info-->
										<div class="fw-bold ms-5 text-gray-600">
											<!--begin::Time-->
											<div class="fs-5">13:00 - 14:00
											<span class="fs-7 text-gray-400 text-uppercase">pm</span></div>
											<!--end::Time-->
											<!--begin::Title-->
											<a href="#" class="fs-5 fw-bolder text-gray-800 text-hover-primary mb-2">Team Backlog Grooming Session</a>
											<!--end::Title-->
											<!--begin::User-->
											<div class="text-gray-400">Lead by
											<a href="#">Michael Walters</a></div>
											<!--end::User-->
										</div>
										<!--end::Info-->
										<!--begin::Action-->
										<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
										<!--end::Action-->
									</div>
									<!--end::Time-->
								</div>
								<!--end::Day-->
								<!--begin::Day-->
								<div id="kt_schedule_day_6" class="tab-pane fade show">
									<!--begin::Time-->
									<div class="d-flex flex-stack position-relative mt-8">
										<!--begin::Bar-->
										<div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
										<!--end::Bar-->
										<!--begin::Info-->
										<div class="fw-bold ms-5 text-gray-600">
											<!--begin::Time-->
											<div class="fs-5">10:00 - 11:00
											<span class="fs-7 text-gray-400 text-uppercase">am</span></div>
											<!--end::Time-->
											<!--begin::Title-->
											<a href="#" class="fs-5 fw-bolder text-gray-800 text-hover-primary mb-2">9 Degree Project Estimation Meeting</a>
											<!--end::Title-->
											<!--begin::User-->
											<div class="text-gray-400">Lead by
											<a href="#">Karina Clarke</a></div>
											<!--end::User-->
										</div>
										<!--end::Info-->
										<!--begin::Action-->
										<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
										<!--end::Action-->
									</div>
									<!--end::Time-->
									<!--begin::Time-->
									<div class="d-flex flex-stack position-relative mt-8">
										<!--begin::Bar-->
										<div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
										<!--end::Bar-->
										<!--begin::Info-->
										<div class="fw-bold ms-5 text-gray-600">
											<!--begin::Time-->
											<div class="fs-5">14:30 - 15:30
											<span class="fs-7 text-gray-400 text-uppercase">pm</span></div>
											<!--end::Time-->
											<!--begin::Title-->
											<a href="#" class="fs-5 fw-bolder text-gray-800 text-hover-primary mb-2">Project Review &amp; Testing</a>
											<!--end::Title-->
											<!--begin::User-->
											<div class="text-gray-400">Lead by
											<a href="#">Sean Bean</a></div>
											<!--end::User-->
										</div>
										<!--end::Info-->
										<!--begin::Action-->
										<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
										<!--end::Action-->
									</div>
									<!--end::Time-->
									<!--begin::Time-->
									<div class="d-flex flex-stack position-relative mt-8">
										<!--begin::Bar-->
										<div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
										<!--end::Bar-->
										<!--begin::Info-->
										<div class="fw-bold ms-5 text-gray-600">
											<!--begin::Time-->
											<div class="fs-5">16:30 - 17:30
											<span class="fs-7 text-gray-400 text-uppercase">pm</span></div>
											<!--end::Time-->
											<!--begin::Title-->
											<a href="#" class="fs-5 fw-bolder text-gray-800 text-hover-primary mb-2">Lunch &amp; Learn Catch Up</a>
											<!--end::Title-->
											<!--begin::User-->
											<div class="text-gray-400">Lead by
											<a href="#">Caleb Donaldson</a></div>
											<!--end::User-->
										</div>
										<!--end::Info-->
										<!--begin::Action-->
										<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
										<!--end::Action-->
									</div>
									<!--end::Time-->
								</div>
								<!--end::Day-->
								<!--begin::Day-->
								<div id="kt_schedule_day_7" class="tab-pane fade show">
									<!--begin::Time-->
									<div class="d-flex flex-stack position-relative mt-8">
										<!--begin::Bar-->
										<div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
										<!--end::Bar-->
										<!--begin::Info-->
										<div class="fw-bold ms-5 text-gray-600">
											<!--begin::Time-->
											<div class="fs-5">11:00 - 11:45
											<span class="fs-7 text-gray-400 text-uppercase">am</span></div>
											<!--end::Time-->
											<!--begin::Title-->
											<a href="#" class="fs-5 fw-bolder text-gray-800 text-hover-primary mb-2">Marketing Campaign Discussion</a>
											<!--end::Title-->
											<!--begin::User-->
											<div class="text-gray-400">Lead by
											<a href="#">Yannis Gloverson</a></div>
											<!--end::User-->
										</div>
										<!--end::Info-->
										<!--begin::Action-->
										<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
										<!--end::Action-->
									</div>
									<!--end::Time-->
									<!--begin::Time-->
									<div class="d-flex flex-stack position-relative mt-8">
										<!--begin::Bar-->
										<div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
										<!--end::Bar-->
										<!--begin::Info-->
										<div class="fw-bold ms-5 text-gray-600">
											<!--begin::Time-->
											<div class="fs-5">13:00 - 14:00
											<span class="fs-7 text-gray-400 text-uppercase">pm</span></div>
											<!--end::Time-->
											<!--begin::Title-->
											<a href="#" class="fs-5 fw-bolder text-gray-800 text-hover-primary mb-2">Lunch &amp; Learn Catch Up</a>
											<!--end::Title-->
											<!--begin::User-->
											<div class="text-gray-400">Lead by
											<a href="#">Bob Harris</a></div>
											<!--end::User-->
										</div>
										<!--end::Info-->
										<!--begin::Action-->
										<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
										<!--end::Action-->
									</div>
									<!--end::Time-->
									<!--begin::Time-->
									<div class="d-flex flex-stack position-relative mt-8">
										<!--begin::Bar-->
										<div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
										<!--end::Bar-->
										<!--begin::Info-->
										<div class="fw-bold ms-5 text-gray-600">
											<!--begin::Time-->
											<div class="fs-5">16:30 - 17:30
											<span class="fs-7 text-gray-400 text-uppercase">pm</span></div>
											<!--end::Time-->
											<!--begin::Title-->
											<a href="#" class="fs-5 fw-bolder text-gray-800 text-hover-primary mb-2">Creative Content Initiative</a>
											<!--end::Title-->
											<!--begin::User-->
											<div class="text-gray-400">Lead by
											<a href="#">Naomi Hayabusa</a></div>
											<!--end::User-->
										</div>
										<!--end::Info-->
										<!--begin::Action-->
										<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
										<!--end::Action-->
									</div>
									<!--end::Time-->
								</div>
								<!--end::Day-->
								<!--begin::Day-->
								<div id="kt_schedule_day_8" class="tab-pane fade show">
									<!--begin::Time-->
									<div class="d-flex flex-stack position-relative mt-8">
										<!--begin::Bar-->
										<div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
										<!--end::Bar-->
										<!--begin::Info-->
										<div class="fw-bold ms-5 text-gray-600">
											<!--begin::Time-->
											<div class="fs-5">14:30 - 15:30
											<span class="fs-7 text-gray-400 text-uppercase">pm</span></div>
											<!--end::Time-->
											<!--begin::Title-->
											<a href="#" class="fs-5 fw-bolder text-gray-800 text-hover-primary mb-2">Team Backlog Grooming Session</a>
											<!--end::Title-->
											<!--begin::User-->
											<div class="text-gray-400">Lead by
											<a href="#">Naomi Hayabusa</a></div>
											<!--end::User-->
										</div>
										<!--end::Info-->
										<!--begin::Action-->
										<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
										<!--end::Action-->
									</div>
									<!--end::Time-->
									<!--begin::Time-->
									<div class="d-flex flex-stack position-relative mt-8">
										<!--begin::Bar-->
										<div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
										<!--end::Bar-->
										<!--begin::Info-->
										<div class="fw-bold ms-5 text-gray-600">
											<!--begin::Time-->
											<div class="fs-5">16:30 - 17:30
											<span class="fs-7 text-gray-400 text-uppercase">pm</span></div>
											<!--end::Time-->
											<!--begin::Title-->
											<a href="#" class="fs-5 fw-bolder text-gray-800 text-hover-primary mb-2">Weekly Team Stand-Up</a>
											<!--end::Title-->
											<!--begin::User-->
											<div class="text-gray-400">Lead by
											<a href="#">Yannis Gloverson</a></div>
											<!--end::User-->
										</div>
										<!--end::Info-->
										<!--begin::Action-->
										<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
										<!--end::Action-->
									</div>
									<!--end::Time-->
									<!--begin::Time-->
									<div class="d-flex flex-stack position-relative mt-8">
										<!--begin::Bar-->
										<div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
										<!--end::Bar-->
										<!--begin::Info-->
										<div class="fw-bold ms-5 text-gray-600">
											<!--begin::Time-->
											<div class="fs-5">16:30 - 17:30
											<span class="fs-7 text-gray-400 text-uppercase">pm</span></div>
											<!--end::Time-->
											<!--begin::Title-->
											<a href="#" class="fs-5 fw-bolder text-gray-800 text-hover-primary mb-2">Marketing Campaign Discussion</a>
											<!--end::Title-->
											<!--begin::User-->
											<div class="text-gray-400">Lead by
											<a href="#">Yannis Gloverson</a></div>
											<!--end::User-->
										</div>
										<!--end::Info-->
										<!--begin::Action-->
										<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
										<!--end::Action-->
									</div>
									<!--end::Time-->
								</div>
								<!--end::Day-->
								<!--begin::Day-->
								<div id="kt_schedule_day_9" class="tab-pane fade show">
									<!--begin::Time-->
									<div class="d-flex flex-stack position-relative mt-8">
										<!--begin::Bar-->
										<div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
										<!--end::Bar-->
										<!--begin::Info-->
										<div class="fw-bold ms-5 text-gray-600">
											<!--begin::Time-->
											<div class="fs-5">13:00 - 14:00
											<span class="fs-7 text-gray-400 text-uppercase">pm</span></div>
											<!--end::Time-->
											<!--begin::Title-->
											<a href="#" class="fs-5 fw-bolder text-gray-800 text-hover-primary mb-2">Team Backlog Grooming Session</a>
											<!--end::Title-->
											<!--begin::User-->
											<div class="text-gray-400">Lead by
											<a href="#">Walter White</a></div>
											<!--end::User-->
										</div>
										<!--end::Info-->
										<!--begin::Action-->
										<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
										<!--end::Action-->
									</div>
									<!--end::Time-->
									<!--begin::Time-->
									<div class="d-flex flex-stack position-relative mt-8">
										<!--begin::Bar-->
										<div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
										<!--end::Bar-->
										<!--begin::Info-->
										<div class="fw-bold ms-5 text-gray-600">
											<!--begin::Time-->
											<div class="fs-5">12:00 - 13:00
											<span class="fs-7 text-gray-400 text-uppercase">pm</span></div>
											<!--end::Time-->
											<!--begin::Title-->
											<a href="#" class="fs-5 fw-bolder text-gray-800 text-hover-primary mb-2">Dashboard UI/UX Design Review</a>
											<!--end::Title-->
											<!--begin::User-->
											<div class="text-gray-400">Lead by
											<a href="#">David Stevenson</a></div>
											<!--end::User-->
										</div>
										<!--end::Info-->
										<!--begin::Action-->
										<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
										<!--end::Action-->
									</div>
									<!--end::Time-->
									<!--begin::Time-->
									<div class="d-flex flex-stack position-relative mt-8">
										<!--begin::Bar-->
										<div class="position-absolute h-100 w-4px bg-secondary rounded top-0 start-0"></div>
										<!--end::Bar-->
										<!--begin::Info-->
										<div class="fw-bold ms-5 text-gray-600">
											<!--begin::Time-->
											<div class="fs-5">16:30 - 17:30
											<span class="fs-7 text-gray-400 text-uppercase">pm</span></div>
											<!--end::Time-->
											<!--begin::Title-->
											<a href="#" class="fs-5 fw-bolder text-gray-800 text-hover-primary mb-2">Committee Review Approvals</a>
											<!--end::Title-->
											<!--begin::User-->
											<div class="text-gray-400">Lead by
											<a href="#">Terry Robins</a></div>
											<!--end::User-->
										</div>
										<!--end::Info-->
										<!--begin::Action-->
										<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
										<!--end::Action-->
									</div>
									<!--end::Time-->
								</div>
								<!--end::Day-->
							</div>
							<!--end::Tab Content-->
						</div>
						<!--end::Card body-->
					</div>
					<!--end::Card-->
				</div>
				<!--end::Col-->
				<!--begin::Col-->
				<div class="col-lg-6">
					<!--begin::Card-->
					<div class="card card-flush h-lg-100">
						<!--begin::Card header-->
						<div class="card-header mt-6">
							<!--begin::Card title-->
							<div class="card-title flex-column">
								<h3 class="fw-bolder mb-1">Latest Files</h3>
								<div class="fs-6 text-gray-400">Total 382 fiels, 2,6GB space usage</div>
							</div>
							<!--end::Card title-->
							<!--begin::Card toolbar-->
							<div class="card-toolbar">
								<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View All</a>
							</div>
							<!--end::Card toolbar-->
						</div>
						<!--end::Card header-->
						<!--begin::Card body-->
						<div class="card-body p-9 pt-3">
							<!--begin::Files-->
							<div class="d-flex flex-column mb-9">
								<!--begin::File-->
								<div class="d-flex align-items-center mb-5">
									<!--begin::Icon-->
									<div class="symbol symbol-30px me-5">
										<img alt="Icon" src="assets/media/svg/files/pdf.svg" />
									</div>
									<!--end::Icon-->
									<!--begin::Details-->
									<div class="fw-bold">
										<a class="fs-6 fw-bolder text-dark text-hover-primary" href="#">Project tech requirements</a>
										<div class="text-gray-400">2 days ago
										<a href="#">Karina Clark</a></div>
									</div>
									<!--end::Details-->
									<!--begin::Menu-->
									<button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-primary btn-active-light-primary ms-auto" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
										<!--begin::Svg Icon | path: icons/duotune/general/gen024.svg-->
										<span class="svg-icon svg-icon-3">
											<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
												<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
													<rect x="5" y="5" width="5" height="5" rx="1" fill="currentColor" />
													<rect x="14" y="5" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
													<rect x="5" y="14" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
													<rect x="14" y="14" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
												</g>
											</svg>
										</span>
										<!--end::Svg Icon-->
									</button>
									<!--begin::Menu 1-->
									<div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_624475c674145">
										<!--begin::Header-->
										<div class="px-7 py-5">
											<div class="fs-5 text-dark fw-bolder">Filter Options</div>
										</div>
										<!--end::Header-->
										<!--begin::Menu separator-->
										<div class="separator border-gray-200"></div>
										<!--end::Menu separator-->
										<!--begin::Form-->
										<div class="px-7 py-5">
											<!--begin::Input group-->
											<div class="mb-10">
												<!--begin::Label-->
												<label class="form-label fw-bold">Status:</label>
												<!--end::Label-->
												<!--begin::Input-->
												<div>
													<select class="form-select form-select-solid" data-kt-select2="true" data-placeholder="Select option" data-dropdown-parent="#kt_menu_624475c674145" data-allow-clear="true">
														<option></option>
														<option value="1">Approved</option>
														<option value="2">Pending</option>
														<option value="2">In Process</option>
														<option value="2">Rejected</option>
													</select>
												</div>
												<!--end::Input-->
											</div>
											<!--end::Input group-->
											<!--begin::Input group-->
											<div class="mb-10">
												<!--begin::Label-->
												<label class="form-label fw-bold">Member Type:</label>
												<!--end::Label-->
												<!--begin::Options-->
												<div class="d-flex">
													<!--begin::Options-->
													<label class="form-check form-check-sm form-check-custom form-check-solid me-5">
														<input class="form-check-input" type="checkbox" value="1" />
														<span class="form-check-label">Author</span>
													</label>
													<!--end::Options-->
													<!--begin::Options-->
													<label class="form-check form-check-sm form-check-custom form-check-solid">
														<input class="form-check-input" type="checkbox" value="2" checked="checked" />
														<span class="form-check-label">Customer</span>
													</label>
													<!--end::Options-->
												</div>
												<!--end::Options-->
											</div>
											<!--end::Input group-->
											<!--begin::Input group-->
											<div class="mb-10">
												<!--begin::Label-->
												<label class="form-label fw-bold">Notifications:</label>
												<!--end::Label-->
												<!--begin::Switch-->
												<div class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
													<input class="form-check-input" type="checkbox" value="" name="notifications" checked="checked" />
													<label class="form-check-label">Enabled</label>
												</div>
												<!--end::Switch-->
											</div>
											<!--end::Input group-->
											<!--begin::Actions-->
											<div class="d-flex justify-content-end">
												<button type="reset" class="btn btn-sm btn-light btn-active-light-primary me-2" data-kt-menu-dismiss="true">Reset</button>
												<button type="submit" class="btn btn-sm btn-primary" data-kt-menu-dismiss="true">Apply</button>
											</div>
											<!--end::Actions-->
										</div>
										<!--end::Form-->
									</div>
									<!--end::Menu 1-->
									<!--end::Menu-->
								</div>
								<!--end::File-->
								<!--begin::File-->
								<div class="d-flex align-items-center mb-5">
									<!--begin::Icon-->
									<div class="symbol symbol-30px me-5">
										<img alt="Icon" src="assets/media/svg/files/doc.svg" />
									</div>
									<!--end::Icon-->
									<!--begin::Details-->
									<div class="fw-bold">
										<a class="fs-6 fw-bolder text-dark text-hover-primary" href="#">Create FureStibe branding proposal</a>
										<div class="text-gray-400">Due in 1 day
										<a href="#">Marcus Blake</a></div>
									</div>
									<!--end::Details-->
									<!--begin::Menu-->
									<button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-primary btn-active-light-primary ms-auto" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
										<!--begin::Svg Icon | path: icons/duotune/general/gen024.svg-->
										<span class="svg-icon svg-icon-3">
											<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
												<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
													<rect x="5" y="5" width="5" height="5" rx="1" fill="currentColor" />
													<rect x="14" y="5" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
													<rect x="5" y="14" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
													<rect x="14" y="14" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
												</g>
											</svg>
										</span>
										<!--end::Svg Icon-->
									</button>
									<!--begin::Menu 1-->
									<div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_624475c67435b">
										<!--begin::Header-->
										<div class="px-7 py-5">
											<div class="fs-5 text-dark fw-bolder">Filter Options</div>
										</div>
										<!--end::Header-->
										<!--begin::Menu separator-->
										<div class="separator border-gray-200"></div>
										<!--end::Menu separator-->
										<!--begin::Form-->
										<div class="px-7 py-5">
											<!--begin::Input group-->
											<div class="mb-10">
												<!--begin::Label-->
												<label class="form-label fw-bold">Status:</label>
												<!--end::Label-->
												<!--begin::Input-->
												<div>
													<select class="form-select form-select-solid" data-kt-select2="true" data-placeholder="Select option" data-dropdown-parent="#kt_menu_624475c67435b" data-allow-clear="true">
														<option></option>
														<option value="1">Approved</option>
														<option value="2">Pending</option>
														<option value="2">In Process</option>
														<option value="2">Rejected</option>
													</select>
												</div>
												<!--end::Input-->
											</div>
											<!--end::Input group-->
											<!--begin::Input group-->
											<div class="mb-10">
												<!--begin::Label-->
												<label class="form-label fw-bold">Member Type:</label>
												<!--end::Label-->
												<!--begin::Options-->
												<div class="d-flex">
													<!--begin::Options-->
													<label class="form-check form-check-sm form-check-custom form-check-solid me-5">
														<input class="form-check-input" type="checkbox" value="1" />
														<span class="form-check-label">Author</span>
													</label>
													<!--end::Options-->
													<!--begin::Options-->
													<label class="form-check form-check-sm form-check-custom form-check-solid">
														<input class="form-check-input" type="checkbox" value="2" checked="checked" />
														<span class="form-check-label">Customer</span>
													</label>
													<!--end::Options-->
												</div>
												<!--end::Options-->
											</div>
											<!--end::Input group-->
											<!--begin::Input group-->
											<div class="mb-10">
												<!--begin::Label-->
												<label class="form-label fw-bold">Notifications:</label>
												<!--end::Label-->
												<!--begin::Switch-->
												<div class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
													<input class="form-check-input" type="checkbox" value="" name="notifications" checked="checked" />
													<label class="form-check-label">Enabled</label>
												</div>
												<!--end::Switch-->
											</div>
											<!--end::Input group-->
											<!--begin::Actions-->
											<div class="d-flex justify-content-end">
												<button type="reset" class="btn btn-sm btn-light btn-active-light-primary me-2" data-kt-menu-dismiss="true">Reset</button>
												<button type="submit" class="btn btn-sm btn-primary" data-kt-menu-dismiss="true">Apply</button>
											</div>
											<!--end::Actions-->
										</div>
										<!--end::Form-->
									</div>
									<!--end::Menu 1-->
									<!--end::Menu-->
								</div>
								<!--end::File-->
								<!--begin::File-->
								<div class="d-flex align-items-center mb-5">
									<!--begin::Icon-->
									<div class="symbol symbol-30px me-5">
										<img alt="Icon" src="assets/media/svg/files/css.svg" />
									</div>
									<!--end::Icon-->
									<!--begin::Details-->
									<div class="fw-bold">
										<a class="fs-6 fw-bolder text-dark text-hover-primary" href="#">Completed Project Stylings</a>
										<div class="text-gray-400">Due in 1 day
										<a href="#">Terry Barry</a></div>
									</div>
									<!--end::Details-->
									<!--begin::Menu-->
									<button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-primary btn-active-light-primary ms-auto" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
										<!--begin::Svg Icon | path: icons/duotune/general/gen024.svg-->
										<span class="svg-icon svg-icon-3">
											<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
												<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
													<rect x="5" y="5" width="5" height="5" rx="1" fill="currentColor" />
													<rect x="14" y="5" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
													<rect x="5" y="14" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
													<rect x="14" y="14" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
												</g>
											</svg>
										</span>
										<!--end::Svg Icon-->
									</button>
									<!--begin::Menu 1-->
									<div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_624475c67456f">
										<!--begin::Header-->
										<div class="px-7 py-5">
											<div class="fs-5 text-dark fw-bolder">Filter Options</div>
										</div>
										<!--end::Header-->
										<!--begin::Menu separator-->
										<div class="separator border-gray-200"></div>
										<!--end::Menu separator-->
										<!--begin::Form-->
										<div class="px-7 py-5">
											<!--begin::Input group-->
											<div class="mb-10">
												<!--begin::Label-->
												<label class="form-label fw-bold">Status:</label>
												<!--end::Label-->
												<!--begin::Input-->
												<div>
													<select class="form-select form-select-solid" data-kt-select2="true" data-placeholder="Select option" data-dropdown-parent="#kt_menu_624475c67456f" data-allow-clear="true">
														<option></option>
														<option value="1">Approved</option>
														<option value="2">Pending</option>
														<option value="2">In Process</option>
														<option value="2">Rejected</option>
													</select>
												</div>
												<!--end::Input-->
											</div>
											<!--end::Input group-->
											<!--begin::Input group-->
											<div class="mb-10">
												<!--begin::Label-->
												<label class="form-label fw-bold">Member Type:</label>
												<!--end::Label-->
												<!--begin::Options-->
												<div class="d-flex">
													<!--begin::Options-->
													<label class="form-check form-check-sm form-check-custom form-check-solid me-5">
														<input class="form-check-input" type="checkbox" value="1" />
														<span class="form-check-label">Author</span>
													</label>
													<!--end::Options-->
													<!--begin::Options-->
													<label class="form-check form-check-sm form-check-custom form-check-solid">
														<input class="form-check-input" type="checkbox" value="2" checked="checked" />
														<span class="form-check-label">Customer</span>
													</label>
													<!--end::Options-->
												</div>
												<!--end::Options-->
											</div>
											<!--end::Input group-->
											<!--begin::Input group-->
											<div class="mb-10">
												<!--begin::Label-->
												<label class="form-label fw-bold">Notifications:</label>
												<!--end::Label-->
												<!--begin::Switch-->
												<div class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
													<input class="form-check-input" type="checkbox" value="" name="notifications" checked="checked" />
													<label class="form-check-label">Enabled</label>
												</div>
												<!--end::Switch-->
											</div>
											<!--end::Input group-->
											<!--begin::Actions-->
											<div class="d-flex justify-content-end">
												<button type="reset" class="btn btn-sm btn-light btn-active-light-primary me-2" data-kt-menu-dismiss="true">Reset</button>
												<button type="submit" class="btn btn-sm btn-primary" data-kt-menu-dismiss="true">Apply</button>
											</div>
											<!--end::Actions-->
										</div>
										<!--end::Form-->
									</div>
									<!--end::Menu 1-->
									<!--end::Menu-->
								</div>
								<!--end::File-->
								<!--begin::File-->
								<div class="d-flex align-items-center">
									<!--begin::Icon-->
									<div class="symbol symbol-30px me-5">
										<img alt="Icon" src="assets/media/svg/files/ai.svg" />
									</div>
									<!--end::Icon-->
									<!--begin::Details-->
									<div class="fw-bold">
										<a class="fs-6 fw-bolder text-dark text-hover-primary" href="#">Create Project Wireframes</a>
										<div class="text-gray-400">Due in 3 days
										<a href="#">Roth Bloom</a></div>
									</div>
									<!--end::Details-->
									<!--begin::Menu-->
									<button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-primary btn-active-light-primary ms-auto" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
										<!--begin::Svg Icon | path: icons/duotune/general/gen024.svg-->
										<span class="svg-icon svg-icon-3">
											<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
												<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
													<rect x="5" y="5" width="5" height="5" rx="1" fill="currentColor" />
													<rect x="14" y="5" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
													<rect x="5" y="14" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
													<rect x="14" y="14" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
												</g>
											</svg>
										</span>
										<!--end::Svg Icon-->
									</button>
									<!--begin::Menu 1-->
									<div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_624475c67479e">
										<!--begin::Header-->
										<div class="px-7 py-5">
											<div class="fs-5 text-dark fw-bolder">Filter Options</div>
										</div>
										<!--end::Header-->
										<!--begin::Menu separator-->
										<div class="separator border-gray-200"></div>
										<!--end::Menu separator-->
										<!--begin::Form-->
										<div class="px-7 py-5">
											<!--begin::Input group-->
											<div class="mb-10">
												<!--begin::Label-->
												<label class="form-label fw-bold">Status:</label>
												<!--end::Label-->
												<!--begin::Input-->
												<div>
													<select class="form-select form-select-solid" data-kt-select2="true" data-placeholder="Select option" data-dropdown-parent="#kt_menu_624475c67479e" data-allow-clear="true">
														<option></option>
														<option value="1">Approved</option>
														<option value="2">Pending</option>
														<option value="2">In Process</option>
														<option value="2">Rejected</option>
													</select>
												</div>
												<!--end::Input-->
											</div>
											<!--end::Input group-->
											<!--begin::Input group-->
											<div class="mb-10">
												<!--begin::Label-->
												<label class="form-label fw-bold">Member Type:</label>
												<!--end::Label-->
												<!--begin::Options-->
												<div class="d-flex">
													<!--begin::Options-->
													<label class="form-check form-check-sm form-check-custom form-check-solid me-5">
														<input class="form-check-input" type="checkbox" value="1" />
														<span class="form-check-label">Author</span>
													</label>
													<!--end::Options-->
													<!--begin::Options-->
													<label class="form-check form-check-sm form-check-custom form-check-solid">
														<input class="form-check-input" type="checkbox" value="2" checked="checked" />
														<span class="form-check-label">Customer</span>
													</label>
													<!--end::Options-->
												</div>
												<!--end::Options-->
											</div>
											<!--end::Input group-->
											<!--begin::Input group-->
											<div class="mb-10">
												<!--begin::Label-->
												<label class="form-label fw-bold">Notifications:</label>
												<!--end::Label-->
												<!--begin::Switch-->
												<div class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
													<input class="form-check-input" type="checkbox" value="" name="notifications" checked="checked" />
													<label class="form-check-label">Enabled</label>
												</div>
												<!--end::Switch-->
											</div>
											<!--end::Input group-->
											<!--begin::Actions-->
											<div class="d-flex justify-content-end">
												<button type="reset" class="btn btn-sm btn-light btn-active-light-primary me-2" data-kt-menu-dismiss="true">Reset</button>
												<button type="submit" class="btn btn-sm btn-primary" data-kt-menu-dismiss="true">Apply</button>
											</div>
											<!--end::Actions-->
										</div>
										<!--end::Form-->
									</div>
									<!--end::Menu 1-->
									<!--end::Menu-->
								</div>
								<!--end::File-->
							</div>
							<!--end::Files-->
							<!--begin::Notice-->
							<div class="notice d-flex bg-light-primary rounded border-primary border border-dashed p-6">
								<!--begin::Icon-->
								<!--begin::Svg Icon | path: svg/files/upload.svg-->
								<span class="svg-icon svg-icon-2tx svg-icon-primary me-4">
									<svg xmlns="http://www.w3.org/2000/svg" width="67" height="67" viewBox="0 0 67 67" fill="none">
										<path opacity="0.25" d="M8.375 11.167C8.375 6.54161 12.1246 2.79199 16.75 2.79199H43.9893C46.2105 2.79199 48.3407 3.67436 49.9113 5.24497L56.172 11.5057C57.7426 13.0763 58.625 15.2065 58.625 17.4277V55.8337C58.625 60.459 54.8754 64.2087 50.25 64.2087H16.75C12.1246 64.2087 8.375 60.459 8.375 55.8337V11.167Z" fill="#00A3FF" />
										<path d="M41.875 5.28162C41.875 3.90663 42.9896 2.79199 44.3646 2.79199V2.79199C46.3455 2.79199 48.2452 3.57889 49.6459 4.97957L56.4374 11.7711C57.8381 13.1718 58.625 15.0715 58.625 17.0524V17.0524C58.625 18.4274 57.5104 19.542 56.1354 19.542H44.6667C43.1249 19.542 41.875 18.2921 41.875 16.7503V5.28162Z" fill="#00A3FF" />
										<path d="M32.4311 25.3368C32.1018 25.4731 31.7933 25.675 31.5257 25.9427L23.1507 34.3177C22.0605 35.4079 22.0605 37.1755 23.1507 38.2657C24.2409 39.3559 26.0085 39.3559 27.0987 38.2657L30.708 34.6563V47.4583C30.708 49.0001 31.9579 50.25 33.4997 50.25C35.0415 50.25 36.2913 49.0001 36.2913 47.4583V34.6563L39.9007 38.2657C40.9909 39.3559 42.7585 39.3559 43.8487 38.2657C44.9389 37.1755 44.9389 35.4079 43.8487 34.3177L35.4737 25.9427C34.6511 25.1201 33.443 24.9182 32.4311 25.3368Z" fill="#00A3FF" />
									</svg>
								</span>
								<!--end::Svg Icon-->
								<!--end::Icon-->
								<!--begin::Wrapper-->
								<div class="d-flex flex-stack flex-grow-1">
									<!--begin::Content-->
									<div class="fw-bold">
										<h4 class="text-gray-900 fw-bolder">Quick file uploader</h4>
										<div class="fs-6 text-gray-700">Drag &amp; Drop or choose files from computer</div>
									</div>
									<!--end::Content-->
								</div>
								<!--end::Wrapper-->
							</div>
							<!--end::Notice-->
						</div>
						<!--end::Card body -->
					</div>
					<!--end::Card-->
				</div>
				<!--end::Col-->
				<!--begin::Col-->
				<div class="col-lg-6">
					<!--begin::Card-->
					<div class="card card-flush h-lg-100">
						<!--begin::Card header-->
						<div class="card-header mt-6">
							<!--begin::Card title-->
							<div class="card-title flex-column">
								<h3 class="fw-bolder mb-1">New Contibutors</h3>
								<div class="fs-6 text-gray-400">From total 482 Participants</div>
							</div>
							<!--end::Card title-->
							<!--begin::Card toolbar-->
							<div class="card-toolbar">
								<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View All</a>
							</div>
							<!--end::Card toolbar-->
						</div>
						<!--end::Card toolbar-->
						<!--begin::Card body-->
						<div class="card-body d-flex flex-column p-9 pt-3 mb-9">
							<!--begin::Item-->
							<div class="d-flex align-items-center mb-5">
								<!--begin::Avatar-->
								<div class="me-5 position-relative">
									<!--begin::Image-->
									<div class="symbol symbol-35px symbol-circle">
										<img alt="Pic" src="assets/media/avatars/300-6.jpg" />
									</div>
									<!--end::Image-->
								</div>
								<!--end::Avatar-->
								<!--begin::Details-->
								<div class="fw-bold">
									<a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary">Emma Smith</a>
									<div class="text-gray-400">8 Pending &amp; 97 Completed Tasks</div>
								</div>
								<!--end::Details-->
								<!--begin::Badge-->
								<div class="badge badge-light ms-auto">5</div>
								<!--end::Badge-->
							</div>
							<!--end::Item-->
							<!--begin::Item-->
							<div class="d-flex align-items-center mb-5">
								<!--begin::Avatar-->
								<div class="me-5 position-relative">
									<!--begin::Image-->
									<div class="symbol symbol-35px symbol-circle">
										<span class="symbol-label bg-light-danger text-danger fw-bold">M</span>
									</div>
									<!--end::Image-->
									<!--begin::Online-->
									<div class="bg-success position-absolute h-8px w-8px rounded-circle translate-middle start-100 top-100 ms-n1 mt-n1"></div>
									<!--end::Online-->
								</div>
								<!--end::Avatar-->
								<!--begin::Details-->
								<div class="fw-bold">
									<a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary">Melody Macy</a>
									<div class="text-gray-400">5 Pending &amp; 84 Completed</div>
								</div>
								<!--end::Details-->
								<!--begin::Badge-->
								<div class="badge badge-light ms-auto">8</div>
								<!--end::Badge-->
							</div>
							<!--end::Item-->
							<!--begin::Item-->
							<div class="d-flex align-items-center mb-5">
								<!--begin::Avatar-->
								<div class="me-5 position-relative">
									<!--begin::Image-->
									<div class="symbol symbol-35px symbol-circle">
										<img alt="Pic" src="assets/media/avatars/300-1.jpg" />
									</div>
									<!--end::Image-->
								</div>
								<!--end::Avatar-->
								<!--begin::Details-->
								<div class="fw-bold">
									<a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary">Max Smith</a>
									<div class="text-gray-400">9 Pending &amp; 103 Completed</div>
								</div>
								<!--end::Details-->
								<!--begin::Badge-->
								<div class="badge badge-light ms-auto">9</div>
								<!--end::Badge-->
							</div>
							<!--end::Item-->
							<!--begin::Item-->
							<div class="d-flex align-items-center mb-5">
								<!--begin::Avatar-->
								<div class="me-5 position-relative">
									<!--begin::Image-->
									<div class="symbol symbol-35px symbol-circle">
										<img alt="Pic" src="assets/media/avatars/300-5.jpg" />
									</div>
									<!--end::Image-->
								</div>
								<!--end::Avatar-->
								<!--begin::Details-->
								<div class="fw-bold">
									<a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary">Sean Bean</a>
									<div class="text-gray-400">3 Pending &amp; 55 Completed</div>
								</div>
								<!--end::Details-->
								<!--begin::Badge-->
								<div class="badge badge-light ms-auto">3</div>
								<!--end::Badge-->
							</div>
							<!--end::Item-->
							<!--begin::Item-->
							<div class="d-flex align-items-center">
								<!--begin::Avatar-->
								<div class="me-5 position-relative">
									<!--begin::Image-->
									<div class="symbol symbol-35px symbol-circle">
										<img alt="Pic" src="assets/media/avatars/300-25.jpg" />
									</div>
									<!--end::Image-->
								</div>
								<!--end::Avatar-->
								<!--begin::Details-->
								<div class="fw-bold">
									<a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary">Brian Cox</a>
									<div class="text-gray-400">4 Pending &amp; 115 Completed</div>
								</div>
								<!--end::Details-->
								<!--begin::Badge-->
								<div class="badge badge-light ms-auto">4</div>
								<!--end::Badge-->
							</div>
							<!--end::Item-->
						</div>
						<!--end::Card body-->
					</div>
					<!--end::Card-->
				</div>
				<!--end::Col-->
				<!--begin::Col-->
				<div class="col-lg-6">
					<!--begin::Tasks-->
					<div class="card card-flush h-lg-100">
						<!--begin::Card header-->
						<div class="card-header mt-6">
							<!--begin::Card title-->
							<div class="card-title flex-column">
								<h3 class="fw-bolder mb-1">My Tasks</h3>
								<div class="fs-6 text-gray-400">Total 25 tasks in backlog</div>
							</div>
							<!--end::Card title-->
							<!--begin::Card toolbar-->
							<div class="card-toolbar">
								<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View All</a>
							</div>
							<!--end::Card toolbar-->
						</div>
						<!--end::Card header-->
						<!--begin::Card body-->
						<div class="card-body d-flex flex-column mb-9 p-9 pt-3">
							<!--begin::Item-->
							<div class="d-flex align-items-center position-relative mb-7">
								<!--begin::Label-->
								<div class="position-absolute top-0 start-0 rounded h-100 bg-secondary w-4px"></div>
								<!--end::Label-->
								<!--begin::Checkbox-->
								<div class="form-check form-check-custom form-check-solid ms-6 me-4">
									<input class="form-check-input" type="checkbox" value="" />
								</div>
								<!--end::Checkbox-->
								<!--begin::Details-->
								<div class="fw-bold">
									<a href="#" class="fs-6 fw-bolder text-gray-900 text-hover-primary">Create FureStibe branding logo</a>
									<!--begin::Info-->
									<div class="text-gray-400">Due in 1 day
									<a href="#">Karina Clark</a></div>
									<!--end::Info-->
								</div>
								<!--end::Details-->
								<!--begin::Menu-->
								<button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-primary btn-active-light-primary ms-auto" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
									<!--begin::Svg Icon | path: icons/duotune/general/gen024.svg-->
									<span class="svg-icon svg-icon-3">
										<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
											<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
												<rect x="5" y="5" width="5" height="5" rx="1" fill="currentColor" />
												<rect x="14" y="5" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
												<rect x="5" y="14" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
												<rect x="14" y="14" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
											</g>
										</svg>
									</span>
									<!--end::Svg Icon-->
								</button>
								<!--begin::Menu 1-->
								<div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_624475c6753e4">
									<!--begin::Header-->
									<div class="px-7 py-5">
										<div class="fs-5 text-dark fw-bolder">Filter Options</div>
									</div>
									<!--end::Header-->
									<!--begin::Menu separator-->
									<div class="separator border-gray-200"></div>
									<!--end::Menu separator-->
									<!--begin::Form-->
									<div class="px-7 py-5">
										<!--begin::Input group-->
										<div class="mb-10">
											<!--begin::Label-->
											<label class="form-label fw-bold">Status:</label>
											<!--end::Label-->
											<!--begin::Input-->
											<div>
												<select class="form-select form-select-solid" data-kt-select2="true" data-placeholder="Select option" data-dropdown-parent="#kt_menu_624475c6753e4" data-allow-clear="true">
													<option></option>
													<option value="1">Approved</option>
													<option value="2">Pending</option>
													<option value="2">In Process</option>
													<option value="2">Rejected</option>
												</select>
											</div>
											<!--end::Input-->
										</div>
										<!--end::Input group-->
										<!--begin::Input group-->
										<div class="mb-10">
											<!--begin::Label-->
											<label class="form-label fw-bold">Member Type:</label>
											<!--end::Label-->
											<!--begin::Options-->
											<div class="d-flex">
												<!--begin::Options-->
												<label class="form-check form-check-sm form-check-custom form-check-solid me-5">
													<input class="form-check-input" type="checkbox" value="1" />
													<span class="form-check-label">Author</span>
												</label>
												<!--end::Options-->
												<!--begin::Options-->
												<label class="form-check form-check-sm form-check-custom form-check-solid">
													<input class="form-check-input" type="checkbox" value="2" checked="checked" />
													<span class="form-check-label">Customer</span>
												</label>
												<!--end::Options-->
											</div>
											<!--end::Options-->
										</div>
										<!--end::Input group-->
										<!--begin::Input group-->
										<div class="mb-10">
											<!--begin::Label-->
											<label class="form-label fw-bold">Notifications:</label>
											<!--end::Label-->
											<!--begin::Switch-->
											<div class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
												<input class="form-check-input" type="checkbox" value="" name="notifications" checked="checked" />
												<label class="form-check-label">Enabled</label>
											</div>
											<!--end::Switch-->
										</div>
										<!--end::Input group-->
										<!--begin::Actions-->
										<div class="d-flex justify-content-end">
											<button type="reset" class="btn btn-sm btn-light btn-active-light-primary me-2" data-kt-menu-dismiss="true">Reset</button>
											<button type="submit" class="btn btn-sm btn-primary" data-kt-menu-dismiss="true">Apply</button>
										</div>
										<!--end::Actions-->
									</div>
									<!--end::Form-->
								</div>
								<!--end::Menu 1-->
								<!--end::Menu-->
							</div>
							<!--end::Item-->
							<!--begin::Item-->
							<div class="d-flex align-items-center position-relative mb-7">
								<!--begin::Label-->
								<div class="position-absolute top-0 start-0 rounded h-100 bg-secondary w-4px"></div>
								<!--end::Label-->
								<!--begin::Checkbox-->
								<div class="form-check form-check-custom form-check-solid ms-6 me-4">
									<input class="form-check-input" type="checkbox" value="" />
								</div>
								<!--end::Checkbox-->
								<!--begin::Details-->
								<div class="fw-bold">
									<a href="#" class="fs-6 fw-bolder text-gray-900 text-hover-primary">Schedule a meeting with FireBear CTO John</a>
									<!--begin::Info-->
									<div class="text-gray-400">Due in 3 days
									<a href="#">Rober Doe</a></div>
									<!--end::Info-->
								</div>
								<!--end::Details-->
								<!--begin::Menu-->
								<button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-primary btn-active-light-primary ms-auto" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
									<!--begin::Svg Icon | path: icons/duotune/general/gen024.svg-->
									<span class="svg-icon svg-icon-3">
										<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
											<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
												<rect x="5" y="5" width="5" height="5" rx="1" fill="currentColor" />
												<rect x="14" y="5" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
												<rect x="5" y="14" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
												<rect x="14" y="14" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
											</g>
										</svg>
									</span>
									<!--end::Svg Icon-->
								</button>
								<!--begin::Menu 1-->
								<div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_624475c675608">
									<!--begin::Header-->
									<div class="px-7 py-5">
										<div class="fs-5 text-dark fw-bolder">Filter Options</div>
									</div>
									<!--end::Header-->
									<!--begin::Menu separator-->
									<div class="separator border-gray-200"></div>
									<!--end::Menu separator-->
									<!--begin::Form-->
									<div class="px-7 py-5">
										<!--begin::Input group-->
										<div class="mb-10">
											<!--begin::Label-->
											<label class="form-label fw-bold">Status:</label>
											<!--end::Label-->
											<!--begin::Input-->
											<div>
												<select class="form-select form-select-solid" data-kt-select2="true" data-placeholder="Select option" data-dropdown-parent="#kt_menu_624475c675608" data-allow-clear="true">
													<option></option>
													<option value="1">Approved</option>
													<option value="2">Pending</option>
													<option value="2">In Process</option>
													<option value="2">Rejected</option>
												</select>
											</div>
											<!--end::Input-->
										</div>
										<!--end::Input group-->
										<!--begin::Input group-->
										<div class="mb-10">
											<!--begin::Label-->
											<label class="form-label fw-bold">Member Type:</label>
											<!--end::Label-->
											<!--begin::Options-->
											<div class="d-flex">
												<!--begin::Options-->
												<label class="form-check form-check-sm form-check-custom form-check-solid me-5">
													<input class="form-check-input" type="checkbox" value="1" />
													<span class="form-check-label">Author</span>
												</label>
												<!--end::Options-->
												<!--begin::Options-->
												<label class="form-check form-check-sm form-check-custom form-check-solid">
													<input class="form-check-input" type="checkbox" value="2" checked="checked" />
													<span class="form-check-label">Customer</span>
												</label>
												<!--end::Options-->
											</div>
											<!--end::Options-->
										</div>
										<!--end::Input group-->
										<!--begin::Input group-->
										<div class="mb-10">
											<!--begin::Label-->
											<label class="form-label fw-bold">Notifications:</label>
											<!--end::Label-->
											<!--begin::Switch-->
											<div class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
												<input class="form-check-input" type="checkbox" value="" name="notifications" checked="checked" />
												<label class="form-check-label">Enabled</label>
											</div>
											<!--end::Switch-->
										</div>
										<!--end::Input group-->
										<!--begin::Actions-->
										<div class="d-flex justify-content-end">
											<button type="reset" class="btn btn-sm btn-light btn-active-light-primary me-2" data-kt-menu-dismiss="true">Reset</button>
											<button type="submit" class="btn btn-sm btn-primary" data-kt-menu-dismiss="true">Apply</button>
										</div>
										<!--end::Actions-->
									</div>
									<!--end::Form-->
								</div>
								<!--end::Menu 1-->
								<!--end::Menu-->
							</div>
							<!--end::Item-->
							<!--begin::Item-->
							<div class="d-flex align-items-center position-relative mb-7">
								<!--begin::Label-->
								<div class="position-absolute top-0 start-0 rounded h-100 bg-secondary w-4px"></div>
								<!--end::Label-->
								<!--begin::Checkbox-->
								<div class="form-check form-check-custom form-check-solid ms-6 me-4">
									<input class="form-check-input" type="checkbox" value="" />
								</div>
								<!--end::Checkbox-->
								<!--begin::Details-->
								<div class="fw-bold">
									<a href="#" class="fs-6 fw-bolder text-gray-900 text-hover-primary">9 Degree Porject Estimation</a>
									<!--begin::Info-->
									<div class="text-gray-400">Due in 1 week
									<a href="#">Neil Owen</a></div>
									<!--end::Info-->
								</div>
								<!--end::Details-->
								<!--begin::Menu-->
								<button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-primary btn-active-light-primary ms-auto" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
									<!--begin::Svg Icon | path: icons/duotune/general/gen024.svg-->
									<span class="svg-icon svg-icon-3">
										<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
											<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
												<rect x="5" y="5" width="5" height="5" rx="1" fill="currentColor" />
												<rect x="14" y="5" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
												<rect x="5" y="14" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
												<rect x="14" y="14" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
											</g>
										</svg>
									</span>
									<!--end::Svg Icon-->
								</button>
								<!--begin::Menu 1-->
								<div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_624475c6757fb">
									<!--begin::Header-->
									<div class="px-7 py-5">
										<div class="fs-5 text-dark fw-bolder">Filter Options</div>
									</div>
									<!--end::Header-->
									<!--begin::Menu separator-->
									<div class="separator border-gray-200"></div>
									<!--end::Menu separator-->
									<!--begin::Form-->
									<div class="px-7 py-5">
										<!--begin::Input group-->
										<div class="mb-10">
											<!--begin::Label-->
											<label class="form-label fw-bold">Status:</label>
											<!--end::Label-->
											<!--begin::Input-->
											<div>
												<select class="form-select form-select-solid" data-kt-select2="true" data-placeholder="Select option" data-dropdown-parent="#kt_menu_624475c6757fb" data-allow-clear="true">
													<option></option>
													<option value="1">Approved</option>
													<option value="2">Pending</option>
													<option value="2">In Process</option>
													<option value="2">Rejected</option>
												</select>
											</div>
											<!--end::Input-->
										</div>
										<!--end::Input group-->
										<!--begin::Input group-->
										<div class="mb-10">
											<!--begin::Label-->
											<label class="form-label fw-bold">Member Type:</label>
											<!--end::Label-->
											<!--begin::Options-->
											<div class="d-flex">
												<!--begin::Options-->
												<label class="form-check form-check-sm form-check-custom form-check-solid me-5">
													<input class="form-check-input" type="checkbox" value="1" />
													<span class="form-check-label">Author</span>
												</label>
												<!--end::Options-->
												<!--begin::Options-->
												<label class="form-check form-check-sm form-check-custom form-check-solid">
													<input class="form-check-input" type="checkbox" value="2" checked="checked" />
													<span class="form-check-label">Customer</span>
												</label>
												<!--end::Options-->
											</div>
											<!--end::Options-->
										</div>
										<!--end::Input group-->
										<!--begin::Input group-->
										<div class="mb-10">
											<!--begin::Label-->
											<label class="form-label fw-bold">Notifications:</label>
											<!--end::Label-->
											<!--begin::Switch-->
											<div class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
												<input class="form-check-input" type="checkbox" value="" name="notifications" checked="checked" />
												<label class="form-check-label">Enabled</label>
											</div>
											<!--end::Switch-->
										</div>
										<!--end::Input group-->
										<!--begin::Actions-->
										<div class="d-flex justify-content-end">
											<button type="reset" class="btn btn-sm btn-light btn-active-light-primary me-2" data-kt-menu-dismiss="true">Reset</button>
											<button type="submit" class="btn btn-sm btn-primary" data-kt-menu-dismiss="true">Apply</button>
										</div>
										<!--end::Actions-->
									</div>
									<!--end::Form-->
								</div>
								<!--end::Menu 1-->
								<!--end::Menu-->
							</div>
							<!--end::Item-->
							<!--begin::Item-->
							<div class="d-flex align-items-center position-relative mb-7">
								<!--begin::Label-->
								<div class="position-absolute top-0 start-0 rounded h-100 bg-secondary w-4px"></div>
								<!--end::Label-->
								<!--begin::Checkbox-->
								<div class="form-check form-check-custom form-check-solid ms-6 me-4">
									<input class="form-check-input" type="checkbox" value="" />
								</div>
								<!--end::Checkbox-->
								<!--begin::Details-->
								<div class="fw-bold">
									<a href="#" class="fs-6 fw-bolder text-gray-900 text-hover-primary">Dashgboard UI &amp; UX for Leafr CRM</a>
									<!--begin::Info-->
									<div class="text-gray-400">Due in 1 week
									<a href="#">Olivia Wild</a></div>
									<!--end::Info-->
								</div>
								<!--end::Details-->
								<!--begin::Menu-->
								<button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-primary btn-active-light-primary ms-auto" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
									<!--begin::Svg Icon | path: icons/duotune/general/gen024.svg-->
									<span class="svg-icon svg-icon-3">
										<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
											<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
												<rect x="5" y="5" width="5" height="5" rx="1" fill="currentColor" />
												<rect x="14" y="5" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
												<rect x="5" y="14" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
												<rect x="14" y="14" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
											</g>
										</svg>
									</span>
									<!--end::Svg Icon-->
								</button>
								<!--begin::Menu 1-->
								<div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_624475c675a38">
									<!--begin::Header-->
									<div class="px-7 py-5">
										<div class="fs-5 text-dark fw-bolder">Filter Options</div>
									</div>
									<!--end::Header-->
									<!--begin::Menu separator-->
									<div class="separator border-gray-200"></div>
									<!--end::Menu separator-->
									<!--begin::Form-->
									<div class="px-7 py-5">
										<!--begin::Input group-->
										<div class="mb-10">
											<!--begin::Label-->
											<label class="form-label fw-bold">Status:</label>
											<!--end::Label-->
											<!--begin::Input-->
											<div>
												<select class="form-select form-select-solid" data-kt-select2="true" data-placeholder="Select option" data-dropdown-parent="#kt_menu_624475c675a38" data-allow-clear="true">
													<option></option>
													<option value="1">Approved</option>
													<option value="2">Pending</option>
													<option value="2">In Process</option>
													<option value="2">Rejected</option>
												</select>
											</div>
											<!--end::Input-->
										</div>
										<!--end::Input group-->
										<!--begin::Input group-->
										<div class="mb-10">
											<!--begin::Label-->
											<label class="form-label fw-bold">Member Type:</label>
											<!--end::Label-->
											<!--begin::Options-->
											<div class="d-flex">
												<!--begin::Options-->
												<label class="form-check form-check-sm form-check-custom form-check-solid me-5">
													<input class="form-check-input" type="checkbox" value="1" />
													<span class="form-check-label">Author</span>
												</label>
												<!--end::Options-->
												<!--begin::Options-->
												<label class="form-check form-check-sm form-check-custom form-check-solid">
													<input class="form-check-input" type="checkbox" value="2" checked="checked" />
													<span class="form-check-label">Customer</span>
												</label>
												<!--end::Options-->
											</div>
											<!--end::Options-->
										</div>
										<!--end::Input group-->
										<!--begin::Input group-->
										<div class="mb-10">
											<!--begin::Label-->
											<label class="form-label fw-bold">Notifications:</label>
											<!--end::Label-->
											<!--begin::Switch-->
											<div class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
												<input class="form-check-input" type="checkbox" value="" name="notifications" checked="checked" />
												<label class="form-check-label">Enabled</label>
											</div>
											<!--end::Switch-->
										</div>
										<!--end::Input group-->
										<!--begin::Actions-->
										<div class="d-flex justify-content-end">
											<button type="reset" class="btn btn-sm btn-light btn-active-light-primary me-2" data-kt-menu-dismiss="true">Reset</button>
											<button type="submit" class="btn btn-sm btn-primary" data-kt-menu-dismiss="true">Apply</button>
										</div>
										<!--end::Actions-->
									</div>
									<!--end::Form-->
								</div>
								<!--end::Menu 1-->
								<!--end::Menu-->
							</div>
							<!--end::Item-->
							<!--begin::Item-->
							<div class="d-flex align-items-center position-relative">
								<!--begin::Label-->
								<div class="position-absolute top-0 start-0 rounded h-100 bg-secondary w-4px"></div>
								<!--end::Label-->
								<!--begin::Checkbox-->
								<div class="form-check form-check-custom form-check-solid ms-6 me-4">
									<input class="form-check-input" type="checkbox" value="" />
								</div>
								<!--end::Checkbox-->
								<!--begin::Details-->
								<div class="fw-bold">
									<a href="#" class="fs-6 fw-bolder text-gray-900 text-hover-primary">Mivy App R&amp;D, Meeting with clients</a>
									<!--begin::Info-->
									<div class="text-gray-400">Due in 2 weeks
									<a href="#">Sean Bean</a></div>
									<!--end::Info-->
								</div>
								<!--end::Details-->
								<!--begin::Menu-->
								<button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-primary btn-active-light-primary ms-auto" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
									<!--begin::Svg Icon | path: icons/duotune/general/gen024.svg-->
									<span class="svg-icon svg-icon-3">
										<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
											<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
												<rect x="5" y="5" width="5" height="5" rx="1" fill="currentColor" />
												<rect x="14" y="5" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
												<rect x="5" y="14" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
												<rect x="14" y="14" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
											</g>
										</svg>
									</span>
									<!--end::Svg Icon-->
								</button>
								<!--begin::Menu 1-->
								<div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_624475c675c2d">
									<!--begin::Header-->
									<div class="px-7 py-5">
										<div class="fs-5 text-dark fw-bolder">Filter Options</div>
									</div>
									<!--end::Header-->
									<!--begin::Menu separator-->
									<div class="separator border-gray-200"></div>
									<!--end::Menu separator-->
									<!--begin::Form-->
									<div class="px-7 py-5">
										<!--begin::Input group-->
										<div class="mb-10">
											<!--begin::Label-->
											<label class="form-label fw-bold">Status:</label>
											<!--end::Label-->
											<!--begin::Input-->
											<div>
												<select class="form-select form-select-solid" data-kt-select2="true" data-placeholder="Select option" data-dropdown-parent="#kt_menu_624475c675c2d" data-allow-clear="true">
													<option></option>
													<option value="1">Approved</option>
													<option value="2">Pending</option>
													<option value="2">In Process</option>
													<option value="2">Rejected</option>
												</select>
											</div>
											<!--end::Input-->
										</div>
										<!--end::Input group-->
										<!--begin::Input group-->
										<div class="mb-10">
											<!--begin::Label-->
											<label class="form-label fw-bold">Member Type:</label>
											<!--end::Label-->
											<!--begin::Options-->
											<div class="d-flex">
												<!--begin::Options-->
												<label class="form-check form-check-sm form-check-custom form-check-solid me-5">
													<input class="form-check-input" type="checkbox" value="1" />
													<span class="form-check-label">Author</span>
												</label>
												<!--end::Options-->
												<!--begin::Options-->
												<label class="form-check form-check-sm form-check-custom form-check-solid">
													<input class="form-check-input" type="checkbox" value="2" checked="checked" />
													<span class="form-check-label">Customer</span>
												</label>
												<!--end::Options-->
											</div>
											<!--end::Options-->
										</div>
										<!--end::Input group-->
										<!--begin::Input group-->
										<div class="mb-10">
											<!--begin::Label-->
											<label class="form-label fw-bold">Notifications:</label>
											<!--end::Label-->
											<!--begin::Switch-->
											<div class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
												<input class="form-check-input" type="checkbox" value="" name="notifications" checked="checked" />
												<label class="form-check-label">Enabled</label>
											</div>
											<!--end::Switch-->
										</div>
										<!--end::Input group-->
										<!--begin::Actions-->
										<div class="d-flex justify-content-end">
											<button type="reset" class="btn btn-sm btn-light btn-active-light-primary me-2" data-kt-menu-dismiss="true">Reset</button>
											<button type="submit" class="btn btn-sm btn-primary" data-kt-menu-dismiss="true">Apply</button>
										</div>
										<!--end::Actions-->
									</div>
									<!--end::Form-->
								</div>
								<!--end::Menu 1-->
								<!--end::Menu-->
							</div>
							<!--end::Item-->
						</div>
						<!--end::Card body-->
					</div>
					<!--end::Tasks-->
				</div>
				<!--end::Col-->
			</div>
			<!--end::Row-->--}}
			{{--
			<!--begin::Table depenses-->
			<div class="card card-flush mt-6 mt-xl-9" id="depenses">
				<!--begin::Card header-->
				<div class="card-header mt-5">
					<!--begin::Card title-->
					<div class="card-title flex-column">
						<h3 class="fw-bolder mb-1">Dépenses du projet</h3>
						<div class="fs-6 text-gray-400">Total de {{number_format($depenseTotal, 0, ',', ' ')}}  F CFA dépensés jusqu'à présent</div>
					</div>
					<!--begin::Card title-->
					<!--begin::Card toolbar-->
					<div class="card-toolbar my-1">
						
						<!--begin::Search-->
						<div class="d-flex align-items-center position-relative my-1">
							<!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
							<span class="svg-icon svg-icon-3 position-absolute ms-3">
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
									<rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="currentColor" />
									<path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="currentColor" />
								</svg>
							</span>
							<!--end::Svg Icon-->
							<input type="text" id="kt_filter_search" class="form-control form-control-solid form-select-sm w-150px ps-9" placeholder="Rechercher" />
						</div>
						<!--end::Search-->
					</div>
					<!--begin::Card toolbar-->
				</div>
				<!--end::Card header-->

				<!--begin::Card body-->
				<div class="card-body pt-0">
					<!--begin::Table container-->
					<div class="table-responsive">
						<!--begin::Table-->
						<table id="kt_profile_overview_table" class="table table-row-bordered table-row-dashed gy-4 align-middle fw-bolder">
							<!--begin::Head-->
							<thead class="fs-7 text-gray-400 text-uppercase">
								<tr>
									<th class="min-w-250px">Manager</th>
									<th class="min-w-150px">Date</th>
									<th class="min-w-90px">Montant</th>
									<th class="min-w-90px">Status</th>
									<th class="min-w-50px text-end">Details</th>
								</tr>
							</thead>
							<!--end::Head-->
							<!--begin::Body-->
							<tbody class="fs-6">
								@foreach ($depenses as $item)
								<tr>
									<td>
										<!--begin::User-->
										<div class="d-flex align-items-center">
											<!--begin::Wrapper-->
											<div class="me-5 position-relative">
												<!--begin::Avatar-->
												<div class="symbol symbol-35px symbol-circle">
												<!--
													<img alt="Pic" src="assets/media/avatars/300-6.jpg" />
													-->
												</div>
												<!--end::Avatar-->
											</div>
											<!--end::Wrapper-->
											<!--begin::Info-->
											<div class="d-flex flex-column justify-content-center">
												<a href="" class="fs-6 text-gray-800 text-hover-primary">{{$item->name}}</a>

												<div class="fw-bold text-gray-400"></div>

											</div>
											<!--end::Info-->
										</div>
										<!--end::User-->
									</td>
									<td>{{ \Carbon\Carbon::parse($item->created_at)->locale('fr')->translatedFormat('D d M Y') }}</td>
									<td>{{number_format($item->montant, 0, ',', ' ')}} F CFA</td>
									<td>
										<!--
										<span class="badge badge-light-danger fw-bolder px-4 py-3">Rejected</span>
										-->
									</td>
									<td class="text-end">
										<!--
										<a href="#" class="btn btn-light btn-sm">View</a>
										-->
									</td>
								</tr>
								@endforeach
								
								
								
							</tbody>
							<!--end::Body-->
						</table>
						<!--end::Table-->
					</div>
					<!--end::Table container-->
				</div>
				<!--end::Card body-->
			</div>
			<!--end::Card-->
			--}}


			<!--begin::Table Partenaires-->
			{{--<div class="card card-flush mt-6 mt-xl-9" id="partenaires">
				<!--begin::Card header-->
				<div class="card-header mt-5">
					<!--begin::Card title-->
					<div class="card-title flex-column">
						<h3 class="fw-bolder mb-1">Liste des partenaires</h3>
						<div class="fs-6 text-gray-400">Total de {{number_format($cotisationTotal, 0, ',', ' ')}}  F CFA dépensés jusqu'à présent</div>
					</div>
					<!--begin::Card title-->
					<!--begin::Card toolbar-->
					<div class="card-toolbar my-1">
						
						<!--begin::Search-->
						<div class="d-flex align-items-center position-relative my-1">
							<!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
							<span class="svg-icon svg-icon-3 position-absolute ms-3">
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
									<rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="currentColor" />
									<path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="currentColor" />
								</svg>
							</span>
							<!--end::Svg Icon-->
							<input type="text" id="kt_filter_search" class="form-control form-control-solid form-select-sm w-150px ps-9" placeholder="Rechercher" />
						</div>
						<!--end::Search-->
					</div>
					<!--begin::Card toolbar-->
				</div>
				<!--end::Card header-->

				<!--begin::Card body-->
				<div class="card-body pt-0">
					<!--begin::Table container-->
					<div class="table-responsive">
						<!--begin::Table-->
						<table id="kt_profile_overview_table" class="table table-row-bordered table-row-dashed gy-4 align-middle fw-bolder">
							<!--begin::Head-->
							<thead class="fs-7 text-gray-400 text-uppercase">
								<tr>
									<th class="min-w-250px">Nom</th>
									<th class="min-w-150px">Date</th>
									<th class="min-w-90px">Montant</th>
									<th class="min-w-90px">Status</th>
									<th class="min-w-50px text-end">Details</th>
								</tr>
							</thead>
							<!--end::Head-->
							<!--begin::Body-->
							<tbody class="fs-6">
							@foreach ($projet->projectbypartenaire as $partenaire)
								<tr>
									<td>
										<!--begin::User-->
										<div class="d-flex align-items-center">
											<!--begin::Wrapper-->
											<div class="me-5 position-relative">
												<!--begin::Avatar-->
												<div class="symbol symbol-35px symbol-circle">
												<!--
													<img alt="Pic" src="assets/media/avatars/300-6.jpg" />
													-->
												</div>
												<!--end::Avatar-->
											</div>
											<!--end::Wrapper-->
											<!--begin::Info-->
											<div class="d-flex flex-column justify-content-center">
												<a href="" class="fs-6 text-gray-800 text-hover-primary">{{$partenaire->name}}</a>

												<div class="fw-bold text-gray-400"></div>

											</div>
											<!--end::Info-->
										</div>
										<!--end::User-->
									</td>
									<td>{{ \Carbon\Carbon::parse($partenaire->created_at)->locale('fr')->translatedFormat('D d M Y') }}</td>
									<td>{{number_format($partenaire->montant, 0, ',', ' ')}} F CFA</td>
									<td>
										<!--
										<span class="badge badge-light-danger fw-bolder px-4 py-3">Rejected</span>
										-->
									</td>
									<td class="text-end">
										<!--
										<a href="#" class="btn btn-light btn-sm">View</a>
										-->
									</td>
								</tr>
								@endforeach
								
								
								
							</tbody>
							<!--end::Body-->
						</table>
						<!--end::Table-->
					</div>
					<!--end::Table container-->
				</div>
				<!--end::Card body-->
			</div>--}}
			<!--end::Card-->
		</div>
		<!--end::Container-->
	</div>
	<!--end::Post-->
</div>
<!--end::Content-->
@endsection